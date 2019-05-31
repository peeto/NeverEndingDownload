<?php

function neverEndingDownload($filename, $filesize = -1) {
    header('Content-Description: File Transfer');
    header('Content-Type: application/octet-stream');
    header('Content-Disposition: attachment; filename="' . addslashes($filename) . '"');
    header('Expires: 0');
    header('Cache-Control: must-revalidate');
    header('Pragma: public');
    header('Content-Length: ' . (int)$filesize);

    while (true) {
        echo chr(mt_rand(0, 255));
    }
}

