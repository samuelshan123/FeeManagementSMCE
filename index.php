
<!DOCTYPE html>

<html>

<head>
  <meta charset="utf-8" />
  <meta http-equiv="X-UA-Compatible" content="IE=edge" />
  <title>fee Management</title>
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <style>
  	a {
  text-decoration: none;
}
body {
  background: -webkit-linear-gradient(bottom, #2dbd6e, #a6f77b);
  background-repeat: no-repeat;
  height: 100%;
}
label {
  font-family: "Raleway", sans-serif;
  font-size: 11pt;
}

#card {
  background: #fbfbfb;
  border-radius: 8px;
  box-shadow: 1px 2px 8px rgba(0, 0, 0, 0.65);
  height: 410px;
  margin: 6rem auto 8.1rem auto;
  width: 329px;
}
#card-content {
  padding: 12px 44px;
}
#card-title {
  font-family: "Raleway Thin", sans-serif;
  letter-spacing: 4px;
  padding-bottom: 23px;
  padding-top: 13px;
  text-align: center;
}
#signup {
  color: #2dbd6e;
  font-weight: bold;
  letter-spacing: 1px;
  font-family: "Raleway", sans-serif;
  font-size: 10pt;
  margin-top: 16px;
  text-align: center;
}
#submit-btn {
  background: -webkit-linear-gradient(right, #a6f77b, #2dbd6e);
  border: none;
  border-radius: 21px;
  box-shadow: 0px 1px 8px #24c64f;
  cursor: pointer;
  color: white;
  font-family: "Raleway SemiBold", sans-serif;
  height: 42.3px;
 
  transition: 0.25s;
  width: 153px;
}
#submit-btn:hover {
  box-shadow: 0px 1px 18px #24c64f;
}
.form {
  align-items: center;
  display: flex;
  flex-direction: column;
}
.form-border {
  background: -webkit-linear-gradient(right, #a6f77b, #2ec06f);
  height: 1px;
  width: 100%;
}
input {
  background-color: #eee;
  border: none;
  border-radius: 10px;
  padding: 12px 15px;
  margin: 8px 0;
  width: 100%;
  	

}
.form-content {
  border: none;
  outline: none;
}
.underline-title {
  background: -webkit-linear-gradient(right, #a6f77b, #2ec06f);
  height: 2px;
  margin: -1.1rem auto 0 auto;
  width: 89px;
}

  </style>
</head>

<body>
  <div id="card">
    <div id="card-content">
      <div id="card-title">
        <h2>LOGIN</h2>
        <div class="underline-title"></div>
      </div>
      <form method="post" class="form" action="authentication.php">

        
   

      	<img src="https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcT7SyfEre1fg8I8zW9R50ZtDarNar6U-JmxWyFkQ4Amnfwc9HUKsGtA4EfNXi9QGhUFxxk&usqp=CAU"width="50"height="50" style="padding-bottom: 20px">
        
        <input id="regno" class="form-content" type="numeric" name="regno"placeholder="Register Number" autocomplete="on" required />
        

        <input id="dob" class="form-content" type="numeric" name="dob"placeholder="Date of Birth" autocomplete="on" required />
        
       
        <button id="submit-btn" type="submit" class="btn"
                        name="submit">
                Login
            </button>
        <a href="#" id="signup">ADMIN LOGIN</a>

      </form>
    </div>
  </div>
</body>

</html>