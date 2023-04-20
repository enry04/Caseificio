import FetchUtil from "../../common/js/fetch-util.js";

class MainManager {
    constructor(parentElement) {
        this.rootElement = parentElement;
        this.elements = {};
    }

    init() {
        this.initElements();
        this.readData();
    }

    initElements() {
        this.elements = {
            quantityMilk: this.rootElement.querySelector(".quantity-milk"),
            usedMilk: this.rootElement.querySelector(".used-milk"),
            productedCheese: this.rootElement.querySelector(".producted-cheese"),
            selledCheese: this.rootElement.querySelector(".selled-cheese"),
        }
    }

    readData() {
        FetchUtil.postData("./php/read-quantity-milk.php", {}).then((response) => {
            if (response.status == "success") {
                let parseData = JSON.parse(response.data);
                if (parseData['totale'] == null || parseData['totale'] == undefined) {
                    this.elements.quantityMilk.textContent = "0";
                } else {
                    this.elements.quantityMilk.textContent = parseData['totale'];
                }
            } else {
                console.log(response.status);
            }
        });

        FetchUtil.postData("./php/read-used-milk.php", {}).then((response) => {
            if (response.status == "success") {
                let parseData = JSON.parse(response.data);
                if (parseData['totale'] == null || parseData['totale'] == undefined) {
                    this.elements.usedMilk.textContent = "0";
                } else {
                    this.elements.usedMilk.textContent = parseData['totale'];
                }
            } else {
                console.log(response.status);
            }
        });

        FetchUtil.postData("./php/read-producted-cheese.php", {}).then((response) => {
            if (response.status == "success") {
                let parseData = JSON.parse(response.data);
                if (parseData['totale'] == null || parseData['totale'] == undefined) {
                    this.elements.productedCheese.textContent = "0";
                } else {
                    this.elements.productedCheese.textContent = parseData['totale'];
                }
            } else {
                console.log(response.status);
            }
        });

        FetchUtil.postData("./php/read-selled-cheese.php", {}).then((response) => {
            if (response.status == "success") {
                let parseData = JSON.parse(response.data);
                if (parseData['totale'] == null || parseData['totale'] == undefined) {
                    this.elements.selledCheese.textContent = "0";
                } else {
                    this.elements.selledCheese.textContent = parseData['totale'];
                }
            } else {
                console.log(response.status);
            }
        });
    }
}

export default MainManager