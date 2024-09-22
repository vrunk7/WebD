<?php
$servername = "localhost";
$username = "root";
$password = "maria";
$dbname = "varun";

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);

// Check connection
if ($conn->connect_error) {
    die("Connection Failed: " . $conn->connect_error);
}

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    //echo "<pre>";
    //print_r($_POST);
    //echo "</pre>";

    echo "<style>
    body {
        background-color: black;
        text-align: center;
        padding: 50px;
    }
    h1, h2, h3 {
        font-weight: 150 !important;
        text-shadow: 0 0 10px rgb(255, 215, 0) !important;
        color: rgb(255, 215, 0) !important;
    }
    #return-link {
        text-decoration: none;
        color: black;
        background-color: gold;
        padding: 10px 20px;
        border-radius: 5px;
        display: inline-block;
        margin-top: 20px;
    }
    #return-link:hover {
        background-color: #F1F1F2;
        color: black;
    }
</style>";

    // Retrieve form data
    $name = $_POST['Name'];
    $email = $_POST['Email_ID'];
    $msg = $_POST['Message'];

    // Prepare and bind
    $stmt = $conn->prepare("INSERT INTO user_details (Name, Email_ID, Message) VALUES (?, ?, ?)");
    $stmt->bind_param("sss", $name, $email, $msg);

    if ($stmt->execute()) {
        echo "<h1>Thank you <span id='user_name'>$name</span></h1>";
        echo "<h2>Your message has been delivered</h2><br>";
        echo "<h2>I'll get back to you soon!</h3>";
        echo "<a id='return-link' href='Contact.php'>Return to Contact Section</a>";
    } else {
        echo "Error: " . $stmt->error;
    }

    $stmt->close();

$conn->close();
}
?>