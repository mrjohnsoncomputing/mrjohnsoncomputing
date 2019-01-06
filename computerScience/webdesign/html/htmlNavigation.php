<script>
    dom.onload(function() {
        let body = document.body;
        let html = document.documentElement;
        let height = Math.max( 
            body.scrollHeight, 
            body.offsetHeight, 
            html.clientHeight, 
            html.scrollHeight, 
            html.offsetHeight 
        );
        document.getElementsByClassName("navbar-side")[0].style.height = height+"px";
    });
</script>
<nav class="navbar-side">
    <a onclick="navigate('computerScience/webdesign/html/index.php')">HTML</a>
    <a onclick="navigate('computerScience/webdesign/html/htmlReferenceGuide.php')">Reference</a>
    <a onclick="navigate('computerScience/webdesign/html/rgbColourMixer.php')">RGB Colour Picker</a>
    <a onclick="navigate('computerScience/webdesign/html/htmlAttributes.php')">Attributes</a>
    <div class="dropdown-side">
        <button class="dropbtn-side">Projects 
        <i class="fa fa-caret-down"></i>
        </button>
        <div class="dropdown-content-side">
            <a onclick="navigate('')">Easy</a>
            <a onclick="navigate('')">Medium</a>
            <a onclick="navigate('')">Difficult</a>
        </div>
    </div>
</nav>


