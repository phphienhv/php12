<?php
    $input  = "D:/GoogleDrive/Doing/__psd/luutruonghailan/youtube-luutruonghailan-tamsu.psd";
         $path_info = pathinfo($input, PATHINFO_EXTENSION);
         $path_file = pathinfo($input, PATHINFO_FILENAME);
        echo '<h3 style="color:red;">'.$path_file.",". $path_info.'</h3>';
?>

<!-- // Phần xử lý của học viên
// $output = ['name', 'extension']; -->