class DairyManager {
    constructor(parentElement) {
        this.rootElement = parentElement;
        this.elements = {};
    }

    init() {
        this.initElements();
    }

    initElements() {
        this.elements = {
            title: this.rootElement.querySelector(".dairy-title"),
            holder: this.rootElement.querySelector(".holder-text"),
            description: this.rootElement.querySelector(".description-text"),
            place: this.rootElement.querySelector(".place-text"),
            coordinates: this.rootElement.querySelector(".coordinates-text"),
            cardsTitle: this.rootElement.querySelector(".card-title"),
            province: this.rootElement.querySelector(".province-text"),
            cardProvince: this.rootElement.querySelector(".card-province")
        };
    }

    setTitle(title){
        this.elements.title.textContent = title;
    }

    setHolder(holder){
        this.elements.holder.textContent = holder;
    }

    setDescription(description){
        this.elements.description.textContent = description;
    }

    setPlace(place){
        this.elements.place.textContent = place;
    }

    setCoordinates(coordinates){
        this.elements.coordinates.textContent = coordinates;
    }

    setCardTitle(title){
        this.elements.cardsTitle.textContent = title;
    }

    setProvince(province){
        this.elements.province.textContent = province;
    }

    setCardProvince(province){
        this.elements.cardProvince.textContent = province;
    }

}

export default DairyManager;