<?PHP
header("Content-Type: text/html; charset=utf8");
if(!isset($_POST["submit"])){
exit("錯誤執行");
}//檢測是否有submit操作 
include('connect.php');//連結資料庫
$username = $_POST['name'];//post獲得使用者名稱錶單值
$password = $_POST['password'];//post獲得使用者密碼單值

$password=md5($password);
//echo "$username $password";
//echo $str;
if ($username && $password){//如果使用者名稱和密碼都不為空
$sql = "select * from user where username = '$username' and password='$password'";//檢測資料庫是否有對應的username和password的sql
$result = mysqli_query($con,$sql);//執行sql
$rows=mysqli_num_rows($result);//返回一個數值
//print($sql);
if($rows){//0 false 1 true
//<!doctype html>
//<html>
//<form name="login" action="index.php" method="post">
//<p><input type="submit" name="submit"></input></p>
//</form>
//</html>
session_start();
$_SESSION['name']=$_POST['name'];
$sql = "select identity from user where username = '$username'";//檢測資料庫是否有對應的username和password的sql
$result = mysqli_query($con,$sql);//執行sql
$row=mysqli_fetch_assoc($result);
$_SESSION['identity']=$row['identity'];
header("refresh:0;url=index.php");//如果成功跳轉至welcome.html頁面
exit;
}
else{
echo "使用者名稱或密碼錯誤";
echo "
<script>
setTimeout(function(){window.location.href='login.html';},1000);
</script>
";//如果錯誤使用js 1秒後跳轉到登入頁面重試;
}
}else{//如果使用者名稱或密碼有空
echo "表單填寫不完整";
echo "
<script>
setTimeout(function(){window.location.href='login.html';},1000);
</script>";
//如果錯誤使用js 1秒後跳轉到登入頁面重試;
}
mysqli_close($con);//關閉資料庫
?>