<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!--bootstrap css-->

    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
    
    <link rel="stylesheet" href="css/Layout.css"/>
    <link rel="stylesheet" href="css/card.css"/>
    <link rel="stylesheet"  href="css/Menu.css"/> 
    <link rel="stylesheet"  href="css/font.css"/>       
    <link rel="stylesheet" href="css/ekko-lightbox.css"  />
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.7.0/css/all.css" />
    <link rel="stylesheet" href="https://unpkg.com/leaflet@1.7.1/dist/leaflet.css" />
    <link rel="shortcut icon" type="image/jpg" href="image/Icon.jpg"/>
    <style>
    body {
    background-image: url("image/EQ.jpg");
    background-size: 100% 100%;
    background-repeat: no-repeat;                      
    

      }
    </style>

       
    <title>GeoQuake</title>
</head>
<body>

    <!--Navbar-->
    <nav class="navbar navbar-expand-sm  navbar-dark bg-dark">
        <a class="navbar-brand" href="index.php"><img src="image/Icon.jpg" alt="Icon" style="width:60px;height:50px;"></a>
        <a class="navbar-brand" href="index.php">GeoQuake</a>
        <button class="navbar-toggler collapsed" type="button" data-toggle="collapse" data-target="#navbarsExample01" aria-controls="navbarsExample01" aria-expanded="false" aria-label="Toggle navigation">
          <span class="navbar-toggler-icon"></span>
        </button>  
        <div class="navbar-collapse collapse" id="navbarsExample01">
          <ul class="navbar-nav mr-auto">
          <li class="nav-item">
                <a class="nav-link" href="Quake.php">XML Data Table</a>
              </li>  
            <li class="nav-item">
              <a class="nav-link" href="JsonTable.php">Json Data Table</a>
                     </li>
            <li class="nav-item">
                <a class="nav-link" href="Geo.php">Geo Location Map</a>
              </li>               
              <li class="nav-item">
                <a class="nav-link" href="Chart.php"> Data Chart </a>
              </li>  
          </ul>         
        </div>
      </nav>
      
      <div class="card-2">  
       <div class="row">
  <div class="col-6 col-sm-4">
  <div class="card text-white bg-dark mb-5" style="max-width: 25rem;">
      <div class="card-body">
        <h5 class="card-title">XML Data Table</h5>
        <p class="card-text">View all Earthquake data from XML</p>
        <a href="Quake.php" class="btn btn-dark">View <i class="fas fa-chevron-right"></i> </a>
      </div>
    </div>
  </div>
  <div class="col-6 col-sm-4">
  <div class="card text-white bg-dark mb-5" style="max-width: 25rem;">
      <div class="card-body">
        <h5 class="card-title">Earthquake Mag Chart</h5>
        <p class="card-text">View all Earthquake in Line Chart.</p>
        <a href="Chart.php" class="btn btn-dark">View <i class="fas fa-chevron-right"></i> </a>
      </div>
    </div>
  </div>
</div>
<div class="row">
  <div class="col-6 col-sm-4">
  <div class="card text-white bg-dark mb-5" style="max-width: 25rem;">
      <div class="card-body">
        <h5 class="card-title">Json Data Table</h5>
        <p class="card-text">View all Earthquake data from Json.</p>
        <a href="JsonTable.php" class="btn btn-dark">View <i class="fas fa-chevron-right"></i> </a>
      </div>
    </div>
  </div>
  <div class="col-6 col-sm-4">
  <div class="card text-white bg-dark mb-5" style="max-width: 25rem;">
      <div class="card-body">
        <h5 class="card-title">Geo Location Map</h5>
        <p class="card-text">View all the locations of Earthquake</p>
        <a href="Geo.php" class="btn btn-dark">View <i class="fas fa-chevron-right"></i> </a>
      </div>
    </div>
  </div>
</div>
</div>
      

     

     


     
    <!--Js-->
    <script src="https://code.jquery.com/jquery-3.6.0.slim.min.js" integrity="sha256-u7e5khyithlIdTpu22PHhENmPcRdFiHRjhAuHcs05RI=" crossorigin="anonymous"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
    <script src="https://unpkg.com/leaflet@1.7.1/dist/leaflet.js"></script>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.0/jquery.min.js"></script>  
    <script src="js/leaflet.js"></script>
    <script src="js/tabledata.js"></script>
  

</body>
</body>

</html>