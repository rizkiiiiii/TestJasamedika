<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Kelurahan extends Model
{
    use HasFactory;
    protected $fillable = ['nama_kelurahan','nama_kecamatan','nama_kota'];
    public $timestamp = true;
}
