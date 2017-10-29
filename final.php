<?php
    //$key=$_GET['key'];
    //$city=$_GET['city_name'];

    $username="root";
    $array = array();
    $databasename="zomato";
    $tablename="hotel_details";
    $password="";
    $servername="localhost";
    $key = $_POST['key'];
    $city = $_POST['city_name'];

    $con = new mysqli($servername,$username,$password,$databasename);
    $slt="select * from hotel_details WHERE hotel_name LIKE '%{$key}%' AND city_name LIKE '%{$city}%' ";
    $query = $con->query($slt);
    $index=0;
    while($row=mysqli_fetch_assoc($query))
    {
      $array[$index]['name'] = $row['hotel_name'];
      $array[$index]['location'] = $row['location'];
      $index++;
      
    }
    echo json_encode($array);
   

?>