<!--<html>
<head>
<title>
login-register form
</title>
<link rel="stylesheet" type="text/css" href="stylesheet.css" />
<style>
#form .error {
    color: #FF007F;
    display: inline-block;
    margin: 0px 0 0px 0px;
    padding: 7px;
    text-align: left;
    }
</style>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
<script src="https://ajax.aspnetcdn.com/ajax/jquery.validate/1.11.1/jquery.validate.min.js"></script>
<script>
$(document).ready(function(){
    $("input").focus(function(){
        $(this).css("background-color", "#cccccc");
    });
    $("input").blur(function(){
        $(this).css("background-color", "#ffffff");
    });
	
	$("form[name='create']").validate({

    rules: {

      name: "required",
	  last: "required",
     
      email: {
        required: true,

        email: true
      },
      password: {
        required: true,
        minlength: 5
      },

      cpassword: {
        required: true,
        minlength: 5
      },

      contact: {
        required: true,
        minlength: 10 
      },

      country: "required",

    },

    messages: {
      name: "Please enter your First Name",last: "Please enter your Last Name",
      
      password: {
        required: "Please provide a valid password",
        minlength: "Your password must be at least 5 characters long"
      },
      email: "Please enter a valid email address", contact: "Please enter your correct Mobile number"
    },

    submitHandler: function(form) {
      form.submit();
    }
  });
});
</script>
</head>
<body>
<div class="div1">

<form id="2" method="post" action="user_login.php"  />

<p class="p2">
<label  for = "email">Email or username&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</label>
<label for="password" > Password</label><br/>
<input class="i" type="text" placeholder="Username or Email" id="username" name="username" required />&nbsp;&nbsp;&nbsp;&nbsp;
<input class="i" type="password" placeholder="Password" name="password" required />
<br>

</p>
<div id="nav">
<ul>
<li><input type="submit" value="Log In" />
 </li>
 </div>
</form>

</div>


<div class="div3"> 
<div class="div4">
<h1 align="center">Welcome to book slot</h1>

</div>

<div class="div5">
<p id="p4" align="center">Create an Account</p><hr>
<form ENCTYPE="multipart/form-data" method="post" action="user_insert.php" name ="create" id="form">

<p>

<div class="row">
<label for="name"><b>First Name:</b></label>
<input type="text" id="name" name="name" placeholder="First Name" >
</div>
<br />
<div class="row">
<label for="last"><b>Last Name:</b></label>
<input type="text" id="last" name="last" placeholder="Last Name" >
</div>
<br />
<div class="row">
<label for="email"><b>Email:</b></label>
<input type="text" id="email" placeholder="Email" name="email">
</div>
<br />
<div class="row">
<label for="password"><b>Password:</b></label>
<input type="password" id="password" placeholder="Password" name="password">
</div>
<br />
<div class="row">
<label for="cpassword"><b>Confirm Password:</b></label>
<input type="password" id="cpassword" placeholder="Confirm password" name="cpassword">
</div>
<div class="row">
<label for="phone"><b>Contact:</b></label>
<input type="tel" id="contact" name="contact" placeholder="Contact" >


</div>
</br>
<div class="row">
    <label for="city"><b>City:</b></label>
    <select id="country" name="country">
	<option value="Select your City">Select Your City</option>
      <option value="Noida">Noida</option>
      <option value="Greater Noida">Noida</option>
      <option value="Delhi">Delhi</option>
	  <option value="Patna">Patna</option>
      <option value="Punjab">Punjab</option>
     
    </select></div>
	
    
<br>
</div><br>
<div class="row">
<label for="gender"><b>Gender:</b></label>
<input type="text" id="gender" placeholder="Gender" name="gender">
</div>
<div class="row">
<label for="Date_of_Birth"><b>Date_of_Birth:</b></label>
<input type="text" id="Date_of_Birth" placeholder="Date_of_Birth" name="Date_of_Birth">
</div>


<div class="row">
<label for="Create the Account"></label>

<button type="Submit"  id="submit" value="Create An Account">Create Account</button>
</div><br>
<div class="row">
<label for="Reset"></label>
<input type="reset" id="reset" name="reset" value="Reset" />
</div>

</p>
</div>

</div>
</form>
</body>
</html>
-->
<!doctype html>
<html lang="en">
<head>
    <title>Login/Register Modal </title>

  <meta charset="utf-8" />

  <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1" />


  <style>body{padding-top: 60px;}</style>
  <script>
