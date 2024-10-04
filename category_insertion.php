<?php require('connection.inc.php');

/* $sql1="INSERT INTO category(category_name) VALUES 
    ('Processor'),
    ('Mother Board'),
    ('Graphic Card'),
    ('RAM'),
    ('Storage'),
    ('Cabinate'),
    ('Moniter'),
    ('Keyboard'),
    ('Mouse')";
    if(mysqli_query($conn,$sql1))
    {
       echo "Succesfully inserted";
    }
    else{
        echo "Error".mysqli_connect_error($conn);
    }
    $sql2="INSERT INTO company(company_name) VALUES 
    ('Intel'),
    ('AMD'),
    ('Asus'),
    ('Corsair'),
    ('Crucial'),
    ('HP'),
    ('Cooler Master'),
    ('LG'),
    ('Logitech'),
    ('Chiptronex')";
    if(mysqli_query($conn,$sql2))
    {
       echo "Succesfully inserted";
    }
    else{
        echo "Error".mysqli_connect_error($conn);
    }*/
/*
$sql3 = "INSERT INTO products (category_id,company_id,product_name,mrp,saleing_price,short_desc,long_desc,stock,product_status)
        VALUES 
        (1,201,'Ryson 5 5600X',420000,24824,
        'AMD 5000 Series Ryson 5 5600X  Desktop Processor 6 cores 12 threads ',
        '6 Cores and 12 Threads, 35 MB Chache .Base clock 3.7Ghz, Max boost clock speed 4.6Ghz .
        Memory support DDR4 3200Mhz,Memory chanel 2,TDP 65W PCI Express Genaration PCIe Gen 4  ',10,1),

        (1,201,'AMD Ryzen 5 5600G Desktop Processor ',
        34500,25499,
        'AMD Ryzen 5 5600G Desktop Processor (6-core/12-thread, 19MB Cache, up to 4.4 GHz max Boost) with Radeon Graphics',
        '6 Cores & 12 Threads, 19 MB Cache
        Base Clock: 3.9 GHz, Max Boost Clock: up to 4.4 GHz
        Memory Support: DDR4 3200 MHz, Memory Channels: 2, TDP: 65W
        Compatible with Motherboards based on 500 series chipset, Socket AM4
        Graphics: AMD Radeon Graphics, Included Heatsink Fan: Wraith Stealth',10,1), 
        
        (1,201,'AMD Ryzen 5 3600X Desktop Processor (100-100000022BOX)',34000,27990,
        'AMD Ryzen 5 3600X Desktop Processor 6 cores up to 4.4GHz 35MB Cache AM4 Socket (100-100000022BOX)',
        '6 Cores & 12 Threads. Max Temps 95°C
        Base Clock: 3.8GHz, Max Boost Clock: up to 4.4GHz, 35MB Cache, TDP: 95W
        System Memory Specification: 3200MHz, System Memory Type: DDR4, Memory Channels: 2
        Socket: AM4, Motherboard Compatibility: AMD 300, 400, 500 serles chipset based motherboards
        Graphics: Separate Graphics Card is required, Heatsink Fan: Wraith Spire',10,1),

        (1,201,'AMD Ryzen 5 3600 Desktop Processor 6 Cores',27000,18989,
        'AMD Ryzen 5 3600 Desktop Processor 6 Cores up to 4.2 GHz 35MB Cache AM4 Socket (100-000000031)',
        '6 Cores & 12 Threads
        Base Clock: 3.6GHz, Max Boost Clock: up to 4.2GHz, 35MB Cache, TDP: 95W. Platform : Boxed Processor
        System Memory Specification: 3200MHz, System Memory Type: DDR4, Memory Channels: 2
        Socket: AM4, Motherboard Compatibility: AMD 300, 400, 500 serles chipset based motherboards
        Graphics: Separate Graphics Card is required, Heatsink Fan: Wraith Stealth',10,1),
        
        (1,201,'AMD 5000 Series Ryzen 7 5800X ',62000,35390,
        'AMD 5000 Series Ryzen 7 5800X Desktop Processor 8 cores 16 Threads 36 MB Cache 3.8 GHz Upto 4.7 GHz',
        '8 Cores & 16 Threads, 36 MB Cache
        Base Clock: 3.8 GHz, Max Boost Clock: up to 4.7 GHz
        Memory Support: DDR4 3200MHz, Memory Channels: 2, TDP: 105W, PCI Express Generation : PCIe Gen 4
        Compatible with Motherboards based on 500 Series Chipset, Socket AM4
        Separate Graphic Card Required; Included Heatsink Fan: No',10,1),
        
        (1,201,'AMD Ryzen 7 3700X Desktop Processor 8 Cores',49440,28490,
        'AMD Ryzen 7 3700X Desktop Processor 8 Cores up to 4.4GHz 36MB Cache AM4 Socket (100-100000071BOX)',
        '8 Cores & 16 Threads. Max Temps : 95°C
        Base Clock: 3.6GHz, Max Boost Clock: up to 4.4GHz, 36MB Cache, TDP: 65W
        System Memory Specification: 3200MHz, System Memory Type: DDR4, Memory Channels: 2
        Socket: AM4, Motherboard Compatibility: AMD 300, 400, 500 serles chipset based motherboards
        Graphics: Separate Graphics Card is required, Heatsink Fan: Wraith PRISM with RGB LED',10,1),
        
        (1,201,'AMD 5000 Series Ryzen 9 5900X Desktop Processor 12 Cores ',79900,53880,
        'AMD 5000 Series Ryzen 9 5900X Desktop Processor 12 Cores 24 Threads 70 MB Cache 3.7 GHz up to 4.8 GHz AM4 Socket 500 Series chipset (100-100000061WOF)',
        '12 Cores & 24 Threads, 70MB Cache
        Base Clock: 3.7 GHz, Max Boost Clock: up to 4.8 GHz
        Memory Support: DDR4 3200MHz, Memory Channels: 2, TDP: 105 W, PCI Express Generation : PCIe Gen 4
        Compatible with Motherboards based on 500 Series Chipset, Socket AM4
        Separate Graphic Card Required, Included Heatsink Fan: No',10,1),
        
        (1,102,'AMD 3rd Gen Ryzen 9 3900X Desktop Processor 12 Cores',60990,47490,
        'AMD 3rd Gen Ryzen 9 3900X Desktop Processor 12 Cores up to 4.6GHz 70MB Cache AM4 Socket (100-100000023BOX)',
        '12 Cores & 24 Threads
        Base Clock: 3.8GHz, Max Boost Clock: up to 4.6GHz, 70MB Cache, TDP: 105W
        System Memory Specification: 3200MHz, System Memory Type: DDR4, Memory Channels: 2
        Socket: AM4, Motherboard Compatibility: AMD 300, 400,500 serles chipset based motherboards
        Graphics: Separate Graphics Card is required, Heatsink Fan: Wraith PRISM with RGB LED, Warranty: 3 Years
        12 Cores & 24 Threads
        Base Clock: 3.8GHz, Max Boost Clock: up to 4.6GHz, 70MB Cache, TDP: 105W
        System Memory Specification: 3200MHz, System Memory Type: DDR4, Memory Channels: 2
        Socket: AM4, Motherboard Compatibility: AMD 300, 400, 500 serles chipset based motherboards
        Graphics: Separate Graphics Card is required, Heatsink Fan: Wraith PRISM with RGB LED',10,1),
        
        (1,102,'AMD RYZEN 9 3950X 3rd Generation Desktop Processor',106350,79990,
        'AMD RYZEN 9 3950X 3rd Generation Desktop Processor Upto 4.7 GHZ / 72 MB Cache (100-100000051WOF)',
        '16 Cores & 32 Threads
         Base Clock: 3.5GHz, Max Boost Clock: up to 4.7GHz, 72MB Cache, TDP: 105W
        System Memory Specification: 3200MHz, System Memory Type: DDR4, Memory Channels: 2
        Socket: AM4, Motherboard Compatibility: AMD 400, 500 serles chipset based motherboards
        Graphics: Separate Graphics Card is required, Thermal solution Not included',10,1),
        
        (1,102,'AMD 3000 Series Ryzen 9 3900XT Desktop Processor 12 cores',70000,49990,
        'AMD 3000 Series Ryzen 9 3900XT Desktop Processor 12 cores 24 Threads 70MB Cache 3.8GHz Upto 4.7GHz AM4 Socket 400 & 500 Series Chipset (100-100000277WOF)',
        '12 Cores & 24 Threads, 70MB Cache
        Base Clock: 3.8GHz, Max Boost Clock: up to 4.7GHz.OS Support: Windows 10 - 64-Bit Edition,RHEL x86 64-Bit,Ubuntu x86 64-Bit
        Memory Support: DDR4 3200MHz, Memory Channels: 2, TDP: 105W, PCI Express Generation : PCIe Gen 4
        Compatible with Motherboards based on 400 & 500 Series Chipset, Socket AM4
        Separate Graphic Card Required; Included Heatsink Fan: No',10,1),
        
        
        (1,200,'Intel Core i5-9400F Processor (9M Cache, up to 4.10 GHz)',24000,18248,
        'Intel Core™ i5-9400F Processor (9M Cache, up to 4.10 GHz)',
        'Intel Core i5-9400F Processor (9M Cache, up to 4.10 GHz). Instruction Set Extensions Intel SSE4.1, Intel SSE4.2, Intel AVX2. Max Memory Size (dependent on memory type) 128 GB
        Intel Core i5-9400F Processor (9M Cache, up to 4.10 GHz)9th Generation Intel Core i5 ProcessorsProducts formerly Coffee LakeDesktopLithography14 nmProcessor Base Frequency2.90 GHzBus Speed8 GT/sTDP65 WSockets SupportedFCLGA1151',10,1),
         
        (1,200,'Intel Core i5-10400 Processor ',
        29990,19354,
        'Intel ® Core i5-10400 Processor (12M Cache, up to 4.30 GHz)',
        'Engineered using the latest technology i5-10400
        Intel Core i5-10400 Processor (12M Cache, up to 4.30 GHz)
        Intel Core i5-10400 Processor (12M Cache, up to 4.30 GHz)10th Generation Intel Core i5 ProcessorsProducts formerly Comet LakeProcessor Base Frequency2.90 GHzTDP65 WIntel UHD Graphics 630350 MHz
        It scores high on the aspect of functionality . BX8070110400',10,1),
        (1,200,'Intel Core i5-11400 Desktop Processor 6 Cores',39999,19499,
        'Intel Core i5-11400 Desktop Processor 6 Cores up to 4.4 GHz LGA1200 (Intel 500 Series & Select 400 Series Chipset) 65W',
        'Compatible with Intel 500 series & select Intel 400 series chipset based motherboards
        Intel Optane Memory Support
        PCIe Gen 4.0 Support
        Thermal solution included',10,1),
        
        (1,200,'Intel Core i5-11600KF Desktop Processor 6 ',30000,22740,
        'Intel Core i5-11600KF Desktop Processor 6 Cores up to 4.9 GHz Unlocked LGA1200 (Intel 500 Series & Select 400 Series Chipset) 125W',
        'Compatible with Intel 500 series & select Intel 400 series chipset based motherboards
        Intel Optane Memory Support
        PCIe Gen 4.0 Support
        No thermal solution included',10,1),
        
        (1,200,'Intel Core i7-9700K Processor (12M Cache, up to 4.90 GHz)',50000,24999,
        'Intel Core i7-9700K Processor (12M Cache, up to 4.90 GHz)',
        'Intel Core i7-9700K Processor (12M Cache, up to 4.90 GHz)
        9th Generation Intel Core i7 ProcessorsProducts formerly Coffee LakeDesktopi7-9700K14 nm3.60 GHz4.90 GHz12 MB Intel Smart Cache8 GT/s4.90 GHz95 WIntel UHD Graphics 630350 MHz',10,1),
        
        (1,200,'Intel Core i7 9700 Desktop 9th Gen Processor 8 Cores',35000,30199,
        'Intel Core i7 9700 Desktop 9th Gen Processor 8 Cores up to 4.7 GHz LGA1151 Intel UHD Graphics 630 (BX80684I79700)',
        'Compatible with Intel 300 Series chipset based motherboards
        8 Cores /8 Threads ; Thermal Cooling solution included in the box
        Processor Graphics : Intel UHD Graphics 630
        DirectX Support 12
        Intel Virtualization Technology for Directed I/O (VT-d) : VT-x',10,1),
        
        (1,200,'Intel Core i7-10700K Desktop Processor 8 Cores ',50000,32591,
        'Intel Core i7-10700K Desktop Processor 8 Cores up to 5.1 GHz Unlocked LGA1200 (Intel 400 Series chipset) 125W',
        '8 Cores / 16 Threads
        Socket type LGA 1200
        Up to 5.1 GHz unlocked
        Compatible with Intel 400 series chipset based motherboards.Bus Speed: 8 GT/s
        Intel Turbo Boost Max Technology 3.0 support
        Intel Optane Memory support
        Graphics Base Frequency: 350 MHz',10,1),
        
        (1,200,'Intel Core i7-11700 Desktop Processor 8 Cores ',55000,36499,
        'Intel Core i7-11700 Desktop Processor 8 Cores up to 4.9 GHz LGA1200 (Intel 500 Series & Select 400 Series Chipset) 65W',
        'Compatible with Intel 500 series & select Intel 400 series chipset based motherboards
        Intel Turbo Boost Max Technology 3.0 Support
        Intel Optane Memory Support
        PCIe Gen 4.0 Support',10,1),
        
        (1,200,'Intel Core I7-10700K 10th Generation Desktop Processor',54999,33998,
        'Intel Core I7-10700K 10th Generation Desktop Processor 16M Cache, up to 5.10 GHz LGA 1200 (Marvel Avengers Edition Packaging)',
        'Integrated Intel UHD Graphics 630 chipset
        LGA 1200 Socket Compatible
        Supports upto 128GB of dual-channel 2933 MHz DDR4 RAM
        Intel Turbo Boost Max Technology 3.0 support
        8 Cores & 16 Threads and 5.1 GHz Maximum Turbo Frequency',10,1),
        
        (1,200,'Intel Core i9-9900KF Desktop Processor',69999,45151,
        'Intel Core i9-9900KF Desktop Processor',
        '8 Cores/ 16 Threads
        3.60 GHz up to 5.00 GHz Max Turbo Frequency/ 16 MB Cache
        Compatible only with Motherboards based on Intel 300 Series Chipsets
        Discrete GPU  No Processor Graphic
        Intel Optane Memory Supported; Maximum temperature allowed at the processor: 100°C',10,1)";*/



