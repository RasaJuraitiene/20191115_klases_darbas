<?php
/**
 * Created by PhpStorm.
 * User: tadaspetruskevicius
 * Date: 2019-11-15
 * Time: 10:12
 */

namespace db;

use PDO;
use PDOException;

class DataBase
{
    public function __construct()
    {
        try {
            $this->connection = new PDO('mysql:host=localhost:8889;dbname=db_test', 'root', 'root');
            $this->connection->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
        } catch (PDOException $e) {
            print "DB Connection Failed: " . $e->getMessage();
        }
    }

    public function select($sql)
    {
        return $this->connection->query($sql)->fetchAll(PDO::FETCH_ASSOC);
    }

}