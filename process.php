<?php 
  include"connect.php";
  
  $username = "";
  $email = "";
  if (isset($_POST['register'])) {
    $username = $_POST['username'];
    $email = $_POST['email'];
    $password = $_POST['password'];
    $identity = $_POST['identity'];
    $sql_u = "SELECT * FROM user WHERE username='$username'";
    $sql_e = "SELECT * FROM user WHERE email='$email'";
    $sql_i = "SELECT * FROM user WHERE email='$identity'";
    $res_u = mysqli_query($con, $sql_u);
    $res_e = mysqli_query($con, $sql_e);
    $res_i = mysqli_query($con, $sql_i);
    if (mysqli_num_rows($res_u) > 0) {
      $name_error = "Sorry... username already taken"; 	
    }else if(mysqli_num_rows($res_e) > 0){
      $email_error = "Sorry... email already taken"; 	
    }
    else if($identity==null)
    {
      echo "<script> {window.alert('請選擇身分');location.href='register.php'} </script>";
    }
    else{
         $query = "INSERT INTO user (username, email, password,identity) 
                  VALUES ('$username', '$email', '".md5($password)."','$identity')";
         //$query = "INSERT INTO user (username, email, password) 
                  //VALUES ('$username', '$email', '$password')";
         $results = mysqli_query($con, $query);
         echo "<script> {window.alert('註冊成功按下確認後跳轉');location.href='login.html'} </script>"; 
         //header("refresh:0;url=login.html");
         exit();
    }
}
?>