import MainManager from "./main-manager.js";
import MapManager from "./map-manager.js";

const parentElement = document.querySelector(".secondary-section");
const mainManager = new MainManager(parentElement);
mainManager.init();

const mapElement = document.querySelector(".map-container");
const mapManager = new MapManager(mapElement);
mapManager.init();