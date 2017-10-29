<?php
    $key=$_GET['key'];
    $city=$_GET['city'];
    $username="root";
    $array = array();
    $databasename="zomato";
    $tablename="hotel_details";
    $password="";
    $servername="localhost";
    $con = new mysqli($servername,$username,$password,$databasename);
    $slt="select * from hotel_details WHERE hotel_name LIKE '%{$key}%' AND city_name LIKE '%{$city}%' ";
    $query = $con->query($slt);
    while($row=mysqli_fetch_assoc($query))
    {
      $array[] = $row['hotel_name'];
    }
    echo json_encode($array);
   

?>