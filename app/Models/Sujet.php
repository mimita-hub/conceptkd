<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;


class Sujet extends Model
{
    use HasFactory;
    protected $fillable = [
       'titre',
       'qst1',
       'rep1',
       'user_id',
    ];

    /**
     * Get the user that owns the Sujet
     *
     * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
     */
    public function user()
    {
        return $this->belongsTo(User::class);
    }
    public function Reponses()
    {
            return $this->hasMany(Reponse::class);

    }
}
