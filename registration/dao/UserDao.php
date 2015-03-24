<?php

/* 
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

namespace My\dao;

class UserDao extends \My\dao\BaseDao{
    private  $db = null;
    public function _construct(){
        $this->bd = $this->getDb();
    }
    
    public function get($usermail) {
     $statement = $this->db->prepare("SELECT * FROM users WHERE usermail =:usermail LIMIT 1");
     $statement->bindParam(':usermail', $usermail);
     $statement -> execute();
     if($statement -> rowCount()>0){
         $row = $statement->fetch();
         return $row;
         
     }
    }
    public function insert(array $values) {
        $sql ="INSERT INTO users";
        $fields = array_keys($values);
        $vals = array_values($values);
        
        $sql .='('.implode(',', $fields).')';
        $arr = array();
        foreach ($fields as $f){
            $arr[] = '?';
        }
        $sql .= 'VALUES('.  implode(',', $arr).')';
        $statement = $this->db->prepare($sql);
        
        foreach ($vals as $i=>$v){
            $statement->bindValue($i+1, $v);
        }
        return $statement->execute();
    }
    
    public function update($id, array $values) {
        $sql ="UPDATE users SET";
        $fields = array_keys($values);
        $vals = array_values($values);
        foreach ($fields as $i=>$f){
            $fields[$i].= '=?';
        }
        $sql .= implode(',', $fields);
        $sql .="WHERE id = ". (int)$id ."LIMIT 1";
        
        $statement = $this->db->prepare($sql);
        foreach ($vals as $i=>$v){
            $statement->bindValue($i+1, $v);
        }
        $statement->execute();
    }

    protected function delete($uniqueKey) {
        
    }

}
$userDao= new \My\dao\UserDao;