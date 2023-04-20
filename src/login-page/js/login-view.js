import AccountValidationManager from "./account-validation-manager.js";

const parentElement = document.querySelector("section");
const accountValidationManager = new AccountValidationManager(parentElement);
accountValidationManager.init();