$(document).ready(function(){
    $("input").focus(function(){
        $(this).css("background-color", "#cccccc");
    });
    $("input").blur(function(){
        $(this).css("background-color", "#ffffff");
    });
  
  $("form[name='create']").validate({

    rules: {

      name: "required",
    last: "required",
     
      email: {
        required: true,

        email: true
      },
      password: {
        required: true,
        minlength: 5
      },

      cpassword: {
        required: true,
        minlength: 5
      },

      contact: {
        required: true,
        minlength: 10 
      },

      city: "required",

    },

    messages: {
      name: "Please enter your First Name",last: "Please enter your Last Name",
      
      password: {
        required: "Please provide a valid password",
        minlength: "Your password must be at least 5 characters long"
      },
      email: "Please enter a valid email address", contact: "Please enter your correct Mobile number"
    },

    submitHandler: function(form) {
      form.submit();
    }
  });
});
</script>

    <link href="assets/css/bootstrap.css" rel="stylesheet" />

  <link href="assets/css/login-register.css" rel="stylesheet" />
  <link rel="stylesheet" href="http://netdna.bootstrapcdn.com/font-awesome/4.0.3/css/font-awesome.css">

  <script src="assets/js/jquery-1.10.2.js" type="text/javascript"></script>
  <script src="assets/js/bootstrap.js" type="text/javascript"></script>
  <script src="assets/js/login-register.js" type="text/javascript"></script>

</head>
<body>

    


     <div class="modal fade login" id="loginModal">
          <div class="modal-dialog login animated">
              <div class="modal-content">
                 <div class="modal-header">
                        <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
                        <h4 class="modal-title">Register</h4>
                    </div>
                    <div class="modal-body">
                        <div class="box">
                             <div class="content">
                                
                                
                                <div class="form loginBox">
                                  <form ENCTYPE="multipart/form-data" method="post" action="user_insert.php" name ="create" id="form">
                                    
                                      <input id="name" class="form-control" type="text" placeholder="First Name" name="name">
                                  <input id="last" class="form-control" type="text" placeholder="Last Name" name="last">

                               <input id="email" class="form-control" type="text" placeholder="Email" name="email">
                                <input id="password" class="form-control" type="password" placeholder="Password" name="password">
                                <input id="cpassword" class="form-control" type="password" placeholder="Confirm Password" name="cpassword">
                                <input id="contact" class="form-control" type="tel" placeholder="Contact" name="contact">
                                <select id="city" class="form-control" placeholder="City" name="city">
  <option value="Select your City">Select Your City</option>
      <option value="Noida">Noida</option>
      <option value="Greater Noida">Greater Noida</option>
      <option value="Delhi">Delhi</option>
    <option value="Patna">Patna</option>
      <option value="Punjab">Punjab</option>
     
    </select>
                             <label for="gender"><b>Gender:
    <input type="radio" name="gender">
    Male
  
 
    <input type="radio" name="gender">
    Female
  </b></label>
  <input id="Date_of_Birth" class="form-control" type="date" placeholder="Date_of_Birth" name="Date_of_Birth"><br>
                                
                                    
                                  

<button type="Submit" class="btn btn-default btn-login" id="submit" value="Create An Account"><b>Create Account</b></button>
                                    </form>
                                </div>
                             </div>
                        </div>
                            <!--  <input id="Date_of_Birth" class="form-control" type="date" placeholder="Date_of_Birth" name="Date_of_Birth">
                                <input class="btn btn-default btn-register" type="button" value="Create account" name="commit">
                                    
                                    <input class="btn btn-default btn-login" type="button" value="Login" onclick="loginAjax()">
                                    </form>
                                </div>
                             </div>
                        </div>
                        <div class="box">

                            <div class="content registerBox" style="display:none;">
                             <div class="form">
                              <form method="POST" action="user_insert.php" accept-charset="UTF-8">
                               
                                  
                                
                                </form>
                                </div>
                            </div>
                        </div>
                    </div>-->
                    <div class="box">
                            <div class="content registerBox" style="display:none;">
                             <div class="form">
                                <form ENCTYPE="multipart/form-data" method="post" action="user_login.php" name ="create" id="form">
                                <input id="username" class="form-control" type="text" placeholder="Username or Email" name="username">
                                <input id="password" class="form-control" type="password" placeholder="Password" name="password">
                                
                                <button type="Submit" class="btn btn-default btn-register" id="submit" value="Login"><b>Login</b></button>
                                </form>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="modal-footer">
                        <div class="forgot register-footer">
                            <span>Looking to
                                 <a href="javascript: showLoginForm();">create a account</a>
                            ?</span>
                        </div>
                        <div class="forgot login-footer" style="display:none">
                             <span>Already have an account?</span>
                             <a href="javascript:showRegisterForm() ;">Login</a>
                        </div>
                    </div>
              </div>
          </div>
      </div>
    </div>
<script type="text/javascript">
    $(document).ready(function(){
        openLoginModal();
    });
</script>


</body>
</html>
                  
               