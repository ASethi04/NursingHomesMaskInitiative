<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Model;
use Faker\Generator as Faker;
use Faker\Provider\Address;

$factory->define(App\NursingHomes::class, function (Faker $faker) {
    return [
        'Name' => $faker->name . ' Nursing Home',
        'Needs' => $faker->regexify('[A-Za-z0-9]{' . mt_rand(4, 20) . '}'),
        'Address' => $faker->regexify('[A-Za-z0-9]{' . mt_rand(4, 20) . '}'),
        'Zip Code' => $faker->postcode,
        'Mask Type' => $faker->regexify('[A-Za-z0-9]{' . mt_rand(4, 20) . '}'),
        'Mask Fabric' => $faker->regexify('[A-Za-z0-9]{' . mt_rand(4, 20) . '}'),
        'Mailing Address' => $faker->address,
        'Other Information' => $faker->regexify('[A-Za-z0-9]{' . mt_rand(4, 20) . '}'),
        'updated_at' => now(),
        'created_at' => now()
    ];
});
