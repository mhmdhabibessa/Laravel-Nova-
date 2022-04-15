<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Laravel\Nova\Actions\Actionable;

class Project extends Model
{
    use HasFactory,Actionable;
    
    protected $fillable = [

        'image',
        'title',
        'description'
        
    ];

    public function user() {

        return $this-> belongsTo(User::class);
    }
}
