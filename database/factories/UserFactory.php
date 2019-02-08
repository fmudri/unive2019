<?php

use Faker\Generator as Faker;

/*
  |--------------------------------------------------------------------------
  | Model Factories
  |--------------------------------------------------------------------------
  |
  | This directory should contain each of the model factory definitions for
  | your application. Factories provide a convenient way to generate new
  | model instances for testing / seeding your application's database.
  |
 */

$factory->define(App\Rezervacija::class, function (Faker $faker) {
    return [
        'predmet_id' => App\Predmet::select('id')->orderByRaw('RAND()')->first()->id,
        'oznvrstadan' => $faker->randomElement([
                'PO', 'UT', 'SR', 'CE', 'PE']),
        'sat' => $faker->numberBetween(4, 20),
        'created_at'=> now()
    ];
});
/**
 *             $table->increments('id');
            $table->integer('predmet_id')->unsigned();
            $table->string('oznvrstadan', 2)->nullable();
            $table->smallInteger('sat')->nullable();
            $table->timestamps();
 */