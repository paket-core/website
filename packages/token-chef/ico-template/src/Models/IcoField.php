<?php

namespace TokenChef\IcoTemplate\Models;

use TokenChef\IcoTemplate\Models\Validatable\ValidModel;

/**
 * TokenChef\IcoTemplate\Models\IcoField
 *
 * @property int $id
 * @property string $ico_field_name
 * @property string $ico_field_value
 * @property int $ico_field_kind
 * @property \Carbon\Carbon|null $created_at
 * @property \Carbon\Carbon|null $updated_at
 * @method static \Illuminate\Database\Eloquent\Builder|\TokenChef\IcoTemplate\Models\IcoField whereCreatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\TokenChef\IcoTemplate\Models\IcoField whereIcoFieldKind($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\TokenChef\IcoTemplate\Models\IcoField whereIcoFieldName($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\TokenChef\IcoTemplate\Models\IcoField whereIcoFieldValue($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\TokenChef\IcoTemplate\Models\IcoField whereId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\TokenChef\IcoTemplate\Models\IcoField whereUpdatedAt($value)
 * @mixin \Eloquent
 */
class IcoField extends ValidModel
{

    protected $rules = [
        'ico_field_kind' => 'integer',
        'ico_field_name' => 'string|min:3|max:255',
        'ico_field_value' => 'string|min:3|max:255',
    ];

    protected $fillable = [
        'ico_field_kind', 'ico_field_name', 'ico_field_value'
    ];
}
