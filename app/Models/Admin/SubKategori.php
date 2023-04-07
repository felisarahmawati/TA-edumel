<?php

namespace App\Models\Admin;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class SubKategori extends Model
{
    use HasFactory;

    protected $guarded = [' '];

    protected $table = "subkategoris";

    public function kategori()
    {
        return $this->belongsTo("App\Models\Admin\Kategori","kategori_id", "id");
    }
}
