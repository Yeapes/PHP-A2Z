<?php

//Another SOLID principle terms name Open/Close Open for extension close for modification


// class DisplayFile{

//     function displayFile($file, $fileType){
//         if ('mp4' == $fileType) {
//             //Some task for this scope
//         }elseif('mp3' ==  $fileType){
//             //mp3 player open
//         }else{
//             // Text file display
//         }
//     }
// }


interface FileInterface{
    function displayFile();
}

class ImageFile implements FileInterface{

    function displayFile()
    {
        //display image file
    }
}
class Mp3File implements FileInterface{

    function displayFile()
    {
        //display mp3 file
    }
}

class FileDisplayManager{
    function display(FileInterface $file){
        $file->displayFile();
    }
}

$f = new FileDisplayManager();

//Suppose this is a extension
$image = new ImageFile();
//Suppose this is another extension
$mp3 = new Mp3File();
$f->display($image);
$f->display($mp3);