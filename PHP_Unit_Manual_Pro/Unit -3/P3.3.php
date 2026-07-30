<?php
// Alternative way to set a cookie using raw HTTP headers
header("Set-Cookie: user=JohnDoe; expires=" . gmdate('D, d M Y H:i:s \G\M\T', time() + 3600) . "; path=/");
echo "Cookie set using header.";
?>