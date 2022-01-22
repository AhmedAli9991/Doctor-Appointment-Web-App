<!doctype html>
<html lang="en">
  <head>
    <title>reschedule</title>
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
              <li class="nav-item"><form method="POST" action="/logout">
                    @csrf
                    <button type="submit"  class="button bg-danger"style="border:none; color: #ffb3b3;margin-top:6px;">Logout</button>
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
                    <li class="breadcrumb-item active" aria-current="page">Reschedule</a></li>
              
                </ol>
        </nav>

      </div>
  </div>
 <br>

    <div class="container" style="width:auto;">  
                <h3> Appointments </h3><br />                 
                <div class="table-responsive">
                     <table class="table table-striped" style="border-width:2px; border-style:solid; border-color: red">
                     
                          <tr><th>Appointment For</th><th>Patient name</th><th>Time</th><th>DATE</th><th>UPDATE</th><th>DELETE</th></tr> 
                          <?php
                        $db = mysqli_connect("localhost","root","","users");

                        if(!$db)
                         {
                        die("Connection failed: " . mysqli_connect_error());
                        }
                        $a = session("user");
                        $records = mysqli_query($db,"select * from appointment where email = '$a'"); // fetch data from database

                        while($data = mysqli_fetch_array($records))
                        {
                            ?>  
                           
                          <tr><td><?php echo $data['appfor']?></td><td><?php echo $data['name']?><td><?php echo $data['time']?></td><td><?php echo $data['date']?></td><td><a href="update/{{$data['id']}}"><button class="btn btn-primary" type="button" name="button">UPDATE</button></td><td><a href="delete/{{$data['id']}}"><button class="btn btn-danger" type="button" name="button">Delete</button></a></td></tr>
                          <?php
                        }
                    
                         ?>  
                     </table>
                
                </div>  
           </div>  
         
   
           </body>  
 </html>  