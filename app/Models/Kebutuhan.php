<?php

namespace App\models;
use App\Models\Donasi;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Kebutuhan extends Model
{
    use HasFactory;
    // protected $guarded = ['id'];
    // protected $with =['nama','alamat','No_Rekening','bank','nominal'];

    // public $table = 'kebutuhans';
    protected $guarded = ['id'];
    protected $with =['kebutuhan'];
    // protected $table = "kebutuhans";

//     protected $fillable = [
//       'nama_barang',
//       'jumlah_barang',
//       'harga_barang',
//       'donasi_id',
//   ];
    public function kebutuhan(){
        return $this->hasOne(Donasi::class, 'id');
    }
}
