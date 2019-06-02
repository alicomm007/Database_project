<?php

class Crud extends CI_Model{

    public function __construct()
    {
        parent::__construct();
        $this->load->database();
    }

    public function select($table, $orderBy = '')
    {
        $sql = "SELECT * FROM $table $orderBy";
        $result = $this->db->query($sql);
        return $result->result_array();
    }

    public function selectBy($table, $parameters, $order = '')
    {
        $sql = "SELECT * FROM $table";
        $filter = ' WHERE 1 = 1';
        $bindParameters = array();
        foreach ($parameters as $field => $value) {
            $filter .= " AND $field = ?";
            $bindParameters[] = $value;
        }
        $sql .= $filter;
        if ($order)
            $sql .= ' ' . $order;
        $result = $this->db->query($sql, $bindParameters);
        return $result->result_array();
    }

    public function insert($table, $data)
    {

        $debug = $this->db->db_debug;
        $this->db->db_debug = false;
        $this->db->insert($table, $data);
        if ($this->db->error() == 0) {
            $this->db->db_debug = $debug;
            return $this->db->insert_id();
        } else {
            $this->db->db_debug = $debug;
            return $this->db->insert_id();
        }
    }

    public function update($table, $data, $field, $value)
    {
        $this->db->where($field, $value);
        $this->db->update($table, $data);
    }


}
?>