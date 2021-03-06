<?php include "../../navigation.php";?>
<?php include "cssNavigation.php";?>
<div class="contentArea">
<center>
    <h1 class="pageTitle">CSS Reference Guide</h1>
    <table>
        <thead>
            <tr>
                <th>Property</th>
                <th>Description</th>
                <th>Common Values</th>
                <th>Options</th>
            </tr>
        </thead>
        <tbody>
            <tr>
                <td>height</td>
                <td>The height of the selected element. Can be set in Pixels (px) for fixed sizes, or as a Percentage (%) to help your page scale better</td>
                <td>Pixels, Percentage, Viewheight</td>
                <td>height: 100px;</td>
            </tr>
            <tr>
                <td>width</td>
                <td>The width of the selected element. Can be set in Pixels (px) for fixed sizes, or as a Percentage (%) to help your page scale better</td>
                <td>100px, 30%, 10vh</td>
                <td>width: 25%;</td>
            </tr>
            <tr>
                <td>background-color</td>
                <td>The colour of the background of the element you are styling. </td>
                <td>red, lightblue, #ffffff, rgba(100, 250, 50, 100)</td>
                <td>background-colour: red;</td>
            </tr>
            <tr>
                <td >color</td>
                <td>What colour the text should be written in - you can use words for general colours, or a <a href="">Hex Code</a> for greater precision.</td>
                <td>red, lightblue, #ffffff, rgba(100, 250, 50, 100)</td>
                <td>color: white;</td>
            </tr>
            <tr>
                <td>text-align</td>
                <td>Which side of the element the text should be aligned to.</td>
                <td>left, right, center, justify</td></td>
                <td>text-align: center;</td>
            </tr>
            <tr>
                <td>font-size</td>
                <td>Changes the size of the text in your selected element.</td>
                <td>20px, 1.3em, 15%, 4vmin</td>
                <td>font-size: 10px;</td>
            </tr>
            <tr>
                <td>font-weight</td>
                <td>Sets the boldness of your text. </td>
                <td>normal, bolder, lighter, 100 - 900</td>
                <td>font-weight: bold;</td>
            </tr>
            <tr>
                <td>font-family</td>
                <td>Sets the font of your text. </td>
                <td>Arial, Times New Roman, Courier New</td>
                <td>font-family: Arial;</td>
            </tr>
            <tr>
                <td>padding</td>
                <td>How much empty space between the edge of your element and the content inside.</td>
                <td>10px, 5%</td>
                <td>padding: 5px;</td>
            </tr>
            <tr>
                <td>margin</td>
                <td>Sets the space between the selected element and other elements</td>
                <td>10px, 5%</td>
                <td>margin: 20px;</td>
            </tr>
            <tr>
                <td>border</td>
                <td>Adds a border around your element. Takes three properties: thickness, style and colour.</td>
                <td>solid, dashed, dotted</td>
                <td>border: 2px solid black;</td>
            </tr>
        </tbody>
    </table>
</center>
</div>
<?php include "../../footer.php";?>