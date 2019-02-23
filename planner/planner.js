window.onload = function() {
  createGrid();
}
function allowInput(e) {
  let input = document.getElementById("tableInput");
  let td = e.target
  let new_size = td.scrollWidth;
  try{
    td.appendChild(input);
    input.value = "";
    input.focus();
  } catch (DOMException) {

  }
  input.style.width = new_size-3+"px";
  console.log(input.style.width, new_size)
}
function createHead() {
  let thead = document.createElement("THEAD");
  let tr = document.createElement("TR");
  let th = dom.createElementWithClass("TH", "page_date");
  th["colSpan"] = 4;
  th.innerText = "Tuesday Blah of February 2019"
  tr.appendChild(th);
  thead.appendChild(tr);
  return thead;
}
function createRow(i,j) {
  let td1
  let tr = document.createElement("TR");
  if (i == 0) {
    td1 = dom.createElementWithClass("TD", "period_column");
    td1["rowSpan"] = 5;
    td1.innerText = j;
    tr.appendChild(td1);
  } else if (i == 5) {
    td1 = dom.createElementWithClass("TD", "form_group_column");
    let p = dom.createElementWithClass("p", "form_group");
    p.innerText = "Form Group:"
    td1["rowSpan"] = 2;
    td1.appendChild(p);
    tr.appendChild(td1);
  }
  let classes = ["margin_column", "main_column", "notes_column"];
  for (let k = 0; k < classes.length; k++) {
    let td = dom.createElementWithClass("TD", classes[k]);
    td.addEventListener("click", allowInput);
    tr.appendChild(td)
  }
  return tr
}
function createGrid() {
  for (let i = 1; i < 3; i++ ){
    let page = document.getElementById("page"+i);
    let table = dom.createElementWithClass("TABLE","planner_grid");
    table.appendChild(createHead());
    for (let j = 1; j < 7; j++) {
      let tbody = dom.createElementWithClass("TBODY", "period_section");
      for (let i = 0; i < 7; i++) {
        tbody.appendChild(createRow(i,j)); 
      }
      table.appendChild(tbody);
    }
    
    page.appendChild(table);
  }
}