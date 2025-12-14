<?php

$todos = isset($_COOKIE["todos"])
    ? json_decode($_COOKIE["todos"], true)
    : [];
 
if(isset($_POST["todo"])){

 $todos[]=$_POST["todo"];
  
 setcookie("todos", json_encode($todos), time() + 3600);

     header("Location: " . $_SERVER['PHP_SELF']);
    exit();

}
?>

<!DOCTYPE html>
<html>
<body>
<form method="post">
  <input type="text" name="todo" placeholder="To Do..." required>
  <input type="submit" value="Add">
  <ol>
  <?php             
     
     foreach($todos as $todo){

       echo"<li> $todo </li>"; 

     }


  ?>
  </ol>
</form>
</body>
</html>
