<?php

namespace App\Console\Commands;

use Illuminate\Console\Command;
use Signifly\Shopify\Shopify;

class ShopifyUpdateProductStatus extends Command
{
    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $signature = 'shopify:update-product-status {id} {status}';

    /**
     * The console command description.
     *
     * @var string
     */
    protected $description = 'Updates status of shopify products';

    /**
     * Create a new command instance.
     *
     * @return void
     */
    public function __construct()
    {
        parent::__construct();
    }

    /**
     * Execute the console command.
     *
     * @return int
     */
    public function handle()
    {
        $productId = $this->argument('id');
        $newStatus = $this->argument('status');

        $shopify = new Shopify(
            env('SHOPIFY_API_KEY'),
            env('SHOPIFY_PASSWORD'),
            env('SHOPIFY_DOMAIN'),
            env('SHOPIFY_API_VERSION')
        );

        $product = $shopify->updateProduct($productId, [
            'status' => $newStatus,
        ]);

        $product->save();

        $this->info('Product '.$productId.' status has been updated to '.$newStatus);
        return 1;
    }
}
