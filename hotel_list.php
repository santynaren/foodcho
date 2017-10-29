<?php
    $key=$_GET['key'];
    $city=$_GET['city_name'];

    $username="root";
    $array = array();
    $databasename="zomato";
    $tablename="hotel_details";
    $password="";
    $servername="localhost";
    //$key = $_POST['key'];
    //$city = $_POST['city_name'];

    $con = new mysqli($servername,$username,$password,$databasename);
    $slt="select * from hotel_details WHERE hotel_name LIKE '%{$key}%' AND city_name LIKE '%{$city}%' ";
    $query = $con->query($slt);
   
   
    
      ?>


    <!doctype html>
    <html lang="en">

    <head>
        <title>Hello, world!</title>

        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
        <!-- Custom Typed CSS -->
        <link rel="stylesheet" href="custom.css">
        <!-- Bootstrap CSS -->


        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-beta.2/css/bootstrap.min.css" integrity="sha384-PsH8R72JQ3SOdhVi3uxftmaW6Vc51MKb0q5P2rRUpPvrszuE4W1povHYgTpBfshb"
            crossorigin="anonymous">
        <!-- Fonts From Google Fonts -->


        <link href="https://fonts.googleapis.com/css?family=Dosis|Oswald" rel="stylesheet">

    </head>

    <body>

        <nav class="navbar navbar-light bg-light">
            <a class="navbar-brand" href="#">Food Cho</a>
        </nav>

        <nav aria-label="breadcrumb" role="navigation">
            <ol class="breadcrumb">
                <li class="breadcrumb-item"><a href="http://localhost/zomato/">Home</a></li>
                <li class="breadcrumb-item"><a href="#">Hotels at  <?php echo $city;?> </a></li>
            </ol>
        </nav>


        <?php
        while($row=mysqli_fetch_assoc($query))
        {
            ?>
            <div class="container">
                <div class="card mb-3" >
                    <img class="card-img-top" height="150px"src="<?php echo $row['cover_pic'];?>" alt="Card image cap">
                    <div class="card-body">
                        <h4 class="card-title">
                            <?php  echo $row['hotel_name'];?>
                        </h4>
                        <h6 class="card-subtitle mb-2 text-muted"><?php echo $row['location'];?></h6>
                        <p class="card-text">
                            <?php echo $row['cusine_type'];?> | <?php echo $row['non_veg_check'];?>
                        </p>
                        <?php echo '<a  class="btn btn-primary" href="http://localhost/zomato/hotel.php?id='.$row['id'].'"';?>>INR <?php echo $row['pay_for_two'];?></a>
                    </div>
                </div>
                
            </div>



            <?php
     
     
      
      
    }
    echo'</ul>';
  
   

?>


                
                <!-- Optional JavaScript -->
                <!-- Custom JavaScript for AJAX | JQuery | Java Script -->

                <!-- jQuery first, then Popper.js, then Bootstrap JS -->

                <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN"
                    crossorigin="anonymous"></script>
                <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
                <script src="app.js"></script>
                <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.3/umd/popper.min.js" integrity="sha384-vFJXuSJphROIrBnz7yo7oB41mKfc8JzQZiCq4NCceLEaO4IHwicKwpJf9c9IpFgh"
                    crossorigin="anonymous"></script>
                <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-beta.2/js/bootstrap.min.js" integrity="sha384-alpBpkh1PFOepccYVYDB4do5UnbKysX5WZXm3XxPqe5iKTfUKjNkCk9SaVuEZflJ"
                    crossorigin="anonymous"></script>
    </body>

    </html>
