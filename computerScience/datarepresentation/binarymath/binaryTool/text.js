class Text extends Shape {
  constructor(x, y) {
    super(x,y);
    this.current = "";
  }
  
  display() {
    textSize(30);
    noStroke();
    fill(this.colour);
    text(this.current, this.pos.x, this.pos.y);
  }
}

class Texts {
  constructor(SQUARES, w) {
    this.binaries = ["128", "64", "32", "16", "8", "4", "2", "1", "1/2", "1/4", "1/8", "1/16", "1/32", "1/64", "1/128", "1/256"];
    this.array = new Array(SQUARES);
    this.create(w);
    
  }
  
  resetBinaries() {
    for (let i = 0; i < this.array.length; i++) {
      this.array[i].current = this.binaries[i];
    }
  }
  
  changeBinaries(j) {
    for (let text of this.array) {
        text.current = this.binaries[j];
        j++;
     }
   }
   
  refreshSignedBit() {
    let s = this.array[1].current;
    let i;
    for (i = 0; i < this.binaries.length; i++) {
      if (s == this.binaries[i]) {
        break;
     }
    }
    this.array[0].current = this.binaries[i-1];
  }
  
  create(wd) {
    let w = wd;
    let x = w/2;
    let y = height/2 - w/4;
    for (let i = 0; i < this.array.length; i++) {
      let text = new Text(x,y);
      text.current = this.binaries[i];
      x += w;
      this.array[i] = text;
    }
  }
  
  display() {
    for (let t of this.array) {
      t.display();
    }
  }
  
  changeColour() {
    for (let t of this.array) {
      t.changeColour();
    }
  }
}