<!doctype html>
<html lang="en">
  <head>
    <title>Delete doctor</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
  </head>
  <body>

    <nav class="navbar navbar-expand-lg navbar-dark bg-danger nav-back fixed-top" id="mainNav">
         <div class="container">
          <a class="navbar-brand" href="homepage">
          <img src="img/logo.png" alt="Logo" location.href="homepage" style=" height: 30px;">
          </a>

        <button class="navbar-toggler" data-toggle="collapse" data-target="#navbar">
            <span class="navbar-toggler-icon"> </span>

        </button>
    </div>


          <div class="collapse navbar-collapse" id="navbarResponsive">
              <ul class="navbar-nav ml-auto">
                <li class="nav-item"><a class="nav-link" 
                  href="homepage">Home</a></li>
                <li class="nav-item"><a class="nav-link" 
                  href="doctor_list">book</a></li>
                 <li class="nav-item"><a class="nav-link" 
                    href="Contact">Contact</a></li>
                 <li class="nav-item"><a class="nav-link" 
                    href="reschedule">Reschedule</a></li>
                    <li class="nav-item">
                    <a class="nav-link" href="Admin_login">Logout</a>
                </li>              
              </ul>
          </div>
      </div>
    </nav>
<div class="container"style="margin-top:60px ">

    <div>
        <nav aria-label="breadcrumb"  style=" margin-right:calc(50% - 50vw); margin-left: calc(50% - 50vw)";>
                <ol class="breadcrumb">
                    <li class="breadcrumb-item"><a href="AdminDashboard">Dashboard</a></li>
                    <li class="breadcrumb-item active" aria-current="page">Delete doctor</a></li>
              
                </ol>
        </nav>

      </div>
  </div>
 <br>
    <div class="container" style="width:auto;">  
                <h3> Doctors </h3><br />                 
                <div class="table-responsive">  
                     <table class="table table-striped" style="border-width:2px; border-style:solid; border-color: red">  
                          <tr><th>Name</th><th>E-mail</th><th>Field</th><th>Mobile</th><th>Degree</th><th>UPDATE</th><th>DELETE</th></tr>  
                          <?php
                        $db = mysqli_connect("localhost","root","","users");

                        if(!$db)
                         {
                        die("Connection failed: " . mysqli_connect_error());
                        }


                        $records = mysqli_query($db,"select * from doctor"); // fetch data from database

                        while($data = mysqli_fetch_array($records))
                        {
                            ?>    
                          <tr><td><?php echo $data['name']?></td><td><?php echo $data['email']?><td><?php echo $data['field']?></td><td><?php echo $data['mobile']?></td><td><?php echo $data['degree']?></td><td><a href="update2/{{$data['id']}}"><button class="btn btn-primary" type="button" name="button">UPDATE</button></td><td><a href="delete2/{{$data['id']}}"><button class="btn btn-danger" type="button" name="button">Delete</button></a></td></tr>
                          <?php
                            }
                         ?>  

                     </table>  
                </div>  
           </div>  
         
   
           </body>  
 </html>  