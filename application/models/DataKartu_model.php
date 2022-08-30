<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class DataKartu_model extends CI_Model {

    /**
     * Get All Data Kartu
     */
    public function get_all()
    {
        $this->db->select("*");
        $this->db->from("tbl_siswa");
        $this->db->order_by("id_siswa", "DESC");
        return $this->db->get();
    }

    /**
     * Simpan Data Kartu
     */
    public function simpan_siswa($dara)
    {
        $simpan = $this->db->insert("tbl_siswa", $data);

        if($simpan) {
            return TRUE;
        } else {
            return FALSE;
        }

    }

}