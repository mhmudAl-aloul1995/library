<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

/**
 * @property integer $id
 * @property integer $user_id
 * @property string $cus_id
 * @property string $cus_gender
 * @property string $cus_phone
 * @property string $cus_ar_first_name
 * @property string $cus_ar_second_name
 * @property string $cus_ar_third_name
 * @property string $cus_ar_fourth_name
 * @property string $cus_en_first_name
 * @property string $cus_en_second_name
 * @property string $cus_en_third_name
 * @property string $cus_en_fourth_name
 * @property string $cus_birth_date
 * @property string $cus_birth_place
 * @property string $cus_address
 * @property string $cus_wife_name
 * @property string $cus_wife_id
 * @property string $cus_mother_name
 * @property string $deleted_at
 * @property string $created_at
 * @property string $updated_at
 * @property User $user
 */
class Customer extends Model
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
    protected $fillable = ['user_id', 'cus_id', 'cus_gender', 'cus_phone', 'cus_ar_first_name', 'cus_ar_second_name', 'cus_ar_third_name', 'cus_ar_fourth_name', 'cus_en_first_name', 'cus_en_second_name', 'cus_en_third_name', 'cus_en_fourth_name', 'cus_birth_date', 'cus_birth_place', 'cus_address', 'cus_wife_name', 'cus_wife_id', 'cus_mother_name', 'deleted_at', 'created_at', 'updated_at'];

    /**
     * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
     */
    public function user()
    {
        return $this->belongsTo('App\User');
    }
}
