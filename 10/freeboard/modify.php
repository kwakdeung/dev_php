<?php
    $num = $_GET["num"];

    $name = $_POST["name"];
    $pass = $_POST["pass"];
    $subject = $_POST["subject"];
    $content = $_POST["content"];

    $subject = htmlspecialchars($subject, ENT_QUOTES);
    $content = htmlspecialchars($content, ENT_QUOTES);
    $regist_day = date("Y-m-d (H:i)");

    $con = mysqli_connect("localhost", "user", "12345", "sample");
    $sql = "update freeboard set name = '$name', pass='$pass', subject='$subject',";    // 수정 명령
    $sql .= "content='$content', regist_day='$regist_day' where num = $num";
    mysqli_query($con, $sql);   // SQL 명령 실행

    mysqli_close($con);         // DB 연결 끊기

    echo "
        <script>
        location.href = 'list.php';
        </script>
    ";
?>