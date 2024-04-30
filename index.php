<?php
$insert = false;
if(isset($_POST['fname']) 
// && isset($_POST['lname']) && isset($_POST['mail']) && isset($_POST['contactnumber']) && isset($_POST['reason'])
)
{
$server = "localhost";
$username = "root";
$password = "";

$con = mysqli_connect($server, $username, $password);
if (!$con) {
    die("Connection failed: " . mysqli_connect_error());
}




$fname=$_POST['fname']; 
$lname = $_POST["lname"];
$mail = $_POST["mail"];
$contactnumber = $_POST["contactnumber"];
$reason = $_POST["reason"];

$sql = "INSERT INTO `contact`.`details` (`fname`, `lname`, `mail`, `contactnumber`, `reason`)
        VALUES ('$fname', '$lname', '$mail', '$contactnumber', '$reason')";

if($con->query($sql) == true){
    $insert = true;
    // echo "Sucessfully inserted";
}
else{
    echo "Error: $sql <br> $con->error";
}
$con->close();
}
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="style.css">
</head>

<body>
    <div class="back">
    <div class="main">
        <h2 class="heading">Contact Me </h2>
        <form action="index.php" name="contactus" method="post">
            <div id="fname" class="input">
                <div>
                    First Name :
                </div> <input type="text" name="fname" class="in">
            </div>
            <div id="lname" class="input">
                <div>
                    Last Name :
                </div> <input type="text" name="lname" class="in">
            </div>
            <div id="mail" class="input">
                <div>
                    Email :
                </div> <input type="mail" name="mail" class="in">
            </div>
            <div id="contactnumber" class="input">
                <div>
                    Contact Number :
                </div> <input type="contact number" name="contactnumber" class="in">
            </div>
            <div id="Reason" class="input">
                <div>
                    Reason :
                </div> <input type="text" name="reason" id="rea" class="in">
            </div>
            <div class="btn">
                <button class="bt">Submit</button>
            </div>
        </form>
        <?php
        if($insert == true){
         echo '<div class="submsg">
           
            <p>Thank You For Contacting Me</p>   
        </div>';}
        ?>
    </div>
    </div>
</body>

</html>




