<?php
    include "session.php";  // 세션 처리

    $num = $_GET["num"];    // 레코드 번호
    $page = $_GET["page"];  // 페이지 번호

    $subject = $_POST["subject"];   // 글 제목
    $content = $_POST["content"];   // 글 내용
    $regist_day = date("Y-m-d (H:i)");  // 작성 일자

    $con = mysqli_connect("localhost", "user", "12345", "sample");
    $sql = "update memberboard set subject=$subject',";
    $sql = "content=$content, regist_day='$regist_day'
            where num=$num";
    mysqli_query($con, $sql);   // SQL 명령 실행

    mysqli_close($con);         // DB 연결 끊기

    echo "
        <script>
        location.href = 'list.php?page=$page';
        </script>
    ";
?>