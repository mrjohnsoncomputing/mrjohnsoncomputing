function setup() {
    noCanvas();
    for (stage in blooms) {
        let newTable = dom.createElementWithClass("TABLE", "table");
        let newRow = dom.createElementWithClass("TR");
        let newCell = dom.createElementWithClass("TD", "header");
        newCell.innerText = stage;
        newRow.appendChild(newCell);
        newTable.appendChild(newRow);
        for (let i = 0; i < blooms[stage].length; i++) {
            if (i%5 == 0) {
                newTable.appendChild(newRow);
                newRow = dom.createElementWithClass("TR", "row");
            }
            newCell = dom.createElementWithClass("TD", "cell");
            newCell.innerText =blooms[stage][i];
            newCell.addEventListener("mouseover", function() {getDefinition(this.innerHTML)});
            newCell.addEventListener("mouseout", function() {});
            newRow.appendChild(newCell);
        }
        newTable.appendChild(newRow);
        newRow = dom.createElementWithClass("TR", "row");
        document.getElementById("center").appendChild(newTable);
        document.getElementById("center").appendChild(dom.createElementWithClass("HR", "hr"));
    }
}

wordnik_api_key = "4b99ccccd85102abe00090c7dd602c2e38fe2618b64fec3cd";
wordnik_url_part1 = "https://api.wordnik.com/v4/word.json/";
wordnik_url_part2 = "/definitions?limit=200&includeRelated=false&useCanonical=false&includeTags=false&api_key=" + wordnik_api_key;
word = "cabbage";

function getDefinition(word) {
    request = wordnik_url_part1 + word + wordnik_url_part2;
    loadJSON(request, gotData);
}

function gotData(data) {
    console.log(data["0"].text);
}