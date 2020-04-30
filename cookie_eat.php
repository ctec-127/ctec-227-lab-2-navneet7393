<?php

// In the this script echo the value of each cookie using $_COOKIE[]

echo $_COOKIE['username']; 
echo"<br>";
echo $_COOKIE['firstname'];
echo"<br>";

// 5. For the array cookie use the following code to echo out the values of the cookies:
if (isset($_COOKIE["cookie"])){
    foreach ($_COOKIE["cookie"] as $key=>$val) {
    echo $key.' is '.$val."<br>\n";
    } // end foreach
   } // end if


?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <p><a href="cookie_eat.php">Cookie Eat</a></p>
    <p><a href="cookie_bake.php">Cookie Bake</a></p>
    <p><a href="cookie_monster.php">Cookie Monster</a></p>

</body>
</html>