import FetchUtil from "../../common/js/fetch-util.js";
import DairyManager from "./dairy-manager.js";
import SliderManager from "./slider-manager.js";

let dataToReceive = new URLSearchParams(window.location.search);
let dairyId = dataToReceive.get("dairyId");

const sliderElement = document.querySelector(".slide-container");
const parentElement = document.querySelector("main");
const dairyManager = new DairyManager(parentElement);
dairyManager.init();
let dairyData = {
    dairyId: dairyId,
}

await FetchUtil.postData("./php/read-dairy.php", dairyData).then((response) => {
    if (response.status == "success") {
        console.log(response.data);
        const sliderManager = new SliderManager(sliderElement);
        sliderManager.setImagesIndex(response.data.length);
        response.data.forEach(data => {
            sliderManager.setImage('../common/' + data['path']);
        });
        sliderManager.init();
        dairyManager.setTitle(response.data[0]['nome'] + ' (' + response.data[0]['provincia'] + ')');
        dairyManager.setHolder("Titolare: " + response.data[0]['nomeTitolare']);
        dairyManager.setDescription(response.data[0]['descrizione']);
        dairyManager.setPlace("Situato in " + response.data[0]['via'] + ' ' + response.data[0]['numeroCivico'] + ' (Cap ' + response.data[0]['cap'] + ')');
        dairyManager.setCoordinates("Latitudine: " + response.data[0]['latitudine'] + '  Longitudine: ' + response.data[0]['longitudine']);
    } else {
        console.log(response.status);
    }
});

