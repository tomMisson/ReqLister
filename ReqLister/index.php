<?php

session_start();

$requirements = array();

$_SESSION['data'] = [];

require 'menu.php';

echo <<<_END
        <form method="post">
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
            <button type="submitSess" name="submit">Push to session</button>
        </form>
    </body>
    </html>
_END;

if (isset($_POST['submit'])){
   $data  = [
       'title' => $_POST['Name'],
       'Desc' => $_POST['Desc'],
       'Rationale' => $_POST['Rationale'],
       'Originator' => $_POST['Originator'],
       'Fit' => $_POST['Fit'],
       'CustSat' => $_POST['CustSat'],
       'CustDisSat' => $_POST['CustSat'],
       'priority' => $_POST['CustSat'],
       'conflicts' => $_POST['conflicts']
   ];

   array_push($requirements, $data);
   

}

if (isset($_POST['submitSess'])){
    $_SESSION['data'] = json_encode($requirements);
    header("Location: view.php");
}

?>