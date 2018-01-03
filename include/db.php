<?php

require "rb-mysql.php";

R::setup( 'mysql:host=localhost;dbname=publichtml',
       'root', '' );

session_start();
