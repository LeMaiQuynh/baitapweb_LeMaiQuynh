[![Review Assignment Due Date](https://classroom.github.com/assets/deadline-readme-button-22041afd0340ce965d47ae6ef1cefeee28c7c493a6346c4f15d667ab976d596c.svg)](https://classroom.github.com/a/QeHYFfL9)
[![Open in Visual Studio Code](https://classroom.github.com/assets/open-in-vscode-2e0aaae1b6195c2367325f4f02e2d04e9abb55f0b24a779b69b11b9e10269abc.svg)](https://classroom.github.com/online_ide?assignment_repo_id=17166373&assignment_repo_type=AssignmentRepo)
# Bài tập lớn - Phát triển ứng dụng web

## Thông tin sinh viên
- **Họ và tên**: Lê Mai Quỳnh
- **MSSV**: 2221050828
- **Lớp**: DCCTCT67_09C

## Giới thiệu
Đây là yêu cầu của bài tập lớn cho học phần Phát triển ứng dụng web + BTL (mã học phần 7080116). Sinh viên sẽ xây dựng một ứng dụng web hoàn chỉnh sử dụng một trong các công nghệ sau: NodeJS và Express, .NET, hoặc Web với Dart (**web-only**), Web với Flutter (**multi-platform**) hay một framework tương tự nhằm tăng tốc phát triển. Bài tập lớn này yêu cầu sinh viên áp dụng các kiến thức đã học về lập trình giao diện người dùng, web động theo mô hình Client-Server, tích hợp API hoặc/và CSDL, kiểm thử tự động và CI/CD với GitHub Actions.

## Mục tiêu
Bài tập lớn nhằm:
- Phát triển frontend (UI) cho ứng dụng web động với các công nghệ web truyền thống hoặc hiện đại.
- Hiểu và áp dụng mô hình Client-Server trong phát triển ứng dụng web.
- Biết tích hợp ứng dụng với backend hoặc dịch vụ backend thông qua API hoặc CSDL.
- Thực hiện được các thao tác CRUD (Create, Read, Update, Delete) cơ bản với dữ liệu.
- Biết áp dụng kiểm thử tự động để đảm bảo chất lượng ứng dụng.
- Biết áp dụng CI/CD với GitHub Actions để tự động hóa quy trình kiểm thử và triển khai.

## Yêu cầu ứng dụng
1. **Chức năng CRUD**  
   Ứng dụng phải có khả năng thực hiện các thao tác CRUD cơ bản trên một loại dữ liệu cụ thể (ví dụ: quản lý người dùng, sản phẩm, bài viết, v.v.).

2. **Giao diện người dùng**  
   Ứng dụng phải có giao diện người dùng thân thiện và dễ sử dụng, được xây dựng bằng HTML, CSS và JavaScript (hoặc Dart nếu sử dụng Flutter Web).

3. **Tích hợp API hoặc/và CSDL**  
   Ứng dụng phải tích hợp với một backend hoặc dịch vụ backend thông qua API hoặc/và CSDL. Backend có thể được xây dựng bằng NodeJS và Express, .NET, Web với Dart (**web-only**), Web với Flutter (**multi-platform**) hay một framework tương tự.

4. **Kiểm thử tự động**
Ứng dụng phải có các kiểm thử tự động để đảm bảo chất lượng. Các kiểm thử này có thể bao gồm kiểm thử đơn vị (unit tests), kiểm thử tích hợp (integration tests), và kiểm thử giao diện người dùng (UI tests) tùy theo yêu cầu của ứng dụng và công nghệ sử dụng.

5. **CI/CD với GitHub Actions**
Ứng dụng có thể sử dụng GitHub Actions để tự động hóa quy trình kiểm thử và triển khai.

## Hướng dẫn thực hiện
1. **Xác định yêu cầu ứng dụng**: Xác định chức năng cần thực hiện, thiết kế giao diện người dùng, và xác định công nghệ sử dụng.
2. **Phát triển frontend**: Xây dựng giao diện người dùng với HTML, CSS và JavaScript (hoặc Dart nếu sử dụng Flutter Web).
3. **Phát triển backend**: Xây dựng backend với NodeJS và Express, .NET, Web với Dart (**web-only**), Web với Flutter (**multi-platform**) hoặc một framework tương tự.
4. **Tích hợp frontend và backend**: Tích hợp giao diện người dùng với backend thông qua API hoặc CSDL.
5. **Viết kiểm thử tự động**: Viết các kiểm thử tự động để đảm bảo chất lượng ứng dụng.
6. **Thực thi và gỡ lỗi**: Kiểm thử ứng dụng và sửa lỗi nếu có trên môi trường phát triển.
7. **Thiết lập CI/CD**: Thiết lập GitHub Actions để tự động hóa quy trình kiểm thử và triển khai (không bắt buộc).
8. **Triển khai ứng dụng**: Triển khai ứng dụng lên môi trường sản phẩm để sử dụng (không bắt buộc).

## Tiêu chí đánh giá
- **5/10**: Hoàn thành các chức năng cơ bản của ứng dụng web động, bao gồm giao diện người dùng, server backend với Node.js và Express (hoặc framework khác), và các thao tác CRUD cơ bản.
- **6/10**: Thực hiện kiểm thử đơn vị (unit tests) và kiểm thử tích hợp (integration tests) cho các chức năng chính của ứng dụng.
- **7/10**: Thực hiện kiểm thử End-to-End (E2E) với Cypress và đảm bảo các luồng thao tác chính hoạt động đúng.
- **8/10**: Tích hợp ứng dụng với một CSDL (ví dụ: MongoDB, MySQL) hoặc dịch vụ backend như Firebase để lưu trữ và quản lý dữ liệu.
- **9/10**: Thiết lập CI/CD với GitHub Actions để tự động hóa quy trình kiểm thử và triển khai ứng dụng.
- **10/10**: Báo cáo chi tiết về quá trình phát triển ứng dụng, bao gồm thiết kế, triển khai, kiểm thử và CI/CD. Video demo ứng dụng hoạt động và tài liệu hướng dẫn cài đặt ứng dụng trên thiết bị di động hoặc máy ảo.

## Báo cáo kết quả

Sinh viên viết báo cáo kết quả trực tiếp vào phần này để tránh tạo ra nhiều file báo cáo. Báo cáo cần bao gồm các nội dung sau:

1. **Giới thiệu ứng dụng**: Là ứng dụng về du lịch, mục tiêu của nó là để giới thiệu về các kỳ quan thiên nhiên của Miền Bắc.

2. **Hình ảnh giao diện**: 

   <figure>
  <!-- Hình ảnh 1 -->
  <img src="img/giaodien1.png" alt="Giao diện của ứng dụng web - 1">
  <!-- Hình ảnh 2 -->
  <img src="img/giaodien2.png" alt="Giao diện của ứng dụng web - 2">
  <!-- Hình ảnh 3 -->
  <img src="img/giaodien3.png" alt="Giao diện của ứng dụng web - 3">
  
  <center>
    <figcaption>Giao diện mong đợi của ứng dụng</figcaption>
  </center>
</figure>

3. **Video demo**: 

<figure>
  <video controls width="600">
    <source src="video/btlweb.mp4" type="video/mp4">
  <ogg">
  </video>
  <figcaption>Video giới thiệu về ứng dụng</figcaption>
</figure>

4. **MySQL**: 
SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Cơ sở dữ liệu: `btlweb`
--

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `favourite_userss`
--

CREATE TABLE `favourite_userss` (
  `pr_id` int(11) NOT NULL,
  `pr_name` varchar(255) NOT NULL,
  `location` varchar(100) NOT NULL,
  `img` char(50) NOT NULL,
  `description` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `tbl_users`
--

CREATE TABLE `tbl_users` (
  `users_id` int(11) NOT NULL,
  `username` varchar(50) NOT NULL,
  `password` varchar(50) NOT NULL,
  `gender` enum('male','female','custom') CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci NOT NULL,
  `day` int(11) NOT NULL,
  `year` year(4) NOT NULL,
  `email` varchar(50) DEFAULT NULL,
  `month` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Đang đổ dữ liệu cho bảng `tbl_users`
--

INSERT INTO `tbl_users` (`users_id`, `username`, `password`, `gender`, `day`, `year`, `email`, `month`) VALUES
(1, 'quynh', '1234', 'female', 1, '2004', '123@gmail.com', 1),
(2, 'abc', 'abc', 'female', 1, '2000', 'a@gmail.com', 1),
(3, 'quynh', '111', 'female', 1, '2000', 'a@gmail.com', 1),
(4, 'quynh', '1234', 'female', 1, '2000', '1234@gmail.com', 1),
(5, 'xyz', 'xyz', 'female', 1, '2000', 'xyz@gmail.com', 1);

--
-- Chỉ mục cho các bảng đã đổ
--

--
-- Chỉ mục cho bảng `favourite_userss`
--
ALTER TABLE `favourite_userss`
  ADD PRIMARY KEY (`pr_id`);

--
-- Chỉ mục cho bảng `tbl_users`
--
ALTER TABLE `tbl_users`
  ADD PRIMARY KEY (`users_id`);

--
-- AUTO_INCREMENT cho các bảng đã đổ
--

--
-- AUTO_INCREMENT cho bảng `favourite_userss`
--
ALTER TABLE `favourite_userss`
  MODIFY `pr_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT cho bảng `tbl_users`
--
ALTER TABLE `tbl_users`
  MODIFY `users_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;

5. **Tự đánh giá điểm**: 5/10 
- Lý do: do chưa thiết lập được CI/CD, kiểm thử tự động, web vẫn chưa có nhiều tính năng.

## Yêu cầu nộp bài
- **Source code**: Sinh viên cần nhận bài tập từ GitHub Classroom và nộp mã nguồn của ứng dụng theo đúng cấu trúc yêu cầu.
- **Gỡ lỗi ứng dụng**: Sinh viên cần chắc chắn ứng dụng hoạt động đúng trên máy tính cá nhân trước khi nộp bài.
- **Kiểm thử tự động**: Sinh viên cần thiết lập kiểm thử tự động để đảm bảo chất lượng ứng dụng. Mã nguồn của kiểm thử cần được đặt trong thư mục `tests`.
- **Thiết kế giao diện**: Thiết kế giao diện người dùng cho ứng dụng, đảm bảo tính thân thiện và dễ sử dụng.
- **Phát triển backend**: Xây dựng backend cho ứng dụng, bao gồm các API cần thiết để thực hiện các thao tác CRUD với dữ liệu thông qua **CSDL hoặc dịch vụ backend như Firebase**.

- **Tích hợp frontend và backend**: Tích hợp giao diện người dùng với backend thông qua các API.
- **Thiết lập CI/CD**: Thiết lập GitHub Actions để tự động hóa quy trình kiểm thử và triển khai.

