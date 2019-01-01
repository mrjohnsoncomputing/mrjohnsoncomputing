window.onload = function() {
    createTimetableTable();
}

function changeTable() {
    let table1 = document.getElementById("week1");
    let table2 = document.getElementById("week2");
    let a = table1;
    let b = table2;
    if (table1.style.display == "none") {
        a = table2;
        b = table1;
    }
    dom.hideAShowB(a,b);
}

function displayInfoBox(event) {
    let td = event.srcElement;
    let infoBox = document.getElementById("info-box");
    dom.killChildren(infoBox);
    infoBox.style.left = td.offsetParent.offsetLeft + td.offsetLeft + td.offsetWidth;
    infoBox.style.top = td.offsetParent.offsetTop + td.offsetTop;
    let data = td.dataset;
    let period = timetable[data["week"]][data["day"]][data["period"]]
    let year = parseInt(period["year"]);
    if (year > 0) {
        for (let stat in period) {
            let newP = document.createElement("P");
            statP = stat[0].toUpperCase() + stat.substring(1, stat.length);
            newP.innerHTML = statP + ": " + period[stat]
            newP.classList.add("infoText"); 
            infoBox.appendChild(newP);
        }
        dom.showElement(infoBox);
    }
}

function clearInfo() {
    let infoBox = document.getElementById("info-box");
    dom.hideElement(infoBox);
}

function createTimetableTable() {
    let weekCount = 1;
    for (let week in timetable) {
        let table = createTable(weekCount);
        let dayCount = 1
        for (let day in timetable[week]) {
            let periodCount = 0;
            for (let period in timetable[week][day]) {                
                let p = "Period " + (periodCount+1);
                table.children[1].children[periodCount].children[0].innerHTML = p
                let row = table.children[1].children[periodCount].children[dayCount];
                for (let hour in timetable[week][day][period]) {
                    let info = timetable[week][day][period];
                    let abbr = "";
                    if (info.subject != undefined){
                        abbr = info.subject;
                    } else {
                        abbr = "";
                    }
                    let description;
                    if (abbr != "") {
                        description = info.year+info.group+"/"+abbr+" "+info.room;
                    } else {
                        description = info.year;
                    }
                    row.innerHTML = description;
                    row.dataset["week"] = "week"+weekCount;
                    row.dataset["day"] = "day"+ dayCount;
                    row.dataset["period"] = "p"+(periodCount+1);
                    row.addEventListener("mouseover", displayInfoBox);
                    row.addEventListener("mouseout", clearInfo);
                }
                periodCount++;
            }
            dayCount++;
        }
        
        if (weekCount > 1) {
            dom.hideElement(table);
        }
        weekCount++;
        document.getElementById("centerMain").appendChild(table);
    }
}

function createTable(weekNo) {
    let table = document.getElementById("tableHeadTemplate").cloneNode(true);
    table.id = "week"+weekNo;
    table.children[0].children[0].children[0].innerHTML += weekNo;
    return table;
}

