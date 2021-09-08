<?php

namespace App\Models\Mail;

use App\Models\Traits\HasUuid;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Relations\HasMany;
use Illuminate\Database\Eloquent\Factories\HasFactory;

/**
 * @property string email
 * @property string|null name
 *
 * @property Mail mail
 *
 * @mixin Builder
 */
class Recipient extends Model
{
    use HasFactory;

    protected $fillable = [
        'email',
        'name',
    ];

    public function mail(): BelongsTo
    {
        return $this->belongsTo(Mail::class);
    }
}
