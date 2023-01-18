<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

/**
 * @property integer $id
 * @property integer $patient_id
 * @property integer $user_id
 * @property string $vis_datetime
 * @property string $created_at
 * @property string $updated_at
 * @property string $deleted_at
 * @property Patient $patient
 * @property User $user
 * @property DiagnosePatient[] $diagnosePatients
 * @property Followup[] $followups
 */
class Visit extends Model
{
    /**
     * The "type" of the auto-incrementing ID.
     * 
     * @var string
     */
    protected $keyType = 'integer';

    /**
     * @var array
     */
    protected $fillable = ['patient_id', 'user_id', 'vis_datetime', 'created_at', 'updated_at', 'deleted_at'];

    /**
     * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
     */
    public function patient()
    {
        return $this->belongsTo('App\Patient');
    }

    /**
     * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
     */
    public function user()
    {
        return $this->belongsTo('App\User');
    }

    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     */
    public function diagnosePatients()
    {
        return $this->hasMany('App\DiagnosePatient');
    }

    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     */
    public function followups()
    {
        return $this->hasMany('App\Followup');
    }
}
