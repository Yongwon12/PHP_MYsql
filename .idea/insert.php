<?php
$conn = mysqli_connect("127.0.0.1", "root", "Dyddnjs3401!",
    "opentutorials");
$sql = "INSRT INTO topic(title,
                  description,
                  created)
        values('MySQL',
               'MySQL is ...',
               NOW()
               )";
echo $sql;
$result = mysqli_query($conn, $sql);
if ($result === false) {
    echo mysqli_error($conn);
}

?>