<STYLE>
  .unselectable {
    user-select: none;
    -moz-user-select: none;
    -webkit-user-select: none;
    -ms-user-select: none
  }

  .desc,#codecarousel {
    display: inline-table;
    width: 48%
  }

  .desc {
    font-family: arial,sans-serif;
    color: #fff
  }

  @media screen and (max-width: 1000px) {
    .desc,codecarousel {
      display:block;
      max-width: 98%;
      width: 98%
    }

    #counter {
      display: none!important
    }

    #codecarousel {
      overflow: auto
    }
  }

  #codescreen {
    display: block;
    overflow: hidden;
    background-color: white;
    padding: 4px;
    margin: 0;
    position: relative;
    border-radius: 4px;
    border: 3px solid black;
    height: 300px;
    width: 480px
  }

  .codebox {
    position: absolute;
    top: 0;
    left: 0;
    display: block;
    /* padding: 3px; */
    height: 100%;
    width: 100%;
    background-position: center; 
    background-repeat: no-repeat; 
    background-size: contain;
    /* background-color: #272822; */
    transition: opacity .3s
  }

  #tracker {
    display: inline-block
  }

  #code_pause {
    font-size: 9pt;
    color: #fff
  }

  #code_pause:hover {
    color: #ffd343
  }

  #code_pause.xactive {
    color: #ffd343;
    background-image: linear-gradient(#272822 10%,#334349 90%);
    position: relative;
    top: 1px
  }

  .code_btn,#tracker a {
    font-family: courier new,Courier,monospace;
    font-size: 12pt;
    color: #e6e8ea;
    background: #334349;
    background-image: linear-gradient(#334349 10%,#272822 90%);
    border: 1px solid #272822;
    opacity: .7;
    border-radius: 4px;
    padding: 4px 10px;
    margin: 4px;
    font-size: 16px;
    display: inline-block;
    cursor: pointer
  }

  .code_btn,#tracker a.xactive {
    color: #ffd343;
    background-color: #244e71;
    opacity: 1
  }

  #tracker a:hover {
    opacity: 1
  }
</STYLE>

<div id="codecarousel">
  <div id="codescreen">
    <div class="codebox" style="background-image:url('pedagogy/theories.jpg');">
      
    </div>
  <br />
    <div class="codebox">
      Slide B  
    </div>
  <br />
    <div class="codebox">
      Time for C
    </div>
    <div class="codebox">
      Slide D
    </div>
  </div>
  <button class="code_btn" onclick="prev()">&lt;</button>
  <div id="tracker"></div>
  <button class="code_btn" onclick="next()">&gt;</button>
  <span id="counter">0</span>
  <button class="code_btn" id="code_pause" onclick="pause()">&#10073;&#10073;</button>
</div>
<script>
  code_carousel();
  function code_carousel() {
    this.next = function(){ z = current + 1; if (z > max || z < 0) { z=0 } set(z); }
    this.prev = function(){ z = current - 1; if (z > max || z < 0) { z=max; } set(z); }
    this.updatetimer = function() { clearInterval(timer); timer = setInterval(next,7000); }
    this.pause = function() {
      if (timer == 0) {
        updatetimer();
        document.getElementById('code_pause').setAttribute('class','code_btn');
      } else {
        clearInterval(timer);
        timer = 0;
        document.getElementById('code_pause').setAttribute('class','code_btn xactive');
      }
    }
    this.set = function(x=0) {
      e = document.getElementById('tracker').getElementsByTagName('a');
      e[current].setAttribute("class","");
      current = x;
      e[current].setAttribute("class","xactive");

      elems = document.getElementsByClassName('codebox');
      for(i=0;i<elems.length;i++) {
        elems[i].style.opacity = 0;
        elems[i].style.zIndex = 0;
        elems[i].classList.add("unselectable");
      }
      elems[current].style.opacity = 1;
      elems[current].style.zIndex = 10;
      elems[current].classList.remove("unselectable");
      document.getElementById('counter').innerHTML = current;
      if (timer != 0) { 
        updatetimer();
      }
    }

    current = 0;
    max = document.getElementsByClassName('codebox').length - 1;
    for(i=0;i<max+1;i++){
      document.getElementById('tracker').innerHTML += '<a onclick="set('+i+')">'+(i+1)+'</a>'
    }
    timer = -1
      this.set();
  }
</script>