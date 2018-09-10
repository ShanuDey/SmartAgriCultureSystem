<?php include("header.php"); ?>

<div class="container" style="margin-top:2%;">
  <div class="card-columns">
  <div class="card">
    <img class="card-img-top" src="assets/images/humidity.jpg" alt="Card image cap">
    <div class="card-body">
      <h5 class="card-title">Humidity</h5>
      <p class="card-text" id="humidity">Loading</p>
    </div>
  </div>
  <div class="card">
    <img class="card-img-top" src="assets/images/temp.png" alt="Card image cap">
    <div class="card-body">
      <h5 class="card-title">Temparature</h5>
      <p class="card-text" id="temparature">Loading</p>
    </div>
  </div>
  <div class="card">
    <img class="card-img-top" src="assets/images/smoke.jpg" alt="Card image cap">
    <div class="card-body">
      <h5 class="card-title">Smoke</h5>
      <p class="card-text" id="smoke">Loading</p>
    </div>
  </div>
  <div class="card text-center p-3">
    <h5 class="card-title">Water Pump</h5>
    <blockquote class="blockquote mb-0">
      <img id="pumpimg" src="assets/images/tapon.png"/>
        <p class="card-text" id="pump">Loading</p>
      <button class="btn btn-success btn-sm" id="buttonOn">ON</button>
      <button class="btn btn-danger btn-sm" id="buttonOff">OFF</button>
    </blockquote>
  </div>
  
  <div class="card">
    <img class="card-img-top" src="assets/images/soil.jpg" alt="Card image cap">
    <div class="card-body">
      <h5 class="card-title">Soil Moisture</h5>
      <p class="card-text" id="soilmoisture">Loading</p>
    </div>
  </div>
  <div class="card">
    <img class="card-img-top" src="assets/images/sunlight.jpg" alt="Card image cap">
    <div class="card-body">
      <h5 class="card-title">Sun Light Intensity</h5>
      <p class="card-text" id="sunlightintensity">Loading</p>
    </div>
  </div>
</div>

</div>


<!--database-->
<script src="assets/js/database.js"></script>

    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js" integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy" crossorigin="anonymous"></script>
  </body>
</html>