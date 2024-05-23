<?php 
// Include the file containing database connection
include "dbconnection.php";

// Initialize variables to store error message and form data
$errorMessage = "";
$user_id = "";

$telephone = "";
$specialization = "";

if ($_SERVER['REQUEST_METHOD'] == 'GET') {
    // Check if counselor_id is set in GET parameters
    if (!isset($_GET["counselor_id"])) {
        header("Location: counselorview.php");
        exit;
    }
    $counselor_id = $_GET["counselor_id"];

    // Use prepared statements to prevent SQL injection
    $sql = "SELECT * FROM counselors WHERE counselor_id = ?";
    $stmt = $connection->prepare($sql);
    $stmt->bind_param("i", $counselor_id);
    $stmt->execute();
    $result = $stmt->get_result();

    // Check if record exists
    if ($result->num_rows > 0) {
        $row = $result->fetch_assoc();
        $user_id = $row['user_id'];
        
        $telephone = $row['telephone'];
        $specialization = $row['specialization'];
    } else {
        header("Location: appointmentview.php");
        exit;
    }
} elseif ($_SERVER['REQUEST_METHOD'] == 'POST') {
    // Retrieve data from POST parameters
    $counselor_id = $_POST['counselor_id'];
    $user_id = $_POST['user_id'];
    $telephone = $_POST['telephone'];
    $specialization = $_POST['specialization'];

    // Check for empty fields
    if (empty($counselor_id) || empty($user_id) || empty($telephone) || empty($specialization)) {
        $errorMessage = "All fields are required!";
    } else {
        // Use prepared statements to prevent SQL injection
        $sql = "UPDATE counselors SET user_id = ?, telephone = ?, specialization = ? WHERE counselor_id = ?";
        $stmt = $connection->prepare($sql);
        $stmt->bind_param("sssii", $user_id, $telephone, $specialization, $counselor_id);

        // Execute the SQL query
        if ($stmt->execute()) {
            header("Location: counselorview.php");
            exit;
        } else {
            $errorMessage = "Error updating record: " . $connection->error;
        }
    }
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Update About assessment</title>
    <script>
        function confirmUpdate() {
            return confirm('Do you want to update this record?');
        }
    </script>
    <link rel="stylesheet" href="style.css">
    
    <style>
         /* Add your CSS styles here */
         body {
            background-color: #0073ff;
            font-family: Arial, sans-serif;
        }
        
        center {
            margin-top: 50px;
        }
        
        h1 {
            color: #333;
        }
        
        form {
            width: 400px;
            background-color: #008080;
            padding: 20px;
            border-radius: 5px;
            box-shadow: 0 2px 5px rgba(0, 0, 0, 0.1);
        }
        
        label {
            font-weight: bold;
            color: yellow;
            padding: 15px;
        }
        
        input[type="text"] {
            width: 100%;
            padding: 12px;
            margin-top: 5px;
            margin-bottom: 10px;
            border: 1px solid #ccc;
            border-radius: 4px;
            font-weight: bold;
        }
        
        input[type="submit"] {
            padding: 15px 20px;
            background-color: #007bff;
            color: yellow;
            border: none;
            border-radius: 4px;
            cursor: pointer;
        }
        
        input[type="submit"]:hover {
            background-color: #0056b3;
        }
        
        .he {
            color: white;
            background-color: blue;
            width: 400px;
            border-radius: 8px;
        }
        
        .em {
            color: black;
        }
        
        .tu {
            color: yellow;
        }
        /* Basic styling for demonstration purposes */
        body {
            font-family: Arial, sans-serif;
            margin: 10;
            padding: 10;
            background-color: MediumSeaGreen;
        }
        .navigation a {
            color: white;
            padding: 5px;
            margin: 5px;
            border-radius: 15px;
            background-color: none;
        }
        .navigation a:hover,
        .navigation a:active {
            color: white;
            background-color: none;
        }
        .header {
            display: flex;
            justify-content: space-between;
            align-items: center;
            padding: 28px 25px;
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
            text-align: none;
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
        .p1 {
            font-size: 20px;
            color: black;
            text-align: center;
        }
        .container {
            max-width: 800px;
            margin: 0 auto;
            padding: 20px;
        }
        .dropdown-contents {
            display: none;
            position: absolute;
            background-color: deeppink;
            text-decoration: none;
        }
        .dropdown-contents a {
            color: black;
            text-decoration: none;
            display: block;
        }
        .dropdown-contents a:hover {
            background-color: red;
        }
        .dropdown:hover .dropdown-contents {
            display: block;
        }
        .tu {
            color: rgb(237, 237, 18);
        }
        .size {
            width: 250px;
        }
        .ph {
            width: 900px;
            height: 650px;
        }
        .bu {
            background-color: blue;
            color: white;
        }
    </style>
</head>
<body>
<header>
    <div class="header">
        <img class="logo" src="logo.jpg" alt="Logo">
        <h3 class="tu"><i>Platform <br> Counseling</i></h3>
        <ul class="navigation">
            <li><a href="home.php">Home</a></li>
            <li><a href="aboutus.php">About Us</a></li>
            <li><a href="contactus.html">Contact Us</a></li>
            <li><a href="appointment.php">Appointment</a></li>
            <li><a href="payment.php">Payment</a></li>
            <li><a href="clients.php">Client Form</a></li>
            <li class="dropdown">
                <a href="#">Form</a>
                <div class="dropdown-contents">
                    <a href="counselor.php">Counselor Form</a>
                    <a href="assessment.php">Assessment Form</a>
                    <a href="recovery.php">Recovery Form</a>
                    <a href="report.php">Report Form</a>
                    <a href="session.php">Session Form</a>
                </div>
            </li>
            <li class="dropdown">
                <a href="#">Table</a>
                <div class="dropdown-contents">
                    <a href="clientview.php">Client Table</a>
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
                    <a href="signin.php">Sign In</a>
                    <a href="profile.php">Profile Editing</a>
                    <a href="logout.php">Logout</a>
                </div>
            </li>
        </ul>
    </div>
</header>
<br><br><br>
<center>
    <div>
        <h1 class="he">Update Information About Assessment</h1>
    </div>
    <br><br>
    <form method="POST" onsubmit="return confirmUpdate();">
        <input type="hidden" name="counselor_id" value="<?php echo $counselor_id ; ?>">
        <div>
            <label for="user_id">User ID</label>
            <input readonly name="user_id" class="em" type="hidden" value="<?php echo $user_id ; ?>">
        </div>
       
        <div>
            <label for="telephone">Telphone</label>
            <input class="em"  type="text" name="telephone" value="<?php echo $telephone; ?>" placeholder="Enter Telephone">
        </div>
        <div>
            <label for="specialization">Specialization</label>
            <input class="em"  type="text" name="specialization" value="<?php echo $specialization; ?>" placeholder="Enter specialization">
        </div>
        <div>
            <input type="submit" value="Update">
            <span class="error"><?php echo $errorMessage; ?></span>
        </div>
    </form>
</center>
<footer>
    <p style="color: white; text-align: center; margin-top: 40px; background-color: none; height: 40px;">
        <marquee>&copy; Copy_2024 &reg; Designed By Gatbazi_222011939_GrpB_BIT</marquee>
    </p>
</footer>
</body>
</html>
