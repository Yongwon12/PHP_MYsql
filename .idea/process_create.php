<?php
/* 현재 버전에서는 mysqli_report_all이 초기값이라 if문이 작동안함
따라서 바꾸어주기 아래 설정으로*/
mysqli_report(MYSQLI_REPORT_OFF);
$conn = mysqli_connect('127.0.0.1',
    'root',
    'Dyddnjs3401!',
    'opentutorials'
);
$sql = "
  INSERT INTO topic(
                    title,description,created
  ) values(
           '{$_POST['title']}',
           '{$_POST['description']}',
           NOW()
  ) 
";
$result = mysqli_query($conn, $sql);
if ($result === false) {
    echo '저장과정에서 문제 발생!<a href="create.php">돌아가기</a>';
    error_log(mysqli_error($conn),3,"/Applications/mampstack-8.1.12-0/apache2/logs/error_log");
} else{
    echo '저장에 성공했다.<a href="index.php">돌아가기</a>';
}

?>
