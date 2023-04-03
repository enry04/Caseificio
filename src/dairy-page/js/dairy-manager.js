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

}

export default DairyManager;