<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\Sujet;
use App\Models\User;
class Reponse extends Model
{
    use HasFactory;
    protected $fillable = [
         'reponse1',
        'user_id',
        'sujet_id'


    ];
    //
    /**
     * Get the user that owns the Reponse
     *
     * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
     */
    public function user()
    {
        return $this->belongsTo(User::class);
    }
    public function sujet()
    {
        return $this->belongsTo(Sujet::class);
    }

}