/*
if (mysqli_query($conn, $sql3)) {
    echo "Succesfully inserted";
} else {
    echo "Error".mysqli_connect_error($conn);
}*/

// $sql4 = "INSERT INTO products (category_id,company_id,product_name,mrp,saleing_price,short_desc,long_desc,stock,product_status) VALUES
// (2,202,'ASUS Prime B560-PLUS LGA1200 ',21000,15749,
//         'ASUS Prime B560-PLUS LGA1200 (Intel 11th/10th Gen) ATX Motherboard (PCIe 4.0, 2xM.2 Slots, 8 Power Stages, 1 Gb LAN, DisplayPort, HDMI, USB 3.2 Gen 1 Type-C, USB 3.2 Gen 2, Thunderbolt 4 Support)',
//         'Intel LGA 1200 socket: Ready for 11th Gen Intel Core processors
// Comprehensive cooling: VRM heatsink, flexible M.2 heatsink, PCH heatsink, hybrid fan headers and Fan Xpert 2+Ultrafast connectivity: PCIe 4.0, Intel 1 Gb Ethernet, rear USB 3.1 Gen 2 Type-C and Thunderbolt 4 header support',10,1),

// (2,202,'ASUS TUF Gaming Z690-PLUS WiFi D4 LGA 1700',30000,26700,
//         'ASUS TUF Gaming Z690-PLUS WiFi D4 LGA 1700(12th Gen Intel Core Processors) ATX Motherboard with PCIe 5.0, DDR4 RAM, Four M.2 Slots, 2.5Gb Ethernet, USB-C, Thunderbolt 4 Support and RGB Lighting, Black',
//         'The board is built with the PCIe 5.0 Ready supporting 4 x DIMM, up to 128GB DDR4 5333MHz(OC) of memory and Intel Turbo Boost Technology to push your experience to its peak.
// Equipped with next-gen technology of WIFI 6, PCIe 5.0, Realtek 2.5Gb Ethernet, USB 3.2 Gen 2x2 Type-C, front panel USB 3.2 Gen 2 Type-C, Four M.2 slots(PCIe 4.0) and Thunderbolt 4 header support.',20,1),

// (2,202,'ASUS TUF Gaming B560-Plus WiFi',24500,15000,
//         'ASUS TUF Gaming B560-Plus WiFi(Intel Socket LGA1200 for 11th Gen Intel Core & 10th Gen Intel Core, Pentium Gold and Celeron) ATX motherboard 8+1 DrMOS Power stages PCIe 4.0 support DDR4 5000 (OC) Dual M.2 slot with flexible heatsink HDMI 2.0 DisplayPort 1.4 SATA 6Gbps 2.5Gb Ethernet Front USB Type-C, USB 3.2 Gen2 Type-C Thunderbolt4 support and Aura Sync RGB lighting',
//         'Capable of taking in a max of 128GB of Dual channel DDR4 Memory Technology RAM across 4 x DDR4 DIMM slots which makes you PC faster and enhances your gaming experience. Comes with built-in RGB illumination which features onboard RGB headers and an addressable RGB header that allow motherboard to be connected to compatible LED devices such as strip, CPU fans, coolers, chassis and so on.
// Equipped with a total of 2 x USB 3.2 Gen 2 ports (2 x Type-A), 7 x USB 3.2 Gen Gen 1 ports (2 x Type-A + 1x Type-C , USB Type-C), 9 x USB 2.0 ports (3 x Type-A), 1 x DisplayPort, 1 x HDMI port, 1 x ASUS Wi-Fi Module, 1 x Realtek 2.5Gb Ethernet port, 5 x Audio jacks, 1 x Optical S/PDIF out port and Thunderbolt 4 support.',20,1),

// (2,202,'ASUS ROG Strix B550-F Gaming WiFi 6',30000,26700,
//         'ASUS ROG Strix B550-F Gaming WiFi 6 (AMD AM4 Socket for 3rd Gen AMD Ryzen) ATX Gaming Motherboard with PCIe 4.0, teamed Power Stages, BIOS Flashback, Dual M.2 SATA 6 Gbps USB & Aura Sync',
//         'AMD AM4 Socket and PCIe 4. 0: The perfect pairing for 3rd Gen AMD Ryzen CPUs
// Robust Power Design: 12+2 DrMOS power stages with high-quality alloy chokes and durable capacitors to provide reliable power for the latest high-core-count AMD CPUsBest Gaming Connectivity: Supports HDMI 2. 1 (4K@60HZ) and DisplayPort 1. 2 output, plus dual M. 2 slots (NVMe SSD)—one with PCIe 4. 0 x4 connectivity, USB 3. 2 Gen 2 Type-C port and Thunderbolt 3 header',20,1),

// (2,202,'ASUS Rog Maximus Z690 Apex Motherboard',83000,75000,
//         'Suitable For Desktop
// Intel Z690
// Data Rate DDR5
// Maximum RAM Capacity 64 GB
// Form Factor: ATX',
//         '1 Motherboard, ARGB RGB Extension Cable, RGB Extension Cable, 6 SATA 6Gb/s Cables, 3 in 1 Thermistor Cables Pack, ROG DIMM.2 with Heatsink, ROG DIMM.2 with Heatsink, M.2 Pad for ROG DIMM.2, M.2 Screw Package for ROG DIMM.2, PCIe 5.0 M.2 Card, PCIe 5.0 M.2 Card, M.2 Screw Package for PCIe 5.0 M.2 Card, ROG True Voltician, 4 Cables for ROG True Voltician, Wi-Fi Moving Antennas, Q-Connector, 2 M.2 Q-Latch Packages for M.2 Backplate, ROG Graphics Card Holder, ROG Key Chain, ROG Stickers, ROG Thank You Card, USB Drive with Utilities and Drivers, User Manual',20,1),


//         (2,202,'ASUS Prime H610M-E D4 Intel H610',10500,7999,
//         'ASUS Prime H610M-E D4 Intel H610 (LGA 1700) mic-ATX motherboard with DDR4, PCIe 4.0, dual M.2 slots, Realtek 1 Gb Ethernet, DisplayPort, HDMI, D-Sub, USB 3.2 Gen 1 ports, SATA 6 Gbps, COM header, RGB header',
//         'The board is built with PCIe 4.0 Ready supporting 2 x DIMM, up to 64GB DDR4 3200MHz(OC) of memory and Intel Turbo Boost Technology to push your experience to its peak.
// Equipped with the next-gen Turbo boost max technology of PCIe 4.0, Two M.2 slots(PCIe 4.0), Realtek 1Gb Ethernet, Two USB 3.2 Gen 1 Type-A, Two USB 2.0 Type-A, Front panel USB 3.2 Gen 1, Two USB 2.0, Four SATA 6Gb/s, HDMI, DP, D-Sub support.',20,1),

// (2,202,'ASUS Prime H610M-E D4 Intel H610',10500,7999,
//         'ASUS Prime H610M-E D4 Intel H610 (LGA 1700) mic-ATX motherboard with DDR4, PCIe 4.0, dual M.2 slots, Realtek 1 Gb Ethernet, DisplayPort, HDMI, D-Sub, USB 3.2 Gen 1 ports, SATA 6 Gbps, COM header, RGB header',
//         'The board is built with PCIe 4.0 Ready supporting 2 x DIMM, up to 64GB DDR4 3200MHz(OC) of memory and Intel Turbo Boost Technology to push your experience to its peak.
// Equipped with the next-gen Turbo boost max technology of PCIe 4.0, Two M.2 slots(PCIe 4.0), Realtek 1Gb Ethernet, Two USB 3.2 Gen 1 Type-A, Two USB 2.0 Type-A, Front panel USB 3.2 Gen 1, Two USB 2.0, Four SATA 6Gb/s, HDMI, DP, D-Sub support.',20,1)
// ";
// if (!mysqli_query($conn, $sql4)) {

//     echo "Error" . mysqli_connect_error($conn);
// } else {
//     echo "Succesfully inserted";
// }


// $sql5 = "INSERT INTO products (category_id,company_id,product_name,mrp,saleing_price,short_desc,long_desc,stock,product_status) VALUES
// (3,211,'Gigabyte Geforce GTX 1050 Ti 4GB Graphic Card (GV-N105TD5-4GD)',33600,22775,
//        'Gigabyte Geforce GTX 1050 Ti 4GB Graphic Card (GV-N105TD5-4GD)',
//         'This GIGABYTE Geforce GTX 1050 2GB OC graphic card is made for the gaming enthusiasts. Equipped with one of the advanced architecture, get ready to play some of the most graphic intensive games in HD quality.Resolution	8k
//         Graphics RAM Type	GDDR5
// Graphics Card Ram Size	4 GB
// Graphics Card Interface	PCI-E
// Number of HDMI Ports	1
// Wattage	300 Watts
// Hardware Platform	PC',20,1),

