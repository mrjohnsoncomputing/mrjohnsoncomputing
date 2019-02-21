class Main { 
  constructor() {
    this.base = BASES.indexOf("TWO") + 1
    this.baseButtons = new Buttons(10,height-42,100,40,["TWO", "TEN", "SIXTEEN"]);
    this.bgColour = 0;//color("#89d6fb");
    this.row = new Row(this.base);
    this.stateButtons = new Buttons(10,10,150,50,STATES);
    this.state = STATES[0];
  }
  display() {
    this.stateButtons.display();
    this.baseButtons.display();
    this.mouseOver();
    this.row.display(); 
  }
  changeTheme() { 
    this.row.changeColour();
    this.stateButtons.changeColour();
    this.baseButtons.changeColour();
    if (this.bgColour == 0) {
      this.bgColour = 255;
    } else {
      this.bgColour = 0;
    }
  }
  clickedEvent(x, y) {
    this.checkStateButtonClick(x,y);
    this.checkBaseButtonClick(x,y);
    this.row.clicked(x,y, this.state, this.base);
  }
  checkStateButtonClick(x,y) {
    let oldState = this.state;
    this.state = this.stateButtons.clicked(x,y, this.state);
    if (oldState != this.state) {
      if (this.state == STATES[0]) {
        this.row.texts.resetBinaries();
        this.row.dots.hide();
      }
      this.row.texts.refreshSignedBit();
      this.row.checkNegative(this.state);
    }
  }
  checkBaseButtonClick(x,y) {
    let oldBase = this.base;
    this.base = this.baseButtons.clicked(x,y, this.base);
    if (oldBase != this.base) {
      this.base = BASES.indexOf(this.base) + 1
      this.row.texts.changeBase(this.base);
      this.row.squares.updateText(0);
      for (let i = 1; i < this.stateButtons.array.length; i++) {
        if (this.base != 2) {
          this.stateButtons.array[i].hide(false);
          this.checkStateButtonClick(this.stateButtons.array[0].pos.x+5,this.stateButtons.array[0].pos.y+5)
        } else {
          this.stateButtons.array[i].show(false);
        }
      }
    }
  }
  mouseOver() {
    this.stateButtons.mouseOver();
  }
}