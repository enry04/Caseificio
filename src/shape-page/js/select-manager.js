class SelectManager {
    constructor(parentElement) {
      this.rootElement = parentElement;
      this.option = null;
    }
    setOptionValues(value, name) {
      this.option = document.createElement("option");
      this.option.value = value;
      this.option.innerHTML = name;
      this.rootElement.appendChild(this.option);
    }
  }
  
  export default SelectManager;
  