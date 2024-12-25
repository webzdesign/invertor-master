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
        $products = Product::where('status', '1')->orderBy('id', 'desc')->get();
        $xml = new \SimpleXMLElement('<products/>');

        foreach ($products as $key => $product) {
            $category_name = Category::find($product->category_id)->value('name');
            $description = html_entity_decode(strip_tags($product->description));
            $product_details = $xml->addChild('product');
            $product_details->addChild('id', time() . $key);
            $product_details->addChild('title', htmlspecialchars($product->name));
            $product_details->addChild('description', htmlspecialchars($description));
            $product_details->addChild('brand', '');
            $product_details->addChild('category', $category_name);
            $product_details->addChild('sku', '');
            $price = !empty($product->web_sales_old_price) ? $product->web_sales_old_price : $product->web_sales_price;
            $product_details->addChild('price', $price);
            $product_details->addChild('sale_price', $product->web_sales_price);
            $product_details->addChild('currency', 'POUND');
            $product_details->addChild('availability', 'In Stock');
            $product_details->addChild('condition', 'New');
            $product_details->addChild('shipping_cost', '0');
            $product_details->addChild('shipping_weight', '');
            $product_details->addChild('tax_rate', '0');
        }

        $xmlContent = $xml->asXML();

        file_put_contents(storage_path('xml/products.xml'), $xmlContent);
    }
}
