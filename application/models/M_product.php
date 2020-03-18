<?php

/**
 * 
 */
class M_product extends CI_Model
{


    public function get()
    {
        $this->db->select('*');
        $this->db->from('product');
        $this->db->join('jenis_product', 'jenis_product.idjp = product.idjp');
        $this->db->order_by('idp', 'DESC');
        $result = $this->db->get();
        return $result->result();
    }

    public function getById($idp)
    {
        $this->db->select('*');
        $this->db->from('product');
        $this->db->join('jenis_product', 'jenis_product.idjp = product.idjp');
        $this->db->where('idp', $idp);

        $result = $this->db->get();

        return $result->row();
    }

    public function insert($datamember)
    {
        $this->db->insert('checkout', $datamember);
        if ($this->db->affected_rows() > 0) {
            return true;
        } else {
            return false;
        }
    }



    public function delete($id)
    {
        $this->db->where('id', $id);
        $this->db->delete('user_menu');

        if ($this->db->affected_rows() > 0)
            return true;
        else
            return false;
    }

    function update($id, $data)
    {
        $this->db->where('id', $id);
        $this->db->update('user_menu', $data);
    }
}
