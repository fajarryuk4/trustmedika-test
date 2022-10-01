<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Unit extends Model
{
    
    /**
     * Indicates if the model should be timestamped.
     *
     * @var bool
     */
    public $timestamps = false;
    /**
     * The database table used by the model.
     *
     * @var string
     */
    protected $table = 'master_unit';

    /**
    * The database primary key value.
    *
    * @var string
    */
    protected $primaryKey = 'unit_id';

    /**
     * Attributes that should be mass-assignable.
     *
     * @var array
     */
    protected $fillable = [
                  'unit_kode',
                  'unit_nama'
              ];

    /**
     * The attributes that should be mutated to dates.
     *
     * @var array
     */
    protected $dates = [];
    
    /**
     * The attributes that should be cast to native types.
     *
     * @var array
     */
    protected $casts = [];
    
    /**
     * Get the unit for this model.
     *
     * @return App\Models\Unit
     */
    public function unit()
    {
        return $this->belongsTo('App\Models\Unit','unit_id');
    }

    /**
     * Get the kunjunganPasiens for this model.
     *
     * @return Illuminate\Database\Eloquent\Collection
     */
    public function kunjunganPasiens()
    {
        return $this->hasMany('App\Models\KunjunganPasien','m_unit_id','unit_id');
    }



}
