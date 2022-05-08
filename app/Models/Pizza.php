<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Pizza extends Model
{
    use HasFactory;

    protected $primaryKey = 'pname';

    protected $keyType = 'string';

    public function categories()
    {
        return $this->belongsTo(Category::class, 'categoryname');
    }

}
