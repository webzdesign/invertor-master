<?php

namespace App\Http\Controllers;

use Stichoza\GoogleTranslate\GoogleTranslate;
use Illuminate\Support\Facades\File;

class LangController extends Controller
{
    public static function AutoTranslateLang($sourceLang, $targetLang, $command)
    {
         $sourcePath = lang_path("{$sourceLang}.json");
        $targetPath = lang_path("{$targetLang}.json");

        if (!File::exists($sourcePath)) {
            $command->error("Source language file not found: {$sourcePath}");
            return;
        }

        $sourceStrings = json_decode(File::get($sourcePath), true);

        if (!File::exists($targetPath)) {
            File::put($targetPath, json_encode(new \stdClass(), JSON_PRETTY_PRINT));
        }

        $targetStrings = json_decode(File::get($targetPath), true) ?? [];

        $tr = new GoogleTranslate($targetLang, $sourceLang);
        $newTranslations = 0;

        foreach ($sourceStrings as $key => $value) {
            if (!array_key_exists($key, $targetStrings)) {
                $translated = $tr->translate($value);
                $command->info("Translated :- {$key} => {$translated}");
                $targetStrings[$key] = $translated;
                $newTranslations++;
            }
        }

        File::put($targetPath, json_encode($targetStrings, JSON_PRETTY_PRINT | JSON_UNESCAPED_UNICODE));
        $command->info("Translation completed! {$newTranslations} new keys translated.");
    }
}
