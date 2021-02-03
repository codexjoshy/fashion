<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Tailor extends Model
{
    use HasFactory;
    protected $fillable = ["user_id", "company_name", "description", "bank_name", "account_name", "account_number"];

    public function users()
    {
        return $this->belongsTo(User::class);
    }
}