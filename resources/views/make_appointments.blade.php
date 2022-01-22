<!DOCTYPE html>
<html lang="en">
<head>
<title>Appointment</title>
     <!-- Required meta tags -->
     <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
    
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
                  <li class="nav-item"><form method="POST" action="/logout">
                    @csrf
                    <button type="submit" class="button bg-danger"style="border:none; color: #ffb3b3;margin-top:6px;">Logout</button>
                    </form>
               
            </ul>
           
        </div>        
    </nav>
   
    <div class="container"style="margin-top:60px ">

    <div>
        <nav aria-label="breadcrumb"  style=" margin-right:calc(50% - 50vw); margin-left: calc(50% - 50vw)";>
                <ol class="breadcrumb">
                    <li class="breadcrumb-item"><a href="Homepage">Homepage</a></li>
                    <li class="breadcrumb-item"><a href="doctor_list">doctors</a></li>
                    <li class="breadcrumb-item active" aria-current="page">appointment</li>
                    
                </ol>
        </nav>

    </div>


       <div class="container">
        <div class="row">
            <div class="col-md-6">
                <div class="well-block">
                    <div class="well-title">
                        <h2>Book an Appointment</h2>
                    </div>
                    <form name="appointment"  action="" method="POST">
                        @csrf
                        <div class="row">
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label class="control-label" for="name">Name</label>
                                    <input id="name" name="name" type="text" placeholder="Name" class="form-control input-md" value="" required="Required"onkeyup="validate(this)">
                                    <span id="usererror" class="text-danger font-weight-bold"></span>
                                </div>
                            </div>
                        
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label class="control-label" for="email">Email</label>
                                    <input id="email" name="email" type="text" placeholder="E-Mail" class="form-control input-md" value=""required="Required" onkeyup="validate(this)">
                                    <span id="emailerror" class="text-danger font-weight-bold"></span>
                                </div>
                            </div>

                            <!-- Text input-->
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label class="control-label" for="mobile">Mobile #</label>
                                    <input id="mobile" name="mobile" type="text" placeholder="Mobile" class="form-control input-md" value=""required="Required"onkeyup="validate(this)">
                                    <span id="mobileerror" class="text-danger font-weight-bold"></span>
                                </div>
                            </div>
                            
                            <!-- Text input-->
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label class="control-label" for="date">Preferred Date</label>
                                    <input id="date" name="date" type="date" placeholder="Preferred Date" class="form-control input-md" required="Required">
                                    <span id="dateerror" class="text-danger font-weight-bold"></span>
                                </div>
                            </div>
                            <!-- Select Basic -->
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label class="control-label" for="time">Preferred Time</label>
                                    <select id="time" name="time" class="form-control" required="Required">
                                        <option selected="" value="Default">(Please select Time)</option>
                                        <option value="9:00 to 12:00">9:00 to 12:00</option>
                                        <option value="10:00 to 11:00">10:00 to 11:00</option>
                                        <option value="11:00 to 12:00">11:00 to 12:00</option>
                                        <option value="12:00 to 1:00">12:00 to 1:00</option>
                                        <option value="1:00 to 2:00">1:00 to 2:00</option>
                                        <option value="2:00 to 3:00">2:00 to 3:00</option>
                                        <option value="3:00 to 4:00">3:00 to 4:00</option>
                                        <option value="4:00 to 5:00">4:00 to 5:00</option>
                                    </select>
                                    <span id="timeerror" class="text-danger font-weight-bold"></span>
                                </div>
                            </div>
                            <div class="col-md-6">
                            	<div class="form-group">
                                    <label class="control-label" for="class">Price</label>
                                    <select id="class" name="price" class="form-control" required="Required">
                                        <option selected="" value="Default">( Please select Pricing )</option>

                                        <option value="Under Rs500"> Under Rs500 </option>
                                        <option value="Under Rs1000">Under 1000</option>
                                        <option value="Over Rs1000">Over 1000 </option>
                                   
                                    </select>
                                    <span id="appointmenterror" class="text-danger font-weight-bold"></span>
                                </div>
                             </div>

                            <div class="col-md-12">
                                <div class="form-group">
                                    <label class="control-label" for="appointmentfor">Appointment For</label>
                                    <select id="appointmentfor" name="appointmentfor" class="form-control" required="Required">
                                        <option selected="" value="Default">(Please select Appointment For)</option>
                                        <option value="Dentist">Dentist</option>
                                        <option value="Cardiologist">Cardiologist</option>
                                        <option value="Neurologist">Neurologist</option>
                                        <option value="Psychiatrist">Psychiatrist</option>
                                        <option value="Gynecologist">Gynecologist</option>
                                        <option value="Eyespecialist">Eye specialist</option>
                                        <option value="ENT">ENT</option>

                                    </select>
                                    <span id="appointmenterror" class="text-danger font-weight-bold"></span>
                                </div>
                                
                                
                            </div>
                            <div class="col-md-12">
                                <div class="form-group">
                                    <input type="submit" name="submit" Submit class="btn btn-danger" onclick="val()">
                                </div>
                            </div>
                        </div>
                    </form>

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
                     if(name==""){
                        document.getElementById("usererror").innerHTML="*Please enter name";
                        window.alert("Please enter name");
                        return false;
                        }


                     if(mail==""){
                        document.getElementById("emailerror").innerHTML="*Please enter E-mail";
                        windrn false;
                        }

                     if(num==""){
                        document.getElementById("mobileerror").innerHTML="*Please enter Mobile";
                        window.alert("Please enter Mobile");
                        return false;
                        }

                    if((num.length <11) || (num.length >11) ){
                        document.getElementById("mobileerror").innerHTML="*Mobile number digits are incorrect";
                        window.alert("Mobile nummber digits are not correct");
                        return false;
                        }

                </script>      

</body>
