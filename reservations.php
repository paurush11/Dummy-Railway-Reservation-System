<!DOCTYPE html>
<!--[if lt IE 7 ]> <html lang="en" class="no-js ie6 lt8"> <![endif]-->
<!--[if IE 7 ]>    <html lang="en" class="no-js ie7 lt8"> <![endif]-->
<!--[if IE 8 ]>    <html lang="en" class="no-js ie8 lt8"> <![endif]-->
<!--[if IE 9 ]>    <html lang="en" class="no-js ie9"> <![endif]-->
<!--[if (gt IE 9)|!(IE)]><!--> <html lang="en" class="no-js"> <!--<![endif]-->


    <head>

        <meta charset="UTF-8" />
        <!-- <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">  -->
        <title>Train Availability</title>
        <meta name="viewport" content="width=device-width, initial-scale=1.0"> 
        <meta name="description" content="Train Availability"/>
        <meta name="keywords" content="html5, css3, form, switch, animation, :target, pseudo-class" />
        <meta name="author" content="Codrops" />
        <link rel="shortcut icon" href="../favicon.ico"> 
        <link rel="stylesheet" type="text/css" href="css/demo.css" />
        <link rel="stylesheet" type="text/css" href="css/style2.css" />
		<link rel="stylesheet" type="text/css" href="css/animate-custom.css" />
    </head>


    <body>

        <div class="container">
            <!-- Codrops top bar -->
            <div class="codrops-top">
                                <span class="right">
                                    </span>
                <div class="clr"></div>
            </div><!--/ Codrops top bar -->
            <header>
                <h1>Train Reservation</h1>
				            </header>
            <section>				
                <div id="container_demo" >
                    <!-- hidden anchor to stop jump http://www.css3create.com/Astuce-Empecher-le-scroll-avec-l-utilisation-de-target#wrap4  -->
<?php
require("libs/config.php");
$pageDetails = getPageDetailsByName($currentPage);
include("header.php");
?>
<style>
  table{
    background-color: red;
    border: 3;
  }
#btn{
  align-items: right;
  border-radius: 5px;
  text-align: center;
  background-color: black;
}
</style>
<div>
<form style="font-size:20px;font-family:Rockwell" action="reservation.php" method="GET">
  <table  border="0" ><tr>
        <td>
          UserName:</td>
          <td> <input style="padding: 10px;
            border: solid 5px #c9c9c9;
            transition: border 0.3s;"type="text" name="username" /></td></tr>
          <tr>
            <td>
            Name:</td>
            <td> <input style="padding: 10px;
            border: solid 5px #c9c9c9;
            transition: border 0.3s;"type="text" name="name" /></td></tr>
            <tr>
              <td>
                  Age:</td>
                  <td> <input style="padding: 10px;
                      border: solid 5px #c9c9c9;
                      transition: border 0.3s;"type="number" name="age" /></td></tr>
                      <tr>
        <td>
          Gender:</td>
        <td> <input style="padding: 10px;
            border: solid 5px #c9c9c9;
            transition: border 0.3s;"type="text" name="gender" />
          </td></tr>
        <tr><td>
          Berth Preference:</td><td> <input style="padding: 10px;
            border: solid 5px #c9c9c9;
            transition: border 0.3s;"type="text" name="berth" /></td></tr>
        <tr><td>
          Class:</td><td> <input style="padding: 10px;
            border: solid 5px #c9c9c9;
            transition: border 0.3s;"type="text" name="class" /></td></tr>
        <tr><td>
          Nationality:</td><td> <input style="padding: 10px;
            border: solid 5px #c9c9c9;
            transition: border 0.3s;"type="text" name="nationality" /></td></tr>
        <tr><td>
          Train Number:</td><td> <input style="padding: 10px;
            border: solid 5px #c9c9c9;
            transition: border 0.3s;"type="number" name="trainno" /></td></tr>
        <tr><td>

          Train Name:</td><td> <input style="padding: 10px;
            border: solid 5px #c9c9c9;
            transition: border 0.3s;"type="text" name="trainame" /></td></tr>


          <tr align="center" border="5" id="btn"><td>
          <input style="padding: 20px 30px;font-size:20px;background-color: #008CBA;" type="submit" value="Reserve" /></td></tr>
  </table>
</form>
</div>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>How to Send SMS</title>

    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-beta.2/css/bootstrap.min.css" integrity="sha384-PsH8R72JQ3SOdhVi3uxftmaW6Vc51MKb0q5P2rRUpPvrszuE4W1povHYgTpBfshb" crossorigin="anonymous">
</head>
<body class="bg-light" >
        <div class="container mt-5">
            <div class="row justify-content-md-center">
                <div class="">
                    <h3 class="text-center">Send SMS</h3>
                </div>
            </div>
        </div>
    <div class="container mt-3">
        <div class="row justify-content-md-center">
            <div class="col-md-4">
                <form method="POST" action="#">

                  <label for="lblMobileNumber">Mobile Number</label>
                  <input type="tel" name="userMobile" class="form-control" id="number" placeholder="919191919191"  required    pattern="[789][0-9]{9}" oninvalid="Please Enter Proper Mobile Number" >

                  <label for="lblMessage">Message</label>
                  <textarea class="form-control"  name="userMessage" required  id="textMessage" rows="3"  placeholder="Enter your message here" maxlength="158"></textarea>

                  <button type="submit" name="SubmitButton"class="btn btn-outline-primary mt-3" id="btnSend">Send</button>

                  <button type="button" class="btn btn-outline-secondary mt-3 ml-3" onclick="clearAllFields()">Clear</button>
                </form>
            </div>
        </div>
    </div>
    <div class="container mt-5">
            <div class="row justify-content-md-center">
                <div class="col-md-4">
                    <p  id-"response" class="text-center"></p>
                </div>
            </div>
        </div>
</body>
<script type="text/javascript">
function clearAllFields(){
    number.value="";
    textMessage.value="";
}
</script>
</html>

<?php
if(isset($_POST['SubmitButton']))
{
$textMessage=$_POST["userMessage"];
$mobileNumber=$_POST["userMobile"];
$apiKey = urlencode('wfE7+4FVjJY-NuR51uTP0wi1fo4tBbZIUgLmQk4FUL');

   // Message details
   $numbers = array($mobileNumber);
   $sender = urlencode('TXTLCL');
   $message = rawurlencode($textMessage);
   $numbers = implode(',', $numbers);
   // Prepare data for POST request
   $data = array('apikey' => $apiKey, 'numbers' => $numbers, "sender" => $sender, "message" => $message);
   // Send the POST request with cURL
   $ch = curl_init('https://api.textlocal.in/send/');
   curl_setopt($ch, CURLOPT_POST, true);
   curl_setopt($ch, CURLOPT_POSTFIELDS, $data);
   curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
   $response = curl_exec($ch);
   curl_close($ch);
   // Process your response here
   echo $response;
}
?>





<?php
include("footer.php");
?>