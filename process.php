<center><?php
include("connection.php");
if(isset ($_POST['btn']));
{
    $nm=$_POST['nm'];
    $mob=$_POST['mob'];
    $add=$_POST['add'];
    $mail=$_POST['mail'];
    $ag=$_POST['ag'];
    $ct=$_POST['ct'];
    $ab=$_POST['ab'];
    $ka=$_POST['ka'];
    $inv=$_POST['inv'];
    $plan=$_POST['plan'];
    $result= mysqli_query ($con,"insert into franchise values ('$nm','$mob','$add','$mail','$ag','$ct','$ab','$ka','$inv','$plan')");
    if ($result)
    {
       
        echo "<br><br><br><br><br><h1>Your information has been received</h1>";
    }
    else{
        echo " Invalid information";
    }
}
?></center>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Enquiry successful</title>
    <link rel="stylesheet" href="process.css">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Rubik+Wet+Paint&display=swap" rel="stylesheet">
    <script src="https://kit.fontawesome.com/42ac903be3.js" crossorigin="anonymous"></script>
</head>
<body ><br>

<div class="container">
    <div class="row">
        <div class="col-md-12"><center><i class="fa-solid fa-check fa-beat fa-2xl" style="color: #0f0700;"></i></center></div>
    </div>
</div><br><br>
    <div class="container">
        <div class="row">
            <div class="col-md-12"><center><a href="index.html"><button>Go Back</button></a></center></div>
        </div>
    </div>
    
</body>
</html>