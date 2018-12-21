<html>
    <head>
        <title>My Shop</title>
	<link rel="stylesheet" href="styles.css">
    </head>

    <body>
        <h1>Welcome to my shop</h1>
  <div class="topnav">
    <a class="active" href="#home">Home</a>
    <a href="#mews">News</a>
    <a href="contact">Contact</a>
    <a href="about">About</a>
  </div>
	<form action="action_page.php">
	<div class="imgcontainer">
    		<img src="images/image-after.jpg" alt="Avatar" class="avatar">
  </div>
	<div class="container">
    		<label for="uname"><b>Username</b></label>
    		<input type="text" placeholder="Enter Username" name="uname" required>

    		<label for="psw"><b>Password</b></label>
    		<input type="password" placeholder="Enter Password" name="psw" required>

    		<button type="submit">Login</button>
    		<label>
      			<input type="checkbox" checked="checked" name="remember"> Remember me
    		</label>
  	</div>
	<div class="container" style="background-color:#f1f1f1">
    		<button type="button" class="cancelbtn">Cancel</button>
    		<span class="psw">Forgot <a href="#">password?</a></span>
  	</div>
	</form>
    </body>
</html>
