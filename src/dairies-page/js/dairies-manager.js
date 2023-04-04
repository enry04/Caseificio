import CookieManager from "../../common/js/cookie-manager.js";
class DairiesManager {
    constructor(parentElement) {
        this.rootElement = parentElement;
        this.currentId;
        this.elements = {};
        const parser = new DOMParser();
        const parkTemplate =
            '<div class="item-container"><div class="dairy-image-container"></div><div class="info-container"><h5 class="dairy-title-text"></h5><h6 class="dairy-description-text"></h6><input type="button" value="Dettagli" class="details-btn" /></div></div></div>';
        const templateElement = parser.parseFromString(parkTemplate, "text/html");
        this.template = templateElement.documentElement.querySelector("body > div");
    }

    init() {
        this.initElements();
        this.initEventListeners();
    }

    initElements() {
        this.elements = {
            image: this.template.querySelector(".dairy-image-container"),
            parkTitle: this.template.querySelector(".dairy-title-text"),
            parkDescription: this.template.querySelector(".dairy-description-text"),
            detailsBtn: this.template.querySelector(".details-btn"),
        };
        this.rootElement.appendChild(this.template);
        if (CookieManager.getCookie("user_type") == "consorzio") {
            this.elements.detailsBtn.value = "Modifica dati";
        } else {
            this.elements.detailsBtn.value = "Dettagli";
        }
    }

    initEventListeners() {
        this.elements.detailsBtn.addEventListener("click", () => {
            let valueToSend = new URLSearchParams();
            valueToSend.append("dairyId", this.currentId);
            if (CookieManager.getCookie("user_type") == "consorzio") {
                location.href = "../dairy-manager-page/dairy-manager.php?" + valueToSend.toString();
            } else {
                location.href = "../dairy-page/dairy.php?" + valueToSend.toString();
            }
        });
    }

    setId(id) {
        this.currentId = id;
    }

    setName(name) {
        this.elements.parkTitle.innerHTML = name;
    }

    setDescription(description) {
        this.elements.parkDescription.innerHTML = description;
    }

    setImg(img) {
        this.elements.image.style.backgroundImage = `url(${img})`;
    }
}

export default DairiesManager;