<?php 

  $dir = "/";

    // Open a known directory, and proceed to read its contents
    if (is_dir($dir)) {
        if ($dh = opendir($dir)) {
            while (($file = readdir($dh)) !== false) {
                echo "filename or dir: $file : filetype: " . filetype($dir . $file) . "\n";
            }
            closedir($dh);
        }
    }
    //end
?>
