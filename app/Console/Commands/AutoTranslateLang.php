<?php

namespace App\Console\Commands;

use App\Http\Controllers\LangController;
use Illuminate\Console\Command;

class AutoTranslateLang extends Command
{
    protected $signature = 'lang:auto-translate {source} {target*}';
    protected $description = 'Automatically translate JSON language strings';

    public function handle()
    {
        $source = $this->argument('source');
        $target = $this->argument('target');
        
        foreach ($target as $targetLang) {
            $this->info("Translating to: $targetLang");
            LangController::AutoTranslateLang($source, $targetLang, $this);
        }
    }
}
