-- phpMyAdmin SQL Dump
-- version 4.3.8
-- http://www.phpmyadmin.net
--
-- Host: localhost
-- Generation Time: Jun 15, 2016 at 11:48 PM
-- Server version: 5.5.42-37.1-log
-- PHP Version: 5.4.31

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `ericstor_store`
--

-- --------------------------------------------------------

--
-- Table structure for table `categories`
--

CREATE TABLE IF NOT EXISTS `categories` (
  `id` int(11) NOT NULL,
  `name` varchar(15) NOT NULL,
  `image` varchar(30) NOT NULL,
  `url` varchar(20) NOT NULL,
  `description` text NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `categories`
--

INSERT INTO `categories` (`id`, `name`, `image`, `url`, `description`) VALUES
(0, 'Green Tea', 'categories/greenTea.jpg', 'GreenTea', 'Green Tea, known as Lu Cha is dried and cured almost immediately after its plucked to prevent any enzyme activity from taking place within the leaf. This process allows the natural integrity of the green leaf to remain green preserving the most natural health promoting elements for the consumer.\r\n\r\nIt is debatable as to when tea, and in particular green tea, was discovered but what we do know is that it was a long time ago. The most defining and accurate documentation places the word tea in a Chinese dictionary dating back to 350 A.D.\r\n\r\nGreen Tea is by far the most consumed category of tea in China and there are compelling reasons for this. It has the longest history, the brewing methods are quite flexible, there are many more varieties due to more growing areas, the taste is mellow for all day consumption and the health benefits tick many more boxes than the other categories.'),
(1, 'Black Tea', 'categories/blackTea.jpg', 'BlackTea', 'Known as Hong Cha or Red Tea, the Chinese use this term to describe the colouration of the tea liquor once brewed. We in the west call it Black Tea on account of the colouration of the dried leaves.\r\n\r\nA relatively new category of tea compared to the others. The first accounts of Black Tea production date back to the fourteenth and fifteenth century during the Ming Dynasty. It became more popular during the nineteenth century due to trade routes opening up to foreign lands.\r\n\r\nAfter harvesting the spring leaves of varying sizes, the tea is laid out on bamboo or wire meshing for a whole day to dry and lessen the moisture content. At a cellular level the enzymes in the leaves react with the oxygen helping it change integrity from a green to a black colour. The level of timing and exposure is fundamental to the colour and flavour of the tea. When the desired oxidisation level is achieved, the leaves are placed under hot air blowers to remove any moisture that may still be present.\r\n\r\nFully fermented black tea has a longer shelf life and was the ideal tea category for trade between far off nations within Europe and the United States.'),
(2, 'Oolong Tea', 'categories/oolongTea.jpg', 'OolongTea', 'Known as Wu Long, this category translates to Black Dragon tea. It most likely got its name from a compressed teacake made for the Emperor of the day during the Song Dynasty. This cake was named Phoenix Dragon and as the period of history changed to the Ming Dynasty we find that the tastes change and loose tea is more popular. With this transition came a change of name for this new kind of tea that was halfway between a black and a green tea. Nowadays Oolong Tea is a very popular category both within China and overseas.\r\n\r\nIt requires great skill to produce Oolong. To achieve this semi-fermented outcome the leaves must be left to wither in the sun for a day or so. Next, agitating the edges of the leaves by shaking or rubbing stimulates the oxidisation process. The leaves are then heated and sometimes rolled to shape particular varieties. The longer the heating process the darker the leaves will turn.\r\n\r\nThere is a difference in taste between the varieties of Oolong. Some can be sweet and fruity, or woody and roasted, green and milky or have floral bouquet. This category has much depth and complexity. Generally, Oolong provides the drinker with a useful variation away from either green or black tea, providing great taste and wonderful benefits for health.'),
(3, 'Flowering Tea', 'categories/floweringTea.jpg', 'FloweringTea', 'Known as Hua Cha the various genus of spring blossoms provide a taste and health alternative to Camellia Sinensis teas. Supporting the reviving function of our bodies natural energetics, flowers have a fragrant aroma that help enliven the senses to the sights and smells of new growth and beginnings.\r\n\r\nThe making of flower tea pre-dates the consumption of Camellia teas and has been a vital ingredient in many of the most significant Chinese herbal medicine treatments. On their own or used in blends with Camellia tea, flowers add a nice fragrant balance that can help raise positive outlooks and moods. \r\n\r\nMany people enjoy the delicate and rewarding taste of flower teas especially for their non-caffeinated properties.'),
(4, 'Puerh Tea', 'categories/puerhTea.jpg', 'PuerhTea', 'Puerh Tea has long been identified in Chinese medicine as a daily medicinal essential as well as assisting in weight loss and digestion. Known as Puerh due to the area of Yunnan Province that this famous and ancient category comes from. The origins date back 1700 years and by the Tang Dynasty this tea was traded with more populated areas like Beijing, Tibet and Burma. Due to the remote high altitude the tea was compressed, aged and transported along a vast network of trails known as the Tea Horse Road. This trading route was just as significant as the Silk Road opening up relationships with various parts of Asia and the greater Chinese kingdoms.\r\n\r\nPuerh is harvested from ancient trees that can be centuries old that grow with no human intervention in a random fashion in the back country. With the trees age comes an extensive root system that penetrates deep into the soil drawing nutrient rich minerals into the leaves.\r\n\r\nThere are two different types of Puerh. One type is processed a bit like green tea using hot air and pan-fired methods. Some leaf enzymes stay alive and over time there is a continuous fermentation allowing the tea to age naturally. This is known as Sheng or Raw.\r\n\r\n\r\nThe other type is known as Ripe or Shou. It undergoes a process that cooks the tea after its harvested allowing it to ferment with a fast-tracking of time. A relatively new process, it has become the most popular because it takes less time to create a similar outcome. The tea comes in various forms both compressed and loose. \r\n\r\nPuerh is good for health, enjoyment and collection.'),
(5, 'White Tea', 'categories/whiteTea.jpg', 'WhiteTea', 'White Tea clears summer heat as the expanding energy continues to move upwards and outwards. It replenishes the loss of vital life force energy and fluids, through the sweat, and helps maintain a lively and pleasant outlook to enjoy the summer.\r\n\r\nWhite Tea harmonises the stomach and aids in the metabolism of increased fluid consumption during the hot months.\r\n\r\nWhite tea will remove toxic heat from the body and cool and regulate the liver. It goes through the least processing out of all the categories of tea giving it the highest antioxidant value. \r\n\r\nWith life on planet earth we find it easy to become preoccupied with our thoughts and ideas. Our emotions and state of mind can be flared at times and stress can be a controlling factor. The mind is associated with the heart and the emotion the heart harbours is joy. White tea can cool and regulate the fire of life and help control our emotions in the heat of stressful moments.');

-- --------------------------------------------------------

--
-- Table structure for table `messages`
--

CREATE TABLE IF NOT EXISTS `messages` (
  `name` varchar(64) NOT NULL,
  `email` varchar(50) NOT NULL,
  `subject` varchar(128) NOT NULL,
  `message` text NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `messages`
--

INSERT INTO `messages` (`name`, `email`, `subject`, `message`) VALUES
('Paul', 'Paul@payne.com', 'help', 'I am here'),
('zhichao', 'zhchhan@gmail.com', 'Hello', 'It is Ok');

-- --------------------------------------------------------

--
-- Table structure for table `products`
--

CREATE TABLE IF NOT EXISTS `products` (
  `id` int(11) NOT NULL,
  `name` varchar(30) NOT NULL,
  `price` float NOT NULL,
  `description` text NOT NULL,
  `category_url` varchar(20) NOT NULL,
  `icon` varchar(60) NOT NULL,
  `image` varchar(60) NOT NULL,
  `instock` int(11) DEFAULT NULL,
  `url` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `products`
--

INSERT INTO `products` (`id`, `name`, `price`, `description`, `category_url`, `icon`, `image`, `instock`, `url`) VALUES
(1, 'Jasmine Dragon Pearls', 49.99, 'This variety is a combination of hand-picked and hand-rolled early spring buds scented with a light fragrance of jasmine flower. A unique and spectacular tea for all the senses. It is best brew in a glass vessel to watch and appreciate the skill time and effort that goes into producing this variety. It produces a smooth and lightly scented taste that is always appreciated when drinking with friends. This tea has no artificial essence added. Also known as Mo Li Long Zhu.', 'GreenTea', 'greentea/thumbnail/jasmineDragonPearls.jpg', 'greentea/jasmineDragonPearls.jpg', 95, 'JasmineDragonPearls'),
(2, 'Jasmine Green Tea', 19.99, 'This variety is a combination of jasmine flowers and green tea. One of the best-known blends that is typically served at Chinese restaurants. The uplifting scent of jasmine harmonises well with the tea providing a smooth and floral taste that has been a favourite since the Song Dynasty. This tea has no artificial essence added. Also known as Mo Li Hua Lu Cha. ', 'GreenTea', 'greentea/thumbnail/jasmine.jpg', 'greentea/jasmine.jpg', 82, 'Jasmine'),
(3, 'Lemon Zest and Fur Peak Green ', 33.99, 'This variety is a combination of tiny pieces of lemon zest and high-grade Fur Peak Green Tea. Highly refreshing and ideal to quench the thirst in hot weather. Lemon has been proven to help maximise the absorption of the anti-oxidant compounds throughout the body. This tea has no artificial essence added. Also know as Ning Meng Mao Feng.', 'GreenTea', 'greentea/thumbnail/lemonZest.jpg', 'greentea/lemonZest.jpg', 79, 'LemonZest'),
(4, 'Organic Dragon Well', 49.99, 'This variety is the most famous of all the green tea and is renowned for its flattened sword shaped early picked bud from the first flush of spring. It dates back to the late Ming Dynasty in Zhejiang Province being strongly influenced by an older variety from neighboring Anhui Province. Once produced for the Imperial consumption this tea has an emerald green colour, naturally sweet fragrance and nutty smooth taste. Also known as Long Jing.', 'GreenTea', 'greentea/thumbnail/organicDragonWell.jpg', 'greentea/organicDragonWell.jpg', 92, 'OrganicDragonWell'),
(5, 'Lapsang Souchong Black Tea', 28.99, 'Renowned for its distinctive smoky aroma and tarry smooth flavour, Lapsang is strongly recognised by westerners. Winston Churchill was partial to this variety. Most probably the first variety of black tea to be produced, its fermentation processes have been closely guarded since the Qing Dynasty. A great tea to have with other smoked foods like salmon, cheese and meats. Also known as Smoky Black Tea', 'BlackTea', 'blacktea/thumbnail/lapsang.jpg', 'blacktea/lapsang.jpg', 95, 'Lapsang'),
(6, 'Organic Keemun Fur Peak Black ', 29.99, 'The young brother of Keemun Hong due to being produced in early spring. Also from Qi Men Anhui Province it is considered one of the most premium of all the black teas producing a distinctive naturally sweet honey aroma with a hint of maltiness. A very lively smooth taste with a silky texture. Truly a top shelf black tea. Also called Qi Men Mao Feng.', 'BlackTea', 'blacktea/thumbnail/qiMen.jpg', 'blacktea/qiMen.jpg', 96, 'KeemunFurPeak'),
(7, 'Organic Keemun Hong Black Tea', 24.99, 'The ‘King of Black Tea’, Keemun Hong is the only Black Tea in the Top 10 of Chinese legendary teas. From Qi Men in Anhui Province it is renowned for its brilliant red colour and smooth taste. It is ultimately the best everyday black tea on the market. Also called the Burgundy of Black Tea or Qi Men Hong Cha.', 'BlackTea', 'blacktea/thumbnail/qiHong.jpg', 'blacktea/qiHong.jpg', 96, 'KeemunHong'),
(8, 'Roast Iron Godness', 29.99, 'This famous Fujian Oolong is roasted for a lot longer than its green counterpart. The appearance is typical of the longer fermented oolongs and the flavour and aroma is distinctively unique comparing it to other teas. Reminiscent to coffee this oolong is a rare find. Also known as Lao Tie Guan Yin.', 'OolongTea', 'oolongtea/thumbnail/roastIronGodness.jpg', 'oolongtea/roastIronGodness.jpg', 35, 'RoastIronGodness'),
(9, 'Big Red Robe', 20.99, 'This variety has strong links to a Ming Dynasty Emperor who provided his royal robes to protect the four original plants that produced this famous variety. Over the centuries Big Red Robe has become one of the most famous and expensive tea in the world. It is renowned for it distinctive black twisted slender leaf and rich roasted aroma. A smooth wholesome taste closer to a high-grade early-picked black tea. Also known as Da Hong Pao.', 'oolongtea', 'oolongtea/thumbnail/bigRedRobe.jpg', 'oolongtea/bigRedRobe.jpg', 23, 'BigRedRobe'),
(10, 'Gin Seng', 14.99, 'This Fujian specialty is renowned for its extraordinary appearance. It appears more like tiny green pebbles that tea. The tight green leaves are coated in powdered American Ginseng and Liquorice. A lovely sweet creamy aroma that produces a wonderful energising and flavoursome beverage. Also known as Ren Shen Oolong.', 'oolongtea', 'oolongtea/thumbnail/ginSeng.jpg', 'oolongtea/ginSeng.jpg', 75, 'GinSeng'),
(11, 'Huang Jin Gui', 17.99, 'This variety dates back to the Qing Dynasty and is remarkably similar to Iron Goddess both in appearance and taste. It has a slight hint of osmanthus flower taste with a golden tea liquor. A smooth and mellow green style oolong that is considered a good example of fragrant non-astringent Anxi Fujian Oolongs. Also known as Huang Jin Gui', 'oolongtea', 'oolongtea/thumbnail/huangJinGui.jpg', 'oolongtea/huangJinGui.jpg', 57, 'HuangJinGui'),
(12, 'Golden Chrysanthemum Flower', 20.99, 'This brilliant golden flower is one of the most famous in China and was first cultivated as a herb around the fifteenth century BC. It is recognised for its cleansing and cooling nature helping assist the body rid toxic heat from the liver and clear congestion in the upper body. It is particularly beneficial for eye disharmonies. Also known as Jin Ju Hua', 'floweringtea', 'floweringtea/thumbnail/goldChrysanthemum.jpg', 'floweringtea/goldChrysanthemum.jpg', 44, 'GoldenChrysanthemum'),
(13, 'White Chrysanthemum Flower', 23.99, 'This flower is one of the most famous in China and was first cultivated as a herb around the fifteenth century BC. It is recognised for its cleansing and cooling nature helping assist the body rid toxic heat from the liver and clear congestion in the upper body. It is particularly beneficial for eye disharmonies. Also known as Gong Ju ', 'floweringtea', 'floweringtea/thumbnail/whiteChrysanthemum.jpg', 'floweringtea/whiteChrysanthemum.jpg', 11, 'WhiteChrysanthemum'),
(14, 'Jasmine Flower', 15.99, 'The most well-known of the flowers used to make as a tea. Recognised for its uplifting fragrance and white petalled buds, jasmine produces a sweet delicate taste on its own or can be added to your favourite green or white tea. Drinking jasmine flower is beneficial to those who want to lift their positive spirit, calm inner frustrations and help with damp heat. Also know as Mo Li Hua', 'floweringtea', 'floweringtea/thumbnail/jasmineFlowerTea.jpg', 'floweringtea/jasmineFlowerTea.jpg', 76, 'Jasmine'),
(15, 'Pearl Chrysanthemum Flower', 22.99, 'Produced from unopened chrysanthemum buds, this variety is refreshing, sweet and extremely medicinal. It is particularly good for clearing heat from the liver and cooling dry, itchy, bloodshot eyes. An excellent tea to help eleviate that affects of hayfever or airborne allergens. Great on its own or added to white or green tea. Produced in Zhejiang Province.', 'floweringtea', 'floweringtea/thumbnail/pearlChrys.jpg', 'floweringtea/pearlChrys.jpg', 65, 'PearlChrysanthemum'),
(16, 'Red Rosebud', 21.99, 'Apart from being being visually appealing, the fragrance of rose can help enliven the senses and boost your vitamin intake. This particular variety is the highest grade possible. Used on its own or added to a green or black tea, rose certainly adds a nice touch for any occasion. Particularly good for blood nourishment and replenishment. Also known as Mei Gui Hua', 'floweringtea', 'floweringtea/thumbnail/roseFlowerTea.jpg', 'floweringtea/roseFlowerTea.jpg', 56, 'RedRosebud'),
(17, 'Silver Needles White Tea', 25.99, 'This variety is recognised as the premium variety of White Tea due to being comprised of only the early hand–picked single bud adorned with tiny white downy hairs. A marvel to look at close up and when steeped in water it is a true spectacle of nature. The taste is very smooth and silky with a lingering sweet aftertaste.  Also known as Bai Hao Yin Zhen.', 'WhiteTea', 'whitetea/thumbnail/silverNeedles.jpg', 'whitetea/silverNeedles.jpg', 20, 'SilverNeedles'),
(18, 'White Peony Tea', 28.99, 'This variety is regarded as the most popular within the White Tea category. It has a generous proportion of Silver Needles within its mix of young pilot white leaves that come in association with the slender white downy haired bud. It produces a full-bodied flavour that is refreshing and thirst quenching, smooth and able to be infused multiple times with the same amount you start with. This is a great introduction to white tea. Also know as Bai Mu Dan.', 'WhiteTea', 'whitetea/thumbnail/baimudanPeony.jpg', 'whitetea/baimudanPeony.jpg', 54, 'BaimudanPeony'),
(19, 'Kingdoms Tuotea Puerh', 20.99, 'This variety of Puerh is ready broken from compressed small cakes that have been aged for three years. Separated for convenience, it is ideal for those who want a compressed and cooked style Puerh without having to separate it yourself. A mild earthy flavour with a silky smooth finish. Also know as Shou Puerh Tuo.', 'PuerhTea', 'puerhtea/thumbnail/kingdomsTuotea.jpg', 'puerhtea/kingdomsTuotea.jpg', 12, 'KingdomsTuoteaPuerh'),
(20, 'Raw Puerh Nugget', 7, 'This small recently harvested 8g nugget of tea is ideal for those wanting a measured about of tea to brew.  It is harvested and compressed raw providing a green tea liquor outcome with all the nutritional health benefits and taste associated with Puerh. Produced in Yunnan Provence.', 'PuerhTea', 'puerhtea/thumbnail/rawPuerhNugget.jpg', 'puerhtea/rawPuerhNugget.jpg', 123, 'RawPuerhNugget'),
(21, 'Royal Palace Puerh Tea', 19.99, 'This variety is in a fine loose-leaf form for those who either maybe new to Puerh or want the ease of not having to break off tea from a compressed cake or brick. The flavour has a subtle earthiness with a degree of maltiness that is smooth and easy to drink. The cooked nature of this tea lends to a dark red brew. Also known as Gong Ting Puerh.', 'PuerhTea', 'puerhtea/thumbnail/royalPalace.jpg', 'puerhtea/royalPalace.jpg', 41, 'RoyalPalacePuerhTea'),
(22, 'Hei Cha', 24.99, 'This ancient category of tea has undergone microbial fermentation and is a unique probiotic source containing the Eurotium Crhristatum (Golden Flower) fungus. The tea after harvest undertakes a process that compresses the tea and exposes the leaves to high humidity as it drys slowly. Millions of people living in high-altitude deserts that border China like Tibet and Mongolia used this tea for their digestive harmony when fresh fruit and vegetables were non-existent.\r\n\r\nThere is nothing fancy about Hei Cha compared with fine manicured bud tea that is hand-rolled. It is compressed (similar to PuEr) and broken for convenience. The taste is never astringent with a pleasant sweet woodsy flavour and dark tea liquor. One of the first probiotic drinks in history, this tea is an excellent digestive aid.\r\n\r\nBest brewed in a porcelain teapot using 85°C of water temperature, 5g of tea, steeping for 3-5 minutes. Several infusions are achieved.  Also known as Hei Cha.', 'PuerhTea', 'puerhtea/thumbnail/heiCha.jpg', 'puerhtea/heiCha.jpg', 16, 'HeiCha');

-- --------------------------------------------------------

--
-- Table structure for table `purchased_items`
--

CREATE TABLE IF NOT EXISTS `purchased_items` (
  `id` int(11) NOT NULL,
  `purchases_id` int(11) NOT NULL,
  `product_id` int(11) NOT NULL,
  `purchased_price` float NOT NULL,
  `purchased_quantity` int(11) NOT NULL
) ENGINE=MyISAM AUTO_INCREMENT=12 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `purchased_items`
--

INSERT INTO `purchased_items` (`id`, `purchases_id`, `product_id`, `purchased_price`, `purchased_quantity`) VALUES
(1, 3, 6, 29.99, 1),
(2, 4, 7, 24.99, 1),
(3, 5, 12, 20.99, 1),
(4, 6, 2, 19.99, 1),
(5, 6, 13, 23.99, 3),
(6, 7, 21, 19.99, 3),
(7, 7, 17, 25.99, 15),
(8, 7, 19, 20.99, 1),
(9, 8, 18, 28.99, 1),
(10, 9, 13, 23.99, 3),
(11, 10, 6, 29.99, 1);

-- --------------------------------------------------------

--
-- Table structure for table `purchases`
--

CREATE TABLE IF NOT EXISTS `purchases` (
  `id` int(11) NOT NULL,
  `user_id` int(11) NOT NULL,
  `date` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  `name` varchar(50) NOT NULL,
  `address` varchar(60) NOT NULL,
  `city` varchar(30) NOT NULL,
  `state` varchar(50) NOT NULL,
  `postcode` varchar(10) NOT NULL,
  `country` varchar(30) NOT NULL,
  `paypal_id` varchar(30) DEFAULT NULL,
  `status` enum('created','approved','failed','canceled','expired') DEFAULT 'failed'
) ENGINE=MyISAM AUTO_INCREMENT=11 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `purchases`
--

INSERT INTO `purchases` (`id`, `user_id`, `date`, `name`, `address`, `city`, `state`, `postcode`, `country`, `paypal_id`, `status`) VALUES
(1, 31, '2016-05-26 03:54:55', 'Eric Han', '21 wonga st', 'Canterbury', 'NSW', '2193', 'Australia', NULL, 'failed'),
(2, 31, '2016-05-26 03:57:09', 'Eric Han', '21 wonga st', 'Canterbury', 'NSW', '2193', 'Australia', NULL, 'failed'),
(3, 31, '2016-05-26 04:03:03', 'Eric Han', '21 wonga st', 'Canterbury', 'NSW', '2193', 'Australia', 'PAY-3U1380772R3643133K5DHKGY', 'approved'),
(4, 31, '2016-05-26 04:50:02', 'Eric Han', '21 wonga st', 'Canterbury', 'NSW', '2193', 'AU', 'PAY-1BE223641K624702TK5DH2QI', 'approved'),
(5, 31, '2016-05-26 05:28:14', 'Eric Han', '21 wonga st', 'Canterbury', 'NSW', '2193', 'AU', 'PAY-9TC403945U9059312K5DIR7Q', 'approved'),
(6, 33, '2016-06-01 03:24:11', 'Eric Han', '21 wonga st', 'Canterbury', 'NSW', '2193', 'AU', 'PAY-0GC648357X264602DK5HFKNY', 'approved'),
(7, 31, '2016-06-08 04:25:38', 'Eric Han', '21 wonga st', 'Canterbury', 'NSW', '2193', 'AU', NULL, 'failed'),
(8, 31, '2016-06-09 00:46:50', 'Eric Han', '21 wonga st', 'Canterbury', 'NSW', '2193', 'AU', NULL, 'failed'),
(9, 38, '2016-06-15 02:08:10', 'Eric Han', '21 wonga st', 'Canterbury', 'NSW', '2193', 'AU', NULL, 'failed'),
(10, 31, '2016-06-16 05:31:15', 'Eric Han', '21 wonga st', 'Canterbury', 'NSW', '2193', 'AU', NULL, 'failed');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE IF NOT EXISTS `users` (
  `id` int(11) NOT NULL,
  `username` varchar(64) NOT NULL,
  `password` varchar(64) NOT NULL,
  `salt` varchar(64) NOT NULL,
  `first_name` varchar(20) NOT NULL,
  `last_name` varchar(20) NOT NULL,
  `email` varchar(50) NOT NULL,
  `status` enum('customer','staff','admin','') NOT NULL,
  `admin` tinyint(4) NOT NULL DEFAULT '0',
  `newsletter` tinyint(1) NOT NULL DEFAULT '0',
  `locked` tinyint(4) NOT NULL DEFAULT '0'
) ENGINE=InnoDB AUTO_INCREMENT=39 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `username`, `password`, `salt`, `first_name`, `last_name`, `email`, `status`, `admin`, `newsletter`, `locked`) VALUES
(31, '247b65243ef05d33afc2c3973d69481149b4178c83aeeca8b4e1b0a3d84033a0', '1663e50a8c306f42c939c3cc82c9df6ce91a848723b9f9142cd790a5138cec32', '7e100f7c37b0450542f198304bff9b70195acc53036c4927f0f4779cb255a07b', 'Han', 'Zhichao', 'zhchhan@gmail.com', 'customer', 1, 1, 0),
(32, 'a14784ea3b8e4812ae0622f6262bff79048b2ec219e7024cb54f89facd4b0152', '295ef86d5c25d62fd6ee6be534f40acaaa63390d33117be1561a68424ecbcc55', '3031e334324f0c9e50fd80c73281f56a0c30d83cfd2e082f02f5bc4b5b99ad45', 'use', 'ven', '12122@gmail.com', 'customer', 0, 1, 1),
(33, '69f7070947ba8e5e5b5c2ccb7abcd16bab2befb396e913378e06856251c4a34b', 'd4299567411dd1036c46f43703d9e3431ba2443b3c7a0759987f70a076ff4619', 'ae654a8425001267d251a2f85b34f9512654af1f9998a069e57d269b55017362', 'zhichao', 'han', 'zhchhan@gmail.com', 'customer', 0, 1, 0),
(34, '821f392ee61fd736b1b50f2c30880cdb4a3a2c7c002a85b099ef37c7ef446051', 'df6c446cf8dcd4c3becc222dbe88974461a342f098e9c994b812c2ab1483e2b6', 'd76a78d7b76701a60985ab1a2af931f64832ba5b6d6fc219081e7f3b3b38d5a9', 'steven', 'yuli', 'useven@163.com', 'customer', 0, 1, 0),
(35, '39319f20473fe6917d3b9257e74fd9799eaeaca6e1417fe0d01d9f4aafaaa9cb', '64aedcb79c785f20f031f1892d27ddb37e2e3f3fc17e9cf8f77e582152a910c1', '1070f1e20890246ed85c17c651877d7af13aa1646deac87f5689edc8533e42fa', 'wei', 'pan', 'wei.pan@dinglicom.com', 'customer', 0, 1, 0),
(36, '3d5a5c6d374d71478b490288a993158b2a0a6616442bc924d22fb766b0de7f9d', '72812eed0894a80002c9b353654507f613fea1fd2c6b9e1bf8b319a8920b53d9', '5a6e54904a390359360b2d37a459aa5ced8094a493fa08694da0fe8c18aae5de', 'yan', 'wang', 'yan.wang@dinglicom.com', 'customer', 0, 1, 0),
(38, 'fec30d8b3827172e4bed3520572f4a2c7d1e9abddac2e4b2147d3d9c0dcc0d9d', '26afebda00464e03c9c14e4a7f962df284025919ba993d1cc8f073003d9bdcdd', '9dc4758bbbde08ea4a2aa428fc5bf3a2e2b79c738572865ed0887da08ba19872', 'zhichao', 'han', 'zhchhan@gmail.com', 'customer', 1, 1, 0);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `purchased_items`
--
ALTER TABLE `purchased_items`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `purchases`
--
ALTER TABLE `purchases`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `purchased_items`
--
ALTER TABLE `purchased_items`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=12;
--
-- AUTO_INCREMENT for table `purchases`
--
ALTER TABLE `purchases`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=11;
--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=39;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
