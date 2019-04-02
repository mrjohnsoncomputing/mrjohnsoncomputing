<?php include "../../navigation.php";?>
<?php include "jsNavigation.php";?>
    <div class="contentArea">
    <center>
        <h1 class="pageTitle">Javascript Events</h1>
        <iframe id="youtube_video" src="https://www.youtube.com/embed/fix939H4Sv4" frameborder="0" allow="accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
        <!-- <video controls>
            <source src="media/domEvents.mp4" type="video/mp4">
            Your browser does not support the video tag. MrJohnsonComputing is optimised for Google Chrome.
        </video> -->
        
        <p>Browsers these days do more than just read your code, they also monitor all user input and record them, even something as simple as the mouse moving over the page, and your browser broadcasts these events which are available for you to pick up, inspect and use should you wish.</p>
        <p>Let’s have a look at a simple event - the mouse moving. We are going to attach what we call an “Event Listener” to the body of our document. “Event Listener” essentially means that we tell the browser what to do should a certain event happen at the defined location. For this example, our location is going to be the whole webpage - the body - and we want to check for the event of the mouse moving.</p>
        <p>The code below shows how we attach a function to an event at a certain location. All HTML elements have the same set of events, and we could just as easily be talking about the mouse moving over a button or a link. For this example, we will just be using the body as it will be easy to test if it is working. Type in the below code to the console (check your curly brackets) and move your mouse around the webpage and see what is output to the console.</p>
        <img src="media/eventAttach.png" height="100px" alt="Code typed into the console to attach a mouse event to the body">
        <img src="media/eventOutput.png" width="300px" alt="Result of logging an event into the console" class="floatRight">
        <p>You should hopefully notice that whenever you move your mouse, over the body, a “Mouse Event” object is posted to the console. We can click on the little arrow next to the mouse event and look at its properties. We can see that this object has a property called “srcElement”. This is a very powerful property, as it lets us know what the element is that we ran our mouse over.</p>
        <p>Change what you are logging to the console in the above code from event to event.srcElement. You should now see that instead of a MouseEvent being logged to the console, we have the element that we ran our mouse over being logged to the console. </p>
        <img src="media/onMouse.png" width="300px" alt="List of mouse events given by the console" class="floatLeft">
        <p>Typing in just “document.body.onmouse” shows us a list of different mouse events that we can look at in the browser. </p>
        <img src="media/on.png" width="300px" alt="List of events given by the conosle" class="floatRight">
        <p>It turns out, this is just the tip of the iceberg, as typing in “document.body.on” reveals to us a huge list that you can scroll through of lots of different events.</p>
        <div class="task-box">        
            <h2 class="h-task">Test Your Knowledge</h2>
            <p class="p-task">Take a few minutes to scroll through the events and try to see if you can make an educated guess at what some of them do. <br> Pick an event you think you understand and log it to the console as we did at the start, by attaching a function to it - do you get the event logged in the console? </p>
        </div>
    </center>
    </div>
<?php include "../../footer.php";?>