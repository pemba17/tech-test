<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Product;

class ProductSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $products = [
            [
                'name' => 'Apple Macbook Pro 15',
                'description' => "WOULD go with the Queen,' and she soon made out that part.' 'Well, at any rate,' said Alice: 'she's so extremely--' Just then she walked down the chimney!' 'Oh! So Bill's got the other--Bill! fetch.",
                'price' => 226.32,
                'SKU' => '07704956',
                'quantity' => 10,
            ],
            [
                'name' => 'Samsung Smart TV',
                'description' => "Footman remarked, 'till tomorrow--' At this moment Five, who had been running half an hour or so there were three little sisters--they were learning to draw,' the Dormouse began in a minute, while.",
                'price' => 329.22,
                'SKU' => '38233296',
                'quantity' => 15,
            ],
            [
                'name' => 'JBL Bluetooth Speaker',
                'description' => "There were doors all round her, calling out in a minute, while Alice thought she had not gone much farther before she got into a tidy little room with a smile. There was a little glass table. 'Now.",
                'price' => 239.03,
                'SKU' => '03599464',
                'quantity' => 26,
            ],
            [
                'name' => 'Google PIXEL 8',
                'description' => "White Rabbit, who said in a sort of thing never happened, and now here I am to see a little timidly, 'why you are very dull!' 'You ought to have lessons to learn! No, I've made up my mind about it.",
                'price' => 870.32,
                'SKU' => '07704912',
                'quantity' => 30,
            ],
            [
                'name' => 'Asus Zenbook 15',
                'description' => "White Rabbit, who said in a sort of thing never happened, and now here I am to see a little timidly, 'why you are very dull!' 'You ought to have lessons to learn! No, I've made up my mind about it.",
                'price' => 900.32,
                'SKU' => '32944860',
                'quantity' => 30,
            ]
        ];

        foreach($products as $product)
        {
            Product::create($product);
        }
    }
}
