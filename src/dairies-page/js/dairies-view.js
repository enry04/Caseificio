import FetchUtil from "../../common/js/fetch-util.js";
import DairiesManager from "./dairies-manager.js";

const parentElement = document.querySelector(".dairies-container");

FetchUtil.postData("./php/read-dairies.php", {}).then((response) => {
    if (response.status == "success") {
        let parseData = JSON.parse(response.data);
        parseData.forEach(data => {
            const dairiesManager = new DairiesManager(parentElement);
            dairiesManager.init();
            dairiesManager.setId(data['dairyId']);
            dairiesManager.setName(data['nome']);
            dairiesManager.setDescription(data['descrizione']);
            dairiesManager.setImg("../common/" + data['path']);
        });
    } else {
        console.log(response.status);
    }
});