<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

namespace My\dao;

abstract class BaseDao {

    private $db = null;

    const DB_SERVER = "localhost";
    const DB_USER = "root";
    const DB_PASSWORD = "root";
    const DB_NAME = "jsf_e_jpa";

    protected final function getDb() {

        $dsn = 'mysql:dbname=' . self::DB_NAME . ';host=' . self::DB_SERVER;

        try {
            $this->db = new \PDO($dsn, self::DB_USER, self::DB_PASSWORD);
        } catch (PDOException $e) {
            throw new \Exception('Connection failed:' . $e->getMessage());
        }
        return $this->db;
    }

    abstract protected function get($uniqueKey);

    abstract protected function insert(array $values);

    abstract protected function update($id, array $values);

    abstract protected function delete($uniqueKey);
}
