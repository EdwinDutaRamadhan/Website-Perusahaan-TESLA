<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Shop;
class ShopSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
      $shops = array(
        array('id' => '1','category_id' => '1','user_id' => '1','type' => 'At Home','model' => NULL,'title' => 'J1772 Wall Connector','price' => '550','desc' => 'Our J1772 Wall Connector is a convenient charging solution for Tesla and non-Tesla electric vehicles alike, and is ideal for houses, apartments, hospitality properties and workplaces. \\r\\n\\r\\nWith up to 44 miles of range added per hour, a 24-foot cable, multiple power settings and a versatile indoor/outdoor design, J1772 Wall Connector provides unparalleled convenience. It can also power-share to maximize existing electrical capacity, automatically distributing power and allowing you to charge multiple vehicles simultaneously.\\r\\n\\r\\nThe J1772 Wall Connector is compatible with most North American electric vehicles. Tesla vehicles will require an additional SAE J1772 Charging Adapter to charge, which is included with all Tesla vehicles upon delivery.\\r\\n\\r\\nIf you are a developer, manager or owner of commercial real estate and interested in purchasing more than 12 J1772 Wall Connectors, visit Commercial Charging.','image' => 'shop-images/pMwAOclhQiLrQ8rPNdBzcvqnxpMY9WzfKplq2BdR.avif','created_at' => '2022-11-29 08:30:39','updated_at' => '2022-12-02 01:46:05'),
        array('id' => '2','category_id' => '1','user_id' => '1','type' => 'At Home','model' => NULL,'title' => 'Wall Connector','price' => '400','desc' => 'Wall Connector is the most convenient charging solution for houses, apartments, hospitality properties and workplaces.\\r\\n\\r\\nWith up to 44 miles of range added per hour of charging, a 24 foot cable length, multiple power settings, and a versatile indoor/outdoor design, Wall Connector provides unparalleled convenience.\\r\\n\\r\\nWall Connectors can power-share to maximize existing electrical capacity, automatically distributing power to charge multiple cars simultaneously.\\r\\n\\r\\nIf you are a developer, manager or owner of commercial real estate and interested in purchasing more than 12 Wall Connectors, contact CommercialCharging@tesla.com.','image' => 'shop-images/YWPzF8mQCvqI4Vw8IfRSDXUCe8rJELNIwIglXNtV.avif','created_at' => '2022-11-29 08:32:21','updated_at' => '2022-11-29 08:32:21'),
        array('id' => '40','category_id' => '3','user_id' => '1','type' => 'Sweathshirts and Hoodies','model' => 'Men','title' => 'Cybertruck Graffiti Hoodie','price' => '60','desc' => 'As with the iconic Tesla logo, the Cybertruck Graffiti Hoodie is a classic in the making. Unisex style featuring soft fleece and an adjustable, jersey-lined hood for comfortable coverage.','image' => 'shop-images/IJMQemSRLgTOthzoHRcZ8zNzuGchy3tON63M8zWm.avif','created_at' => '2022-12-01 10:18:28','updated_at' => '2022-12-01 10:18:28'),
        array('id' => '42','category_id' => '2','user_id' => '1','type' => 'Interior','model' => 'Model S','title' => 'Model S/3/Y Pet Liner','price' => '145','desc' => 'Model S/3/Y Pet Liner is made from a breathable quilted fleece material, creating maximum comfort for your pet during car rides or while relaxing in Dog Mode. Designed exclusively for the second row of Model S, Model 3 and Model Y, the three-piece set features a durable water-resistant hammock-style liner and two door protectors to safeguard against paws, dirt, pet hair and any accidental slobber.
                
                Includes:
                
                1x pet liner
                2x door protectors
                Note: Compatible with all Model S, Model 3 and Model Y vehicles.','image' => 'shop-images/nPtLCU1RPa6wmbfffW0oCN18EN4VUt6CjMHFKDE9.webp','created_at' => '2022-12-01 13:04:58','updated_at' => '2022-12-01 13:04:58'),
        array('id' => '4','category_id' => '1','user_id' => '1','type' => 'On the Road','model' => NULL,'title' => 'Mobile Connector','price' => '230','desc' => 'Stay charged on extended trips or when you need it most with Mobile Connector. Using a standard outlet, you can recharge up to 3 miles of range per hour with the NEMA 5-15 Adapter or up to 30 miles of range with the NEMA 14-50 Adapter depending on your vehicle.\\r\\n\\r\\nIncludes:\\r\\n\\r\\n1x Mobile Connector - 20’ cable\\r\\n1x NEMA 5-15 Adapter\\r\\n1x NEMA 14-50 Adapter\\r\\n1x storage bag\\r\\nMobile Connector Manual\\r\\n\\r\\nNote: Vehicle orders placed after April 28, 2022 will not include a Mobile Connector with delivery. Your order will ship closer to your vehicle delivery date.','image' => 'shop-images/MkUOyfsGw3U9evDu1jkTgNVgwrv98VpD1fiFOP5k.webp','created_at' => '2022-11-29 10:07:06','updated_at' => '2022-11-29 10:07:06'),
        array('id' => '5','category_id' => '1','user_id' => '1','type' => 'On the Road','model' => NULL,'title' => 'NEMA Adapter Bundle','price' => '245','desc' => 'Maximize your charging options with the NEMA Adapter Bundle. Simply attach the appropriate adapter to your Mobile Connector, plug into the corresponding outlet and begin charging. With all seven Gen 2 NEMA Adapters in one convenient storage bag, you can charge at any available outlet, at home or on the road.\\r\\n\\r\\nIncludes:\\r\\n\\r\\n1x Gen 2 NEMA 5-20 Adapter\\r\\n1x Gen 2 NEMA 6-15 Adapter\\r\\n1x Gen 2 NEMA 6-20 Adapter\\r\\n1x Gen 2 NEMA 10-30 Adapter\\r\\n1x Gen 2 NEMA 14-30 Adapter\\r\\n1x Gen 2 NEMA 14-50 Adapter\\r\\n1x Gen 2 NEMA 6-50 Adapter\\r\\n1x storage bag','image' => 'shop-images/42RbcygbYkVBkcTz6xfNmOOT3RZT7gMldLGXuPqm.jpg','created_at' => '2022-11-29 10:09:06','updated_at' => '2022-11-29 10:09:06'),
        array('id' => '37','category_id' => '3','user_id' => '1','type' => 'Tees','model' => 'Men','title' => 'Model X-mas Sweater','price' => '65','desc' => 'Whether you\'ve been naughty or nice this year, our limited-edition Model X-mas Sweater will keep you warm all season long. With a festive pattern featuring the S3XY vehicle lineup, Supercharger, lightning bolt silhouette and Tesla wordmark, this hand-linked knit is the perfect addition to any holiday gathering. Made from 100% hypoallergenic acrylic to be extra soft and cozy.','image' => 'shop-images/x5EH6vsULd0GxIjsgI1oQVWZrTywej2jQ1os6jbL.jpg','created_at' => '2022-12-01 06:58:39','updated_at' => '2022-12-01 06:58:39'),
        array('id' => '38','category_id' => '3','user_id' => '1','type' => 'Tees','model' => 'Men','title' => 'Men\'s Quilted Bomber Jacket Black','price' => '195','desc' => 'The Men\'s Quilted Bomber Jacket features an elevated, quilted design for warmth and mobility in cold weather seasons. With both comfort and style, the bomber features subtle silicone injected Tesla logos on the right and left sleeves, custom matte metal zipper pulls and a premium double layer rib knit collar. Made from 87% nylon and 13% polyurethane.','image' => 'shop-images/38CBYXA2nvJxK2i0aErtWYjm9iUA0XfJEyl2aet2.webp','created_at' => '2022-12-01 07:02:36','updated_at' => '2022-12-01 07:02:36'),
        array('id' => '7','category_id' => '4','user_id' => '1','type' => 'Mini Teslas','model' => NULL,'title' => 'Diecast 1:18 Scale Roadster','price' => '175','desc' => 'Description
                Officially commissioned by Tesla, the Diecast 1:18 Scale Roadster was meticulously overseen by the Tesla Design Studio. Every detail, curve and surface was replicated from the same 3D CAD data used to manufacture the actual Roadster.
                
                Features:
                
                Over 180 metal and plastic parts
                Detailed interior
                Diecast metal
                Functioning doors and trunk
                Convertible roof
                Rubber tires
                Steerable wheels
                Carpeted trunk and interior
                Seat belts made of fabric
                Dimensions: 252mm long x 109.5mm wide x 70mm high
                Weight: 1.925lbs (0.875kg)
                Warning: Choking hazard. Contains small parts. Not suitable for children under 14 years old.','image' => 'shop-images/vZcxoGs8cQiaZapUm6kgSjocuK8MU9xoPSji2yzP.webp','created_at' => '2022-11-30 09:51:38','updated_at' => '2022-11-30 09:51:38'),
        array('id' => '8','category_id' => '4','user_id' => '1','type' => 'Mini Teslas','model' => NULL,'title' => 'Diecast 1:18 Scale Model 3','price' => '175','desc' => 'Officially commissioned by Tesla, the Model 3 Performance diecast scale model was meticulously overseen by the Tesla Design Studio. Every detail, curve and surface was replicated from the same 3D CAD data used to manufacture the actual Model 3 Performance.
                
                Features:
                
                Dimensions: 260mm long x113mm wide x 80mm high 
                Weight: 2.38lbs (1.08kg)
                Warning: Choking hazard. Contains small parts. Not suitable for children under 14 years old.','image' => 'shop-images/G9TpJC5g95DqBAqp2foulaj749lgnQocgzHZ4sBu.webp','created_at' => '2022-11-30 09:54:19','updated_at' => '2022-11-30 09:54:19'),
        array('id' => '9','category_id' => '4','user_id' => '1','type' => 'Mini Teslas','model' => NULL,'title' => 'Diecast 1:24 Scale Semi','price' => '175','desc' => 'The Diecast 1:24 Scale Semi was officially commissioned by Tesla and meticulously overseen by the Tesla Design Studio. The same 3D CAD data used to manufacture the actual Tesla Semi was used to replicate every detail, curve and surface found in the scale model.
                
                Features:
                
                Dimensions: 292mm long x 124mm wide x 172mm high
                Weight: 3.3lb (1.48kg)
                Warning: Choking hazard. Contains small parts. Not suitable for children under 14 years old.','image' => 'shop-images/uIjjnzJYDYs4MTyeCqMZYmmOehzvDBPLi3NbEzbk.webp','created_at' => '2022-11-30 09:57:13','updated_at' => '2022-11-30 09:57:13'),
        array('id' => '41','category_id' => '4','user_id' => '1','type' => 'Outdoor and Tech','model' => NULL,'title' => 'Umbrella','price' => '60','desc' => 'Designed for sturdy all-weather protection and exceptional coverage, the Tesla Umbrella features a large 62-inch canopy with room for two adults. The heavy-duty red fiberglass frame extends from an ergonomically designed handle for extra comfort.
                
                Perfect for any outdoor activity, the printed canopy features a prominent logo on the outside with a Tesla wordmark underneath, on the storage sleeve and molded directly into the handle. A black rubber ferrule with red plastic tips adds extra visibility and style.','image' => 'shop-images/G0VMOQkf0WJlO647c9UjVNCEMZ8KRTHNp4mf3HPW.webp','created_at' => '2022-12-01 12:52:43','updated_at' => '2022-12-01 12:52:43'),
        array('id' => '11','category_id' => '4','user_id' => '1','type' => 'Bags','model' => NULL,'title' => 'Mega [mini] Pack','price' => '185','desc' => 'Still Mega, just mini.
                
                Our Mega [mini] Pack is inspired by our vehicles’ vegan interiors and black-and-white colorways. This collection is made from durable vegan leather with a custom-molded Tesla wordmark and finished with metallic hardware. Features a number of utility pockets throughout, including a hidden exterior pocket. Complete with an easy-carry handle and adjustable shoulder straps.
                
                Premium vegan leather exterior. 100% sueded polyester lining.
                
                Includes:
                
                1x Mega [mini] Pack
                1x Tesla-branded satin dust cover
                Note: Measures 10.5x8x5in (26.7x20.3x12.7cm)
                
                Need more storage capacity? Check out our Mega [back] Pack.','image' => 'shop-images/G4OphbeHPzqwf14oDhS3rbUCPxWfQULIw68dcQGU.webp','created_at' => '2022-11-30 10:02:47','updated_at' => '2022-11-30 10:02:47'),
        array('id' => '12','category_id' => '4','user_id' => '1','type' => 'Drinkware','model' => NULL,'title' => 'S3XY Mug','price' => '25','desc' => 'Start your day with our limited edition, all black, 12-oz S3XY Mug, featuring tone-on-tone lettering of our vehicle model names and a smooth matte finish.','image' => 'shop-images/6fkVtUaQqMbEpVluQjAwfPOLoeTqHsat4Es2bu09.webp','created_at' => '2022-11-30 10:37:08','updated_at' => '2022-11-30 10:37:08'),
        array('id' => '17','category_id' => '2','user_id' => '1','type' => 'Interior','model' => 'Model S','title' => 'USB Drive - 128 GB','price' => '45','desc' => 'Store your Sentry Mode and Dashcam footage with the USB Drive - 128 GB. Protect against theft, break-ins and threats when your car is left unattended with up to 128 GB of video storage capacity. Insert the pre-formatted USB Drive into the USB-A port inside the center console or the rear of the glove box before enabling Sentry Mode for a unique layer of safety and security you can take anywhere.
                
                Note: USB - 128 GB is included with all new vehicle deliveries.','image' => 'shop-images/lXWe1IOGvDPuclomc1FsqSWxaMhxDscx26TgxloH.webp','created_at' => '2022-11-30 17:28:53','updated_at' => '2022-11-30 17:28:53'),
        array('id' => '14','category_id' => '2','user_id' => '1','type' => 'Eksterior','model' => 'Model S','title' => '2012-2020 | Model S Carbon Fiber Spoiler','price' => '1200','desc' => 'Improve high speed stability by adding the carbon fiber spoiler to your trunk lid. Made from lightweight, cross-woven carbon fibers with a matte epoxy finish.
                
                Includes:
                
                1x carbon fiber spoiler
                Note: Compatible with Model S vehicles produced in 2012-2020. Once you have completed checkout for this item, please schedule a Service appointment for installation in your Tesla app. Shipping to your preferred Tesla Service Center and installation are included with purchase. For additional questions about scheduling your Service appointment, visit Shop FAQ.','image' => 'shop-images/CUTmPWuDLmFyXxOTMTTdAfvK1aUJESH47p4w0yzk.webp','created_at' => '2022-11-30 17:18:51','updated_at' => '2022-11-30 17:18:51'),
        array('id' => '15','category_id' => '2','user_id' => '1','type' => 'Wheels and Tires','model' => 'Model S','title' => 'Tire Repair Kit','price' => '70','desc' => 'The Tire Repair Kit contains an air compressor to regularly top off your tire pressure and a one-piece sealant canister to patch punctures. Simply attach the transparent hose to the tire valve and connect the plug to your vehicle\'s 12V outlet to begin repairing the hole and filling the tire. The SENSOR safety system will electronically check for a secure connection between the hose and valve to prevent accidental misuse.
                
                Includes:
                
                1x bottle of sealant
                1x air compressor
                1x inflation needle
                1x tapered nozzle
                1x Tesla storage bag
                Note: This product is only intended as a temporary fix. See a tire specialist as soon as possible or before driving a maximum distance of 186 miles (300 km) on a repaired tire. If the puncture exceeds 0.24 inches (6 mm) in diameter and/or if additional punctures are found in other places on the tire tread, do not use and contact roadside assistance. Do not leave the compressor on for more than 20 consecutive minutes. The damaged tire should be replaced, along with the TPMS sensor, at your earliest convenience. Replacement tire and TPMS sensor are not covered under Tesla vehicle warranty.','image' => 'shop-images/ta50ovdNUW1ccLmuiFBgxAml613g5iTFsBSmhY4L.webp','created_at' => '2022-11-30 17:21:50','updated_at' => '2022-11-30 17:21:50'),
        array('id' => '18','category_id' => '2','user_id' => '1','type' => 'Floor Mats','model' => 'Model S','title' => 'Model S All-Weather Interior Liners','price' => '250','desc' => 'Model S All-Weather Interior Liners are made from a thermoplastic elastomer material with a strong rigid core for extreme-duty protection and spatial coverage. Unlike traditional floor mats, Model S All-Weather Interior Liners are comprised of vertical walls that offer maximum protection to the footwell carpet and easy cleanup. Created with an exclusive pattern by Tesla Design Studio, these liners are custom-made using the latest digital measurements for Model S.
                
                100% recyclable and free of cadmium, lead, latex and PVC.
                
                Includes:
                
                1x first row all-weather liner [driver]
                1x first row all-weather liner [passenger]
                1x second row all-weather liner
                For additional product information, view the All-Weather Interior Liner Instructions.
                
                Note: Compatible with Model S vehicles produced in 2021+.','image' => 'shop-images/hJ6Dckg5XN2uCOflkyK9hJmWer4rodX4mb5AgXE7.webp','created_at' => '2022-11-30 17:35:01','updated_at' => '2022-11-30 17:35:01'),
        array('id' => '19','category_id' => '2','user_id' => '1','type' => 'Keys','model' => 'Model S','title' => 'Model S Key Fob','price' => '175','desc' => 'Locking and unlocking your Tesla vehicle has never been easier. Keep your key fob in your pocket and simply pull on the door handle for easy entry. Same with the trunk. Your key fob is automatically enabled when you pair it with your vehicle.
                
                Includes:
                
                1x key fob
                1x coin cell battery
                Model S Adding and Removing Keys
                
                Note: Compatible with Model S vehicles produced in 2021+.','image' => 'shop-images/zxM8pzim9GoQ0tr9SJTTyH689aYvgyzlC96P66N5.webp','created_at' => '2022-11-30 17:38:01','updated_at' => '2022-11-30 17:38:01'),
        array('id' => '20','category_id' => '2','user_id' => '1','type' => 'Interior','model' => 'Model 3','title' => 'Model 3/Y Automatic Garage Opener','price' => '350','desc' => 'Come and go with easy access. Connect your Model 3 or Model Y to your garage door, gate system and other radio-frequency (RF) controlled devices with the fully integrated Homelink module.
                
                Learn more about the Automatic Garage Opener on our support page.
                
                Note: The Model 3/Y Automatic Garage Opener will be sent directly to the shipping address entered at checkout. Shipping and installation are included with purchase. Once you have received this item, please schedule a Service appointment for installation in your Tesla app. Do not tamper/open the package, as this will cause installation to be voided. For additional questions about scheduling your Service appointment, visit Shop FAQ.','image' => 'shop-images/tFiBaNpWjbfO8uAYgpmx1y9OTyn3QXZqgdADslut.webp','created_at' => '2022-12-01 02:27:00','updated_at' => '2022-12-01 02:27:00'),
        array('id' => '23','category_id' => '2','user_id' => '1','type' => 'Eksterior','model' => 'Model 3','title' => 'Model 3 Car Cover Indoor','price' => '230','desc' => 'Outdoor
                
                Shield your Tesla from the harshest of elements with this Outdoor Car Cover. With a middle layer of Thermoplastic Polyurethane and two outer layers of woven polyester, the cover allows for breathability while providing the best water resistance available today. Convenient charge port openings allow for connection to an outlet, and ventilated mesh allow for air flow while charging.
                
                Features:
                
                Tough outer shell
                Ultra soft inside
                Grommets for security cabling
                Includes:
                
                1x car cover
                1x storage bag
                Indoor
                
                Stretch satin fits your Tesla like a glove, hugging its contours and protecting the paint finish from dings, scratches and dust that are imminent with indoor storage. Convenient charge port openings allow for connection to an outlet, and ventilated mesh allow for air flow while charging.
                
                Features:
                
                Silky smooth black satin finish
                Ultra soft inside
                Includes:
                
                1x car cover
                1x storage bag','image' => 'shop-images/NEIXb4rcbTqgDq2NNTpgyCFc6YEaZMlc7FFuQVXt.webp','created_at' => '2022-12-01 02:32:16','updated_at' => '2022-12-01 02:32:16'),
        array('id' => '24','category_id' => '2','user_id' => '1','type' => 'Wheels and Tires','model' => 'Model 3','title' => 'Model 3 20" Überturbine Wheel and Winter Tire Package','price' => '4750','desc' => 'Description
                The Model 3 20” Überturbine Wheel and Winter Tire Package provides maximum safety, performance and control in all winter driving conditions. Improved traction, stability and braking efficiency in temperatures under 45°F.
                
                Includes:
                
                4x 20X8.5J Überturbine Wheels
                4x 235/35/20 Pirelli WINTER SOTTOZERO 3 tires
                4x BLE tire pressure sensors
                Note: This package is only compatible with the Refresh Model 3 Dual Motor All-Wheel Drive configured with 20” Performance Wheels. Model 3 with Refresh configuration have chrome-delete door handles and window trim (see photo below for details). Should you need to purchase an individual wheel or tire, please contact your preferred Tesla Service Center. Once you have completed checkout for this item, please schedule a Service appointment for installation in your Tesla app. Shipping to your preferred Tesla Service Center and installation are included with purchase. For additional questions about scheduling your Service appointment, visit Shop FAQ.','image' => 'shop-images/VWWGcuortUM34YpNAqCCq0ooqIcmNdKUEUhGCIZP.webp','created_at' => '2022-12-01 02:36:53','updated_at' => '2022-12-01 02:36:53'),
        array('id' => '25','category_id' => '2','user_id' => '1','type' => 'Floor Mats','model' => 'Model 3','title' => 'Model 3 All-Weather Rear Trunk Liner','price' => '130','desc' => 'Model 3 All-Weather Rear Trunk Liner offers extreme-duty cargo protection with a 100% recyclable thermoplastic elastomer that is free of cadmium, lead, latex and PVC.
                
                Includes:
                
                1x rear trunk all-weather liner','image' => 'shop-images/6xg4zLyfqnrPybpargSfODZjvN1rEtCsXgHlf8QR.webp','created_at' => '2022-12-01 02:40:32','updated_at' => '2022-12-01 02:40:32'),
        array('id' => '26','category_id' => '2','user_id' => '1','type' => 'Keys','model' => 'Model 3','title' => 'Model 3 Key Band','price' => '18','desc' => 'Custom made and available for every model, the Tesla Key Band provides a sleek and convenient key solution to your current key fob. Comprised of a silicone band attached to a metal key ring and finished with a tastefully embossed logo, the key band is a perfect fit for any model.
                
                Note: Key fob not included.','image' => 'shop-images/mg5MnQWuhHlVWESPJig4VhIc4HNjxd5vZNmak1ug.webp','created_at' => '2022-12-01 02:41:23','updated_at' => '2022-12-01 02:41:23'),
        array('id' => '27','category_id' => '2','user_id' => '1','type' => 'Interior','model' => 'Model X','title' => '2015-2020 | Model X Enhanced Anti-Theft Upgrade','price' => '350','desc' => 'Increase your vehicle\'s protection with active sensor technology designed to detect motion inside the cabin as well as sense if the vehicle is moved or tilted. It will warn against potential theft with an audible alarm.
                
                Includes:
                
                1x sensor assembly
                2x window decals
                Note: Compatible with Model X vehicles produced in 2015-2020. If your Model X has a Light Headliner, but you are not sure whether you have a Cream Premium Interior or a Tan Leather Interior, you can look at your vehicle build date which is found on a placard on the inside of the driver door. Model X built after 7/9/2017 with a Light Headliner have a Cream Premium Interior, while Model X built before 7/9/2017 have a Tan Leather Interior. Once you have completed checkout for this item, please schedule a Service appointment for installation in your Tesla app. Shipping to your preferred Tesla Service Center and installation are included with purchase. For additional questions about scheduling your Service appointment, visit Shop FAQ.','image' => 'shop-images/BsTSgXiTa1HoUQNRsWdKPqKZlzeIesu2InVqQXws.webp','created_at' => '2022-12-01 02:42:47','updated_at' => '2022-12-01 02:42:47'),
        array('id' => '28','category_id' => '2','user_id' => '1','type' => 'Eksterior','model' => 'Model X','title' => 'Model X Car Cover Outdoor','price' => '450','desc' => 'Outdoor
                
                Shield your Tesla from the harshest of elements with this Outdoor Car Cover. With a middle layer of Thermoplastic Polyurethane and two outer layers of woven polyester, the cover allows for breathability while providing the best water resistance available today. Convenient charge port openings allow for connection to an outlet, and ventilated mesh allow for air flow while charging
                
                Features:
                
                Tough outer shell
                Ultra soft inside
                Grommets for security cabling
                Includes:
                
                1x car cover
                1x storage bag','image' => 'shop-images/6RMERTtFORFg0eNYXGcrSO246wY0s56TxSmZeDwR.webp','created_at' => '2022-12-01 02:44:07','updated_at' => '2022-12-01 02:44:07'),
        array('id' => '29','category_id' => '2','user_id' => '1','type' => 'Wheels and Tires','model' => 'Model X','title' => 'Model X 20" Cyberstream Wheel and Winter Tire Package','price' => '3250','desc' => 'Outfit your Model X with 20" Cyberstream Wheels and Pirelli SCORPION WINTER Tires for the icy months ahead.
                
                Includes:
                
                2x 20X9J ET40 Cyberstream Wheels
                2x 20X10J ET35 Cyberstream Wheels
                2x 265/45/20 Pirelli SCORPION WINTER Tires
                2x 275/45/20 Pirelli SCORPION WINTER Tires
                4x Cyberstream wheel caps
                4x BLE tire pressure sensors
                Note: Compatible with Model X vehicles produced in 2021+. Lug nuts and lug nut covers sold separately. Should you need to purchase an individual wheel or tire, please contact your preferred Tesla Service Center. Once you have completed checkout for this item, please schedule a Service appointment for installation in your Tesla app. Shipping to your preferred Tesla Service Center and installation are included with purchase. For additional questions about scheduling your Service appointment, visit Shop FAQ.','image' => 'shop-images/SWWS7nPBXgmPbtg35Exu3x4SZSxs3xMna2vEZcEu.webp','created_at' => '2022-12-01 02:45:03','updated_at' => '2022-12-01 02:45:03'),
        array('id' => '30','category_id' => '2','user_id' => '1','type' => 'Floor Mats','model' => 'Model X','title' => '2015-2020 | Model X All-Weather Interior Liners','price' => '160','desc' => 'Model X All-Weather Interior Liners are made from thermoplastic elastomer material for ultimate protection and spatial coverage. Unlike traditional floor mats, Model X All-Weather Interior Liners are comprised of vertical walls that ensure maximum protection to the interior carpet and easy cleanup.
                
                100% recyclable and free of cadmium, lead, latex and PVC.','image' => 'shop-images/2s2WEkE4q3sKJmd9TDsZmvrRLr4SxgTR0bv1dZs2.webp','created_at' => '2022-12-01 02:46:40','updated_at' => '2022-12-01 02:46:40'),
        array('id' => '32','category_id' => '2','user_id' => '1','type' => 'Interior','model' => 'Model Y','title' => 'Model Y Illuminated Door Sills','price' => '250','desc' => 'Add a premium touch to your Tesla by accentuating your vehicle’s model name with Model Y Illuminated Door Sills. This elegant addition requires no additional wiring to your vehicle’s electrical system. Each sill is activated by a magnetic switch and powered by a long-lasting battery with LEDs for seamless installation.
                
                Includes:
                
                2x illuminated door sills
                2x magnetic switches & installation templates
                1x pry tool
                1x sills installation indicator
                1x gloves
                2x alcohol wipes
                Model Y Illuminated Door Sills - Installation Manual','image' => 'shop-images/oRr2ZYu6Kahabnhr1LJyd37h5V58meKS5XVLiKVa.webp','created_at' => '2022-12-01 02:52:40','updated_at' => '2022-12-01 02:52:40'),
        array('id' => '31','category_id' => '2','user_id' => '1','type' => 'Keys','model' => 'Model X','title' => 'Model X Key Band','price' => '18','desc' => 'Custom made and available for every model, the Tesla Key Band provides a sleek and convenient key solution to your current key fob. Comprised of a silicone band attached to a metal key ring and finished with a tastefully embossed logo, the key band is a perfect fit for any model.
                
                Note: Compatible with all Model X vehicles. Key fob not included.','image' => 'shop-images/AEmAlK9HnWD73bFPw8YSmhgX7bZYVBYlWUaqNVU0.webp','created_at' => '2022-12-01 02:47:18','updated_at' => '2022-12-01 02:47:18'),
        array('id' => '33','category_id' => '2','user_id' => '1','type' => 'Eksterior','model' => 'Model Y','title' => 'Model Y Tow Package','price' => '1300','desc' => 'Equip your Model Y with a high-strength steel tow bar and 2” hitch receiver capable of towing up to 3,500 pounds on all wheel configurations.
                
                Includes:
                
                1x high-strength steel tow bar with 2" hitch receiver and North America 7-pin standard connector
                1x trailer harness
                1x tow mode software package
                Note: Ball mounts are not included and are dependent on the type of trailer you are towing. Once you have completed checkout for this item, please schedule a Service appointment for installation in your Tesla app. Shipping to your preferred Tesla Service Center and installation are included with purchase. For additional questions about scheduling your Service appointment, visit Shop FAQ.','image' => 'shop-images/IUIhLNLU9Cx5RyV2B1YrFAZ6z9roMdVvwKZXuTZL.webp','created_at' => '2022-12-01 02:54:22','updated_at' => '2022-12-01 02:54:22'),
        array('id' => '34','category_id' => '2','user_id' => '1','type' => 'Wheels and Tires','model' => 'Model Y','title' => 'Model Y 20" Induction Wheel and Pirelli Winter Tire Package','price' => '4500','desc' => 'Model Y 20" Induction Wheel and Pirelli Winter Tire Package provides maximum safety and grip when driving in wet or dry conditions and on icy or snow-covered roads. The winter package guarantees a high level of traction, stability and braking efficiency under 45°F, so you can enjoy wherever you drive with confidence and comfort.
                
                Includes:
                
                4x 20X9.5J ET45 Induction Wheels
                4x 255/40R20 Pirelli WINTER SOTTOZERO 3 Tires
                4x Tesla logo Induction wheel caps
                4x BLE tire pressure sensors
                Note: Should you need to purchase an individual wheel or tire, please contact your closest Tesla Service Center. Once you have completed checkout for this item, please schedule a Service appointment for installation in your Tesla app. Shipping to your preferred Tesla Service Center and installation are included with purchase. For additional questions about scheduling your Service appointment, visit Shop FA','image' => 'shop-images/0IFAibLFxBslJ6WRQPfCkzNvZk03Aefb6WC51X7g.webp','created_at' => '2022-12-01 02:57:33','updated_at' => '2022-12-01 02:57:33'),
        array('id' => '35','category_id' => '2','user_id' => '1','type' => 'Floor Mats','model' => 'Model Y','title' => 'Model Y Carpet Front Trunk Mat','price' => '35','desc' => 'Model Y Carpet Front Trunk Mat offers maximum cargo protection with a thick, durable pile and comes treated for stain and soil resistance. Designed by Tesla\'s Design Studio.
                
                Includes:
                
                1x front trunk carpet mat','image' => 'shop-images/y3ogFWBLrhB66cn73f91oyR4So9CTIoiiPer824o.webp','created_at' => '2022-12-01 02:58:12','updated_at' => '2022-12-01 02:58:12'),
        array('id' => '36','category_id' => '2','user_id' => '1','type' => 'Keys','model' => 'Model Y','title' => 'Model Y Key Band','price' => '18','desc' => 'Custom made and available for every model, the Tesla Key Band provides a sleek and convenient key solution to your current key fob. Comprised of a silicone band attached to a metal key ring and finished with a tastefully embossed logo, the key band is a perfect fit for any model.
                
                Note: Key fob not included.','image' => 'shop-images/pDcZAhUgAZPPYs9r4aE9ne8gRYuBNdObbhD4czFA.webp','created_at' => '2022-12-01 02:58:51','updated_at' => '2022-12-01 02:58:51'),
        array('id' => '39','category_id' => '3','user_id' => '1','type' => 'Tees','model' => 'Men','title' => 'Men\'s Plaid Quarter Mile','price' => '35','desc' => 'The Men\'s Plaid Quarter Mile Tee celebrates the historic quarter mile performance time posted by Model S Plaid on May 11, 2021 at the Famoso Raceway. This tee features our record-setting 9.227 seconds, 151.58 mph time stamp receipt, as well as our signature Plaid flag on the back collar. Made from 100% Peruvian cotton and designed for maximum comfort and style.','image' => 'shop-images/vRx4JPEmhUHcaBD1DfHGvhqIkwrGzuKNIy733g0m.webp','created_at' => '2022-12-01 07:03:33','updated_at' => '2022-12-01 07:03:33'),
        array('id' => '43','category_id' => '1','user_id' => '1','type' => 'At Home','model' => NULL,'title' => 'Cable Organizer','price' => '35','desc' => 'Store your Corded Mobile Connector with the newly redesigned Cable Organizer. This product features a sturdy bracket to keep your cables neatly stowed and a chassis holder to reduce additional wear and tear on your adaptor and outlet.
                
                Includes:
                
                1x cable organizer bracket
                1x chassis holder
                1x installation hardware kit','image' => 'shop-images/ISd4FbEHs4k4PP2iFOraYlsXwN4V7Utj2NmVT2sV.webp','created_at' => '2022-12-01 16:46:11','updated_at' => '2022-12-01 16:46:11'),
        array('id' => '44','category_id' => '1','user_id' => '1','type' => 'Parts','model' => NULL,'title' => 'Wall Connector Glass Faceplate','price' => '75','desc' => 'Replace your glass faceplate with an identical cover. Make Gen 3 Wall Connector look as good as new and stay charged in style with a new faceplate.
                
                Includes:
                
                1x glass faceplate
                2x glass cover fasteners
                To perfectly match your Wall Connector with your vehicle paint color, purchase Wall Connector Color Matched Faceplate.
                
                For installation instructions, visit Replacing Faceplate of Gen 3 Wall Connector.
                
                Note: Compatible with all Gen 3 Wall Connectors.','image' => 'shop-images/rTQUgIAcZXiIwhvZEzsTDl78S9sZS0j06Hx6bH47.webp','created_at' => '2022-12-01 16:48:21','updated_at' => '2022-12-01 16:48:21'),
        array('id' => '45','category_id' => '2','user_id' => '1','type' => 'Interior','model' => 'Model S','title' => '2012-2020 | Model S Illuminated Door Sills','price' => '175','desc' => 'Add a premium touch to your Tesla by accentuating your vehicle\'s model name with Model S Illuminated Door Sills. This elegant addition requires no additional wiring to your vehicle\'s electrical system. Each sill is activated by a magnetic switch and powered by a long-lasting battery with LEDs for seamless installation.
                
                Includes:
                
                2x illuminated door sills
                2x magnetic switches & installation templates
                1x pry tool
                Note: Compatible with Model S vehicles produced in April 2016 - 2020.
                
                Model S Illuminated Door Sills - Installation Manual','image' => 'shop-images/GnZk0Ln88y8VdNsA3tA8LjR5QObJzlF2wYSrVUCn.webp','created_at' => '2022-12-01 16:50:17','updated_at' => '2022-12-01 16:50:17'),
        array('id' => '46','category_id' => '2','user_id' => '1','type' => 'Interior','model' => 'Model S','title' => '2012-2020 | Model S/X Performance Pedal Set','price' => '150','desc' => 'Enhance the style and appearance of your standard Model S or Model X with the Performance Pedal Set. Constructed of aluminum alloy with raised rubber sectioning, this set includes pedals for the accelerator and brake.
                
                Includes:
                
                1x accelerator pedal cover
                1x brake pedal cover
                Note: Compatible with Model S vehicles produced in 2012-2020 and Model X vehicles produced in 2015-2020. Once you have completed checkout for this item, please schedule a Service appointment for installation in your Tesla app. Shipping to your preferred Tesla Service Center and installation are included with purchase. For additional questions about scheduling your Service appointment, visit Shop FAQ.','image' => 'shop-images/wcB0v95Napdl86IM6aDSg0lB3kHOMaPt1Qp6gzN2.webp','created_at' => '2022-12-01 16:51:14','updated_at' => '2022-12-01 16:51:14'),
        array('id' => '47','category_id' => '1','user_id' => '1','type' => 'At Home','model' => NULL,'title' => 'Pedestal for Wall Connector','price' => '425','desc' => 'The Pedestal for Wall Connector is a rugged aluminum post designed for mounting both Gen 3 and Gen 2 Wall Connectors for stand-alone charging. With easy indoor and outdoor installation options, the pedestal is ideal for any driveway, parking lot or property that requires a free-standing structure to support charging equipment. The Pedestal for Wall Connector supports both single and dual mounted configurations for charging one or two Tesla vehicles at the same time.
      
      Includes:
      
      1x pedestal
      4x wire glands for global wiring options
      4x mounting screws for securing Wall Connector to pedestal
      Pedestal installation typically requires trenching and concrete pad to secure pedestal in place. Each installation is unique to the site. Please consult with a local contractor for installation and cost estimate prior to purchasing.
      
      For installation instructions, visit Installing Pedestal for Wall Connector.
      
      Note: Wall Connector(s) and installation are not included. Wall Connectors can be purchased here.','image' => 'shop-images/YrBTGSnkuoA9ax0PwoDxdc9fNz4kmLVUioIcnpQe.webp','created_at' => '2022-12-02 01:34:13','updated_at' => '2022-12-02 01:34:13'),
        array('id' => '48','category_id' => '3','user_id' => '1','type' => 'Sweathshirts and Hoodies','model' => 'Men','title' => 'Chill Pullover Hoodie','price' => '90','desc' => 'Introducing the Tesla Chill Collection. The Chill Pullover Hoodie has a premium, heavyweight exterior and soft fleece interior for comfort in any season. The unisex hoodie features subtle thermoplastic polyurethane Tesla logos across the chest and on the sleeve, a double layer single seam hood and pockets with custom matte zipper pulls. Made from 60% cotton and 40% recycled polyester.','image' => 'shop-images/xvPTESr97hyNeBmymJq8dLxSb6o67wjHyEojm28M.webp','created_at' => '2022-12-02 06:29:52','updated_at' => '2022-12-02 06:29:52'),
        array('id' => '49','category_id' => '3','user_id' => '1','type' => 'Sweathshirts and Hoodies','model' => 'Men','title' => '3D Large Wordmark Pullover Hoodie','price' => '70','desc' => 'The Unisex 3D Large Wordmark Pullover Hoodie features soft fleece and an adjustable, jersey-lined hood for comfort and coverage. Designed in a unisex style, the pullover hoodie includes a tone-on-tone 3D silicone-printed wordmark across the chest.','image' => 'shop-images/BBvIHHyDfaBwiQDptBEr4WwY9hH4ErkDOBMx8zpq.webp','created_at' => '2022-12-02 06:31:16','updated_at' => '2022-12-02 06:31:16'),
        array('id' => '50','category_id' => '3','user_id' => '1','type' => 'Outerwear','model' => 'Men','title' => 'Men\'s Quilted Bomber Jacket','price' => '195','desc' => 'The Men\'s Quilted Bomber Jacket features an elevated, quilted design for warmth and mobility in cold weather seasons. With both comfort and style, the bomber features subtle silicone injected Tesla logos on the right and left sleeves, custom matte metal zipper pulls and a premium double layer rib knit collar. Made from 87% nylon and 13% polyurethane.','image' => 'shop-images/L8AILt65cjtIaAx85oucsR5IqsVBf3rGQzmyQyNr.webp','created_at' => '2022-12-02 06:32:38','updated_at' => '2022-12-02 06:32:38'),
        array('id' => '51','category_id' => '3','user_id' => '1','type' => 'Joggers','model' => 'Men','title' => 'Men\'s Chill Joggers','price' => '85','desc' => 'Introducing the Tesla Chill Collection. The Men\'s Chill Joggers offer a premium, soft fleece interior for a modern fit and comfort in everyday lifestyle. The joggers feature a subtle thermoplastic polyurethane Tesla wordmark on the shin, custom metal aglets and pockets with branded matte zipper pulls. Made from 60% cotton and 40% recycled polyester.','image' => 'shop-images/TCHKlZPTokHV7k5a37bzl2uc5cMLgDWSDAwes09L.webp','created_at' => '2022-12-02 06:36:15','updated_at' => '2022-12-02 06:36:15'),
        array('id' => '52','category_id' => '3','user_id' => '1','type' => 'Hats','model' => 'Men','title' => 'Six Panel Large Wordmark Hat','price' => '35','desc' => 'The Six Panel Large Wordmark Hat has a modern full back silhouette, featuring a 3D Tesla wordmark and an adjustable snapback closure with custom molded accents. The lightweight stretch weave exterior and peached inner face offers a stylish yet comfortable fit for quick drying and added UV protection, while the visor is fully made from recycled plastic bottles. 97% Polyester, 3% Elastane.','image' => 'shop-images/fqZcnC0tNYliqVfET2eOAzfT64iYQ2PiCITOB9le.webp','created_at' => '2022-12-02 06:38:27','updated_at' => '2022-12-02 06:38:27'),
        array('id' => '53','category_id' => '3','user_id' => '1','type' => 'Tees','model' => 'Women','title' => 'Women\'s Puffer Jacket','price' => '175','desc' => 'The Women\'s Cropped Puffer Jacket features a uniquely cropped silhouette for the perfect, modern style while on the go during the cozy season ahead. The puffer features subtle silicone injected Tesla logos below the back collar and on the right sleeve, custom matte metal zipper pulls and a soft, fleece lined collar. Made from 87% nylon and 13% polyurethane.','image' => 'shop-images/32vUXhlGRQNQs3cXfGeKBn5HqJAbdxICfpOOtEad.webp','created_at' => '2022-12-02 06:40:24','updated_at' => '2022-12-02 06:40:24'),
        array('id' => '54','category_id' => '3','user_id' => '1','type' => 'Sweathshirts and Hoodies','model' => 'Women','title' => 'Women\'s Raven Slouchy Crew Sweatshirt','price' => '110','desc' => 'Introducing the Tesla Raven Collection. The Women\'s Raven Slouchy Crew Sweatshirt has a premium, relaxed silhouette made from a sustainable bamboo cotton blend. The slouchy crew features a subtle thermoplastic polyurethane Tesla wordmark on the left sleeve and a french terry interior for a cozy look and feel in every season. Pair it with your Raven Joggers or favorite on the go fit. Made from 70% bamboo and 30% cotton.','image' => 'shop-images/kE0p9JfaMz7TOxTKTgLGKdpo4LrSD8wsKqmrjbYT.webp','created_at' => '2022-12-02 06:45:11','updated_at' => '2022-12-02 06:45:11'),
        array('id' => '55','category_id' => '3','user_id' => '1','type' => 'Outerwear','model' => 'Women','title' => 'Women\'s Corp Jacket','price' => '90','desc' => 'Fully customized and uniquely styled, the Women\'s Corp Jacket features a silicone-printed "T" logo on the left chest and prominent Tesla wordmark across the back.
      
      Features:
      
      Center-front closure with storm flap
      Custom logo "T" zipper pulls
      Elasticized inner cuff
      Adjustable drawstring system at hem','image' => 'shop-images/uZsFYTNMnmMYMuEsCWZEDXC5w8YmA946SBFydKO2.webp','created_at' => '2022-12-02 06:46:57','updated_at' => '2022-12-02 06:46:57'),
        array('id' => '56','category_id' => '4','user_id' => '1','type' => 'Bags','model' => NULL,'title' => 'Mega [back] Pack','price' => '245','desc' => 'Massive storage. Fully integrated.
      
      Our Mega [back] Pack is inspired by our vehicles’ vegan interiors and black-and-white colorways. This collection is made from durable vegan leather with a custom-molded Tesla wordmark and finished with metallic hardware. Includes a number of utility pockets throughout, plus a padded laptop sleeve and side water bottle pocket designed to fit your On the Road drinkware. Complete with an easy-carry handle and adjustable shoulder straps.
      
      Premium vegan leather exterior. 100% sueded polyester lining.
      
      Includes:
      
      1x Mega [back] Pack
      1x Tesla-branded satin dust cover
      Note: Measures 16x12x6in (40x30x15cm)
      
      Want to keep things compact? Check out our Mega [mini] Pack.','image' => 'shop-images/amC3C83My3FSgawLfID1KXivD9TzyLTOWQQeeS2O.jpg','created_at' => '2022-12-03 09:34:14','updated_at' => '2022-12-03 09:34:14')
      );
      
        foreach ($shops as $s) {
            Shop::create([
                'id' => $s['id'],
                'category_id' => $s['category_id'],
                'user_id' => 1,
                'type' => $s['type'],
                'model' => $s['model'],
                'title' => $s['title'],
                'price' => $s['price'],
                'desc' => $s['desc'],
                'image' => $s['image'],
                'created_at' => $s['created_at'],
                'updated_at' => $s['updated_at']
            ]);
        }
    
    }
}
