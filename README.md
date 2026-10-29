# WordPress Shop — Luma Atelier

Dự án cửa hàng thời trang nữ dùng **WordPress + WooCommerce**. Giao diện tự thiết kế **Luma Atelier** nằm trong `wp-content/themes/luma-atelier`. Tài liệu này giải thích những phần chính của WordPress và hướng dẫn bạn chạy, chỉnh sửa, quản lý rồi đưa cửa hàng lên mạng.

> Dự án hiện có theme và cấu hình WordPress Playground để phát triển tại máy. Đây chưa phải bản WordPress production và chưa có sản phẩm, ảnh, phương thức thanh toán hay đơn vị vận chuyển thật.

## Mục lục

- [1. WordPress là gì?](#1-wordpress-là-gì)
- [2. WordPress.org và WordPress.com](#2-wordpressorg-và-wordpresscom)
- [3. Website WordPress gồm những gì?](#3-website-wordpress-gồm-những-gì)
- [4. Chạy website này trên máy](#4-chạy-website-này-trên-máy)
- [5. Làm quen trang quản trị](#5-làm-quen-trang-quản-trị)
- [6. Bài viết, trang và sản phẩm](#6-bài-viết-trang-và-sản-phẩm)
- [7. Theme và cấu trúc theme này](#7-theme-và-cấu-trúc-theme-này)
- [8. WooCommerce cho cửa hàng quần áo](#8-woocommerce-cho-cửa-hàng-quần-áo)
- [9. Plugin: thêm tính năng](#9-plugin-thêm-tính-năng)
- [10. Cơ sở dữ liệu, media và GitHub](#10-cơ-sở-dữ-liệu-media-và-github)
- [11. Từ máy cá nhân lên website thật](#11-từ-máy-cá-nhân-lên-website-thật)
- [12. Bảo mật, sao lưu và bảo trì](#12-bảo-mật-sao-lưu-và-bảo-trì)
- [13. Thuật ngữ cơ bản](#13-thuật-ngữ-cơ-bản)
- [14. Lộ trình học đề xuất](#14-lộ-trình-học-đề-xuất)
- [Tài liệu chính thức](#tài-liệu-chính-thức)

## 1. WordPress là gì?

WordPress là một **hệ quản trị nội dung (CMS)**. Nó cung cấp trang quản trị để tạo nội dung, quản lý tài khoản, cài giao diện và mở rộng tính năng mà không phải tự viết toàn bộ hệ thống website. WordPress được xây dựng chủ yếu bằng PHP; nội dung và cấu hình thường nằm trong cơ sở dữ liệu, còn giao diện, plugin và ảnh nằm trong các thư mục của website.

Bạn có thể dùng WordPress để làm blog, trang doanh nghiệp, portfolio hoặc cửa hàng. Dự án này dùng WooCommerce để quản lý sản phẩm, giỏ hàng và đơn hàng.

## 2. WordPress.org và WordPress.com

- **WordPress.org (self-hosted):** bạn tải phần mềm WordPress miễn phí và tự chọn nơi lưu trữ, tên miền, theme và plugin. Bạn kiểm soát mã nguồn và cấu hình máy chủ nhiều hơn; đổi lại, bạn chịu trách nhiệm cập nhật, bảo mật và sao lưu.
- **WordPress.com:** dịch vụ lưu trữ website do Automattic vận hành. Nhà cung cấp quản lý hạ tầng; các tính năng, plugin và quyền truy cập phụ thuộc gói dịch vụ.

Theme của dự án này được viết cho WordPress self-hosted. Playground là môi trường phát triển cục bộ để chạy thử, không phải tài khoản hosting công khai.

## 3. Website WordPress gồm những gì?

| Thành phần | Vai trò | Ví dụ trong dự án |
|---|---|---|
| WordPress core | Bộ nền tảng: trang quản trị, người dùng, nội dung, API | Được Playground tải khi khởi động |
| Theme | Quy định cách website hiển thị | `luma-atelier` |
| Plugin | Bổ sung nghiệp vụ hoặc công cụ | WooCommerce quản lý cửa hàng |
| Database | Lưu bài viết, trang, sản phẩm, đơn hàng, cài đặt | Playground dùng SQLite trong môi trường thử nghiệm |
| Media | Ảnh sản phẩm, logo và tệp tải lên | Thêm sau trong Thư viện Media |
| Hosting + domain | Máy chủ và địa chỉ công khai của website | Chưa cấu hình trong dự án |

Thông thường, theme phụ trách **cách trình bày**; plugin phụ trách **tính năng/nghiệp vụ**. Không chỉnh sửa trực tiếp WordPress core hoặc plugin WooCommerce để đổi giao diện, vì các bản cập nhật có thể ghi đè thay đổi.

## 4. Chạy website này trên máy

Máy cần Node.js và npm. Hiện dự án dùng WordPress Playground CLI phiên bản `3.1.36` để chạy WordPress/PHP trong môi trường WebAssembly, vì vậy không cần cài PHP, Apache hay MySQL riêng.

Mở PowerShell tại thư mục dự án `D:\wordpress`:

```powershell
npx -y @wp-playground/cli@3.1.36 start --path=./wp-content/themes/luma-atelier --blueprint=./playground.blueprint.json --skip-browser --port=9400
```

Truy cập:

- Website: <http://127.0.0.1:9400>
- Trang quản trị: <http://127.0.0.1:9400/wp-admin/>

Playground tự đăng nhập admin trong môi trường cục bộ. Nhấn `Ctrl+C` trong terminal để dừng máy chủ. Chạy lại cùng lệnh để tiếp tục site đã lưu. Lần đầu cần kết nối Internet để tải WordPress, CLI và WooCommerce. Nếu cổng 9400 đang được dùng, đổi `--port=9401` rồi mở URL tương ứng.

**Lưu ý:** đây là môi trường học và phát triển. Trước khi bán hàng thật, hãy chuyển sang hosting WordPress hỗ trợ PHP và MySQL/MariaDB, rồi cấu hình domain, HTTPS, thanh toán, giao hàng và sao lưu.

## 5. Làm quen trang quản trị

Đăng nhập vào `/wp-admin/`. Các khu vực bạn sẽ dùng nhiều:

- **Bài viết:** tin tức, bài hướng dẫn phối đồ, nội dung blog.
- **Trang:** nội dung ít thay đổi như Giới thiệu, Liên hệ, Chính sách đổi trả.
- **Media:** thư viện ảnh và tệp.
- **Giao diện:** theme, menu, logo và tùy chỉnh giao diện. Tên các mục có thể khác nhau theo loại theme.
- **Plugin:** bật, tắt, cài và cập nhật plugin.
- **Người dùng:** tạo tài khoản và phân quyền.
- **Cài đặt:** tiêu đề website, ngôn ngữ, múi giờ, đường dẫn và các thiết lập chung.
- **WooCommerce:** sản phẩm, đơn hàng, khách hàng, vận chuyển, thanh toán và cấu hình cửa hàng.

Nên tạo trang **Giới thiệu**, **Liên hệ**, **Chính sách giao hàng**, **Chính sách đổi trả** và **Chính sách riêng tư** trước khi mở cửa hàng.

## 6. Bài viết, trang và sản phẩm

- **Bài viết (Post):** nội dung theo dòng thời gian, thường có ngày đăng, tác giả, chuyên mục và thẻ. Dùng cho blog/tin tức.
- **Trang (Page):** nội dung tĩnh, thường được liên kết từ menu. Dùng cho Giới thiệu, Liên hệ, Câu hỏi thường gặp.
- **Sản phẩm (Product):** loại nội dung do WooCommerce thêm vào, có giá, ảnh, tồn kho, danh mục và dữ liệu bán hàng.

Bạn chỉnh nội dung trong trình soạn thảo khối Gutenberg: mỗi đoạn, ảnh, tiêu đề hay nút là một block. Theme quyết định phong cách hiển thị; nội dung vẫn được lưu riêng trong WordPress.

## 7. Theme và cấu trúc theme này

Theme là lớp giao diện. Theme này thuộc loại **classic theme**: dùng PHP template, CSS và một ít JavaScript. WordPress chọn tệp template theo loại trang đang mở; nếu không tìm thấy template cụ thể thì sẽ lùi dần về template tổng quát, cuối cùng là `index.php`.

| Tệp | Dùng để làm gì |
|---|---|
| `style.css` | Thông tin theme và toàn bộ CSS giao diện |
| `functions.php` | Khai báo hỗ trợ theme, menu, WooCommerce, nạp CSS/JS |
| `header.php` / `footer.php` | Phần đầu và chân trang dùng lại trên website |
| `front-page.php` | Trang chủ cửa hàng |
| `page.php` | Trang nội dung như Giới thiệu hoặc Liên hệ |
| `single.php` | Một bài viết blog |
| `index.php` | Template dự phòng cho nội dung khác |
| `assets/js/menu.js` | Nút mở menu trên màn hình nhỏ |

Một số hàm WordPress xuất hiện trong template:

- `get_header()` và `get_footer()` chèn phần dùng chung.
- `have_posts()` và `the_post()` lặp qua nội dung được truy vấn.
- `the_title()` và `the_content()` hiển thị tiêu đề và nội dung.
- `wp_enqueue_style()` và `wp_enqueue_script()` nạp CSS/JavaScript đúng cách.
- `esc_html()`, `esc_url()` và các hàm `esc_*()` giúp escape dữ liệu trước khi xuất ra HTML.

Khi chỉnh theme, sửa trong `wp-content/themes/luma-atelier/`. Không sửa WordPress core. Nếu sau này dùng một theme bên ngoài và muốn thay đổi sâu, hãy tìm hiểu **child theme** để giữ thay đổi khi parent theme được cập nhật.

## 8. WooCommerce cho cửa hàng quần áo

WooCommerce là plugin thương mại điện tử. Plugin tạo các khái niệm sản phẩm, giỏ hàng, checkout, khách hàng và đơn hàng; theme hiện tại cung cấp cách trình bày cho cửa hàng.

### Tạo danh mục và thuộc tính

Gợi ý danh mục: **Áo**, **Váy**, **Quần**, **Phụ kiện**. Danh mục giúp người mua lọc sản phẩm. Thuộc tính mô tả lựa chọn của sản phẩm, chẳng hạn:

- **Kích cỡ:** XS, S, M, L, XL
- **Màu:** Đen, Trắng, Be
- Có thể bổ sung chất liệu hoặc kiểu dáng khi cần

### Sản phẩm biến thể (variable product)

Dùng sản phẩm biến thể khi người mua cần chọn size/màu. Tạo thuộc tính, đánh dấu dùng để tạo biến thể, rồi tạo các tổ hợp thực sự có bán. Từng biến thể có thể có SKU, giá, tồn kho và ảnh riêng. Không tạo tất cả mọi tổ hợp nếu có màu/size không tồn tại trong kho.

### Checklist tạo một sản phẩm

1. Vào **Sản phẩm → Thêm mới**.
2. Đặt tên rõ ràng, ví dụ “Áo sơ mi linen cổ đức”.
3. Viết mô tả về form, chất liệu, cách giặt và chiều dài mẫu.
4. Chọn danh mục, ảnh đại diện và ảnh thư viện.
5. Chọn **Sản phẩm biến thể**, khai báo size/màu.
6. Điền giá, SKU và số lượng kho cho từng biến thể.
7. Xem trước trên điện thoại và máy tính, sau đó xuất bản.

### Cấu hình cửa hàng trước khi bán

Trong **WooCommerce → Cài đặt**, rà soát địa chỉ/country, đơn vị tiền tệ, thuế, vùng giao hàng, phương thức thanh toán, email đơn hàng và quyền riêng tư. Khả năng thanh toán phụ thuộc nhà cung cấp và quốc gia; cấu hình tài khoản thật chỉ trên site thật và thực hiện theo hướng dẫn của nhà cung cấp. Tạo một đơn hàng thử trước khi mở bán.

## 9. Plugin: thêm tính năng

Plugin là gói mã mở rộng WordPress. Chỉ cài plugin thật sự cần thiết; mỗi plugin thêm mã và có thể ảnh hưởng tốc độ, tương thích hoặc bảo mật. Trước khi cài, xem nhà phát triển, lịch cập nhật, tài liệu, đánh giá và yêu cầu phiên bản. Thử cập nhật trên môi trường staging trước site đang có đơn hàng.

Theme nên giữ phần trình bày; các tính năng nghiệp vụ như thanh toán, vận chuyển hoặc email nên thuộc plugin/dịch vụ phù hợp. Tránh cài nhiều plugin trùng chức năng.

## 10. Cơ sở dữ liệu, media và GitHub

Trong site WordPress thật:

- Database lưu nội dung, cấu hình, người dùng, sản phẩm và đơn hàng.
- `wp-content/uploads/` chứa ảnh và media đã tải lên.
- `wp-content/themes/` chứa theme.
- `wp-content/plugins/` chứa plugin.
- `wp-config.php` chứa cấu hình kết nối database và các secret; **không đưa lên GitHub**.

Git/GitHub dùng để lưu **mã nguồn** theme và tài liệu, theo dõi lịch sử sửa đổi và chia sẻ code. Git không thay thế backup database/media và không nên dùng để lưu đơn hàng, thông tin khách hàng, mật khẩu, API key hoặc dữ liệu cá nhân. Cơ sở dữ liệu WordPress Playground hiện lưu ngoài repository, trong thư mục dữ liệu cục bộ của Playground.

## 11. Từ máy cá nhân lên website thật

Để cửa hàng truy cập công khai, bạn sẽ cần:

1. **Hosting WordPress** có phiên bản PHP và MySQL/MariaDB được WordPress hiện tại hỗ trợ.
2. **Tên miền** và DNS trỏ về hosting.
3. **HTTPS/SSL** được bật.
4. Một bản WordPress production riêng, cài theme và plugin từ mã nguồn đã rà soát.
5. Nhập sản phẩm thật, ảnh, tồn kho, chính sách bán hàng và thông tin doanh nghiệp.
6. Cấu hình, xác minh giao dịch thanh toán và phí giao hàng.
7. Sao lưu, kiểm tra đơn thử, email, trang trên điện thoại, tốc độ và quy trình hoàn tiền/đổi trả.

Playground là môi trường học/dev; không nên coi database SQLite của Playground là database để đưa thẳng lên hosting. Khi chuyển site, dùng quy trình export/import hoặc công cụ migration phù hợp với hosting, sau đó kiểm tra URL, ảnh, đơn hàng thử và cấu hình thanh toán trên site đích.

## 12. Bảo mật, sao lưu và bảo trì

- Cập nhật WordPress, theme và plugin; bỏ plugin/theme không dùng.
- Dùng mật khẩu quản trị mạnh, không dùng chung tài khoản và cấp quyền tối thiểu cần thiết.
- Bật HTTPS trên site thật; không gửi mật khẩu hoặc API key vào GitHub.
- Sao lưu **cả database lẫn files**, lưu bản sao ở nơi khác với hosting và thỉnh thoảng thử khôi phục.
- Trước khi cập nhật lớn, tạo backup và thử trên staging.
- Theo dõi form liên hệ, đơn hàng, cảnh báo tồn kho, email và các lỗi checkout.
- Chỉ tải WordPress và plugin từ nguồn đáng tin cậy; ưu tiên dự án được duy trì.

## 13. Thuật ngữ cơ bản

| Thuật ngữ | Nghĩa dễ nhớ |
|---|---|
| CMS | Phần mềm quản lý nội dung website |
| Core | Phần lõi của WordPress |
| Theme | Giao diện và template |
| Plugin | Gói bổ sung tính năng |
| Block | Khối nội dung trong trình soạn thảo |
| Database | Nơi lưu dữ liệu có cấu trúc của website |
| Hosting | Máy chủ chạy website trên Internet |
| Domain | Địa chỉ website, ví dụ `ten-shop.vn` |
| SSL/HTTPS | Kết nối mã hóa giữa trình duyệt và website |
| SKU | Mã nội bộ để phân biệt sản phẩm/biến thể |
| Staging | Bản thử nghiệm trước khi cập nhật site thật |
| Backup | Bản sao có thể dùng để khôi phục website |

## 14. Lộ trình học đề xuất

1. Khởi chạy site, mở trang quản trị và sửa tiêu đề website.
2. Tạo vài trang nội dung và làm quen block editor.
3. Đọc `front-page.php`, `header.php`, `footer.php` và thay văn bản giao diện.
4. Thêm danh mục, một sản phẩm đơn giản và một sản phẩm biến thể.
5. Thay ảnh minh họa bằng ảnh sản phẩm của shop; kiểm tra responsive.
6. Học Git: xem thay đổi (`git diff`), tạo commit nhỏ, rồi đẩy lên GitHub sau khi repo được kết nối.
7. Sau cùng mới chọn hosting/domain và thiết lập thanh toán thật.

## Tài liệu chính thức

- [Bắt đầu với WordPress](https://wordpress.org/documentation/article/get-started-with-wordpress/)
- [Tài liệu WordPress cho người dùng](https://wordpress.org/documentation/)
- [Theme Handbook](https://developer.wordpress.org/themes/)
- [Template Hierarchy](https://developer.wordpress.org/themes/classic-themes/basics/template-hierarchy/)
- [Quản lý plugin](https://wordpress.org/documentation/article/manage-plugins/)
- [Bảo mật WordPress](https://developer.wordpress.org/advanced-administration/security/)
- [Sao lưu WordPress](https://developer.wordpress.org/advanced-administration/security/backup/)
- [Hướng dẫn cài đặt WooCommerce](https://woocommerce.com/document/woocommerce-setup-wizard/)
- [Tạo sản phẩm biến thể](https://woocommerce.com/document/variable-product/)
- [Cấu hình vận chuyển và thanh toán](https://woocommerce.com/document/configuring-woocommerce-settings/)
- [WordPress Playground CLI](https://www.npmjs.com/package/@wp-playground/cli)

---

README riêng của theme nằm tại [`wp-content/themes/luma-atelier/README.md`](wp-content/themes/luma-atelier/README.md).
