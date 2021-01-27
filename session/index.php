<!DOCTYPE html>
<html>
<body>
<?php
session_start();




// Echo session variables that were set on previous page
echo "Favorite color is " . $_SESSION["favcolor"]="blue". ".<br>";
echo "Favorite animal is " . $_SESSION["favanimal"]="ebi" . ".";
?>

</body>
</html