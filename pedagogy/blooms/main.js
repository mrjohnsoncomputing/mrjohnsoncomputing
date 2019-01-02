let EVENT;
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
            newCell.addEventListener("click", function() {
                window.open("https://www.wordnik.com/words/"+(event.srcElement.innerText.toLowerCase()));
            })
            newCell.addEventListener("mouseover", function() {EVENT = event; getDefinition(this.innerHTML)});
            newCell.addEventListener("mouseout", clearInfo);
            newRow.appendChild(newCell);
        }
        newTable.appendChild(newRow);
        newRow = dom.createElementWithClass("TR", "row");
        document.getElementById("center").appendChild(newTable);
        document.getElementById("center").appendChild(dom.createElementWithClass("HR", "hr"));
    }
}

let wordnik_api_key = "4b99ccccd85102abe00090c7dd602c2e38fe2618b64fec3cd";
let wordnik_url_part1 = "https://api.wordnik.com/v4/word.json/";
let wordnik_url_part2 = "/definitions?limit=200&includeRelated=false&useCanonical=false&includeTags=false&api_key=" + wordnik_api_key;
let word = "cabbage";



function getDefinition(word) {
    request = wordnik_url_part1 + word + wordnik_url_part2;
    loadJSON(request, gotData, gotData);
}

function gotData(data) {
    let d;
    if (data["0"] != undefined) {
        d = data["0"].text
    } else {
        d = "Oh dear, I don't know that one!";
    }
    displayInfoBox(d);
}

function displayInfoBox(d) {
    let td = EVENT.srcElement;
    let infoBox = document.getElementById("info-box");
    dom.killChildren(infoBox);
    infoBox.style.left = td.offsetParent.offsetLeft + td.offsetLeft + "px";
    infoBox.style.top = td.offsetParent.offsetTop + td.offsetTop + (td.offsetHeight*1.5) +  "px";
    let newP = document.createElement("P");
    newP.innerHTML = d;
    newP.classList.add("infoText"); 
    infoBox.appendChild(newP);
    dom.showElement(infoBox);
}

function clearInfo() {
    let infoBox = document.getElementById("info-box");
    dom.hideElement(infoBox);
}