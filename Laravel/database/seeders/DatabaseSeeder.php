<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\DB;
use Illuminate\Validation\Rules\In;
use PhpParser\Node\Expr\Cast\Int_;
use PhpParser\Node\Scalar\String_;
use Ramsey\Uuid\Type\Integer;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Str;


class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        // \App\Models\User::factory(10)->create();

        // \App\Models\User::factory()->create([
        //     'name' => 'Test User',
        //     'email' => 'test@example.com',
        // ]);
        DB::table('products')->insert([
            'id' => Integer::random(10),
            'title' => Str::random(10),
            'price' => Str::random(10),
            'description' => Integer::random(10),
        ]);

    }
}