// (3,202,'ASUS Cerberus GeForce GTX 1050 Ti 4GB OC Edition ',21800,21800,
// 'Roll over image to zoom in
// ASUS Cerberus GeForce GTX 1050 Ti 4GB OC Edition GDDR5 Gaming Graphics Card (Cerberus-GTX1050Ti-O4G)',
// '1455 MHz Boost Clock in OC mode for outstanding performance and gaming experience.
// Extensively tested with the latest chart-topping game titles like League of Legends, Overwatch and PlayerUnknowns Battlegrounds.Dual fan design provides 2X greater air flow.
// Boost performance with GPU Tweak II, banish lag with wtfast, and stream in real time via with XSplit Gamecaster.',6,1),

// (3,211,'Gigabyte GeForce GTX 1660 OC 6G Gaming Graphic Card GV-N1660OC-6GD',57779,42799,
// 'Features
// Powered by GeForce® GTX 1660
// Integrated with 6GB GDDR5 192-bit memory interface
// WINDFORCE 2X Cooling System with alternate spinning fans
// 90 mm unique blade fans
// Protection back plate
// Core Clock
// 1830 MHz (Reference Card is 1785 MHz)',
// 'Core Clock	1830 MHz (Reference Card is 1785 MHz)
// CUDA® Cores	1408
// Memory Clock	8002 MHz
// Memory Size	6 GB
// Memory Type	GDDR5
// Memory Bus	192 bit
// Memory Bandwidth (GB/sec)	192 GB/s
// Card Bus	PCI-E 3.0 x 16
// Digital max resolution	7680×4320@60Hz
// Multi-view	4
// Card size	L=224 W=121 H=40 mm
// PCB Form	ATX
// DirectX	12
// OpenGL	4.5
// Recommended PSU	450W
// Power Connectors	8 Pin*1
// Output	DisplayPort 1.4 *3 (Max Resolution: 4096×2160 @60 Hz)
// HDMI 2.0b *1 (Max Resolution: 7680×4320 @60 Hz)',5,1),

// (3,211,'Gigabyte GTX 1650 D6 OC 4GB low Profile Graphics Card GV-N1656OC-4GD',37699,2899,
// 'Powered by GeForce® GTX 1650
// NVIDIA Turing™ architecture and GeForce Experience™
// Integrated with 4GB GDDR6 128bit memory interface
// 90mm unique blade fan
// 172 mm compact card size',
// 'CHIPSETNVIDIA GEFORCE
// GPUGTX 1650
// PCI EXPRESS3.0
// GPU BOOST CLOCK1635 MHz
// MEMORY CLOCK12 Gbps
// MEMORY SIZE4 GB
// MEMORY INTERFACE128-bit
// MEMORY TYPEGDDR6
// DIRECT X SUPPORT12
// OPEN GL4.6
// PORTS
// HDMI : Yes 1 x HDMI 2.0b
// DisplayPort : Yes 1 x DisplayPort 1.4
// DVI-Port: Yes 1 x DVI-D Port
// RESOLUTION7680×4320
// COOLERSingle-Fan
// DUAL-LINK DVI SUPPORTEDYes
// SOFTWAREDrivers and Software
// PACKAGE CONTENTSGraphics Card, User Manual
// GPU CORE (CUDA CORE)896
// SLI SUPPORTEDNo
// POWER CONNECTORS1 x 6-pin',5,1),

// (3,210,'Zotac Gaming Geforce GTX 1650 OC 4GB GDDR6 Graphics Card',34000,26599,
// '896 Cuda Cores
// 4GB GDDR6 Memory
// Engine Clock Boost: 1620 MHz',
// 'Item Height	5.5 Centimeters
// Item Width	22 Centimeters
// Product Dimensions	28 x 22 x 5.5 cm; 640 Grams
// Batteries	1 A batteries required.
// Item model number	ZT-T16520F-10L
// Memory Clock Speed	1620 MHz
// Graphics Coprocessor	NVIDIA GeForce GTX 1650
// Graphics Chipset Brand	NVIDIA
// Graphics RAM Type	GDDR6
// Graphics Card Ram Size	4 GB
// Graphics Card Interface	PCI-E
// Wattage	50
// Are Batteries Included	No
// Lithium Battery Energy Content	2.6 British Thermal Units (BTUs)
// Lithium Battery Weight	0.5 Milligrams
// Number Of Lithium Ion Cells	7
// Number of Lithium Metal Cells 7',8,1),

// (3,202,'ASUS TUF Gaming NVIDIA GeForce GTX 1650 OC Edition Graphics Card ',37430,3390,
// 'ASUS TUF Gaming NVIDIA GeForce GTX 1650 OC Edition Graphics Card (PCIe 3.0, 4GB GDDR6 Memory, HDMI, DisplayPort, DVI-D, 1x 6-pin Power Connector, IP5X Dust Resistance, Space-Grade Lubricant)',
// 'The ASUS TUF Gaming GeForce GTX 1650 is built with the breakthrough graphics performance of the award-winning NVIDIA Turing architecture to supercharge your favorite games.
// Ultra-fast GDDR6 with over 50% more memory bandwidth for high-speed gaming.
// Auto Extreme Manufacturing uses automation to enhance reliability.
// TUF compatibility testing ensures TUF Gaming and TUF Gaming alliance components work together flawlessly.',8,1)
// ";
// if (!mysqli_query($conn, $sql5)) {

//         echo "Error" . mysqli_connect_error($conn);
//     } else {
//         echo "Succesfully inserted";
//     }


// Ram Insertion

// $sql6 = "INSERT INTO products (category_id,company_id,product_name,mrp,saleing_price,short_desc,long_desc,stock,product_status) VALUES
// (4,203,'Corsair Vengeance LPX 8GB (1x8GB) DDR4 3200MHZ C16 Desktop RAM (Black)',6975,3020,
// 'XMP 2.0 SUPPORT: One setting is all it takes to automatically adjust to the fastest safe speed for your VENGEANCE LPX. Tested Voltage 1.35V',
// 'ALUMINUM HEAT SPREADER: The unique design of the VENGEANCE LPX heat spreader optimally pulls heat away from the ICs and into your system’s cooling path, so you can push it harder.
// DESIGNED FOR HIGH-PERFORMANCE OVERCLOCKING: Each VENGEANCE LPX module is built from an custom performance PCB and highly-screened memory ICs.',30,1),

// (4,203,'CORSAIR Vengeance LPX DDR4 4 GB PC (CMK4GX4M1A2400C16 (1 x 4GB) 2400MHz)  (Black)',4410,2595,
// 'Data rate: DDR4
// Compatible Device: PC',
// '
// Brand
// CORSAIR
// Memory Type
// 4 GB (1X4) 2400 MHz DDR4
// Compatible Device
// PC
// Model ID
// CMK4GX4M1A2400C16 (1 x 4GB) 2400MHz
// Series
// Vengeance LPX
// Memory
// Memory Clock
// 2400 MHz
// Power
// Test Voltage
// 1.2 V',30,1),

// (4,203,'CORSAIR Vengeance RGB RS DDR4 64 GB',67500,30000,
// 'Sales Package
// 2 x 32GB Stick
// CORSAIR Vengeance RGB RS DDR4 64 GB (Dual Channel) PC DRAM (VENGEANCE RGB RS 64GB (2 x 32GB) DDR4 DRAM 3200MHz C16 Memory Kit)  (Black)',
// 'Memory Type
// 64 GB (64) 3200 MHz DDR4 DIMM
// Memory Standard
// PC4-25600 (3200MHz)
// Compatible Device
// PC
// Pins
// 288
// Model ID
// VENGEANCE RGB RS 64GB (2 x 32GB) DDR4 DRAM 3200MHz C16 Memory Kit
// Series
// Vengeance RGB RS
// Memory
// Memory Clock
// 3200 MHz
// CAS Latency
// 16-20-20-38
// Memory Configuration
// Dual Channel
// Power
// Test Voltage
// 1.35 V',20,1),

// (4,203,'CORSAIR Vengeance DDR4 16 GB PC (CMK16GX4M1A2400C16)  (Black)',
// 12600,6995,
// 'Data rate: DDR4
// Compatible Device: PC',
// '
// Brand
// CORSAIR
// Memory Type
// 16 GB (1 x 16) 2400 MHz DDR4 DDR4 SDRAM
// Compatible Device
// PC
// Model ID
// CMK16GX4M1A2400C16
// Series
// Vengeance
// Memory
// Frequency
// 2400 MHz (Specified), 2400 MHz (Test)
// Memory Configuration
// NA
// Power
// Specified Voltage
// 1.2 V
// Test Voltage
// 1.2 V',20,1),

// (4,204,'Crucial Basics 16GB DDR4 1.2v 2666Mhz',8999,
// 4789,'Crucial Basics 16GB DDR4 1.2v 2666Mhz CL19 SODIMM RAM Memory Module for Laptops and Notebooks, Green',
// 'The DDR4 RAM is rated at 1.2V and has a latency of CL19. It can operate at a max of 2666MT/s.
// A memory upgrade should enable you to load programs faster, improve responsiveness of your laptop and offer smooth multitasking and running data-intensive applications.
// You will also see great improvements in even simpler, yet important process of working with Web-browsers and spread sheets.',20,1),

// (4,204,'Crucial RAM 16GB DDR4 2666 MHz ',8999,
// 5199,'Crucial RAM 16GB DDR4 2666 MHz CL19 Laptop Memory CT16G4SFRA266',
// 'Speeds up to 2666 MT/s and faster data rates are expected to be available as DDR4 technology matures
// Increase bandwidth by up to 30%. PC speed - PC4-21300
// Reduce power consumption by up to 40% and extend battery life
// Faster burst access speeds for improved sequential data throughout
// Optimized for next generation processors and platforms',20,1),

// (3,204,'Crucial 16GB Single DDR4 3200 ',11000,
// 5809,'Crucial 16GB Single DDR4 3200 MT/s (PC4-25600) CL22 DR x8 Unbuffered DIMM 288-Pin Memory - CT16G4DFD832A, Green',
// 'Speeds up to 3200 MT/s and faster data rates are expected to be available as DDR4 technology matures
// Increase bandwidth by up to 32%
// Reduce power consumption by up to 40%
// Faster bursts access speeds for improved sequential data throughout
// Optimized for next generation processors and platforms',20,1),


// (4,204,'Crucial Ballistix RGB 3200 MHz DDR4 ',13800,
// 5549,'Crucial Ballistix RGB 3200 MHz DDR4 DRAM Desktop Gaming Memory 16GB CL16 BL16G32C16U4RL (Red), 40 Grams',
// '16 GB DDR4 DRAM
// Memory Speed-3200MT/s
// DIMM Desktop Gaming RAM
// XMP 2.0 support for automatic overclocking, or run at JEDEC default profile
// each module Compatible with ASUS Aura, MSI Mystic Light, Gigabyte AORUS Graphics Engine, and more
// Modern aluminum heat spreader available in multiple colors to match your system build or style',20,1),

