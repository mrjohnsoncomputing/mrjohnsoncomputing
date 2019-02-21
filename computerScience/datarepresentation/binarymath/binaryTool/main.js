class Main { 
  constructor() {
    this.bgColour = 0;
    this.row = new Row();
    this.buttons = new Buttons();
    this.state = STATES[0];
  }
  
  display() {
    this.buttons.display();
    this.mouseOver();
    this.row.display(); 
  }
  
  changeTheme() { 
    this.row.changeColour();
    this.buttons.changeColour();
    if (this.bgColour == 0) {
      this.bgColour = 255;
    } else {
      this.bgColour = 0;
    }
  }
  
  clicked(x, y) {
    let oldState = this.state;
    this.state = this.buttons.clicked(x,y, this.state);
    if (oldState != this.state) {
      if (this.state == STATES[0]) {
        this.row.texts.resetBinaries();
        this.row.dots.hide();
      }
      this.row.texts.refreshSignedBit();
      this.row.checkNegative(this.state);
    }
    this.row.clicked(x,y, this.state);
  }
  
  mouseOver() {
    this.buttons.mouseOver();
  }
}