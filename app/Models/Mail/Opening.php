<?php

namespace App\Models\Mail;

use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Factories\HasFactory;

/**
 * @property string user_agent
 *
 * @property Mail mail
 *
 * @mixin Builder
 */
class Opening extends Model
{
    use HasFactory;

    protected $fillable = [
        'user_agent',
    ];

    public function mail(): BelongsTo
    {
        return $this->belongsTo(Mail::class);
    }
}
