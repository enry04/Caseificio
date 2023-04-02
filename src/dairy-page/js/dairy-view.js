import FetchUtil from "../../common/js/fetch-util.js";
import SliderManager from "./slider-manager.js";

let dataToReceive = new URLSearchParams(window.location.search);
let dairyId = dataToReceive.get("dairyId");

const sliderElement = document.querySelector(".slide-container");
let dairyData = {
    dairyId: dairyId,
}

await FetchUtil.postData("./php/read-dairy.php", dairyData).then((response) => {
    if (response.status == "success") {
        const sliderManager = new SliderManager(sliderElement);
        sliderManager.setImagesIndex(response.data.length);
        response.data.forEach(data => {
            sliderManager.setImage('../common/' + data['path']);
        });
        sliderManager.init();

    } else {
        console.log(response.status);
    }
});

