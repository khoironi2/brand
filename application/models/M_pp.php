<?php

/**
 * 
 */
class M_pp extends CI_Model
{


    public function get()
    {
        $this->db->select('*');
        $this->db->from('paket_product');
        $this->db->join('jenis_product', 'jenis_product.idjp = paket_product.idjp');
        $this->db->join('product', 'product.idp = paket_product.idp');
        $this->db->where('paket_product.idp', '3');

        $this->db->order_by('idpp', 'DESC');
        $result = $this->db->get();
        return $result->result();
    }

    public function getById($idp)
    {
        $this->db->select('*');
        $this->db->from('paket_product');
        // $this->db->join('jenis_product', 'jenis_product.idjp = paket_product.idjp');
        $this->db->join('product', 'product.idp = paket_product.idp');
        $this->db->where('paket_product.idp', $idp);


        $result = $this->db->get();

        return $result->row();
    }
    //     SELECT * From paket_product
    // JOIN product
    // ON product.idp = paket_product.idp
    // WHERE paket_product.idp='2'
    // GROUP BY paket_product.idpp




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
