<?php

namespace Database\Seeders;

use App\Enums\category_id_enum;
use App\Models\Product;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class ProductSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Product::insert([
            // CPU
            [
                'name' => 'AMD Ryzen™ 7 7800X3D Gaming Processor',
                'description' => 'The AMD Ryzen 7 7800X3D processor, built using Raphael manufacturing technology, is designed for powerful home and office computers, featuring 8 cores with a base clock speed of 4.2 GHz that can boost up to 5 GHz for demanding tasks. Its 96 MB L3 cache and 8 MB L2 cache enhance data access speed, while its advanced 5 nm manufacturing process places it among the most modern processors. Additionally, it includes integrated graphics and is compatible with motherboards using the AMD AM5 socket.',
                'price' => 490,
                'category_id' => 'CPU',
                'stock' => 10,
                'image' => 'images/default.png',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'name' => 'AMD Ryzen™ 7 5800X3D Gaming Processor',
                'description' => 'The AMD Ryzen 7 5800X3D CPU, built with Vermeer architecture, is designed for high-performance computers, featuring 8 cores and a base frequency of 3.4 GHz, which provides sufficient power for running programs. It automatically boosts up to 4.5 GHz when handling more demanding tasks. The processor has a 96 MB L3 cache and a 4 MB L2 cache to balance speed differences. Manufactured using a 7 nm process, it ranks among the best chips available and is recommended for motherboards with an AMD AM4 socket.',
                'price' => 300,
                'category_id' => 'CPU',
                'stock' => 2,
                'image' => 'images/default.png',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'name' => 'Intel® Core™ i5-12400F Processor',
                'description' => 'If you want to enjoy outstanding performance during gaming, take advantage of the all-new Intel Alder Lake architecture! This is the 12th generation of Intel Core chips, which is significantly more refined than its predecessor. The Intel Core i5-12400F CPU uses high-performance cores running at high frequencies, allowing you to elevate your performance to new heights that you never imagined before.',
                'price' => 110,
                'category_id' => 'CPU',
                'stock' => 4,
                'image' => 'images/default.png',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'name' => 'AMD Ryzen™ 7 9700X',
                'description' => 'The AMD Ryzen 7 9700X is an excellent choice for those seeking a high-performance processor. It features 8 cores and 16 threads, enabling efficient parallel task execution. With a base clock of 3.8 GHz, it can boost up to 5.5 GHz, ensuring smooth performance for even the most demanding applications and games.',
                'price' => 340,
                'category_id' => 'CPU',
                'stock' => 22,
                'image' => 'images/default.png',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            // GPU
            [
                'name' => 'ROG Strix GeForce RTX® 4090 OC Edition 24GB GDDR6X',
                'description' =>"If you're looking for a modern, professional graphics card suitable for 3D design software and video editing, the 24 GB and 21200 MHz ASUS graphics card might catch your attention. With a 384-bit memory bus width and a 2235 MHz base clock, it delivers excellent performance for demanding 3D graphics tasks. It connects to the motherboard via a PCI Express x16 4.0 interface and offers 4 outputs for display connections, specifically DisplayPort 1.4a and HDMI 2.1. Its active cooling ensures low operating temperatures even under high performance.",
                'price' =>'2940',
                'category_id' =>'GPU',
                'stock' =>'4',
                'image' => 'images/default.png',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'name' => 'XFX Speedster SWFT 210 Radeon™ RX 7800 XT Core Edition',
                'description' =>'Experience  incredible performance, visuals, and efficiency when gaming and streaming  with the AMD Radeon™ RX 7700 XT and 7800 XT graphics cards, powered by the  AMD RDNA™ 3 architecture. Immerse yourself in next-generation desktop  experiences on some of the most advanced high refresh rate displays with up  to 16GB of GDDR6 memory, new frame generation technologies, advanced  raytracing, AI accelerators, AV1 encoding, and support for the  latest DisplayPort™ 2.1 technology. The Radeon™ RX 7700 XT  and 7800 XT delivers an incredible high refresh 1440p gaming & streaming  experience, with additional video memory to step into 4K.',
                'price' =>'560',
                'category_id' =>'GPU',
                'stock' =>'7',
                'image' => 'images/default.png',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'name' => 'ASUS Dual GeForce RTX™ 4060 OC Edition 8GB GDDR6',
                'description' =>"Imagine trying to play the latest games on the highest settings, but your old graphics card can't handle the load. The frame rate stutters, and the graphics are blurry and pixelated. With the ASUS GeForce RTX 4060 8GB Dual EVO OC Edition graphics card, these problems are a thing of the past. This card delivers incredible performance, allowing you to enjoy the latest games with stunning graphics. Thanks to its quiet cooling system, you can focus on gaming without worrying about noise. Its compact design makes it compatible with most PCs, making it an ideal choice for those who prefer smaller setups.",
                'price' =>'300',
                'category_id' =>'GPU',
                'stock' =>'5',
                'image' => 'images/default.png',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'name' => 'SAPPHIRE AMD Radeon RX 7900 XT NITRO+ 20GB GDDR6',
                'description' =>'The Ultra High Performance Conductive Polymer Aluminum Capacitor has a small PCB foot print but high volumetric capacitance that makes 20-phase power possible on the RX 7900 series graphics card. The capacitor offers stable capacitance at a high frequency and temperature with very low signal noise, ensuring the stability and reliability of the product.',
                'price' =>'790',
                'category_id' =>'GPU',
                'stock' =>'3',
                'image' => 'images/default.png',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            // Motherboard
            [
                'name' => 'ASUS ROG STRIX B650E-F GAMING WIFI',
                'description' =>'The ASUS motherboard is built on the AMD B650E chipset and features an AMD AM5 socket for the CPU. It traditionally includes a sound card capable of handling 8 channels. A network module is also available, providing fast Wi-Fi connectivity. To install this motherboard, an ATX-format computer case is required. It is considered a larger motherboard, making it ideal for powerful gaming PCs equipped with multiple graphics cards and strong cooling systems.',
                'price' =>'240',
                'category_id' =>'Motherboard',
                'stock' =>'11',
                'image' => 'images/default.png',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'name' => 'ASUS TUF Gaming B760-PLUS WIFI',
                'description' =>'The TUF GAMING B760-PLUS WIFI D4 combines all the essential features of the latest Intel® processors with gaming-specific functions and renowned durability. Designed with military-grade components, reinforced power solutions, and extensive cooling, this motherboard delivers rock-solid performance that exceeds expectations for marathon gaming sessions. TUF GAMING motherboards undergo rigorous reliability testing to ensure they can handle even the toughest situations that other products may not withstand. The embossed nameplate and geometric pattern on this model reflect the stability and reliability characteristic of the TUF GAMING series.',
                'price' =>'190',
                'category_id' =>'Motherboard',
                'stock' =>'2',
                'image' => 'images/default.png',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'name' => 'GIGABYTE Z790 AORUS ELITE AX',
                'description' =>'The GIGABYTE motherboard is built on the Intel Z790 chipset and features an Intel LGA1700 socket for the CPU. It traditionally includes a sound card capable of controlling 8 channels. A network connectivity module is also available, offering a fast Wi-Fi connection option. To install this model, an ATX-format computer case is required. It is considered a larger motherboard, making it ideal for powerful gaming PCs equipped with numerous graphics cards.',
                'price' =>'250',
                'category_id' =>'Motherboard',
                'stock' =>'5',
                'image' => 'images/default.png',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'name' => 'ASRock B650E TAICHI LITE',
                'description' =>'Taichi represents the philosophical state of undifferentiated absolute and infinite potential. A motherboard that fulfills every task – with style! Become like water. Shapeless, formless, versatile for any situation.',
                'price' =>'340',
                'category_id' =>'Motherboard',
                'stock' =>'10',
                'image' => 'images/default.png',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            // RAM
            [
                'name' => 'Kingston FURY Beast 32GB (2x16GB) DDR4 3200MHz',
                'description' => "The Kingston FURY Beast 32GB (2x16GB) DDR4 3200MHz KF432C16BB1K2/32 memory module is the perfect choice for those looking to boost their computer's performance and stability. This memory kit includes two 16GB modules, providing a total capacity of 32GB, making it ideal for more demanding tasks such as gaming, video editing, or 3D rendering.",
                'price' => '65',
                'category_id' => 'RAM',
                'stock' => '10',
                'image' => 'images/default.png',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'name' => 'G.SKILL Trident Z5 Neo RGB 32GB (2x16GB) DDR5 6000MHz',
                'description' => 'The Trident Z5 Neo RGB DDR5 memory is designed for exceptionally high overclocking performance on DDR5-compatible AMD platforms. With AMD EXPO overclocking technology, it allows for easy memory overclocking on supported AMD platforms, making the Trident Z5 Neo RGB series an ideal choice for building high-performance systems.',
                'price' => '135',
                'category_id' => 'RAM',
                'stock' => '20',
                'image' => 'images/default.png',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            // PSU
            [
                'name' => 'Seasonic FOCUS GX-850W Gold',
                'description' => 'The recently updated FOCUS PX and GX series is the successor to the FOCUS PLUS series, which became an immediate success in the power supply market after its launch in 2017. In 2019, Seasonic engineers made improvements to the popular series by removing the built-in capacitors from the included cables. Along with the slight name change, the power supply housing and packaging were also redesigned to align with the OneSeasonic initiative concept.',
                'price' => '130',
                'category_id' => 'PSU',
                'stock' => '6',
                'image' => 'images/default.png',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'name' => 'ASUS TUF Gaming 1200W Gold',
                'description' => 'The ASUS TUF Gaming 1200W Gold power supply is a high-performance and reliable solution designed specifically for gamers and demanding users. This 80+ Gold certified power supply offers high efficiency and stability, reducing energy loss and improving system performance. One of its most notable features is the 1200W power output, providing enough energy for even the most demanding gaming setups and workstations.',
                'price' => '220',
                'category_id' => 'PSU',
                'stock' => '11',
                'image' => 'images/default.png',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            // Cooling
            [
                'name' => 'ARCTIC Liquid Freezer III 360',
                'description' => 'The Liquid Freezer III is ready to use right out of the box, thanks to the pre-installed push configuration cooling fans. The fan cables are integrated into the hose sleeve, meaning only one cable needs to be connected to the motherboard. The included MX-6 thermal paste ensures everything needed for a quick and easy installation is provided.',
                'price' => '80',
                'category_id' => 'Cooling',
                'stock' => '33',
                'image' => 'images/default.png',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'name' => 'Noctua NH-D15',
                'description' => 'Built on the basis of the legendary NH-D14 and carrying on its quest for ultimate quiet cooling performance, Noctua’s flagship model NH-D15 is an elite-class dual tower cooler for the highest demands. Its expanded heatpipe layout and two premium grade NF-A15 140mm fans with PWM support for automatic speed control allow it to further improve the NH-D14’s award-winning efficiency. Topped off with the trusted, pro-grade SecuFirm2™ multi-socket mounting system, Noctua’s proven NT-H1 thermal compound and full 6 years manufacturer’s warranty, the NH-D15 forms a complete premium quality solution that represents a deluxe choice for overclockers and silent-enthusiasts alike.',
                'price' => '110',
                'category_id' =>'Cooling',
                'stock' => '7',
                'image' => 'images/default.png',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            // Case
            [
                'name' => 'Fractal Design NORTH charc TG',
                'description' => 'North reimagines the gaming PC, introducing natural materials and bespoke details to make gaming a stylish addition to the living space. Fusing design and airflow engineering, the case features fine-patterned mesh ventilation and an open front with real walnut or oak panels. The design is complemented by sleek brass or steel details and an integrated tab for easy access to the top of the case. Inside, North offers an intuitive interior layout and generous compatibility.',
                'price' => '160',
                'category_id' =>'Case',
                'stock' => '10',
                'image' => 'images/default.png',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'name' => 'NZXT H6 FLOW RGB ALL Black',
                'description' => "Experience top-tier performance and vibrant RGB colors in this innovative, compact NZXT case. Prioritizing GPU cooling, the H6 Flow's panoramic glass showcases the interior while freeing up space for improved airflow.",
                'price' => '115',
                'category_id' =>'Case',
                'stock' => '3',
                'image' => 'images/default.png',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            // Storage
            [
                'name' => 'Kingston NV2 1TB M.2 PCIe NVMe',
                'description' => "Building a new PC or upgrading your laptop or desktop? In that case, you'll appreciate the modern Kingston NV2 M.2 drive, which supports the desired PCIe 4.0 interface. This provides high transfer speeds, positively impacting system boot times, loading complex applications or games, and making general work on your PC or laptop much more convenient and faster. Additionally, this type of drive has no moving parts, minimizing failure rates and the risk of data loss.",
                'price' => '55',
                'category_id' =>'Storage',
                'stock' => '12',
                'image' => 'images/default.png',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'name' => 'Samsung 990 PRO 1TB M.2 NVMe',
                'description' => "Achieve the maximum performance of PCIe® 4.0! Enjoy long-lasting, unbeatable speed! The built-in controller's intelligent thermal management ensures excellent energy efficiency while maintaining incredible speed and performance, keeping you at the top.",
                'price' => '110',
                'category_id' =>'Storage',
                'stock' => '5',
                'image' => 'images/default.png',
                'created_at' => now(),
                'updated_at' => now(),
            ],
        ]);

    }
}