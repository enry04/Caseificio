import CookieManager from "../../common/js/cookie-manager.js";
import FetchUtil from "../../common/js/fetch-util.js";
import CodesManager from "./codes-manager.js";

const dairyId = CookieManager.getCookie("dairy_id");
const table = document.querySelector("table");
const noText = document.querySelector(".no-data-text");
const codesData = {
    dairyId: dairyId,
}

await FetchUtil.postData("./php/read-codes.php", codesData).then((response) => {
    if (response.status == "success") {
        noText.classList.toggle("hide", true);
        table.classList.toggle("hide", false);
        const codesManager = new CodesManager(table);
        codesManager.init();
        let rowIndex = 0;
        response.data.forEach(codeData => {
            codesManager.setRowData(codeData["dataProduzione"], codeData["mesi"], codeData["scelta"], codeData["codice"], codeData["cheeseId"], rowIndex);
            rowIndex++;
        });
    } else {
        noText.classList.toggle("hide", false);
        table.classList.toggle("hide", true);
    }
})