<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;
use App\Traits\Uuids;

class Image extends Model
{
    use SoftDeletes;
    use Uuids;

	protected $guarded = [];
    protected $table = 't_img';
    protected $fillable = ['id_customer','s_ktp'];
    public $incrementing = false;

  public function img()
    {
        return $this->belongsTo('App\Customer','id');
    }
	
	 public function getUserIdsAttribute()
    {
        return $this->customer->pluck('id');
    }
}
