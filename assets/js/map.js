<script>
      function initMap() {
        var uluru = {lat: 21.0805909, lng: 79.7829937};
        var map = new google.maps.Map(document.getElementById('contactgoogleMap'), {
          zoom: 4,
          center: uluru
        });
        var marker = new google.maps.Marker({
          position: uluru,
          map: map
        });
      }
    </script>

		<!-- GOOGLE MAP JS -->
			<script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyB0YyDTa0qqOjIerob2VTIwo_XVMhrruxo&callback=initMap"</script>