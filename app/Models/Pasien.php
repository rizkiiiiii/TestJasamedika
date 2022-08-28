<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Pasien extends Model
{
    use HasFactory;
    protected $fillable = ['nama','alamat','no_tlp','rt_rw','','kelurahan','tanggal_lahir','jenis_kelamin','id_pasien'];
    public $timestamp = true;
}
