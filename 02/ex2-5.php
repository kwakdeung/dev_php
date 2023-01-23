<?php
// 합계/평균 구하기

    $kor = 80;      // 국어 성적
    $eng = 90;      // 영어 성적
    $math = 100;    // 수학 성적

    $sum = $kor + $eng + $math;     // 합계
    $avg = $sum/3;                  // 평균

    echo "국어 : $kor<br>";
    echo "영어 : $eng<br>";
    echo "수학 : $math<br>";
    echo "- 합계 : $sum<br>";
    echo "- 평균 : $avg<br>";
?>