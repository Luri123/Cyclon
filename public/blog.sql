-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Mar 10, 2023 at 10:30 AM
-- Server version: 10.4.27-MariaDB
-- PHP Version: 8.0.25

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `blog`
--

-- --------------------------------------------------------

--
-- Table structure for table `authors`
--

CREATE TABLE `authors` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) NOT NULL,
  `description` text NOT NULL,
  `image` varchar(255) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `authors`
--

INSERT INTO `authors` (`id`, `name`, `description`, `image`, `created_at`, `updated_at`) VALUES
(1, 'Jenny', '<p>New York Times bestselling author Jenny Fox writes sweet, fun, action-packed mysteries. Her characters are clever and fearless, but in real life, Angie is afraid of basements, bees, and going up stairs when it is dark behind her. Let&rsquo;s face it. Angie wouldn&rsquo;t last five minutes in one of her books...</p>', '1678402358.png', '2023-03-08 23:41:24', '2023-03-10 09:52:38'),
(2, 'Anna', '<p>New York Times bestselling author Anna writes sweet, fun, action-packed mysteries. Her characters are clever and fearless, but in real life, Angie is afraid of basements, bees, and going up stairs when it is dark behind her. Let&rsquo;s face it. Angie wouldn&rsquo;t last five minutes in one of her books.</p>', '1678402383.png', '2023-03-08 23:41:39', '2023-03-10 09:53:03'),
(3, 'Elias', '<p>New York Times bestselling author Elias writes sweet, fun, action-packed mysteries. Her characters are clever and fearless, but in real life, Angie is afraid of basements, bees, and going up stairs when it is dark behind her. Let&rsquo;s face it. Angie wouldn&rsquo;t last five minutes in one of her books.</p>', '1678402408.png', '2023-03-08 23:41:56', '2023-03-10 10:02:40');

-- --------------------------------------------------------

--
-- Table structure for table `blogs`
--

CREATE TABLE `blogs` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `category_id` bigint(20) UNSIGNED DEFAULT NULL,
  `title` varchar(255) NOT NULL,
  `image` varchar(255) NOT NULL,
  `image1` varchar(255) NOT NULL,
  `image2` varchar(255) NOT NULL,
  `slug` varchar(255) NOT NULL,
  `description` text NOT NULL,
  `author_id` bigint(20) UNSIGNED DEFAULT NULL,
  `status` tinyint(4) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `blogs`
--

