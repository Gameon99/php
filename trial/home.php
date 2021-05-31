<!DOCTYPE html>
<html lang="en">
<head>
<title>Page Title</title>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel = "stylesheet" type="text/css" href="style.css">
</head>
<body>
<div class="top-nav">
  <a href="#">Home</a>
  <a href="#">About</a>
  <a href="#">Contact Us</a>
  <a class="right" onclick="openForm()">Sign Up/Login</a>
</div>
<div class="form-popup" id="myForm">
 <div class="container" id="container">
	<div class="form-container sign-up-container"> 
		<form action="signup.php" method="post">
			<h2>Create Account</h2>
			<div class="social-container">
				<a href="#" class="social" style="background-color:darkblue;"><i class="fab fa-facebook-f" style="color:white;">f</i></a>
				<a href="#" class="social" style="background-color:red;"><i class="fab fa-google-plus-g" style="color:white">G+</i></a>
				<a href="#" class="social" style="background-color:blue;"><i class="fab fa-linkedin-in" style="color:white">in</i></a>
			</div>
			<span>or use your email for registration</span>
			<input type="text" name="name" class="form-control"placeholder="Name" />
			<input type="email" name="email" class="form-control" placeholder="Email" />
			<input type="password" name="password" class="form-control" placeholder="Password" />
			<button>Sign Up</button>
		</form>
	</div>
	<div class="form-container sign-in-container">
		<form action="#">
			<h2>Sign in</h2>
			<div class="social-container">
				<a href="#" class="social" style="background-color:darkblue;"><i class="fab fa-facebook-f" style="color:white;">f</i></a>
				<a href="#" class="social" style="background-color:red;"><i class="fab fa-google-plus-g" style="color:white">G+</i></a>
				<a href="#" class="social" style="background-color:blue;"><i class="fab fa-linkedin-in" style="color:white">in</i></a>
			</div>
			<span>or use your account</span>
			<input type="email" placeholder="Email" />
			<input type="password" placeholder="Password" />
			<a href="#">Forgot your password?</a>
			<button>Sign In</button>
		</form>
	</div>
	<div class="overlay-container" style="font-family:georgia;">
		<div class="overlay">
			<div class="overlay-panel overlay-left">
				<h2>Welcome Back!</h2>
				<p>Keep connected by logging in</p>
				<button class="ghost" id="signIn">Sign In</button>
			</div>
			<div class="overlay-panel overlay-right">
				<h2>Hello!</h2>
				<p>Enter your personal details and get started today</p>
				<button class="ghost" id="signUp">Sign Up</button>
			</div>
		</div>
	</div>
</div>

</div>

<script>
const signUpButton = document.getElementById('signUp');
const signInButton = document.getElementById('signIn');
const container = document.getElementById('container');

signUpButton.addEventListener('click', () => {
	container.classList.add("right-panel-active");
});

signInButton.addEventListener('click', () => {
	container.classList.remove("right-panel-active");
});
function openForm() {
  document.getElementById("myForm").style.display = "block";
}

function closeForm() {
  document.getElementById("myForm").style.display = "none";
}
    </script>
<script>
document.addEventListener('mouseup', function(e) {
    var container = document.getElementById('myForm');
    if (!container.contains(e.target)) {
        container.style.display = 'none';
    }
});
</script>



<div class="header">
  <h1 style="float:left;">Welcome</h1>
</div>

<div class="row">
  <div class="side">
    <h2>About Me</h2>
    <h5>Photo of me:</h5>
    <div class="fakeimg" style="height:200px;">Image</div>
    <p>Some text about me in culpa qui officia deserunt mollit anim..</p>
    <h3>More Text</h3>
    <p>Lorem ipsum dolor sit ame.</p>
    <div class="fakeimg" style="height:60px;">Image</div><br>
    <div class="fakeimg" style="height:60px;">Image</div><br>
    <div class="fakeimg" style="height:60px;">Image</div>
  </div>
  <div class="main">
    <h2>TITLE HEADING</h2>
    <h5>Title description, Dec 7, 2017</h5>
    <div class="fakeimg" style="height:200px;">Image</div>
    <p>Some text..</p>
    <p>Sunt in culpa qui officia deserunt mollit anim id est laborum consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco.</p>
    <br>
    <h2>TITLE HEADING</h2>
    <h5>Title description, Sep 2, 2017</h5>
    <div class="fakeimg" style="height:200px;">Image</div>
    <p>Some text..</p>
    <p>Sunt in culpa qui officia deserunt mollit anim id est laborum consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco.</p>
  </div>
</div>

<div class="footer">
  <h2>Footer</h2>
</div>

</body>
</html>