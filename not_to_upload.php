<?php
$link = mysqli_connect('localhost', 'root', '','aura');
if (!$link) {
    die('Could not connect: ' . mysqli_error());
}
$result = mysqli_query($link,'SELECT username FROM user_table');
if (!$result) {
    die('Could not query:' . mysqli_error());
}
echo mysql_result($result,2); // outputs third employee's name

mysqli_close($link);
?>