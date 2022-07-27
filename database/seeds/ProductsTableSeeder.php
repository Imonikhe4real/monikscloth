<?php

use App\Product;
use Illuminate\Database\Seeder;

class ProductsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Product::create([
          'name' => 'Blue polo shirt',
          'slug' => 'Blue polo shirt',
          'details' => 'medium',
          'price' => 500,
          'shipping_cost' =>200,
          'description' => 'Blue polo shirt',
          'category_id' =>1,
          'brand_id' =>1,
          'image_path' =>'bluepolo.jpeg'
        ]);
        Product::create([
          'name' => 'Black polo shirt',
          'slug' => 'Black polo shirt',
          'details' => 'large',
          'price' => 600,
          'shipping_cost' => 450,
          'description' => 'Black polo shirt',
          'category_id' => 1,
          'brand_id' =>2,
          'image_path' => 'blackpolo.jpeg'
        ]);
        Product::create([
          'name' => 'Green Polo shirt',
          'slug' => 'Green Polo shirt',
          'details' => 'medium',
          'price' => 400,
          'shipping_cost' =>300,
          'description' => 'Green Polo shirt',
          'category_id' =>1,
          'brand_id' =>3,
          'image_path' => 'greenpolo.jpeg'
        ]);
        Product::create([
          'name' => 'Red polo shirt',
          'slug' => 'Red polo shirt',
          'details' => 'small',
          'price' =>300,
          'shipping_cost' =>200,
          'description' => 'Red polo shirt',
          'category_id' =>1,
          'brand_id' =>4,
          'image_path' => 'redpolo.jpeg'
        ]);
        Product::create([
          'name' => 'Blue Face Cap',
          'slug' => 'Blue Face Cap',
          'details' => 'Blue Face Cap',
          'price' =>240,
          'shipping_cost' =>200,
          'description' =>'Blue face cap',
          'category_id' =>2,
          'brand_id' =>1,
          'image_path' =>'bluecap.jpeg'
        ]);
        Product::create([
          'name' => 'Red Face Cap',
          'slug' => 'Red Face Cap',
          'details' => 'Red Face Cap',
          'price' =>240,
          'shipping_cost' =>200,
          'description' =>'Red Face Cap',
          'category_id' =>2,
          'brand_id' =>2,
          'image_path' => 'redcap.jpeg'
        ]);
        Product::create([
          'name' => 'Green Face Cap',
          'slug' => 'Green Face Cap',
          'details' =>'Green Face Cap',
          'price' =>240,
          'shipping_cost' =>200,
          'description' => 'Green Face Cap',
          'category_id' =>2,
          'brand_id' =>3,
          'image_path' =>'greencap.jpeg'
        ]);
        Product::create([
          'name' => 'Orange Face Cap',
          'slug' => 'Orange Face Cap',
          'details' => 'Orange Face Cap',
          'price' =>240,
          'shipping_cost' =>200,
          'description' => 'Orange Face Cap',
          'category_id' =>2,
          'brand_id' => 4,
          'image_path' =>'orangecap.jpeg'
        ]);
        Product::create([
          'name' => 'Black T-shirt',
          'slug' => 'Black T-shirt',
          'details' =>'T-shirt',
          'price' =>1000,
          'shipping_cost' => 800,
          'description' => 'Black T-shirt',
          'category_id' =>3,
          'brand_id' =>1,
          'image_path' => 'blacktshirt.jpeg'
        ]);
        Product::create([
          'name' => 'Blue T-shirt',
          'slug' => 'Blue T-shirt',
          'details' => 'Blue T-shirt',
          'price' =>1400,
          'shipping_cost' =>1000,
          'description' =>'Blue T-shirt',
          'category_id' =>3,
          'brand_id' =>2,
          'image_path' => 'bluetshirt.jpeg'
        ]);
        Product::create([
          'name' => 'Red T-shirt',
          'slug' => 'Red T-shirt',
          'details' => 'Red T-shirt',
          'price' =>1200,
          'shipping_cost'=> 1000,
          'description'=>'Red T-shirt',
          'category_id' =>3,
          'brand_id' =>3,
          'image_path' => 'redtshirt.jpeg'
        ]);
        Product::create([
          'name' => 'Orange T-shirt',
          'slug' => 'Orange T-shirt',
          'details' => 'T-shirt',
          'price' =>1000,
          'shipping_cost' =>900,
          'description' => 'Orange T-shirt',
          'category_id' =>3,
          'brand_id' =>4,
          'image_path' => 'orangetshirt.jpeg'
        ]);
        Product::create([
          'name' => 'Blue jeans',
          'slug' => 'Blue jeans',
          'details' => 'Medium',
          'price' =>2000,
          'shipping_cost'=>1800,
          'description' =>'Blue jeans',
          'category_id' =>4,
          'brand_id' =>1,
          'image_path' => 'bluejeans.jpeg'
        ]);
        Product::create([
          'name' => 'Black jeans',
          'slug' => 'Black jeans',
          'details' =>'Medium',
          'price' =>1800,
          'shipping_cost'=>1500,
          'description' =>'Black jeans',
          'category_id' =>4,
          'brand_id' =>2,
          'image_path' => 'blackjeans.jpeg'
        ]);
        Product::create([
          'name' => 'Red jeans',
          'slug' => 'Red jeans',
          'details' =>'large',
          'price' =>3000,
          'shipping_cost' =>2000,
          'description' =>'Red jeans',
          'category_id' =>4,
          'brand_id' =>3,
          'image_path' =>'redjeans.jpeg'
        ]);
        Product::create([
          'name' => 'Orange jeans',
          'slug' =>'Orange jeans',
          'details' =>'medium',
          'price' =>2500,
          'shipping_cost'=>2000,
          'description' =>'Orange jeans',
          'category_id' =>4,
          'brand_id' =>4,
          'image_path'=> 'orangejeans.jpeg'
        ]);
        Product::create([
          'name' => 'Red Sneakers',
          'slug' => 'Red Sneakers',
          'details' => 'Big Sneakers',
          'price' =>5000,
          'shipping_cost' =>4000,
          'description' => 'Red Sneakers',
          'category_id' =>5,
          'brand_id' =>1,
          'image_path' => 'redsneakers.jpeg'
        ]);
        Product::create([
          'name' => 'Blue Sneakers',
          'slug' => 'Blue Sneakers',
          'details' => 'Big Sneakers',
          'price' =>4500,
          'shipping_cost' =>3000,
          'description' =>'Blue Sneakers',
          'category_id' =>5,
          'brand_id' =>2,
          'image_path' =>'bluesneakers.jpeg'
        ]);
        Product::create([
          'name' => 'Black Sneakers',
          'slug' => 'Black Sneakers',
          'details' => 'Big Sneakers',
          'price' =>4800,
          'shipping_cost'=>2500,
          'description' =>'Black Sneakers',
          'category_id' =>5,
          'brand_id' =>2,
          'image_path' => 'blacksneakers.jpg'
        ]);
        Product::create([
          'name' => 'Green Sneakers',
          'slug' => 'Green Sneakers',
          'details' =>'Big Sneakers',
          'price' =>4000,
          'shipping_cost' =>2000,
          'description' =>'Green Sneakers',
          'category_id' =>5,
          'brand_id' =>3,
          'image_path' => 'greensneakers.jpeg'
        ]);
        Product::create([
          'name' => 'Blue Hand Bag',
          'slug' => 'Blue Hand Bag',
          'details' =>'Women Hand Bag',
          'price' =>1500,
          'shipping_cost'=>1200,
          'description' =>'Blue Hand Bag',
          'category_id' =>6,
          'brand_id' =>1,
          'image_path' =>'bluehandbag.jpeg'
        ]);
        Product::create([
          'name' => 'Black Hand Bag',
          'slug' => 'Black Hand Bag',
          'details' =>'Women Hand Bag',
          'price' =>1600,
          'shipping_cost' =>1300,
          'description' =>'Black Hand Bag',
          'category_id' =>6,
          'brand_id' =>2,
          'image_path' =>'blackhandbag.jpeg'
        ]);
        Product::create([
          'name' => 'Red Hand Bag',
          'slug' => 'Red Hand Bag',
          'details' => 'Women Hand Bag',
          'price' =>2000,
          'shipping_cost' =>1800,
          'description' =>'Red Hand Bag',
          'category_id' =>6,
          'brand_id' =>3,
          'image_path' =>'redhandbag.jpeg'
        ]);
        Product::create([
          'name' => 'Orange Hand Bag',
          'slug' => 'Orange Hand Bag',
          'details' =>'Women Hand Bag',
          'price' =>2200,
          'shipping_cost' =>2000,
          'description' =>'Orange Hand Bag',
          'category_id' =>6,
          'brand_id' =>4,
          'image_path' =>'oranghandbag.jpeg'
        ]);
        Product::create([
          'name' => 'Gold Wrist Watch',
          'slug' => 'Gold Wrist Watch',
          'details' => 'Wrist Watch',
          'price' =>2000,
          'shipping_cost' =>1900,
          'description' =>'Gold Wrist Watch',
          'category_id' =>7,
          'brand_id' =>1,
          'image_path' => 'goldwatch.jpeg'
        ]);
        Product::create([
          'name' => 'Silver Wrist Watch',
          'slug' => 'Silver Wrist Watch',
          'details' =>'Wrist Watch',
          'price' =>1900,
          'shipping_cost' =>1700,
          'description' =>'Silver Wrist Watch',
          'category_id' =>7,
          'brand_id' =>2,
          'image_path' => 'silverwatch.jpeg'
        ]);
        Product::create([
          'name' => 'Red Wrist Watch',
          'slug' => 'Red Wrist Watch',
          'details' =>'Wrist Watch',
          'price' =>1800,
          'shipping_cost' => 1600,
          'description' => 'Red Wrist Watch',
          'category_id' =>7,
          'brand_id' =>3,
          'image_path' =>'redwatch.jpeg'
        ]);
        Product::create([
          'name' => 'Blue Wrist Watch',
          'slug' => 'Blue Wrist Watch',
          'details' => 'Wrist Watch',
          'price' =>1600,
          'shipping_cost' =>1400,
          'description' =>'Blue Wrist Watch',
          'category_id' =>7,
          'brand_id' =>4,
          'image_path' =>'bluewatch.jpeg'
        ]);
        Product::create([
          'name' => 'Blue School Bag',
          'slug' => 'Blue School Bag',
          'details' => 'Big Size',
          'price' => 4000,
          'shipping_cost' =>3000,
          'description' =>'Blue School Bag',
          'category_id' =>8,
          'brand_id' =>1,
          'image_path' =>'blueschbag.jpeg'
        ]);
        Product::create([
          'name' => 'Red School Bag',
          'slug' => 'Red School Bag',
          'details' => 'Big Size',
          'price' =>3500,
          'shipping_cost' =>3000,
          'description' =>'Red School Bag',
          'category_id' =>8,
          'brand_id' =>2,
          'image_path' =>'redschbag.jpeg'
        ]);
        Product::create([
          'name' => 'Green School Bag',
          'slug' => 'Green School Bag',
          'details' =>'Big Size',
          'price' =>3000,
          'shipping_cost' =>2800,
          'description' =>'Green School Bag',
          'category_id' =>8,
          'brand_id' =>3,
          'image_path' =>'greenschbag.jpeg'
        ]);
        Product::create([
          'name' => 'Black School Bag',
          'slug' => 'Black School Bag',
          'details' => 'Big Size',
          'price' =>3900,
          'shipping_cost' =>3500,
          'description' =>'Black School Bag',
          'category_id' =>8,
          'brand_id' =>4,
          'image_path' =>'blackschbag.jpeg'
        ]);
        Product::create([
          'name' => 'Women Black Hat',
          'slug' => 'Women Black Hat',
          'details' => 'Women Hat',
          'price' =>2000,
          'shipping_cost'=>1900,
          'description' =>'Women Black Hat',
          'category_id' =>9,
          'brand_id' =>1,
          'image_path' =>'blackhat.jpeg'
        ]);
        Product::create([
          'name' => 'Women Red Hat',
          'slug' => 'Women Red Hat',
          'details' => 'Women Hat',
          'price' =>1900,
          'shipping_cost' => 1800,
          'description' => 'Women Red Hat',
          'category_id' =>9,
          'brand_id' =>2,
          'image_path' =>'redhat.jpeg'
        ]);
        Product::create([
          'name' => 'Women Blue Hat',
          'slug' => 'Women Blue Hat',
          'details' => 'Women Hat',
          'price' =>1800,
          'shipping_cost' =>1600,
          'description' => 'Women Blue Hat',
          'category_id' =>9,
          'brand_id' =>3,
          'image_path' =>'bluejpeg.jpeg'
        ]);
        Product::create([
          'name' => 'Women Green Hat',
          'slug' => 'Women Green Hat',
          'details' =>'Women Hat',
          'price' =>1600,
          'shipping_cost' =>1400,
          'description' => 'Women Green Hat',
          'category_id' =>9,
          'brand_id' =>4,
          'image_path' =>'greenhat.jpeg'
        ]);
        Product::create([
          'name' => 'Blue Socks',
          'slug' => 'Blue Socks',
          'details' =>'Men Socks',
          'price' =>200,
          'shipping_cost' =>190,
          'description' =>'Blue Socks',
          'category_id' =>10,
          'brand_id' =>1,
          'image_path' => 'bluesocks.jpeg'
        ]);
        Product::create([
          'name' => 'Black Socks',
          'slug' => 'Black Socks',
          'details' => 'Men Socks',
          'price' =>190,
          'shipping_cost' =>180,
          'description' =>'Black Socks',
          'category_id' =>10,
          'brand_id' =>2,
          'image_path' =>'blacksocks.jpeg'
        ]);
        Product::create([
          'name' => 'Red Socks',
          'slug' => 'Red Socks',
          'details' =>'Men Socks',
          'price' =>180,
          'shipping_cost' =>170,
          'description' =>'Red Socks',
          'category_id' =>10,
          'brand_id' =>3,
          'image_path' => 'redsocks.jpeg'
        ]);
        Product::create([
          'name' => 'Green Socks',
          'slug' => 'Green Socks',
          'details' =>'Men Socks',
          'price' =>170,
          'shipping_cost' => 160,
          'description' =>'Green Socks',
          'category_id' => 10,
          'brand_id' =>4,
          'image_path' =>'greensocks.jpeg'
        ]);
        Product::create([
          'name' => 'Women Green Skirt',
          'slug' => 'Women Green Skirt',
          'details' => 'Women Skirt',
          'price' => 2000,
          'shipping_cost' =>1900,
          'description' => 'Women Green Skirt',
          'category_id' =>11,
          'brand_id' =>1,
          'image_path' => 'greenskirt.jpeg'
        ]);
        Product::create([
          'name' => 'Women Blue Skirt',
          'slug' => 'Women Blue Skirt',
          'details' =>'Women Skirt',
          'price' =>1900,
          'shipping_cost' =>1800,
          'description' => 'Women Blue Skirt',
          'category_id' =>11,
          'brand_id' =>2,
          'image_path' => 'blueskirt.jpeg'
        ]);
        Product::create([
          'name' => 'Women Red Skirt',
          'slug' => 'Women Red Skirt',
          'details' => 'Women Skirt',
          'price' => 1800,
          'shipping_cost' =>1700,
          'description' =>'Women Red Skirt',
          'category_id' =>11,
          'brand_id' =>3,
          'image_path' => 'redskirt.jpeg'
        ]);
         Product::create([
          'name' => 'Women Black Skirt',
          'slug' => 'Women Black Skirt',
          'details' => 'Women Skirt',
          'price' =>1700,
          'shipping_cost' =>1600,
          'description' =>'Women Black Skirt',
          'category_id' =>11,
          'brand_id' =>4,
          'image_path' => 'blackskirt.jpeg'
        ]);
        Product::create([
          'name' => 'Women Black Shoe',
          'slug' => 'Women Black Shoe',
          'details' => 'Women Shoe',
          'price' =>3000,
          'shipping_cost' =>2800,
          'description' =>'Women Black Shoe',
          'category_id' =>12,
          'brand_id' =>1,
          'image_path' => 'blackshoe.jpeg'
        ]);
        Product::create([
          'name' => 'Women Blue Shoe',
          'slug' => 'Women Blue Shoe',
          'details' => 'Women Shoe',
          'price' =>2900,
          'shipping_cost' =>2700,
          'description' => 'Women Blue Shoe',
          'category_id' =>12,
          'brand_id' =>2,
          'image_path' => 'blueshoe.jpeg'
        ]);
        Product::create([
          'name' => 'Women Red Shoe',
          'slug' => 'Women Red Shoe',
          'details' => 'Women Red Shoe',
          'price' =>2800,
          'shipping_cost' =>2600,
          'description' => 'Women Red Shoe',
          'category_id' =>12,
          'brand_id' =>3,
          'image_path' => 'redshoe.jpeg'
        ]);
        Product::create([
          'name' => 'Women Green Shoe',
          'slug' => 'Women Green Shoe',
          'details' => 'Women Shoe',
          'price' =>2700,
          'shipping_cost' =>2500,
          'description' =>'Women Green Shoe',
          'category_id' =>12,
          'brand_id' =>4,
          'image_path' => 'greenshoe.jpeg'
        ]);
    }
}
