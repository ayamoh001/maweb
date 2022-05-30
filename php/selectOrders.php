<?php
$select = "SELECT * FROM orders ORDER BY date DESC LIMIT 9";
$res = mysqli_query($conn,$select);
$the_orders = mysqli_fetch_all($res,MYSQLI_ASSOC);
