<?php

namespace Database\Seeders;

use App\Models\User;
use App\Models\Category;
use App\Models\Testimonial;
use App\Models\Message;
use App\Models\Topic;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        // User::factory(2)->create();
        // Category::factory(2)->create();
        // Testimonial::factory(2)->create();
        // Message::factory(2)->create();
        Topic::factory(4)->create();

    }
}
