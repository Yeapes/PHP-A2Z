<?php

 interface BaseStorage{

    function writeFile();
    function appendFile();
 }

 class Storage implements BaseStorage{

    private $fn;
    
    function __construct($fn)
    {
        $this->fn = $fn;
    }
    function writeFile()
    {
        
    }

    function appendFile()
    {
        
    }
 }

 class StorageManager{

 }