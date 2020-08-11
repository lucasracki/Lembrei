<?php

namespace App\Models;

use App\Http\Traits\TasksTrait;
use App\Http\Traits\TimestampsTrait;
use Illuminate\Database\Eloquent\Model;

class Task extends Model
{
    use TimestampsTrait;
    use TasksTrait;

    public function getDates(){
        return ['created_at', 'updated_at', 'date'];
    }
    
    //definir tabela
    protected $table = 'tasks';
}