// (4,204,'Crucial Ballistix 3200 MHz DDR4 DRAM Desktop Gaming Memory 8GB CL16 BL8G32C16U4B (Black) ',3800,
// 2799,'8GB DDR4 3200MT/s ,CL16  Unbuffered DIMM 288pin.
// Engineered for the latest AMD and Intel platforms.',
// 'XMP 2. 0 support for automatic overclocking or run at JEDEC default profile.
// Modern aluminum heat spreader available in multiple colors to match your system build or style.
// High-performance gaming-grade memory for workstations and laptops.',20,1)";

// if (!mysqli_query($conn, $sql6)) {

//             echo "Error" . mysqli_connect_error($conn);
//         } else {
//             echo "Succesfully inserted";
//         }

// Storage

// $sql7 = "INSERT INTO products (category_id,company_id,product_name,mrp,saleing_price,short_desc,long_desc,stock,product_status) VALUES
// (5,212,'Seagate BarraCuda 1 TB Internal Hard Drive HDD ',6500,3049,
// 'Seagate BarraCuda 1 TB Internal Hard Drive HDD – 8.89 cm (3.5 Inch) SATA 6 Gb/s 7200 RPM 64 MB Cache for Computer Desktop PC (ST1000DM010)',
// 'Store all your games, music, movies and more with up to 1TB of storage
// SATA 6Gb/s interface optimizes burst performance; 64MB Cache ; Multi-Tier Caching
// Seagate Secure models for hardware-based data security
// Instant Secure Erase allows safe and easy drive retirement',20,1),

// (5,212,'Seagate Barracuda 2 TB Internal Hard Drive HDD',8000,4289,
// 'Seagate Barracuda 2 TB Internal Hard Drive HDD – 3.5 Inch SATA 6 Gb/s 5400 RPM 256 MB Cache for Computer Desktop PC (ST2000DM005)',
// 'Advanced Power modes help save energy without sacrificing performance.Performance : Multi-Tier Caching technology
// SATA 6Gb/s interface optimizes burst performance
// Capacities up to 8TB for desktops, BarraCuda leads the market with the widest range of storage options available',20,1),

// (5,212,'Seagate Barracuda 1 TB Internal Hard Drive HDD – 2.5 Inch',7500,3649,
// 'Seagate Barracuda 1 TB Internal Hard Drive HDD – 2.5 Inch (6.3 cm) SATA 6 Gb/s 5400 RPM 128 MB Cache for PC Laptop (ST1000LM048)',
// 'Thinnest and lightest 2.5-inch hard drive
// Broadest 2.5-inch hard drive portfolio
// Standard SATA 6Gb/s interface for easy integration into existing mobile/laptop designs
// Warranty: 2years, TOLL Free Number : 0008004401392
// Spin Speed: 5400 rpm ; Interface: SATA ; Cache Memory: 128 MB ; Non-recoverable Read Error: 1 per 10E14 ; Reliability: 600000 (Load/Unload Cycles) ; Form Factor: 2.5 Inch',20,1),

// (5,212,'Seagate Barracuda Q5 SSD 1TB up to 2400 MB/s',18000,8550,
// 'Seagate Barracuda Q5 SSD 1TB up to 2400 MB/s - Internal M.2 NVMe PCIe Gen3 ×4, 3D QLC for Desktop or Laptop, 1-Year Rescue Services (ZP1000CV3A001)',
// 'FAST: NVMe SSD with speeds up to 2.5x faster than SATA SSDs and up to 50x faster than traditional HDDs; sequential read/write speeds up to 2,400/1,800 MB/s
// RESPONSIVE: Upgrade your PC for more efficient downloads, installs and multitasking
// VERSATILE: Slim M.2 2280 form factor and multiple capacity options up to 2 TB make for easy upgrades',20,1),

// (5,212,'Seagate Barracuda 2TB Internal Hard Drive HDD – 8.89 cm (2.5 Inch)',14500,5999,
// 'Seagate Barracuda 2TB Internal Hard Drive HDD – 8.89 cm (2.5 Inch) SATA 6 Gb/s 5400 RPM 128MB Cache for PC Laptop (ST2000LM015)',
// 'The BarraCuda mobile internal hard drive is the go-to upgrade for on-the-go computing thanks to big capacity in a small form factor
// Tackle projects, manoeuvre applications, and multitask like a pro with a wide range of available capacities
// Features specialised caching technology for optimised data flow and faster loading',20,1),

// (5,213,'Western Digital WD10EZEX 1TB Internal Hard Drive for Desktop (Blue)',4300,3199,
// 'Upgrade and backup with ease
// Future-proof storage
// Improve PC performance
// 1TB capacity
// 3.5-inch internal hard drive
// 64MB buffer size
// 7200 RPM Class',
// 'Boost your PC storage with WD Blue drives, the brand designed just for desktop and all-in-one PCs. The WD Blue family now delivers data storage capacities up to 6 TB.Pair a larger capacity drive with an SSD to give your desktop a performance and storage boost. The SSD maximizes speed of data access, while the WD Blue drive stores up to 6 TB of movies, games, files, applications and more.With better technology comes bigger storage needs. Digital cameras that record ultra-high definition video at 4K resolution and 30 frames per second require a ton of storage. Handling all that media is a snap with our 6 TB drive.',20,1),


// (5,213,'Western Digital 2TB WD Blue PC Hard Drive',4300,3199,
// 'Western Digital 2TB WD Blue PC Hard Drive - 7200 RPM Class, SATA 6 Gb/s, 256 MB Cache, 3.5 - WD20EZBX',
// 'Reliable everyday computing
// Western Digital quality and reliability
// Free Acronis True Image WD Edition cloning software
// Massive capacity up to 6TB',20,1),

// (5,213,'
// Roll over image to zoom in
// Western Digital Purple 2TB SATA Internal Surveillance Hard Drive (WD20PURZ)',17500,4610,
// 'Engineered specifically for surveillance security systems
// Supports up to 180 TB per year work load rate
// Prioritized write-operations for maximized surveillance performance',
// 'Support for more than eight bays
// Tuned for write-intensive, low bit-rate, high stream-count applications typical to most surveillance applications
// TLER and ATA streaming support',20,1),

// (5,213,'Western Digital WD Green 480 GB 2.5 inch ',7200,4097,
// 'Western Digital WD Green 480 GB 2.5 inch SATA III Internal Solid State Drive (WDS480G2G0A)',
// 'SLC (single-level cell) caching boosts write performance to quickly perform everyday tasks
// With sequential read speeds up to 545 MB/s quickly boot your system, launch apps and open files.
// Available in 2.5”/7mm cased and M.2 2280 form factors to accommodate most PCs.',20,1),

// (5,213,'Western Digital WD Blue 2 TB cm 6.35 cm (2.5 inch) SATA III Internal Solid State Drive (WDS200T2B0A)',28000,18290,
// 'High capacity with enhanced reliability and superior performance for high end computing
// Sequential read speeds up to 560MB/s and sequential write speeds up to 530MB/s.',
// 'Sequential read speeds up to 560MB/s and sequential write speeds up to 530MB/s.
// An industry-leading 1.75M hours mean time to failure (MTTF) and up to 500 terabytes written (TBW) for enhanced reliability.
// Available in 2.5”/7mm cased and M.2 2280 form factors to accommodate most PCs. WD F.I.T. Lab certification for compatibility with a wide range of computers.',20,1)
// ";


// if (!mysqli_query($conn, $sql7)) {

//                 echo "Error" . mysqli_connect_error($conn);
//             } else {
//                 echo "Succesfully inserted";
//             }

// $sql8 = "INSERT INTO products (category_id,company_id,product_name,mrp,saleing_price,short_desc,long_desc,stock,product_status) VALUES
// (6,209,'CHIPTRONEX OMG RGB Mid Tower ATX Gaming Cabinet RGB Strip Tempered Glass USB 3.0 one Preinstalled 120mm RGB Fan',3999,2890,
// 'Motherboard Capatability - ATX, Micro ATX and Mini ITX
// The case comes with front ARGB strip sync with rear one 120mm ARGB fan','It has 4mm thick edge to edge tempered glass on side panel which give the case a unique outlook and various options to show off your build inside.
// It has one USB3.0, two USB2.0,and HD audio on top
// It support 2 x 3.5 HDD, 2 x 2.5 SSD and no ODD',20,1),
// (6,209,'CHIPTRONEX MX5 RGB Mid Tower ATX Gaming Cabinet RGB Strip Tempered Glass USB 3.0 one Preinstalled 120mm RGB Fan',3999,2895,
// 'Motherboard Capatability - ATX, Micro ATX and Mini ITX
// The case comes with front ARGB strip sync with rear one 120mm ARGB fan
// It has 4mm thick edge to edge tempered glass on side panel which give the case a unique outlook and various options to show off your build inside.',
// 'It has one USB3.0, two USB2.0,and HD audio on top
// It support 2 x 3.5 HDD, 2 x 2.5 SSD and no ODD
// Brand	CHIPTRONEX
// Manufacturer	CHIPTRONEX, CHIPTRONEX PRIVATE LIMITED
// Model	MX5 RGB
// Product Dimensions	38.5 x 19.2 x 42.5 cm; 5.26 Kilograms
// Item model number	MX5 RGB
// Batteries Included	No
// Batteries Required	No
// Material	Tempered Glass
// Manufacturer	CHIPTRONEX
// Country of Origin	China
// Item Weight	5 kg 260 g',20,1),

// (6,209,'CHIPTRONEX Thunderstorm X3 RGB Mid Tower ATX Gaming Cabinet Preinstalled Front one 200mm ARGB Fan and Rear one 120mm ARGB Fan Tempered Glass USB3.0',3999,2895,
// 'The case comes with one 200mm ARGB fan on front and one 120mm ARGB fan on rear
// The RGB color modes on fans can be controlled by 3 pin RGB header with motherboard software and with dedicated RGB control button on top',
// 'It has 4mm thick edge to edge tempered glass on side panel which give the case a unique outlook and various options to show off your build inside.
// Motherboard support ATX,Micro ATX and Mini ITX
// It has one USB3.0, two USB2.0, RGB control button and HD audio on top
// It support 2 x 3.5 HDD, 2 x 2.5 SSD and no ODD
// Maximum VGA card length is 345mm and Maximum CPU cooler Height is 160mm',20,1),


// (6,209,'CHIPTRONEX Viper RGB Mid Tower ATX Gaming Cabinet case Tempered Glass 4',3999,2895,
// 'CHIPTRONEX Viper RGB Mid Tower ATX Gaming Cabinet case Tempered Glass 4 preinstalled ARGB Fans Motherboard Sync USB 3.0 with Remote Control (Case Without SMPS)',
// 'Motherboard support - ATX, miniatx, micro ITX
// 4 x 120 mm preinstalled argb fans
// Tempered glass panel on side panel
// Rgb control with motherboard sync and remote control
// It supports 2 x 3.5 HDD , 2 x 2.5 SSD',20,1),

// (6,209,'Chiptronex Thunderstorm X2 RGB Mid Tower ATX Cabinet with 1 x 120 mm ARGB Fans and Dual ARGB Strip',3999,2895,
// 'The case comes with one 120mm ARGB fan and ARGB strip on front and one 120mm ARGB fan on rear
// The RGB color modes on fans and strip can be controlled by 3 pin RGB header with motherboard software and with dedicated RGB control button on top',
// 'It has 4mm thick edge to edge tempered glass on side panel which give the case a unique outlook and various options to show off your build inside.
// Motherboard support ATX,Micro ATX and Mini ITX
// It has one USB3.0, two USB2.0, RGB control button and HD audio on top
// It support 2 x 3.5 HDD, 2 x 2.5 SSD and no ODD
// Maximum VGA card length is 345mm and Maximum CPU cooler Height is 160mm',20,1),

