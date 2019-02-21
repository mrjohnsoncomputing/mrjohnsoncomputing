class Square extends Shape {
  constructor(x, y) {
    super(x,y);
    this.size = 100;
    this.index = 0
    this.digits = ["0", "1","2", "3","4", "5","6", "7","8", "9","A", "B","C", "D","E", "F"];
    this.text = this.digits[this.index];
  }
  click(base, side) {
    if (side == "L") {
      this.index++;
    } else {
      this.index--;
    }
    if (this.index >= base) {
      this.index = 0;
    } else if (this.index < 0) {
      this.index = base - 1;
    }
    this.updateText();
  }
  updateText(i) {
    if (i != undefined) {
      this.index = i;  
    }
    this.text = this.digits[this.index];
  }
  display() {
    noStroke();
    fill(this.colour);
    textSize(50);
    let w = this.size/2;
    textAlign(CENTER, CENTER);
    text(this.text, this.pos.x + w, this.pos.y + w);
    stroke(this.colour);
    noFill();
    rect(this.pos.x, this.pos.y, this.size, this.size);
    
    let x = this.pos.x + 5
    this.drawArrow(x, this.pos.y+this.size/2, x + this.size/4, this.pos.y + this.size/4, x + this.size/4, this.pos.y + (this.size/4)*3, "+", x + this.size/8);
    x = this.pos.x+this.size - 5
    
    this.drawArrow(x, this.pos.y+this.size/2, x - this.size/4, this.pos.y + this.size/4, x - this.size/4, this.pos.y + (this.size/4)*3, "-", x - this.size/8);
  }
  drawArrow(x1,y1,x2,y2,x3,y3, txt, tx) {
    //fill(200, 25,25);
    noFill();
    noStroke();
    //stroke(255, 100);
    //strokeWeight(1)
    triangle(x1,y1,x2,y2,x3,y3);
    fill(255,255,255);
    textSize(20);
    textAlign(CENTER)
    text(txt, tx, this.pos.y+this.size/2);
  }
}

class Squares {
  constructor(SQUARES) {
    this.array = new Array(SQUARES);
    this.makeSquares();
  }
  makeSquares() {
    let x = 0;
    let y = height/2;
    for (let i = 0; i < this.array.length; i++) {
      let square = new Square(x,y);
      x += square.size;
      this.array[i] = square;
    }
  }
  changeColour() {
    for (let square of this.array) {
        square.changeColour();
    }
  }
  display() {
    for (let square of this.array) {
      square.display();
    }
  }
  clicked(x, y, base) {
    for (let s of this.array) {
      if ((x > s.pos.x) && (x < s.pos.x + s.size) && (y > s.pos.y) && (y < s.pos.y + s.size)) {
        let side = "L"
        if (x > s.pos.x + s.size/2) {
          side = "R"
        }
        s.click(base, side);
        break;
      }
    }
  }
  updateText(i){
    for (let square of this.array) {
      square.updateText(i);
    }
  }
}