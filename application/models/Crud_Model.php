<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Crud_Model extends CI_Model {
  public function insert_entry($table, $data) {
    $this->db->insert($table, $data);
  }

  public function update_entry($table, $data, $id) {
    $this->db->where('id', $id);
    $this->db->update($table, $data);
  }

  public function delete_entry($table, $id){
    $this->db->where('id', $id);
    $this->db->delete($table);
  }
}