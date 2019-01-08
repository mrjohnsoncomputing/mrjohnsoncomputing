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
                <td>font-weight: </td>
            </tr>
            <tr>
                <td>CENTER</td>
                <td><center>Moves everything inside it to the center of the page</center></td>
                <td>&lt;center&gt;My centered text&lt;/center&gt;</td>
            </tr>
            <tr>
                <td>B</td>
                <td>Turns the text inside it <b>Bold</b></td>
                <td>&lt;b&gt;My text&lt;/b&gt;</td>
            </tr>
            <tr>
                <td>I</td>
                <td>Turns the text inside it <i>italic</i></td>
                <td>&lt;i&gt;My text&lt;/i&gt;</td>
            </tr>
            <tr>
                <td>LI</td>
                <td>Short for list, creates a list item, should be used with <i>UL</i> or <i>OL</i> - see below</td>
                <td>&lt;li&gt;Complete homework&lt;/li&gt;</td>
            </tr>
            <tr>
                <td>UL</td>
                <td>Creates an Unordered List, any <i>LI</i> tags inside it will turn into bullet points.</td>
                <td>
                    &lt;ul&gt;
                    <br>&lt;li&gt;Go shopping&lt;/li&gt;
                    <br>&lt;li&gt;Have Lunch&lt;/li&gt;
                    <br>
                    &lt;/ul&gt;
                </td>
            </tr>
            <tr>
                <td>OL</td>
                <td>Creates an Ordered List, any <i>LI</i> tags inside will turn to numbers instead of bullet points</td>
                <td>&lt;ol&gt;
                    <br>&lt;li&gt;Learn HTML&lt;/li&gt;
                    <br>&lt;li&gt;Write an amazing website&lt;/li&gt;
                    <br>&lt;li&gt;Become rich and famous&lt;/li&gt;
                    <br>
                    &lt;/ol&gt;
                </td>
            </tr>
            <tr>
                <td>STRONG</td>
                <td>This tag is much like the bold tag, but it also indicates that the meaning of the text inside is important.</td>
                <td>&lt;strong&gt;My important message&lt;/strong&gt;</td>
            </tr>
            <tr>
                <td>EM</td>
                <td><i>EM</i> stands for emphasise, and is much like the italics tag. Should be used where special emphasis needs to be put on a text. </td>
                <td>&lt;em&gt;You should eat 5 fruit and vegetables a day.&lt;/em&gt;</td>
            </tr>
            <tr>
                <td>FONT</td>
                <td>Control the colour, style and size with the three attributes <b>color</b>, <b>face</b> and <b>size</b>.</td>
                <td>&lt;font color="red" face="verdana" size="10pt"&gt;My text&lt;/font&gt;</td>
            </tr>
            <tr>
                <td>Image</td>
                <td>IMG</td>
                <td>When you add the <b>src</b> attribute and specify a file path or web link, an image will display on your page</td>
                <td>&lt;img src="myImage.jpg"&gt;</td>
            </tr>
            <tr>
                <td>A</td>
                <td><i>A</i> stands for Anchor, which is another word for a hyperlink. You can use the <b>href</b> attribute (hyperlink reference) to specify what page or file you want to link to.</td>
                <td>Click &lt;a href="index.html"&gt;here&lt;/a&gt; to read more</td>
            </tr>
        </tbody>
    </table>
</center>
</div>
<?php include "../../footer.php";?>