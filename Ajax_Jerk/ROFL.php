
<?php 


include '../Backend/DataBaseConnection.php';


$ValueName = $_POST["NameValue"];
                
$sql = "SELECT * FROM hotels WHERE hotels.name LIKE '".$ValueName."%'";

$result = $link->query($sql);


if ($result->num_rows > 0) {
    // output data of each row
    $emparray = array();
    while($row = $result->fetch_assoc())
    {
        $emparray[] = $row;
    }

    echo json_encode($emparray);
    
}

 ?>