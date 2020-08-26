<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;
use App\Traits\Uuids;

class Customer extends Model
{
  
    use SoftDeletes;
    use Uuids;

	protected $guarded = [];
    protected $primaryKey = 'id';
    protected $table = 't_pelanggan';
    protected $fillable = ['nama','no_kpj','klaim','s_ktp','s_vaklaring','s_kk','s_kbpjs','s_tabung','created_at','updated_at'];
    public $incrementing = false;


    public function cs()
    {
        return $this->belongsTo('App\Cs');
    }


}
