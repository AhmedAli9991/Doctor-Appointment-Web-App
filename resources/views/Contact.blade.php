!<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/style.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/@fortawesome/fontawesome-free@5.15.3/css/fontawesome.min.css" integrity="undefined" crossorigin="anonymous">
    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-+0n0xVW2eSR5OomGNYDnhzAbDsOXxcvSN1TPprVMTNDbiYZCxYbOOl7+AMvyTG2x" crossorigin="anonymous">

    <title>Contact</title>
</head>

<style>
    .valid{
        border-color: green;
        border-width: 5px;
    }
    .invalid{
        border-color: black;
        border-width: 5px;
    }
</style>

<body>


  <nav class="navbar navbar-expand-lg navbar-dark bg-danger nav-back fixed-top">
       
      <div class="container">
          <a class="navbar-brand" href="homepage">
          <img src="img/logo.png" alt="Logo" location.href="homepage" style=" height: 30px";>
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
    <section class="contact">
        <div class="content">
            <h2>Contact Us</h2>
            <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Ab id eum recusandae possimus numquam et!</p>
        </div>
        <div class="container1">
            <div class="contactInfo">
            <div class=box>
                <div class="icon"></div>
                <div class="text">
                    <h3>Address</h3>
                    <p><br> Simly Dam Road,<br>Bhara Kahu,<br>Islamabad</p>
                </div>
            </div>
            <div class="box">
                <div class="icon"></i></div>
                <div class="text">
                    <h3>Phone</h3>
                    <p>03035915157,<br>03350946913</p>
                </div>
                
            </div>
            <div class="box">
                <div class="icon"></i></div>
                <div class="text">
                    <h3>Email</h3>
                    <p>adeelism12@gmail.com,<br>adeelism56@gmail.com</p>
                </div>
                
            </div>
        </div>
            <div class="contactForm">
                <form name="contact us" method="POST">
                    @csrf
                    <h2>Send Message</h2>
                    <div class="inputBox">
                        <input type="text" id="name" name="name" value="" required="required" placeholder="Full Name" onkeyup="validate(this)">
                    </div>
                    <div class="inputBox">
                        <input type="text" id="email" name="email" value="" required="required" placeholder="Email" onkeyup="validate(this)">
                    </div>
                    <div class="inputBox">
                        <textarea name="message" required="required"></textarea>
                        <span>Type Your Message...</span>
                    </div>
                    <div class="inputBox">
                        <input type="submit" value="send" name="send">
                    </div>
                </form>
            </div>
        </div>
    </section>

    <footer>
        <p> SP19-BCS-073 SP19-BCS-096  &copy; 2021 </p>
    </footer>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-gtEjrD/SeCtmISkJkNUaaKMoLD0//ElJ19smozuHV6z3Iehds+3Ulb9Bn9Plx0x4"
        crossorigin="anonymous"></script>

<script type="text/javascript">
                    
                    const patterns = {
                    name: /^[a-z]{5,12}$/i,
                    email: /^([a-z0-9\.-]+)@([a-z0-9-]+)\.([a-z]{2,8})(\.[a-z]{2,8})?$/
                    };


                function validate(field){
                if(patterns[field.name].test(field.value)){
                    field.className = 'valid form-control input' ;
                    } 
                else {
                 field.className = 'invalid form-control input' ;
                    }
                }
</script>

</body>

</html>