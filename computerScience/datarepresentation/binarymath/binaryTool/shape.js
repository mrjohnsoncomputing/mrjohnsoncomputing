class Shape {
  constructor(x, y) {
    this.pos = createVector(x,y);
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
  
  hide() {
    this.hidden = true;
  }
  
  show() {
    this.hidden = false;
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