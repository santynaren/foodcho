<?php
    //$key=$_GET['key'];
    //$city=$_GET['city_name'];

    $username="";// Username
    $array = array();
    $databasename=""; // Database Name 
    $tablename=""; // table Name
    $password="";// Password
    $servername=""; // Server Name 
    $key = $_POST['key'];
    $city = $_POST['city_name'];

    $con = new mysqli($servername,$username,$password,$databasename);
    $slt="select * from hotel_details WHERE hotel_name LIKE '%{$key}%' AND city_name LIKE '%{$city}%' ";
    $query = $con->query($slt);
   
    
  
?>
   


      
        <hr>
        <div> <?php
         if (mysqli_num_rows($query)== 0){
             ?> <div id="tab">
             <h5>
                 No Suggestions
             </h5><?php
            } else {
                while($row=mysqli_fetch_assoc($query)) { ?>
            <div id="tab">
                <h5>
                    <?php echo '<a href="http://foodcho.smazee.com/hotel.php?id='.$row['id'].'"> ';  echo $row['hotel_name'];?></a>
                </h5>

                <h6>
                    <?php echo $row['location'];?>
                </h6>
                <hr>
                <div>
                    <?php
                }
     
      
      
    }
    echo'</ul>';
  
   

?>