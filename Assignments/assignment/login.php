<html>
   <head>
       <title>MANIT</title>
       <link rel = "stylesheet" type="text/css" href="stylep.css">
       <link rel = "stylesheet" type = "text/css"
             href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css">
    </head> 
    <body>
    <div class="container">
        <div class="login-box">
        <div class="row">
        <div class="col-md-12 login-left" style="color:black">
            <h2 align="center"> Login here!</h2>
            <form action="login1.php" method="post">
                <div class="form-group">
                 <label>Scholar no</label>
                 <input type="text" name="scholarno" class="form-control" required>
                </div>
                <div class="form-group">
                 <label>Password</label>
                 <input type="password" name="password" class="form-control" required>
                </div>
                <div align="center">
                <button style="background:yellow;color:black;font-size:20px;font-family:cursive;padding:5px 15px;" type="submit" class="btn btn-primary">
               Login</button>   
                </div>    
            </form>
            </div>
        </div>
        </div>
        </div>
    </body>
</html>