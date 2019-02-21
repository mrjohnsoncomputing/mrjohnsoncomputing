class Text extends Shape {
  constructor(x, y) {
    super(x,y);
    this.current = "";
  }
  display() {
    let size = map(50/this.current.length, 4, 50, 15, 30)
    textSize(size);
    noStroke();
    fill(this.colour);
    text(this.current, this.pos.x, this.pos.y);
  }
}

class Texts {
  constructor(SQUARES, w, base) {
    this.binaries = this.constructBinaries(base); //["128", "64", "32", "16", "8", "4", "2", "1", "1/2", "1/4", "1/8", "1/16", "1/32", "1/64", "1/128", "1/256"];
    this.array = new Array(SQUARES);
    this.createTexts(w);
  }
  constructBinaries(base) {
    let arr = [];
    for (let i = 7; i >= 0; i--) {
      arr.push(Math.pow(base, i).toString());
    }
    for (let i = 1; i < 8; i++) {
      arr.push("1/" + Math.pow(base, i));
    }
    return arr;
  }
  changeBase(base){
    let newBinaries = this.constructBinaries(base);
    for (let i = 0; i < this.array.length; i++) {
      let j = this.binaries.indexOf(this.array[i].current);
      this.array[i].current = newBinaries[j];
    }
    this.binaries = newBinaries;
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
  createTexts(wd) {
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