<?php

 interface BaseStorage{

    function writeFile($data);
    function setFileName($fn);
    function setMode($mode);
 }

 class Storage implements BaseStorage{

    private $fn;
    private $mode;
    
    function __construct($fn,$mode = null)
    {
        $this->setFileName($fn);
        $this->mode = $mode;
    }
    function writeFile($data)
    {
        file_put_contents($this->fn,$data,$this->mode);
    }

   function setFileName($fn)
    {
      $this->fn = $fn;  
    }

    function setMode($mode){
      $this->mode = $mode;
    }
 }

 class DataManager{
      function saveData(BaseStorage $storage, $data){
         $storage->writeFile($data);
      }
 }

$data = new DataManager();
$storage = new Storage("C:/xampp/htdocs/PHP-A2Z/oop_advance/test.txt",FILE_APPEND);

$data->saveData($storage, "This is a test data and then append a data");