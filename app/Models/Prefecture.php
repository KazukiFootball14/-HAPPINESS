<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Prefecture extends Model
{
    use HasFactory;
    
    public function recruitments()   
    {
        return $this->hasMany(Recruitment::class);
    }
    
    public function getByKind(int $limit_count = 5)
    {
         return $this->recruitments()->with('prefecture')->orderBy('updated_at', 'DESC')->paginate($limit_count);
    }
}
