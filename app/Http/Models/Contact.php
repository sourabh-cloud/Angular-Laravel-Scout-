<?php

namespace App\Http\Models;

use Laravel\Scout\Searchable;

class Contact extends \Illuminate\Database\Eloquent\Model {

    use Searchable;

    protected $fillable = ["email", "name"];

    public function searchableAs() {
        return 'contacts_index';
    }

    public function toSearchableArray() {
        $array = $this->toArray();

        // Customize array...

        return $array;
    }

}
