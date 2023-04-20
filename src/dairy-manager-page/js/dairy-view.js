import FetchUtil from "../../common/js/fetch-util.js";
import SliderManager from "../../dairy-page/js/slider-manager.js";
import DairyManager from "./dairy-manager.js";


let dataToReceive = new URLSearchParams(window.location.search);
let dairyId = dataToReceive.get("dairyId");


const sliderElement = document.querySelector(".slide-container");
const parentElement = document.querySelector("main");
const dairyManager = new DairyManager(parentElement, dairyId);
dairyManager.init();
let dairyData = {
    dairyId: dairyId,
}
await FetchUtil.postData("../dairy-page/php/read-dairy.php", dairyData).then((response) => {
    if (response.status == "success") {
        const sliderManager = new SliderManager(sliderElement);
        sliderManager.setImagesIndex(response.data.length);
        response.data.forEach(data => {
            sliderManager.setImage('../common/' + data['path']);
        });
        sliderManager.init();
        dairyManager.setTitle(response.data[0]['nome']);
        dairyManager.setHolder(response.data[0]['nomeTitolare']);
        dairyManager.setDescription(response.data[0]['descrizione']);
    } else {
        console.log(response.status);
    }
});
