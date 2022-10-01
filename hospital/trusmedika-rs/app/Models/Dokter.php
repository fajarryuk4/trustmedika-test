<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Dokter extends Model
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
    protected $table = 'master_dokter';

    /**
    * The database primary key value.
    *
    * @var string
    */
    protected $primaryKey = 'pegawai_id';

    /**
     * Attributes that should be mass-assignable.
     *
     * @var array
     */
    protected $fillable = [
                  'pegawai_nomor',
                  'pegawai_nama',
                  'pegawai_jenis_kelamin',
                  'pegawai_sip'
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
     * Get the pegawai for this model.
     *
     * @return App\Models\Pegawai
     */
    public function pegawai()
    {
        return $this->belongsTo('App\Models\Pegawai','pegawai_id');
    }

    /**
     * Get the diagnosaPasiens for this model.
     *
     * @return Illuminate\Database\Eloquent\Collection
     */
    public function diagnosaPasiens()
    {
        return $this->hasMany('App\Models\DiagnosaPasien','m_dokter_id','pegawai_id');
    }

    /**
     * Get the kunjunganPasiens for this model.
     *
     * @return Illuminate\Database\Eloquent\Collection
     */
    public function kunjunganPasiens()
    {
        return $this->hasMany('App\Models\KunjunganPasien','m_dokter_id','pegawai_id');
    }



}
