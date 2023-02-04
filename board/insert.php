<?php

    $name = $_POST["name"];
    $pass = $_POST["pass"];
    $subject = $_POST["subject"];
    $content = $_POST["content"];

    $subject = htmlspecialchars($subject, ENT_QUOTES); // htmlspecialchars HTML 환경에서 < 또는 > 문자를 HTML 엔티티로 인코딩하여, 레이아웃이 깨지거나 스크립트 오류가 나는 것을 방지한다.
    $content = htmlspecialchars($content, ENT_QUOTES); // ENT_QUOTES "" / '' 두개 모두 반영
    $regist_day = date("Y-m-d(H:i)"); //UTC 기준 '년-월-일(시:분)'

    $conn = mysqli_connect("localhost", "study_php", "1234", "php_project_board");

    $sql = "insert into freeboard(name, pass, subject, content, regist_day)
            values('$name', '$pass', '$subject', '$content', '$regist_day')"; // 레코드 삽입 명령

    mysqli_query($conn, $sql); // $sql에 저장된 명령 실행

    mysqli_close($conn); // DB연결 해제


    echo "<script>
            location.href = 'list.php';
        </script>";

?>
