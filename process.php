<?php

echo 'processing..';

//Check for GET variable
if(isset($_GET['name'])){
	echo "GET: Your name is ". $_GET['name'];
}