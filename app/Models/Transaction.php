<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Transaction extends Model
{
    use HasFactory;
    
     /**
     * Get the category associated with the transaction
     */
    public function category(){
        return $this->belongsTo(Category::class);
    }

    public static function totalAmount()
    {
        $amounts = self::all();
        $total = 0;
        foreach($amounts as $amount){
            $total += $amount['amount'];
        }
        return $total;
    }
}
