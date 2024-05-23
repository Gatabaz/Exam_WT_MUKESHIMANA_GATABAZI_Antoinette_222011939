<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>home</title>
  <style>
      /* Basic styling for demonstration purposes */
      body {
            font-family: Arial, sans-serif;
            margin: 10;
            padding: 10;
            background-color:MediumSeaGreen;
           
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
            padding: 10px 20px;
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
      background-color:none;
      color:blue;
        }

  </style>
  <link rel="stylesheet" type="text/css" href="style1.css" title="style1" media="screen,tv,print,handheld"/>
</head>
<body>
  <header>
    <div class="header">
        <img class="logo" src="logo.jpg" alt="Logo">
        <h3 class="tu"><i>Platform <br> Counseling  </i></h3>
        <ul class="navigation">
          <li><a href="menu1.php">Home</a></li>
            <li><a href="about us.php">About Us</a></li>
            <li><a href="contactus.html">Contact Us</a></li>
            <li><a href="appointment.php">Appointment</a></li>
            <li><a href="payment.php">Payment</a></li>
            <li class="dropdown">
              <a href="#">Form</a>
              <div class="dropdown-contents">
                <a href="clients.php">Client Form</a>
                <a href="counselor.php">Counselor Form</a>
                <a href="assessment.php">Assessment Form</a>
                <a href="recovery.php">Recovery Form</a>
                <a href="report.php">report Form</a>
                <a href="sesssion.php">Session Form</a>
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
     <form action="search.php" method="GET">
          
        </form></div></li></ul></div></header>
        <h2><marquee class="bu">WELCOME TO ONLINE SUBSTANCE COUNSELORS ABUSE PLATFORM</marquee></h2>
        <center>
<div><p class="p1">WELCOME OUR HOME PEAGE</p></div>
<div><p class="p1">HELP EVERY PATIENT</p></div>
<div> 
  <img class="ph" src="fi.jpg" alt="">
  <p>Email:onlinecounselor@yahoo.com</p>
  <p> Call Phone: +250786758334</p>
  <p>Address: 180st,kg, Rwanda Nyarugenge</p><br>
</div>


<div><footer style="background-color:rgb(25, 36, 193);text-align: center;width:100%;height:50px; color: white;font-size: 15px;margin-top: 20px;"><p> Designed by Mukeshiman Gatabazi_222011939 &copy YEAR TWO BIT GROUP B &reg 2024</p></footer></div> 
</body>
</html>