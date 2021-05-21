<?php
/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of lib
 *
 * @author Tungdt
 */
include 'inc.mysql/class.querypattern.php';
include 'inc.mysql/class.core.php';

class MySQL extends MySQLCore {

    public static $instance = NULL;
    public $lastResult = NULL;

    public function __construct($config = array('dbuser' => '', 'dbpassword' => '', 'dbname' => '', 'dbhost' => 'localhost', 'dbport' => 3306, 'encoding' => 'utf8')) {
        parent::__construct($config);
    }

    /**
     * 
     * @param array $config
     * @return MySQL
     */
    public static function getInstance($config) {
        if (null === static::$instance) {
            static::$instance = new static($config);
        }
        return static::$instance;
    }

    /**
     * 
     * @param string $table
     * @param integer $id
     * @param array $field
     * @return Object
     */
    public function getById($table, $id, $field = array()) {
        return $this->findOne($table, array('id' => $id), $field);
    }

    /**
     * 
     * @param string $table
     * @param array $query
     * @param array $field
     * @param array $order
     * @param string $limit
     * @return \MySQL
     */
    public function findOne($table = FALSE, $query = array(), $field = array(), $order = array(), $limit = 1) {
        $this->setInput($table, $query, $field, $order, $limit);
        $sqlQuery = $this->selectQuery();
        if (isset($sqlQuery['error'])) {
            return $sqlQuery;
        }
        $result = $this->get_row($sqlQuery, OBJECT);
        return $result;
    }

    /**
     * 
     * @param string $table
     * @param array $query
     * @param array $field
     * @param array $order
     * @param array $limit
     * @return Object
     */
    public function find($table = FALSE, $query = array(), $field = array(), $order = array(), $limit = FALSE) {
        $this->setInput($table, $query, $field, $order, $limit);
        $sqlQuery = $this->selectQuery();
        if (isset($sqlQuery['error'])) {
            return $sqlQuery;
        }
        $results = $this->get_results($sqlQuery, OBJECT);
        return $results;
    }

    /**
     * 
     * @param string $table
     * @param integer $column_number
     * @param array $query
     * @param array $field
     * @param array $order
     * @param string $limit
     * @return Object
     */
    public function findCol($table = FALSE, $column_number = 0, $query = array(), $field = array(), $order = array(), $limit = FALSE) {
        $this->setInput($table, $query, $field, $order, $limit);
        $sqlQuery = $this->selectQuery();
        if (isset($sqlQuery['error'])) {
            return $sqlQuery;
        }
        $results = $this->get_col($sqlQuery, $column_number);
        return $results;
    }

    /**
     * 
     * @param string $table
     * @param array $query
     * @param array $field
     * @return integer
     */
    public function count($table = FALSE, $query = array(), $field = array('id')) {
        $this->setInput($table, $query, $field, array(), FALSE);
        $sqlQuery = $this->countQuery();
        $count = $this->get_var($sqlQuery);
        if (isset($sqlQuery['error'])) {
            return $sqlQuery;
        }
        return (int) $count;
    }

    /**
     * 
     * @return integer|array
     */
    public function getTotal($field = ['id']) {
        $this->setInput($this->lastTable, $this->lastQuery, $field, array(), FALSE);
        $sqlQuery = $this->countQuery();
        $count = $this->get_var($sqlQuery);
        if (isset($sqlQuery['error'])) {
            return $sqlQuery;
        }
        return (int) $count;
    }

    /**
     * 
     * @param string $table
     * @param array $data
     * @return integer|array
     */
    public function insert($table = FALSE, $data = array()) {
        $this->setInput($table, array(), array(), array(), FALSE, $data);
        $sqlQuery = $this->insertQuery();
        $insert = $this->query($sqlQuery);
        if ($insert !== FALSE) {
            return $this->insert_id;
        } else {
            return array('error' => $this->last_error);
        }
    }

    /**
     * 
     * @param string $table
     * @param array $query
     * @param array $data
     * @return boolean|array
     */
    public function update($table = FALSE, $query = array(), $data = array()) {
        $this->setInput($table, $query, array(), array(), FALSE, $data);
        $sqlQuery = $this->updateQuery();
        $update = $this->query($sqlQuery);
        if ($update !== FALSE) {
            return TRUE;
        } else {
            return array('error' => $this->last_error);
        }
    }

    /**
     * 
     * @param type $table
     * @param type $query
     * @return int
     */
    public function remove($table = FALSE, $query = array()) {
        $this->setInput($table, $query);
        $sqlQuery = $this->deleteQuery();
        $remove = $this->query($sqlQuery);
        if ($remove !== FALSE) {
            return 1;
        } else {
            return array('error' => $remove);
        }
    }

    /**
     * 
     * @param type $table
     * @param type $query
     * @return type
     */
    public function delete($table = FALSE, $query = array()) {
        return $this->remove($table, $query);
    }

    /**
     * SET INPUT
     * @param type $table
     * @param type $query
     * @param type $field
     * @param type $order
     * @param type $limit
     */
    public function setInput($table = FALSE, $query = array(), $field = array(), $order = array(), $limit = FALSE, $data = array()) {
        if ($table) {
            $this->setTable($table);
        }
        if ($query) {
            $this->setQuery($query);
        }
        if ($field) {
            $this->setField($field);
        }
        if ($order) {
            $this->setOrder($order);
        }
        if ($limit) {
            $this->setLimit($limit);
        }
        if ($data) {
            $this->setData($data);
        }
    }

}
