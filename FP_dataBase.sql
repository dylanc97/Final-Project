DROP DATABASE IF EXISTS fp_db;
CREATE DATABASE fp_db;

CREATE TABLE IF NOT EXISTS `fp_db`.`user` (
  `name` 	 VARCHAR(20) NOT NULL,
  `userName` VARCHAR(45) NOT NULL,
  `password` VARCHAR(45) NOT NULL,
  `maxPrice` INT(11) NOT NULL,
  `company`  VARCHAR(5) NOT NULL,
PRIMARY KEY (`userName`));

CREATE TABLE IF NOT EXISTS `fp_db`.`game` (
  `name` VARCHAR(45) NOT NULL,
  `genre` VARCHAR(45) NOT NULL,
  `link` VARCHAR(45) NOT NULL,
PRIMARY KEY (`name`));

CREATE TABLE IF NOT EXISTS `fp_db`.`parts` (
  `name` VARCHAR(45) NOT NULL,
  `category` VARCHAR(45) NOT NULL,
  `price` INT(11) NOT NULL,
  `company` VARCHAR(45) NULL DEFAULT NULL,
  `link` VARCHAR(1000) NULL DEFAULT NULL,
PRIMARY KEY (`Name`));

INSERT INTO fp_db.user (name, userName, password, maxPrice, company) VALUES
("Dylan Cicale", "dylanc97", "The", 2000, "INTEL");

INSERT INTO fp_db.game (name, genre, link) VALUES
("Fortnite", "Battle Royale", "images/game1.jpg"),
("APEX Legends", "Battle Royale", "images/apeximg.jpg"),
("Playerunknowns Battlegrounds", "Battle Royale", "images/PUBGimg.jpg"),
("Call Of Duty", "Battle Royale", "images/CODimg.jpg"),
("Grand Theft Auto 5", "Open World", "images/GTAimg.jpg"),
("World of Warcraft", "Open World", "images/WOWimg.jpg"),
("Counter Strike", "Standard", "images/CSGOimg.jpg"),
("Overwatch", "Standard", "images/Overwatchimg.jpg"),
("Battlefield 5", "Standard", "images/BF5img.jpg"),
("Rainbow Six Siege", "Standard", "images/RSSimg.jpg");

