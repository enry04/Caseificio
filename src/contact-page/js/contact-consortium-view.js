import ContactConsortiumManager from "./contact-consortium-manager.js";

const parentElement = document.querySelector("main");
const contactConsortiumManager = new ContactConsortiumManager(parentElement);
contactConsortiumManager.init();