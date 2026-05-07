<?php

namespace App\Models;

use CodeIgniter\Model;

class Word_model extends Model
{
    protected $table = 'words';
    protected $primaryKey = 'id';
    protected $allowedFields = ['word', 'meaning'];
    protected $returnType = 'object';
    protected $useTimestamps = false;

    // READ ALL
    public function get_all()
    {
        return $this->findAll();
    }

    // CREATE
    public function add_word($data)
    {
        return $this->insert($data);
    }

    // READ SINGLE
    public function get_by_id($id)
    {
        return $this->find($id);
    }

    // UPDATE
    public function update_word($id, $data)
    {
        return $this->update($id, $data);
    }

    // DELETE
    public function delete_word($id)
    {
        return $this->delete($id);
    }
}
