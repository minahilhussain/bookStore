<?php
$pageTitle='Login';
?>
<html>
<head>
  <title><?php echo $pageTitle;?></title>
 <link rel="stylesheet" href="css/style.css" type="text/css">
  <meta charset="utf-8">
      <meta name="viewport" content="width=device-width, initial-scale=1">
     <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css">

     <link href="https://fonts.googleapis.com/css?family=Josefin+Sans&display=swap" rel="stylesheet">
</head>
<body>

  <div class="header">

    <div class="wrapper">

      

      <ul class="nav">
        <li><a href="index.php">HOME</a></li>
              
                <li><a href="login.php">LOGIN</a></li>

              </ul>

    </div>

  </div>
<?php
if (isset($_REQUEST['loginfailed'])) {
    echo $_REQUEST['loginfailed'];
} ?>

 <section class="my-5">
        <div class="py -5">
       
          <h2 class="text-center">Login</h2>
        </div>
        <div class="w-50 m-auto">
          <form action="inc/loginAction.php" method="post">
            <div class="form-group">
             <label>User name</label>
              <input type="text" name="user" autocomplete="off" required class="form-control">
              

            </div>
             <div class="form-group">
              <label>Email</label>
              <input type="email" name="email" autocomplete="off" required class="form-control">
             
              

            </div>
          <div class="form-group">
             <label>Password</label>
              <input type="password" name="password" autocomplete="off" required class="form-control">

            </div>
          <div class="form-group">
             <label>Join as:</label><br>
  <input type="radio" id="admin" name="type" value="admin">
  <label for="male">Admin</label><br>
  <input type="radio" id="moderator" name="type" value="Moderator">
  <label for="male">Moderator</label><br>
  
  <input type="radio" id="author" name="type" value="Author">
  <label for="female">Author</label><br>
  <input type="radio" id="other" name="type" value="other">
  <label for="other">Other</label><br>

            </div>
            <button type="submit" class="btn btn-success">Submit</button><br><br>
 <div class="form-group">
            <label>New to this website? <a href="signup.php"> Signup</a></label>
          </div>
         
          </form>

        </div>
</section>











     <script async src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
      <script async src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
      <script async src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.0/js/bootstrap.min.js"></script>


      <?php include('inc/footer.php');?>
</body>
</html>