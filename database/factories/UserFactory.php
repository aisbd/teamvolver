<?php

use Faker\Generator as Faker;

$factory->define(Vanguard\User::class, function (Faker $faker) {
    return [
        'email' => $faker->email,
        'password' => bcrypt("123456"),
        'fullname' => $faker->firstName.' '.$faker->lastName,
        'phone' => $faker->phoneNumber,
        'avatar' => null,
        'address' => $faker->address,
        'country_id' => function () use ($faker) {
            return $faker->randomElement(Vanguard\Country::pluck('id')->toArray());
        },
        'role_id' => 2,
        'status' => Vanguard\Support\Enum\UserStatus::ACTIVE,
        'birthday' => $faker->date()
    ];
});