INSERT INTO fp_db.parts (name, category, price, company, link) VALUES
("CORSAIR Carbide 275R Mid-Tower Gaming Case, Window Side Panel- Black", "CASE", 54, "", "https://www.amazon.com/CORSAIR-Carbide-Mid-Tower-Gaming-Window/dp/B079JVTPJK/ref=sr_1_10?crid=3DX6KDYFLCICL&keywords=pc+shell&qid=1555451952&s=gateway&sprefix=pc+she%2Caps%2C136&sr=8-10"),
("Intel Core i5-8400 Desktop Processor 6 Cores up to 4.0 GHz LGA 1151 300 Series 65W", "CPU", 213, "Intel", "https://www.amazon.com/Intel-i5-8400-Desktop-Processor-Cores/dp/B0759FGJ3Q/ref=sr_1_4?keywords=i5&qid=1555452525&s=gateway&sr=8-4"),
("AMD Ryzen 5 2600 Processor with Wraith Stealth Cooler", "CPU", 164, "AMD", "https://www.amazon.com/AMD-Processor-Wraith-Stealth-Cooler/dp/B07B41WS48/ref=sr_1_1_sspa?keywords=amd+ryzen+5&qid=1555615830&s=gateway&sr=8-1-spons&psc=1"),
("EVGA GeForce GTX 1660 Ti XC Black Gaming, 6GB GDDR6, HDB Fan Graphics Card 06G-P4-1261-KR", "GPU", 280, "", "https://www.amazon.com/EVGA-GeForce-Gaming-Graphics-06G-P4-1261-KR/dp/B07N9XNC1B/ref=sr_1_4?crid=128HC8M2XN0O&keywords=gtx+1060+ti&qid=1555452456&s=gateway&sprefix=gtx+1060+t%2Caps%2C139&sr=8-4"),
("Corsair Vengeance LPX 8GB (2x4GB) DDR4 DRAM 2400MHz PC4 19200 C16 Memory Kit - Black",  "RAM", 52, "", "https://www.amazon.com/Corsair-Vengeance-2x4GB-2400MHz-Memory/dp/B019HVND88/ref=sr_1_3?crid=2DXQ2JG1G2I2U&keywords=ram+2x4gb+ddr4&qid=1555453593&s=gateway&sprefix=ram+2x%2Caps%2C136&sr=8-3"),
("Samsung 860 EVO 250GB 2.5 Inch SATA III Internal SSD MZ-76E250B/AM", "STORAGE", 58, "", "https://www.amazon.com/Samsung-250GB-Internal-MZ-76E250B-AM/dp/B07864WMK8/ref=sr_1_1?crid=2QR32AK0ZP5CS&keywords=samsung+860+evo+250gb&qid=1555453999&s=gateway&sprefix=samsung+860+e%2Caps%2C141&sr=8-1"),
("NZXT H500i - Compact ATX PC Gaming Case - RGB LED & Smart Fan Control - Tempered Glass - Water-Cooling Ready - Black", "CASE", 97, "", "https://www.amazon.com/Computer-digital-control-lighting-CA-H500W-B1/dp/B07C3STSDB/ref=sr_1_3?crid=3DX6KDYFLCICL&keywords=pc+shell&qid=1555452028&s=gateway&sprefix=pc+she%2Caps%2C136&sr=8-3"),
("Intel Core i5-9600K Desktop Processor 6 Cores up to 4.6 GHz Turbo Unlocked LGA1151 300 Series 95W", "CPU", 265, "Intel", "https://www.amazon.com/Intel-i5-9600K-Desktop-Processor-Unlocked/dp/B07HHLX1R8/ref=sr_1_5?keywords=i5&qid=1555452676&s=gateway&sr=8-5"),
("AMD Ryzen 5 2600X Processor with Wraith Spire Cooler", "CPU", 179, "AMD", "https://www.amazon.com/AMD-Ryzen-Processor-Wraith-Cooler/dp/B07B428V2L/ref=sr_1_2_sspa?keywords=amd+ryzen+5&qid=1555615830&s=gateway&sr=8-2-spons&psc=1"),
("ASUS GeForce GTX 1070 8GB Turbo Edition 4K & VR Ready Dual HDMI 2.0 DP 1.4 Auto-Extreme Graphics Card Turbo-GTX1070-8G", "GPU", 383, "", "https://www.amazon.com/GeForce-Turbo-Auto-Extreme-Graphics-Turbo-GTX1070-8G/dp/B01IPVTHL8/ref=sr_1_13?keywords=gtx+1070+ti&qid=1555452939&s=gateway&sr=8-13"),
("G.Skill 16GB 2 x 8GB Aegis DDR4 PC4-24000 3000MHz for Intel Z170 Platform Desktop Memory Model F4-3000C16D-16GISB", "RAM", 88, "", "https://www.amazon.com/G-Skill-PC4-24000-3000MHz-Platform-F4-3000C16D-16GISB/dp/B01IW7Z66U/ref=sr_1_4?crid=RDUHNKADNVK7&keywords=ram+2x8gb+ddr4+3000mhz&qid=1555453708&s=gateway&sprefix=ram+2x8g%2Caps%2C140&sr=8-4"),
("Samsung 860 EVO 500GB 2.5 Inch SATA III Internal SSD MZ-76E500B/AM", "STORAGE", 78, "", "https://www.amazon.com/Samsung-500GB-Internal-MZ-76E500B-AM/dp/B0781Z7Y3S/ref=sr_1_3?crid=LNU5FU5XEB9S&keywords=500gb+ssd&qid=1555454114&s=gateway&sprefix=500+gb+%2Caps%2C149&sr=8-3"),
("CORSAIR Crystal 570X RGB Mid-Tower Case, 3 RGB Fans, Tempered Glass - Black", "CASE", 160, "", "https://www.amazon.com/CORSAIR-Crystal-Mid-Tower-Tempered-Glass/dp/B01LE0ZKR2/ref=sr_1_4?crid=3DX6KDYFLCICL&keywords=pc+shell&qid=1555452028&s=gateway&sprefix=pc+she%2Caps%2C136&sr=8-4"),
("Intel Core i7-9700K Desktop Processor 8 Cores up to 4.9 GHz Turbo Unlocked LGA1151 300 Series 95W", "CPU", 409, "Intel", "https://www.amazon.com/Intel-i7-9700K-Desktop-Processor-Unlocked/dp/B07HHN6KBZ/ref=sr_1_3?crid=2Y69A7O3YR2RN&keywords=i7+9700k&qid=1555453347&s=gateway&sprefix=i7+%2Caps%2C146&sr=8-3"),
("AMD Ryzen 7 2700X Processor with Wraith Prism LED Cooler", "CPU", 295, "AMD", "https://www.amazon.com/AMD-Ryzen-Processor-Wraith-Cooler/dp/B07B428M7F/ref=sr_1_2_sspa?keywords=amd+ryzen+7&qid=1555616147&s=gateway&sr=8-2-spons&psc=1"),
("EVGA GeForce RTX 2080 XC GAMING, 8GB GDDR6, Dual HDB Fans & RGB LED Graphics Card 08G-P4-2182-KR", "GPU", 780, "", "https://www.amazon.com/EVGA-GeForce-GAMING-Graphics-08G-P4-2182-KR/dp/B07GHVWMBS/ref=sr_1_1?keywords=gtx+2080&qid=1555453227&s=gateway&sr=8-1"),
("Ballistix Sport LT 16GB Kit 8GBx2 DDR4 3200 MT/s", "RAM", 95, "", "https://www.amazon.com/Ballistix-Sport-PC4-25600-288-Pin-Memory/dp/B07MNJKPSK/ref=sr_1_10?crid=3SMOMH9M5IWJR&keywords=ram+2x8gb+ddr4+3200mhz&qid=1555453802&s=gateway&sprefix=ram+2x8gb+ddr4+3%2Caps%2C146&sr=8-10"),
("Samsung 860 QVO 1TB Solid State Drive (MZ-76Q1T0) V-NAND, SATA 6Gb/s, Quality and Value Optimized SSD", "STORAGE", 118, "", "https://www.amazon.com/Samsung-MZ-76Q1T0-V-NAND-Quality-Optimized/dp/B07L3D19MY/ref=sr_1_4?crid=5S3G292KYPF1&keywords=1tb+ssd&qid=1555454225&s=gateway&sprefix=1tb+ssd%2Caps%2C143&sr=8-4"),
("Intel Core i5-9400F Desktop Processor 6 Cores 4.1 GHz Turbo Without Graphics", "CPU", 180, "Intel", "https://www.amazon.com/Intel-i5-9400F-Desktop-Processor-Graphics/dp/B07MRCGQQ4/ref=sr_1_2_sspa?crid=2TTA5DHFWHALG&keywords=intel+core+i5&qid=1555451677&s=gateway&sprefix=intel+core+i5%2Caps%2C144&sr=8-2-spons&psc=1"),
("AMD Ryzen 5 2400G Processor with Radeon RX Vega 11 Graphics", "CPU", 149, "AMD", "https://www.amazon.com/AMD-Ryzen-Processor-Radeon-Graphics/dp/B079D8FD28/ref=sr_1_6?keywords=amd+ryzen+5&qid=1555615830&s=gateway&sr=8-6"),
("EVGA GeForce GTX 1060 SC GAMING, ACX 2.0 Single Fan 6GB GDDR5 DX12 OSD Support PXOC 06G-P4-6163-KR", "GPU", 299, "", "https://www.amazon.com/EVGA-GeForce-GAMING-Support-06G-P4-6163-KR/dp/B01IPVSLTC/ref=sr_1_3?crid=128HC8M2XN0O&keywords=gtx+1060+ti&qid=1555452396&s=gateway&sprefix=gtx+1060+t%2Caps%2C139&sr=8-3"),
("Intel Core i5 6600K 3.50 GHz Quad Core Skylake Desktop Processor, Socket LGA 1151 6MB Cache", "CPU", 242, "Intel", "https://www.amazon.com/Intel-Skylake-Desktop-Processor-BX80662I56600K/dp/B012M8M7TY/ref=sr_1_6?crid=2TTA5DHFWHALG&keywords=intel+core+i5&qid=1555451735&s=gateway&sprefix=intel+core+i5%2Caps%2C144&sr=8-6"),
("EVGA GeForce RTX 2070 Black Gaming 8GB GDDR6 Dual HDB Fans Graphics Card 08G-P4-1071-KR", "GPU", 499, "", "https://www.amazon.com/EVGA-RTX-2070-Black-08G-P4-1071-KR/dp/B07J9L4HC2/ref=sr_1_7?keywords=gtx+1070+ti&qid=1555452939&s=gateway&sr=8-7"),
("Intel Core i7-8700K Desktop Processor 6 Cores up to 4.7GHz Turbo Unlocked LGA1151 300 Series 95W", "CPU", 365, "intel", "https://www.amazon.com/Intel-i7-8700K-Desktop-Processor-Unlocked/dp/B07598VZR8/ref=sr_1_1_sspa?crid=2TTA5DHFWHALG&keywords=intel+core+i5&qid=1555451735&s=gateway&sprefix=intel+core+i5%2Caps%2C144&sr=8-1-spons&psc=1"),
("AMD Ryzen 7 2700 Processor with Wraith Spire LED Cooler", "CPU", 225, "AMD", "https://www.amazon.com/AMD-Ryzen-Processor-Wraith-Cooler/dp/B07B41717Z/ref=sr_1_1_sspa?keywords=amd+ryzen+7&qid=1555616147&s=gateway&sr=8-1-spons&psc=1"),
("ASUS ROG Strix GeForce RTX 2080 Advanced Overclocked 8G GDDR6 HDMI DP 1.4 USB Type-C Gaming Graphics Card", "GPU", 809, "", "https://www.amazon.com/ASUS-Advanced-Overclocked-Graphics-ROG-STRIX-RTX-2080-A8G/dp/B07JPD4NZV/ref=sr_1_2?keywords=gtx+2080&qid=1555453312&s=gateway&sr=8-2"),
("Corsair Vengeance LPX 16GB 2x8GB DDR4 DRAM 2400MHz C16 Desktop Memory Kit - Black", "RAM", 84, "", "https://www.amazon.com/Corsair-Vengeance-2400MHz-Desktop-Memory/dp/B017NW5NZY/ref=sr_1_7?crid=2BFEP1LJYGAAP&keywords=8gb+ddr4+2x4+2666&qid=1555454635&s=gateway&sprefix=8gb+ddr4+2x4+%2Caps%2C134&sr=8-7"), 
("CORSAIR Vengeance RGB PRO 16GB 2x8GB DDR4 3200MHz C16 LED Desktop Memory - Black", "RAM", 127, "", "https://www.amazon.com/CORSAIR-Vengeance-3200MHz-Desktop-Memory/dp/B07D1XCKWW/ref=sr_1_4?keywords=16gb+ddr4+ram+3200mhz+8x2&qid=1555454746&s=gateway&sr=8-4"),
("Corsair LPX 32GB 2x16GB 3200MHz C16 DDR4 DRAM Memory Kit Black", "RAM", 215, "", "https://www.amazon.com/Corsair-2x16GB-3200MHz-Memory-CMK32GX4M2B3200C16/dp/B016ORTNI2/ref=sr_1_6?keywords=32gb+ddr4+ram+3200mhz+16x2&qid=1555454843&s=gateway&sr=8-6");