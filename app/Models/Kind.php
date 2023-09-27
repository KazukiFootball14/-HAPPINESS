<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Kind extends Model
{
    use HasFactory;
    
    public function recruitments()
    {
        return $this->hasMany(Recruitment::class);
    }
    
    public function getByKind(int $limit_count = 5)
    {
         return $this->recruitments()->with('kind')->orderBy('updated_at', 'DESC')->paginate($limit_count);
    }
}
