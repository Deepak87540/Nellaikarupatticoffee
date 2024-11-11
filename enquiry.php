<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Franchise enquiry</title>
    <link rel="stylesheet" href="enquiryform.css">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Rubik+Wet+Paint&display=swap" rel="stylesheet">

</head>
<body>
    <center><h1> Please fill out this form and our valuable team will reach you!</h1></center>
    <center><form action="process.php" method ="post"> 
    <center><h1 >Franchise opportunity </h1></center>
    <table>
        <tr>
            <td><label for="">Name</label></td>
            <td><input type="text" id="nm" name="nm" required></td>

            <td><label for="">Mobileno</label></td>
            <td><input type="text" id="mob" name="mob" required></td>
        </tr>
        <tr>
            <td><label for="">Address</label></td>
            <td><textarea name="add" id="add" required></textarea></td>

            <td><label for="">EmailId</label></td>
            <td><input type="email" id="mail" name = "mail" required></td>
        </tr>
        <tr>
            <td><label for="">Age</label></td>
            <td><input type="text" id="ag" name ="ag" required></td>

            <td><label for="">City</label></td>
            <td><input type="text" id="ct" name="ct"></td>
        </tr>
        <tr>
            <td><label for="">How did you hear about us?</label></td>
            <td><textarea name="ab" id="ab"></textarea></td>

            <td><label for="">	Why are you interested in franchising?</label></td>
            <td><input type="text" name="ka" id="ka"></td>
        </tr>
        <tr>
            <td><label for="">Are you Investing your own money or from loans?</label></td>
            <td><textarea name="inv" id="inv"></textarea></td>

            <td><label for="">	When do you plan to open the store?</label></td>
            <td><textarea name="plan" id="plan"></textarea></td>
        </tr>
        <tr>
        <td><center><button id="btn" style = "margin-left : 120px";>Submit</button></center></td>
        <td><center><button type="reset" value="Reset"> Reset</button></center></td>
    </tr>
    
    </table>
    </form></center>
</body>
</html>