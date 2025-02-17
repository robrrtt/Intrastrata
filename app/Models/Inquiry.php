<?php

// app/Models/Inquiry.php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Inquiry extends Model
{
    use HasFactory;

    // Add this line to define which fields can be mass-assigned
    protected $fillable = ['name', 'contact_no', 'email', 'message','file_name'];
}
