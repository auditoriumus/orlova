<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

/**
 * App\Models\Feedback
 *
 * @property int $id
 * @property string $message
 * @property string $name
 * @property string $email
 * @property string $subject
 * @property \Illuminate\Support\Carbon|null $deleted_at
 * @property \Illuminate\Support\Carbon|null $created_at
 * @property \Illuminate\Support\Carbon|null $updated_at
 * @method static \Illuminate\Database\Eloquent\Builder|Feedback newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|Feedback newQuery()
 * @method static \Illuminate\Database\Query\Builder|Feedback onlyTrashed()
 * @method static \Illuminate\Database\Eloquent\Builder|Feedback query()
 * @method static \Illuminate\Database\Eloquent\Builder|Feedback whereCreatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Feedback whereDeletedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Feedback whereEmail($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Feedback whereId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Feedback whereMessage($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Feedback whereName($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Feedback whereSubject($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Feedback whereUpdatedAt($value)
 * @method static \Illuminate\Database\Query\Builder|Feedback withTrashed()
 * @method static \Illuminate\Database\Query\Builder|Feedback withoutTrashed()
 * @mixin \Eloquent
 */
class Feedback extends Model
{
    use HasFactory, SoftDeletes;

    protected $fillable = [
        'message',
        'name',
        'email',
        'subject'
    ];
}
