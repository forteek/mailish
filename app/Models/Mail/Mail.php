<?php

namespace App\Models\Mail;

use App\Models\Traits\HasUuid;
use Illuminate\Support\Collection;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\Relations\HasMany;
use Illuminate\Database\Eloquent\Factories\HasFactory;

/**
 * @property string id
 * @property string sender
 * @property string title
 * @property string|null content
 *
 * @property Recipient[]|Collection recipients
 * @property Opening[]|Collection openings
 *
 * @mixin Builder
 */
class Mail extends Model
{
    use HasFactory, HasUuid;

    protected $keyType = 'string';

    protected $fillable = [
        'sender',
        'title',
        'content',
    ];

    public function recipients(): HasMany
    {
        return $this->hasMany(Recipient::class);
    }

    public function openings(): HasMany
    {
        return $this->hasMany(Opening::class);
    }
}
