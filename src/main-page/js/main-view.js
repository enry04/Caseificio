import MainManager from "./main-manager.js";

const parentElement = document.querySelector(".secondary-section");
const mainManager = new MainManager(parentElement);
mainManager.init();