<?php

use Illuminate\Database\Seeder;

class notificationSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        factory(App\Notification::class,50)->create();
    }
}
