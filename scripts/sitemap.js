function initMap() {
    var op = { lat: -35.277633, lng: 174.082862 };
    var map = new google.maps.Map(document.getElementById("map"), {
      zoom: 9,
      center: op,
    });
    var marker = new google.maps.Marker({
      position: op,
      map: map,
    });
  }
  