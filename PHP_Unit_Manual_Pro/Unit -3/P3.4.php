<?php
// To delete a cookie, set its expiration time to the past
setcookie("user", "", time() - 3600, "/");
echo "Cookie has been deleted.";
?>