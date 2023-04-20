import FetchUtil from "../../common/js/fetch-util.js";

class ContactConsortiumManager {
    constructor(parentElement) {
        this.rootElement = parentElement;
        this.elements = {};
    }

    init() {
        this.initElements();
        this.initEventsListener();
    }

    initElements() {
        this.elements = {
            email: this.rootElement.querySelector(".email-text"),
            message: this.rootElement.querySelector(".second-textarea"),
            form: this.rootElement.querySelector(".second-form"),
            infoText: document.querySelector(".info-text"),
        }
    }

    initEventsListener() {
        this.elements.form.addEventListener("submit", (event) => {
            event.preventDefault();
            const messageData = {
                email: this.elements.email.value,
                message: this.elements.message.value,
                receiver: 'consorzio',
            }
            FetchUtil.postData("./php/insert-message.php", messageData).then((response) => {
                if (response.status == "success") {
                    this.elements.infoText.textContent = 'Messaggio inviato con successo!';
                    this.elements.infoText.classList.toggle("hide-info", false);
                    this.elements.infoText.classList.toggle("show-info", true);
                    setTimeout(() => {
                        this.elements.infoText.classList.toggle("hide-info", true);
                        this.elements.infoText.classList.toggle("show-info", false);
                    }, 2500)
                } else {
                    console.log(response.data);
                }
            })
        });
    }
}

export default ContactConsortiumManager;