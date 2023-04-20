import FetchUtil from "../../common/js/fetch-util.js";

class CardsManager {
    constructor(parentElement, dairyId) {
        this.rootElement = parentElement;
        this.elements = {};
        this.dairyId = dairyId;
        this.months = ['gennaio', 'febbraio', 'marzo', 'aprile', 'maggio', 'giugno', 'luglio', 'agosto', 'settembre', 'ottobre', 'novembre', 'dicembre'];
    }

    init() {
        this.initElements();
        this.initEventListeners();
    }

    initElements() {
        this.elements = {
            cardsTitle: this.rootElement.querySelector(".card-title"),
            titleProvince: this.rootElement.querySelector(".province-text"),
            cardProvince: this.rootElement.querySelector(".card-province"),
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
            productedCheeseBetweenDates: this.rootElement.querySelector(".cheese-producted-between-dates-span"),
            firstDateText: this.rootElement.querySelector(".first-date-span"),
            secondDateText: this.rootElement.querySelector(".second-date-span"),
        }
    }

    initEventListeners() {
        this.elements.form.addEventListener("submit", (event) => {
            event.preventDefault();
            const dateData = {
                dairyId: this.dairyId,
                firstDate: this.elements.firstDate.value,
                secondDate: this.elements.secondDate.value,
            }
            if (dateData.firstDate > dateData.secondDate) {
                let temp = dateData.firstDate;
                dateData.firstDate = dateData.secondDate;
                dateData.secondDate = temp;
            }
            FetchUtil.postData("./php/read-cheese-between-dates.php", dateData).then((response) => {
                if (response.status == "success") {
                    if (dateData.firstDate == dateData.secondDate) {
                        this.elements.resultText.classList.toggle("hide", false);
                        this.elements.resultText.textContent = 'Nella giornata del ' + new Date(dateData.firstDate).getDate() + ' ' + this.months[new Date(dateData.firstDate).getMonth()] + ' ' + new Date(dateData.firstDate).getFullYear() + ' sono state prodotte ' + response.data['totale'] + ' forme di formaggio';
                    } else {
                        this.elements.resultText.classList.toggle("hide", false);
                        this.elements.resultText.textContent = 'Tra il ' + new Date(dateData.firstDate).getDate() + ' ' + this.months[new Date(dateData.firstDate).getMonth()] + ' ' + new Date(dateData.firstDate).getFullYear() + ' e il ' + new Date(dateData.secondDate).getDate() + ' ' + this.months[new Date(dateData.secondDate).getMonth()] + ' ' + new Date(dateData.secondDate).getFullYear() + ' sono state prodotte ' + response.data['totale'] + ' forme di formaggio';
                        this.elements.productedCheeseBetweenDates.textContent = response.data['totale'];
                    }
                } else {
                    console.log(response);
                }
            });
        });
    }

    setCardTitle(title) {
        this.elements.cardsTitle.textContent = title;
    }

    setTitleProvince(province) {
        this.elements.titleProvince.textContent = province;
    }

    setCardProvince(province) {
        this.elements.cardProvince.textContent = province;
    }

    setProvince(province) {
        this.elements.province.textContent = province;
    }

    setProductedMilk(milk) {
        this.elements.producedMilk.textContent = milk;
    }

    setUsedMilk(milk) {
        this.elements.usedMilk.textContent = milk;
    }

    setProductedCheese(cheese) {
        this.elements.productedCheese.textContent = cheese;
    }

    setSelledCheese(cheese) {
        this.elements.selledCheese.textContent = cheese;
    }

    setMilkAverage(milk) {
        this.elements.milkAverage.textContent = milk;
    }
}

export default CardsManager;