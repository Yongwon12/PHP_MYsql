<?php
/* 현재 버전에서는 mysqli_report_all이 초기값이라 if문이 작동안함
따라서 바꾸어주기 아래 설정으로*/
mysqli_report(MYSQLI_REPORT_OFF);
$conn = mysqli_connect('127.0.0.1',
    'root',
    'Dyddnjs3401!',
    'opentutorials'
);
echo "<h1>single row</h1>";
$sql = "SELECT * FROM topic where id = 11";
$result = mysqli_query($conn, $sql);
$row = mysqli_fetch_array($result); /* mysql의 데이터 타입을 php형으로 바꿔주는 API*/
/* var_dump($result->num_rows);  행 개수 확인법 */
echo '<h1>' . $row['title'] . '</h1>';
echo $row['created']; /* 데이터를 col로 가져오거나 배열자릿수를 사용하여 불러올 수 있음*/

echo "<h1>multi row</h1>";
$sql = "SELECT * FROM topic";
$result = mysqli_query($conn, $sql);
$row = mysqli_fetch_array($result); /* mysql의 데이터 타입을 php형으로 바꿔주는 API*/

while($row = mysqli_fetch_array($result)) { // mysqli_fetch_array는
    // null을 리턴하기 때문에 더이상 가져올 값이 없으면 값이 false가 되어
    // while문의 작동이 멈추게 된다.
    echo '<h1>' . $row['title'] . '</h1>';
    echo $row['description']; /* 데이터를 col로 가져오거나 배열자릿수 */
}

?>
