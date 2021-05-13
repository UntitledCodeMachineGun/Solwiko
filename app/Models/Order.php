<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Order extends Model
{
    use HasFactory;
    public function products(){
        return $this->belongsToMany(Product::class)->withPivot('count')->withTimestamps();
    }

    // public function user()
    // {
    //     return $this->belongsTo(User::class);
    // }

    public function getFullPrice(){
        $sum = 50;
        foreach($this->products as $product){
            $sum += $product->getPrice();
        }
        return $sum;
    }

    public function saveOrder($name, $surname, $fathersname, $phone, $city, $post_stantion_number, $call, $add_message){
        if ($this->status == 0) {
            $this->name = $name;
            $this->surname = $surname;
            $this->fathname = $fathersname;
            $this->phone = $phone;
            $this->city = $city;
            $this->post_num = $post_stantion_number;
            $this->add_info = $add_message;
            $this->status = 1;
            $this->save();
            session()->forget('orderId');
            return true;
            
        }
        else {
            return false;
        }
    }
}
