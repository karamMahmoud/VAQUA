<?php
function getBasePath(){
    $base_path = "uploads/";
    return $base_path;
}

function uploadFile($filename)
{
    $target_file = getBasePath() . basename($filename['name']);
    $uploadOk = 1;
// Check file size
    if ($filename["size"] > 8388608) {
        $uploadOk = 0;
    }
// Check if $uploadOk is set to 0 by an error
    if ($uploadOk == 0) {
       return false;
// if everything is ok, try to upload file
    } else {
        if (move_uploaded_file($filename["tmp_name"], $target_file)) {
        } else {
            return false;
        }
    }
    return $target_file;
}

?>

