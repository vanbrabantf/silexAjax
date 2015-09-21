<?php
namespace Vanbrabantf\Offices;

use Illuminate\Database\Eloquent\Model;

class Office extends Model
{
    protected $table = 'offices';

    protected $fillable = [
        'street',
        'city',
        'latitude',
        'longitude',
        'is_open_in_weekends',
        'has_support_desk',
    ];

    protected $casts = [
        'street'  => 'string',
        'city' => 'string',
        'latitude' => 'double',
        'longitude' => 'double',
        'is_open_in_weekends' => 'enum',
        'has_support_desk' => 'enum',
    ];

}