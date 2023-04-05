class DairyManager {
    constructor(parentElement) {
        this.rootElement = parentElement;
        this.elements = {};
    }

    init() {
        this.initElements();
        this.initEventlisteners();
    }

    initElements() {
        this.elements = {
            title: this.rootElement.querySelector(".dairy-title"),
            holder: this.rootElement.querySelector(".holder-text"),
            description: this.rootElement.querySelector(".description-text"),
            form: this.rootElement.querySelector("form"),
        };
    }

    initEventlisteners() {
        this.elements.form.addEventListener("submit", (event) => {
            event.preventDefault();
        });
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