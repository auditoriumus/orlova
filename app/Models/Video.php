<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

/**
 * App\Models\Video
 *
 * @property int $id
 * @property string $uuid
 * @property int $number
 * @property int|null $course_id
 * @property string $source
 * @property \Illuminate\Support\Carbon|null $deleted_at
 * @property \Illuminate\Support\Carbon|null $created_at
 * @property \Illuminate\Support\Carbon|null $updated_at
 * @method static \Illuminate\Database\Eloquent\Builder|Video newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|Video newQuery()
 * @method static \Illuminate\Database\Query\Builder|Video onlyTrashed()
 * @method static \Illuminate\Database\Eloquent\Builder|Video query()
 * @method static \Illuminate\Database\Eloquent\Builder|Video whereCourseId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Video whereCreatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Video whereDeletedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Video whereId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Video whereNumber($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Video whereSource($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Video whereUpdatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Video whereUuid($value)
 * @method static \Illuminate\Database\Query\Builder|Video withTrashed()
 * @method static \Illuminate\Database\Query\Builder|Video withoutTrashed()
 * @mixin \Eloquent
 * @property-read \App\Models\Course|null $course
 */
class Video extends Model
{
    use HasFactory, SoftDeletes;

    protected $table = 'videos';


    public function course()
    {
        return $this->belongsTo(Course::class);
    }
}
