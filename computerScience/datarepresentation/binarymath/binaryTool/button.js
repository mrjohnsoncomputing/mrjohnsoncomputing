class Button extends Shape {
  constructor(x, y, w, h, t) {
    super(x,y);
    this.size = createVector(w, h);
    this.text = t;
  }
  display() {
    if (!this.hidden) {
      stroke(this.colour);
      noFill();
      rect(this.pos.x, this.pos.y, this.size.x, this.size.y, 60);
      fill(this.colour);
      textAlign(CENTER, CENTER);
      textSize(15);
      text(this.text, this.pos.x+(this.size.x/2), this.pos.y+(this.size.y/2));
    }
  }
  click() {
    if (!this.clicked) {
      this.colour = this.hoverColour;
      this.clicked = true;
    } else {
      this.colour = this.col;
      this.clicked = false;
    }
  }
}

class Buttons {
  constructor(x,y,w,h,labels) {
    this.array = [];
    this.create(x,y,w,h,labels);
    this.array[0].click();
  }
  create(x,y,w,h,labels) {
    let spacing = 20;
    let t;
    for (let i = 0; i < labels.length; i++) {
      t = labels[i];
      let b = new Button(x,y,w,h,t);
      b.show(false);
      this.array[i] = b;
      x += w + spacing;
    }
  }
  changeColour() {
    for (let button of this.array) {
      button.changeColour();
    }
  }
  display() {
    for (let button of this.array) {
      button.display();
    }
  }
  mouseOver() {
    for(let obj of this.array) {
      if(mouseX > obj.pos.x && mouseX < (obj.pos.x + obj.size.x) && mouseY > obj.pos.y && mouseY < (obj.pos.y + obj.size.y)) {
        obj.mouseOver();
      } else if (!obj.clicked){
        obj.mouseOut();
      }
    }
  }
  clicked(x, y, state) {
    for(let obj of this.array) {
      if(x > obj.pos.x && x < (obj.pos.x + obj.size.x) && y > obj.pos.y && y < (obj.pos.y + obj.size.y)) {
        this.clickReset();
        obj.click();
        return obj.text;
      } 
    }
    return state;
  }
  clickReset() {
    for(let obj of this.array) {
      obj.colour = obj.col;
      obj.clicked = false;
    }
  }
}