// (6,209,'CHIPTRONEX ZX1000 RGB Mid Tower ATX Gamimg Cabinet case Tempered Glass 3 preinstalled Automatic RGB Fans and USB 3.0 (Case Without SMPS)',3999,2895,
// 'The case comes with three 120mm Automatic RGB fans on front panel
// Motherboard support ATX,Micro ATX and Mini ITX',
// 'It has 4mm thick edge to edge tempered glass on side panel which give the case a unique outlook and various options to show off your build inside.
// It has one USB3.0, two USB2.0 and HD audio on top
// It support 3 x 3.5 HDD, 3 x 2.5 SSD and no ODD
// Maximum VGA card length is 315mm and Maximum CPU cooler Height is 162mm',20,1),

// (6,206,'Cooler Master MasterBox TD500 Mesh Triple ARGB Mid Tower Gaming Cabinet with Dual 360mm Radiator Support and Crystalline Tempered Glass',10999,8799,
// 'Polygonal Mesh – Fine Polygonal Mesh features a three-dimensional contour and is also capable of simultaneously providing high airflow and dust filtration.
// Crystalline Tempered Glass – A crystalline design spans the edges of the tempered glass side panel, precision engineered for strength as well as aesthetics.
// ',
// 'Triple ARGB Fans – Three addressable RGB fans flood the Polygonal Mesh front panel with lighting while providing considerable airflow to the system.
// Dual 360mm Radiator Support – For enthusiast-grade cooling, two 360mm radiators are supported on the top and front panel to keep the most extreme systems cool.
// Room For Upgrades – Support for up to a 410mm graphics card, a 165mm CPU cooler, and up to a 180mm PSU in length provides room for upgrades to stay ahead of the game.
// Motherboard Compatibility – Mini-ITX, Micro-ATX, ATX,',20,1),

// (6,206,'Cooler Master MasterBox K501L RGB V2 Mid Tower Gaming Case with Pre-Installed RGB Fan, PSU Shroud and Tempered Glass Side Panel',5799,4549,
// 'Made for gamers, the K501L comes with RGB fan at front, illuminated power button and a unique angled slat design that’s a testament to its gamer core.
// Demanding gaming systems will run cool thanks to the plethora of cooling options – 360mm AIO compatibility, support for up to seven 120mm fans and an engineered airflow path.',
// 'Supports all kind of gaming components – clearance of 410mm for Graphics card, 165mm for CPU cooler, and 180mm for PSU offering room for a powerful gaming build.
// An edge-to-edge tempered glass side panel allows you to exhibit your system in its full glory
// K501L RGB V2 has USB3.0 Type A x 1, USB2.0 x 1 and has Motherboard support for Mini-ITX, Micro-ATX, ATX form-factors.',20,1),

// (6,206,'Cooler Master MasterBox MB520 RGB Steel/Plastic/Tempered Glass ATX Mid Tower Computer Case (Black)',7699,6499,
// 'Dark mirror front panel : Shade light through a transparent, tinted front panel
// Performance Intake : Large intakes on each side of the front panel let the system breathe easy
// RGB LED Fans And Lighting Control : Three 120mm RGB LED fans in front are pre-installed to create an amazing lighting effect; One RGB controller is included in the accessory pack; If your motherboard does not support the RGB control function, you can connect the RESET button and control the RGB lighting directly from the I/O panel',
// 'Excellent Thermal Performance : Optimized airflow due to the large intakes on each side of the front panel; Additional ventilation on the top panel adds thermal support
// Fan and Radiator Support :Front: Three 120mm or two 140mm fans and up to a 360mm radiator with a maximum thickness of 50mm without fans; Top: Two 120mm or two 140mm fans and supports a 120mm or a 240mm radiator./Rear: One 120mm fan or radiator. All to ensure you dont have to compromise on performance',20,1),

// (6,202,'Corsair 4000X Desktop Case - Black',17800,9999,
// 'Combining stylish tempered glass, customizable RGB lighting, innovative cable management and concentrated airflow, choose the 4000X RGB for a unique high-performance PC.
// Show off your components and RGB lighting with tempered glass side and front panels, built with dedicated front ventilation channels for ample airflow',
// 'Fully control and synchronize the RGB lighting for up to six fans with the included iCUE Lighting Node CORE and CORSAIR iCUE software.
// A spacious interior fits up to 6x 120mm or 4x 140mm cooling fans, along with multiple radiators including 360mm in front and 280mm in the roof (dependent on RAM height).Tech SpecsFeatures and BenefitsSearch TermsCORSAIR iCUE 4000X RGBSKU Sheets2
// Put modern connections within easy reach with a front I/O panel including a USB 3.1 Type-C Port, USB 3.0 port, and a combination audio/microphone jack',20,1)

// ";

// if (!mysqli_query($conn, $sql8)) {

//     echo "Error" . mysqli_error($conn);
// } else {
//     echo "Succesfully inserted";
// }


// $sql9 = "INSERT INTO products (category_id,company_id,product_name,mrp,saleing_price,short_desc,long_desc,stock,product_status) VALUES

// (7,207,'LG 60 cm/24 inches Full HD IPS 1920 x 1080 Pixels LCD Monitor, Inbuilt Speaker, HDMI x 2, VGA Port, 75 Hz Refresh Rate, AMD Freesync, 3 Side Borderless Slim Design - 24ML600S-W (White)',
// 18000,14799,
// '
// Specific Uses For Product	Gaming
// Refresh Rate	75 Hz
// Brand	LG
// Screen Size	23.8 Inches
// Screen Surface 	Matte',
// '24 inch Full HD - Color Calibrated IPS Monitor (178/178 Degree Viewing Angle)
// Sound: Inbuilt 5w Dual Channel Speaker with Maxx Audio
// Ports: Dual HDMI, D-Sub , Headphone Out, Audio In
// 3 Side Virtually Borderless Screen Design
// Gaming Features: 1ms MBR, 75 Hz, Radeon FreeSync, DAS Mode, Black Stablizer',20,1),

// (7,207,'LG 22 inch (55cm) Full HD (1920 x 1080) Slim IPS Panel Monitor, HDMI x 2 & VGA Port, 75 Hz, AMD Freesync, Color Calibrated, Made in India - 22MK600M-B.BTR (Black), Small',
// 14000,11999,
// '
// Specific Uses For Product	Education, Business
// Refresh Rate	75 Hz
// Brand	LG
// Screen Size	54.6 Centimetres
// Screen Surface 	Matte',
// 'Display: 22 inch (54.61 cm) Full HD (1920 X 1080) Borderless IPS Panel
// Connectivity: HDMI x 2 , VGA, Headphone Out
// Color Calibrated Screen for accurate Color Reproduction
// Connectivity: HDMI x 2 , D-Sub, Headphone Out
// Gaming Features: AMD Freesync,Black Stablizer, Dynamic Action Sync, Cross Hair',20,1),

// (7,207,'LG Full HD 69 cm (27 Inch) IPS Monitor 3 Side Borderless Design - Dual HDMI & VGA Port - Reader Mode and Flicker Free Screen (Work & Education) - 27ML600',
// 22000,17971,'Anti Glare Screen, Built-in Speakers, Blue Light Filter, IPS Screen with HDR 10, Wall Mountable, Thin Bezel, Tilt Adjustment, Flicker-Free',
// '27 inch Full HD - Color Calibrated IPS Monitor (178/178 Degree Viewing Angle)
// Inbuilt 5w Dual Channel Speaker with Maxx Audio
// Ports: Dual HDMI, D-Sub , Headphone Out, Audio In
// 3 Side Virtually Borderless Screen Design
// Gaming Features: 1ms MBR, 75 Hz, Radeon FreeSync, DAS Mode, Black Stablizer
// Wall Mount option with 100 x 100 VESA Compatible',20,1),


// (7,207,'LG 60 cm (24 inches) IPS Monitor - Full HD, with VGA, HDMI, Audio Out Ports, AMD Freesync, 75 Hz, Made in India - 24MP400 (Black), Small',
// 16500,12730,
// '
// Specific Uses For Product	Education, Photo Editing, Business
// Refresh Rate	75 Hz
// Brand	LG
// Screen Size	60.4 Centimetres
// Screen Surface	M',
// 'Display: 24 inch (60.4 cm) Full HD (1920 X 1080) IPS Panel, Anti Glare
// Connectivity: VGA Port, HDMI Port, Headphone Port
// Gaming Features: AMD Freesync , Motion Blur Reduction, Black Stablizer, Dynamic Action Sync
// Stand: Tilt Stand and VESA 75 x 75 Wall Mount',20,1),

// (7,207,'LG 22 inch (55cm) IPS Monitor - Full HD, IPS Panel with VGA, HDMI, DVI, Audio Out Ports - 22MP68VQ',
// 14250,11851,
// 'Specific Uses For Product	Gaming
// Refresh Rate	60 Hz
// Brand	LG
// Screen Size	22 Inches
// Special Feature	Flicker-Free',
// 'Screen Size: 22 inch (54.61 cm) Full HD (1920 X 1080) Borderless IPS Panel. Input : 100-240Vac, 50/60Hz
// Connectivity Port: 1 VGA Port, 1 HDMI Port, 1 DVI Port, 1 Audio-Out Port, 1 Headphone Port
// Aspect Ratio: 16:9, Brightness (Typical): 250 cd/m², Consumption( Normal On(EPA)): 13.7W
// Refresh Rate: 60 Hz, Response Time: 5 ms. Viewing Angle: 178 degree horizontal 178 degree vertical
// Enjoy Smoother Game Play
// Wall Mount: Yes
// Flicker Free Technology: Yes',20,1),

// (7,207,'LG 60 cm (24 inches) IPS Monitor - Full HD, with VGA, HDMI, Audio Out Ports, AMD Freesync, 75 Hz, Made in India - 24MP400 (Black), Small',
// 16550,12730,
// 'Specific Uses For Product	Education, Photo Editing, Business
// Refresh Rate 75 Hz
// Brand	LG
// Screen Size	60.4 Centimetres
// Screen Surface	Matte',
// 'Display: 24 inch (60.4 cm) Full HD (1920 X 1080) IPS Panel, Anti Glare
// Connectivity: VGA Port, HDMI Port, Headphone Port
// Gaming Features: AMD Freesync , Motion Blur Reduction, Black Stablizer, Dynamic Action Sync
// Stand: Tilt Stand and VESA 75 x 75 Wall Mount',20,1),

// (7,207,'LG Ultra-Gear 24 inches 1920 x 1080 Pixels 144Hz, Native 1ms Full HD LCD Gaming Monitor with Radeon Free-sync TN Panel with Display Port, HDMI, Height Adjust Stand - 24GL650F (Black)',
// 26000,16999,
// '
// Specific Uses For Product	Education, Programming, Gaming
// Refresh Rate	144 Hz
// Brand	LG
// Screen Size	59.8 Centimetres
// Screen Surface 	Matte',
// 'Gaming: 144Hz Refresh Rate, 1ms Native Response time, AMD Freesync
// Display: 24 (59.8 cm) Full HD Wide Angle (170/160) TN Panel Monitor, 300 nits Brightness
// Connectivity: HDMI x 2 , Display Port, Headphone Out
// Stand: Height Adjustable Stand, Tilt, Pivot VESA Wall Mount (100 x 100 mm)
// Other Gaming Features: Black Stablizer, Dynamic Action Sync, Cross Hair, On Screen Control',20,1),

