<?php

namespace App\Models\Database\ConnectDatabase;
use App\Interfaces\InterfaceConnectDatabase;

class ConnectPdoDatabase implements InterfaceConnectDatabase {

    private $pdo;
    public function __construct(){
        $this->pdo=new PDO("mysql:host=localhost;dbname=");
    }

}