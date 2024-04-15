<?php

namespace App\Console\Commands;

use Illuminate\Console\Command;
use App\Models\BidUser;
use App\Models\Product;

class HighestBid extends Command
{
    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $signature = 'highest-bid {name}';

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
        $name = $this->argument('name');
        $product = Product::where('name',$name)->first();
        $highestBid = BidUser::where('product_id',$product->id)->max('bid_amount');
        dd( '$'.$highestBid);
    }
}
