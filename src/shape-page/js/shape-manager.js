import FetchUtil from "../../common/js/fetch-util.js";

class ShapeManager {
    constructor(parentElement, dairyData) {
        this.rootElement = parentElement;
        this.dairyName = dairyData["name"];
        this.dairyCode = dairyData["code"];
        this.dairyId = dairyData["id"];
        this.elements = {};
    }

    init() {
        this.initElements();
        this.initEventListeners();
    }

    initElements() {
        this.elements = {
            seasoningSelect: this.rootElement.querySelector(".seasoning-select"),
            typologySelect: this.rootElement.querySelector(".typology-select"),
            quantityNumber: this.rootElement.querySelector(".quantity-number"),
            date: this.rootElement.querySelector(".current-date"),
            form: this.rootElement.querySelector("form"),
            infoText: document.querySelector(".info-text"),
        }
        this.rootElement.querySelector(".dairy-text").value = this.dairyName + " (" + this.dairyCode + ")";
    }

    initEventListeners() {
        //codice caseificio + mese e anno + numeroProgressivoMese (min 10cifre)
        this.elements.form.addEventListener("submit", async (event) => {
            let isOk = false;
            event.preventDefault();
            const sequentialNumData = {
                dairyId: this.dairyId,
                date: this.elements.date.value,
            }
            let lastNum;
            await FetchUtil.postData("./php/read-last-sequential-code.php", sequentialNumData).then((response) => {
                if (response.status == "success") {
                    if (response.data['max'] == undefined || response.data['max'] == null) {
                        lastNum = 1;
                    } else {
                        lastNum = parseInt(response.data['max']) + 1;
                    }
                } else {
                    console.log(response.status);
                }
            });
            for (let i = 0; i < this.elements.quantityNumber.value; i++) {
                let month;
                if (new Date(this.elements.date.value).getMonth() + 1 < 10) {
                    month = '0' + (new Date(this.elements.date.value).getMonth() + 1);
                } else {
                    month = new Date(this.elements.date.value).getMonth();
                }
                const cheeseData = {
                    seasoningId: parseInt(this.elements.seasoningSelect.value),
                    dairyId: parseInt(this.dairyId),
                    code: this.dairyCode + month + new Date(this.elements.date.value).getFullYear() + lastNum,
                    sequentialNumber: parseInt(lastNum),
                    date: this.elements.date.value,
                    typology: this.elements.typologySelect.value,
                }
                await FetchUtil.postData("./php/insert-shape.php", cheeseData).then((response) => {
                    if (response.status == "success") {
                        isOk = true;
                    } else {
                        isOk = false;
                        console.log(response.data);
                    }
                });
                lastNum++
            }
            if (isOk) {
                this.elements.infoText.innerHTML = 'Forme aggiunte con successo! <br> I codici da stampare si trovano nella pagina "Codici da stampare"';
                this.elements.infoText.classList.toggle("hide-info", false);
                this.elements.infoText.classList.toggle("show-info", true);
                setTimeout(() => {
                    this.elements.infoText.classList.toggle("hide-info", true);
                    this.elements.infoText.classList.toggle("show-info", false);
                }, 2500)
                this.elements.seasoningSelect.value = "";
                this.elements.typologySelect.value = "";
                this.elements.quantityNumber.value = 1;
                // location.href = "../codes-page/codes.php";
            }
        })
        //ciclare per quanittà e aggiungere forma
    }
}

export default ShapeManager;