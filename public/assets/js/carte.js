window.onload = function(){
    let carte = L.map('mapid').setView([12.2418505,-1.5567604999999958],13)
    L.tileLayer('https://{s}.tile.openstreetmap.fr/osmfr/{z}/{x}/{y}.png',{
    attribution: 'Map data &copy; <a href="https://www.openstreetmap.org/">OpenStreetMap</a>',
    minZoom: 1,
    maxZoom: 18,
    name: 'tiles'
    }).addTo(carte);
    // Gestion de l'itinéraire
    L.Routing.control({
        geocoder: L.Control.Geocoder.nominatim(),
        lineOptions: {
            styles: [{
                color: 'green',
                opacity: 1,
                weigh: 7
            }]
        },
        router: new L.Routing.osrmv1({
            language: 'fr',
            profile: 'car',
            position: 'center'
        })
    }).addTo(carte);
    
    routeControl.on('routesfound', function(e){
        distance = e.routes[0].summury.totalDistance;
        time = e.routes[0].summary.totalTime;
        alert('Distance' + distance + ' temps' + time );
    }
   

    // Calcul de distance entre deux points
    // var router = platform.getRoutingService(),
    // routeRequestParams = {
    //   mode: 'fastest;car',
    //   representation: 'display',
    //   routeattributes: 'waypoints,summary,shape,legs',
    //   maneuverattributes: 'direction,action',
    //   waypoint0: '52.5160,13.3779', // Brandenburg Gate
    //   waypoint1: '52.5206,13.3862'  // Friedrichstraße Railway Station
    // };    
    
    // router.calculateRoute(
    //     routeRequestParams,
    //     onSuccess,
    //     onError
    // );
    // alert('Total distance is ' + summary.totalDistance / 1000 + ' km and total time is ' + Math.round(summary.totalTime % 3600 / 60) + ' minutes');


    //Return Distance in meters between two coordinates
    //earth's circumference is 40030 Km long, divided in 360 degrees, that's 111190
    // *****Calcul de distance entre 2 points***************
    // function calcDist($lat1,$lon1,$lat2,$lon2) {
    //     if ($lat1==$lat2 && $lon1==$lon2) return 0;
    //     $dist = sin(deg2rad($lat1)) * sin(deg2rad($lat2)) +  cos(deg2rad($lat1)) * cos(deg2rad($lat2)) * cos(deg2rad($lon1-$lon2));
    //     $dist = acos($dist); 
    //     $dist = rad2deg($dist);
    //     //debug("dist($lat1,$lon1,$lat2,$lon2)=$dist");
    //     if ($dist>0) return $dist * 111190;
    //     return 0;
    //     }

}

