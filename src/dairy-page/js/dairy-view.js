import FetchUtil from "../../common/js/fetch-util.js";
import CardsManager from "./cards-manager.js";
import DairyManager from "./dairy-manager.js";
import SliderManager from "./slider-manager.js";

let dataToReceive = new URLSearchParams(window.location.search);
let dairyId = dataToReceive.get("dairyId");

const sliderElement = document.querySelector(".slide-container");
const parentElement = document.querySelector("main");
const dairyManager = new DairyManager(parentElement);
dairyManager.init();
const cardsParent = document.querySelector(".cards-container");
const cardsManager = new CardsManager(cardsParent, dairyId);
cardsManager.init();
let dairyData = {
    dairyId: dairyId,
}
let province;
await FetchUtil.postData("./php/read-dairy.php", dairyData).then((response) => {
    if (response.status == "success") {
        const sliderManager = new SliderManager(sliderElement);
        sliderManager.setImagesIndex(response.data.length);
        response.data.forEach(data => {
            sliderManager.setImage('../common/' + data['path']);
        });
        sliderManager.init();
        province = response.data[0]['provincia'];
        dairyManager.setTitle(response.data[0]['nome'] + ' (' + province + ')');
        dairyManager.setHolder("Titolare: " + response.data[0]['nomeTitolare']);
        dairyManager.setDescription(response.data[0]['descrizione']);
        dairyManager.setPlace("Situato in " + response.data[0]['via'] + ' ' + response.data[0]['numeroCivico'] + ' (Cap ' + response.data[0]['cap'] + ')');
        dairyManager.setCoordinates("Latitudine: " + response.data[0]['latitudine'] + '  Longitudine: ' + response.data[0]['longitudine']);
        dairyManager.setCardTitle(response.data[0]['nome']);
        dairyManager.setProvince(province);
        dairyManager.setCardProvince(province);
        cardsManager.setProvince(province);
    } else {
        console.log(response.status);
    }
});

await FetchUtil.postData("./php/read-producted-milk.php", dairyData).then((response) => {
    if (response.status == "success") {
        if (response.data['totale'] == null) {
            cardsManager.setProductedMilk(0);
        } else {
            cardsManager.setProductedMilk(response.data['totale']);
        }
    } else {
        console.log(response.status);
    }
});

await FetchUtil.postData("./php/read-used-milk.php", dairyData).then((response) => {
    if (response.status == "success") {
        if (response.data['totale'] == null) {
            cardsManager.setUsedMilk(0);
        } else {
            cardsManager.setUsedMilk(response.data['totale']);
        }
    } else {
        console.log(response.status);
    }
});

await FetchUtil.postData("./php/read-producted-cheese.php", dairyData).then((response) => {
    if (response.status == "success") {
        if (response.data['totale'] == null) {
            cardsManager.setProductedCheese(0)
        } else {
            cardsManager.setProductedCheese(response.data['totale']);
        }
    } else {
        console.log(response.status);
    }
});

await FetchUtil.postData("./php/read-selled-cheese.php", dairyData).then((response) => {
    if (response.status == "success") {
        if (response.data['totale'] == null) {
            cardsManager.setSelledCheese(0);
        } else {
            cardsManager.setSelledCheese(response.data['totale']);
        }
    } else {
        console.log(response.status);
    }
});
const averageData = {
    dairyId: dairyId,
    province: province,
}
await FetchUtil.postData("./php/read-average-milk.php", averageData).then((response) => {
    if (response.status == "success") {
        if (response.data['totale'] == null) {
            cardsManager.setMilkAverage(0);
        } else {
            cardsManager.setMilkAverage(response.data['totale']);
        }
    } else {
        console.log(response.status);
    }
});
