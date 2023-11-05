<?php
$connection = mysqli_connect("192.168.29.38","root","","address") or die("Connection Failed");
$query = "SELECT name FROM countries ORDER BY countries.name ASC";
$result = mysqli_query($connection, $query) or die("query not found");

if(mysqli_num_rows($result) > 0){
    while($rows = mysqli_fetch_assoc($result)){
        $output = "<option>.{$rows[`name`]}.</option>";
    } 
    // mysqli_close($connection);

    echo $output;
}
else
{
    echo"No record Found";
}



?>
