<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Str;
use App\Models\Post;

class PostSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        // هنا حدد كم عدد الكومنت يقدر ان يعلق عليها المستخدم 3 مرات فقط
        post::factory()->count(20)->hasComments(3, ['approved' => false])->create();
    }
}
