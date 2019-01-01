let EVENT;
function setup() {
    noCanvas();
    for (standard in standards) {
        let newTable = dom.createElementWithClass("TABLE", "table");
        let newRow = dom.createElementWithClass("TR");
        let newCell = dom.createElementWithClass("TD", "header");
        newCell.innerText = standard +".  " + standards[standard].title;
        newRow.appendChild(newCell);
        newTable.appendChild(newRow);
        letters = ["a. ", "b. ", "c. ", "d. ", "e. ", "f. ", "g. "];
        for (let i = 0; i < standards[standard].points.length; i++) {
            newRow = dom.createElementWithClass("TR", "row");
            newCell = dom.createElementWithClass("TD", "cell");
            sentence = standards[standard].points[i];
            newCell.innerText =letters[i] + sentence[0].toUpperCase() + sentence.substring(1) + ".";
            newRow.appendChild(newCell);
            newTable.appendChild(newRow);
        }
        newTable.appendChild(newRow);
        newRow = dom.createElementWithClass("TR", "row");
        document.getElementById("center").appendChild(newTable);
        document.getElementById("center").appendChild(dom.createElementWithClass("HR", "hr"));
    }
}