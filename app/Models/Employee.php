<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Employee extends Model
{
    use HasFactory;

    /**
     * Filter for Searching
     * 
     * @see Local Scope
     */
    public function scopeSearch($query, $keyword)
    {
        $query->when($keyword ?? false, function ($query, $keyword) {
            return $query->where('name', 'like', '%' . $keyword . '%')
                ->orWhere('ic', 'like', '%' . $keyword . '%')
                ->orWhere('retiring_num', 'like', '%' . $keyword . '%');
        });
    }

    protected $guarded = ['id'];
}