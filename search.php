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
   
    

    while($row=mysqli_fetch_assoc($query))
    {
        ?>
    <div id="tab">
        <h5><?php echo '<a href="http://localhost/zomato/hotel.php?id='.$row['id'].'"> ';  echo $row['hotel_name'];?></a></h5>
   
       <h6> <?php echo $row['location'];?></h6>
       <hr>
    <div>
    <?php
     
     
      
      
    }
    echo'</ul>';
  
   

?>