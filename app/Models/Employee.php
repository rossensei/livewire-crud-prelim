<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Employee extends Model
{
    use HasFactory;

    protected $fillable = ['empname', 'gender', 'salary', 'department', 'hire_date'];

    public function scopeSearch($query, $terms) {
        collect(explode(" ", $terms))
            ->filter()
            ->each(function ($term) use ($query) {
                $term = "%" . $term . "%";

                $query->where('empname', 'like', $term);
            });
    }
}
