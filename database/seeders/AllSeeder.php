<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Str;
use App\Models\Tag;
use App\Models\Article;

class AllSeeder extends Seeder
{
    public function run(): void
    {

       
        $articles = ['Willow', 'Harry Potter', 'Text'];
        
        foreach($articles as $article)
        {
            $newArticle = Article::create([
            'title'  =>  $article,
            'code' => Str::snake(Str::random(20)),
            'tag' =>'fantasy',
            'content' => Str::random(40),
            'date' => now(),
            'author' => Str::random(15),
            ]);
            $newArticleIds[] = $newArticle->id;
            $newArticle = Article::create([
                'title'  =>  $article,
                'code' => Str::snake(Str::random(20)),
                'tag' =>'drama',
                'content' => Str::random(40),
                'date' => now(),
                'author' => Str::random(15),
                ]);
            $newArticleIds[] = $newArticle->id;
        }

        $tag = Tag::create([
            'tag_title'  =>  'fantasy',
        ]);

        $tag->articles()->attach($newArticleIds);

        $tag = Tag::create([
            'tag_title'  =>  'drama',
        ]);

        $tag->articles()->attach($newArticleIds);

        for ($i = 4; $i < 100; $i++) {
            $all_code=Str::snake(Str::random(20));
            $all_tag=Str::random(20);

            DB::table('tags')->insert([
                'tag_title' => $all_tag,
                'code' => $all_code,]);

            DB::table('articles')->insert([
                'title' => Str::random(20),
                'code' => $all_code,
                'tag'=>$all_tag,
                'content' => Str::random(40),
                'date' => now(),
                'author' => Str::random(15),
            ]);
        }

    }
}
