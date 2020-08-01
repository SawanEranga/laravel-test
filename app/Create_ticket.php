<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Create_ticket extends Model
{
    protected $fillable = [
        'customer_name',
        'problem_discription',
        'email',
        'phone',
        'reference_number',
        'status'
    ];
    protected $table = 'support_ticket';
    protected $primaryKey = 'id';
}
