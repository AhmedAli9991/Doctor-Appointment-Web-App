<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Admin Login</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.3.1/css/bootstrap.min.css">
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.3.1/js/bootstrap.min.js"></script>
    <link rel="stylesheet" href="login_signup.css">
</head>
<style>
    .valid{
        border-color: yellow;
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
          <img src="img/logo.png" alt="Logo" location.href="homepage" style="height: 30px;">
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
    <div class="container  "style="margin-top:100px " >

    <div class="container register bg-danger">
        <div class="row">
            <div class="col-md-3 register-left">
                <img src="img\logo.png" style="height: 15%; width: 60%;"  alt=""/>
                <h3>Welcome</h3>
                <p style="font-weight: bold;">To Our Online Medical Center</p>
                
                <button  id="home-btn" type="button" class="btn btn-primary" onclick="location.href='homepage'">Home</button>
            </div>
            <div class="col-md-9 register-right">
              
                <form name="Login">

                    <div class="tab-pane fade show" id="profile" role="tabpanel" aria-labelledby="profile-tab">
                   
                        <h3  class="register-heading">Login</h3>
                        <div class="row register-form">
                            <div class="col-md-6">
                                
                                <div class="form-group">
                                    <input id="name" type="name" name="name" class="form-control input-md" placeholder="Name *" value="" required onkeyup="validate(this)"/>
                                    <span id="loginemailerror" class="text-danger font-weight-bold"></span>
                                </div>   
                                <div class="form-group">
                                    <input id="password" name="password" type="password" class="form-control input-md" placeholder="Password *"required onkeyup="validate(this)"/>
                                    <span id="lgoinpass" class="text-danger font-weight-bold"></span>
                                </div>

                            <div class="form-group">
                             <button  id="Login-btn" type="button" class="btn btn-danger" style="width: 80px" onclick="location.href='AdminDashboard'" onclick="val()" >Login</button>  
                         </div>
                            </div>
                        </div>
                    </div>
                    </form>



                </div>
                <script type="text/javascript">

                    
                    const patterns = {
                    name: /^[a-z]{5,12}$/i,
                    password: /^[a-z0-9@-]{8,20}$/i,
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


                    function val(){

                        var mail = document.getElementById('name').value;
                        var pass = document.getElementById('password').value;
                        
                     if(mail==""){
                        document.getElementById("loginemailerror").innerHTML="*Please enter name";
                        window.alert("Please enter name");
                        return false;
                        }

                     if(pass==""){
                        document.getElementById("lgoinpass").innerHTML="*Please enter Password";
                        window.alert("Please enter Password");
                        return false;
                         }

                    if((pass.length <=7) || (pass.length >20) ){
                        document.getElementById("lgoinpass").innerHTML="*Password must be between of 7 to 20 characters ";
                        window.alert("Password must be at least 8 characters long");
                        return false;
                        }
                    
                    }


                </script>                            
                                     
</body>