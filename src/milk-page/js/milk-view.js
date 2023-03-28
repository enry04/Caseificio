import CookieManager from "../../common/js/cookie-manager.js";
import FetchUtil from "../../common/js/fetch-util.js";
import MilkManager from "./milk-manager.js";

const parentElement = document.querySelector(".form-container");
const dairyData = {
    dairyId: CookieManager.getCookie("dairy_id"),
}
await FetchUtil.postData("./php/read-dairy.php", dairyData).then((response) => {
    if (response.status == "success") {
        console.log(response.data);
        const milkManager = new MilkManager(parentElement, response.data['nome'], response.data['codice'], response.data['id']);
        milkManager.init();
    } else {
        console.log(response.status);
    }
});