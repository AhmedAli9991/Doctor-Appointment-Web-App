<!DOCTYPE html>
<html lang="en">
<head>
<title>doctors</title>
     <!-- Required meta tags -->
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
                  <li class="nav-item"><form method="POST" action="/logout">
                    @csrf
                    <button type="submit" class="button bg-danger"style="border:none; color: #ffb3b3;margin-top:6px;">Logout</button>
                    </form>
                   
                </li>           
            </ul>
           
        </div>        
    </nav>
   
    <div class="container"style="margin-top:60px ">

    <div>
        <nav aria-label="breadcrumb"  style=" margin-right:calc(50% - 50vw); margin-left: calc(50% - 50vw)";>
                <ol class="breadcrumb">
                    <li class="breadcrumb-item"><a href="Homepage">Homepage</a></li>
                    <li class="breadcrumb-item active" aria-current="page">doctors</a></li>
              
                </ol>
        </nav>

      </div>
  </div>
  <header class="jumboston" style="margin-top: 30px ;  width: 100% ;background-color: rgb(240, 240, 240); padding: 40px ; ">

        <div class="container">

        <div class=" row">

            <div class="col-md-8 ">

                <h1>Doctors</h1>

                <p>following are the doctors and clinics where you can make an appointment through our platform The art of medicine consists of amusing the patient while nature cures the disease. </p>

            </div>
            
        </div>

        </div>
    </header>

    <div class="container" >
 
        <div class="row" >

            <div class="col-md-2 order-md-1 " style=" margin: 20px;" >
                <img src="img/doctors-1.jpg"  style="height: 180px; width: 180px; "  alt="">

            </div>

            <div class="col-md-6 offset-1 order-md-2" style=" margin: 20px;" >
                <h1 style="font-size: 30px;">Doctor Bruce 
                <span class="badge badge-secondary"style="background-color: #1E90FF;">Cardiologist</span>
                </h1>

                <p>A highly qualified individual with years of experience in the field has perofrmed several successful operation in his 
                career spaning decades </p>


                <button type="button" class="btn btn-danger"onclick="location.href='make_appointments'"> book an appointment </button>

            </div>


        </div>
        
    <div class="container" >
 
        <div class="row" >

            <div class="col-md-2 order-md-1 " style=" margin: 20px;" >
                <img src="img/doctors-2.jpg"  style="height: 180px; width: 180px; "  alt="">

            </div>

            <div class="col-md-6 offset-1 order-md-2" style=" margin: 20px;" >
                <h1 style="font-size: 30px;">Doctor Sara 
                <span class="badge badge-secondary"style="background-color: #1E90FF;">Neurologist</span>
                </h1>

                <p>A highly qualified individual with years of experience in the field has perofrmed several successful operation in his 
                career spaning decades has many research papers in the field of neurology</p>


                <button type="button" class="btn btn-danger"onclick="location.href='make_appointments'"> book an appointment </button>

            </div>


        </div>
            <div class="container" >
 
        <div class="row" >

            <div class="col-md-2 order-md-1 " style=" margin: 20px;" >
                <img src="img/doctors-3.jpg"  style="height: 180px; width: 180px; "  alt="">

            </div>

            <div class="col-md-6 offset-1 order-md-2" style=" margin: 20px;" >
                <h1 style="font-size: 30px;">Doctor Jason 
                <span class="badge badge-secondary"style="background-color: #1E90FF;">Dentist</span>
                </h1>

                <p>A good smile is truely valuable so he chose to be a dentist a highly qualified individual with years of experience in the field has perofrmed several successful operation in his 
                career spaning decades </p>


                <button type="button" class="btn btn-danger"onclick="location.href='make_appointments'"> book an appointment </button>

            </div>


        </div>
        



</body>
