<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use App\Models\Role;
use App\Models\User;
use App\Models\Category;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        //seeder untuk role
        Role::create([
            'role_name' => 'admin',
        ]);

        Role::create([
            'role_name' => 'user',
        ]);

        //seeder untuk user
        User::create([
            'username' => 'admin',
            'email' => 'admin@admin.com',
            'password' => bcrypt('admin'),
            'role_id' => 1,
        ]);

        User::create([
            'username' => 'user1',
            'email' => 'user1@user.com',
            'password' => bcrypt('user'),
            'role_id' => 2,
        ]);

        //seeder untuk kategori
        Category::create([
            'name' => 'Flowers Box',
            'image' => 'box.jpg',
            'banner' => '1.png',
        ]);

        Category::create([
            'name' => 'Fresh Flowers',
            'image' => 'fresh.jpg',
            'banner' => '3.png',
        ]);

        Category::create([
            'name' => 'Artificial Flowers',
            'image' => 'arti.jpeg',
            'banner' => '4.png',
        ]);

        Category::create([
            'name' => 'Hand Bouquet',
            'image' => 'hand.jpg',
            'banner' => '2.png',
        ]);

        Category::create([
            'name' => 'Standing Flowers',
            'image' => 'standing.jpeg',
            'banner' => '6.png',
        ]);

        Category::create([
            'name' => 'Gift & Hampers',
            'image' => 'gift.jpg',
            'banner' => '5.png',
        ]);
    }
}
