<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class Task extends Model
{
    protected $fillable = [
      'user_id',
      'description',
      'meta',
      'additional_info',
      'due_at',
      'completed_at',
      'reminder_at',
    ];

    protected function casts(): array
    {
        return [
            'completed_at' => 'datetime',
            'due_at'       => 'datetime',
            'reminder_at'  => 'datetime',
            'memory'       => 'json'
        ];
    }

    public function user(): BelongsTo
    {
        return $this->belongsTo(User::class);
    }

}
