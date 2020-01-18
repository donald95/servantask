<?php

use App\Task;
use Illuminate\Database\Seeder;

class TasksTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        // Truncamos nuestros registros existentes para comenzar desde cero.
        Task::truncate();

        $faker = \Faker\Factory::create();

        // And now, let's create a few articles in our database:
        for ($i = 0; $i < 10; $i++) {
            Task::create([
                'name'         => $faker->jobTitle,
                'description'   => $faker->sentence,
                'date_start'    => $faker->date(),
                'date_end'      => $faker->date(),
                'date_end_real' => $faker->date()
            ]);
        }
    }
}
