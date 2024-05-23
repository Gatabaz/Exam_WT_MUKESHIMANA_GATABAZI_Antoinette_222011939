<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Clientview</title>
  <link rel="stylesheet" href="counselorview.css">
  <style>
      /* Basic styling for demonstration purposes */
      body {
            font-family: Arial, sans-serif;
            margin: 10;
            padding: 10;
            background-color: MediumSeaGreen;
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
              v
             
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
<br><br><br><br>
  <div class="container">
    <a href='/counselingplatform/clients.php' class="add">New Add</a> <br>
    
    <div class="text-center">

      <center><h2 class="list">INFORMATION IN DATABASE</h2></center>
      <table class="table">
        <thead class="thead-light">
          <tr>
            <th> Client ID</th>
            <th>User ID </th>
            <th>Gender </th>
            <th>Year Of Birth</th>
            <th>Telephone</th>
            <th>Create At</th>
            
            
            
            <th colspan="2">Actions</th>
          </tr>
        </thead>
        <tbody>
          <?php
         include "dbconnection.php";
          
          $sql = "SELECT * FROM clients";
          $result = $connection->query($sql);
          if (!$result) {
            die("Invalid query: " . $connection->error);
          }
          while ($row = $result->fetch_assoc()) {
            echo "
              <tr>
                <td>{$row['client_id']}</td>
                <td>{$row['user_id']}</td>
                <td>{$row['gender']}</td>
                <td>{$row['yearbirth']}</td>
                <td>{$row['telephone']}</td>  
                <td>{$row['createAt']}</td>
               
                 
                <td>
                  <a href='/counselingplatform/clientedit.php?client_id={$row['client_id']}' class='btn btn-primary'>Edit</a>
                </td>
                <td>
                  <a href='/counselingplatform/clientdelete.php?client_id={$row['client_id']}' class='btn btn-danger'>Delete</a>
                </td>
              </tr>
            ";
          }
          ?>
        </tbody>
      </table>
      
    </div>
    <h2><marquee class="bu">WELCOME TO ONLINE SUBSTANCE COUNSLING ABUSE PLATFORM</marquee></h2>
  </div>
</body>
</html>