<?php

namespace TokenChef\IcoTemplate\Models;

use TokenChef\IcoTemplate\Models\Validatable\ValidModel;


/**
 * TokenChef\IcoTemplate\Models\Statistic
 *
 * @property int $id
 * @property string $ip
 * @property string|null $country_code
 * @property string|null $country_name
 * @property string|null $region_code
 * @property string|null $region_name
 * @property string|null $city
 * @property string|null $zip_code
 * @property string|null $time_zone
 * @property string|null $latitude
 * @property string|null $longitude
 * @property int|null $referral_id
 * @property \Carbon\Carbon|null $created_at
 * @property \Carbon\Carbon|null $updated_at
 * @property-read \TokenChef\IcoTemplate\Models\Referral|null $referral
 * @method static \Illuminate\Database\Eloquent\Builder|\TokenChef\IcoTemplate\Models\Statistic whereCity($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\TokenChef\IcoTemplate\Models\Statistic whereCountryCode($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\TokenChef\IcoTemplate\Models\Statistic whereCountryName($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\TokenChef\IcoTemplate\Models\Statistic whereCreatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\TokenChef\IcoTemplate\Models\Statistic whereId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\TokenChef\IcoTemplate\Models\Statistic whereIp($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\TokenChef\IcoTemplate\Models\Statistic whereLatitude($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\TokenChef\IcoTemplate\Models\Statistic whereLongitude($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\TokenChef\IcoTemplate\Models\Statistic whereReferralId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\TokenChef\IcoTemplate\Models\Statistic whereRegionCode($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\TokenChef\IcoTemplate\Models\Statistic whereRegionName($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\TokenChef\IcoTemplate\Models\Statistic whereTimeZone($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\TokenChef\IcoTemplate\Models\Statistic whereUpdatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\TokenChef\IcoTemplate\Models\Statistic whereZipCode($value)
 * @mixin \Eloquent
 */
class Statistic extends ValidModel
{

    protected $fillable = [
        'city',
        'country_code',
        'country_name',
        'created_at',
        'id',
        'ip',
        'latitude',
        'longitude',
        'referral_id',
        'region_code',
        'region_name',
        'time_zone',
        'updated_at',
        'zip_code'
    ];

    /**
     * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
     */
    public function referral()
    {
        return $this->belongsTo('\TokenChef\IcoTemplate\Models\Referral');
    }
}
