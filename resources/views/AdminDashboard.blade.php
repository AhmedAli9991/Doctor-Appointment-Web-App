<!DOCTYPE html>
<html lang="en">

<head>
    <title>Dashboard</title>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/style.css">
    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-+0n0xVW2eSR5OomGNYDnhzAbDsOXxcvSN1TPprVMTNDbiYZCxYbOOl7+AMvyTG2x" crossorigin="anonymous"></head>

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
                <li class="nav-item">
                    <a class="nav-link" href="homepage">Home </a>
                </li>
                <li class= "nav-item"><a class="nav-link"href="doctor_list">book</a></li>
                        <li class= "nav-item"><a class="nav-link"href="reschedule">Reschedule</a></li>
                <li class= "nav-item"><a class="nav-link"href="Contact">Contact</a></li>
       
                  <li class= "nav-item"><a class="nav-link"href="About">About</a></li>
              <li class="nav-item">
                    <a class="nav-link" href="Admin_login">Logout</a>
                </li>
              
            </ul>
           
        </div>        
    </nav>

</div>

    <header class="jumboston" style="margin-top: 100px ;  width: 100% ;background-color: rgb(240, 240, 240);color: black; padding: 40px ; ">

        <div class="container">

        <div class=" row">

            <div class="col-md-8 ">

                <h1>Welcome Back</h1>

                <p>Good to see you again lets make this service better </p>

            </div>

        </div>
    </div>
    </header>
    <section id="appointment">
        <div class="container">
            <div class="box">
                <img src="img/add.png" alt="" style="width:150; height: 180px";>
                <h1>Register new Doctor</h1>
                <p>If you want to add new doctor to database</p>
                <h3><a href="doc_register"><button style="border-radius: 1.5rem;">Add</button></a></h3>
            </div>

            <div class="box">
                <img src="img/delete.png" alt="" style="width:150; height: 180px";>
                <h1>Delete doctor</h1>
                <p>If you want to delete doctor to database</p>
                <h3><a href="del_doc"><button style="border-radius: 1.5rem;">Delete</button></a></h3>
            </div>
        </div>
    </section>

</html>
<html>

