<!DOCTYPE html>
<html lang="en">

<head>
    <title>about us</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
</head>

<body>


  <nav class="navbar navbar-expand-lg navbar-dark bg-danger nav-back fixed-top">
       
      <div class="container">
          <a class="navbar-brand" href="homepage">
          <img src="img/logo.png" alt="Logo" location.href="homepage" style="width:100; height: 30px;">
          </a>

        <button class="navbar-toggler" data-toggle="collapse" data-target="#navbar">
            <span class="navbar-toggler-icon"> </span>

        </button>
    </div>

        <div id="navbar" class="navbar-collapse collapse">
            <ul class="navbar-nav">
                <li class="nav-item">
                    <a class="nav-link" href="homepage">Home </a>
                </li>
                <li class= "nav-item"><a class="nav-link"href="doctor_list">book</a></li>
                        <li class= "nav-item"><a class="nav-link"href="reschedule">Reschedule</a></li>
                <li class= "nav-item"><a class="nav-link"href="Contact">Contact</a></li>
       
                  <li class= "nav-item"><a class="nav-link"href="About">About</a></li>
              <li class="nav-item">
                    <a class="nav-link" href="login">Login</a>
                </li>
              
            </ul>
           
        </div>        
    </nav>
    <div class="container  "style="margin-top:60px " >

        <nav aria-label="breadcrumb"  style=" margin-right:calc(50% - 50vw);margin-left: calc(50% - 50vw)";>
                <ol class="breadcrumb">
                    <li class="breadcrumb-item"><a href="Homepage">Homepage</a></li>
                    <li class="breadcrumb-item active" aria-current="page">About</li>
                </ol>
        </nav>

    </div>
</div>

    <header class="jumboston" style="margin-top: 30px ;  width: 100% ;background-color: rgb(240, 240, 240); padding: 40px ; ">

        <div class="container">

        <div class=" row">

            <div class="col-md-8 ">

                <h1>About us</h1>

                <p>we are a company commitet to making helth care easily accessible and to allow our user to get optimal helthcare without the hassel of waiting by enabling them to book appointemts ahead of time. </p>

            </div>

        </div>
    </div>
    </header>


    <section id="boxes">
        <div class="container" style="margin-top: 20px;align-content: center;">
            <div class="box">
                <img src="img/DOC.jpg" alt="">
                <h3 style="margin-top: 20px">Our Doctors</h3>
                <p>Our doctors are some of the most qualified individuals we have help to cure thousands of patients now we will help in making a revolution in the filed of medicine.</p>
            </div>
        </div>

<div id="googleMap" style="width:100%;height:400px;"></div>

<script>
function myMap() {
var mapProp= {
  center:new google.maps.LatLng(33.646246,72.960114),
  zoom:5,
};
var map = new google.maps.Map(document.getElementById("googleMap"),mapProp);
}
</script>

<script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyA3NQw_kgJTrCaPZgfCf-Y2hsgP3Xrw8AY&callback=myMap"></script>

</body>
</html>
<html>

