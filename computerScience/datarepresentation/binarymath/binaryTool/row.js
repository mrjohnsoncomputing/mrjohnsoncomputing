class Row { 
  constructor() {
    let SQUARES = 8;
    this.squares = new Squares(SQUARES);
    let w = this.squares.array[0].size;
    this.texts = new Texts(SQUARES, w);
    this.dots = new Dots(w);
  }
  
  changeColour() {
    this.dots.changeColour();
    this.squares.changeColour();
    this.texts.changeColour();
  }

  display() {
    this.squares.display();
    this.dots.display();
    this.texts.display();
  }
  
  changeBinaries(dot) {
     let j = this.dots.getCurrentDot(dot);
     this.texts.changeBinaries(j);
  }
  
  clicked(x, y, s) {    
    //Basic
    if (s == STATES[0]) {
      this.squares.clicked(x,y);
    } else {
    //Not basic
     let dotClicked = this.dots.clicked(x,y);
     if (dotClicked == null) { 
      this.squares.clicked(x,y);
      this.checkNegative(s);
      } else {
        if (dotClicked.pos.x == -1) {
          this.texts.resetBinaries();
          this.dots.hide();
        } else {
          this.changeBinaries(dotClicked);
        }
      this.checkNegative(s);
      }
    }
  }
  
  checkNegative(state) {
    let s = this.squares.array[0].text;
    if (state == STATES[1]) {
      let t = this.texts.array[0].current;
      if (s == '1') {
        this.texts.array[0].current = "-";
      } else if (s == '0') {
        this.texts.array[0].current = "+";
      }
    } else if (state == STATES[3]) {
      // Problem with index 0 being undefined when using twos complement
      let t = this.texts.array[0].current.substring(0,1);
      if (s == '1' && t != "-") {
        this.texts.array[0].current = "-" + this.texts.array[0].current;
      } else if (s == '0' && t == "-") {
        this.texts.array[0].current = this.texts.array[0].current.substring(1);
      }
    }
  }
}