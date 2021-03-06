<?php include "../../navigation.php";?>
<?php include "jsNavigation.php";?>
<div class="contentArea">
<center>
    <h1 class="pageTitle">Javascript Reference Guide</h1>
    <table>
        <thead>
            <tr>
                <th>Function</th>
                <th>Tag</th>
                <th>Description</th>
                <th>Example Code</th>
            </tr>
        </thead>
        <tbody>
            <tr>
                <td rowspan="4" class="tableLabel">Page</td>
                <td >HTML</td>
                <td>Tells the browser what language the page is written in.</td>
                <td>&lt;html&gt;<br>&lt;/html&gt;</td>
            </tr>
            <tr>
                <td>HEAD</td>
                <td>Information about the page is put in here.</td>
                <td>&lt;head&gt;<br>&lt;/head&gt;</td>
            </tr>
            <tr>
                <td>BODY</td>
                <td>This is where all of your content goes.<br>Use the attribute <b>bgcolor</b> to change the colour of the page's background.</td>
                <td>&lt;body bgcolor="red"&gt;<br>&lt;/body&gt;</td>
            </tr>
            <tr>
                <td>TITLE</td>
                <td>This puts the title on the top tab of the page.</td>
                <td>&lt;head&gt;<br>&lt;title&gt;My Title&lt;title&gt;<br>&lt;/head&gt;</td>
            </tr>
            <tr>
                <td rowspan="12" class="tableLabel">Text</td>
                <td>BR</td>
                <td>Adds a line break.</td>
                <td>Line 1&lt;br&gt;Line 2</td>
            </tr>
            <tr>
                <td>P</td>
                <td>Use for any normal text.</td>
                <td>&lt;p&gt;My paragraph&lt;/p&gt;</td>
            </tr>
            <tr>
                <td>H1</td>
                <td>Use for headings. <h1>H1 is the biggest</h1> <h6>H6 is the smallest</h6></td>
                <td>&lt;h1&gt;My heading&lt;/h1&gt;</td>
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
                <td>Link</td>
                <td>A</td>
                <td><i>A</i> stands for Anchor, which is another word for a hyperlink. You can use the <b>href</b> attribute (hyperlink reference) to specify what page or file you want to link to.</td>
                <td>Click &lt;a href="index.html"&gt;here&lt;/a&gt; to read more</td>
            </tr>
        </tbody>
    </table>
</center>
</div>
<?php include "../../footer.php";?>