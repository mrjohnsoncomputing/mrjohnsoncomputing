class Shape {
  constructor(x, y) {
    this.pos = createVector(x,y);
    this.pos2 = createVector(x,y);
    this.colour = 255;
    this.col = this.colour;
    this.hidden = true;
    this.hoverColour = 100;
    this.clicked = false;
  }
  changeColour() {
    if (this.colour == 0) {
      this.colour = 255;
    } else {
      this.colour = 0;
    }
  }
  hide(clickable) {
    this.hidden = true;
    if (!clickable) {
      this.pos.x = -1000;
    }
    
  } 
  show(clickable) {
    this.hidden = false;
    if (!clickable) {
      this.pos.x = this.pos2.x
    }
  }
  mouseOver() {
    if (this.colour != this.hoverColour) {
      this.col = this.colour;
      this.colour = this.hoverColour;
    }
  }
  mouseOut() {
    if (this.colour == this.hoverColour) {
      this.colour = this.col;
    }
  }
}