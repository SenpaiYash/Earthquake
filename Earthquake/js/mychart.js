var xmlhttp = new XMLHttpRequest();
var url = "https://earthquake.usgs.gov/fdsnws/event/1/query?format=geojson&starttime=2020-01-15T00:00:00&endtime=2020-01-15T12:00:00";
xmlhttp.open("GET", url, true);
xmlhttp.send();
xmlhttp.onreadystatechange = function() {
    if (this.readyState == 4 && this.status == 200) {
        var data = JSON.parse(this.responseText);        
        // console.log(data);
        var mag = data.features.map(function(elem){
            return elem.properties.mag;           
        });
        var place = data.features.map(function(elem){
            return elem.properties.place; 
        }); 

        var ctx = document.getElementById('canvas').getContext('2d');
        var myChart = new Chart(ctx, {
        type: 'line',
        data: {
            labels: place,
            datasets: [{
                label: 'Magnitude of Earthquake',
                data: mag ,
                backgroundColor: ['transparent'],       
                  
                borderColor: ['black'],            
                
                borderWidth: 1
            }]
        },
        options: {
             elements:{
                 line:{
                     tension:0.5
                 }
             },
            scales: {
                y: {
                    beginAtZero: true
                }
            }
        }
    });

    
    }


};

