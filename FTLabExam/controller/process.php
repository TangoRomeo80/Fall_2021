<?php
include('../model/db.php');

$id = $_GET['id'];
$name = $_GET['name'];
$salaryMin = $_GET['salaryMin'];
$salaryMax = $_GET['salaryMax'];

$connection = new db();
$conobj=$connection->open_con();

$result = $connection->searchEmp($conobj, $id, $name, $salaryMin, $salaryMax);

if($result == 'not found') echo 'No search criteria was provided';
elseif ($result->num_rows > 0){
    while($row = $result->fetch_assoc()){
        echo $row["Name"]."<br>";
    }
}
else{
    echo 'No results found';
}

?>