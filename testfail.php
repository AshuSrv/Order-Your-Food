<html>

   <head>
      <title>Order Your Food</title>
<style>

body{
    background-image: url("poss.jpg");
}

input[type=text], input[type=password] {
  width: 100%;
  padding: 12px 20px;
  margin: 8px 0;
}

button {
  background-color: #4CAF50;
  color: black;
  padding: 14px 20px;
  font-weight: bold;
  font-size: 20px;
  margin: 8px 0;
  cursor: pointer;
  width: 100%;
}

button:hover {
  opacity: 0.5;
background-color:blue;
}

.headers{
text-align: center;
font-weight: bolder;
font-size: 25px;
}


.imgcontainer {
  text-align: center;
  margin: 24px 0 12px 0;
}


img.avatar {
  width: 20%;
  border-radius: 50%;
}

a{
    font-size: 20px;
    color: black;
}

.container {
  padding: 10px 440px;
}

 .container label{
    font-weight: bold;
    font-size: 20px;
    color: black;
}

.warn label{
    -webkit-animation: fadein 1s; 
            animation: fadein 1s;
    font-weight: bold;
    font-size: 30px;
    color: black;
}

/* Safari, Chrome and Opera > 12.1 */
@-webkit-keyframes fadein {
    from { opacity: 0; }
    to   { opacity: 1; }
}


</style>

   </head>
   <body>
     <form name="log" action="databaselogin.php" method="POST">
<div class=headers>
<hgroup>
<h1>ORDER YOUR FOOD</h1>
<h2>Login Here</h2>
</hgroup>
</div>
<div class="imgcontainer">
  <img src="dash2"class="avatar">
  </div>

  <div class="warn">
      <center>
      <label style="color:red" for="error">Incorrect Email Or Password</label>
      </center>
      </div>
  <div class="container">
    <label for="uname">Username</label>
    <input type="text" placeholder="Enter Username" id="email" name="email" required
    value="<?php 

				if (isset($_COOKIE['user']) && isset($_COOKIE['psw'])) {
    			echo $_COOKIE['user'];
				}
				else
				{
					echo "";
				}

      ?>"
    >


    </br>
    <label for="psw">Password </label>
    <input type="password" placeholder="Enter Password" id="psw" name="psw" required
    value="<?php 

				if (isset($_COOKIE['user']) && isset($_COOKIE['psw'])) {
    			echo $_COOKIE['psw'];
				}
				else
				{
					echo "";
				}

      ?>"
    >
    </br>
    <button type="submit">Login</button>
</br>
</br>

    <a href="reg.html" class="tag">Not a User? Sign Up</a>
  </div>
</form>

   </body>
	
</html>