import FetchUtil from "../../common/js/fetch-util.js";
import SelectManager from "../../shape-page/js/select-manager.js";
import ContactDairyManager from "./contact-dairy-manager.js";

let dairiesData;

await FetchUtil.postData("../dairies-page/php/read-dairies.php", {}).then((response) => {
    if (response.status == "success") {
        dairiesData = JSON.parse(response.data);
    } else {
        console.log(response.status);
    }
});

await dairiesData.forEach(data => {
    const selectManager = new SelectManager(document.querySelector("select"));
    selectManager.setOptionValues(data['nome'], data['nome']);
});

const parentElement = document.querySelector("main");
const contactDairyManager = new ContactDairyManager(parentElement);
contactDairyManager.init();
