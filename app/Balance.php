<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

/**
 * App\Balance
 *
 * @property int $id
 * @property float $total
 * @property int $user_id
 * @property string $operator_id
 * @property \Illuminate\Support\Carbon|null $created_at
 * @property \Illuminate\Support\Carbon|null $updated_at
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Balance newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Balance newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Balance query()
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Balance whereCreatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Balance whereId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Balance whereOperatorId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Balance whereTotal($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Balance whereUpdatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Balance whereUserId($value)
 * @mixin \Eloquent
 */
class Balance extends Model
{
    protected $fillable = ['total', 'user_id', 'operator_id', 'phone'];
}
