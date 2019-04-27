<?php include "../../navigation.php";?>
<div class="contentArea">
<center>
    <h1 class="pageTitle">Haskell Reference</h1>
    <table>
        <thead>
            <tr>
                <!-- <th>Function</th> -->
                <th>Code</th>
                <th>Description</th>
                <th>Example</th>
            </tr>
        </thead>
        <tbody>
            <tr>
                <!-- <td rowspan="4" class="tableLabel">Page</td> -->
                <td >+ - * / ^</td>
                <td>Arithmetic Operators - Plus, Minus, Multiply, Divide and Exponent</td>
                <td><code>(3 * 4)/10</code></td>
            </tr>
            <tr>
                <td>== /= < <= > >=</td>
                <td>Comparison Operators - Equals, Not Equal, Less Than, Less Than or Equal To, Greater Than, Greater Than or Equal To </td>
                <td><code>if a >= b then True else False</code></td>
            </tr>
            <tr>
                <td>&& || not</td>
                <td>Logic - And, Or, Not</td>
                <td><code>if a == b || a == c then True else False</code></td>
            </tr>
            <tr>
                <td>`mod` `div`</td>
                <td>Integer Division - Mod returns remainder, Div returns integer part of answer </td>
                <td><code>if a `mod` 2 == 0 then True else False</code></td>
            </tr>
            <tr>
                <td>:</td>
                <td>Constructs a new list with provided element at the front</td>
                <td><code>42:[4,3,2,1,0] = [42,4,3,2,1,0]<br><br>1:2:[] = [1,2]</code></td>
            </tr>
            <tr>
                <td>elem</td>
                <td>Is provided value a member of list?</td>
                <td><code>elem 4 [1,2,3,4,5] = True <br><br>elem 4 [1,3,5] = False</code></td>
            </tr>
            <tr>
                <td>head</td>
                <td>Gets first element of a list</td>
                <td><code>head [2,4,6,8] = 2</code></td>
            </tr>
            <tr>
                <td>tail</td>
                <td>Gets list without the first element</td>
                <td><code>tail [3,5,7,9] = [5,7,9]</code></td>
            </tr>
            <tr>
                <td>last</td>
                <td>Gets last element of a list</td>
                <td><code>last [3,5,7,9] = 9</code></td>
            </tr>
            <tr>
                <td>init</td>
                <td>Gets list without the last element</td>
                <td><code>init [2,4,6,8] = [2,4,6]</code></td>
            </tr>
            <tr>
                <td>++</td>
                <td>Concatenates two lists</td>
                <td><code>[1,2,3] ++ [7,9] = [1,2,3,7,9]</code></td>
            </tr>
            <tr>
                <td>null</td>
                <td>Test if a list is empty</td>
                <td><code>null [] = True<br><br>null [1] = False</code></td>
            </tr>
            <tr>
                <td>length</td>
                <td>Returns the length of a list</td>
                <td><code>length [1,14,5] = 3</code></td>
            </tr>
            <tr>
                <td>reverse</td>
                <td>Reverse a list</td>
                <td><code>reverse [2, 7, 5] = [5,7,2]</code></td>
            </tr>
            <tr>
                <td>map</td>
                <td>Applies a function to every element of a list</td>
                <td><code>map (*2) [1,2,3] = [2,4,6]</code></td>
            </tr>
            <tr>
                <td>filter</td>
                <td>Returns a list with only those values that met the condition</td>
                <td><code>filter (&lt;10) [5,7,11,13,25,3] = [5,7,3]</code></td>
            </tr>
        </tbody>
    </table>
</center>
</div>
<?php include "../../footer.php";?>