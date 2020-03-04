<?php

class My_model extends CI_Model {

    public function my_insert($table,$data) 
    {
       return $this->db->insert($table,$data);
        
    }
    public function my_select($table,$where=NULL,$row=NULL,$op="AND")
    {
        if(isset($row))
        {
            $this->db->select($row);
        }
        else
        {
            $this->db->select('*');
        }
        $this->db->from($table);
        if(isset($where))
        {
            if($op=="AND")
            {
                $this->db->where($where);
            }
            else
            {
                $this->db->or_where($where);
            }
        }
        
        return $this->db->get()->result();
    }
    public function my_query($q)
    {
        return $this->db->query($q)->result();
    }
    public function my_update($table,$data,$where)
    {
        return $this->db->update($table,$data,$where);
    }

    public function my_delete($table,$where)
    {
        return $this->db->delete($table,$where);
    }
    public function my_file($config,$name)
    {
        $this->upload->initialize($config);
        if($this->upload->do_upload($name))
        {
            return $this->upload->data();
        }
        else
        {
            $r[0]=$this->upload->display_errors();
            return $r;
        }
    }
}
