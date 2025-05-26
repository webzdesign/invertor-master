<?php

namespace App\Console\Commands;

use App\Models\Quotation;
use Carbon\Carbon;
use Illuminate\Console\Command;
use Illuminate\Support\Facades\Log;
use Illuminate\Support\Str;
use Revolution\Google\Sheets\Facades\Sheets;

class QuotationToGoogleSheet extends Command
{
    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $signature = 'quotation:add-to-google-sheet {ids=all}';

    /**
     * The console command description.
     *
     * @var string
     */
    protected $description = 'Add quotation to google sheet.';

    /**
     * Execute the console command.
     */
    public function handle()
    {
        $id = $this->argument("ids");
        $id = $id == "all" ? [] : array_filter(array_unique(explode(",", $id)));

        try {
            $query = Quotation::where("is_sheet_added", 0);

            if (!empty($id)) {
                $query->whereIn("id", $id);
            }

            $quotations = $query->get();

            $rows = [];
            foreach ($quotations as $quotation) {
                $phone = $quotation->phone;
                $purchase_source = $quotation->purchase_source;
                $code = $quotation->country_dial_code;
                $phoneCode = Str::substr(str_replace([" ","+"], "", $phone),0, Str::length($code));

                $phone = $code == $phoneCode ? $phone : "{$code}{$phone}";
                $phone = "+" . str_replace("+","", $phone);


                $rows[] = [
                    /*"A"*/ Carbon::parse($quotation->quotation_date)->format("d-m-Y H:i:s"),
                    /*"B"*/ "",
                    /*"C"*/ $phone,
                    /*"D"*/ "invertor.md",
                    /*"E"*/ "",
                    /*"F"*/ "",
                    /*"G"*/ "",
                    /*"H"*/ "",
                    /*"I"*/ "",
                    /*"J"*/ "",
                    /*"K"*/ "",
                    /*"L"*/ "",
                    /*"M"*/ "",
                    /*"N"*/ "",
                    /*"O"*/ "",
                    /*"P"*/ "",
                    /*"Q"*/ "",
                    /*"R"*/ "",
                    /*"S"*/ "",
                    /*"T"*/ "",
                    /*"U"*/ "",
                    /*"V"*/ "",
                    /*"W"*/ "",
                    /*"X"*/ "",
                    /*"Y"*/ (!empty($phone) && !empty($purchase_source) ? $purchase_source : "invertor.md"),
                ];

                $this->info("{$quotation->quotation_no} | {$phone}");
            }

            Sheets::spreadsheet("1px7nDQnWGX44ECRqWpm8ez6A9399rmdhzUcjLhZzseg")
            ->sheet("Clienti")
            ->range("Clienti!A:A")
            ->append($rows);

            Quotation::whereIn("id", $quotations->pluck("id"))->update(["is_sheet_added" => 1]);
        } catch (\Exception $e) {
            Log::error($e->getMessage());
        }
    }
}
