<?php



defined('BASEPATH') OR exit('No direct script access allowed');

class Mail_model extends CI_Model {
    protected $table = 'mail_box';

    public function get($limit = 8, $offset = 0){
        return $this->db->select('*')
                        ->from($this->table)
                        ->order_by('email_id', 'DESC')
                        ->limit($limit)
                        ->offset($offset)
                        ->get()
                        ->result_array();
    }

    public function get_mail_by_id($id){
        return $this->db->get_where($this->table ,['email_id' => $id])->row_array();
    }

    public function count(){
        return $this->db->select("COUNT(*)AS total_email, SUM(if(is_read = 1,1,0)) AS total_read, SUM(if(is_read = 0,1,0)) AS total_notread")
                        ->from($this->table)
                        ->get()
                        ->row_array();
    }

    public function insert($data){
        $this->db->insert($this->table, $data);
    }

    public function update($id, $data){
        $this->db->where('email_id', $id)
                ->update($this->table, $data);
    }

    public function delete($id){
        $this->db->delete($this->table, ['email_id' => $id]);
    }

}

/* End of file Mail_model.php */
