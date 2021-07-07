<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

use App\Models\Products;


class Products_t extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Products::create([
            'title' => 'Black Mulch Mix 1/2',
            'is_featured' => false,
            'is_hot' => false,
            'price' => 38,
            'is_out_of_stock' => false,
            'depot' => 10,
            'inventory' => 2,
            'is_active' => false,
            'is_sale' => false,
            'description' => 'The traditional wood chip mulch is a design element in many housing developments. A good-quality black wood mulch is made up of hardwood chips that are dyed black, usually with a carbon black dye. While the contrast with green leaves and bright flowers is striking, black wood chips absorb heat on warm, sunny days.',
            'sku' => 'LM-05',
            // 'images' => 'Black-Mulch-Mix-1;2---1.jpg',
            // 'thumbnail' => 'Black-Mulch-Mix-1;2---1.jpg',
            'product_id' => 1,
            'image_id' => 1,
            'thumbnail_id' => 1,


        ]);
        Products::create([
            'title' => 'Brown Mulch Mohamy',
            'is_featured' => false,
            'is_hot' => false,
            'price' => 1,
            'is_out_of_stock' => false,
            'depot' => 10,
            'inventory' => 2,
            'is_active' => false,
            'is_sale' => false,
            'description' => 'Mohamy Brown Mulch is a decorative mulch made from recycled wood. Mahogany Mulch particle size ranges from 1 to 3 inches. The wood chips are dyed using an organic, water-based pigment that is durable, attractive, and safe for kids and pets. Mulch is an excellent ground cover that greatly enhances the aesthetic appearance of landscapes. When placed around plants, mulch can help retain moisture, control weeds, and help prevent erosion.',
            'sku' => 'LM-06',
            // 'images' => 'Brown-Mulch-Mohamy-2.jpg',
            // 'thumbnail' => 'Brown-Mulch-Mohamy-2.jpg',
            'product_id' => 1,
            'image_id' => 2,
            'thumbnail_id' => 2,

        ]);
        Products::create([
            'title' => 'Concrete Mix 60 lb bags',
            'is_featured' => false,
            'is_hot' => false,
            'price' => 2,
            'is_out_of_stock' => false,
            'depot' => 10,
            'inventory' => 2,
            'is_active' => false,
            'is_sale' => false,
            'description' => 'A concrete mix is a combination of five major elements in various proportions: cement, water, coarse aggregates, fine aggregates (i.e. sand), and air. Additional elements such as pozzolanic materials and chemical admixtures can also be incorporated into the mix to give it certain desirable properties.',
            'sku' => 'LM-04',
            // 'images' => 'Concrete-Mix-60-lb-bags.jpg',
            // 'thumbnail' => 'Concrete-Mix-60-lb-bags.jpg',
            'product_id' => 1,
            'image_id' => 3,
            'thumbnail_id' => 3,

        ]);
        Products::create([
            'title' => 'Organic Planter Mix',
            'is_featured' => false,
            'is_hot' => false,
            'price' => 3,
            'is_out_of_stock' => false,
            'depot' => 10,
            'inventory' => 2,
            'is_active' => false,
            'is_sale' => false,
            'description' => 'It includes an overview covering the kinds of media (compost, peat, and manure-based materials) commonly used, potting mix test information, and information on how to make and use organic potting mixes in your organic greenhouse operation. It also summarizes basic organic potting mix recipes and provides tips on how to handle materials.',
            'sku' => 'LM-01',
            // 'images' => 'Organic-Planter-Mix.jpg',
            // 'thumbnail' => 'Organic-Planter-Mix.jpg',
            'product_id' => 1,
            'image_id' => 4,
            'thumbnail_id' => 4,

        ]);
        Products::create([
            'title' => 'Pea Gravell',
            'is_featured' => false,
            'is_hot' => false,
            'price' => 4,
            'is_out_of_stock' => false,
            'depot' => 10,
            'inventory' => 2,
            'is_active' => false,
            'is_sale' => false,
            'description' => 'Pea gravel is small rounded stones. Each stone is about the size of a pea. They usually range in size from one-eighth of an inch to three-eighths of an inch in diameter. ',
            'sku' => 'LM-11',
            // 'images' => 'Pea-Gravell.jpg',
            // 'thumbnail' => 'Pea-Gravell.jpg',
            'product_id' => 1,
            'image_id' => 5,
            'thumbnail_id' => 5,


        ]);
        Products::create([
            'title' => 'Play Sand Bags',
            'is_featured' => false,
            'is_hot' => false,
            'price' => 5,
            'is_out_of_stock' => false,
            'depot' => 10,
            'inventory' => 2,
            'is_active' => false,
            'is_sale' => false,
            'description' => 'All-Natural Play Sand is a screened and washed sand ideal for playgrounds, sandboxes, and general landscaping. This sand is all natural, not manufactured sand. It makes an excellent base for pavers and is suitable for applications such as above-ground pool foundations. ',
            'sku' => 'LM-02',
            // 'images' => 'Play-Sand-Bags.jpg',
            // 'thumbnail' => 'Play-Sand-Bags.jpg',
            'product_id' => 1,
            'image_id' => 6,
            'thumbnail_id' => 6,

        ]);
        Products::create([
            'title' => 'Red Mulch  1/2 Mix',
            'is_featured' => false,
            'is_hot' => false,
            'price' => 6,
            'is_out_of_stock' => false,
            'depot' => 10,
            'inventory' => 2,
            'is_active' => false,
            'is_sale' => false,
            'description' => 'Red wood mulch is a wood mulch offered by Sherman Outdoor Services. It’s unsurpassed beauty, color, longevity and quality makes it the perfect way to lock in moisture for plants, trees and shrubs. ',
            'sku' => 'LM-07',
            // 'images' => 'Red-Mulch--1-2--1--Mix.jpg',
            // 'thumbnail' => 'Red-Mulch--1-2--1--Mix.jpg',
            'product_id' => 1,
            'image_id' => 7,
            'thumbnail_id' => 7,


        ]);
        Products::create([
            'title' => 'Redwood Bark Mulch Mix 1 - 2',
            'is_featured' => false,
            'is_hot' => false,
            'price' => 82,
            'is_out_of_stock' => false,
            'depot' => 10,
            'inventory' => 2,
            'is_active' => false,
            'is_sale' => false,
            'description' => 'Redwood bark, either as a fiber or as chunks, has long been an optional component of fir-bark-based potting media. It has been used by itself with some success, as well. It was used in fir-bark mixes to lower pH, to help with moisture retention, to reduce some soil-borne pests and, some thought, to increase the life of the mix.',
            'sku' => 'LM-08',
            // 'images' => 'Redwood-Bark-Mulch-Mix-1---2.jpg',
            // 'thumbnail' => 'Redwood-Bark-Mulch-Mix-1---2.jpg',
            'product_id' => 1,
            'image_id' => 8,
            'thumbnail_id' => 8,

        ]);
        Products::create([
            'title' => 'Shreded Bark Mulch',
            'is_featured' => false,
            'is_hot' => false,
            'price' => 42,
            'is_out_of_stock' => false,
            'depot' => 10,
            'inventory' => 2,
            'is_active' => false,
            'is_sale' => false,
            'description' => 'It comes from a variety of sources, including cedar trees. Shredded bark is one of the best mulch types to use on slopes and it breaks down relatively slowly. Some shredded bark mulches are byproducts from other industries and are considered environmentally friendly. ',
            'sku' => 'LM-09',
            // 'images' => 'Shreded-Bark-Mulch.jpg',
            // 'thumbnail' => 'Shreded-Bark-Mulch.jpg',
            'product_id' => 1,
            'image_id' => 9,
            'thumbnail_id' => 9,

        ]);
        Products::create([
            'title' => 'Sucullent Mix : Potting Mix',
            'is_featured' => false,
            'is_hot' => false,
            'price' => 7,
            'is_out_of_stock' => false,
            'depot' => 10,
            'inventory' => 2,
            'is_active' => false,
            'is_sale' => false,
            'description' => 'The word succulent means a plant possessing thick, fleshy stems and leaves primarily as an adaptation to store water. In other words, succulents are desert- denizens that have recently been tamed to spice up the living room décor, by using minimalistic planters, by their unique but beautiful looks.',
            'sku' => 'LM-04',
            // 'images' => 'Sucullent-Mix-Potting-Mix.jpg',
            // 'thumbnail' => 'Sucullent-Mix-Potting-Mix.jpg',
            'product_id' => 1,
            'image_id' => 10,
            'thumbnail_id' => 10,

            
        ]);
    }
}
