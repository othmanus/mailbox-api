<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Message extends Model
{
    /**
     * The attributes that aren't mass assignable.
     *
     * @var array
     */
    protected $guarded = ['id'];

    /**
     * Disable created_at and updated_at
     *
     * @var $timestamps
     */
    public $timestamps = false;

    /**
     * The attributes that should be mutated to dates.
     *
     * @var array
     */
    protected $dates = [
        'time_sent',
        'time_read',
        'time_archived',
    ];

    /**
     * Scope to retrieve archived messages
     *
     * @return mixed
     */
    public function scopeArchived($query)
    {
        return $query->where('is_archived', true);
    }

    /**
     * Scope to search for a message by UID
     *
     * @return mixed
     */
    public function scopeFindByUid($query, $uid)
    {
        return $query->where('uid', $uid)->take(1)->get()->first();
    }
}
