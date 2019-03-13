<?php include "../../navigation.php";?>
<?php include "jsNavigation.php";?>
    <div class="contentArea">
    <center>
        <h1 class="pageTitle">Javascript Basics</h1>
        
        <h2 class="subtitle">Declaring a Variable</h2>
        <video controls>
            <source src="media/variables.mp4" type="video/mp4">
            Your browser does not support the video tag. MrJohnsonComputing is optimised for Google Chrome.
        </video>
        <p>When we declare a variable, we are telling the computer to allocate some memory to store a value.</p>
        <p>Some computer languages, like Visual Basic and Java, want you to tell the computer exactly what data type you are going to be using in that variable so that it can have a rough idea of how much memory it would need to set aside for your variable. Other languages, like Python and JavaScript, don’t make you do this.</p>
        <p>A variable declaration is a simple as this:</p>
        <img src="media/variable1.png" alt="Variable declaration">

        <p>We have told the computer that we want it to remember a bit of data, that we will refer to as my_number. I made up the name my_number. We could have just as easily have called it my_unicorn, banana or variable5. </p>
        <p>There are however, a few rules that variable naming has to follow:</p>
        <ul>
            <li>Variable names should be descriptive - var a; is much less informative than var my_number;</li>
            <li>Variable names cannot start with a number</li>
            <li>Variable names should not contain symbols, apart from the underscore as used above. </li>
            <li>Variable names should be all lowercase</li>
        </ul>
        <p>When we declare a variable, we can also assign it a value at the same time. In the example above, the value of my_number would literally come back as “undefined”, because it is yet to be assigned a value. Below, we declare the variable my_number, and also assign it a value of 5. </p>
        <img src="media/variable2.png" alt="Variable declaration and assignment">
        <p>Using a single equals sign in most programming languages means that we are assigning a value to a variable. For instance, in the above, we are assigning the value of 5 to the variable my_name. </p>
        <p>Because of this, most programming languages will use a two equals sign to indicate a comparison. For instance, the expression <code>my_number == 5</code> would not update the value of the variable my_number, but would compare the current value of my_number to the number 5 and return a boolean value</p>
        <p>We only need to declare a variable once, using the “var” keyword. We can then change the value of the variable as and when we like. We only use “var” when declaring a variable. Any time we update or use the variable, we just address it by name. </p>
        <img src="media/variable4.png" alt="Variable assignment">
        
        <div class="task-box">
            <h2 class="h-task">Test your understanding</h2>
            <img src="media/variable3.png" alt="Variable task" class="floatRight">
            <p class="p-task">
                In the console, declare a variable called my_number. Type in the name of a variable at any time to see its value. Now that you have declared the variable my_number, type it into the console and see what value it is.
                <br><br>
                Now assign it the value 5. Use the console again to check that its value is 5. Add 7 to your variable and check the result. It should now have the value 12.
            </p>
        </div>  
    </center>
    </div>
<?php include "../../footer.php";?>