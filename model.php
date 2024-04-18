<?php

class Model
{
    private $pdo;

    public function __construct()
    {
        $link = mysqli_connect("localhost", "carinapickl_diplom", "Regenbogen123", "carinapickl_db");
    }

}