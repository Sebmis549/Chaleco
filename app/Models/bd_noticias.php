<?php namespace App\Models;

use CodeIgniter\Model;

class bd_noticias extends Model
{
    protected $table      = 'publ_text';
    protected $primaryKey = 'id_publicaciontxt';

    protected $returnType     = 'array';
    protected $useSoftDeletes = true;

    protected $allowedFields = ['titulo', 'imagen', 'contenido'];

    protected $useTimestamps = false;
    protected $createdField  = 'created_at';
    protected $updatedField  = 'updated_at';
    protected $deletedField  = 'deleted_at';

    protected $validationRules    = [];
    protected $validationMessages = [];
    protected $skipValidation     = false;
}