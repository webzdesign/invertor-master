<?php

namespace App\Console\Commands;

use Illuminate\Console\Command;
use App\Models\Product;
use App\Models\Category;

class ProductXMLCron extends Command
{
    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $signature = 'product_xml:cron';

    /**
     * The console command description.
     *
     * @var string
     */
    protected $description = 'Command description';

    /**
     * Execute the console command.
     */
    public function handle()
    {
        if ( !file_exists(storage_path('xml')) ) {
            mkdir(storage_path('xml'), 0755, true);
        }
        $products = Product::with('images')->where('status', '1')->orderBy('id', 'desc')->get();
        $xml = new \SimpleXMLElement('<products/>');

        foreach ($products as $product) {
            $category_name = Category::find($product->category_id)->value('name');
            $product_details = $xml->addChild('product');
            $product_details->addChild('id', $product->id);
            $product_details->addChild('unique_number', $product->unique_number);
            $product_details->addChild('name', htmlspecialchars($product->name));
            $product_details->addChild('slug', htmlspecialchars($product->slug));
            $product_details->addChild('category', $category_name);
            $product_details->addChild('new_price', $product->web_sales_price);
            $product_details->addChild('old_price', $product->web_sales_old_price);
            $product_images = $product_details->addChild('images');
            if( !empty($product->images) ){
                foreach ($product->images as $image) {
                    $img_url = env('APP_Image_URL') . 'storage/product-images/' . $image->name;
                    $product_images->addChild('image', htmlspecialchars($img_url));
                }
            }
            $product_details->addChild('description', htmlspecialchars($product->description));
            $product_details->addChild('created_at', $product->created_at);
            $product_details->addChild('updated_at', $product->updated_at);
        }

        $xmlContent = $xml->asXML();

        file_put_contents(storage_path('xml/products.xml'), $xmlContent);
    }
}
