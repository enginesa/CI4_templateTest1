<?php namespace App\Models;

use CodeIgniter\Model;

class Kullanicilar_model extends Model
{
    protected $tableName = "kullanicilar";

    public function add($data = array())
    {
        $this->db->table($this->tableName)->insert($data);

        return $this->db->insertID();
    }

    public function getAll($select = "", $where = array())
    {

        return $this->db->table($this->tableName)->select($select)->where($where)->get()->getResultArray();
    }

    public function getOne($select = "", $where = array())
    {
        return $this->db->table($this->tableName)->select($select)->where($where)->get()->getRowArray();

    }

    public function updateRow($where = array(), $data = array())
    {
        $this->db->table($this->tableName)->where($where)->update($data);
        return $this->db->affectedRows();
    }

}