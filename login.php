 <?php 
   include "DBInsert.php";

   $Username = $Password = "";
   $isValid = true;
   $UsernameErr = $PasswordErr ="";
   $successfulMessage = $errorMessage ="";
   if ($_SERVER['REQUEST_METHOD'] === "POST"){
    $Username = $_POST['username'];
    $Password = $_POST['password'];

   if (empty($Username)) {
    $UsernameErr = "user name can not be empty!";
    $isValid = false;
   
   }
     
   if (empty($Password)) {
    $Password = " password can not be empty!";
    $isValid = false;
   }
    if($isValid){

    $Username = test_input($Username);
    $Password = test_input($Password);

    $response = login($Username, $Password);
  }
    if($response) {
      $successfulMessage = "successfully saved.";
    }
    else {
      $errorMessage = "Error while saving.";
    }
   } 
  
 

  function test_input($data) {
     $data = trim($data);
     $data =  stripcslashes($data);
     $data =  htmlspecialchars($data);
     return $data;
}

?>

<!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8">
  <title>loginpage</title>
</head>
 <script src= "login.js" ></script>
<body>
  <h1>login page</h1>
  <form action="" method="POST">
    <label for="username">Username:</label>
    <input type="text" name="username" id="username">
        <span style="color:red"><?php echo $UsernameErr;?></span>
        <br><br>
        <label for="password">Password:</label>
    <input type="password" name="password" id="password">
        <span style="color:red"><?php echo $PasswordErr;?></span>
        <br><br>
        
    <input type="submit" name="submit" value="Login">
      

  </form>
    <p style="color: red;"><?php echo $successfulMessage;?></p>
       <p style="color: red;"><?php echo $errorMessage;?></p>
       
       <br><br>
       <a href="reg.php">Click to Register</a>

</body>
</html>