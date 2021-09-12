<?php

session_start();
session_destroy();
echo "<h1 style='text-align:center;'>You are redirected to landpage!</h1>";
header("refresh:3; url=../index.html");