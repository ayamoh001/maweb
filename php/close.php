<?php 
if(isset($res)){mysqli_free_result($res);};
mysqli_close($conn);