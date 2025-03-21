<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Category extends Model
{
    // app/Models/Category.php

public function artworks()
{
    return $this->hasMany(Artwork::class);
}
}

