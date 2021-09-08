<?php

namespace App\Http\Resources;

use App\Models\Mail\Mail;
use Illuminate\Http\Resources\Json\JsonResource;

/**
 * @mixin Mail
 */
class MailResource extends JsonResource
{
    public function toArray($request): array
    {
        return [
            'id' => $this->id,
            'title' => $this->title,
            'sender' => $this->sender,
            'recipients' => $this->whenLoaded('recipients', JsonResource::collection($this->recipients)),
            'openings' => $this->whenLoaded('openings', JsonResource::collection($this->openings)),
        ];
    }
}
