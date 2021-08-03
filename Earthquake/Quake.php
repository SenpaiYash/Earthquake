<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!--bootstrap css-->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
    
    <link rel="stylesheet" href="css/Layout.css"/>
    <link rel="stylesheet"  href="css/Menu.css"/> 
    <link rel="stylesheet"  href="css/font.css"/> 
    <link rel="stylesheet"  href="css/table.css"/>
    <link rel="stylesheet" href="css/ekko-lightbox.css"  />
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.7.0/css/all.css" />
    <link rel="stylesheet" href="https://unpkg.com/leaflet@1.7.1/dist/leaflet.css" />
    <link rel="shortcut icon" type="image/jpg" href="image/Icon.jpg"/>
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
          <li class="nav-item active">
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
     
      <h2><i class="fas fa-table"></i> XML Data Table</h2>

     <?php 

     $Quake=simplexml_load_file('https://earthquake.usgs.gov/fdsnws/event/1/query?format=quakeml&starttime=2020-01-15T00:00:00&endtime=2020-01-15T12:00:00');
  




     ?>
     <label for="search"><i class="fas fa-search"></i> Search:</label>
     <input type="text" name="search" id="search" class="form-control" placeholder="Search for Earthquakes.." />
    </div>
    <br /><br />

     <table class="table" id= "table-id">
            
                <tr>
                    <th>Type</th>
                    <th>Location</th>
                    <th>Time</th>
                    <th>Longitude</th>
                    <th>Latitude</th>
                    <th>Magnitude</th>
                   
                </tr>
            
            <tbody>
<?php foreach($Quake -> eventParameters->event as $Quake_Key): ?>
                <tr>
                    <td><?php echo substr($Quake_Key->description->type,0,-4);?></td>
                    <td><?php echo $Quake_Key->description->text;?></td>
                    <td><?php echo substr($Quake_Key->origin->time->value,11,-5);?></td>
                    <td><?php echo $Quake_Key->origin->longitude->value;?></td>
                    <td><?php echo $Quake_Key->origin->latitude->value;?></td>
                    <td><?php echo $Quake_Key->magnitude->mag->value;?></td>
                
                </tr>
                <?php endforeach;?>
              
            </tbody>
        </table>


     
   <!--Js-->
   <script src="http://ajax.googleapis.com/ajax/libs/jquery/1.4.2/jquery.min.js"></script>
        <script src="js/jquery.sortElements.js"></script>
        <script>
            var th = jQuery('th'),
                inverse = false;
            
            th.click(function(){
                
                var header = $(this),
                    index = header.index();
                    
                header
                    .closest('table')
                    .find('td')
                    .filter(function(){
                        return $(this).index() === index;
                    })
                    .sortElements(function(a, b){
                        
                        a = $(a).text();
                        b = $(b).text();
                        
                        return (
                            isNaN(a) || isNaN(b) ?
                                a > b : +a > +b
                            ) ?
                                inverse ? -1 : 1 :
                                inverse ? 1 : -1;
                            
                    }, function(){
                        return this.parentNode;
                    });
                
                inverse = !inverse;
                
            });
            
            $('button').click(function(){
                li.sortElements(function(a, b){
                    return $(a).text() > $(b).text() ? 1 : -1;
                });
            });

        </script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
    <script src="https://unpkg.com/leaflet@1.7.1/dist/leaflet.js"></script>
       <script src="js/leaflet.js"></script>
    <script src="js/tabledata.js"></script>
    

</body>

</html>