<?php

use App\Http\Models\Contact;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder {

    public function run() {
        ContactSeeder::run();
    }

}

class ContactSeeder {

    public static function run() {
        $faker = Faker\Factory::create();
        for ($i = 1; $i <= 157; $i++) {
            Contact::create(["name" => $faker->name, "email" => $faker->email]);
        }
    }

}
