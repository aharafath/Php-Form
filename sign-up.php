<pre>

<?php 


if (in_array("", $_POST) ) {
        
    echo "All Fields Are Requred";
   
}else {

    

    echo "<ul>
            <li>" . htmlspecialchars($_POST['name']) . "</li>
            <li>" . htmlspecialchars($_POST['email']) . "</li>
            <li>" . htmlspecialchars($_POST['password']) . "</li>
          </ul>";
}
?>

</pre>