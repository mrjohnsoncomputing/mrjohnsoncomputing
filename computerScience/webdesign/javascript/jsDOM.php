<?php include "../../navigation.php";?>
<?php include "jsNavigation.php";?>
    <div class="contentArea">
    <center>
        <h1 class="pageTitle">The DOM</h1>
        <iframe id="youtube_video" src="https://www.youtube.com/embed/9wWJKBBJ-Ps" frameborder="0" allow="accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
        <!-- <video controls>
            <source src="media/dom.mp4" type="video/mp4">
            Your browser does not support the video tag. MrJohnsonComputing is optimised for Google Chrome.
        </video> -->
        <p>DOM stands for Document Object Model, and it simply refers to the structure of your HTML page. For instance, every HTML page with start with a <code>&lt;HEAD&gt;</code> and end with a <code>&lt;BODY&gt;</code>.</p>
        <p>The whole page is referred to as a document. When the browser interprets your HTML, it creates a DOM. This means it knows what the structure of the page is, and we can use JavaScript to access and manipulate it.</p>
        <img src="media/document.png" width="300px" alt="Result of typing document into the console" class="floatRight">
        <p>Open up the console on any web page and type in <code>document</code>. It will return the Document Object Model - the way the browser has stored your HTML page. You can see that from clicking the little arrow next to <code>#document</code> that we can start to see the structure of our page. You can further expand any tags with the little triangle next to them. </p>
        <div class="task-box">
            <h2 class="h-task">Task</h2>
            <p class="p-task">Take a couple of minutes to explore the DOM of a couple of web pages.</p>
        </div>
        <br>
        <img src="media/documentbody.png" height="150px" alt="Result of typing document.body into the console" class="floatLeft">
        <p>To be more specific, we can type in <code>document.body</code>. This means we will only get back all of the HTML that is actually displayed on the page. This is helpful if you are only concerned with page content, which is normally the case. You will rarely need to access anything that is in the head of the document. </p>

        <p>You can see that this time, we have only returned the body of the document, not the whole DOM, but a part of it. Having expanded the body tags, and the center tags within them, we can see the divisions that make up the page. Hovering your mouse over these divisions will highlight the relevant part on the page. This is really useful for finding where specific things have moved to if you are positioning them or removing them. </p>
        
        <h2>Classes and IDs</h2>
        <p>You will notice that the three divisions all have either a class or an ID. We can use methods attached to the document to access these in JavaScript. For instance we can use the following to get the element with the ID “titleBar”, and we can also get a list of all of the elements that belong to the class “contentBlock”.</p>
        <img src="media/documentmethods.png" height="150px" alt="Example use of document methods">
        <p>Remember that IDs are used for ONLY ONE element, whereas a class can be applied to as many elements as you like. This is why the first method, <code>getElementById</code> is singular, and the second method, <code>getElementsByClassName</code> is plural. This is also why the <code>getElementById</code> method returns a single element, whereas <code>getElementsByClassName</code> will always return a list of elements, even if there is only one element that belongs to that class.</p>
        <div class="task-box">
        
            <h2 class="h-task">Test Your Knowledge</h2>
            <img src="media/googleinput.png" width="200px" alt="Google sign-in page" class="floatRight">
            <p class="p-task">Using what you have just learnt, explore the DOM of the Google sign in page to identify the input box for an email address. Then use some javascript to write that element to the console, just like we did with the titleBar division above. <br></br> Can you use Javascript to insert your email address into the value of the input box?</p>
        </div>
    </center>
    </div>
<?php include "../../footer.php";?>