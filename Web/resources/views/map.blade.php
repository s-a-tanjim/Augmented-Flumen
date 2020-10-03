<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">

  <title>Map | Augmented Flumen</title>

  <!-- Bootstrap CSS -->
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">


  <!-- Fonts -->
  <link href="https://fonts.googleapis.com/css2?family=Nunito:wght@400;600;700&display=swap" rel="stylesheet">

  <!-- Google Map APIs -->
  <script src="https://polyfill.io/v3/polyfill.min.js?features=default"></script>
  <script
    src="https://maps.googleapis.com/maps/api/js?key=AIzaSyDgM7W_yu2AkRWFnM3JuGO9aVqsD7iQeLQ&callback=initMap&libraries=&v=weekly"
    defer
  ></script>

  <script src="{{ asset('js/app.js') }}" defer></script>
  <link href="{{ asset('css/app.css') }}" rel="stylesheet">
  <!-- Styles -->
  <style>
    html{line-height:1.15;-webkit-text-size-adjust:100%}body{margin:0}a{background-color:transparent}[hidden]{display:none}html{font-family:system-ui,-apple-system,BlinkMacSystemFont,Segoe UI,Roboto,Helvetica Neue,Arial,Noto Sans,sans-serif,Apple Color Emoji,Segoe UI Emoji,Segoe UI Symbol,Noto Color Emoji;line-height:1.5}*,:after,:before{box-sizing:border-box;border:0 solid #e2e8f0}a{color:inherit;text-decoration:inherit}svg,video{display:block;vertical-align:middle}video{max-width:100%;height:auto}.bg-white{--bg-opacity:1;background-color:#fff;background-color:rgba(255,255,255,var(--bg-opacity))}.bg-gray-100{--bg-opacity:1;background-color:#f7fafc;background-color:rgba(247,250,252,var(--bg-opacity))}.border-gray-200{--border-opacity:1;border-color:#edf2f7;border-color:rgba(237,242,247,var(--border-opacity))}.border-t{border-top-width:1px}.flex{display:flex}.grid{display:grid}.hidden{display:none}.items-center{align-items:center}.justify-center{justify-content:center}.font-semibold{font-weight:600}.h-5{height:1.25rem}.h-8{height:2rem}.h-16{height:4rem}.text-sm{font-size:.875rem}.text-lg{font-size:1.125rem}.leading-7{line-height:1.75rem}.mx-auto{margin-left:auto;margin-right:auto}.ml-1{margin-left:.25rem}.mt-2{margin-top:.5rem}.mr-2{margin-right:.5rem}.ml-2{margin-left:.5rem}.mt-4{margin-top:1rem}.ml-4{margin-left:1rem}.mt-8{margin-top:2rem}.ml-12{margin-left:3rem}.-mt-px{margin-top:-1px}.max-w-6xl{max-width:72rem}.min-h-screen{min-height:100vh}.overflow-hidden{overflow:hidden}.p-6{padding:1.5rem}.py-4{padding-top:1rem;padding-bottom:1rem}.px-6{padding-left:1.5rem;padding-right:1.5rem}.pt-8{padding-top:2rem}.fixed{position:fixed}.relative{position:relative}.top-0{top:0}.right-0{right:0}.shadow{box-shadow:0 1px 3px 0 rgba(0,0,0,.1),0 1px 2px 0 rgba(0,0,0,.06)}.text-center{text-align:center}.text-gray-200{--text-opacity:1;color:#edf2f7;color:rgba(237,242,247,var(--text-opacity))}.text-gray-300{--text-opacity:1;color:#e2e8f0;color:rgba(226,232,240,var(--text-opacity))}.text-gray-400{--text-opacity:1;color:#cbd5e0;color:rgba(203,213,224,var(--text-opacity))}.text-gray-500{--text-opacity:1;color:#a0aec0;color:rgba(160,174,192,var(--text-opacity))}.text-gray-600{--text-opacity:1;color:#718096;color:rgba(113,128,150,var(--text-opacity))}.text-gray-700{--text-opacity:1;color:#4a5568;color:rgba(74,85,104,var(--text-opacity))}.text-gray-900{--text-opacity:1;color:#1a202c;color:rgba(26,32,44,var(--text-opacity))}.underline{text-decoration:underline}.antialiased{-webkit-font-smoothing:antialiased;-moz-osx-font-smoothing:grayscale}.w-5{width:1.25rem}.w-8{width:2rem}.w-auto{width:auto}.grid-cols-1{grid-template-columns:repeat(1,minmax(0,1fr))}@media (min-width:640px){.sm\:rounded-lg{border-radius:.5rem}.sm\:block{display:block}.sm\:items-center{align-items:center}.sm\:justify-start{justify-content:flex-start}.sm\:justify-between{justify-content:space-between}.sm\:h-20{height:5rem}.sm\:ml-0{margin-left:0}.sm\:px-6{padding-left:1.5rem;padding-right:1.5rem}.sm\:pt-0{padding-top:0}.sm\:text-left{text-align:left}.sm\:text-right{text-align:right}}@media (min-width:768px){.md\:border-t-0{border-top-width:0}.md\:border-l{border-left-width:1px}.md\:grid-cols-2{grid-template-columns:repeat(2,minmax(0,1fr))}}@media (min-width:1024px){.lg\:px-8{padding-left:2rem;padding-right:2rem}}@media (prefers-color-scheme:dark){.dark\:bg-gray-800{--bg-opacity:1;background-color:#2d3748;background-color:rgba(45,55,72,var(--bg-opacity))}.dark\:bg-gray-900{--bg-opacity:1;background-color:#1a202c;background-color:rgba(26,32,44,var(--bg-opacity))}.dark\:border-gray-700{--border-opacity:1;border-color:#4a5568;border-color:rgba(74,85,104,var(--border-opacity))}.dark\:text-white{--text-opacity:1;color:#fff;color:rgba(255,255,255,var(--text-opacity))}.dark\:text-gray-400{--text-opacity:1;color:#cbd5e0;color:rgba(203,213,224,var(--text-opacity))}}
  </style>

  <style>
    body {
      font-family: 'Nunito';
    }
  </style>
</head>
<body>
  <div id="app">
    <keep-alive>
      <router-view></router-view>
    </keep-alive>
  </div>
  <div id="google-map" style="height: 600px;margin-top: 60px;">

  </div>
  <script>
    var map;

    function initMap() {
      map = new google.maps.Map(document.getElementById("google-map"), {
        center: {
          lat: 23.962343,
          lng: 90.2541079,
        },
        zoom: 7,
      });

      //Define the LatLng coordinates for the polygon's path.
      var coords = [
        {lat: 24.7298637, lng: 91.5383055},
        {lat: 24.8258568, lng: 91.7253107},
        {lat: 25.0349044, lng: 91.6491357},
        {lat: 25.1006783, lng: 91.2224098},
        {lat: 24.98965, lng: 91.1252741},
        {lat: 24.8357499, lng: 91.1536449},
      ];

      var coords1 = [
        {lat: 24.0796437, lng: 91.0498215},
        {lat: 24.0095942, lng: 91.2533857},
        {lat: 24.2532065, lng: 91.4562407},
        {lat: 24.3478672, lng: 91.1754862},
        {lat: 24.2562765, lng: 91.0445415},
      ];

      var coords2 = [
        {lat: 24.1852978, lng: 89.6870689},
        {lat: 24.2584531, lng: 89.5650601},
        {lat: 24.381392, lng: 89.6015225},
        {lat: 24.3784202, lng: 89.6939387},
        {lat: 24.3050965, lng: 89.769913},
      ];

      var coords3 = [
        {lat: 23.489942, lng: 90.6996829},
        {lat: 23.4217429, lng: 90.7480171},
        {lat: 23.3509869, lng: 90.7021992},
        {lat: 23.3260518, lng: 90.621108},
        {lat: 23.420156, lng: 90.5946216},
        {lat: 23.5253457, lng: 90.63362},
      ];

      var coords4 = [
        {lat: 25.5304307, lng: 89.6540712},
        {lat: 25.7659899, lng: 89.4946946},
        {lat: 25.9224482, lng: 89.6463698},
        {lat: 25.8604524, lng: 89.7773321},
        {lat: 25.6165346, lng: 89.8001461},
      ];

      //Construct the polygon.
      var editablePolygon = new google.maps.Polygon({
        paths: coords,
        strokeColor: '#FF0000',
        strokeOpacity: 0.8,
        strokeWeight: 2,
        fillColor: '#FF0000',
        fillOpacity: 0.35,
        editable: false
      });

      var editablePolygon1 = new google.maps.Polygon({
        paths: coords1,
        strokeColor: '#5ad1cd',
        strokeOpacity: 0.8,
        strokeWeight: 2,
        fillColor: '#5ad1cd',
        fillOpacity: 0.35,
        editable: false
      });

      var editablePolygon2 = new google.maps.Polygon({
        paths: coords2,
        strokeColor: '#FF0000',
        strokeOpacity: 0.8,
        strokeWeight: 2,
        fillColor: '#FF0000',
        fillOpacity: 0.35,
        editable: false
      });

      var editablePolygon3 = new google.maps.Polygon({
        paths: coords3,
        strokeColor: '#FF0000',
        strokeOpacity: 0.8,
        strokeWeight: 2,
        fillColor: '#FF0000',
        fillOpacity: 0.35,
        editable: false
      });

      var editablePolygon4 = new google.maps.Polygon({
        paths: coords4,
        strokeColor: '#FF7676',
        strokeOpacity: 0.8,
        strokeWeight: 2,
        fillColor: '#FF7676',
        fillOpacity: 0.35,
        editable: false
      });


      editablePolygon.setMap(map);
      editablePolygon1.setMap(map);
      editablePolygon2.setMap(map);
      editablePolygon3.setMap(map);
      editablePolygon4.setMap(map);
    }
  </script>

  <!-- jQuery first, then Popper.js, then Bootstrap JS -->
  <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
</body>
</html>
