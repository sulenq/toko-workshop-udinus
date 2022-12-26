<?php

namespace App\Models;

use CodeIgniter\Model;

class DiskonModel extends Model
{
    protected $table = 'diskon';
    protected $primaryKey = 'id';
    protected $allowedFields = [
        'kode_voucher', 'tanggal_mulai_berlaku', 'tanggal_akhir_berlaku', 'besar_diskon'
    ];
    protected $returnType = 'App\Entities\Barang';
    protected $useTimestamps = false;
}
