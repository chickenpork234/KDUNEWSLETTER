<?php
session_start();
session_destroy();

echo ('<script>
alert("Logout Successfull!")
location.href="non-members/home.php"
</script>');

header('Location: login.php');
exit;
?>