// (7,207,'LG Ultragear 69 cm (27-inch) IPS FHD, G-Sync Compatible, HDR 10, Gaming Monitor with Display Port, HDMI x 2, Height Adjust & Pivot Stand, 144Hz, 1ms - 27GL650F (Black)',
// 32000,22499,
// 'G-Sync Compatible 1ms, 144 Hz, IPS Screen with HDR 10, Height Adjustment; Anti Glare Screen; Pivot Adjustment; Thin Bezel; Tilt Adjustment; Flicker-Free; Wall Mountable',
// 'Nvidia Certified G-Sync Compatible 144 Hz, 1ms Gaming Monitor
// 27 Inch Full HD IPS Screen (sRGB 99%) with HDR 10, 400 nits Brightness
// Ports: Dual HDMI, Display Port, Headphone Out
// Height Adjust, Pivot (Landscape & Portait), Tilt (+5, -15 deg) Stand
// Wall Mount option with 100 x 100 VESA Compatible
// 3 Year Comprehensive Parts & Labor ',20,1),

// (7,207,'LG Ultragear 27 240Hz, 1ms, G-Sync Compatible, HDR 10, IPS Display Gaming Monitor, Height Adjust, Pivot Stand, Display Port, HDMI Port - 27GN750',
// 34580,25499,
// '
// Specific Uses For Product	Gaming
// Refresh Rate	240 Hz
// Brand	LG
// Screen Size	27 Inches
// Screen Surface 	Matte',
// '27 inch UltraGear Gaming Monitor - G-Sync Compatible, 240Hz Refresh Rate, 1ms Response Time
// Full HD IPS Screen with HDR 10 - 400 nits Brightness, sRGB 99%
// Ports: Display Port, HDMI x 2, Headphone Out, USB (1 Up 2 Down)
// 3 Side Virtually Borderless Screen Design
// Heigh Adjustable, Titl & Pivot Stand - Wall Mount (VESA 100 x 100)
// 3 Year Comprehensive Parts & Labor ',20,1),

// (7,207,'LG UltraWide 73 cm (29 inch) 21:9 WFHD (2560 x 1080) IPS Display - HDR 10, AMD FreeSync, sRGB 99%, Slim Bezel, Multitasking Monitor, HDMI X 2, Made in India - 29WL500 (Black), Small',
// 23000,19499,
// 'Specific Uses For Product	Video Editing, Photo Editing, Business
// Refresh Rate	75 Hz
// Brand	LG
// Screen Size	73 Centimetres
// Screen Surface 	Matte',
// 'Display: 29 (73 cm) WFHD (2560 x 1080) Resolution IPS Display with HDR 10
// Connectivity: HDMI x 2, Headphone Out
// Stand: Tilt Adjustable Stand, VESA Wall Mount (100 x 100 mm)
// Gaming Features: AMD Freesync , Black Stablizer, Dynamic Action Sync
// Other Display Feature: 21:9 Aspect Ratio, sRGB 99%, 250 nits Brightness ',20,1)
// ";


// if (!mysqli_query($conn, $sql9)) {

//         echo "Error" . mysqli_error($conn);
//     } else {
//         echo "Succesfully inserted";
//     }
    

// $sql10 = "INSERT INTO products (category_id,company_id,product_name,mrp,saleing_price,short_desc,long_desc,stock,product_status) VALUES
// (8,208,'Logitech G512 Mechanical Gaming Keyboard,RGB Lightsync Backlit Keys,GX Brown Tactile Key Switches,Brushed Aluminum Case,Customizable F-Keys,USB Pass Through - Black',10495,9495,
// 'Keyboard Description	Gaming
// Connector Type	Usb
// Special Feature	Backlit
// Mounting Hardware	G512 gaming mechanical keyboard User documentation
// Brand	Logitech',
// 'Personalize lighting for each individual key, customize lighting effects, and enjoy in-game integrations from a spectrum of ~16.8M colors with Logitech G HUB.1
// GX Brown is a traditional mechanical switch providing discernible actuation for gamers who prefer direct tactile feedback. This keyboard is also available in Linear and Clicky switch experience, sold separately.
// Convenient USB passthrough port makes it a snap to plug in your mouse, flash drive or phone for direct data transmission or charging.
// Media and lighting controls are right at your fingertips. Use FN + F keys to control volume, play and pause, skip track, mute, toggle lighting, enter game mode, etc.',20,1),

// (8,208,'Logitech G PRO Mechanical Gaming Keyboard, Ultra Portable Tenkeyless Design, Detachable Micro USB Cable, 16.8 Million Color LIGHTSYNC RGB Backlit Keys,Black',10995,9995,
// 'Built with and for esports athletes for competition-level performance, speed and precision.
// Kaihua high quality switches deliver an audible and tactile click for a solid, secure keypress.
// Ultra-portable co',
// 'Ultra-portable compact tenkeyless design frees up table space for mouse movement. Its easy to pack up and transport to tournaments.
// Use LIGHTSYNC to highlight keys and program static lighting patterns to onboard memory for tournament systems that dont allow G HUB installations.*
// Detachable Micro USB cables feature a three-pronged design for an easy, secure connection and safe transport in your travel bag',20,1),

// (8,202,'
// ASUS Membrane USB Gaming Keyboard for PC - TUF K1 Programmable, Onboard Memory with Dedicated Volume Knob, Aura Sync RGB and Side Lighting Detachable Wrist Rest Spill-Resistant (Black)',9999,3799,
// 'MECHANICAL GAMING KEYBOARD - ASUS TUF K1 Wired Computer Gaming Keyboard features silent tactile mechanical switches that deliver high precision keystrokes for responsive & reliable performance during intense gaming sessions
// ANTI-GHOSTING - Anti-ghosting with 19-Key rollover response, onboard memory, 8 fully-programmable keys with on-the fly macro keyboard recordings for uninterrupted video games â€“ itâ€s got it all!',
// 'DESIGNED FOR COMMITTED GAMERS - TUF K1 keyboard features 5 individual lighting zones & striking RGB bars on the sides, with ASUS Aura Sync & latest Armoury Crate software support for centralized controls, and synchronized game profiles & lighting
// SPILL-RESISTANT COATING - To protect the Gaming Keyboard from accidental spills and increase its longevity, the TUF K1 is designed to withstand abrasion, friction & perspiration! It is easy to clean and allows you to game distraction-free',20,1),

// (8,203,'
// Corsair K55 RGB PRO - Dynamic RGB Backlighting Six Macro Keys Keyboard with Elgato Stream Deck Software Integration Detachable Palm Rest - Dedicated Media and Volume Keys',6700,3983,
// 'Dynamic RGB Backlighting: Light up your desktop with six onboard lighting effects, assign a color to each lighting zone, or program your own vibrant lighting effects across five RGB lighting zones with CORSAIR iCUE software.
// Six Dedicated Macro Keys: Activate functions, shortcuts, or keypresses in just one stroke with six dedicated macro keys, easily set up through CORSAIR iCUE software, or use instant streaming commands through Elgato Stream Deck software.',
// 'Dust and Spill-Resistant Design: IP42-ratedprotection guards against accidents so your gameplay never has to stop.
// Detachable Palm Rest: A soft rubber palm rest reduces stress on your hands so you can play longer in comfort, with a textured surface to keep your hands from slipping.
// Dedicated Volume and Media Keys: Convenient control for media playback and fine-tuning volume on-the-fly without having to interrupt your game.',20,1),

// (8,208,'
// Logitech K580 Slim Multi-Device Wireless Keyboard for Chrome OS - Bluetooth/USB Receiver, Easy Switch, 24 Month Battery, Desktop, Tablet, Smartphone, Laptop Compatible - White (920-009211)',3995,3295,
// 'Chrome OS edition keyboard with Google Assistant, search, launcher and media keys for easy access
// The slim profile and modern minimalist design transforms your keyboard into a visual statement that will elevate your desk setup
// Easy Switch lets you pair and quickly alternate between multiple devices, so you can type on your computer and your phone or tablet seamlessly',
// 'Slim keys offer a fluid, laptop-like comfortable typing experience thats whisper-quiet. Number pad and 15 FN keys available for easy data inputs and shortcuts
// Enjoy long battery life thanks to an auto-sleep feature that kicks in when youre not typing — plus a strong, reliable wireless range up to 10m through Bluetooth or the included 2.4GHz USB receiver
// System Compatibility: Windows 10, 11 or later, Chrome OS, macOS 10.10 or later, iOS 5 or later, iPadOS 13.4 or later, Android 5 or later',20,1),

// (8,208,'
// Logitech K480 Wireless Multi-Device Keyboard for Windows, Apple iOS android or Chrome, Wireless Bluetooth, Compact Space-Saving Design, PC/Mac/Laptop/Smartphone/Tablet- Black',3295,2595,
// 'Type on Any Device: A new type of wireless computer keyboard for your desk that also works with your tablet and smartphone; connect with any Bluetooth-enabled device with external keyboard support.
// Easy-Switch Dial: Simply turn the dial of the Logitech K480 keyboard to switch typing between 3 connected Bluetooth wireless devices, you can work with Windows, macOS, Chrome OS, Android, and iPadOS',
// 'Durable and Spill-resistant: The wireless and compact keyboard K480 is also spill-resistant (1) to survive small accidents; its a reliable and durable partner for your desk at home, or at work.
// COMPATIBLE DEVICES - PC: Windows 7, Windows 8, Windows 10, 11 or later ; Mac: Mac OS X or later ; Chrome OS ; iPad or iPhone: iOS 5 or later ; Android tablet or smartphone: Android 3.2 or later.
// Upgrade to Logitech K780 Keyboard: For more productivity and comfort, try the K780 keyboard with number pad for efficient data inputs, Bluetooth/USB, scooped keys, and cradle to hold your phone.',20,1),

// (8,208,'
// Logitech POP Keys Mechanical Wireless Keyboard with Customisable Emoji Keys, Durable Compact Design, Bluetooth or USB Connectivity, Multi-Device, OS Compatible - Heartbreaker',9995,9495,
// 'Deep feels: Neon corals meet crushed raspberry colours on a keyboard designed for the ones who care the most, allowing you to change the game with POP Keys wireless mechanical keyboard in Heartbreaker
// Feelings at your fingertips: Unleash your online personality with 8 swappable emoji keys and 1 emoji menu key, all customisable via Logitech Software (on Windows and macOS only)',
// 'Fun bouncy typing: Experience typing that’s almost addictive on typewriter-style mechanical keys; feel your fingers bounce across the comfy, scooped keys as they click, clack and pop
// Multi-device: Pair POP Keys with up to 3 devices and hop between them using the Easy-Switch keys; connect via Bluetooth or Logi Bolt USB receiver on Windows, macOS, Chrome OS, Android, iPadOS or iOS
// Yours for the long haul: Express yourself to your heart’s content with this wireless external keyboard, featuring 3-year battery life and keys engineered to endure up to 50 million strokes',20,1),

// (8,208,'
// Logitech K230 Compact Wireless Keyboard for Windows, 2.4GHz Wireless with USB Unifying Receiver, Space-Saving Design, 2-Year Battery Life, PC/Laptop- Black',1095,845,
// 'WIRELESS KEYBOARD: Reliable connection up to 10 m . Virtually no delays or dropouts-even in the busiest wireless environments-thanks to the mini Logitech USB Unifying receiver with Advanced 2.4 GHz wireless connectivity. Small enough to stay in your laptop and lets you add up to five compatible devices such as a wireless gaming mouse',
// 'PERSONIZABLE: Want to make this sleek little keyboard a little more you? The battery door on top of the keyboard doubles as a fun design element with light grey, pink and blue options you can swap to suit your mood or décor
// SYSTEM COMPATIBILITY: Windows-based PC,Windows XP, Windows Vista, Windows 7, Windows 8, Windows 10, 11 or later USB port
// IN THE BOX:Keyboard,Nano-receiver, 2 AAA batteries, User documentation',20,1),

