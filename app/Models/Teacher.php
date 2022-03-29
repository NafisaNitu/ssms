<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Teacher extends Model
{
    use HasFactory;

    protected $guarded = [];

    public static function saveData($request, $id=null)
    {
        Teacher::updateOrCreate(['id' => $id], [
            'name' => $request->name,
            'email' => $request->email,
            'phone' => $request->phone,
//            'code' => uniqid(),
            'address' => $request->address,
            'description' => $request->description,
        ]);
    }
}
