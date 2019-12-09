<?php

session_start();

require 'menu.php';

echo <<<_END
        <form action="addData.php" method="post">
            <ul>
                <li>
                    <label for="Name">Title:</label>
                    <input type="text" name="Name">
                </li>
                <li>
                    <label for="Desc">Description:</label>
                    <textarea wrap="hard" name="Desc" rows=4></textarea>
                </li>
                <li>
                    <label for="Rationale">Rationale:</label>
                    <textarea wrap="hard" name="Rationale" rows=4/></textarea>
                </li>
                <li>
                    <label for="Originator">Originator:</label>
                    <input type="text" name="Originator">
                </li>
                <li>
                    <label for="Fit">Fit criterion:</label>
                    <textarea wrap="hard" name="Fit" rows=4/></textarea>
                </li>
                <li>
                    <label for="CustSat">Customer Satisfaction:</label>
                    <select name="CustSat">
                        <option value="1">1</option>
                        <option value="2">2</option>
                        <option value="3">3</option>
                        <option value="4">4</option>
                        <option value="5">5</option>
                    </select>
                </li>
                <li>
                    <label for="CustDisSat">Customer Dissatisfaction:</label>
                    <select name="CustDisSat">
                        <option value="1">1</option>
                        <option value="2">2</option>
                        <option value="3">3</option>
                        <option value="4">4</option>
                        <option value="5">5</option>
                    </select>
                </li>
                <li>
                    <label for="priority">Priority:</label>
                    <select name="priority">
                        <option value="1">1</option>
                        <option value="2">2</option>
                        <option value="3">3</option>
                        <option value="4">4</option>
                        <option value="5">5</option>
                    </select>
                </li>
                <li>
                    <label for="conflicts">Conflicts:</label>
                    <select name="conflicts">
                        <option selected= "selected"value="None">None</option>    
 
_END;


echo <<<_END
                    </select>
                </li>
            </ul>
            <button type="submit" name="submit">Submit</button>
        </form>
    </body>
    </html>
_END;



?>