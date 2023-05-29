<?php

namespace App\Console\Commands;

use Illuminate\Console\Command;
use App\Models\Tag;

class TagsCommand extends Command
{
    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $signature = 'articles:count {id}';

    /**
     * The console command description.
     *
     * @var string
     */
    protected $description = 'Количество статей привязанных к тегу с идентификатором {id}';

    /**
     * Execute the console command.
     */
    public function handle()
    {
        
        $Id = $this->argument('id');

        $tag = Tag::find($Id);

        if (!$tag) {
            throw new \Exception("Тэг {$Id} не существует.");
        }

        $articleCount = $tag->articles()->count();

        $this->info("Количество статей привязанных к тегу с идентификатором {$Id}: {$articleCount}");
    
    }
}