INSERT INTO `blogs` (`id`, `category_id`, `title`, `image`, `image1`, `image2`, `slug`, `description`, `author_id`, `status`, `created_at`, `updated_at`) VALUES
(5, 4, 'OBJECT Is an Umbrella for Anna Bera’s Utility Objects xx', '640a2fba7b4ca.png', '640a2fba7b99e.jpg', '640a2fba7bcd0.jpg', 'object-is-an-umbrella-for-anna-beras-utility-objects-xx', '<p>When an adjacent property went up for sale next to a young family of five, they bought it in order to create their dream Hideaway House. They hired <em>Cera Stribley</em> who utilized the excavated lot to design an underground living space that could house everything an adult could dream of, including an indoor pool, bar and lounge, gold room, and gym. The original home&rsquo;s basement has been converted into a new guest suite and connects the house to the new underground space.</p>\r\n<p>When creating the <span style=\"text-decoration: underline;\">OBJECT</span> collection, Polish artist and maker Anna Bera was searching. Searching for a place where an object suddenly appears without justification, but whose existence is indisputable. The series was on display during the 19th edition of Collect in London as part of the Collect Open exhibition, the international fair&rsquo;s platform for pioneering, thought-provoking craft installations by individual artists.</p>\r\n<p><em>At Collect Open</em>, <em>Bera</em> debuted the latest addition to OBJECT: a 2.6-meter tall sculpture, hand-carved from sycamore wood with a mirror made of polished steel. Its design, like the rest of the collection&rsquo;s utility objects &ndash; the form of which does not reveal the functionality &ndash; plays with form. OBJECT is full of sculptures that may perform the function of mirrors, but then again may not. You may view it as something else entirely. This curiosity of function doesn&rsquo;t make the pieces any less legitimate, even if all they do is simply exist.</p>', 1, 1, '2023-03-10 06:12:58', '2023-03-10 20:18:23'),
(6, 4, 'Felipe Pantone’s Kosmos Exhibition Explores Balance in Kinetic Art', '640a32d7bfa28.png', '640a311d99107.jpg', '640a318fec46f.jpg', 'felipe-pantones-kosmos-exhibition-explores-balance-in-kinetic-art', '<p>Stop by <span style=\"text-decoration: underline;\">CONTROL </span>Gallery in Los Angeles before March 18, 2023 to see<em> Felipe Pantone&rsquo;s </em>exploration of the space found between polarities: Kosmos. This marks the Argentinian-Spanish visual artist&rsquo;s first exhibition in the city. &ldquo;Given the history of art in Southern California, it&rsquo;s only natural that Felipe&rsquo;s ﬁrst solo exhibition in Los Angeles not only puts light and space at the forefront, but genuinely breathes fresh life into movement via his distinctly modern approaches,&rdquo; shared Gallery Director Aurora Fisher.</p>\r\n<p>Kosmos marks the debut of Pantone&rsquo;s SUBTRACTIVE VARIABILITY KOSMOS series, featuring a collection of works that produce continuous motion for extended periods of time. With a monicker borrowed from the Greek word for order, the work in the collection creates balance from polar opposites where two extremes can exist at the same place and time.</p>\r\n<p>&ldquo;I kept thinking about how all forms are perfectly related to all other forms, in the sense that I can be happy or sad, things can be positive or negative, and yet everything is in perfect balance,&rdquo; said Pantone. &ldquo;That led me to be inspired by Calder, then George Rickey, and other artists that worked around the idea of perfect equilibrium. Kosmos is my exploration of that thought process.&rdquo;</p>\r\n<p>&nbsp;</p>', 2, 1, '2023-03-10 06:18:53', '2023-03-10 06:26:15'),
(7, 4, 'The Doodle Collection Is Blind Contour Drawings Come to Life', '640a329f3d2b7.png', '640a329f3daa3.jpg', '640a329f3f90c.jpg', 'the-doodle-collection-is-blind-contour-drawings-come-to-life', '<p>It comes as no surprise that the chairs and table that make up the <span style=\"text-decoration: underline;\">Doodle Collection</span> are each one-of-a-kind. Designed by <span style=\"text-decoration: underline;\">Leah Ring</span> for her studio, Another Human, each piece of furniture resembles a blind contour drawing brought to life in three dimensions. Chaos, asymmetry, and an organic process were all welcomed in creating these unique pieces.</p>\r\n<p>Each features&nbsp;linework made of nickel-plated steel that&rsquo;s been hand-bent and welded together, and the table includes a gravity-defying resin top. Ring describes the process of making the <span style=\"text-decoration: underline;\">Doodle Collection</span> as &ldquo;free and exploratory&rdquo; and different from past furniture pieces released through Another Human.</p>', 2, 1, '2023-03-10 06:25:19', '2023-03-10 06:25:19'),
(8, 4, 'Marusela Granell + Manu Bañó Create Beauty With Raw Materials', '640a338c59fb7.png', '640a33f38cbef.png', '640a338c5afa4.jpg', 'marusela-granell-manu-bano-create-beauty-with-raw-materials', '<p><em><strong>La verdad de la materia</strong>&nbsp;</em>is an exhibition presented in Mexico City during this year&rsquo;s&nbsp;ZONA MACO, and will be public until March 15th.&nbsp;Marusela Granell&nbsp;and&nbsp;Manu Ba&ntilde;&oacute;&rsquo;s&nbsp;works are linked by the simple yet powerful actions of cutting, folding, gluing, and ripping. The two artists share a deep desire to create beauty through manipulation of raw materials.</p>\r\n<p>While Manu employs industrial materials in a mechanical process to produce sculptural and functional objects without drawing on references, Marusela deconstructs painting by highlighting the elements that make it up. She uses worn-out tubes of oil paint and pieces of paper as both artwork and models.</p>\r\n<p>Manu Ba&ntilde;&oacute;&rsquo;s latest collection delves into the unique qualities and limitations of copper. Crafted in Santa Clara del Cobre, Michoac&aacute;n, Mexico, a town renowned for its centuries-old goldsmithing heritage, the collection showcases the expertise of local artisans, who specialize in crafting small objects such as pots and vessels.</p>\r\n<p>Comprising three distinct pieces &ndash; a chair, coffee table, and wall lamp &ndash; the collection is the result of a labor-intensive process involving the manual hammering of a thin copper sheet. This technique imbues the metal with both strength and a three-dimensional quality that distinguishes each piece.</p>', 3, 1, '2023-03-10 06:29:16', '2023-03-10 06:30:59'),
(9, 4, 'Desktop Wallpaper: March 2023', '640a34f37ace8.png', '640a34f37b43c.jpg', '640a34f37babb.jpg', 'desktop-wallpaper-march-2023', '<p>It&rsquo;s a new month, so it&rsquo;s time to refresh your laptops and screens with our latest Designer Desktop! This month&rsquo;s artwork is by Mario De Meyer, a graphic designer and artist from Ghent, Belgium best known for his typography-based artworks. He has worked with clients including Adobe, Speedo, Penguin Books, Bloomberg, Fortune, Inc., Ogilvy &amp; Mather, IBM, Wired, Henkel, and more.</p>\r\n<p>De Meyer also experiments with abstract creations, one of which turned into this month&rsquo;s trippy and eye-catching desktop wallpaper...</p>', 1, 1, '2023-03-10 06:35:15', '2023-03-10 17:51:32'),
(10, 4, 'Nanocrystaline Chairs That Grow Themselves From Copper', '640a358f20393.png', '640a358f20c34.jpg', '640a358f212d3.jpg', 'nanocrystaline-chairs-that-grow-themselves-from-copper', '<p>Despite looking heavy yet delicate,&nbsp;<strong><a href=\"https://maxlamb.org/\" target=\"_blank\" rel=\"noopener external noreferrer\" data-wpel-link=\"external\">Max Lamb&rsquo;s</a>&nbsp;<a href=\"https://maxlamb.org/178-copper/\" target=\"_blank\" rel=\"noopener external noreferrer\" data-wpel-link=\"external\">Nanocrystaline Chairs</a></strong>&nbsp;are anything but. In 2006, the London-based artist began thinking about creating a chair using a material that could be melted away once it was encased in copper. This series of four chairs is the result.</p>\r\n<p>Lamb molded each chair, one at a time, in order to use the very same wax for each. The mold was sprayed with a fine suspension of colloidal silver in alcohol, then submerged in a tank holding a solution of 15% copper. What happens next is referred to as the electro-deposition process. While soaking inside the tank, nanocrystals grew and encapsulated the wax in a honeycomb pattern &ndash; this is where the material&rsquo;s strength and flexibility is found. After spending nearly a week in the tank, the chair&rsquo;s shell was formed.</p>\r\n<p>Once complete, the wax gets melted, drained into a custom heat box, and reused for the next design. While molding the sculptural chairs, Lamb considered their engineering as much as their appearance. The holes in each design help to provide thin, supporting walls of copper between the inner and outer portions. As mentioned, the chairs are both light and strong</p>', 3, 1, '2023-03-10 06:37:51', '2023-03-10 06:37:51'),
(11, 5, 'The Cozy Shoe Trend Has Taken Over The Fashion World', '640a39160d770.png', '640a39160e608.jpg', '640a39160f3c8.jpg', 'the-cozy-shoe-trend-has-taken-over-the-fashion-world', '<p>A fun little fabric called&nbsp;<em>boucl&eacute;</em>&nbsp;has taken the home decor world by storm. Woven from looped yarn, boucl&eacute; is soft and nubby. And after hitting the interior design scene in 2019, it quickly became a fan favorite. The fuzzy fabric has adorned everything from on-trend sofas to fluffy throw pillows. And now, it&rsquo;s making a beeline for our footwear&mdash;blessing us all with&nbsp;<a href=\"https://stylecaster.com/shoe-trends-2023/\" target=\"_blank\" rel=\"noopener\">cozy shoes</a>.</p>\r\n<p><a href=\"https://stylecaster.com/best-slippers/\" target=\"_blank\" rel=\"noopener\">Fuzzy shoes</a>&nbsp;aren&rsquo;t necessarily new. But boucl&eacute; does cozy footwear better than most. Why? The fabric is durable and stain-resistant, so it&rsquo;s great for furniture&mdash;and even better for footwear. And since it doesn&rsquo;t absorb water well, it holds up on drizzly days. Plus, cleaning boucl&eacute; shoes is easy: Just dip a cloth in soapy water, and dab stains away in a snap.</p>\r\n<p>The only problem? Boucl&eacute; shoes aren&rsquo;t easy to find. In the footwear world, boucl&eacute; goes by many names:&nbsp;<a href=\"https://stylecaster.com/ugg-boots-target/\" target=\"_blank\" rel=\"noopener\"><em>sherpa</em>,&nbsp;<em>faux shearling</em>,&nbsp;<em>fleece</em></a>, and sometimes just&nbsp;<em>faux fur</em>. So when you search for &ldquo;boucl&eacute; shoes,&rdquo; you might draw a blank&mdash;even if the store you&rsquo;re browsing is packed with fuzzy footwear.</p>\r\n<p>The trick is knowing where&mdash;and how&mdash;to look. And since we&rsquo;ve become armchair experts in boucl&eacute; terminology, we can save you a few hours of sleuthing.</p>', 2, 1, '2023-03-10 06:52:54', '2023-03-10 06:52:54'),
(12, 5, 'The Banana Republic Spring Collection Is On Sale', '640a3a845cfb1.png', '640a3a0f4641c.jpg', '640a3a0f46c9e.jpg', 'the-banana-republic-spring-collection-is-on-sale', '<p><span style=\"color: rgb(0, 0, 0);\">At the end of a fashion season, we are usually given the opportunity to play psychic and guess which sale items will stand the test of time and be&nbsp;<a style=\"color: rgb(0, 0, 0);\" href=\"https://stylecaster.com/fashion-trends-2023/\">relevant in the future</a>. Are you still going to be into low-rise jeans next year? Maybe! What about a micro-mini bag? Only time will tell. The guessing game of end-of-season sales can be difficult which is why I was so excited to see that Banana Republic is&nbsp;<a style=\"color: rgb(0, 0, 0);\" href=\"https://bananarepublic.gap.com/\" target=\"_blank\" rel=\"nofollow noopener noskim\" data-bamx-auction-end=\"Thu Mar 09 2023 08:54:05 GMT-1100 (GMT-11:00)\" data-bamx-auction=\"{\" data-bamx-auction-start=\"Thu Mar 09 2023 08:54:01 GMT-1100 (GMT-11:00)\" data-bamx-link=\"98q51875lu5\">having a huge sale</a>&nbsp;on current season pieces and new arrivals. The&nbsp;<a style=\"color: rgb(0, 0, 0);\" href=\"https://bananarepublic.gap.com/\" target=\"_blank\" rel=\"nofollow noopener noskim\" data-bamx-auction-end=\"Thu Mar 09 2023 08:54:05 GMT-1100 (GMT-11:00)\" data-bamx-auction=\"{\" data-bamx-auction-start=\"Thu Mar 09 2023 08:54:01 GMT-1100 (GMT-11:00)\" data-bamx-link=\"4m0435clabe\">Banana Republic sale</a>&nbsp;is live right now online and in stores which means you get to take up to 40 percent off of your&nbsp;<em>entire&nbsp;</em>purchase of eligible items until March 13th. Plus, you can get free 2-3 day shipping with a $175 minimum purchase with code BRSHIP.</span></p>\r\n<div id=\"trxppp221139\">\r\n<div id=\"eng_recs_holder_75608503304494510\"></div>\r\n</div>\r\n<p><span style=\"color: rgb(0, 0, 0);\">Whether you&rsquo;re shopping for<a style=\"color: rgb(0, 0, 0);\" href=\"https://stylecaster.com/feature/best-womens-winter-coats-1173202/\" target=\"_blank\" rel=\"noopener\">&nbsp;spring weather basics</a>&nbsp;like maxi skirts and button-downs or have been searching for&nbsp;<a style=\"color: rgb(0, 0, 0);\" href=\"https://stylecaster.com/best-holiday-dresses/\" target=\"_blank\" rel=\"noopener\">a standout evening look</a>, Banana Republic has you covered. In my opinion, the brand really stepped up its game this year and incorporated pieces into the spring collection that feel current but still classy. Standouts include the perfect spring trench coat, wool trousers and a gorgeous green slip dress.</span></p>\r\n<p><span style=\"color: rgb(0, 0, 0);\">The percentage off your purchase will be added to your cart at checkout so you can shop with ease. The sale also applies to the men&rsquo;s section so this is your chance to shop for everyone who may need a spring wardrobe refresh.</span></p>', 3, 1, '2023-03-10 06:57:03', '2023-03-10 10:27:16'),
(13, 5, 'Stand Out Amongst Your Peers With One of These Prom Dresses That No One Else Will Have', '640a3c147c3bf.png', '640a3c147cb56.jpg', '640a3c147d19d.jpg', 'stand-out-amongst-your-peers-with-one-of-these-prom-dresses-that-no-one-else-will-have', '<p><span style=\"color: rgb(0, 0, 0);\">Prom dresses have seriously come a long way since I was in school. I remember a lot of polka dots, poofy dresses paired with Converse sneakers and halter top shiny dresses with asymmetrical hemlines. But you know, it&rsquo;s 2023, the year of instant TikTok makeup tutorials, the mastery of insane dance moves and fashion master class lessons of how to style just about any garment. Needless to say, the<a style=\"color: rgb(0, 0, 0);\" href=\"https://stylecaster.com/prom-dresses/\" target=\"_blank\" rel=\"noopener\">&nbsp;prom-goers look chic AF</a> these days, and honestly, it&rsquo;s not fair.</span></p>\r\n<div id=\"trxppp221139\">\r\n<div id=\"eng_recs_holder_88453217745644080\"></div>\r\n</div>\r\n<p><span style=\"color: rgb(0, 0, 0);\">There are so many more great options for dresses that can be shipped directly to your door, like the endless stock of frocks at&nbsp;<a style=\"color: rgb(0, 0, 0);\" href=\"https://go.linkby.com/UFBXYOJU/\" target=\"_blank\" rel=\"nofollow noopener\">Alamour the Label</a>. Seriously, these dresses come in any color and fabric you can dream up. And with details like cutouts, crystal embellishments, corset boning and more, you can find a gown to suit any personal style. And chances are, no one else will have this look because you didn&rsquo;t just get it&nbsp;<em>anywhere.</em>&nbsp;You went to the Australian brand that&rsquo;s known for its formal wear. Plus, if you&rsquo;re a first-time shopper, you can download the Alamour mobile app to get 15 percent off of your first purchase.</span></p>', 2, 1, '2023-03-10 07:05:40', '2023-03-10 07:05:40'),
(14, 5, 'Cropped Button-Downs Are Trending for Spring', '640a3ddad4581.png', '640a3ddad4f2c.jpg', '640a3ddad5609.jpg', 'cropped-button-downs-are-trending-for-spring', '<p><span style=\"color: rgb(0, 0, 0);\">Spring is on the horizon, which means warmer temps, longer days, and day-to-night wardrobe staples on rotation. One of the biggest office-to-off-duty&nbsp;<a style=\"color: rgb(0, 0, 0);\" href=\"https://stylecaster.com/fashion-trends-2023/\" target=\"_blank\" rel=\"noopener\">fashion trends for spring 2023</a>, already in high demand in anticipation of the sunshiny season, is the cropped button-down. Pricier retailers including&nbsp;<a style=\"color: rgb(0, 0, 0);\" href=\"https://www.tkqlhce.com/click-8725733-14519783?sid=SC--cropped-button-down-target-xid-fr1678392118431iji&amp;url=https%3A%2F%2Fwww.madewell.com%2Fpoplin-oversized-supercrop-ex-boyfriend-shirt-99106965344.html%3Fsource%3DgooglePLA%26noPopUp%3Dtrue%26srcCode%3DPaid_Search%7CShopping_NonBrand_PMax_NCA%7CGoogle%7CMWGGBS00002_99106965344_19488503921___c_pla_online__9060351%26utm_source%3Dgoogle%26utm_medium%3Dcpc%26utm_campaign%3DMadewell_Shopping_PLA_US_Women_Tops_PMax%26utm_term%3D%26utm_content%3Dshopping_ads%26gclsrc%3Daw.ds%26%26gclid%3DCj0KCQiAgaGgBhC8ARIsAAAyLfEhRLDvGe2enOlGgvdM8Ve60zQcDbW34zvF0hJRaOJk2z9GZYiORRkaAr4qEALw_wcB%26gclsrc%3Daw.ds\" target=\"_blank\" rel=\"noopener nofollow\" data-xid=\"fr1678392118431iji\" data-ml=\"true\" data-ml-id=\"0\" data-orig-url=\"https://www.tkqlhce.com/click-8725733-14519783?sid=SC--cropped-button-down-target&amp;url=https%3A%2F%2Fwww.madewell.com%2Fpoplin-oversized-supercrop-ex-boyfriend-shirt-99106965344.html%3Fsource%3DgooglePLA%26noPopUp%3Dtrue%26srcCode%3DPaid_Search%7CShopping_NonBrand_PMax_NCA%7CGoogle%7CMWGGBS00002_99106965344_19488503921___c_pla_online__9060351%26utm_source%3Dgoogle%26utm_medium%3Dcpc%26utm_campaign%3DMadewell_Shopping_PLA_US_Women_Tops_PMax%26utm_term%3D%26utm_content%3Dshopping_ads%26gclsrc%3Daw.ds%26%26gclid%3DCj0KCQiAgaGgBhC8ARIsAAAyLfEhRLDvGe2enOlGgvdM8Ve60zQcDbW34zvF0hJRaOJk2z9GZYiORRkaAr4qEALw_wcB%26gclsrc%3Daw.ds\">Madewell</a>,&nbsp;<a style=\"color: rgb(0, 0, 0);\" href=\"https://www.gopjn.com/t/8-9711-152170-104709?url=https%3A%2F%2Fwww.everlane.com%2Fproducts%2Fwomens-silky-cttn-cropped-shirt-white&amp;sid=SK--cropped-button-down-target|xid:fr1678392118432bie&amp;website=253400\" target=\"_blank\" rel=\"noopener nofollow\" data-xid=\"fr1678392118432bie\" data-ml=\"true\" data-ml-id=\"1\" data-orig-url=\"https://www.gopjn.com/t/8-9711-152170-104709?url=https%3A%2F%2Fwww.everlane.com%2Fproducts%2Fwomens-silky-cttn-cropped-shirt-white&amp;sid=SK--cropped-button-down-target&amp;website=253400\" aria-invalid=\"true\">Everlane</a>,&nbsp;<a style=\"color: rgb(0, 0, 0);\" href=\"https://bananarepublic.gap.com/browse/product.do?pid=580050032\" target=\"_blank\" rel=\"nofollow noopener noskim\" data-bamx-auction-end=\"Thu Mar 09 2023 09:01:55 GMT-1100 (GMT-11:00)\" data-bamx-auction=\"{\" data-bamx-auction-start=\"Thu Mar 09 2023 09:01:51 GMT-1100 (GMT-11:00)\" data-bamx-link=\"s8ivll9jr1\">Banana Republic</a>&nbsp;and&nbsp;<a style=\"color: rgb(0, 0, 0);\" href=\"https://go.skimresources.com/?id=87443X1593552&amp;xs=1&amp;xcust=--cropped-button-down-target|xid:fr1678392118432aec&amp;url=https%3A%2F%2Fwww.abercrombie.com%2Fshop%2Fus%2Fp%2Fcropped-poplin-button-up-shirt-48466319%3Fseq%3D02%26source%3Dgoogleshopping%26cmp%3DPLA%3AEVG%3A20%3AA%3AD%3AUSCA%3AX%3AGGL%3AX%3ASHOP%3AX%3AX%3AX%3AX%3Ax%3AA%2526F%2BAdults_Google_Shopping_LIA_US_Tops_All%2Bproducts_PRODUCT_GROUP%26gclid%3DCj0KCQiAgaGgBhC8ARIsAAAyLfGiCVlEmwhES3zXn65NEbV_lLuI_J8ZcjcEjDhxpOpHqAYhATU7fJIaAgj_EALw_wcB%26gclsrc%3Daw.ds&amp;sref=https%3A%2F%2Fstylecaster.com%2Fcropped-button-down-trend%2F\" target=\"_blank\" rel=\"noopener nofollow\" data-xid=\"fr1678392118432aec\" data-ml=\"true\" data-ml-id=\"2\" data-orig-url=\"https://go.skimresources.com/?id=87443X1593552&amp;xs=1&amp;xcust=--cropped-button-down-target&amp;url=https%3A%2F%2Fwww.abercrombie.com%2Fshop%2Fus%2Fp%2Fcropped-poplin-button-up-shirt-48466319%3Fseq%3D02%26source%3Dgoogleshopping%26cmp%3DPLA%3AEVG%3A20%3AA%3AD%3AUSCA%3AX%3AGGL%3AX%3ASHOP%3AX%3AX%3AX%3AX%3Ax%3AA%2526F%2BAdults_Google_Shopping_LIA_US_Tops_All%2Bproducts_PRODUCT_GROUP%26gclid%3DCj0KCQiAgaGgBhC8ARIsAAAyLfGiCVlEmwhES3zXn65NEbV_lLuI_J8ZcjcEjDhxpOpHqAYhATU7fJIaAgj_EALw_wcB%26gclsrc%3Daw.ds&amp;sref=https%3A%2F%2Fstylecaster.com%2Fcropped-button-down-trend%2F\" aria-invalid=\"true\">Abercrombie</a>&nbsp;carry variations of the style. But, thanks to&nbsp;<a style=\"color: rgb(0, 0, 0);\" href=\"https://goto.target.com/c/256585/81938/2092?subId1=--cropped-button-down-target&amp;u=https%3A%2F%2Fwww.target.com%2Fp%2Fwomen-39-s-long-sleeve-button-down-cropped-shirt-universal-thread-8482-white-l%2F-%2FA-87086166&amp;subId3=xid:fr1678392118432fce\" target=\"_blank\" rel=\"noopener nofollow\" data-xid=\"fr1678392118432fce\" data-ml=\"true\" data-ml-id=\"3\" data-orig-url=\"https://goto.target.com/c/256585/81938/2092?subId1=--cropped-button-down-target&amp;u=https%3A%2F%2Fwww.target.com%2Fp%2Fwomen-39-s-long-sleeve-button-down-cropped-shirt-universal-thread-8482-white-l%2F-%2FA-87086166\">Target</a>, you can get the look for less, which is exactly what we&rsquo;re planning to do.</span></p>\r\n<div id=\"trxppp221139\"></div>\r\n<p><span style=\"color: rgb(0, 0, 0);\">According to fashion expert and stylist&nbsp;<a style=\"color: rgb(0, 0, 0);\" href=\"https://www.instagram.com/nainasingla/\" target=\"_blank\" rel=\"noopener nofollow\" aria-invalid=\"true\">Naina Singla</a>, the cropped button-down trend is not one to be missed. Unlike its traditional version, the modern take &mdash; which has an element of influence from the early 2000s &mdash; is more versatile. &ldquo;It can be worn with mid-rise or high-waisted pants&hellip;[depending on how] conservative [you want to] look,&rdquo; Singla explains. At the same time, the piece &ldquo;is more relaxed and doesn&rsquo;t require a front tuck,&rdquo; making it a perfect, casual transitional item heading into the warmer seasons.</span></p>\r\n<p><span style=\"color: rgb(0, 0, 0);\">It&rsquo;s important to note, however, that not all cropped button-downs are cut to the same length. Some shirts are more cropped than others and might not be considered appropriate for all work environments. According to shoppers,&nbsp;<a style=\"color: rgb(0, 0, 0);\" href=\"https://goto.target.com/c/256585/81938/2092?subId1=--cropped-button-down-target&amp;u=https%3A%2F%2Fwww.target.com%2Fp%2Fwomen-39-s-long-sleeve-button-down-cropped-shirt-universal-thread-8482-white-l%2F-%2FA-87086166&amp;subId3=xid:fr1678392118432bid\" target=\"_blank\" rel=\"noopener nofollow\" data-xid=\"fr1678392118432bid\" data-ml=\"true\" data-ml-id=\"4\" data-orig-url=\"https://goto.target.com/c/256585/81938/2092?subId1=--cropped-button-down-target&amp;u=https%3A%2F%2Fwww.target.com%2Fp%2Fwomen-39-s-long-sleeve-button-down-cropped-shirt-universal-thread-8482-white-l%2F-%2FA-87086166\">Target&rsquo;s version</a>&nbsp;of the closet must-have runs between true to size and oversized and generally hits at the natural waist, so it pairs perfectly with high-waisted bottoms.</span></p>\r\n<p><span style=\"color: rgb(0, 0, 0);\">One reviewer said, &ldquo;I usually wear a size small, but since it is an&nbsp;oversized item, I sized down. I like [how] light and airy this top is. You could totally dress this up for business wear or a special occasion or dress it down with some flats and jeans. Very comfy and stylish.&rdquo; Another added, &ldquo;I do not feel it is too short, it hits right at the narrowest part of my waist and looks great with high-waisted pants&hellip; It&rsquo;s super cute, and it gives me Jesse from&nbsp;<em>Parent Trap</em>&nbsp;vibes.&rdquo;</span></p>', 1, 1, '2023-03-10 07:13:14', '2023-03-10 10:27:28'),
(15, 2, 'The Best Supplements For Postpartum Depression, Gut Health & Nutritio', '640a3fbb98c86.png', '640a3fbb994a2.jpg', '640a3fbb99db0.jpg', 'the-best-supplements-for-postpartum-depression-gut-health-nutritio', '<p><span style=\"color: rgb(0, 0, 0);\">We are in for such a treat today because Lauryn is sharing the postpartum supplement and nutrition plan that Dr. Daryl Gioffre recommended to her.If you aren&rsquo;t familiar with Dr. Daryl Gioffre or his brand Get Off Your Acid, allow us:Dr. Daryl Gioffre is a highly sought-after longevity expert who uses a cutting-edge approach to nutrition to help his patients fight inflammation and achieve and maintain an optimal level of health and energy.</span></p>\r\n<p><span style=\"color: rgb(0, 0, 0);\">In his most recent episode (listen here) he discusses how we can heal our gut, tests we can take, how healing our gut can heal disease and how our overall health and performance will benefit from doing so.And in case you missed his first podcast episode, you can <a style=\"color: rgb(0, 0, 0);\" href=\"https://tscpodcast.com/episodes/352-dr-daryl-gioffre/\" target=\"_blank\" rel=\"nofollow noopener\">listen to it here</a>. He talks about changing your life by reclaiming your health, getting off your acid and making decisions that can have life-altering effects.</span></p>\r\n<p><span style=\"color: rgb(0, 0, 0);\">Highly recommend both episodes, especially if you&rsquo;re into health &amp; wellness. Dr. Daryl is a wealth of knowledge and shares valuable, useful, tangible tips that can help you &amp; your quality of life.He should know, he&rsquo;s a former Sugar Addict turned Health Machine. So he knows firsthand what it takes to overcome challenges in the pursuit of superior health.Anyway, he gave Lauryn this whole protocol to follow for optimal health, not only for her, but for Townes too (through nursing). These recommendations are good for the gut-brain connection, recovery, and overall nutrition.</span></p>', 3, 1, '2023-03-10 07:21:15', '2023-03-10 07:21:15'),
(16, 2, 'All about our home gym', '640a40ec8b481.png', '640a40ec8bbed.jpg', '640a40ec8c186.jpg', 'all-about-our-home-gym', '<p><span style=\"color: rgb(0, 0, 0);\">It has been so much fun working out at home. We worked with Nordictrack and iFit and have their machines which I wanted to share more about in this post because I am not going to lie, I expected to get ones that were like the machines at my gym.. but these BLEW MY MIND!</span></p>\r\n<p><span style=\"color: rgb(0, 0, 0);\">I had never seen machines like this! For cardio we have the&nbsp;<a style=\"color: rgb(0, 0, 0);\" href=\"https://www.nordictrack.com/ellipticals/nordictrack-spacesaver-se9i-elliptical\" target=\"_blank\" rel=\"noopener\">elliptical</a>,&nbsp;<a style=\"color: rgb(0, 0, 0);\" href=\"https://www.nordictrack.com/exercise-bikes/s22i-studio-bike\" target=\"_blank\" rel=\"noopener\">bike</a>,&nbsp;<a style=\"color: rgb(0, 0, 0);\" href=\"http://bit.ly/2uDtJro\" target=\"_blank\" rel=\"noopener\">treadmill</a>, and&nbsp;<a style=\"color: rgb(0, 0, 0);\" href=\"http://bit.ly/2RUMUVD\" target=\"_blank\" rel=\"noopener\">row machine</a>. The&nbsp;<a style=\"color: rgb(0, 0, 0);\" href=\"http://bit.ly/2RUMUVD\" target=\"_blank\" rel=\"noopener\">row machine</a>&nbsp;is probably my personal favorite &ndash; you can select work outs on the screen that either make you feel like you are rowing down an actual body of water &ndash; they have a ton of locations you can pick from! Or you can do work outs with a trainer.. one of my favorites is a quick 15 minute burner that has you do interval training on and off the rower. David&rsquo;s favorite is the treadmill since he has been training for another triathlon. You can select to do hikes, runs, or work with a trainer.&nbsp; But with an upcoming surf trip he&rsquo;s been doing the HIT training workouts on the row machine that takes him on and off the machine mixed with floor exercises. The best part is that the treadmill automatically adjusts.. so if you are going uphill on the hike the treadmill will adjust its incline and speed to make it feel like you are really on the hike. I love to do the trainer work outs on the treadmill because I love anything that is interval training and it has pushed me to try new speeds at new inclines that I normally wouldn&rsquo;t try myself.</span></p>\r\n<p><span style=\"color: rgb(0, 0, 0);\">The same thing goes for the&nbsp;<a style=\"color: rgb(0, 0, 0);\" href=\"http://bit.ly/37uSqF6\" target=\"_blank\" rel=\"noopener\">fusion machine</a>&nbsp;&ndash; you can follow along with weighted workouts and the weight will adjust automatically based on your profile and the workout.&nbsp; I love to do a little cardio mixed with mostly weights so I LOVE this machine. There is soooo much you can do with it and the work outs you watch on the screen are really helpful because some of the moves I had never seen before so it is fun to mix it up.</span></p>', 1, 1, '2023-03-10 07:26:20', '2023-03-10 10:23:46'),
(17, 2, 'Daily Habits That Could Lead To Chronic Illness', '640a4298206f1.png', '640a429820e2b.png', '640a4298213b6.jpg', 'daily-habits-that-could-lead-to-chronic-illness', '<h4>Dr. Terry Wahls on 7 Daily Patterns That&nbsp;Could Lead To Chronic Illness</h4>\r\n<p>I am a professor of medicine at the University of Iowa, and for most of my career I believed wholeheartedly in the power of modern medicine, in our latest greatest drugs, in our ever-more-expert procedural interventions. In 2000, I was diagnosed with multiple sclerosis.&nbsp;</p>\r\n<p>I went on a desperate quest for information, discovering the key to slowing and reversing my autoimmune condition was to support my brain, cells and mitochondria. Mitochondria are located inside cells, and work to produce energy.</p>\r\n<p>Now, I understand, both on an intellectual level and quite literally at the cellular level, the power of eating and living for the health of the cells and the mitochondria. I changed how I practiced medicine, and I now help my patients realize the top seven factors that influence disease development:</p>\r\n<p>UNADDRESSED NUTRIENT DEFICIENCIES. A diet without enough fruit and vegetables is lacking in micronutrients, and this has been associated with higher rates of cancer, diabetes, high blood pressure, heart disease, and multiple sclerosis</p>\r\n<p>UNRECOGNIZED FOOD SENSITIVITIES. Food sensitivities, such as to gluten, are often an unseen part of many disorders including psychological problems, neurological problems, autoimmune problems, skin rashes, asthma, allergies and more.</p>\r\n<p>TOXIN OVERLOAD. Our environment is full of toxins from vehicles, factories, plastics in our homes, mercury dental fillings, and chemical farm sprays. These chemicals interact with our cells, the signals that are sent between cells, and our mitochondria, interrupting normal function and increasing inflammation.</p>\r\n<p>EXCESS STRESS. Chronic stress disrupts hormone balance and increases overall inflammation. Practicing meditation or other stress-reduction activities on a daily basis can help reduce stress levels and protect your cells from inflammation.</p>', 2, 1, '2023-03-10 07:33:28', '2023-03-10 07:33:28'),
(18, 2, '5 health benefits of the mediterranean diet', '640a43ab22ca4.png', '640a43ab23806.jpg', '640a43ab24301.jpg', '5-health-benefits-of-the-mediterranean-diet', '<p>While traveling with my family the past few years, I absolutely fell in love with the mediterranean lifestyle. The food, people and culture are captivating. It wasn&rsquo;t until I started researching this way of life that I learned so much more about the health benefits associated with a Mediterranean-inspired diet and way of life.</p>\r\n<p>The Mediterranean Diet is a heart healthy diet based on the recipes and cooking styles of the countries that border the&nbsp;mediterranean sea. People living in the mediterranean region are thought to be some of the healthiest people in the world, based in part on their low presence of certain chronic diseases. If you&rsquo;ve ever been curious about the benefits of The Mediterranean Diet, keep reading to find out why it&rsquo;s been named one of the top ways of eating for the last 10 years!</p>\r\n<div>\r\n<p><strong>1. Reduced Risk of Heart Disease</strong><strong>&nbsp;</strong></p>\r\n<p><strong>2. Decreased Risk for Type 2 Diabetes</strong>&nbsp;</p>\r\n<p><strong>3. Reduced Risk of Certain Cancers&nbsp;</strong></p>\r\n<p><strong>4. Possible Reduced Risk of Alzheimer&rsquo;s Disease&nbsp;</strong></p>\r\n<p><strong>5. Bringing Back to Joy of Eating</strong></p>\r\n</div>', 2, 1, '2023-03-10 07:38:03', '2023-03-10 10:24:14'),
(19, 2, 'A rainy day in vermont', '640a44e8767d2.png', '640a44e876e6a.jpg', '640a45331f34f.png', 'a-rainy-day-in-vermont', '<p>Hope everyone is having a good week! This is a goooood week. It started off yesterday (Sunday) where I seriously had an epiphany that I can&rsquo;t stop thinking about and it made me realize that everything happens for a reason &ndash; ah I wish I could tell you guys more (I will later) and I hate being secretive but am only mentioning that because it is like crazzzy on my mind.</p>\r\n<p>Then today was just a good day &ndash; I got to see baby at the doctor and baby is healthy and good. After we went to our house and seriously just stayed for a couple hours.. it is getting so hard to leave because I just want to stay at the house and never leave.. I love it so much it hurts!</p>\r\n<p>&nbsp;I just finished making little treats for Atticus to take to school on Wednesday (just did simple little spider lollipop things). Tomorrow I have a date with Atticus that he is SOOOO excited for &ndash; it is so so adorable how excited he is! And its just a good week. Things are moving along with the house which has me feeling sooo excited and the closer December gets the more it feels real.&nbsp;</p>', 1, 1, '2023-03-10 07:43:20', '2023-03-10 10:27:01'),
(20, 2, 'Mint chocolate chip cake donuts', '640a460abee7c.png', '640a460ac02a2.jpg', '640a460ac0f77.jpg', 'mint-chocolate-chip-cake-donuts', '<p>My son Remington loves green. Every single day he wears green. It makes it pretty difficult that his older brother\'s hand me down clothes are mostly blue which was the typical \"boy clothing\" color. So every year when St. Patrick\'s Day comes around I go all out in green for him! These mint chocolate chip cake donuts came to me one night when I was laying in bed wishing I had a donut.</p>\r\n<p>It was probably the Food Network show I was watching combined with me thinking what recipes I was going to create this week that had me thinking of donuts at midnight. But the problem was that I couldn\'t stop thinking about them until I made them 2 days later.</p>\r\n<p>I knew I wanted to do something a little different then the typical mint brownie recipe this year for St. Patty&rsquo;s Day! And let me tell you these were even better than I could have ever imagined them to be! Just think about it for a second. A freshly baked donut topped with a mint glaze! Come on! What could be more delicious than that! And let me tell you they were just as fun to bake as they were to eat!</p>', 1, 1, '2023-03-10 07:48:10', '2023-03-10 10:26:41'),
(21, 3, 'Tahiti travel diary : fun in the sun', '640a46fb6c2cb.png', '640a46fb6cbc9.jpg', '640a46fb6d2d4.jpg', 'tahiti-travel-diary-fun-in-the-sun', '<p>Finally sharing some of our Tahiti travel diary pictures!!! We had such a blast in Tahiti - like seriously SO much fun. We were first at Le Taha\'a Island Resort in one of their over the water bungalows. The kids were going nuts and were soo excited. We would pretty much swim and jump off our deck all day long. We did snorkeling, took a long nap on our raft, went kayaking, ate lots of yummy food and drank one too many pina coladas :)</p>\r\n<p>so many fun memories made on this trip. And to anyone considering doing this with kids, they set up a net around our bungalow and had a gate that had to be opened to get down to the water - so I did feel really safe with the kids being so close to water. Also, we were literally just always with them so it was never a worry.</p>\r\n<p>&nbsp;</p>', 3, 1, '2023-03-10 07:52:11', '2023-03-10 10:26:29'),
(22, 3, 'Beautiful Barcelona', '640a478fad83c.png', '640a478fae02f.jpg', '640a478fae619.jpg', 'beautiful-barcelona', '<p>Taking a vacation, no matter where you go &ndash; is always such an amazing time to seek adventure, relax and get away from every-day life that can wear us out. For some of us who work in a traditional office setting by day, getting away for a long trip can be few and far between. If you&rsquo;re having a tough time leaving the office for a vacation, you need to make the most of your trip! Here&rsquo;s 5 ways to make the most of your vacation.</p>\r\n<p><strong>Research Ahead of Time :</strong>&nbsp;There&rsquo;s nothing more disappointing on a vacation than getting there and realizing you have no plan and no idea how you want to spend your time. Of course, you don&rsquo;t need a play by play schedule of each day. But it&rsquo;s nice to have an overall idea of where you may want to eat, the places you want to see, and the day you want to spend time relaxing. It&rsquo;s nice to have a balance and plan in advance to ensure you get to do everything you want to do.</p>\r\n<p><strong>Wake Up Early :</strong>&nbsp;I know many of us wake up early during the week and it can be hard to get up at the same time when you&rsquo;re in a magical place&hellip;BUT I think it&rsquo;s all the more reason to get up early! You don&rsquo;t want to waste any moment of your time there. Even if you relax as soon as you get up, enjoy a slow morning. Have breakfast in bed, read a book, and watch the sun rise! You&rsquo;ll experience dreamy views, a fun long day and capture some stunning Instagram photos&hellip;</p>', 2, 1, '2023-03-10 07:54:39', '2023-03-10 10:26:12'),
(23, 3, 'Returning to Hawaii', '640a482ae26e1.png', '640a482ae2e73.jpg', '640a482ae36d2.jpg', 'returning-to-hawaii', '<p>Ah you guys Hawaii just felt like home it was amazing! Felt so good to be back. We booked this trip a long time ago with some credit card points we had &ndash; David actually booked it for a Mother&rsquo;s Day gift and we were supposed to go in August but had to switch dates to November. We spent most of our time on Oahu and then some on Kauai.</p>\r\n<p>It was our first time to Kauai and it is beautiful. I do think we will stick to Oahu mostly though just because it is always nice to have a spot where you know people to hang out with, your favorite food spots, your beaches, etc.&nbsp;</p>\r\n<p>I love the familiar feeling of Oahu but I was glad we finally got to see Kauai and it is as beautiful as everyone says. The first part of our trip we stayed over by&nbsp;Lanikai Beach at an airbnb. It was a good location because it was close to the beach and also right next to town so we were close to lots of good food and a Target which was nice because I always forget stuff on trips. I forgot to pack the kids sandals so we went and got cheap little flip flops for them which they thought were SO cool. I also almost always forget my toothbrush. And we also stocked up on some good snacks for the beach.</p>', 3, 1, '2023-03-10 07:57:14', '2023-03-10 10:25:32'),
(24, 3, 'New zealand travel guide', '640a49108ebc2.png', '640a49108f602.jpg', '640a49108fe10.jpg', 'new-zealand-travel-guide', '<p>New Zealand was such a dream. Like truly one of our favorite family trips to date!!! When I was almost done with our itinerary I had asked followers to share recommendations so I compiled all the most recommended things to do and see below.</p>\r\n<p>Also in this post I will be sharing &nbsp;also my travel itinerary. The thing is, I adjusted the first half to what we would have done differently - so our time in the North island is altered a bit and I added on a couple days. The time on the South Island is our EXACT itinerary.</p>\r\n<p>You could of course adjust and spend an extra day here or there and take away time somewhere else or skip a spot all together. A couple things I really wish we had time for in South Island were Milford Sounds and Abel Tasman! Hope you enjoy! Have you visited New Zealand, what was your favorite part? Leave any additional tips for people reading this in the comments!</p>', 2, 1, '2023-03-10 08:01:04', '2023-03-10 10:25:10'),
(25, 1, 'How to decorate with neutrals', '640a4a1bda96d.png', '640a4a1bdb0d4.jpg', '640a4a1bdb77e.jpg', 'how-to-decorate-with-neutrals', '<p>Decorating with neutrals is a personal favorite of mine. When it come to neutrals the key is to think texture. Choose furniture pieces and textiles with tons of visible pattern and texture. Here I layered creams and grays all with different textures and patterns to create design interest with out color for my couch.Distressed white and cream pieces of furniture also add texture while still being neutral.</p>\r\n<p>Decorating with neutrals is a personal favorite of mine. When it come to neutrals the key is to think texture. Choose furniture pieces and textiles with tons of visible pattern and texture. Here I layered creams and grays all with different textures and patterns to create design interest without color for my couch. Distressed white and cream pieces of furniture also add texture while still being neutral.</p>\r\n<p>Wood tones are a great way to add contrast to a neutral space. It brings in an earthy grounded element that would other wise be missing with out color.</p>\r\n<p>*<em>pro tip:</em>&nbsp;keep wood finishes to three different colors or less (this includes floor color). Adding corbels, wood frames or side tables in various wood tones makes for a cozy inviting space that you and your family want to curl up in.When it comes to whites, do not be afraid to layer all of the shades together. Bright white walls with cream linen couches and warm white furniture pieces. Gone are the days of not being able to mix whites and creams!</p>', 1, 1, '2023-03-10 08:05:31', '2023-03-10 10:24:51'),
(26, 1, 'Home sneak peek', '640a4a9ba4d8a.png', '640a4a9ba53d8.jpg', '640a4a9ba592e.jpg', 'home-sneak-peek', '<p>I am so beyond excited to share some sneak peeks of the design of our new home we are building! We are working with&nbsp;Becki Owens for the second time and I am so excited with how the final designs turned out. I also just feel incredibly spoiled and grateful to even be building a home.</p>\r\n<p>This has always been a dream of mine and I am thrilled to have a home our kids can make memories and grow up in. I\'m super excited to share the process with you all. Once we got to Arizona we were searching for an architect and found Sean from Pinnacle Conceptions and he is really really really talented and I am so happy we found him.</p>\r\n<p>He thought of every last detail when it came to the floor plan, height of stairs, door ways, functionality, evvvverything. If you are in Arizona and need an architect I would recommend him a million times over!!! Follow him on insta because he will posting sneak peeks of our house too :)</p>', 1, 1, '2023-03-10 08:07:39', '2023-03-10 10:24:31');

