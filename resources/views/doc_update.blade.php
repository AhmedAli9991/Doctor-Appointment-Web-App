
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
          <img src="img/logo.png" alt="Logo" location.href="homepage" style=" height: 30px;">
          </a>
	</div>

        <button class="navbar-toggler" data-toggle="collapse" data-target="#navbar">
            <span class="navbar-toggler-icon"> </span>

        </button>
        <div id="navbar" class="navbar-collapse collapse">
            <ul class="navbar-nav">
                <li class="nav-item">
                    <a class="nav-link" href="homepage">Home</a>
                </li>
                <li class= "nav-item"><a class="nav-link"href="doctor_list">book</a></li>
                <li class= "nav-item"><a class="nav-link"href="reschedule">Reschedule</a></li>
                <li class="nav-item">
                    <a class="nav-link" href="About">About</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="contact">Contact</a>
            </ul>
           
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
    <div class="container register bg-danger">
        <div class="row">
            <div class="col-md-3 register-left">
                <img src="img\logo.png" style="height: 15%; width: 60%;"  alt=""/>
                <h3>Welcome</h3>
                <p style="font-weight: bold;">To Our Online Medical Center</p>
                
                <button  id="home-btn" type="button" class="btn btn-primary" onclick="location.href='homepage'">Home</button>
            </div>
            <div class="col-md-9 register-right">
              
                <form name="register doctor" action="/Update_doctor1/{{$doctor[0]->id}}"method="POST">
                    @csrf                   
                  <div class="tab-pane fade show" id="profile" role="tabpanel" aria-labelledby="profile-tab">
                        <h3  class="register-heading">Update</h3>
                        <div class="row register-form">
                        @foreach ($doctor as $doctor)

                            <div class="col-md-6">
                                <div class="form-group">
                                    <input id="name" type="text" name="name" class="form-control input-md" placeholder=" Name *" value="{{$doctor->name}}"  onkeyup="validate(this)" />
                                    <span id="docnameerror" class="text-danger font-weight-bold"></span>
                                </div>
                                <div class="form-group">
                                    <input id="email" type="email" name="email" class="form-control input-md" placeholder="Email *" value="{{$doctor->email}}" onkeyup="validate(this)"/>
                                    <span id="docemailerror" class="text-danger font-weight-bold"></span>
                                </div>
                                <div class="form-group">
                                    
                                    <input id="mobile" name="mobile" type="text" placeholder="Mobile *" class="form-control input-md" value="{{$doctor->mobile}}"  onkeyup="validate(this)">
                                    <span id="docmobileerror" class="text-danger font-weight-bold"></span>
                                </div>
                                <div class="form-group">
                                    <input id="degree" name="degree" type="text" class="form-control input-md" placeholder="Enter your Degree" value="{{$doctor->degree}}"  onkeyup="validate(this)"/>
                                    <span id="degreeerror" class="text-danger font-weight-bold"></span>
                                </div>

                            </div>
                            <div class="col-md-6">
                                
                               
                                <div class="form-group">
                                    <div class="docmaxl">
                                        <label class="radio inline"> 
                                            <input type="radio" name="gender" value="male" checked>
                                            <span> Male </span> 
                                        </label>
                                        <label class="radio inline"> 
                                            <input type="radio" name="gender" value="female">
                                            <span> Female </span> 
                                        </label>
                                    </div>
                                </div>
                                <div class="form-group">
                                    <select id="specilization" name="specilization" class="form-control" required="required" value="{{$doctor->field}}" >
                                        <option class="hidden" selected disabled >Choose Your Field</option>
                                        <option value="Dentist">Dentist</option>
                                        <option value="Cardiologist">Cardiologist</option>
                                        <option value="Neurologist">Neurologist</option>
                                        <option value="Psychiatrist">Psychiatrist</option>
                                        <option value="Gynecologist">Gynecologist</option>
                                        <option value="Eyespecialist">Eye specialist</option>
										<option value="ENT">ENT</option>
                                    </select>
                                    <span id="docspecilizationerror" class="text-danger font-weight-bold"></span>
                                </div>
                                
                               <button  id="register-btn" type="submit" class="btn btn-danger" onclick="val()">Register</button>
                            </div>
                        </div>
                    </div>
                     @endforeach

                    </form>
                </div>
                <script type="text/javascript">
                                      
                    const patterns = {
                    name: /^[a-z]{5,12}$/i,
                    password: /^[a-z0-9@-]{8,20}$/i,
                    email: /^([a-z0-9\.-]+)@([a-z0-9-]+)\.([a-z]{2,8})(\.[a-z]{2,8})?$/,
                    mobile:/^[0-9]{11}$/,
                    degree:/^[a-z]{2,5}$/
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
                        var degree = document.getElementById('degree').value;

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

                     if(degree==""){
                        document.getElementById("degreeerror").innerHTML="*Please enter degree";
                        window.alert("Please enter degree");
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

                    }

                </script>      

                                     
</body>