<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>Mr Johnson Computing</title>
    <meta name="title" content="Mr Johnson Computing">
    <meta name="google-site-verification" content="hBnUH3UYOuo_tqYc3ZQ1pIXlWPuDX8SOdnY3449CZpk" />
    <meta name="description" content="Resources and activities for secondary school ICT and Computer Science students.">
    <meta name="keywords" content="Mr Johnson Computing, computer science teacher, computer science kent, secondary school computer science">
    <meta name="ROBOTS" content="INDEX, FOLLOW">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="icon" type="image/x-icon" href="/favicon.png" />
    <link href="https://fonts.googleapis.com/css?family=Press+Start+2P|Rajdhani" rel="stylesheet">
    <link rel="stylesheet" type="text/css" media="screen" href="/mainStyle.css"/>
    <link rel="stylesheet" type="text/css" media="screen" href="/tableStyle.css"/>
    <!-- Debug -->
    <!-- <script type="text/javascript" src="https://dalestevenjohnson.github.io/domOperations/domOperations.js"></script> -->
    <script type="text/javascript" src="/domOperations/domOperations.js"></script> 
    <script src="/mainScript.js"></script>
</head>
<body>
    <center>
    <div id="titleBar">
        <h1 class="title" onclick="navigate('index.html')">Mr Johnson</br>Computing</h1>
    </div>
    <nav class="navbar">
        <a onclick="navigate('computerScience/index.php')">Home</a>
        <a onclick="navigate('computerScience/news/index.php')">News</a>
        <div class="dropdown">
            <button class="dropbtn">Web Design 
            <i class="fa fa-caret-down"></i>
            </button>
            <div class="dropdown-content">
            <a onclick="navigate('computerScience/webdesign/html/index.php')">HTML</a>
            <a onclick="navigate('computerScience/webdesign/css/index.php')">CSS</a>
            <a onclick="navigate('computerScience/webdesign/javascript/index.php')">JavaScript</a>
            </div>
        </div>
        <div class="dropdown">
            <button class="dropbtn">Programming 
            <i class="fa fa-caret-down"></i>
            </button>
            <div class="dropdown-content">
            <a onclick="navigate('computerScience/programming/fundamentals/index.php')">Fundamentals</a>
            <a onclick="navigate('computerScience/programming/python/index.php')">Python</a>
            <a onclick="navigate('computerScience/programming/java/index.php')">Java</a>
            <a onclick="navigate('computerScience/programming/visualbasic/index.php')">Visual Basic</a>
            <a onclick="navigate('computerScience/programming/haskell/index.php')">Haskell</a>
            </div>
        </div>
        <!-- <div class="dropdown">
            <button class="dropbtn">Computer Systems 
            <i class="fa fa-caret-down"></i>
            </button>
            <div class="dropdown-content">
            <a onclick="navigate('programming/fundamentals', 'contentFrame')">Fundamentals</a>
            <a onclick="navigate('programming/python', 'contentFrame')">Python</a>
            <a onclick="navigate('programming/java', 'contentFrame')">Java</a>
            <a onclick="navigate('programming/visualbasic', 'contentFrame')">Visual Basic</a>
            </div>
        </div>  -->
        <div class="dropdown">
            <button class="dropbtn">Data Representation 
            <i class="fa fa-caret-down"></i>
            </button>
            <div class="dropdown-content">
            <a onclick="navigate('computerScience/datarepresentation/bits.php')">Bits, Nybbles and Bytes</a>
            <a onclick="navigate('computerScience/datarepresentation/bases/index.php')">Number Bases</a>
            <a onclick="navigate('computerScience/datarepresentation/binarymath/index.php')">Binary Math</a>
            <a onclick="navigate('computerScience/datarepresentation/text.php')">Text</a>
            <a onclick="navigate('computerScience/datarepresentation/image.php')">Images</a>
            <a onclick="navigate('computerScience/datarepresentation/sound.php')">Sound</a>
            </div>
        </div> 
        </center>
    </nav>
