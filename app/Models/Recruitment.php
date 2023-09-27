<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Recruitment extends Model
{
   
    use HasFactory;
    
    public function kind()
{
    return $this->belongsTo(Kind::class);
}

    public function prefecture()
{
    return $this->belongsTo(Prefecture::class);
}

    protected $fillable = [
        
        'user_id',
        'dog_name',
        'kind_id',
        'dog_gender',
        'dog_age',
        'prefecture_id',
        'dog_condition',
        'terms',
        'fee',
        'message',
        ];
        
        function getPaginateByLimit(int $limit_count = 5)
    {
        return $this::with('kind' , 'prefecture')->orderBy('updated_at', 'DESC')->paginate($limit_count);
    }
}