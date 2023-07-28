<?php

$server = "localhost";
$username = "root";
$password = "";
$dbname = "contact";

$con = mysqli_connect($server, $username, $password, $dbname);

if(!$con)
{
     echo "not connected";
}

$name = $_POST['name'];
$email = $_POST['email'];
$number = $_POST['number'];

$domain = $_POST['domain'];
$message = $_POST['message'];


$sql = "INSERT INTO web(name, email, number, domain, message) VALUES ('$name','$email',$number,'$domain','$message')";

$result = mysqli_query($con , $sql);

if($result)
{
     $message = "Your query is successfully Submitted ... !!";
}
else{
     $message = "query failed...!";
}

?>

<!DOCTYPE html>
<html>
<head>
    <style>
        /* CSS styles for centering and font style */
        body {
            display: flex;
            justify-content: center;
            align-items: center;
            height: 100vh;
            font-family: Arial, sans-serif;
        }

        .message {
            text-align: center;
            font-size: 24px;
            font-weight: bold;
            color: #333;
        }
    </style>
</head>
<body>
    <div class="message">
        <?php echo $message; ?>
    </div>
</body>
</html>


    

