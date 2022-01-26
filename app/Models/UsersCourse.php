<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

/**
 * App\Models\UsersCourse
 *
 * @property-read \App\Models\User $user
 * @property-read \App\Models\Video $video
 * @method static \Illuminate\Database\Eloquent\Builder|UsersCourse newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|UsersCourse newQuery()
 * @method static \Illuminate\Database\Query\Builder|UsersCourse onlyTrashed()
 * @method static \Illuminate\Database\Eloquent\Builder|UsersCourse query()
 * @method static \Illuminate\Database\Query\Builder|UsersCourse withTrashed()
 * @method static \Illuminate\Database\Query\Builder|UsersCourse withoutTrashed()
 * @mixin \Eloquent
 */
class UsersCourse extends Model
{
    use HasFactory, SoftDeletes;

    protected $table = 'users_courses';

    public function user()
    {
        return $this->belongsTo(User::class);
    }

    public function video()
    {
        return $this->belongsTo(Video::class);
    }
}
