import FetchUtil from "../../common/js/fetch-util.js";

class DairyManager {
    constructor(parentElement, dairyId) {
        this.rootElement = parentElement;
        this.elements = {};
        this.dairyId = dairyId;
    }

    init() {
        this.initElements();
        this.initEventlisteners();
    }

    initElements() {
        this.elements = {
            title: this.rootElement.querySelector(".dairy-title"),
            holder: this.rootElement.querySelector(".holder-text"),
            description: this.rootElement.querySelector(".description-text"),
            form: this.rootElement.querySelector("form"),
            infoText: document.querySelector(".info-text"),
        };
    }

    initEventlisteners() {
        this.elements.form.addEventListener("submit", (event) => {
            event.preventDefault();
            const dairyData = {
                dairyId: this.dairyId,
                title: this.elements.title.value,
                holder: this.elements.holder.value,
                description: this.elements.description.value,
            }
            console.log(dairyData);
            FetchUtil.postData("./php/update-dairy.php", dairyData).then((response) => {
                if (response.status == "success") {
                    this.elements.infoText.textContent = 'Dati modificati con successo!';
                    this.elements.infoText.classList.toggle("hide-info", false);
                    this.elements.infoText.classList.toggle("show-info", true);
                    setTimeout(() => {
                        this.elements.infoText.classList.toggle("hide-info", true);
                        this.elements.infoText.classList.toggle("show-info", false);
                    }, 2500)
                } else {
                    console.log(response.data);
                }
            });
        });
    }

    setTitle(title) {
        this.elements.title.value = title;
    }

    setHolder(holder) {
        this.elements.holder.value = holder;
    }

    setDescription(description) {
        this.elements.description.value = description;
    }
}

export default DairyManager;