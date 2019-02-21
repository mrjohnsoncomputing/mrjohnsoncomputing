class Dot extends Shape {
  constructor(x, y) {
    super(x,y);
    this.size = 10;
  }
  
  display() {
    if (!this.hidden) {
      noStroke();
      fill(this.colour);
      ellipse(this.pos.x, this.pos.y, this.size, this.size);
    }
  }
}

class Dots {
  constructor(w) {
    let DOTS = 7;
    this.array = new Array(DOTS);
    this.makeDots(w);
  }
  
  getCurrentDot(dot) {
    let j = 7;
    for (let i = 0; i < this.array.length; i++) {
      if (this.array[i] == dot) {
        j -= i;
        return j;
      }
    }
    return -1;
  }
  
  changeColour() {
    for (let dot of this.array) {
      dot.changeColour();
    }
  }
  
  makeDots(wd) {
    let w = wd;
    let x = w;
    let y = height/2 + w/2;
    for (let i = 0; i < this.array.length; i++) {
      let dot = new Dot(x,y);
      this.array[i] = dot;
      x += w;
    }
  }
  
  display() {
    for (let dot of this.array) {
      dot.display();
    }
  }
  
  hide() {
    for (let dot of this.array) {
      dot.hide();
    }
  }
  
  clicked(x, y) {
    for (let d of this.array) {
      if ((x > d.pos.x - (d.size*2)) && (x < d.pos.x + (d.size*2)) && (y > d.pos.y - (d.size*2)) && (y < d.pos.y + (d.size*2))) {
        if (!d.hidden) {
          d.hide();
          return new Dot(-1,-1);
        } else {
          this.hide();
          d.show();
          return d;
        }
      }
    }
    return null;
  }
}