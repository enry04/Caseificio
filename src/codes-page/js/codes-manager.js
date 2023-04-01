class CodesManager {
    constructor(tableElement) {
        this.rootElement = tableElement;
        this.headerValues = ["Data di produzione", "Stagionatura", "Scelta", "Codice da stampare", ""];
        this.tHead = this.rootElement.createTHead();
        this.tBody = this.rootElement.createTBody();
    }

    init() {
        this.initElements();
    }

    initElements() {
        let row = this.tHead.insertRow();
        for (let i = 0; i < this.headerValues.length; i++) {
            let th = document.createElement("th");
            th.innerHTML = this.headerValues[i];
            row.appendChild(th);
        }
    }
    setRowData(date, seasoning, typology, code, id, rowIndex) {
        let data = [new Date(date).toLocaleDateString("en-GB"), seasoning + " mesi", typology + " scelta", code, this.getDoneBtn(rowIndex, id)];
        let row = this.tBody.insertRow();
        row.id = rowIndex;
        for (let i = 0; i < this.headerValues.length; i++) {
            let td = document.createElement("td");
            if (i < 4) {
                td.innerHTML = data[i];
            } else {
                td.appendChild(data[i]);
            }
            row.appendChild(td);
        }
        this.initEventListeners();
    }

    initEventListeners() {
        const btns = this.rootElement.querySelectorAll(".done-btn");
        btns.forEach(btn => {
            btn.addEventListener("click", (event) => {

            });
        });
    }

    getDoneBtn(rowIndex, id) {
        let input = document.createElement("input");
        input.setAttribute("type", "button");
        input.setAttribute("value", "Fatto");
        input.classList.toggle("done-btn", true);
        input.classList.toggle("table-btn", true);
        input.setAttribute("rowIndex", rowIndex);
        input.id = id;
        return input;
    }
}
export default CodesManager;