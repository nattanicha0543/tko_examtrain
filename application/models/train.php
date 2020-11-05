<?php
class Train extends CI_Model
{
    function __construct()
    {
        parent::__construct();
    }


    function train_insert($data)
    {
        $this->db->insert('train', $data);
    }

    function origin_insert($data1)
    {
        $this->db->insert('origin', $data1);
    }

    function huay_insert($data2)
    {
        $this->db->insert('huayrach', $data2);
    }

    function des_insert($data3)
    {
        $this->db->insert('destination', $data3);
    }


    function show()
    {
        $this->db->select('*');
        $this->db->from('train');
        $this->db->join('origin', 'origin.id = train.id');
        $this->db->join('huayrach', 'huayrach.id = train.id');
        $this->db->join('destination', 'destination.id = train.id');

        //$this->db->where('des_station','นครราชสีมา');

        $query = $this->db->get();
        return $query->result_array();
    }


}
