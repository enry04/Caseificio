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
            date: this.rootElement.querySelector(".current-date"),
            form: this.rootElement.querySelector("form"),
            infoText: document.querySelector(".info-text"),
        }
        this.rootElement.querySelector(".dairy-text").value = this.dairyName + " (" + this.dairyCode + ")";
    }

    initEventListeners() {
        //codice caseificio + mese e anno + numeroProgressivoMese (min 10cifre)
        //leggere codice proggressivo mese
        const sequentialNumData = {
            dairyId: this.dairyId,
            date: this.elements.date,
        }
        FetchUtil.postData("./php/read-last-sequential-code.php", sequentialNumData).then((response) => {
        });
        //ciclare per quanittà e aggiungere forma
    }
}

export default ShapeManager;