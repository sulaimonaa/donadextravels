<style>
    .successMsg {
        position: absolute;
        width: 100%;
        height: 20px;
        margin-top: -15px;
        background: rgba(255, 255, 255, 1);
    }

    .successMsg>p {
        color: #ff4000;
        text-align: center;
        font-size: 12px;
    }

</style>


<?php

    if (!empty($_POST["name"]) && !empty($_POST["email"]))
    {

        $name = $_POST["name"];
        $email = $_POST["email"];
        $servername = "localhost";
        $username = "root";
        $password = "";
        $dbname = "donadextravels";

           $conn = new mysqli($servername, $username, $password, $dbname);
        if ($conn->connect_error) {
            die("Connection failed: " . $conn->connect_error);
        } 
        $sql = "INSERT INTO newsletter (Name, Email)
        VALUES ('$name', '$email')";

        if ($conn->query($sql) === TRUE) {
            echo "<div class='successMsg'><p> Thank you for subscribing. </p></div>";
        } else {
            echo "Error: " . $sql . "<br>" . $conn->error;
        }

        $conn->close(); 
        
    

/*Email Submission*/
include('Mail.php'); // includes the PEAR Mail class, already on your server.

    $name = $_POST["name"];
    $email = $_POST["email"];
    $username = 'newsletter@donadextravels.com.ng'; // your email address
    $password = '12@Feedback{.}'; // your email address password

    $from = $_POST["email"];
    $to = "newsletter@donadextravels.com.ng";
    $subject = "Email Subscription";
    $body= "
        Newsletter form:
        
        Full Name: $name 
        Email: $email 
        ";

$headers = array ('From' => $from, 'To' => $to, 'Subject' => $subject); // the email headers
$smtp = Mail::factory('smtp', array ('host' =>'localhost', 'auth' => true, 'username' => $username, 'password' => $password, 'port' => '25')); // SMTP protocol with the username and password of an existing email account in your hosting account
$mail = $smtp->send($to, $headers, $body); // sending the email

if (PEAR::isError($mail)){
echo("<p>" . $mail->getMessage() . "</p>");
}
else {
echo(" ");
header("Location: http://www.donadextravels.com.ng/"); // you can redirect page on successful submission.
}
        
    }
?>
<?php include 'index.php'; ?>
