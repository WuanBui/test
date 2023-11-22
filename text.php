<?php
// check_fileinfo.php

// Check if the fileinfo extension is loaded
if (extension_loaded('fileinfo')) {
    echo "fileinfo extension is enabled.\n";
} else {
    echo "fileinfo extension is not enabled.\n";
}
?>