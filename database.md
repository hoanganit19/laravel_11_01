Phân tích Database

users: Lưu trữ quản trị viên
- id int primary key
- email varchar
- name varchar
- password varchar
- status tinyint => Trạng thái tài khoản
- group_id khoá ngoại đến trường id của bảng groups
- created_at timestamp
- updated_at timestamp

groups: Nhóm quản trị => Áp dụng để phân quyền
- id int primary key
- name varchar
- permissions text => Lưu trữ chuỗi json các quyền tương ứng với 1 nhóm
- created_at timestamp
- updated_at timestamp

modules: Lưu trữ các modules trong trang quản trị
- id int primary key
- name varchar
- title varchar
- actions text => Json lưu trữ các quyền của module

=> Giải thích lại ở phần phân quyền

products: Lưu trữ sản phẩm
- id int primary key
- name varchar => Tên sản phẩm
- slug varchar => Đường dẫn tĩnh sản phẩm
- description text => Mô tả ngắn sản phẩm
- regular_price double => Giá gốc sản phẩm
- sale_price double => Giá khuyến mãi
- thumbnail varchar => Ảnh đại diện sản phẩm
- content text => Nội dung chi tiết sản phẩm
- comment_id int - khoá ngoại tới trường id bảng comments
- is_feature tinyint => Sản phẩm nổi bật
- is_best_seller tinyint => Sản phẩm bán chạy
- created_at timestamp
- updated_at timestamp

categories: Lưu trữ danh mục sản phẩm
- id int primary key
- name varchar => Tên danh mục
- slug varchar => Đường dẫn tĩnh
- description text
- banner_url varchar
- parent_id int
- created_at timestamp
- updated_at timestamp

products_categories: Liên kết giữa products và categories (N-N)
- id int primary key
- product_id int - khoá ngoại tới id của bảng products
- category_id int - khoá ngoại tới id của bảng categories
- created_at timestamp
- updated_at timestamp

products_gallery: Lưu trữ thư viện ảnh sản phẩm
- id int primary key
- product_id int - khoá ngoại tới id của bảng products
- image_url varchar
- created_at timestamp
- updated_at timestamp

attributes: Lưu trữ thuộc tính sản phẩm
- id int primary key
- name varchar => Tên thuộc tính
- created_at timestamp
- updated_at timestamp

attributes_values: Lưu trữ các giá trị thuộc tính
- id int primary key
- attribute_id int - khoá ngoại tới trường id của bảng attributes
- value varchar => Giá trị thuộc tính
- created_at timestamp
- updated_at timestamp

products_attributes: Liên kết giữa thuộc tính với sản phẩm
- id int primary key
- attribute_id int - khoá ngoại tới trường id của bảng attributes
- value_id int - Khoá ngoại tới trường id của bảng attributes_values
- created_at timestamp
- updated_at timestamp

reviews: Lưu trữ đánh giá sao sản phẩm
- id int primary key
- product_id int - khoá ngoại đến trường id của bảng products
- star int => Số sao đánh giá
- customer_id int - khoá ngoại tới trường id của bảng customers
- created_at timestamp
- updated_at timestamp

comments: Lưu trữ bình luận về sản phẩm
- id int primary key
- customer_id int - khoá ngoại tới trường id của bảng customers
- content text
- status tinyint
- created_at timestamp
- updated_at timestamp

news: Lưu trữ tin tức
- id int primary key
- title varchar
- slug varchar
- description text
- content text
- status tinyint
- category_id int khoá ngoại tới trường id của bảng news_categories
- thumbnail varchar
- created_at timestamp
- updated_at timestamp

news_categories: Lưu trữ chuyên mục tin tức
- id int primary key
- name varchar 
- slug varchar
- description text
- parent_id int
- created_at timestamp
- updated_at timestamp

provinces: Lưu trữ tỉnh thành
- id int primary key
- name varchar
- prefix varchar

district: Lưu trữ quận huyện
- id int primary key
- name varchar
- prefix varchar
- province_id int - khoá ngoại đến id của bảng provinces

wards: Lưu trữ xã - phường
- id int primary key
- name varchar
- prefix varchar
- district_id int - khoá ngoại đến id của bảng district

order_overview: Lưu trữ đơn hàng
- id int primary key
- customer_name varchar
- customer_email varchar
- customer_phone varchar
- customer_address varchar
- province_id int - khoá ngoại tới trường id của bảng provinces
- district_id int - khoá ngoại tới trường id của bảng district
- ward_id int - khoá noại tới trường id của bảng wards
- total double => Tổng số tiền
- quantity int => Tổng số sản phẩm
- status int - khoá ngoại tới trường id của bảng order_status
- fee_ship int => Phí ship
- discount double default 0 - Giảm giá của đơn hàng
- note text => Ghi chú đơn hàng
- created_at timestamp
- updated_at timestamp

order_detail: Chi tiết đơn hàng
- id int primary key
- product_id int - khoá ngoại tới trường id của bảng products
- quantity int => Số lượng sản phẩm
- amout double => Tổng tiền của 1 sản phẩm
- created_at timestamp
- updated_at timestamp

order_status: Lưu trữ trạng thái sản phẩm
- id int primary key
- name
- created_at timestamp
- updated_at timestamp

coupons: Lưu trữ mã giảm giá
- id int primary key
- code varchar => Mã giảm giá
- expire_date timestamp => Thời gian hiệu lực của mã giảm giá
- discount_type varchar => Kiểu giảm giá (Cố định: value, percent)
- discount_value double => Giá trị giảm giá (Ví dụ: 10%, 200000)
- created_at timestamp
- updated_at timestamp

pages: Lưu trữ trang tĩnh
- id int primary key
- title varchar
- slug varchar
- content text
- created_at timestamp
- updated_at timestamp

contact_forms: Lưu trữ liên hệ
- id int primary key
- name varchar
- email varchar
- content text
- status tinyint => Trạng thái xử lý
- note text => Ghi chú
- created_at timestamp
- updated_at timestamp

customers: Lưu trữ thông tin khách hàng
- id int primary key
- name varchar
- email varchar
- phone varchar
- address varchar
- password varchar
- status tinyint => Trạng thái tài khoản
- forgot_code varchar => Token quên mật khẩu
- active_code varchar => Token kích hoạt tài khoan
- created_at timestamp
- updated_at timestamp

options: Lưu trữ các cấu hình - thiết lập
- id int primary key
- opt_key varchar
- opt_value text