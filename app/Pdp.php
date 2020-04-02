<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Pdp extends Model
{
    protected $table = "pdp";
    
    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'prefix', 'tanggal', 'jumlah', 'negatif'
    ];

    /**
     * The attributes excluded from the model's JSON form.
     *
     * @var array
     */
    protected $hidden = [
    ];

    public function kab()
    {
        return $this->where('prefix', 'kab');
    }

    public static function getkab()
    {
        $obj = new SELF;
        return $obj->where('prefix', 'kab');
    }

    public function kota()
    {
        return $this->where('prefix', 'kota');
    }

    public static function getkota()
    {
        $obj = new SELF;
        return $obj->where('prefix', 'kota');
    }
}
