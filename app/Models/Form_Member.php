<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Form_Member extends Model
{
    use HasFactory;
    protected $table ='form_member';
    protected $guarded =[];

    public function RelasiPaket(){
        return $this->BelongsTo(Paket_Member::class, 'paket_id', 'id');
    }

    
}
    