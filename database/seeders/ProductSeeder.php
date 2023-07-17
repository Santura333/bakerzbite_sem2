<?php

namespace Database\Seeders;

use App\Models\Product;
use App\Models\ProductCategory;
use App\Models\ProductDetail;
use App\Models\ProductImage;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;

class ProductSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('product_categories')->insert([
            [
                'name' => 'Cakes',
            ],
            [
                'name' => 'Cookies',
            ],
            [
                'name' => 'Pastry',
            ],
            [
                'name' => 'Pies',
            ],
            [
                'name' => 'Cupcake',
            ],
            [
                'name' => 'Chiffon',
            ],
        ]);

        DB::table('products')->insert([
            [
                'id' => 1,
                'brand_id' => 1,
                'product_category_id' => 1,
                'type' => 'cakes',
                'name' => 'Butter cakes',
                'price' => 629.99,
                'description' => 'Butter cake is a combination of butter and sugar that is beaten for a long time to incorporate air into the dough. When eaten, there is a sweet and fatty taste of sugar and butter',
                "rating" => 3334,
                'recipe' => "cream butter, sugar, eggs and noodles",
            ],
            [
                'id' => 2,
                'brand_id' => 2,
                'product_category_id' => 1,
                'type' => 'cakes',
                'name' => 'Sponge cakes',
                'price' => 19.99,
                'description' => 'Traditionally, sponge cake is only glazed with eggs to create a feeling of soft and smooth food that melts in the mouth',
                "rating" => 212,
                'recipe' => "whipped, sugar and noodles",
            ],
            [
                'id' => 3,
                'brand_id' => 3,
                'product_category_id' => 1,
                'type' => 'cakes',
                'name' => 'Chocolate cakes',
                'price' => 12.99,
                'description' => 'Cake gato, also known as cream cake, may be a familiar cake for all of us. The cake has soft gato software, the outside coating is a sweet, cool cream',
                'rating' => 5515,
                'recipe' => "whipped, sugar and noodles",
            ],
            [
                'id' => 4,
                'brand_id' => 4,
                'product_category_id' => 1,
                'type' => 'cakes',
                'name' => 'Layer cakes',
                'price' => 15,
                'description' => 'Layer cakes are cakes made with multiple layers of sponge or butter, cream filling, or different fillings to hold the layers together',
                'rating' => 2901,
                'recipe' => "Flour, eggs, milk, vanilla ice cream, cocola",
            ],
            [
                'id' => 5,
                'brand_id' => 5,
                'product_category_id' => 1,
                'type' => 'cakes',
                'name' => 'Coffee cakes',
                'price' => 13.99,
                'description' => 'Coffee cake is often considered a cake to be served with coffee or tea at breakfast or coffee break',
                'rating' => 2433,
                'recipe' => "Butter, flour, sugar, baking soda, sour cream",
            ],
            [
                'id' => 6,
                'brand_id' => 6,
                'product_category_id' => 2,
                'type' => 'cookies',
                'name' => 'Canestrelli',
                'price' => 16.99,
                'description' => 'Mix flour and ingredients well, then bake the cake and finally put it in the oven for about 30 minutes.',
                'rating' => 119,
                'recipe' => "Flour, baking soda, salt, butter, sugar, egg..",
            ],
            [
                'id' => 7,
                'brand_id' => 7,
                'product_category_id' => 2,
                'type' => 'cookies',
                'name' => 'Chocochip cookies',
                'price' => 16.99,
                'description' => 'Chocochip cookie have an eye-catching appearance, moderate sweetness, buttery aroma, and crispy cakes. This cake is quite suitable for weekend get-togethers with family and friends..',
                'rating' => 314,
                'recipe' => "Flour, baking soda, salt, butter, sugar, vanilla, egg, chocolate.",
            ],
            [
                'id' => 8,
                'brand_id' => 8,
                'product_category_id' => 2,
                'type' => 'Cookies',
                'name' => 'Biscotti',
                'price' => 19.99,
                'description' => 'When enjoying biscotti, you will be amazed by the crispy, aromatic and fatty taste of nuts, dried jam in the cake.',
                'rating' => 1198,
                'recipe' => "Flour, baking soda, salt, butter, sugar, egg..",
            ],
            [
                'id' => 9,
                'brand_id' => 9,
                'product_category_id' => 2,
                'type' => 'cookies',
                'name' => 'Anzac',
                'price' => 12.99,
                'description' => 'Although made from very simple ingredients, the delicious taste of Anzac cakes has made people remember forever.',
                'rating' => 119,
                'recipe' => "Flour, baking soda, salt, butter, sugar, egg..",
            ],
            [
                'id' => 10,
                'brand_id' => 10,
                'product_category_id' => 2,
                'type' => 'cookies',
                'name' => 'Brownie',
                'price' => 3.99,
                'description' => 'Brownie cake is a soft cake with a sweet taste with a layer of dark chocolate that can captivate anyone who loves sweets.',
                'rating' => 9123,
                'recipe' => "Dark chocolate, flour, unsalted butter, eggs, white sugar, salt.",
            ],
            [
                'id' => 11,
                'brand_id' => 11,
                'product_category_id' => 3,
                'type' => 'pastries',
                'name' => 'Shortcrust pastry',
                'price' => 13.99,
                'description' => 'This is the simplest and most popular type of pastry. It is also the type of pastry used frequently to make quiche, high in fat',
                'rating' => 2768,
                'recipe' => "flour, fat, butter, salt and water to connect the dough.",
            ],
            [
                'id' => 12,
                'brand_id' => 12,
                'product_category_id' => 3,
                'type' => 'pastries',
                'name' => 'Flaky pastry',
                'price' => 16.99,
                'description' => 'Crispy butter pastry. "Puffiness" is achieved by layers of crumb-like fat, usually butter or lard, which create layers that expand in the oven heat when baking.',
                'rating' => 2111,
                'recipe' => "Flour, sugar, butter",
            ],
            [
                'id' => 13,
                'brand_id' => 13,
                'product_category_id' => 3,
                'type' => 'pastries',
                'name' => 'Choux pastry',
                'price' => 13.99,
                'description' => 'Is a delicate cake used in many European dishes, along with fresh cream flavor',
                'rating' => 1311,
                'recipe' => "Butter, water, noodles and eggs.",
            ],
            [
                'id' => 14,
                'brand_id' => 14,
                'product_category_id' => 3,
                'type' => 'pastries',
                'name' => 'Hot water crust pastry',
                'price' => 13.99,
                'description' => 'Hot water pies are used for savory pies, such as pork pies, game pies and, more rarely, steak pies and kidney pies.',
                'rating' => 1122,
                'recipe' => "Hot water, lard and flour, the pastry is made by heating it in a water bath, melting the fat in it, boiling it, and finally mixing it with tapioca starch.",
            ],
            [
                'id' => 15,
                'brand_id' => 15,
                'product_category_id' => 3,
                'type' => 'pastries',
                'name' => 'Strawberry puff pastry',
                'price' => 13.99,
                'description' => 'It  one of the desserts. Crispy tart is made from puff pastry with almond and vanilla ice cream, topped with fresh strawberries, coated with nutual gel.',
                'rating' => 219,
                'recipe' => "Flour, eggs, milk, strawberries, cream.",
            ],
            [
                'id' => 16,
                'brand_id' => 16,
                'product_category_id' => 4,
                'type' => 'pies',
                'name' => 'Pumpking pie',
                'price' => 20.99,
                'description' => 'Pumpking pie is a combination of common baking ingredients with pumpking according to a separate recipe, creating a perfect cake.',
                'rating' => 1999,
                'recipe' => "Flour, baking soda, salt, butter, sugar, vanilla, egg, pumpking.",
            ],
            [
                'id' => 17,
                'brand_id' => 17,
                'product_category_id' => 4,
                'type' => 'pies',
                'name' => 'Chocolate pie',
                'price' => 20.99,
                'description' => 'Chocolate pie is a combination of common baking ingredients with ch么clate according to a separate recipe, creating a perfect cake.',
                'rating' => 2766,
                'recipe' => "Flour, baking soda, salt, butter, sugar, vanilla, egg, chocolate.",
            ],
            [
                'id' => 18,
                'brand_id' => 18,
                'product_category_id' => 4,
                'type' => 'pies',
                'name' => 'Apple pie',
                'price' => 20.99,
                'description' => 'Apple pie is a combination of common baking ingredients with apples according to a separate recipe, creating a perfect cake.',
                'rating' => 1765,
                'recipe' => "Flour, baking soda, salt, butter, sugar, vanilla, egg, apple.",
            ],
            [
                'id' => 19,
                'brand_id' => 19,
                'product_category_id' => 4,
                'type' => 'pies',
                'name' => 'Lemon pie',
                'price' => 7.99,
                'description' => 'Lemon pie is a combination of common baking ingredients with lemon according to a separate recipe, creating a perfect cake.',
                'rating' => 9531,
                'recipe' => "Flour, baking soda, salt, butter, sugar, vanilla, egg, lemon.",
            ],
            [
                'id' => 20,
                'brand_id' => 20,
                'product_category_id' => 4,
                'type' => 'pies',
                'name' => 'Satagazy pie',
                'price' => 20.99,
                'description' => 'Satagazy pie is a combination of common baking ingredients with fish according to a separate recipe, creating a perfect cake.',
                'rating' => 2311,
                'recipe' => "Flour, different types of fish, herb mix, lemon zest. Scrambled eggs, mashed potatoes, cream.",
            ],
            [
                'id' => 21,
                'brand_id' => 21,
                'product_category_id' => 5,
                'type' => 'cupcake',
                'name' => 'Satagazy pie',
                'price' => 20.99,
                'description' => 'Satagazy pie is a combination of common baking ingredients with fish according to a separate recipe, creating a perfect cake.',
                'rating' => 2311,
                'recipe' => "Flour, different types of fish, herb mix, lemon zest. Scrambled eggs, mashed potatoes, cream.",
            ],
            [
                'id' => 22,
                'brand_id' => 22,
                'product_category_id' => 5,
                'type' => 'cupcake',
                'name' => 'Satagazy pie',
                'price' => 20.99,
                'description' => 'Satagazy pie is a combination of common baking ingredients with fish according to a separate recipe, creating a perfect cake.',
                'rating' => 2311,
                'recipe' => "Flour, different types of fish, herb mix, lemon zest. Scrambled eggs, mashed potatoes, cream.",
            ],
            [
                'id' => 23,
                'brand_id' => 23,
                'product_category_id' => 5,
                'type' => 'cupcake',
                'name' => 'Satagazy pie',
                'price' => 20.99,
                'description' => 'Satagazy pie is a combination of common baking ingredients with fish according to a separate recipe, creating a perfect cake.',
                'rating' => 2311,
                'recipe' => "Flour, different types of fish, herb mix, lemon zest. Scrambled eggs, mashed potatoes, cream.",
            ],
            [
                'id' => 24,
                'brand_id' => 24,
                'product_category_id' => 5,
                'type' => 'cupcake',
                'name' => 'Satagazy pie',
                'price' => 20.99,
                'description' => 'Satagazy pie is a combination of common baking ingredients with fish according to a separate recipe, creating a perfect cake.',
                'rating' => 2311,
                'recipe' => "Flour, different types of fish, herb mix, lemon zest. Scrambled eggs, mashed potatoes, cream.",
            ],
            [
                'id' => 25,
                'brand_id' => 25,
                'product_category_id' => 5,
                'type' => 'cupcake',
                'name' => 'Satagazy pie',
                'price' => 20.99,
                'description' => 'Satagazy pie is a combination of common baking ingredients with fish according to a separate recipe, creating a perfect cake.',
                'rating' => 2311,
                'recipe' => "Flour, different types of fish, herb mix, lemon zest. Scrambled eggs, mashed potatoes, cream.",
            ],
            [
                'id' => 26,
                'brand_id' => 26,
                'product_category_id' => 6,
                'type' => 'chiffon',
                'name' => 'Canestrelli',
                'price' => 16.99,
                'description' => 'Mix flour and ingredients well, then bake the cake and finally put it in the oven for about 30 minutes.',
                'rating' => 119,
                'recipe' => "Flour, baking soda, salt, butter, sugar, egg..",
            ],
            [
                'id' => 27,
                'brand_id' => 27,
                'product_category_id' => 6,
                'type' => 'chiffon',
                'name' => 'Canestrelli',
                'price' => 16.99,
                'description' => 'Mix flour and ingredients well, then bake the cake and finally put it in the oven for about 30 minutes.',
                'rating' => 119,
                'recipe' => "Flour, baking soda, salt, butter, sugar, egg..",
            ],
            [
                'id' => 28,
                'brand_id' => 28,
                'product_category_id' => 6,
                'type' => 'chiffon',
                'name' => 'Canestrelli',
                'price' => 16.99,
                'description' => 'Mix flour and ingredients well, then bake the cake and finally put it in the oven for about 30 minutes.',
                'rating' => 119,
                'recipe' => "Flour, baking soda, salt, butter, sugar, egg..",
            ],
            [
                'id' => 29,
                'brand_id' => 29,
                'product_category_id' => 6,
                'type' => 'chiffon',
                'name' => 'Canestrelli',
                'price' => 16.99,
                'description' => 'Mix flour and ingredients well, then bake the cake and finally put it in the oven for about 30 minutes.',
                'rating' => 119,
                'recipe' => "Flour, baking soda, salt, butter, sugar, egg..",
            ],
            [
                'id' => 39,
                'brand_id' => 30,
                'product_category_id' => 6,
                'type' => 'chiffon',
                'name' => 'Canestrelli',
                'price' => 16.99,
                'description' => 'Mix flour and ingredients well, then bake the cake and finally put it in the oven for about 30 minutes.',
                'rating' => 119,
                'recipe' => "Flour, baking soda, salt, butter, sugar, egg..",
            ],
        ]);

        DB::table('product_images')->insert([
            [
                'product_id' => 1,
                'path' => 'cakes_1_1.png',
            ],
            [
                'product_id' => 1,
                'path' => 'cakes_1_2.png',
            ],
            [
                'product_id' => 1,
                'path' => 'cakes_1_3.png',
            ],
            [
                'product_id' => 1,
                'path' => 'cakes_1_4.png',
            ],
            [
                'product_id' => 2,
                'path' => 'cakes_2_1.png',
            ],
            [
                'product_id' => 2,
                'path' => 'cakes_2_2.png',
            ],
            [
                'product_id' => 2,
                'path' => 'cakes_2_3.png',
            ],
            [
                'product_id' => 2,
                'path' => 'cakes_2_4.png',
            ],
            [
                'product_id' => 3,
                'path' => 'cakes_3_1.png',
            ],
            [
                'product_id' => 3,
                'path' => 'cakes_3_2.png',
            ],
            [
                'product_id' => 3,
                'path' => 'cakes_3_3.png',
            ],
            [
                'product_id' => 3,
                'path' => 'cakes_3_4.png',
            ],
            [
                'product_id' => 4,
                'path' => 'cakes_4_1.png',
            ],
            [
                'product_id' => 4,
                'path' => 'cakes_4_2.png',
            ],
            [
                'product_id' => 4,
                'path' => 'cakes_4_3.png',
            ],
            [
                'product_id' => 4,
                'path' => 'cakes_4_4.png',
            ],
            [
                'product_id' => 5,
                'path' => 'cakes_5_1.png',
            ],
            [
                'product_id' => 5,
                'path' => 'cakes_5_2.png',
            ],
            [
                'product_id' => 5,
                'path' => 'cakes_5_3.png',
            ],
            [
                'product_id' => 5,
                'path' => 'cakes_5_4.png',
            ],
            [
                'product_id' => 6,
                'path' => 'cookies_11_1.png',
            ],
            [
                'product_id' => 6,
                'path' => 'cookies_11_2.png',
            ],
            [
                'product_id' => 6,
                'path' => 'cookies_11_3.png',
            ],
            [
                'product_id' => 6,
                'path' => 'cookies_11_4.png',
            ],
            [
                'product_id' => 7,
                'path' => 'cookies_12_1.png',
            ],
            [
                'product_id' => 7,
                'path' => 'cookies_12_2.png',
            ],
            [
                'product_id' => 7,
                'path' => 'cookies_12_3.png',
            ],
            [
                'product_id' => 7,
                'path' => 'cookies_12_4.png',
            ],
            [
                'product_id' => 8,
                'path' => 'cookies_13_1.png',
            ],
            [
                'product_id' => 8,
                'path' => 'cookies_13_2.png',
            ],
            [
                'product_id' => 8,
                'path' => 'cookies_13_3.png',
            ],
            [
                'product_id' => 8,
                'path' => 'cookies_13_4.png',
            ],
            [
                'product_id' => 9,
                'path' => 'cookies_14_1.png',
            ],
            [
                'product_id' => 9,
                'path' => 'cookies_14_2.png',
            ],
            [
                'product_id' => 9,
                'path' => 'cookies_14_3.png',
            ],
            [
                'product_id' => 9,
                'path' => 'cookies_14_4.png',
            ],
            [
                'product_id' => 10,
                'path' => 'cookies_15_1.png',
            ],
            [
                'product_id' => 10,
                'path' => 'cookies_15_2.png',
            ],
            [
                'product_id' => 10,
                'path' => 'cookies_15_3.png',
            ],
            [
                'product_id' => 10,
                'path' => 'cookies_15_4.png',
            ],
            [
                'product_id' => 11,
                'path' => 'pastry_6_1.png',
            ],
            [
                'product_id' => 11,
                'path' => 'pastry_6_2.png',
            ],
            [
                'product_id' => 11,
                'path' => 'pastry_6_3.png',
            ],
            [
                'product_id' => 11,
                'path' => 'pastry_6_4.png',
            ],
            [
                'product_id' => 12,
                'path' => 'pastry_7_1.png',
            ],
            [
                'product_id' => 12,
                'path' => 'pastry_7_2.png',
            ],
            [
                'product_id' => 12,
                'path' => 'pastry_7_3.png',
            ],
            [
                'product_id' => 12,
                'path' => 'pastry_7_4.png',
            ],
            [
                'product_id' => 13,
                'path' => 'pastry_8_1.png',
            ],
            [
                'product_id' => 13,
                'path' => 'pastry_8_2.png',
            ],
            [
                'product_id' => 13,
                'path' => 'pastry_8_3.png',
            ],
            [
                'product_id' => 13,
                'path' => 'pastry_8_4.png',
            ],
            [
                'product_id' => 14,
                'path' => 'pastry_9_1.png',
            ],
            [
                'product_id' => 14,
                'path' => 'pastry_9_2.png',
            ],
            [
                'product_id' => 14,
                'path' => 'pastry_9_3.png',
            ],
            [
                'product_id' => 14,
                'path' => 'pastry_9_4.png',
            ],
            [
                'product_id' => 15,
                'path' => 'pastry_10_1.png',
            ],
            [
                'product_id' => 15,
                'path' => 'pastry_10_2.png',
            ],
            [
                'product_id' => 15,
                'path' => 'pastry_10_3.png',
            ],
            [
                'product_id' => 15,
                'path' => 'pastry_10_4.png',
            ],
            [
                'product_id' => 16,
                'path' => 'pies_16_1.png',
            ],
            [
                'product_id' => 16,
                'path' => 'pies_16_2.png',
            ],
            [
                'product_id' => 16,
                'path' => 'pies_16_3.png',
            ],
            [
                'product_id' => 16,
                'path' => 'pies_16_4.png',
            ],
            [
                'product_id' => 17,
                'path' => 'pies_17_1.png',
            ],
            [
                'product_id' => 17,
                'path' => 'pies_17_2.png',
            ],
            [
                'product_id' => 17,
                'path' => 'pies_17_3.png',
            ],
            [
                'product_id' => 17,
                'path' => 'pies_17_4.png',
            ],
            [
                'product_id' => 18,
                'path' => 'pies_18_1.png',
            ],
            [
                'product_id' => 18,
                'path' => 'pies_18_2.png',
            ],
            [
                'product_id' => 18,
                'path' => 'pies_18_3.png',
            ],
            [
                'product_id' => 18,
                'path' => 'pies_18_4.png',
            ],
            [
                'product_id' => 19,
                'path' => 'pies_19_1.png',
            ],
            [
                'product_id' => 19,
                'path' => 'pies_19_2.png',
            ],
            [
                'product_id' => 19,
                'path' => 'pies_19_3.png',
            ],
            [
                'product_id' => 19,
                'path' => 'pies_19_4.png',
            ],
            [
                'product_id' => 20,
                'path' => 'pies_20_1.png',
            ],
            [
                'product_id' => 20,
                'path' => 'pies_20_2.png',
            ],
            [
                'product_id' => 20,
                'path' => 'pies_20_3.png',
            ],
            [
                'product_id' => 20,
                'path' => 'pies_20_4.png',
            ],
        ]);

        DB::table('product_details')->insert([
            [
                'product_id' => 1,
                'type' => 'blue',
                'size' => 'S',
                'qty' => 5,
            ],
            [
                'product_id' => 1,
                'type' => 'blue',
                'size' => 'M',
                'qty' => 5,
            ],
            [
                'product_id' => 1,
                'type' => 'blue',
                'size' => 'L',
                'qty' => 5,
            ],
            [
                'product_id' => 1,
                'type' => 'blue',
                'size' => 'XS',
                'qty' => 5,
            ],
            [
                'product_id' => 1,
                'type' => 'yellow',
                'size' => 'S',
                'qty' => 0,
            ],
            [
                'product_id' => 1,
                'type' => 'violet',
                'size' => 'S',
                'qty' => 0,
            ],
        ]);
    }
}
