<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

/**
 * App\Task
 *
 * @property int $id
 * @property string $body
 * @property int $complete
 * @property \Carbon\Carbon|null $created_at
 * @property \Carbon\Carbon|null $updated_at
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Task incompleted()
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Task whereBody($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Task whereComplete($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Task whereCreatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Task whereId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Task whereUpdatedAt($value)
 * @mixin \Eloquent
 */
class Task extends Model
{
    /**
     * @param \Illuminate\Database\Eloquent\Builder $query
     * @return \Illuminate\Database\Eloquent\Builder
     */
    public function scopeIncompleted($query)
    {
        return $query->where('complete', 0);
    }

    public static function incomplete()
    {
        return self::where('complete', 1)->get();
    }

}