// (8,209,'
// Chiptronex COM X Wired Keyboard and Mouse Combo with 104 Keys and a USB Mouse with 1200 DPI',1599,799,
// 'Comfortable & Effortless Typing: Our wired keyboard and mouse combo is simple and effective. No fancy gadgets, or extra keys that will never be used. By using the standard layout of a pc keyboard and mouse wired with precision focus, you will be able to work worry free
// Easy to use & Simple: No hassle and no worries, our USB keyboard and mouse combo is plug and play, no software needed. Just plug in the USB cord and it will be ready for use. Compatible with all desktops, notebooks, and PCs using Windows',
// 'Precise and Comfortable mouse: 1200 dpi precision optical sensor for a precise and smooth control as well as ergonomic and ambidextrous design for maximum comfort
// Clear and Convenient: The bold, bright white characters make the keys on this PC or laptopkeyboard easy to read, which is ideal for individuals who have weak vision
// The keyboard and mouse come with braided cable for long life',20,1),

// (8,202,'Asus TUF Gaming K1 Wired Gaming Keyboard (Aura Sync Technology, Black)',4400,2999,
// 'Keyboard, Ideal For: Laptop | Desktop
// Lifestyle: Everyday Use | Home | Gaming
// Connection Type: Wired
// Dynamic RGB Lighting
// Detachable Ergonomic Wrist Rest',
// 'Special Key FunctionsOn-the-Fly Macro Recording: Step 1: Fn + Right-ALT to Start Recording, Step 2: Fn + Right-ALT to End Recording, Step 3: Assign Macro Key, Macro Hot Keys : F1-F8 keys Programmable, On-the-Fly Macro Recording: Step 1: Fn + Right-ALT to Start Recording, Step 2: Fn + Right-ALT to End Recording, Step 3: Assign Macro Key',20,1),

// (8,205,'
// HP USB Wireless/Cordless Spill Resistance Keyboard and Mouse Combo (4SC12PA)',1999,1299,
// 'Stylish Ultra-Slim design Keyboard & Mouse, Sealed membrane for overall protection, Brush metal finish, Advanced controls
// 2.4G wireless technology with 10m working range and nano-receiver, Energy saving design standby function',
// 'Professional Optical sensor with direct DPI switch 800/1200/1600 dpi, High quality switches for over 2 million clicks supported
// Stylish Ultra-Slim design Keyboard & Mouse, Sealed membrane for overall protection, Brush metal finish, Advanced controls
// Note : In case of Wireless mouse, the USB receiver will be provided inside or along with the mouse
// 2.4G wireless technology with 10m working range and nano-receiver, Energy saving design standby function',20,1),

// (7,214,'
// Samsung 59.8 cm (23.5 inch) Curved LED Backlit Computer Monitor - Full HD, VA Panel with VGA, HDMI, Audio Ports - LC24F390FHWXXL (Black)',14798,12399,
// 'Screen Size: 23.5 inch (59.8 cm) Full HD (1920 x 1080) curved VA panel ,Connectivity Port: 1 VGA Port, 1 HDMI Port, 1 Headphone Port
// Note : Product is a computer monitor not a TV
// Aspect Ratio: 16:9, Brightness (Typical): 250 cd/m2',
// 'Refresh Rate: 60 Hz, Response Time: 4 ms, Operation Conditions: Temperature ( 10 ~ 40 °C ), Humidity 10 ~ 80% (non-condensing); Power Supply: AC 100 ~ 240 V, Power Consumption (Max): 25 watts
// Viewing Angle: 178 degree horizontal and 178 degree vertical, Curvature: 1800R
// Flicker Free Technology: Yes',20,1),

// (7,214,'
// Samsung 27 inch (68.5 cm) Curved LED Backlit Computer Monitor - Full HD, VA Panel with VGA, HDMI, Audio Ports - LC27F390FHWXXL (Black)',24700,16999,
// '
// Refresh Rate	60 Hz
// Brand	Samsung
// Screen Size	27 Inches
// Special Feature	Flicker-Free, Curved
// Number 1 of HDMI Ports',
// 'Screen Size: 27 inch (68.6 cm) Full HD (1920 x 1080) curved VA panel
// Connectivity Port: 1 VGA Port, 1 HDMI Port, 1 Headphone Port
// Aspect Ratio: 16:9, Brightness (Typical): 250 cd/m2
// Refresh Rate: 60 Hz, Response Time: 4 ms
// Viewing Angle: 178 degree horizontal and 178 degree vertical, Curvature: 1800R
// Flicker Free Technology: Yes',20,1)";

// if (!mysqli_query($conn, $sql10)) {

//         echo "Error" . mysqli_error($conn);
//     } else {
//         echo "Succesfully inserted";
//     }


// $sql11 = "INSERT INTO products (category_id,company_id,product_name,mrp,saleing_price,short_desc,long_desc,stock,product_status) VALUES
// (9,208,'
// Logitech G102 Light Sync Gaming Mouse',1995,1595,
// 'Logitech G102 Light Sync Gaming Mouse with Customizable RGB Lighting, 6 Programmable Buttons, Gaming Grade Sensor, 8 k dpi Tracking,16.8mn Color, Light Weight (Black)',
// 'COLORFUL LIGHTSYNC RGB : Play in colour with our most vibrant LIGHTSYNC RGB featuring colour wave effects that are customisable across 16.8 million colours. 8,000 DPI sensor.
// CLASSIC,GAMER TESTED DESIGN : Play comfortably and with total control. The simple 6-button layout and classic gaming shape form a comfortable, time-tested and loved design
// MECHANICAL SPRING BUTTON TENSIONING: Primary buttons are mechanical and tensioned with durable metal springs for reliability, performance and an excellent feel',20,1),

// (9,208,'
// Logitech G502 Lightspeed Wireless Gaming Mouse',13495,12489,
// 'Logitech G502 Lightspeed Wireless Gaming Mouse, Hero 25K Sensor, 25,000 DPI, RGB, Adjustable Weights, 11 Programmable Buttons, Long Battery Life, On-Board Memory, PC/Mac - Black (910005569)',
// 'Hero 25K sensor through a software update from G HUB, this upgrade is free to all players: Our most advanced, with 1:1 tracking, 400+ ips, and 100 - 25,600 max dpi sensitivity plus zero smoothing, filtering, or acceleration. PTFE Feet: 250-km range
// 11 buttons and hyper-fast scroll wheel : Primary buttons feature metal-spring tensioning for fast, crisp actuation. Customise keybinds and macros for each game and app.l',20,1),

// (9,208,'
// Logitech G304 Lightspeed Wireless Gaming Mouse, Hero Sensor',3795,2495,
// 'Logitech G304 Lightspeed Wireless Gaming Mouse, Hero Sensor, 12,000 DPI, Lightweight, 6 Programmable Buttons, 250h Battery Life, On-Board Memory, Compatible with PC/Mac - Black',
// 'HERO GAMING SENSOR : Next-gen Hero mouse sensor delivers up to 10x the power efficiency over other gaming mice with exceptional accuracy and responsiveness thanks to 400 IPS precision and up to 12000 DPI sensitivity. Durability : PTFE Feet: 250-km rangeULTRA LONG BATTERY LIFE : The G304 wireless Logitech mouse boasts an incredible 250 hours of continuous gameplay on a single AA battery so you can play at peak performance without worrying about running out of power
// LIGHT WEIGHT DESIGN : Thanks to an efficient mechanical design, the G305 gaming mouse weighs in at only 99 grams for high manoeuvrability',20,1),

// (9,208,'
// Logitech G PRO Wireless Gaming Mouse, Hero 25K Sensor',10995,9995,
// 'Logitech G PRO Wireless Gaming Mouse, Hero 25K Sensor, 25,600 DPI, RGB, Ultra Lightweight, 4-8 Programmable Buttons, Long Battery Life, POWERPLAY-Compatible, Built for Esports, PC/Mac - Black',
// 'LIGHTSPEED Wireless With pro-grade wireless performance, LIGHTSPEED overcomes the limitations of latency, connectivity and power to provide rock-solid and super fast 1 ms report rate connection. This allows pro gamers to eliminate cord drag, which produces friction and can be distracting in high-level professional gameplay. LIGHTSPEED is the wireless technology pro gamers have been waiting for.',20,1),

// (9,208,'
// Logitech G604 Lightspeed Wireless Gaming Mouse',8495,6745,
// '15 PROGRAMMABLE CONTROLS: include six thumb buttons; fully programmable with G HUB software.
// DUAL CONNECTIVITY: Toggle between convenient Bluetooth and ultra-fast 1 ms LIGHTSPEED advanced wireless technology',
// 'DUAL MODE HYPERFAST SCROLL WHEEL: Durable metal scroll wheel switches between hyper-fast and ratchetted scrolling. Programmable scrolling lets you apply keybinds.
// 240 HOURS WITH ONE AA: efficient HERO 25K allows for 240 hours in LIGHTSPEED mode or up to 5.5 months in Bluetooth mode.',20,1),

// (9,208,'
// Logitech M235 Wireless Mouse, 2.4 GHz with USB Unifying Receiver',995,799,
// 'Logitech M235 Wireless Mouse, 2.4 GHz with USB Unifying Receiver, 1000 DPI Optical Tracking, 12 Month Life Battery, Compatible with Windows, Mac, Chromebook/PC/Laptop - Blue',
// 'Youll enjoy smooth cursor control, precise tracking and easy text selection on the surfaces where you use your computer most.
// The tiny Unifying receiver connects up to six Unifying-compatible devices with a powerful, reliable wireless connection (up to 25 meters).
// You can go a full year without battery hassles. The On/Off switch helps conserve power, smart sleep mode extends battery life and an indicator light eliminates surprises.',20,1),

// (9,209,'
// CHIPTRONEX Alpha Z RGB Wired Gaming Mouse 6400 DPI 6 Programmable Button & Breathing Light Ergonomic Design USB Computer Mice Desktop Laptop PC Gaming (Alpha Z)r',995,799,
// 'Logitech M235 Wireless Mouse, 2.4 GHz with USB Unifying Receiver, 1000 DPI Optical Tracking, 12 Month Life Battery, Compatible with Windows, Mac, Chromebook/PC/Laptop - Blue',
// 'Adjustable DPI switch between 800-1600-2400-3200-4800-6400 DPI using the built-in button to adjust your accuracy on the fly
// Highly accurate mouse with a high-precision positioning game engine for accurate positioning and stable transmission. 6 buttons tested 3, 000, 000 clicks, strong durability
// Rgb mode 7 RGB light modes programmable using given software',20,1),

// (9,205,'
// HP M100 Wired Gaming Optical Mouse (Black)',599,399,
// 'Interface: USB 3.0, USB 2.0, Wired 3.0 USB, Optical Mouse for Gaming, 1600 DPI Optical Mouse',
// 'With or without a mouse pad, the mouse moves easily for precise optical tracking, use the scroll wheel for fast, precise tracking to navigate through your work effortlessly
// Just plug the cord into your computers USB port and youre ready to go
// Adjust your DPI setting 1,000 and 1,600 DPI, high-definition optical sensor delivers smooth, responsive cursor control, so you can work with precision and confidence on a wide variety of surfaces',20,1),

