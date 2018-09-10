<script type="text/javascript">
    var uid = document.cookie.split(";")[0].split("=")[1];
    console.log(uid);
    if(uid==""){
        window.location="login.php";
    }
</script>

<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">

      <!-- databse-->
      <script src="https://www.gstatic.com/firebasejs/5.4.2/firebase.js"></script>
    <link rel="stylesheet" type="text/css" href="assets/css/dbstyle.css">
    <title>STEX</title>
  </head>
  <body>


<nav class="navbar navbar-expand-lg navbar-dark sticky-top" style="background-color:#177E89">
  <a class="navbar-brand" href="#">Smart Agriculture</a>
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>

  <div class="collapse navbar-collapse" id="navbarSupportedContent">
    <ul class="navbar-nav ml-auto">
        <li class="nav-item">
            <a class="nav-link" href="dashboard.php">Sensor Data</a>
        </li>
        <li class="nav-item">
            <a class="nav-link" href="weather.php">Weather Report</a>
        </li>
      <li class="nav-item active">
          <button class="btn btn-outline-warning my-2 my-sm-0" id="logout">Log out</button>
      </li>
    </ul>
    
  </div>
</nav> 

<script src="assets/js/logout.js"></script>



    


