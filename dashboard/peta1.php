
<div class= "content-wrapper"style="min-height: 549px;">
<div class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
         

        
          
            
              <h2 class="panel-title"><strong>Data Geografis Aset Perumdam Tirta Kencana Samarinda</strong></h2>
            </div>
            <div class="panel-body">
              <div id="map" style="width:100%;height:800px;"></div>



<script src="https://maps.googleapis.com/maps/api/js?libraries=places&key=AIzaSyAbXF62gVyhJOVkRiTHcVp_BkjPYDQfH5w"></script>
<?php //'?>
<script type="text/javascript">
  function initialize() {
    
    var mapOptions = {   
        zoom: 11,
        center: new google.maps.LatLng(-0.5096845, 117.0354411), 
        disableDefaultUI: true
    };

    var mapElement = document.getElementById('map');

    var map = new google.maps.Map(mapElement, mapOptions);

    setMarkers(map, officeLocations);

}

var officeLocations = [
<?php
$data = file_get_contents('http://localhost/Aset/dashboard/ambildata.php' );
                $no=1;
                if(json_decode($data,true)){
                  $obj = json_decode($data);
                  foreach($obj->results as $item){
?>
[<?php echo $item->id_lokasi ?>,'<?php echo $item->lokasi ?>','<?php echo $item->alamat ?>', <?php echo $item->longitude ?>, <?php echo $item->latitude ?>],
<?php 
}
} 
?>    
];

function setMarkers(map, locations)
{
    var globalPin = '../pic/marker.png';

    for (var i = 0; i < locations.length; i++) {
       
        var office = locations[i];
        var myLatLng = new google.maps.LatLng(office[4], office[3]);
        var infowindow = new google.maps.InfoWindow({content: contentString});
         
        var contentString = 
            '<div id="content">'+
            '<div id="siteNotice">'+
            '</div>'+
            '<h5 id="firstHeading" class="firstHeading">'+ office[1] + '</h5>'+
            '<p id="firstHeading" class="firstHeading">'+ office[2] + '</p>'+
            '<div id="bodyContent">'+ 
            '<a href=detail.php?id='+office[0]+'>Info Detail</a>'+
            '</div>'+
            '</div>';

        var marker = new google.maps.Marker({
            position: myLatLng,
            map: map,
            title: office[1],
            icon:'../pic/marker.png'
        });

        google.maps.event.addListener(marker, 'click', getInfoCallback(map, contentString));
    }
}

function getInfoCallback(map, content) {
    var infowindow = new google.maps.InfoWindow({content: content});
    return function() {
            infowindow.setContent(content); 
            infowindow.open(map, this);
        };
}

initialize();
</script>
            </div>
          </div>
        </div>
        </div>
      </div>
    </div>

          <!-- /.col -->
          <!-- /.col -->
        </div><!-- /.row -->
      </div><!-- /.container-fluid -->
    </div>
  </div>
  