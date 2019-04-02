<?php include "../../navigation.php";?>
<?php include "jsNavigation.php";?>
    <div class="contentArea">
    <center>
        <h1 class="pageTitle">The Chrome Developer Tools</h1>
        <iframe id="youtube_video" src="https://www.youtube.com/embed/Gx19Bg9H9wY" frameborder="0" allow="accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
        <!-- <video controls>
            <source src="media/devTools.mp4" type="video/mp4">
            Your browser does not support the video tag. MrJohnsonComputing is optimised for Google Chrome.
        </video> -->
        
        <p>Let me introduce you to your new best friend - the chrome developer tools. Each browser has its own developer tools, but Chrome’s are especially good. Suffice it to say, we will be working in Google Chrome for this. </p>
        <p>In Google Chrome, press the F12 button on your keyboard. After a few seconds, a section should pop out of the right hand side of your browser window.</p>
        <p>There are lots of different functions the developer tools offer, but for our purposes, we shall only be exploring two of them - Elements and Console. </p>
        <h2>Elements</h2>
        
        <p>You can see in the image on the right that our Developer Tools has opened up with the Elements tab selected. This tab allows you to explore all of the HTML elements on your page, by clicking the little triangles next to each element, expanding them to see their Children.</p>
        <img src="media/elements.png" width="300px" alt="Example use of the Elements Tab" class="floatRight">
        <p>Yes, in web development, we actually use the word children to describe elements that are inside another element. Everything inside the body is a child of the body. This also means that we refer to the body as the parent element of the children.</p>
        <p>Navigate to a webpage and use the developer tools to look through the different elements. Notice how each element on the page is highlighted as you put your mouse over it’s code.</p>
        <p>You can also see that the bottom section of the elements tab tells us about the styles of the page. We can see that with the body selected, we can see all of the styles applied to it, as well as a diagram on the right hand side of any padding, margins, borders and content inside the element. For the body we can see that it has no padding, margins or borders, but we can see that the content inside it is 1013px wide by 758px tall.</p>
        
        <h2>Console</h2>
        <img src="media/console.png" width="300px" alt="Example code in the console" class="floatLeft">
        <p>Because JavaScript is an interpreted language, we are able to type code into the interpreter in real time, so that we can test things out very quickly on the fly. We wouldn’t write proper code in the console, but we can use it as a testing tool for our code. Click on the console tab at the top of the developer tools, and you should be greeted with a big blank section and a flashing line, indicating that you can type into it.</p>
        <p>Let us prove that the console will run our code. Declare a variable called “a” and assign it the value of 9. Now declare a variable “b” and assign it the value of 14. Lastly, declare a variable called “c”, and assign it the value of “a*b”. </p>
        <p>You should then be able to type in each variable name and the console will tell you its current value. </p>

    </center>
    </div>
<?php include "../../footer.php";?>