-- --------------------------------------------------------

--
-- Table structure for table `categories`
--

CREATE TABLE `categories` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) NOT NULL,
  `slug` varchar(255) NOT NULL,
  `status` tinyint(4) NOT NULL DEFAULT 1,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `categories`
--

INSERT INTO `categories` (`id`, `name`, `slug`, `status`, `created_at`, `updated_at`) VALUES
(1, 'Design', 'design', 1, '2023-03-08 23:43:00', '2023-03-10 20:18:01'),
(2, 'Lifestyle', 'lifestyle', 1, '2023-03-08 23:43:08', '2023-03-08 23:43:08'),
(3, 'Travel', 'travel', 1, '2023-03-08 23:43:18', '2023-03-08 23:43:18'),
(4, 'Art', 'art', 1, '2023-03-08 23:43:23', '2023-03-08 23:43:23'),
(5, 'Fashion', 'fashion', 1, '2023-03-08 23:43:29', '2023-03-08 23:43:29');

-- --------------------------------------------------------

--
-- Table structure for table `comments`
--

CREATE TABLE `comments` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `post_id` int(11) NOT NULL,
  `username` varchar(255) NOT NULL,
  `comment_body` text NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `comments`
--

INSERT INTO `comments` (`id`, `post_id`, `username`, `comment_body`, `created_at`, `updated_at`) VALUES
(1, 1, 'pixie_case', 'This blog offers practical advice for budget-conscious travelers, from finding affordable flights and accommodations to exploring local culture without spending a fortune.', '2023-03-10 00:57:43', '2023-03-10 00:57:43'),
(2, 1, 'pixie_case', 'Great post! I really enjoyed reading your perspective on topic. You brought up some really interesting points that I hadn\'t considered before. Looking forward to reading more from you!', '2023-03-10 03:16:46', '2023-03-10 03:16:46'),
(3, 1, 'JorgenaSh', 'As someone who is new to topic, I found your post to be a great introduction. You covered all the basics and provided some really helpful resources. I can\'t wait to learn more!', '2023-03-10 03:18:59', '2023-03-10 03:18:59'),
(4, 1, 'Elias', 'Thank you for sharing your vulnerability in this post. It takes a lot of courage to open up about this topic and I\'m sure your words will help others who are going through similar struggles. You\'re making a difference!', '2023-03-10 03:23:11', '2023-03-10 03:23:11'),
(5, 15, 'pixie_case', 'Comment 1', '2023-03-10 17:46:49', '2023-03-10 17:46:49'),
(6, 23, 'zoecases.al', 'Test comment', '2023-03-10 17:58:56', '2023-03-10 17:58:56'),
(7, 19, 'Adhurim Quku', 'Beautiful Article', '2023-03-10 20:09:25', '2023-03-10 20:09:25'),
(8, 25, 'artistike.avjor', 'tghgfhg', '2023-03-10 20:16:06', '2023-03-10 20:16:06');

