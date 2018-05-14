<?php

namespace TokenChef\IcoTemplate\Models;

use TokenChef\IcoTemplate\Models\Validatable\ValidModel;

/**
 * TokenChef\IcoTemplate\Models\UserEvent
 *
 * @property int $id
 * @property int $user_id
 * @property int $event_id
 * @property string|null $details
 * @property \Carbon\Carbon|null $created_at
 * @property \Carbon\Carbon|null $updated_at
 * @property int|null $author_id
 * @property-read \App\User $user
 * @method static \Illuminate\Database\Eloquent\Builder|\TokenChef\IcoTemplate\Models\UserEvent whereAuthorId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\TokenChef\IcoTemplate\Models\UserEvent whereCreatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\TokenChef\IcoTemplate\Models\UserEvent whereDetails($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\TokenChef\IcoTemplate\Models\UserEvent whereEventId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\TokenChef\IcoTemplate\Models\UserEvent whereId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\TokenChef\IcoTemplate\Models\UserEvent whereUpdatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\TokenChef\IcoTemplate\Models\UserEvent whereUserId($value)
 * @mixin \Eloquent
 * @property-read \App\User|null $author
 * @property-read mixed $author_name
 * @property-read mixed $details_name
 * @property-read mixed $event_kind
 * @property-read mixed $event_name
 * @property-read mixed $user_name
 */
class UserEvent extends ValidModel
{

    protected $rules = [
        'user_id' => 'integer',
        'event_id' => 'integer',
        'author_id' => 'integer',
    ];

    protected $appends = [
        'author_name', 'details_name', 'user_name', 'event_name', 'event_kind'
    ];

    protected $fillable = [
        'user_id', 'event_id', 'details', 'author_id'
    ];

    protected $visible = [
        'user_id', 'event_id', 'created_at', 'user_name', 'author_name', 'event_name', 'event_kind', 'details_name'
    ];

    /**
     * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
     */
    public function user()
    {
        return $this->belongsTo('\App\User');
    }

    /**
     * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
     */
    public function author()
    {
        return $this->belongsTo('\App\User', 'author_id');
    }

    public function getUserNameAttribute()
    {
        return $this->user ? $this->user->name : '';
    }

    public function getAuthorNameAttribute()
    {
        return $this->author ? $this->author->name : '';
    }

    public function getDetailsNameAttribute()
    {
//        return UserEventService::get_details($this);
    }

    public function getEventNameAttribute()
    {
//        return UserEventService::get_event_name($this->event_id);
    }

    public function getEventKindAttribute()
    {
//        return UserEventService::get_event_kind($this->event_id);
    }
}