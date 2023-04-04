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
            form: this.rootElement.querySelector("form"),
        };
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