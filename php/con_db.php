<?php
$conn = mysqli_connect('localhost','root','','maweb');
if(!$conn){ echo "Erorr: " . mysqli_connect_error();};