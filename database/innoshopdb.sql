-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Máy chủ: localhost
-- Thời gian đã tạo: Th12 12, 2022 lúc 02:59 AM
-- Phiên bản máy phục vụ: 10.4.21-MariaDB
-- Phiên bản PHP: 8.0.19

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Cơ sở dữ liệu: `id17378250_webbanhang`
--

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `tbl_categories`
--

CREATE TABLE `tbl_categories` (
  `id` int(11) NOT NULL,
  `name` varchar(100) NOT NULL,
  `img` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Đang đổ dữ liệu cho bảng `tbl_categories`
--

INSERT INTO `tbl_categories` (`id`, `name`, `active`, `img`) VALUES
(1, 'Gia Vị', 1, 'category-dairy-bread-eggs.jpg'),
(2, 'Thực Phẩm', 1, 'category-snack-munchies.jpg'),
(3, 'Bánh quy', 1, 'category-bakery-biscuits.jpg');

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `tbl_orders`
--

CREATE TABLE `tbl_orders` (
  `id` int(11) NOT NULL,
  `status` varchar(20) NOT NULL,
  `amount` bigint(20) NOT NULL,
  `payment` varchar(30) NOT NULL,
  `username` varchar(30) NOT NULL,
  `createdAt` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Đang đổ dữ liệu cho bảng `tbl_orders`
--

INSERT INTO `tbl_orders` (`id`, `status`, `amount`, `payment`, `username`, `createdAt`) VALUES
(1, 'Cancel', 450000, 'Cash on Delivery', 'client14@ueh.com.vn', '2022-11-10 13:16:49'),
(2, 'Completed', 450000, 'Cash on Delivery', 'client14@ueh.com.vn', '2022-11-11 13:16:49');

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `tbl_order_products`
--

CREATE TABLE `tbl_order_products` (
  `orderId` int(11) NOT NULL,
  `productId` int(11) NOT NULL,
  `quantity` int(11) NOT NULL,
  `amount` bigint(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Đang đổ dữ liệu cho bảng `tbl_order_products`
--

INSERT INTO `tbl_order_products` (`orderId`, `productId`, `quantity`, `amount`) VALUES
(1, 1, 2, 640000),
(1, 2, 2, 470000),
(2, 2, 2, 470000);

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `tbl_posts`
--

CREATE TABLE `tbl_posts` (
  `id` int(11) NOT NULL,
  `title` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `sumary` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `content` text COLLATE utf8_unicode_ci NOT NULL,
  `imgThummail` varchar(100) COLLATE utf8_unicode_ci NOT NULL,
  `createdAt` datetime NOT NULL,
  `createdBy` varchar(10) COLLATE utf8_unicode_ci NOT NULL,
  `hotNews` tinyint(1) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Đang đổ dữ liệu cho bảng `tbl_posts`
--

INSERT INTO `tbl_posts` (`id`, `title`, `sumary`, `content`, `imgThummail`, `createdAt`, `createdBy`, `hotNews`) VALUES
(1, 'Ra mắt UEH Community Shop: Trang giao dịch bán hàng trực tuyến vì cộng đồng đầu tiên tại UEH', 'Ra mắt UEH Community Shop: Trang giao dịch bán hàng trực tuyến vì cộng đồng đầu tiên tại UEH', '<div class=\"entry-content single-page\">\r\n\r\n		<div id=\"text-888749541\" class=\"text\">\r\n		\r\n<p>Với chiến lược <span data-text-color=\"secondary\">“Hành động vì một tương lai bền vững”</span> – For a more sustainable future, lần đầu tiên UEH ra mắt trang giao dịch bán hàng trực tuyến UEH Community Shop với các sản phẩm phục vụ cho cộng đồng và vì cộng đồng. Tại đây, các UEHer có thể dễ dàng tìm kiếm các nguồn sách kinh tế hữu ích cũng như các sản phẩm sáng tạo, mang màu sắc thương hiệu của cộng đồng UEH. Đặc biệt, UEH Community Shop hoạt động với chủ trương bán hàng phi lợi nhuận, khoản chênh lệch thu chi sẽ được đóng góp vào Quỹ Giving to UEH nhằm tái đầu tư vào các hoạt động ươm mầm tài năng, đầu tư vươn tầm quốc tế, lan tỏa tri thức, và các dự án hành động bền vững của nhà trường.&nbsp;</p>\r\n		\r\n<style>\r\n#text-888749541 {\r\n  font-size: 0.95rem;\r\n  color: rgb(0,0,0);\r\n}\r\n#text-888749541 > * {\r\n  color: rgb(0,0,0);\r\n}\r\n</style>\r\n	</div>\r\n	\r\n	<div id=\"text-2086842040\" class=\"text\">\r\n		\r\n<h2 class=\"uppercase\" style=\"text-align: center;\"><span data-text-color=\"primary\"><strong>Tiên phong trên hành trình bền vững</strong></span></h2>\r\n<p><span style=\"font-weight: 400;\">Từ những thay đổi về nhận diện thương hiệu trên hành trình tái định vị UEH trở thành đại học đa ngành và bền vững, UEH Community Shop – trang bán hàng trực tuyến vì cộng đồng ra đời tiếp tục khẳng định định hướng hiện đại, hội nhập, và tinh thần sáng tạo của nhà trường thông qua các sản phẩm quà lưu niệm, sản phẩm từ dự án khởi nghiệp đổi mới sáng tạo, đồng thời thể hiện sự hoàn chỉnh, chỉn chu, khoa học trên từng sản phẩm sách, giáo trình học tập, tài liệu tham khảo,…</span><br>\r\n		\r\n<style>\r\n#text-2086842040 {\r\n  font-size: 0.95rem;\r\n  color: rgb(0,0,0);\r\n}\r\n#text-2086842040 > * {\r\n  color: rgb(0,0,0);\r\n}\r\n</style>\r\n	</p></div>\r\n	\r\n	<div id=\"text-1044592491\" class=\"text\">\r\n		\r\n<blockquote><p><i style=\"color: #333333;\">“UEH Community Shop là nỗ lực tiếp theo của nhà trường trong hành trình số hóa, với phương châm đặt chất lượng lên hàng đầu, không chỉ trong hoạt động đào tạo, nghiên cứu mà còn là các chương trình gia tăng giá trị, phục vụ cộng đồng UEHer nói riêng và xã hội nói chung.”</i></p></blockquote>\r\n<p style=\"text-align: right;\">Bùi Quang Hùng – Phó Hiệu trưởng UEH chia sẻ</p>\r\n		\r\n<style>\r\n#text-1044592491 {\r\n  font-size: 0.75rem;\r\n  text-align: right;\r\n  color: rgb(0,0,0);\r\n}\r\n#text-1044592491 > * {\r\n  color: rgb(0,0,0);\r\n}\r\n</style>\r\n	</div>\r\n	\r\n	<div class=\"img has-hover x md-x lg-x y md-y lg-y\" id=\"image_1685364343\">\r\n								<div class=\"img-inner dark\">\r\n			<img width=\"1020\" height=\"448\" src=\"https://shop.ueh.edu.vn/wp-content/uploads/2022/09/z3719707012420_b771a14026960b06a4cebe9b5acb7fcf-1024x450.jpg\" data-src=\"https://shop.ueh.edu.vn/wp-content/uploads/2022/09/z3719707012420_b771a14026960b06a4cebe9b5acb7fcf-1024x450.jpg\" class=\"attachment-large size-large lazy-load-active\" alt=\"\" loading=\"lazy\" srcset=\"https://shop.ueh.edu.vn/wp-content/uploads/2022/09/z3719707012420_b771a14026960b06a4cebe9b5acb7fcf-1024x450.jpg 1024w, https://shop.ueh.edu.vn/wp-content/uploads/2022/09/z3719707012420_b771a14026960b06a4cebe9b5acb7fcf-300x132.jpg 300w, https://shop.ueh.edu.vn/wp-content/uploads/2022/09/z3719707012420_b771a14026960b06a4cebe9b5acb7fcf-768x338.jpg 768w, https://shop.ueh.edu.vn/wp-content/uploads/2022/09/z3719707012420_b771a14026960b06a4cebe9b5acb7fcf-1536x676.jpg 1536w, https://shop.ueh.edu.vn/wp-content/uploads/2022/09/z3719707012420_b771a14026960b06a4cebe9b5acb7fcf-550x242.jpg 550w, https://shop.ueh.edu.vn/wp-content/uploads/2022/09/z3719707012420_b771a14026960b06a4cebe9b5acb7fcf.jpg 1912w\" data-srcset=\"https://shop.ueh.edu.vn/wp-content/uploads/2022/09/z3719707012420_b771a14026960b06a4cebe9b5acb7fcf-1024x450.jpg 1024w, https://shop.ueh.edu.vn/wp-content/uploads/2022/09/z3719707012420_b771a14026960b06a4cebe9b5acb7fcf-300x132.jpg 300w, https://shop.ueh.edu.vn/wp-content/uploads/2022/09/z3719707012420_b771a14026960b06a4cebe9b5acb7fcf-768x338.jpg 768w, https://shop.ueh.edu.vn/wp-content/uploads/2022/09/z3719707012420_b771a14026960b06a4cebe9b5acb7fcf-1536x676.jpg 1536w, https://shop.ueh.edu.vn/wp-content/uploads/2022/09/z3719707012420_b771a14026960b06a4cebe9b5acb7fcf-550x242.jpg 550w, https://shop.ueh.edu.vn/wp-content/uploads/2022/09/z3719707012420_b771a14026960b06a4cebe9b5acb7fcf.jpg 1912w\" sizes=\"(max-width: 1020px) 100vw, 1020px\">						\r\n					</div>\r\n								\r\n<style>\r\n#image_1685364343 {\r\n  width: 100%;\r\n}\r\n</style>\r\n	</div>\r\n	\r\n	<div id=\"gap-988580353\" class=\"gap-element clearfix\" style=\"display:block; height:auto;\">\r\n		\r\n<style>\r\n#gap-988580353 {\r\n  padding-top: 30px;\r\n}\r\n</style>\r\n	</div>\r\n	\r\n	<div id=\"text-538908061\" class=\"text\">\r\n		\r\n<h3></h3>\r\n<h2 class=\"uppercase\" style=\"text-align: center;\"><span data-text-color=\"primary\"><strong>Sản phẩm cho cộng đồng và vì cộng đồng</strong></span></h2>\r\n<p>Với mong muốn đáp ứng các nhu cầu đa dạng của nhiều nhóm đối tượng, UEH Community Shop phát triển 03 nhóm sản phẩm độc quyền: Quà lưu niệm UEH, Nhà sách UEH và Inno Shop do các đơn vị của nhà trường phối hợp và quản lý triển khai. Từ đó, cung cấp hàng trăm sản phẩm đa dạng và chất lượng, mang đậm chất thương hiệu của UEH đến với người học, viên chức và các tổ chức, đối tác, doanh nghiệp trong và ngoài nước. <span style=\"font-weight: 400;\">Bên cạnh sản phẩm </span><a href=\"https://shop.ueh.edu.vn/danh-muc/sach/\"><b><i>UEH Book</i></b></a><span style=\"font-weight: 400;\"> đã là thế mạnh của nhà trường, cung cấp các đầu sách khoa học, giáo trình học tập, tài liệu tham khảo phục vụ cho việc học tập, nghiên cứu, UEH đã phát triển và xây dựng </span><a href=\"https://shop.ueh.edu.vn/danh-muc/qua-luu-niem/\"><b><i>UEH Souvenirs – Quà lưu niệm</i></b></a><span style=\"font-weight: 400;\"> độc quyền mang thương hiệu UEH. Lấy cảm hứng từ hệ thống màu sắc thương hiệu của nhà trường, hiện đại, uy tín nhưng không kém phần trẻ trung, bắt mắt, các sản phẩm đa dạng về mẫu mã và màu sắc gồm: Áo, nón, dây đeo thẻ, túi canvas, bình giữ nhiệt, ly giữ nhiệt, huy hiệu, sổ tay, bút bi,.. Hơn thế nữa, sản phẩm Quà lưu niệm UEH còn truyền tải thông điệp sống xanh mà nhà trường đang hướng tới “ReThink &amp; Be Green”, bền vững trong cả không gian học đường và đời sống hàng ngày. Từ đó, hướng đến lối sống không rác thải, lan tỏa tinh thần bảo vệ môi trường đến cộng đồng.</span><br>\r\n		\r\n<style>\r\n#text-538908061 {\r\n  font-size: 0.95rem;\r\n  color: rgb(0,0,0);\r\n}\r\n#text-538908061 > * {\r\n  color: rgb(0,0,0);\r\n}\r\n</style>\r\n	</p></div>\r\n	\r\n<div class=\"slider-wrapper relative\" id=\"slider-1253861647\">\r\n    <div class=\"slider slider-nav-circle slider-nav-large slider-nav-light slider-style-normal\" data-flickity-options=\"{\r\n            &quot;cellAlign&quot;: &quot;center&quot;,\r\n            &quot;imagesLoaded&quot;: true,\r\n            &quot;lazyLoad&quot;: 1,\r\n            &quot;freeScroll&quot;: false,\r\n            &quot;wrapAround&quot;: true,\r\n            &quot;autoPlay&quot;: 6000,\r\n            &quot;pauseAutoPlayOnHover&quot; : true,\r\n            &quot;prevNextButtons&quot;: true,\r\n            &quot;contain&quot; : true,\r\n            &quot;adaptiveHeight&quot; : true,\r\n            &quot;dragThreshold&quot; : 10,\r\n            &quot;percentPosition&quot;: true,\r\n            &quot;pageDots&quot;: true,\r\n            &quot;rightToLeft&quot;: false,\r\n            &quot;draggable&quot;: true,\r\n            &quot;selectedAttraction&quot;: 0.1,\r\n            &quot;parallax&quot; : 0,\r\n            &quot;friction&quot;: 0.6        }\">\r\n        \r\n  <div class=\"banner-grid-wrapper\">\r\n  <div id=\"banner-grid-971002435\" class=\"banner-grid row row-grid row-small\" data-packery-options=\"\" style=\"position: relative; height: 700px;\">\r\n                      \r\n<div class=\"col grid-col large-8 grid-col-2-3\" style=\"position: absolute; left: 0px; top: 0px;\"><div class=\"col-inner\">\r\n	<div class=\"img has-hover x md-x lg-x y md-y lg-y\" id=\"image_1164658514\">\r\n								<div class=\"img-inner dark\">\r\n			<img width=\"1020\" height=\"765\" src=\"data:image/svg+xml,%3Csvg%20viewBox%3D%220%200%201020%20765%22%20xmlns%3D%22http%3A%2F%2Fwww.w3.org%2F2000%2Fsvg%22%3E%3C%2Fsvg%3E\" data-src=\"https://shop.ueh.edu.vn/wp-content/uploads/2022/09/RNI-Films-IMG-46EDB0E2-F466-42DD-A8D9-1F68FF3C1D81-1024x768.jpg\" class=\"lazy-load attachment-large size-large\" alt=\"\" loading=\"lazy\" srcset=\"\" data-srcset=\"https://shop.ueh.edu.vn/wp-content/uploads/2022/09/RNI-Films-IMG-46EDB0E2-F466-42DD-A8D9-1F68FF3C1D81-1024x768.jpg 1024w, https://shop.ueh.edu.vn/wp-content/uploads/2022/09/RNI-Films-IMG-46EDB0E2-F466-42DD-A8D9-1F68FF3C1D81-300x225.jpg 300w, https://shop.ueh.edu.vn/wp-content/uploads/2022/09/RNI-Films-IMG-46EDB0E2-F466-42DD-A8D9-1F68FF3C1D81-768x576.jpg 768w, https://shop.ueh.edu.vn/wp-content/uploads/2022/09/RNI-Films-IMG-46EDB0E2-F466-42DD-A8D9-1F68FF3C1D81-1536x1152.jpg 1536w, https://shop.ueh.edu.vn/wp-content/uploads/2022/09/RNI-Films-IMG-46EDB0E2-F466-42DD-A8D9-1F68FF3C1D81-2048x1536.jpg 2048w, https://shop.ueh.edu.vn/wp-content/uploads/2022/09/RNI-Films-IMG-46EDB0E2-F466-42DD-A8D9-1F68FF3C1D81-550x413.jpg 550w\" sizes=\"(max-width: 1020px) 100vw, 1020px\">						\r\n					</div>\r\n								\r\n<style>\r\n#image_1164658514 {\r\n  width: 100%;\r\n}\r\n</style>\r\n	</div>\r\n	\r\n</div></div>\r\n<div class=\"col grid-col large-4 grid-col-1-2\" style=\"position: absolute; left: 493px; top: 0px;\"><div class=\"col-inner\">\r\n	<div class=\"img has-hover x md-x lg-x y md-y lg-y\" id=\"image_344689274\">\r\n								<div class=\"img-inner dark\">\r\n			<img width=\"641\" height=\"768\" src=\"data:image/svg+xml,%3Csvg%20viewBox%3D%220%200%20641%20768%22%20xmlns%3D%22http%3A%2F%2Fwww.w3.org%2F2000%2Fsvg%22%3E%3C%2Fsvg%3E\" data-src=\"https://shop.ueh.edu.vn/wp-content/uploads/2022/05/741x888-22.jpg\" class=\"lazy-load attachment-large size-large\" alt=\"\" loading=\"lazy\">						\r\n					</div>\r\n								\r\n<style>\r\n#image_344689274 {\r\n  width: 100%;\r\n}\r\n</style>\r\n	</div>\r\n	\r\n</div></div>\r\n<div class=\"col grid-col large-4 grid-col-2-3\" style=\"position: absolute; left: 493px; top: 300px;\"><div class=\"col-inner\">\r\n	<div class=\"img has-hover x md-x lg-x y md-y lg-y\" id=\"image_1671781668\">\r\n								<div class=\"img-inner dark\">\r\n			<img width=\"641\" height=\"768\" src=\"data:image/svg+xml,%3Csvg%20viewBox%3D%220%200%20641%20768%22%20xmlns%3D%22http%3A%2F%2Fwww.w3.org%2F2000%2Fsvg%22%3E%3C%2Fsvg%3E\" data-src=\"https://shop.ueh.edu.vn/wp-content/uploads/2022/05/741x888-41.png\" class=\"lazy-load attachment-large size-large\" alt=\"\" loading=\"lazy\">						\r\n					</div>\r\n								\r\n<style>\r\n#image_1671781668 {\r\n  width: 100%;\r\n}\r\n</style>\r\n	</div>\r\n	\r\n</div></div>\r\n<div class=\"col grid-col large-4 grid-col-1-2\" style=\"position: absolute; left: 0px; top: 400px;\"><div class=\"col-inner\">\r\n	<div class=\"img has-hover x md-x lg-x y md-y lg-y\" id=\"image_1964751209\">\r\n								<div class=\"img-inner dark\">\r\n			<img width=\"855\" height=\"1024\" src=\"data:image/svg+xml,%3Csvg%20viewBox%3D%220%200%20855%201024%22%20xmlns%3D%22http%3A%2F%2Fwww.w3.org%2F2000%2Fsvg%22%3E%3C%2Fsvg%3E\" data-src=\"https://shop.ueh.edu.vn/wp-content/uploads/2022/05/741x888-43.png\" class=\"lazy-load attachment-large size-large\" alt=\"\" loading=\"lazy\">						\r\n					</div>\r\n								\r\n<style>\r\n#image_1964751209 {\r\n  width: 100%;\r\n}\r\n</style>\r\n	</div>\r\n	\r\n</div></div>\r\n<div class=\"col grid-col large-4 grid-col-1-2\" style=\"position: absolute; left: 246px; top: 400px;\"><div class=\"col-inner\">\r\n	<div class=\"img has-hover x md-x lg-x y md-y lg-y\" id=\"image_154682336\">\r\n								<div class=\"img-inner dark\">\r\n			<img width=\"1020\" height=\"680\" src=\"data:image/svg+xml,%3Csvg%20viewBox%3D%220%200%201020%20680%22%20xmlns%3D%22http%3A%2F%2Fwww.w3.org%2F2000%2Fsvg%22%3E%3C%2Fsvg%3E\" data-src=\"https://shop.ueh.edu.vn/wp-content/uploads/2022/05/1920x1280-01-2-1024x683.jpg\" class=\"lazy-load attachment-large size-large\" alt=\"\" loading=\"lazy\" srcset=\"\" data-srcset=\"https://shop.ueh.edu.vn/wp-content/uploads/2022/05/1920x1280-01-2-1024x683.jpg 1024w, https://shop.ueh.edu.vn/wp-content/uploads/2022/05/1920x1280-01-2-550x367.jpg 550w, https://shop.ueh.edu.vn/wp-content/uploads/2022/05/1920x1280-01-2-300x200.jpg 300w, https://shop.ueh.edu.vn/wp-content/uploads/2022/05/1920x1280-01-2-768x512.jpg 768w, https://shop.ueh.edu.vn/wp-content/uploads/2022/05/1920x1280-01-2-1536x1024.jpg 1536w, https://shop.ueh.edu.vn/wp-content/uploads/2022/05/1920x1280-01-2.jpg 1920w\" sizes=\"(max-width: 1020px) 100vw, 1020px\">						\r\n					</div>\r\n								\r\n<style>\r\n#image_154682336 {\r\n  width: 100%;\r\n}\r\n</style>\r\n	</div>\r\n	\r\n</div></div>\r\n            </div>\r\n    <style>\r\n    #banner-grid-971002435 .grid-col-1{height: 600px}\r\n    #banner-grid-971002435 .grid-col-1-2{height: 300px}\r\n    #banner-grid-971002435 .grid-col-1-3{height:200px}\r\n    #banner-grid-971002435 .grid-col-2-3{height: 400px}\r\n    #banner-grid-971002435 .grid-col-1-4{height: 150px}\r\n    #banner-grid-971002435 .grid-col-3-4{height: 450px}\r\n\r\n\r\n    \r\n    \r\n\r\n  </style>\r\n    </div>\r\n  \r\n     </div>\r\n\r\n     <div class=\"loading-spin dark large centered\" style=\"display: none;\"></div>\r\n\r\n     	</div>\r\n\r\n\r\n	<div id=\"text-1166450387\" class=\"text\">\r\n		\r\n<p><span style=\"font-weight: 400;\">Song song đó,</span><a href=\"https://shop.ueh.edu.vn/danh-muc/inno-shop/\"><b><i> Inno Shop </i></b></a><span style=\"font-weight: 400;\">là những sản phẩm khởi nghiệp đổi mới sáng tạo của sinh viên, cựu sinh viên được UEH phát triển tại Vườn ươm Khởi nghiệp Đổi mới Sáng tạo UII. Đây là được xem như là một môi trường đưa các sản phẩm của Vườn ươm khởi nghiệp đến gần hơn với người dùng, lắng nghe và tiếp nhận các phản hồi để tối ưu hóa sản phẩm, cũng như lan tỏa một cách bền vững tinh thần khởi nghiệp đến toàn xã hội.&nbsp;</span><br>\r\n		\r\n<style>\r\n#text-1166450387 {\r\n  font-size: 0.95rem;\r\n  color: rgb(0,0,0);\r\n}\r\n#text-1166450387 > * {\r\n  color: rgb(0,0,0);\r\n}\r\n</style>\r\n	</p></div>\r\n	\r\n	<div id=\"text-2800860338\" class=\"text\">\r\n		\r\n<h2 class=\"uppercase\" style=\"text-align: center;\"><span data-text-color=\"primary\"><b>Tìm hiểu và đăng ký tham gia cùng dự án khởi nghiệp</b></span></h2>\r\n<h4 class=\"uppercase\" style=\"text-align: center;\"><a class=\"uppercase\" href=\"http://shop.ueh.edu.vn\"><b>tại đây</b></a></h4>\r\n<p><span style=\"font-weight: 400;\">Đặc biệt hơn hết, khoản chênh lệch thu chi của UEH Souvenir và Inno Shop sẽ được đóng góp vào</span> <a href=\"https://future.ueh.edu.vn/giving/\"><b><i>Quỹ Giving To UEH </i></b></a><span style=\"font-weight: 400;\">&nbsp;– Chương trình kết nối các cá nhân, tổ chức cùng nhau thực hiện trách nhiệm với xã hội và cộng đồng nhằm Ươm mầm tài năng; Vươn tầm quốc tế; Lan tỏa tri thức; Hành động bền vững. Chương trình là một cơ hội để mỗi cá nhân thực hiện tinh thần sẻ chia, cùng UEH cho đi và nhận lại, đúng với phương châm phục vụ cộng đồng của UEH trong thời gian qua.</span> <span style=\"font-weight: 400;\">Với nhiều tâm huyết, giao diện của UEH Community Shop được thiết kế hiện đại, thông tin sản phẩm được mô tả chi tiết, trực quan giúp khách hàng có thể dễ dàng lựa chọn những sản phẩm phù hợp. Kèm theo đó là chính sách hỗ trợ khách hàng linh hoạt và các chương trình ưu đãi đặc biệt đối với khách hàng thân thuộc, cùng quy trình đặt hàng, quản lý đơn hàng, thanh toán, giao và nhận hàng, cũng như chính sách bảo mật thông tin chuẩn hóa.&nbsp;</span> <span style=\"font-weight: 400;\">UEH tin rằng với mỗi sản phẩm mà bạn tin dùng tại </span><span style=\"font-weight: 400;\">UEH Community Shop</span><span style=\"font-weight: 400;\">, bạn đã góp phần hành động vì một nền giáo dục toàn diện, cũng chính là điểm khởi đầu của một cộng đồng văn minh và tiên phong hành động vì sự bền vững trong tương lai. Với tiêu chí hành động nhỏ mỗi ngày – tác động tích cực dài lâu, </span><span style=\"font-weight: 400;\">UEH Community Shop</span><span style=\"font-weight: 400;\"> đại diện cho những giá trị mà nhà trường mong muốn truyền tải: “Unbounded creativity. Empowered futures. Holistic values.” – “Thỏa sức sáng tạo. Chủ động tương lai. Toàn diện giá trị.”</span><br>\r\n		\r\n<style>\r\n#text-2800860338 {\r\n  font-size: 0.95rem;\r\n  color: rgb(0,0,0);\r\n}\r\n#text-2800860338 > * {\r\n  color: rgb(0,0,0);\r\n}\r\n</style>\r\n	</p></div>\r\n	\r\n\r\n	\r\n	<div class=\"blog-share text-center\"><div class=\"is-divider medium\"></div><div class=\"social-icons share-icons share-row relative\"><a href=\"https://www.facebook.com/sharer.php?u=https://shop.ueh.edu.vn/ra-mat-ueh-community-shop/\" data-label=\"Facebook\" onclick=\"window.open(this.href,this.title,\'width=500,height=500,top=300px,left=300px\');  return false;\" rel=\"noopener noreferrer nofollow\" target=\"_blank\" class=\"icon button circle is-outline tooltip facebook\" title=\"Share on Facebook\" aria-label=\"Share on Facebook\"><i class=\"icon-facebook\"></i></a><a href=\"https://twitter.com/share?url=https://shop.ueh.edu.vn/ra-mat-ueh-community-shop/\" onclick=\"window.open(this.href,this.title,\'width=500,height=500,top=300px,left=300px\');  return false;\" rel=\"noopener noreferrer nofollow\" target=\"_blank\" class=\"icon button circle is-outline tooltip twitter\" title=\"Share on Twitter\" aria-label=\"Share on Twitter\"><i class=\"icon-twitter\"></i></a><a href=\"mailto:enteryour@addresshere.com?subject=Ra%20m%E1%BA%AFt%20UEH%20Community%20Shop%3A%20Trang%20giao%20d%E1%BB%8Bch%20b%C3%A1n%20h%C3%A0ng%20tr%E1%BB%B1c%20tuy%E1%BA%BFn%20v%C3%AC%20c%E1%BB%99ng%20%C4%91%E1%BB%93ng%20%C4%91%E1%BA%A7u%20ti%C3%AAn%20t%E1%BA%A1i%20UEH&amp;body=Check%20this%20out:%20https://shop.ueh.edu.vn/ra-mat-ueh-community-shop/\" rel=\"nofollow\" class=\"icon button circle is-outline tooltip email\" title=\"Email to a Friend\" aria-label=\"Email to a Friend\"><i class=\"icon-envelop\"></i></a></div></div></div>', '	https://toruskit.com/assets/img/util/gradient-01-w.svg', '2022-11-05 17:31:37', '2', 1);

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `tbl_products`
--

CREATE TABLE `tbl_products` (
  `id` int(11) NOT NULL,
  `name` varchar(255) NOT NULL,
  `detail` text NOT NULL,
  `price` bigint(20) NOT NULL,
  `status` varchar(50) NOT NULL,
  `code` varchar(50) NOT NULL,
  `categoryId` int(11) NOT NULL,
  `img` varchar(255) NOT NULL,
  `nameUnsigned` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Đang đổ dữ liệu cho bảng `tbl_products`
--

INSERT INTO `tbl_products` (`id`, `name`, `detail`, `price`, `status`, `code`, `categoryId`, `img`, `nameUnsigned`) VALUES
(1, 'Napolitanke Ljesnjak', '<div class=\"my-8\">\n                                <div class=\"mb-5\">\n                                    <!-- text -->\n                                    <h4 class=\"mb-1\">Nutrient Value &amp; Benefits</h4>\n                                    <p class=\"mb-0\">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nisi,\n                                        tellus iaculis urna\n                                        bibendum\n                                        in lacus, integer. Id imperdiet vitae varius sed magnis eu nisi nunc sit. Vel,\n                                        varius\n                                        habitant ornare ac rhoncus. Consequat risus facilisis ante ipsum netus risus\n                                        adipiscing\n                                        sagittis sed. Lorem ipsum dolor sit amet, consectetur adipiscing elit.</p>\n                                </div>\n                                <div class=\"mb-5\">\n                                    <h5 class=\"mb-1\">Storage Tips</h5>\n                                    <p class=\"mb-0\">Nisi, tellus iaculis urna bibendum in lacus, integer. Id imperdiet\n                                        vitae varius sed\n                                        magnis eu\n                                        nisi nunc sit. Vel, varius habitant ornare ac rhoncus. Consequat risus facilisis\n                                        ante ipsum\n                                        netus risus adipiscing sagittis sed.Lorem ipsum dolor sit amet, consectetur\n                                        adipiscing elit.\n                                    </p>\n                                </div>\n                                <!-- content -->\n                                <div class=\"mb-5\">\n                                    <h5 class=\"mb-1\">Unit</h5>\n                                    <p class=\"mb-0\">3 units</p>\n                                </div>\n                                <div class=\"mb-5\">\n                                    <h5 class=\"mb-1\">Seller</h5>\n                                    <p class=\"mb-0\">DMart Pvt. LTD</p>\n                                </div>\n                                <div>\n                                    <h5 class=\"mb-1\">Disclaimer</h5>\n                                    <p class=\"mb-0\">Image shown is a representation and may slightly vary from the\n                                        actual product. Every\n                                        effort\n                                        is made to maintain accuracy of all information displayed.</p>\n                                </div>\n                            </div>', 640000, 'In Stock', 'UEH00001', 3, 'product-img-1.jpg', 'napolitanke ljesnjak'),
(2, 'Bánh quy đậu xanh', '<div class=\"my-8\">\r\n                                <div class=\"mb-5\">\r\n                                    <!-- text -->\r\n                                    <h4 class=\"mb-1\">Nutrient Value &amp; Benefits</h4>\r\n                                    <p class=\"mb-0\">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nisi,\r\n                                        tellus iaculis urna\r\n                                        bibendum\r\n                                        in lacus, integer. Id imperdiet vitae varius sed magnis eu nisi nunc sit. Vel,\r\n                                        varius\r\n                                        habitant ornare ac rhoncus. Consequat risus facilisis ante ipsum netus risus\r\n                                        adipiscing\r\n                                        sagittis sed. Lorem ipsum dolor sit amet, consectetur adipiscing elit.</p>\r\n                                </div>\r\n                                <div class=\"mb-5\">\r\n                                    <h5 class=\"mb-1\">Storage Tips</h5>\r\n                                    <p class=\"mb-0\">Nisi, tellus iaculis urna bibendum in lacus, integer. Id imperdiet\r\n                                        vitae varius sed\r\n                                        magnis eu\r\n                                        nisi nunc sit. Vel, varius habitant ornare ac rhoncus. Consequat risus facilisis\r\n                                        ante ipsum\r\n                                        netus risus adipiscing sagittis sed.Lorem ipsum dolor sit amet, consectetur\r\n                                        adipiscing elit.\r\n                                    </p>\r\n                                </div>\r\n                                <!-- content -->\r\n                                <div class=\"mb-5\">\r\n                                    <h5 class=\"mb-1\">Unit</h5>\r\n                                    <p class=\"mb-0\">3 units</p>\r\n                                </div>\r\n                                <div class=\"mb-5\">\r\n                                    <h5 class=\"mb-1\">Seller</h5>\r\n                                    <p class=\"mb-0\">DMart Pvt. LTD</p>\r\n                                </div>\r\n                                <div>\r\n                                    <h5 class=\"mb-1\">Disclaimer</h5>\r\n                                    <p class=\"mb-0\">Image shown is a representation and may slightly vary from the\r\n                                        actual product. Every\r\n                                        effort\r\n                                        is made to maintain accuracy of all information displayed.</p>\r\n                                </div>\r\n                            </div>', 37000, 'In Stock', 'UEH00002', 3, 'product-img-2.jpg', 'banh quy dau xanh'),
(3, 'Bánh 1', '<div class=\"my-8\">\r\n                                <div class=\"mb-5\">\r\n                                    <!-- text -->\r\n                                    <h4 class=\"mb-1\">Nutrient Value &amp; Benefits</h4>\r\n                                    <p class=\"mb-0\">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nisi,\r\n                                        tellus iaculis urna\r\n                                        bibendum\r\n                                        in lacus, integer. Id imperdiet vitae varius sed magnis eu nisi nunc sit. Vel,\r\n                                        varius\r\n                                        habitant ornare ac rhoncus. Consequat risus facilisis ante ipsum netus risus\r\n                                        adipiscing\r\n                                        sagittis sed. Lorem ipsum dolor sit amet, consectetur adipiscing elit.</p>\r\n                                </div>\r\n                                <div class=\"mb-5\">\r\n                                    <h5 class=\"mb-1\">Storage Tips</h5>\r\n                                    <p class=\"mb-0\">Nisi, tellus iaculis urna bibendum in lacus, integer. Id imperdiet\r\n                                        vitae varius sed\r\n                                        magnis eu\r\n                                        nisi nunc sit. Vel, varius habitant ornare ac rhoncus. Consequat risus facilisis\r\n                                        ante ipsum\r\n                                        netus risus adipiscing sagittis sed.Lorem ipsum dolor sit amet, consectetur\r\n                                        adipiscing elit.\r\n                                    </p>\r\n                                </div>\r\n                                <!-- content -->\r\n                                <div class=\"mb-5\">\r\n                                    <h5 class=\"mb-1\">Unit</h5>\r\n                                    <p class=\"mb-0\">3 units</p>\r\n                                </div>\r\n                                <div class=\"mb-5\">\r\n                                    <h5 class=\"mb-1\">Seller</h5>\r\n                                    <p class=\"mb-0\">DMart Pvt. LTD</p>\r\n                                </div>\r\n                                <div>\r\n                                    <h5 class=\"mb-1\">Disclaimer</h5>\r\n                                    <p class=\"mb-0\">Image shown is a representation and may slightly vary from the\r\n                                        actual product. Every\r\n                                        effort\r\n                                        is made to maintain accuracy of all information displayed.</p>\r\n                                </div>\r\n                            </div>', 640000, 'In Stock', 'UEH00003', 3, 'product-img-3.jpg', 'banh 1'),
(4, 'Bánh quy 1', '<div class=\"my-8\">\r\n                                <div class=\"mb-5\">\r\n                                    <!-- text -->\r\n                                    <h4 class=\"mb-1\">Nutrient Value &amp; Benefits</h4>\r\n                                    <p class=\"mb-0\">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nisi,\r\n                                        tellus iaculis urna\r\n                                        bibendum\r\n                                        in lacus, integer. Id imperdiet vitae varius sed magnis eu nisi nunc sit. Vel,\r\n                                        varius\r\n                                        habitant ornare ac rhoncus. Consequat risus facilisis ante ipsum netus risus\r\n                                        adipiscing\r\n                                        sagittis sed. Lorem ipsum dolor sit amet, consectetur adipiscing elit.</p>\r\n                                </div>\r\n                                <div class=\"mb-5\">\r\n                                    <h5 class=\"mb-1\">Storage Tips</h5>\r\n                                    <p class=\"mb-0\">Nisi, tellus iaculis urna bibendum in lacus, integer. Id imperdiet\r\n                                        vitae varius sed\r\n                                        magnis eu\r\n                                        nisi nunc sit. Vel, varius habitant ornare ac rhoncus. Consequat risus facilisis\r\n                                        ante ipsum\r\n                                        netus risus adipiscing sagittis sed.Lorem ipsum dolor sit amet, consectetur\r\n                                        adipiscing elit.\r\n                                    </p>\r\n                                </div>\r\n                                <!-- content -->\r\n                                <div class=\"mb-5\">\r\n                                    <h5 class=\"mb-1\">Unit</h5>\r\n                                    <p class=\"mb-0\">3 units</p>\r\n                                </div>\r\n                                <div class=\"mb-5\">\r\n                                    <h5 class=\"mb-1\">Seller</h5>\r\n                                    <p class=\"mb-0\">DMart Pvt. LTD</p>\r\n                                </div>\r\n                                <div>\r\n                                    <h5 class=\"mb-1\">Disclaimer</h5>\r\n                                    <p class=\"mb-0\">Image shown is a representation and may slightly vary from the\r\n                                        actual product. Every\r\n                                        effort\r\n                                        is made to maintain accuracy of all information displayed.</p>\r\n                                </div>\r\n                            </div>', 340000, 'In Stock', 'UEH00004', 3, 'product-img-9.jpg', 'banh quy 1'),
(5, 'Ăn vặt 111', '<div class=\"my-8\">\r\n                                <div class=\"mb-5\">\r\n                                    <!-- text -->\r\n                                    <h4 class=\"mb-1\">Nutrient Value &amp; Benefits</h4>\r\n                                    <p class=\"mb-0\">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nisi,\r\n                                        tellus iaculis urna\r\n                                        bibendum\r\n                                        in lacus, integer. Id imperdiet vitae varius sed magnis eu nisi nunc sit. Vel,\r\n                                        varius\r\n                                        habitant ornare ac rhoncus. Consequat risus facilisis ante ipsum netus risus\r\n                                        adipiscing\r\n                                        sagittis sed. Lorem ipsum dolor sit amet, consectetur adipiscing elit.</p>\r\n                                </div>\r\n                                <div class=\"mb-5\">\r\n                                    <h5 class=\"mb-1\">Storage Tips</h5>\r\n                                    <p class=\"mb-0\">Nisi, tellus iaculis urna bibendum in lacus, integer. Id imperdiet\r\n                                        vitae varius sed\r\n                                        magnis eu\r\n                                        nisi nunc sit. Vel, varius habitant ornare ac rhoncus. Consequat risus facilisis\r\n                                        ante ipsum\r\n                                        netus risus adipiscing sagittis sed.Lorem ipsum dolor sit amet, consectetur\r\n                                        adipiscing elit.\r\n                                    </p>\r\n                                </div>\r\n                                <!-- content -->\r\n                                <div class=\"mb-5\">\r\n                                    <h5 class=\"mb-1\">Unit</h5>\r\n                                    <p class=\"mb-0\">3 units</p>\r\n                                </div>\r\n                                <div class=\"mb-5\">\r\n                                    <h5 class=\"mb-1\">Seller</h5>\r\n                                    <p class=\"mb-0\">DMart Pvt. LTD</p>\r\n                                </div>\r\n                                <div>\r\n                                    <h5 class=\"mb-1\">Disclaimer</h5>\r\n                                    <p class=\"mb-0\">Image shown is a representation and may slightly vary from the\r\n                                        actual product. Every\r\n                                        effort\r\n                                        is made to maintain accuracy of all information displayed.</p>\r\n                                </div>\r\n                            </div>', 990000, 'In Stock', 'UEH00005', 3, 'product-img-6.jpg', 'an vat'),
(6, 'Bánh quy 222', '<div class=\"my-8\">\r\n                                <div class=\"mb-5\">\r\n                                    <!-- text -->\r\n                                    <h4 class=\"mb-1\">Nutrient Value &amp; Benefits</h4>\r\n                                    <p class=\"mb-0\">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nisi,\r\n                                        tellus iaculis urna\r\n                                        bibendum\r\n                                        in lacus, integer. Id imperdiet vitae varius sed magnis eu nisi nunc sit. Vel,\r\n                                        varius\r\n                                        habitant ornare ac rhoncus. Consequat risus facilisis ante ipsum netus risus\r\n                                        adipiscing\r\n                                        sagittis sed. Lorem ipsum dolor sit amet, consectetur adipiscing elit.</p>\r\n                                </div>\r\n                                <div class=\"mb-5\">\r\n                                    <h5 class=\"mb-1\">Storage Tips</h5>\r\n                                    <p class=\"mb-0\">Nisi, tellus iaculis urna bibendum in lacus, integer. Id imperdiet\r\n                                        vitae varius sed\r\n                                        magnis eu\r\n                                        nisi nunc sit. Vel, varius habitant ornare ac rhoncus. Consequat risus facilisis\r\n                                        ante ipsum\r\n                                        netus risus adipiscing sagittis sed.Lorem ipsum dolor sit amet, consectetur\r\n                                        adipiscing elit.\r\n                                    </p>\r\n                                </div>\r\n                                <!-- content -->\r\n                                <div class=\"mb-5\">\r\n                                    <h5 class=\"mb-1\">Unit</h5>\r\n                                    <p class=\"mb-0\">3 units</p>\r\n                                </div>\r\n                                <div class=\"mb-5\">\r\n                                    <h5 class=\"mb-1\">Seller</h5>\r\n                                    <p class=\"mb-0\">DMart Pvt. LTD</p>\r\n                                </div>\r\n                                <div>\r\n                                    <h5 class=\"mb-1\">Disclaimer</h5>\r\n                                    <p class=\"mb-0\">Image shown is a representation and may slightly vary from the\r\n                                        actual product. Every\r\n                                        effort\r\n                                        is made to maintain accuracy of all information displayed.</p>\r\n                                </div>\r\n                            </div>', 340000, 'In Stock', 'UEH00006', 2, 'product-img-9.jpg', 'banh quy 1'),
(7, 'Ăn vặt 333', '<div class=\"my-8\">\r\n                                <div class=\"mb-5\">\r\n                                    <!-- text -->\r\n                                    <h4 class=\"mb-1\">Nutrient Value &amp; Benefits</h4>\r\n                                    <p class=\"mb-0\">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nisi,\r\n                                        tellus iaculis urna\r\n                                        bibendum\r\n                                        in lacus, integer. Id imperdiet vitae varius sed magnis eu nisi nunc sit. Vel,\r\n                                        varius\r\n                                        habitant ornare ac rhoncus. Consequat risus facilisis ante ipsum netus risus\r\n                                        adipiscing\r\n                                        sagittis sed. Lorem ipsum dolor sit amet, consectetur adipiscing elit.</p>\r\n                                </div>\r\n                                <div class=\"mb-5\">\r\n                                    <h5 class=\"mb-1\">Storage Tips</h5>\r\n                                    <p class=\"mb-0\">Nisi, tellus iaculis urna bibendum in lacus, integer. Id imperdiet\r\n                                        vitae varius sed\r\n                                        magnis eu\r\n                                        nisi nunc sit. Vel, varius habitant ornare ac rhoncus. Consequat risus facilisis\r\n                                        ante ipsum\r\n                                        netus risus adipiscing sagittis sed.Lorem ipsum dolor sit amet, consectetur\r\n                                        adipiscing elit.\r\n                                    </p>\r\n                                </div>\r\n                                <!-- content -->\r\n                                <div class=\"mb-5\">\r\n                                    <h5 class=\"mb-1\">Unit</h5>\r\n                                    <p class=\"mb-0\">3 units</p>\r\n                                </div>\r\n                                <div class=\"mb-5\">\r\n                                    <h5 class=\"mb-1\">Seller</h5>\r\n                                    <p class=\"mb-0\">DMart Pvt. LTD</p>\r\n                                </div>\r\n                                <div>\r\n                                    <h5 class=\"mb-1\">Disclaimer</h5>\r\n                                    <p class=\"mb-0\">Image shown is a representation and may slightly vary from the\r\n                                        actual product. Every\r\n                                        effort\r\n                                        is made to maintain accuracy of all information displayed.</p>\r\n                                </div>\r\n                            </div>', 990000, 'In Stock', 'UEH00007', 1, 'product-img-6.jpg', 'an vat'),
(8, 'Bánh ACI II', '<div class=\"my-8\">\r\n                                <div class=\"mb-5\">\r\n                                    <!-- text -->\r\n                                    <h4 class=\"mb-1\">Nutrient Value &amp; Benefits</h4>\r\n                                    <p class=\"mb-0\">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nisi,\r\n                                        tellus iaculis urna\r\n                                        bibendum\r\n                                        in lacus, integer. Id imperdiet vitae varius sed magnis eu nisi nunc sit. Vel,\r\n                                        varius\r\n                                        habitant ornare ac rhoncus. Consequat risus facilisis ante ipsum netus risus\r\n                                        adipiscing\r\n                                        sagittis sed. Lorem ipsum dolor sit amet, consectetur adipiscing elit.</p>\r\n                                </div>\r\n                                <div class=\"mb-5\">\r\n                                    <h5 class=\"mb-1\">Storage Tips</h5>\r\n                                    <p class=\"mb-0\">Nisi, tellus iaculis urna bibendum in lacus, integer. Id imperdiet\r\n                                        vitae varius sed\r\n                                        magnis eu\r\n                                        nisi nunc sit. Vel, varius habitant ornare ac rhoncus. Consequat risus facilisis\r\n                                        ante ipsum\r\n                                        netus risus adipiscing sagittis sed.Lorem ipsum dolor sit amet, consectetur\r\n                                        adipiscing elit.\r\n                                    </p>\r\n                                </div>\r\n                                <!-- content -->\r\n                                <div class=\"mb-5\">\r\n                                    <h5 class=\"mb-1\">Unit</h5>\r\n                                    <p class=\"mb-0\">3 units</p>\r\n                                </div>\r\n                                <div class=\"mb-5\">\r\n                                    <h5 class=\"mb-1\">Seller</h5>\r\n                                    <p class=\"mb-0\">DMart Pvt. LTD</p>\r\n                                </div>\r\n                                <div>\r\n                                    <h5 class=\"mb-1\">Disclaimer</h5>\r\n                                    <p class=\"mb-0\">Image shown is a representation and may slightly vary from the\r\n                                        actual product. Every\r\n                                        effort\r\n                                        is made to maintain accuracy of all information displayed.</p>\r\n                                </div>\r\n                            </div>', 37000, 'In Stock', 'UEH00008', 3, 'product-img-5.jpg', 'banh aci ii');

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `tbl_shipping_address`
--

CREATE TABLE `tbl_shipping_address` (
  `id` int(11) NOT NULL,
  `fullname` varchar(50) NOT NULL,
  `username` varchar(30) NOT NULL,
  `address` varchar(50) NOT NULL,
  `city` varchar(30) NOT NULL,
  `phone` varchar(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Đang đổ dữ liệu cho bảng `tbl_shipping_address`
--

INSERT INTO `tbl_shipping_address` (`id`, `fullname`, `username`, `address`, `city`, `phone`) VALUES
(5, 'Châu Quí', 'client14@ueh.com.vn', '432/2 Nguyễn Duy Trinh, Phường 3, Tân An', 'Long An', '0342821701');

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `tbl_transactions`
--

CREATE TABLE `tbl_transactions` (
  `id` int(11) NOT NULL,
  `amount` double NOT NULL,
  `paymentMethod` varchar(20) NOT NULL,
  `shippingAddressId` int(11) NOT NULL,
  `username` varchar(30) NOT NULL,
  `orderId` int(11) NOT NULL,
  `status` varchar(10) NOT NULL,
  `createdAt` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Đang đổ dữ liệu cho bảng `tbl_transactions`
--

INSERT INTO `tbl_transactions` (`id`, `amount`, `paymentMethod`, `shippingAddressId`, `username`, `orderId`, `status`, `createdAt`) VALUES
(1, 2, 'CREDIT_CARD', 2, 'client14@ueh.com.vn', 1, 'PAID', '2022-11-05 00:00:00');

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `tbl_users`
--

CREATE TABLE `tbl_users` (
  `id` int(11) NOT NULL,
  `fullname` varchar(100) NOT NULL DEFAULT '',
  `username` varchar(50) NOT NULL DEFAULT '',
  `password` varchar(50) NOT NULL,
  `shippingAddress` varchar(3000) DEFAULT NULL,
  `email` varchar(255) NOT NULL DEFAULT ''
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

--
-- Đang đổ dữ liệu cho bảng `tbl_users`
--

INSERT INTO `tbl_users` (`id`, `fullname`, `username`, `password`, `shippingAddress`, `email`) VALUES
(1, 'client 1', 'client14@ueh.com.vn', 'c4ca4238a0b923820dcc509a6f75849b', '<p class=\"mb-6\">Jitu Chauhan<br>\n\n                                            4450 North Avenue Oakland, <br>\n\n                                            Nebraska, United States,<br>\n\n                                            402-776-1106</p>', 'client14@ueh.com.vn'),
(2, 'Quí', 'chauqui@gmail.com', '6512bd43d9caa6e02c990b0a82652dca', NULL, 'chauqui@gmail.com'),
(3, 'Quí', 'client1@ueh.com.vn', '6512bd43d9caa6e02c990b0a82652dca', NULL, 'client1@ueh.com.vn'),
(9, 'Chau Qui', 'chauqui97@gmail.com', '202cb962ac59075b964b07152d234b70', NULL, 'chauqui97@gmail.com'),
(11, 'Chau Qui', 'hihi@gmail.com', 'c4ca4238a0b923820dcc509a6f75849b', NULL, 'hihi@gmail.com');

--
-- Chỉ mục cho các bảng đã đổ
--

--
-- Chỉ mục cho bảng `tbl_categories`
--
ALTER TABLE `tbl_categories`
  ADD PRIMARY KEY (`id`);

--
-- Chỉ mục cho bảng `tbl_orders`
--
ALTER TABLE `tbl_orders`
  ADD PRIMARY KEY (`id`);

--
-- Chỉ mục cho bảng `tbl_order_products`
--
ALTER TABLE `tbl_order_products`
  ADD PRIMARY KEY (`productId`,`orderId`) USING BTREE;

--
-- Chỉ mục cho bảng `tbl_posts`
--
ALTER TABLE `tbl_posts`
  ADD PRIMARY KEY (`id`);

--
-- Chỉ mục cho bảng `tbl_products`
--
ALTER TABLE `tbl_products`
  ADD PRIMARY KEY (`id`);

--
-- Chỉ mục cho bảng `tbl_shipping_address`
--
ALTER TABLE `tbl_shipping_address`
  ADD PRIMARY KEY (`id`);

--
-- Chỉ mục cho bảng `tbl_transactions`
--
ALTER TABLE `tbl_transactions`
  ADD PRIMARY KEY (`id`);

--
-- Chỉ mục cho bảng `tbl_users`
--
ALTER TABLE `tbl_users`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `username` (`username`),
  ADD UNIQUE KEY `email` (`email`);

--
-- AUTO_INCREMENT cho các bảng đã đổ
--

--
-- AUTO_INCREMENT cho bảng `tbl_categories`
--
ALTER TABLE `tbl_categories`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT cho bảng `tbl_orders`
--
ALTER TABLE `tbl_orders`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT cho bảng `tbl_posts`
--
ALTER TABLE `tbl_posts`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT cho bảng `tbl_products`
--
ALTER TABLE `tbl_products`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT cho bảng `tbl_shipping_address`
--
ALTER TABLE `tbl_shipping_address`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT cho bảng `tbl_transactions`
--
ALTER TABLE `tbl_transactions`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT cho bảng `tbl_users`
--
ALTER TABLE `tbl_users`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
