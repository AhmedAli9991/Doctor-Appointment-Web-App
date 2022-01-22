<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Sign-up</title>
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
    <div class="container"style="margin-top:60px " >

    <div>
        <nav aria-label="breadcrumb"  style=" margin-right:calc(50% - 50vw);
  margin-left: calc(50% - 50vw)";>
                <ol class="breadcrumb">
                    <li class="breadcrumb-item"><a href="Homepage">Homepage</a></li>
                    <li class="breadcrumb-item active" aria-current="page">Signup</li>
                </ol>
        </nav>

    </div>

    <div class="container register bg-danger">
        <div class="row">
            <div class="col-md-3 register-left">
                <img src="img\logo.png" style="height: 15%; width: 60%;"  alt=""/>
                <h3>Welcome</h3>
                <p style="font-weight: bold;">Register now and book your appointsments from home</p>
                
                <button  id="home-btn" type="button" class="btn btn-primary" onclick="location.href='homepage'">Home</button>
            </div>
            <div class="col-md-9 register-right">
              
                <form name="register doctor"action="/signup" method="POST" >
                 
                    @csrf                               
                    <div class="tab-pane fade show" id="profile" role="tabpanel" aria-labelledby="profile-tab">
                        <h3  class="register-heading">Enter Details to Register</h3>
                        <div class="row register-form">
                            <div class="col-md-6">
                                <div class="form-group">
                                    <input id="name" type="text" name="name" class="form-control input-md" placeholder=" Name *" value=""on onkeyup="validate(this)"/>
                                    <span id="docnameerror" class="text-danger font-weight-bold"></span>
                                </div>
                                <div class="form-group">
                                    <input id="email" type="email" name="email" class="form-control input-md" placeholder="Email *" value="" onkeyup="validate(this)"/>
                                    <span id="docemailerror" class="text-danger font-weight-bold"></span>
                                </div>
                                <div class="form-group">
                                    
                                    <input id="mobile" name="mobile" type="text" placeholder="Mobile *" class="form-control input-md"onkeyup="validate(this)">
                                    <span id="docmobileerror" class="text-danger font-weight-bold"></span>
                                </div>

                            </div>
                            <div class="col-md-6">
                                <div class="form-group">
                                    <input id="password" name="password" type="password" class="form-control input-md" placeholder="Password *" value="" onkeyup="validate(this)"/>
                                    <span id="docpasserror" class="text-danger font-weight-bold"></span>
                                </div>
                                <div class="form-group">
                                    <input id="repassword" name="repassword" type="password" class="form-control input-md" placeholder="Retype Password *" value="" />
                                    <span id="docrepasserror" class="text-danger font-weight-bold"></span>
                                </div>
                                
                               
                                <div class="form-group">
                                    <div class="docmaxl">
                                        <label class="radio inline"> 
                                            <input type="radio" name="gender" value="male" checked >
                                            <span> Male </span> 
                                        </label>
                                        <label class="radio inline"> 
                                            <input type="radio" name="gender" value="female">
s                                            <span> Female </span> 
                                        </label>
                                    </div>

                                <div class="form-group">
                               <button  id="register-btn" type="submit" class="btn btn-danger" onclick="val()">Register</button>
                            </div>
                        </div>
                    </div>
                    </form>



                </div>
<script type="text/javascript">
                    
                    const patterns = {
                    name: /^[a-z]{5,12}$/i,
                    password: /^[a-z0-9@-]{8,20}$/i,
                    email: /^([a-z0-9\.-]+)@([a-z0-9-]+)\.([a-z]{2,8})(\.[a-z]{2,8})?$/,
                    mobile:/^[0-9]{11}$/
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
                                             
                        var name = document.getElementById('name').value;                        
                        var mail = document.getElementById('email').value;
                        var num = document.getElementById('mobile').value;
                        var pass = document.getElementById('password').value;
                        var repass = document.getElementById('repassword').value;

                     if(name==""){
                        document.getElementById("docnameerror").innerHTML="*Please enter name";
                        window.alert("Please enter name");
                        return false;
                        }


                     if(mail==""){
                        document.getElementById("docemailerror").innerHTML="*Please enter E-mail";
                        window.alert("Please enter E-mail");
                        return false;
                        }

                     if(num==""){
                        document.getElementById("docmobileerror").innerHTML="*Please enter Mobile";
                        window.alert("Please enter Mobile");
                        return false;
                        }

                    if((num.length <11) || (num.length >11) ){
                        document.getElementById("docmobileerror").innerHTML="*Mobile number digits are incorrect";
                        window.alert("Mobile nummber digits are not correct");
                        return false;
                        }


                     if(pass==""){
                        document.getElementById("docpasserror").innerHTML="*Please enter Password";
                        window.alert("Please enter Password");
                        return false;
                         }


                    if((pass.length <=7) || (pass.length >20) ){
                        document.getElementById("docpasserror").innerHTML="*Password must be between of 7 to 20 characters ";
                        window.alert("Password must be at least 8 characters long");
                        return false;
                        }

                     if(repass==""){
                        document.getElementById("docrepasserror").innerHTML="*Please Retype Password";
                        window.alert("Please Retype Password");
                        return false;
                         }
                     if(pass!=repass){
                        document.getElementById("docrepasserror").innerHTML="*Please Enter same password";
                        window.alert("Please Enter same password");
                        return false;
                    
                        }                    
					}
                    

                </script>      


</body>
</html>