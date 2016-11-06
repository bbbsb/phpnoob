<?php
use App\Models\Article;
use Illuminate\Database\Seeder;

class ArticleTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Article::delete();
        for($i = 0; $i < 10; $i++) {
            Article::create([
                'uid' => 1,
                'title' =>  rand(1, 9999999999),
                'tag' => time().rand(1,9999999),
                'cid' => random_int(1, 4),
                'content' => 'content'.$i,
                'cover' => 'fsafsfsf',
            ]);
        }

    }
}
