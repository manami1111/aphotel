<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Detail extends Model
{
    use HasFactory;

    protected $table = 'details'; // テーブル名
    protected $primaryKey = 'detailid'; // 主キーのカラム名を指定

    public function reserve() {
        return $this->belongsTo(Reserve::class);
    }
}
