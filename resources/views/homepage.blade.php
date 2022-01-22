<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/style.css">
    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-+0n0xVW2eSR5OomGNYDnhzAbDsOXxcvSN1TPprVMTNDbiYZCxYbOOl7+AMvyTG2x" crossorigin="anonymous">
        <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">

    <title>Home</title>
</head>

<body>


  <nav class="navbar navbar-expand-lg navbar-dark bg-danger nav-back fixed-top">
      <div class="container">
          <a class="navbar-brand" href="homepage">
          <img src="img/logo.png" alt="Logo" location.href="homepage" style=" height: 30px;">
          </a>
        
        <button class="navbar-toggler" data-toggle="collapse" data-target="#navbar">
            <span class="navbar-toggler-icon"> </span>

        </button>
    </div>

        <div id="navbar" class="navbar-collapse collapse">
            
            <ul class="navbar-nav">
            <li></li>
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
              <li></li>
            </ul>
           
        </div>        
    </nav>
        <section id="specialhealth">
            <div class="container"style="margin-top: 60px" >
            <div class="input-group">
  <div class="form-outline">
<input type="text" id="txtSearch" alt="Search Criteria" onkeyup="searchSuggest();" autocomplete="off" I> 
<input class="button bg-primary"type="submit" id="cmdSearch" value="Search" />
 <div id="search_suggest" style="color:white"></div>
            </div>
        </section>
    <section id="showcase">
        <div class="container">
            <h1><span>We provide professional health plans</span></h1>
            <p>
                Lorem ipsum dolor sit, amet consectetur adipisicing elit. Sapiente officia quisquam rem ducimus sit
                repellat distinctio necessitatibus unde ratione maiores commodi voluptates voluptatum, magni reiciendis
                quae quo delectus dolor nobis?
            </p>
        </div>
    </section>
    <section id="boxes">
        <div class="container">
            <div class="box">
                <img src="img/eyelogo.png" alt="">
                <h3>Best eye specialist in Town</h3>
                <p>We have the best eye specialist in town. For any inquiries and information, feel free to contact us
                    on our contact us page.</p>
            </div>
            <div class="box">
                <img src="img/doctorlogo2.png" alt="">
                <h3>Best Heart specialist in town</h3>
                <p>We have the best Heart specialist in town. For any inquiries and information, feel free to contact us
                    on our contact us page.</p>
            </div>
            <div class="box">
                <img src="img/doctorlogo3.png" alt="">
                <h3>Quick Check up with no waiting</h3>
                <p>We provide a quick check up facility for all our patients. For any inquiries and information, feel
                    free to contact us on our contact us page.</p>
            </div>
        </div>
    </section>
    <div id="carouselExampleIndicators" class="carousel slide" data-bs-ride="carousel">
        <div class="carousel-indicators">
            <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="0" class="active"
                aria-current="true" aria-label="Slide 1"></button>
            <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="1"
                aria-label="Slide 2"></button>
            <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="2"
                aria-label="Slide 3"></button>
        </div>
        <div class="carousel-inner">
            <div class="carousel-item active">
                <img src="img/slide-1.jpg" class="d-block w-100" alt="...">
            </div>
            <div class="carousel-item">
                <img src="img/slide-2.jpg" class="d-block w-100" alt="...">
            </div>
            <div class="carousel-item">
                <img src="img/slide-3.jpg" class="d-block w-100" alt="...">
            </div>
        </div>
        <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleIndicators"
            data-bs-slide="prev">
            <span class="carousel-control-prev-icon" aria-hidden="true"></span>
            <span class="visually-hidden">Previous</span>
        </button>
        <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleIndicators"
            data-bs-slide="next">
            <span class="carousel-control-next-icon" aria-hidden="true"></span>
            <span class="visually-hidden">Next</span>
        </button>
    </div>
    <section id="appointment">
        <div class="container">
            <div class="box">
                <img src="img/booknow.jfif" alt="">
                <h1>Book an appointment</h1>
                <p>We guarantee the best treatment for our patients. You can now apply for an appointment on our
                    website. If you would like to Book an appointment, click the link down below</p>
                <h3><a href="doctor_list"><button style="border-radius: 1.5rem;">Book</button></a></h3>
            </div>

            <div class="box">
                <img src="img/reschedule.webp" alt="">
                <h1>Reschedule an appointment</h1>
                <p>If the provided time don't fit the schedule of our patients, they have the facility to reschedule
                    their appointments. If you would like to reschedule an appointment, click the link down below</p>
                <h3><a href="reschedule"><button style="border-radius: 1.5rem;">Reschedule</button></a></h3>
            </div>
        </div>
    </section>

    </div>
    <script type="text/javascript">
    const searchFocus = document.getElementById('search-focus');
const keys = [
  { keyCode: 'AltLeft', isTriggered: false },
  { keyCode: 'ControlLeft', isTriggered: false },
];

window.addEventListener('keydown', (e) => {
  keys.forEach((obj) => {
    if (obj.keyCode === e.code) {
      obj.isTriggered = true;
    }
  });

  const shortcutTriggered = keys.filter((obj) => obj.isTriggered).length === keys.length;

  if (shortcutTriggered) {
    searchFocus.focus();
  }
});

window.addEventListener('keyup', (e) => {
  keys.forEach((obj) => {
    if (obj.keyCode === e.code) {
      obj.isTriggered = false;
    }
  });
});
</script>
    <footer>
        <p> SP19-BCS-073 SP19-BCS-096 &copy; 2021 </p>
    </footer>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-gtEjrD/SeCtmISkJkNUaaKMoLD0//ElJ19smozuHV6z3Iehds+3Ulb9Bn9Plx0x4"
        crossorigin="anonymous"></script>

</body>

<script type="text/javascript">
  function searchSuggest() { 
    
var str = document.getElementById('txtSearch').value; 
document.getElementById("search_suggest").innerHTML=""; 
document.getElementById("search_suggest").style.border="0px"; 
searchReq = new XMLHttpRequest(); 
var url= '/request?search=' + str; 
searchReq.open("GET", url); 
searchReq.send(); 

searchReq.onreadystatechange = function() { 
if (searchReq.readyState == 4 && searchReq.status==200) { 
const JSONResponse = JSON.parse(searchReq.responseText); 

for(let item in JSONResponse) { 
    document.getElementById('search_suggest').innerHTML += JSONResponse[item].name +"<br>"; 
    
    document.getElementById("search_suggest").style.border="lpx solid black";
}
}
};
  } 
  </script>
</html>
