<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Artwork extends Model
{
    // app/Models/Artwork.php

public function category()
{
    return $this->belongsTo(Category::class);
}
}

