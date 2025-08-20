<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Appointment extends Model{
    use HasFactory;

    protected $fillable = ['customer_id', 'service_id', 'appointment_time', 'status'];

    public function customer(){
        return $this->belongsTo(Customer::class);
    }

    public function service(){
        return $this->belongsTo(Service::class);
    }
}
