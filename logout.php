<?php
setcookie('username', '', time() - 84600, '/');
header('LOCATION:signin.html');
