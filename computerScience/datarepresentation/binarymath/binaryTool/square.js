class Square extends Shape {
  constructor(x, y) {
    super(x,y);
    this.size = 100;
    this.text = '0';
  }
  
  click() {
    if (this.text == '0') {
      this.text = '1';
    } else {
      this.text = '0';
    }
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
  
  clicked(x, y) {
    for (let s of this.array) {
      if ((x > s.pos.x) && (x < s.pos.x + s.size) && (y > s.pos.y) && (y < s.pos.y + s.size)) {
        s.click();
        break;
      }
    }
  }
}