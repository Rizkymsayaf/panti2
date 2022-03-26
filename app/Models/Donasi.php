<?php

namespace App\models;
use App\Models\User;
use App\Models\Kebutuhan;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Donasi extends Model
{
    // use HasFactory;
    // protected $guarded = ['id'];
    // protected $with =['nama','alamat','No_Rekening','bank','nominal'];
//   protected $table = "donasis";
protected $guarded = ['id'];
  protected $with =['donasi'];
//   protected $fillable = [
//     'nama',
//     'alamat',
//     'No_Rekening',
//     'bank',
//     'nominal'
// ];



  public function donasi(){
    return $this->belongsTo(Kebutuhan::class, 'donasi_id');

  }


    public function user(){
        return $this->belongsTo(User::class, 'user_id');
    }
}
