
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Boat</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.2.1/css/bootstrap.min.css">

    <link href="https://fonts.googleapis.com/css?family=Josefin+Sans" rel="stylesheet">
    <style>
p {
    color : red
}
</style>
</head>
    <body>  
    

<?php
$name = $email = $nerror = $emerror = "";
$success = $success2 = 0;
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $name = test_input($_POST["name"]);
    $email = test_input($_POST["email"]);
    if (empty($_POST["name"])) {
        $nerror = "name is required";
        $success += 1;
      }
    if (empty($_POST["email"])) {
        $emerror = "Email is required";
        $success += 1;
      } else {
        $email = test_input($_POST["email"]);
        if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
          $emerror = "Invalid email format"; 
          $success += 1;
        }
      }
    

  }
  
    function test_input($data) {
        $data = trim($data);
        $data = stripslashes($data);
        $data = htmlspecialchars($data);
        return $data;
    }
?>


<div class="container" style="width:1000px">
<br><br><br>
    <h2>Calculate your grade</h2>
    <form method="post" action="calculate.php" >
    Name: <input type="text" name="name" id="name" class="form-control col-md-5" placeholder="Enter your name" >
    <p class="error color:red"><?php echo $nerror;?></p>
    E-mail: <input type="text" name="email" class ="form-control col-md-5" placeholder="Enter your email">
    <p class="error color:red"><?php echo $emerror;?></p>
    <input type="file" name="upload" id="upload" accept=".csv"/>
    <br><br><br>
    <input type='submit' <?php if($success != 0) {
        ?> disabled="disable" <?php } ?> id='submitbtn' name='save' value='Submit' class='btn btn-info'><br>
    </form>
</div>

<form method="post" action="download.php">
                <button type="submit" class="btn btn-success"style="width:150px;height:50px;margin-left:1%;" >&nbsp;Download CSV</i></button>
            </form> 



</body>
</html>