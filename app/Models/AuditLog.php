<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Ramsey\Uuid\Uuid;

class AuditLog extends Model
{
    use HasFactory;
    public $incrementing = false;
    protected $dates = [
        'created_at',
        'updated_at'
    ];
    protected $primaryKey = 'id';
    public function save(array $options = Array())
    {
        if(!isset($this->id)){
            $this->id = Uuid::uuid4();
        }
        return parent::save();
    }
}
