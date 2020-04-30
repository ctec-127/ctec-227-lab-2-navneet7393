<?php
//a. “username” to “BettyW” with an expiration two hours (time() + 7200
//Setting a cookie
setcookie("username", "BettyW", time() + 7200); 

// “firstname” to “Betty” with an expiration of two hours (time() + 7200)
setcookie("firstname", "Betty", time() + 7200);

//“lastname” to “White” with an expiration of two hours (time() + 7200)
setcookie("lastname", "White", time()+ 7200);

//d. Now set up 3 cookies using an array cookie:
setcookie("cookie[institution]","Clark", time() + 7200);
setcookie("cookie[city]","Vancouver", time() + 7200);
setcookie("cookie[state]","WA", time() + 7200);
//print r header_list() to show what is running in the header because cookies run in the header.
echo "<pre>";
print_r(headers_list());
echo "</pre>";

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