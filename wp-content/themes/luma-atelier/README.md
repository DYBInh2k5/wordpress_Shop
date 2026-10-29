# Luma Atelier

Đọc [README dự án](../../../README.md) để tìm hiểu WordPress, WooCommerce, cách chạy site, bảo trì và lộ trình phát triển cửa hàng.

Giao diện WordPress cho cửa hàng thời trang nữ, có hỗ trợ WooCommerce.

## Cài đặt

1. Dùng một bản WordPress đã cài đặt và cài plugin WooCommerce.
2. Chép thư mục `luma-atelier` vào `wp-content/themes/` của site (thư mục này đã được đặt theo đúng cấu trúc đó trong dự án).
3. Trong trang quản trị, vào **Giao diện → Giao diện**, kích hoạt **Luma Atelier**.
4. Cấu hình WooCommerce, tạo danh mục Áo, Váy, Quần và thêm sản phẩm có biến thể size/màu.
5. Vào **Giao diện → Menu**, gán menu vào vị trí **Điều hướng chính**.

### Chạy thử tại máy bằng WordPress Playground

Máy cần Node.js 20.18+ và npm. Mở terminal tại thư mục dự án `D:\wordpress` rồi chạy:

```powershell
npx @wp-playground/cli@3.1.36 start --path=./wp-content/themes/luma-atelier --blueprint=./playground.blueprint.json --skip-browser
```

Mở URL `http://127.0.0.1:9400`. Playground lưu site cục bộ, tự kích hoạt theme, cài WooCommerce và đăng nhập quản trị tự động. Lần chạy đầu cần internet để tải các gói.

Trang chủ dùng sản phẩm phổ biến từ WooCommerce. Cần tạo sản phẩm và chọn ảnh sản phẩm để thay cho hình minh họa màu nền hiện tại.

## Ghi chú

Thư mục làm việc chứa theme và cấu hình Playground, không chứa WordPress core hay database thông thường. Playground dùng PHP WebAssembly và SQLite, nên không cần cài PHP, MySQL hoặc Docker.
