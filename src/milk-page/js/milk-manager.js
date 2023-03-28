import FetchUtil from "../../common/js/fetch-util.js";

class MilkManager {
    constructor(parentElement, dairyName, dairyCode, dairyId) {
        this.rootElement = parentElement;
        this.elements = {};
        this.dairyName = dairyName;
        this.dairyCode = dairyCode;
        this.dairyId = dairyId;
    }
    init() {
        this.initElements();
        this.initEventListeners();
    }

    initElements() {
        this.elements = {
            milkProducedNumber: this.rootElement.querySelector(".milk-produced-number"),
            milkUsedNumber: this.rootElement.querySelector(".milk-used-number"),
            date: this.rootElement.querySelector(".current-date"),
            form: this.rootElement.querySelector("form"),
        };
        this.rootElement.querySelector(".dairy-text").value = this.dairyName + " (" + this.dairyCode + ")";
    }

    initEventListeners() {
        this.elements.form.addEventListener("submit", (event) => {
            event.preventDefault();
            const milkData = {
                dairyId: this.dairyId,
                milkProduced: this.elements.milkProducedNumber.value,
                milkUsed: this.elements.milkUsedNumber.value,
                date: this.elements.date.value
            }
            FetchUtil.postData("./php/insert-milk.php", milkData).then((response) => {
                if(response.status == "error"){
                    console.log(response.data);
                }else {
                    this.elements.form.reset();
                }
            });
        });
    }
}

export default MilkManager;