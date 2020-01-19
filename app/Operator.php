<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

/**
 * App\Operator
 *
 * @property int $id
 * @property string $name
 * @property \Illuminate\Support\Carbon|null $created_at
 * @property \Illuminate\Support\Carbon|null $updated_at
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Operator newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Operator newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Operator query()
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Operator whereCreatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Operator whereId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Operator whereName($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Operator whereUpdatedAt($value)
 * @mixin \Eloquent
 */
class Operator extends Model
{
    protected $fillable = ['name'];
}