// (9,205,'
// HP G200 Gaming Mouse with Backlit, All Customizable Buttons, Adjustable 4000 DPI, Ergonomic Design & RGB Breathing LED Lighting, Anti-Slip Scroll Wheel USB Wired Mouse (7QV30AA)
// ',1999,1349,
// 'Instantly switch between six DPI sensitivity settings to quickly respond to your gaming demands for targeting, maneuverability or speed
// Compatibility - Windows XP / Windows7 /Windows 8 / Windows10 and MacOS:10.3 or later',
// 'Instantly switch between six DPI sensitivity settings to quickly respond to your gaming demands for targeting, maneuverability or speed
// Note : In case of Wireless mouse, the USB receiver will be provided inside or along with the mouse
// Gaming buttons rated at up to 20 million-clicks.High-definition(4000DPI)optical tracking delivers more',20,1),

// (9,205,'
// HP G360 Gaming Mouse with RGB backlighting, 6 Programmable Buttons
// ',2499,1490,
// 'HP G360 Gaming Mouse with RGB backlighting, 6 Programmable Buttons, Customizable 6200 DPI, Ergonomic Design, Non-Slip 3D Roller USB Wired Mouse (4QM92AA)',
// 'Compatibility - Windows XP / Windows7 /Windows 8 / Windows10
// Instantly switch between six DPI sensitivity settings for more precise targeting
// Note : In case of Wireless mouse, the USB receiver will be provided inside or along with the mouse
// This drive supports customization of all keys and customized DPI of up to 6200',20,1),

// (9,205,'HP M270 Gaming Mouse with Backlit, 6 Buttons, 4-Speed Customizable 2400 DPI',699,631,
// 'High-end optical engine for precise positioning. 4-speed DPI optional, adjustable mouse movement speed',
// 'Button life up to 3 million times, High definition(3200 DPI) optical tracking delivers more responsive cursor control.Recommend with a solid color mouse pad
// Compatibility - Windows XP / Windows7 /Windows 8 / Windows10
// High-end optical engine for precise positioning. 4-speed DPI optional, adjustable mouse movement speed',20,1),

// (9,202,'
// ASUS ROG Strix Impact II Wired Optical Ambidextrous Gaming Mouse , Black
// ',4250,1999,
// 'Lightweight build and ambidextrous ergonomics co-designed with pro gamers for optimal performance.
// Pivoted button mechanism for fast response and accurate performance, accompanied by a clean, tactile feel.',
// 'Fast, smooth and flexible glides with lightweight, soft-rubber cable.
// 6,200 dpi optical sensor with four-level DPI switch for sensitivity adjustment.
// On-the-fly DPI button for effortless accuracy adjustments.On-the-fly DPI button for effortless accuracy adjustments.',20,1),

// (9,202,'
// ASUS ROG Strix Impact II Wired Optical Ambidextrous Gaming Mouse , Black
// ',4250,1999,
// 'Lightweight build and ambidextrous ergonomics co-designed with pro gamers for optimal performance.
// Pivoted button mechanism for fast response and accurate performance, accompanied by a clean, tactile feel.',
// 'Fast, smooth and flexible glides with lightweight, soft-rubber cable.
// 6,200 dpi optical sensor with four-level DPI switch for sensitivity adjustment.
// On-the-fly DPI button for effortless accuracy adjustments.On-the-fly DPI button for effortless accuracy adjustments.',20,1)";

// if (!mysqli_query($conn, $sql11)) {

//         echo "Error" . mysqli_error($conn);
//     } else {
//         echo "Succesfully inserted";
//     }


// $sql12 = "INSERT INTO products (category_id,company_id,product_name,mrp,saleing_price,short_desc,long_desc,stock,product_status) VALUES
// (10,206,'Cooler Master MWE 550 Bronze V2 230v, 80 Plus Bronze Certified, Non-Modular Power Supply – Black',
// 5999,3999,
// 'Compliance with latest ATX 12V V2.52 specification ensures power requirement for new age multi-core processors and Graphics card are properly met.
// New generation circuit design such as DC-to-DC + LLC circuits offer reliable, stable output to all connected components under gaming load.',
// 'Certified 80 PLUS Bronze Efficiency guarantees a typical efficiency of 88% under normal operating conditions thus saving energy.
// All flat cables take up less space and are easier to manipulate within the chassis improving ease of build and air airflow.
// The MWE Series comes with a standard limited manufacturing warranty of 5 years from the date of purchase for complete peace of mind.',20,1),

// (10,206,'Cooler Master MWE Gold 650 V2 80 Plus Gold Certified, Fully Modular Power Supply - Black, 80 Plus Bronze Certified, Non-Modular Power Supply  Black',
// 9999,7499,
// 'ATX 24 PIN x1, EPS 4+4 PIN x1, EPS 8 PIN x1, PCI-E 6+2 PIN x4, SATA x8, Peripheral 4 pin x4
// The MWE Series comes with a standard limited manufacturing warranty of 5 years from the date of purchase for complete peace of mind.
// Compliance with latest ATX 12V V2.52.',
// 'Compliance with latest ATX 12V V2.52 specification ensures power requirement for new age multi-core processors and Graphics card are properly met.
// All MWE Gold models have 2 EPS connectors for universal current generation motherboard compatibility.
// All flat modular cables take up less space and are easier to manipulate within the chassis improving ease of build and air airflow.',20,1),

// (10,206,'Cooler Master MWE Gold 750 V2 80 Plus Gold Certified, Fully Modular Power Supply - Black, 750w',
// 12799,9249,
// 'The MWE Series comes with a standard limited manufacturing warranty of 5 years from the date of purchase for complete peace of mind.
// Compliance with latest ATX 12V V2.52 specification ensures power requirement for new age multi-core processors and Graphics card are properly met.',
// 'All MWE Gold models have 2 EPS connectors for universal current generation motherboard compatibility.
// ATX 24 PIN x1, EPS 4+4 PIN x1, EPS 8 PIN x1, PCI-E 6+2 PIN x4, SATA x12, Peripheral 4 pin x4
// All flat modular cables take up less space and are easier to manipulate within the chassis improving ease of build and air airflow.',20,1),

// (10,206,'Cooler Master MWE Gold 850 V2 80 Plus Gold Certified, Fully Modular Power Supply - Black',
// 13999,10599,
// 'The MWE Series comes with a standard limited manufacturing warranty of 5 years from the date of purchase for complete peace of mind.
// Compliance with latest ATX 12V V2.52 specification ensures power requirement for new age multi-core processors and Graphics card are properly met.',
// 'All MWE Gold models have 2 EPS connectors for universal current generation motherboard compatibility.
// ATX 24 PIN x1, EPS 4+4 PIN x1, EPS 8 PIN x1, PCI-E 6+2 PIN x4, SATA x12, Peripheral 4 pin x4
// All flat modular cables take up less space and are easier to manipulate within the chassis improving ease of build and air airflow.',20,1),

// (10,206,' Cooler Master MWE 450W 80 Plus Non-Modular White Series SMPS Power Supply',
// 3899,3499,
// 'Meeting the 80 plus certification for 230V, the MWE will guarantee a typical efficiency of at least 85 percentage during normal use
// MWE consumes less then 0.5 watt when your system is in standby mode, which not only reduces strain on the environment but also your energy bill',
// 'Engineered to operate normally at 40 dgrees, providing added security and reliabilty to system operating in warm conditions
// Quiet and durable, Proven Thermal Resistance, the thermally controlled 120mm HDB fan operates smoothly without friction, enjoy your system with a durable fan in a quiet environment',20,1),

// (10,203,'Corsair VS500 80 Plus ATX Power Supply',
// 5300,3250,
// 'CORSAIR VS power supplies are guaranteed to deliver their full rated wattage of continuous power.
// Certified 80 PLUS efficiency provides up to 85% operational efficiency, reducing heat and energy costs.',
// 'A 120mm low-noise cooling fan with a specially designed fan curve spins at higher speed when your power supply is under heavy load and slows down for quieter operation at lower loads.
// A comprehensive three-year warranty is your guarantee of reliable operation that will last across several system builds, backed by the CORSAIR global technical support team.t',20,1),

// (10,203,'Corsair CV550, CV Series, 80 Plus Bronze Certified, 550 Watt Non-Modular Power Supply - Black',
// 6900,3610,
// '80 PLUS Bronze Certified: Provides up to 88% operational efficiency, generating less heat and lowering your energy costs. MTBF hours : 100,000 hours
// Full Continuous Power: CORSAIR CV Series power supplies are guaranteed to deliver their full rated wattage of continuous power',
// 'Low-Noise Cooling: A 120 mm thermally controlled low-noise cooling fan only spins at high speed when your power supply is under heavy stress, slowing down for quieter operation at lower loads
// Compact Casing: 125 mm length ensures an easy fit in almost all modern PC cases
// Black Sleeving and Casing: Black sleeved cables and a black powder-coated casing seamlessly fits your PCs style',20,1),

// (10,203,'Corsair CV650, CV Series, 80 Plus Bronze Certified, 650 Watt Non-Modular Power Supply - Black',
// 8000,4749,
// 'Model Name	CV
// Brand	Corsair
// Audio Wattage	650 Watts
// Wattage	650 Watts
// Item Dimensions LxWxH	15
// 80 PLUS Bronze Certified: Provides up to 88% operational efficiency, generating less heat and lowering your energy costs
// Full Continuous Power: CORSAIR CV Series power supplies are guaranteed to deliver their full rated wattage of continuous power',
// 'Low-Noise Cooling: A 120 mm thermally controlled low-noise cooling fan only spins at high speed when your power supply is under heavy stress, slowing down for quieter operation at lower loads
// Compact Casing: 125 mm length ensures an easy fit in almost all modern PC cases
// Black Sleeving and Casing: Black sleeved cables and a black powder-coated casing seamlessly fits your PCs style
// Protections : OVP (Over Voltage). UVP (Under Voltage), SCP (Short Circuit), OTP (Over Temp), OPP (Over Power)',20,1),

// (10,203,'Corsair CV Series CV750 80 Plus Bronze ATX Power Supply',
// 9900,5768,
// 'Model Name	CV750
// Brand	Corsair
// Form Factor	ATX
// Item Dimensions LxWxH	15 x 12.5 x 8.6 Centimeters
// Item Weight	1900 Grams
// 80 PLUS Bronze Certified: Provides up to 88% operational efficiency, generating less heat and lowering your energy costs
// Full Continuous Power: CORSAIR CV Series power supplies are guaranteed to deliver their full rated wattage of continuous power',
// 'Low-Noise Cooling: A 120mm thermally controlled low-noise cooling fan only spins at high speed when your power supply is under heavy stress, slowing down for quieter operation at lower loads.
// Compact Casing: 125mm length ensures an easy fit in almost all modern PC cases
// Black Sleeving and Casing: Black sleeved cables and a black powder-coated casing seamlessly fits your PCs style.',20,1),

// (10,211,'GIGABYTE GP-P450B 80 Plus Bronze Power Supply',
// 5050,2550,
// 'Brand	GIGABYTE
// Output Wattage	450
// Wattage	450 Watts
// Item Dimensions LxWxH	15 x 14 x 8.6 Centimeters
// Item Weight',
// '80 PLUS Bronze certified
// 120mm Silent Hydraulic Bearing (HYB) Fan
// Reliable flat cable
// Single +12V rail
// OVP/OPP/SCP/UVP/OCP/OTP protection',20,1)
// ";


// if (!mysqli_query($conn, $sql12)) {

//         echo "Error" . mysqli_error($conn);
//     } else {
//         echo "Succesfully inserted";
//     }