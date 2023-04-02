class SliderManager {
    constructor(parentElement) {
        this.rootElement = parentElement;
        this.elements = {};
        this.currentActive = 1;
        this.nImages;
        this.images = [];
    }

    init() {
        this.setData();
        this.initElements();
        this.initEventListeners();
    }

    initElements() {
        this.elements = {
            images: this.rootElement.querySelectorAll(".slide-image-container"),
            prevBtn: this.rootElement.querySelector(".prev"),
            nextBtn: this.rootElement.querySelector(".next"),
            dots: this.rootElement.querySelectorAll(".dot"),
        };
        this.setActive();
    }

    initEventListeners() {
        this.elements.prevBtn.addEventListener("click", (event) => {
            this.currentActive--;
            if (this.currentActive < 1) {
                this.currentActive = this.nImages;
            }
            this.setActive();
        });

        this.elements.nextBtn.addEventListener("click", (event) => {
            this.currentActive++;
            if (this.currentActive > this.nImages) {
                this.currentActive = 1;
            }
            this.setActive();
        });
        this.elements.dots.forEach((dot) => {
            dot.addEventListener("click", (event) => {
                this.currentActive = event.target.id;
                this.setActive();
            });
        });
    }

    setActive() {
        for (let i = 0; i < this.elements.images.length; i++) {
            if (this.elements.images[i].id == this.currentActive) {
                this.elements.images[i].classList.toggle("show", true);
                this.elements.images[i].classList.toggle("hide", false);
                this.elements.dots[i].classList.toggle("selected", true);
            } else {
                this.elements.images[i].classList.toggle("show", false);
                this.elements.images[i].classList.toggle("hide", true);
                this.elements.dots[i].classList.toggle("selected", false);
            }
        }
    }

    setImagesIndex(nImages) {
        this.nImages = nImages;
    }

    setImage(img) {
        this.images.push(img);
    }

    setData() {
        for (let i = 0; i < this.nImages; i++) {
            let div = document.createElement("div");
            div.classList.toggle("slide-image-container", true);
            div.classList.toggle("fade", true);
            div.classList.toggle("hide", true);
            div.id = i + 1;
            div.style.backgroundImage = `url(${this.images[i]})`;
            this.rootElement.appendChild(div);
        }

        let div = document.createElement("div");
        div.classList.toggle("dots-container", true);
        this.rootElement.appendChild(div);
        for (let i = 0; i < this.nImages; i++) {
            let span = document.createElement("span");
            span.classList.toggle("dot", true);
            span.id = i + 1;
            this.rootElement.querySelector(".dots-container").appendChild(span);
        }
    }

}
export default SliderManager;
