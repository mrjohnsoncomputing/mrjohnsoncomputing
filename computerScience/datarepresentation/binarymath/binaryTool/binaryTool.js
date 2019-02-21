const STATES = ["Basic", "Signed Bit", "One's Complement", "Two's Complement"];
const BASES = ["ONE", "TWO", "THREE", "FOUR", "FIVE", "SIX", "SEVEN", "EIGHT", "NINE", "TEN", "ELEVEN", "TWELVE", "THIRTEEN", "FOURTEEN", "FIFTEEN", "SIXTEEN"];
let main;
function setup() {
  let cnv = createCanvas(801, 300);
  let p = document.getElementById("canvasWrapper");
  cnv.parent(p);
  background(0);
  main = new Main();
}

function draw() {
  background(main.bgColour);
  main.display();
}

function mousePressed() {
  if (mouseButton == LEFT) {
    main.clicked(mouseX, mouseY);
  } else {
    main.changeTheme();
  }
}