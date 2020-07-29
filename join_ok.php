<?php
$con = mysqli_connect("localhost", "sejoongAdmin", "1234", "bbs");


$id   = $_POST['id'];
$pass = $_POST['pass'];
$name   = $_POST['name'];
$phone = $_POST['phone'];
$email = $_POST['email'];


 $sql = "insert into user(id, pass, name, phone, email) ";
 $sql .= "values('$id', '$pass', '$name','$phone', '$email' )";



 mysqli_query($con, $sql);  // $sql 에 저장된 명령 실행
	 mysqli_close($con);

echo "
  <script>
    alert('회원가입이 완료 되었습니다.');
    location.href = 'index.php';
  </script>
";

?>
