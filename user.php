<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Signup</title>
 
  <script>
    function confirmInsert() {
      return confirm('do you want to record?'); 
    }
</script>

  <link rel="stylesheet" href="style.css">
  
</head>
<body>
  <div class="container">
    <div class="form-box">
      <form action="useradd.php"  method="POST" name="Formfill" >
        <h2 class="re">Register</h2>
        <p id="result"></p>
        <div class="input-box"> 
          <label class="leb" for="year">Full Name</label>
          <i class='bx bxs-user'></i>

          <input type="text" name="fullname" placeholder=" Enter Fullname" >
        </div>
        
        <div class="input-box">
           <label class="leb" for="email">Email</label>
          <i class='bx bxs-envelope'></i>
          <input type="email" name="email" placeholder=" Enter Email " >
        </div>
        <div class="input-box">
        <label class="leb" for="password">Password</label>
        <i class="fa-regular  Eyecon"></i>
          <i class='bx bxs-lock-alt'></i>
          <input type="password" name="password" placeholder=" Enter password" >
        </div>
       
        <div class="button">
          <input type="submit" value="Register" onclick="validation()" class="btn">
        </div> <br>
        <div class="group">
          <span><a href="index.php">Login</a></span>
        </div> 
      </form>
    </div>
  </div>
  
</body>
</html>