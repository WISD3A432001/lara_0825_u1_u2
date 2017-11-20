<?php
use App\Post;
use Carbon\Carbon;
use Illuminate\Database\Seeder;
class PostsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Post::truncate();
        foreach(range(1,20) as $number){
            $total=20;
            Post::create([
            'title' => 'title' .$number,
                'content' => 'content' .$number,
                'is_feature' => rand(0,1),
                'created_at' => Carbon::now() ->subDays($total - $number),
                'updated_at' => Carbon::now() ->subDays($total - $number),
            ]);
        }
    }
}