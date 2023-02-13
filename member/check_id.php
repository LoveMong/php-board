<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PHP_Project_Board</title>
    <style>
        .close {
            margin: 20px 0 0 120px;
            cursor: pointer;
        }
    </style>    
</head>
<body>
    <h3> 아이디 중복 체크 </h3>
    <div>
        <?php
            $id = $_GET["id"];

            if(!$id) {
                echo("아이디를 입력해 주세요!");
            } else {
                $con = mysqli_connect("localhost", "study_php", "1234", "php_project_board");
                $sql = "select * from members where id = '$id'";
                $result = mysqli_query($con, $sql);

                $num_record = mysqli_num_rows($result);

                if($num_record) {
                    echo $id." 아이디는 이미 사용중입니다.<br>";
                    echo "다른 아이디를 사용해 주세요!<br>";
                } else {
                    echo $id." 아이디는 사용 가능합니다.<br>";
                }
                mysql_close($con);
            }
        ?>
</body>
</html>