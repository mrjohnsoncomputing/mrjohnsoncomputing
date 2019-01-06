<?php include "../../navigation.php";?>
<?php include "htmlNavigation.php";?>
<script>
    function updateSliders() {
        let sliders = document.getElementsByTagName("INPUT");
        let red = sliders[0].value;
        let green = sliders[1].value;
        let blue = sliders[2].value;
        let cols = ["red", "green", "blue"];
        for (let i=0; i < cols.length; i++) {
            let c = cols[i]
            document.getElementById(`${c}SliderValue`).innerHTML=sliders[i].value;
        }
        let colourArea = document.getElementById("colourArea");
        colourArea.style.backgroundColor = `rgb(${red},${green},${blue})`;
    }
    dom.onload(updateSliders);
</script>
<div class="contentArea">
<center>
    <style>
        .rgbInput {
            display:block; 
            width:500px;
            margin-bottom: 30px;
        }
        #colourArea {
            background-color: #000000;
            width: 500px;
            height: 300px;
        }
    </style>
    <h1 class="pageTitle">RGB Colour Mixer</h1>

    <div>
        <label for="redInput">Red <span id="redSliderValue"></span></label>
        <input type="range" oninput="updateSliders()" class="rgbInput" id="redInput" name="redInput" min="0" max="255" value="0" list="tickmarks">
        <label for="greenInput">Green <span id="greenSliderValue"></span></label>
        <input type="range" oninput="updateSliders()" class="rgbInput" id="greenInput" name="greenInput" min="0" max="255" value="0" list="tickmarks">
        <label for="blueInput">Blue <span id="blueSliderValue"></span></label>
        <input type="range" oninput="updateSliders()" class="rgbInput" id="blueInput" name="blueInput" min="0" max="255" value="0" list="tickmarks">

        <datalist id="tickmarks">
        <option value="0" label="0">
        <option value="16">
        <option value="32" label="32">
        <option value="48">
        <option value="64" label="64">
        <option value="80">
        <option value="96" label="96">
        <option value="112">
        <option value="128" label="128">
        <option value="144">
        <option value="160" label="160">
        <option value="176">
        <option value="192" label="192">
        <option value="208">
        <option value="224" label="224">
        <option value="240">
        <option value="255" label="255">
        </datalist>
        <div id="colourArea"></div>

    </div>
</center>
</div>
<?php include "../../footer.php";?>