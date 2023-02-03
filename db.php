<?php

session_start();
$conn = mysqli_connect(
    'localhost',
    'root',
    '',
    'bibliotech'
);

// to check if the connection works
// if (isset($conn)){
//     echo 'DB is connected';
// }

?>
