<?php
$zend = array(
    'php' => 127,
    'zend' => 20,
    'html' => 32,
    'type' => 12,
    'javascript' => 80
);
    $max = max ($zend);
    $key = array_search($max, $zend);
    echo $key;

// Input: Danh sách khóa học
// Requirement: In ra khóa học có thời lượng video nhiều nhất
// Output: Tên khóa học - thời lượng
//                  php - 127

?>