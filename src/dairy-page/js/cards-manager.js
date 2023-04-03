class CardsManager {
    constructor(parentElement) {
        this.rootElement = parentElement;
        this.elements = {};
    }

    init() {
        this.initElements();
        this.initEventListeners();
    }

    initElements() {
        this.elements = {
            producedMilk: this.rootElement.querySelector(".produced-milk-span"),
            usedMilk: this.rootElement.querySelector(".used-milk-span"),
            productedCheese: this.rootElement.querySelector(".quantity-cheese-span"),
            selledCheese: this.rootElement.querySelector(".selled-cheese-span"),
            milkAverage: this.rootElement.querySelector(".milk-average-span"),
            province: this.rootElement.querySelector(".card-province-span"),
            form: this.rootElement.querySelector("form"),
            firstDate: this.rootElement.querySelector(".first-date"),
            secondDate: this.rootElement.querySelector(".second-date"),
            resultText: this.rootElement.querySelector(".result-text"),
            firstDateText: this.rootElement.querySelector(".first-date-span"),
            secondDateText: this.rootElement.querySelector(".second-date-span"),
        }
    }

    initEventListeners() {
        this.elements.form.addEventListener("submit", (event) => {
            event.preventDefault();
        });
    }

    setProvince(province){
        this.elements.province.textContent = province;
    }

    setProducedMilk(milk){
        this.elements.producedMilk.textContent = milk;
    }

    setUsedMilk(milk){
        this.elements.usedMilk.textContent = milk;
    }

    setProductedCheese(cheese){
        this.elements.productedCheese.textContent = cheese;
    }

    setSelledCheese(cheese){
        this.elements.selledCheese.textContent = cheese;
    }

    setMilkAverage(milk){
        this.elements.milkAverage.textContent = milk;
    }
}

export default CardsManager;