-- --------------------------------------------------------

--
-- Table structure for table `failed_jobs`
--

CREATE TABLE `failed_jobs` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `uuid` varchar(255) NOT NULL,
  `connection` text NOT NULL,
  `queue` text NOT NULL,
  `payload` longtext NOT NULL,
  `exception` longtext NOT NULL,
  `failed_at` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `migrations`
--

CREATE TABLE `migrations` (
  `id` int(10) UNSIGNED NOT NULL,
  `migration` varchar(255) NOT NULL,
  `batch` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `migrations`
--

INSERT INTO `migrations` (`id`, `migration`, `batch`) VALUES
(100, '2014_10_12_000000_create_users_table', 1),
(101, '2014_10_12_100000_create_password_resets_table', 1),
(102, '2019_08_19_000000_create_failed_jobs_table', 1),
(103, '2019_12_14_000001_create_personal_access_tokens_table', 1),
(104, '2023_02_23_110842_create_categories_table', 1),
(105, '2023_02_23_111213_create_blogs_table', 1),
(106, '2023_02_23_140229_create_subscribers_table', 1),
(107, '2023_02_26_184915_create_comments_table', 1),
(108, '2023_02_27_110802_create_authors_table', 1),
(109, '2023_03_04_182440_add_role_as_to_users_table', 1);

-- --------------------------------------------------------

--
-- Table structure for table `password_resets`
--

CREATE TABLE `password_resets` (
  `email` varchar(255) NOT NULL,
  `token` varchar(255) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `personal_access_tokens`
--

CREATE TABLE `personal_access_tokens` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `tokenable_type` varchar(255) NOT NULL,
  `tokenable_id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) NOT NULL,
  `token` varchar(64) NOT NULL,
  `abilities` text DEFAULT NULL,
  `last_used_at` timestamp NULL DEFAULT NULL,
  `expires_at` timestamp NULL DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `subscribers`
--

CREATE TABLE `subscribers` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `email` varchar(255) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `subscribers`
--

INSERT INTO `subscribers` (`id`, `email`, `created_at`, `updated_at`) VALUES
(1, 'jcase.land11@gmail.com', '2023-03-10 10:03:05', '2023-03-10 10:03:05'),
(2, 'jcase.land@gmail.com', '2023-03-10 10:03:21', '2023-03-10 10:03:21'),
(3, 'jcase.land123@gmail.com', '2023-03-10 17:45:57', '2023-03-10 17:45:57'),
(4, 'admin123@admin.com', '2023-03-10 17:46:01', '2023-03-10 17:46:01'),
(5, 'jcase.land99@gmail.com', '2023-03-10 17:57:42', '2023-03-10 17:57:42'),
(6, 'jcasee@gmail.com', '2023-03-10 20:19:02', '2023-03-10 20:19:02');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `email_verified_at` timestamp NULL DEFAULT NULL,
  `password` varchar(255) NOT NULL,
  `remember_token` varchar(100) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `role_as` int(11) NOT NULL DEFAULT 0
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `name`, `email`, `email_verified_at`, `password`, `remember_token`, `created_at`, `updated_at`, `role_as`) VALUES
(1, 'Jorgena Shinjatari', 'admin11@admin.com', NULL, '$2y$10$bH.iZK3VQryWHsoTLAIVVOpnw4iV/yMVApXLHUW3wS83oFHy54CHq', NULL, '2023-03-08 23:32:47', '2023-03-08 23:32:47', 1),
(2, 'Jorgena Shinjatari1', 'admin123@admin.com', NULL, '$2y$10$drR2kXJmW/SIREk8OZtE7.otQ0SlrafEtGrCkZIefswDw6WqZVVaW', NULL, '2023-03-09 00:41:19', '2023-03-09 00:41:19', 0);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `authors`
--
ALTER TABLE `authors`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `blogs`
--
ALTER TABLE `blogs`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `blogs_slug_unique` (`slug`),
  ADD KEY `blogs_category_id_index` (`category_id`),
  ADD KEY `blogs_author_id_index` (`author_id`);

--
-- Indexes for table `categories`
--
ALTER TABLE `categories`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `categories_slug_unique` (`slug`);

--
-- Indexes for table `comments`
--
ALTER TABLE `comments`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `failed_jobs`
--
ALTER TABLE `failed_jobs`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `failed_jobs_uuid_unique` (`uuid`);

--
-- Indexes for table `migrations`
--
ALTER TABLE `migrations`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `password_resets`
--
ALTER TABLE `password_resets`
  ADD KEY `password_resets_email_index` (`email`);

--
-- Indexes for table `personal_access_tokens`
--
ALTER TABLE `personal_access_tokens`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `personal_access_tokens_token_unique` (`token`),
  ADD KEY `personal_access_tokens_tokenable_type_tokenable_id_index` (`tokenable_type`,`tokenable_id`);

--
-- Indexes for table `subscribers`
--
ALTER TABLE `subscribers`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `subscribers_email_unique` (`email`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `users_email_unique` (`email`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `authors`
--
ALTER TABLE `authors`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `blogs`
--
ALTER TABLE `blogs`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=27;

--
-- AUTO_INCREMENT for table `categories`
--
ALTER TABLE `categories`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `comments`
--
ALTER TABLE `comments`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT for table `failed_jobs`
--
ALTER TABLE `failed_jobs`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=110;

--
-- AUTO_INCREMENT for table `personal_access_tokens`
--
ALTER TABLE `personal_access_tokens`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `subscribers`
--
ALTER TABLE `subscribers`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
