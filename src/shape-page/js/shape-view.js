import CookieManager from "../../common/js/cookie-manager.js";
import FetchUtil from "../../common/js/fetch-util.js";
import SelectManager from "./select-manager.js";
import ShapeManager from "./shape-manager.js";

const parentElement = document.querySelector(".form-container");
const dairyData = {
    dairyId: CookieManager.getCookie("dairy_id"),
}

let dairyResponseData = {}

await FetchUtil.postData("../common/php/read-dairy.php", dairyData).then((response) => {
    if (response.status == "success") {
        dairyResponseData = {
            name: response.data['nome'],
            code: response.data['codice'],
            id: response.data['id'],
        }
    } else {
        console.log(response.status);
    }
});

let seasoningData;
const seasoningSelect = document.querySelector(".seasoning-select");

await FetchUtil.postData("./php/read-seasoning.php", {}).then((response) => {
    if (response.status == "success") {
        seasoningData = JSON.parse(response.data);
    } else {
        console.log(response.status);
    }
});

await seasoningData.forEach((optionValue) => {
    const selectManager = new SelectManager(seasoningSelect);
    selectManager.setOptionValues(optionValue["id"], optionValue["mesi"] + " mesi");
});

const shapeManager = new ShapeManager(parentElement, dairyResponseData);
shapeManager.init();
