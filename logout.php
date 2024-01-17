<?php
session_start();
session_destroy();
echo "<script>alert('bye'); window.location =
'login.php'</script>";
