<?php
include 'dbconnection.php';
?>
<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Recovery</title>
	<link rel="stylesheet" type="text/css" href="client.css">
  <style>
      /* Basic styling for demonstration purposes */
      body {
            font-family: Arial, sans-serif;
            margin: 10;
            padding: 10;
            background-color: #5858ee;
        }
.navigation a:link{
    color: white;
    background-color:none;
    padding: 5px;
    margin: 5px;
      border-radius: 15px;

}
.navigation a:visited{
    color: white;
    background-color:none;
     padding: 5px;
     margin: 5px;
       border-radius: 15px;
}
.navigation a:hover{
    color: white;
    background-color: none;
     padding: 5px;
     margin: 5px;
     border-radius: 15px;
}
 .navigation a:active{
    color: white;
    background-color: none;
     padding: 5px;
     margin: 5px;
       border-radius: 15px;
}

        .header {
            display: flex;
            justify-content: space-between;
            align-items: center;
            padding: 25px 22px;
             background-color: rgb(9, 188, 88);
            border-bottom: 5px solid black;
        }
        .logo {
            width: 60px; /* Adjust logo size */
            height: auto;
        }
        .navigation {
            list-style-type: none;
            margin: 0;
            padding: 0;
            text-align:none;
            flex-grow: 2; 
        }
        .navigation li {
            display: inline-block;
            margin-right: 5px;
            padding: 5px;
        }
        .navigation li:last-child {
            margin-right: 0;
        }
        .navigation li a {
            text-decoration: none;
            color: #333;
        }
        .p1{
            font-size: 20px;
            color: black;
            text-align: center;

        }
        .container {
    max-width: 800px;
    margin: 0 auto;
    padding: 20px;
      }
      .dropdown-contents{
  display: none;
  position: absolute;
  background-color:deeppink;
 text-decoration: none;
}
.dropdown-contents a{
  color: black;
  text-decoration: none;
  display: block;
}
.dropdown-contents a :hover{
 background-color: red;
}
.dropdown:hover .dropdown-contents{
  display:block;
}
.tu{
  color: rgb(237, 237, 18);
}
.size{
    width: 250px;
}
.ph{
  width: 900px;
  height: 650px;
}
.bu{
      background-color:blue;
      color:white;
        }

  </style>
</head>
<body> 
<header>
    <div class="header">
        <img class="logo" src="logo.jpg" alt="Logo">
        <h3 class="tu"><i>Platform <br> Counseling  </i></h3>
        <ul class="navigation">
          <li><a href="home.php">Home</a></li>
            <li><a href="aboutus.php">About Us</a></li>
            <li><a href="contactus.html">Contact Us</a></li>
            <li><a href="appointment.php">Appointment</a></li>
            <li><a href="payment.php">Payment</a></li>
           <li> <a href="clients.php">Client Form</a></li>
            <li class="dropdown">
              <a href="#">Form</a>
              <div class="dropdown-contents">
                
                <a href="counselor.php">Counselor Form</a>
                <a href="assessment.php">Assessment Form</a>
                <a href="recovery.php">Recovery Form</a>
                <a href="report.php">report Form</a>
                <a href="session.php">Session Form</a>
              </div>
            </li>
            <li class="dropdown">
            <a href="#">Table</a>
            <div class="dropdown-contents">
              <a href="clientview.php">Client table</a>
              <a href="counselorview.php">Counselor Table</a>
              <a href="Assessmentview.php">Assessment Table</a>
              <a href="recoveryview.php">Recovery Table</a>
              <a href="reportview.php">Report Table</a>
              <a href="sessionview.php">Session Table</a>
              <a href="appointmentview.php">Appointment Table</a>
              <a href="paymentview.php">Payment Table</a>
             
            </div>
          </li>
            <li class="dropdown">
          <a href="#">Settings</a>
          <div class="dropdown-contents">
            <a href="signin.php">sign in</a>
            <a href="profile.php">profile editing</a>
            <a href="logout.php">Logout</a>
          </div>
        </li>
        </ul>
    </div>
        <br>
     </div></li></ul></div></header>
<br><br>
 <div class="container">
    <div class="form-box">
      <form action="reco.php" method="POST" name="Formfill" onsubmit="return validation" onsubmit=" return confirmInsert()">
        <h2 class="hi">Recovery</h2>
        <p id="result"></p>  
        
	       <div class="input-box">			
    <label class="label">Client Id</label>
    <select name="client_id" id="client_id" class="input"> 
<?php
$query = "SELECT client_id,telephone FROM clients";
$result = $connection->query($query);

if ($result && $result->num_rows > 0) {
while ($row = $result->fetch_assoc()) {
$client_id = $row['client_id'];
$telephone=$row['telephone'];
echo "<option value=\"$client_id\">$client_id $telephone</option>";
}
}
?>
</select><br>
</div>
   
 <div class="input-box">
<label  class="leb" for="planDescription">Plan Description</label>
<input class="input" type="text" id="planDescription" name="planDescription" placeholder="Enter planDescription" required> 
</div>
  <div class="input-box">
<label  class="leb" for="startDate">Start Date</label>
<input class="input" type="date" id="startDate" name="startDate" placeholder="Enter startDate" required> 
</div> 
 <div class="input-box">
<label  class="leb" for="end_date">End Date</label>
<input class="input" type="date" id="end_date" name="end_date" placeholder="Enter end_date" required> 
</div> 
       <div class="button">
          <input type="submit" value="Recovery" onclick="validation()" class="btn"> <br>
          <input type="reset" value="Reset" onclick="validation()" class="btn">
        </div>
         
      </form>
    </div>
    
  </div>
</body>
</html>