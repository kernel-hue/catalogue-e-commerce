<?php

namespace Database\Seeders;

use App\Models\Product;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class ProductSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run():void
    {
        Product::create([
            'name'=>'Clavier mécanique RGB Pro',
            'description'=>'Perfomance Ultime pour le Codage et Gaming',
            'price'=>'25000',
            'old_price'=>'35000',
            'image'=>'https://images.unsplash.com/photo-1587829741301-dc798b83add3?auto=format&fit=crop&w=400&q=80'
        ]);

        Product::create([
            'name'=>'Drone Ultra 4k',
            'description'=>'Perfomance Ultra haute définition 4k',
            'price'=>'450000',
            'old_price'=>'600000',
            'image'=>'https://images.unsplash.com/photo-1527977966376-1c8408f9f108?auto=format&fit=crop&w=400&q=80'
        ]);

        Product::create([
            'name'=>'Station d.accueil ThunderBolt',
            'description'=>'Perfomance du Gaming',
            'price'=>'150000',
            'old_price'=>'200000',
            'image'=>'https://images.unsplash.com/photo-1544652478-6653e09f18a2?auto=format&fit=crop&w=400&q=80'
        ]);

        Product::create([
            'name'=>'Casque réducteur de bruit',
            'description'=>'Perfomance et confort absolu',
            'price'=>'250000',
            'old_price'=>'300000',
            'image'=>'https://images.unsplash.com/photo-1505740420928-5e560c06d30e?auto=format&fit=crop&w=400&q=80',
        ]);

        Product::create([
            'name'=>'Souris Gaming RGB Sans Fil',
            'description'=>'Capteur haute précision et rétroéclairage RGB personnalisable',
            'price'=>'32000',
            'old_price'=> '42000',
            'image'=>'https://images.unsplash.com/photo-1615663245857-ac93bb7c39e7?auto=format&fit=crop&w=400&q=80',
        ]);

        Product::create([
            'name'=>'Moniteur Portable 4k',
            'description'=>'Écran portable Ultra fin',
            'price'=>'70000',
            'old_price'=> '90000',
            'image'=>'https://images.unsplash.com/photo-1517336714731-489689fd1ca8?auto=format&fit=crop&w=400&q=80',
        ]);

        Product::create([
            'name' => 'Webcam Pro 4K HDR Stream',
            'description' => 'Image 4K Ultra HD 60fps avec correction automatique de la lumière et micro directionnel.',
            'price' => '100000',
            'old_price' => '130000',
            'image' => 'https://images.unsplash.com/photo-1587826080692-f439cd0b70da?auto=format&fit=crop&w=600&q=80',
        ]);

        Product::create([
            'name' => 'Support Écran Double Articulé',
            'description' => 'Bras à vérin à gaz robuste pour écrans de 17 à 32 pouces avec passe-câbles intégré.',
            'price' => '65000',
            'old_price' => '80000',
            'image' => 'https://images.unsplash.com/photo-1527443224154-c4a3942d3acf?auto=format&fit=crop&w=600&q=80',
        ]);

        Product::create([
            'name' => 'Webcam Full HD 1080p',
            'description' => 'Idéale pour le télétravail et le streaming, mise au point automatique',
            'price' => '18000',
            'old_price' => '25000',
            'image' => 'https://images.unsplash.com/photo-1715869618915-a7bf6608d4c3?auto=format&fit=crop&w=400&q=80',
        ]);


        Product::create([
    'name' => 'Enceinte Bluetooth Portable',
    'description' => 'Son puissant et autonomie de 12h, résistante aux éclaboussures',
    'price' => '28000',
    'old_price' => '38000',
    'image' => 'https://images.unsplash.com/photo-1623949556303-b0d17d198863?auto=format&fit=crop&w=400&q=80',
]);

Product::create([
    'name' => 'Micro USB pour Streaming',
    'description' => 'Qualité studio, idéal pour le podcast et les appels professionnels',
    'price' => '22000',
    'price' => '9000',
    'old_price' => '13000',
    'image' => 'https://images.unsplash.com/photo-1614588876378-b2ffa4520c22?auto=format&fit=crop&w=400&q=80',
]);
        
    }
}
