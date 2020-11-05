<?php
session_start();
?>
<!DOCTYPE html>
<html>
<body>
<h1>Login Success!</h1>
<?php
$loginResults = $_SESSION['Login'];
echo "The login session was set to : ".$_SESSION['Login'];
?>

</body>
</html>