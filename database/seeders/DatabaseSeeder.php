<?php

namespace Database\Seeders;

use App\Models\Category;
use App\Models\ListOfValue;
use App\Models\Product;
use App\Models\ProductDetail;
use App\Models\ProductModel;
use App\Models\Slider;
use App\Models\Supplier;
use App\Models\User;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        // \App\Models\User::factory(10)->create();

        User::create( [
            'id'=>1,
            'username'=>'admin',
            'name'=>'admin',
            'email'=>NULL,
            'role'=>1,
            'password'=>'$2y$10$kS6.gqY3j3DgtCedMbrfuOnTiqaYyKDU3/U9ihisfvzmuukKQGwuK', //password is: 123456789
            'phone'=>NULL,
            'address'=>NULL,
            'created_at'=>'2023-01-21 06:26:09',
            'updated_at'=>'2023-01-21 06:26:10'
        ] );

        Category::create([
            'id' => 1,
            'name' => 'Áo Hoodie'
        ]);

        Category::create([
            'id' => 2,
            'name' => 'Áo Sweater'
        ]);

        Category::create([
            'id' => 3,
            'name' => 'Áo Oversize T-Shirt'
        ]);

        Category::create([
            'id' => 5,
            'name' => 'Áo Thun Wash'
        ]);

        Category::create([
            'id' => 6,
            'name' => 'Quần Jean'
        ]);

        Category::create([
            'id' => 7,
            'name' => 'Quần Kaki'
        ]);

        Category::create([
            'id' => 8,
            'name' => 'Quần Short'
        ]);

        Category::create([
            'id' => 9,
            'name' => 'Áo Polo'
        ]);

        Category::create([
            'id' => 10,
            'name' => 'Áo Tank Top'
        ]);

        Listofvalue::create([
            'id_list' => 1,
            'id_element' => 1,
            'name_list' => 'Loại đơn hàng',
            'name_element' => 'Đơn hàng',
            'description' => NULL,
            'create_at' => '2023-02-14 06:22:46'
        ]);


        Listofvalue::create([
            'id_list' => 1,
            'id_element' => 2,
            'name_list' => 'Loại đơn hàng',
            'name_element' => 'Vận đơn',
            'description' => NULL,
            'create_at' => '2023-02-14 06:22:51'
        ]);


        Listofvalue::create([
            'id_list' => 1,
            'id_element' => 3,
            'name_list' => 'Loại đơn hàng',
            'name_element' => 'Hóa đơn',
            'description' => NULL,
            'create_at' => '2023-02-14 06:22:55'
        ]);


        Listofvalue::create([
            'id_list' => 1,
            'id_element' => 4,
            'name_list' => 'Loại đơn hàng',
            'name_element' => 'Đơn hủy',
            'description' => NULL,
            'create_at' => '2023-02-14 06:23:04'
        ]);


        Listofvalue::create([
            'id_list' => 2,
            'id_element' => 1,
            'name_list' => 'Loại tài khoản',
            'name_element' => 'Quản trị viên',
            'description' => NULL,
            'create_at' => '2023-02-05 14:21:42'
        ]);


        Listofvalue::create([
            'id_list' => 2,
            'id_element' => 2,
            'name_list' => 'Loại tài khoản',
            'name_element' => 'Nhân viên',
            'description' => NULL,
            'create_at' => '2023-02-05 14:21:59'
        ]);


        Listofvalue::create([
            'id_list' => 2,
            'id_element' => 3,
            'name_list' => 'Loại tài khoản',
            'name_element' => 'Khách hàng',
            'description' => NULL,
            'create_at' => '2023-02-05 14:22:30'
        ]);


        Listofvalue::create([
            'id_list' => 3,
            'id_element' => 1,
            'name_list' => 'Màu sắc',
            'name_element' => 'Đen',
            'description' => NULL,
            'create_at' => '2023-02-05 14:22:49'
        ]);


        Listofvalue::create([
            'id_list' => 3,
            'id_element' => 2,
            'name_list' => 'Màu sắc',
            'name_element' => 'Trắng',
            'description' => NULL,
            'create_at' => '2023-02-05 14:22:58'
        ]);


        Listofvalue::create([
            'id_list' => 3,
            'id_element' => 3,
            'name_list' => 'Màu sắc',
            'name_element' => 'Vàng',
            'description' => NULL,
            'create_at' => '2023-02-05 14:23:13'
        ]);


        Listofvalue::create([
            'id_list' => 3,
            'id_element' => 4,
            'name_list' => 'Màu sắc',
            'name_element' => 'Xanh',
            'description' => NULL,
            'create_at' => '2023-02-05 14:23:24'
        ]);


        Listofvalue::create([
            'id_list' => 3,
            'id_element' => 5,
            'name_list' => 'Màu sắc',
            'name_element' => 'Hồng',
            'description' => NULL,
            'create_at' => '2023-02-18 13:20:29'
        ]);


        Listofvalue::create([
            'id_list' => 3,
            'id_element' => 6,
            'name_list' => 'Màu sắc',
            'name_element' => 'Đỏ',
            'description' => NULL,
            'create_at' => '2023-02-18 13:21:50'
        ]);


        Listofvalue::create([
            'id_list' => 3,
            'id_element' => 7,
            'name_list' => 'Màu sắc',
            'name_element' => 'Xám',
            'description' => NULL,
            'create_at' => '2023-02-18 13:41:09'
        ]);


        Listofvalue::create([
            'id_list' => 3,
            'id_element' => 8,
            'name_list' => 'Màu sắc',
            'name_element' => 'Be',
            'description' => NULL,
            'create_at' => '2023-02-24 03:05:33'
        ]);


        Listofvalue::create([
            'id_list' => 4,
            'id_element' => 1,
            'name_list' => 'Kích thước',
            'name_element' => 'S',
            'description' => NULL,
            'create_at' => '2023-02-24 09:28:58'
        ]);


        Listofvalue::create([
            'id_list' => 4,
            'id_element' => 2,
            'name_list' => 'Kích thước',
            'name_element' => 'M',
            'description' => NULL,
            'create_at' => '2023-02-05 14:23:46'
        ]);


        Listofvalue::create([
            'id_list' => 4,
            'id_element' => 3,
            'name_list' => 'Kích thước',
            'name_element' => 'L',
            'description' => NULL,
            'create_at' => '2023-02-05 14:23:56'
        ]);


        Listofvalue::create([
            'id_list' => 4,
            'id_element' => 4,
            'name_list' => 'Kích thước',
            'name_element' => 'XL',
            'description' => NULL,
            'create_at' => '2023-02-05 14:24:06'
        ]);


        Listofvalue::create([
            'id_list' => 4,
            'id_element' => 5,
            'name_list' => 'Kích thước',
            'name_element' => 'XXL',
            'description' => NULL,
            'create_at' => '2023-02-05 14:24:19'
        ]);


        Listofvalue::create([
            'id_list' => 4,
            'id_element' => 6,
            'name_list' => 'Kích thước',
            'name_element' => 'XXXL',
            'description' => NULL,
            'create_at' => '2023-02-24 09:44:51'
        ]);

        Product::create([
            'id' => 3,
            'name' => 'Áo Hoodie HX044',
            'quantity' => 56,
            'id_category' => 1,
            'image' => '/ckfinder/userfiles/images/%C3%81o%20Hoodie/%C3%81o%20Hoodie%20HX044/HXD044.jpg',
            'price' => 380000,
            'description' => '

Áo Hoodie Nam Nữ HX129 là hàng may mặc đa diện trong thế giới ngày nay. Chúng phục vụ nhiều mục đích, nhiều đối tượng. Từ việc giữ ấm cơ thể trong mùa động lạnh, với chất liệu cotton thấm hút mồ hôi và thoáng mát cũng được sử dụng làm áo khoác chống nắng . Cũng là trang phục thời trang sành điệu. Áo Hoodie Nam Nữ của Navy là một chiếc áo hoodie mềm mại, ấm cúng. Nó được làm từ chất liệu nỉ cotton có pha sợi spandex giúp co giãn tốt & thoải mái cho người mặc. Họa tiết được in bằng công nghệ in kỹ thuật số cao cấp sẽ không bị phai màu sau khi giặt.

'
        ]);


        Product::create([
            'id' => 4,
            'name' => 'Áo Hoodie HX058',
            'quantity' => 17,
            'id_category' => 1,
            'image' => '/ckfinder/userfiles/images/%C3%81o%20Hoodie/%C3%81o%20Hoodie%20HX058/HX058D.jpg',
            'price' => 380000,
            'description' => '

Áo Hoodie Nam Nữ HX058 là hàng may mặc đa diện trong thế giới ngày nay. Chúng phục vụ nhiều mục đích, nhiều đối tượng. Từ việc giữ ấm cơ thể trong mùa động lạnh, với chất liệu cotton thấm hút mồ hôi và thoáng mát cũng được sử dụng làm áo khoác chống nắng . Cũng là trang phục thời trang sành điệu. Áo Hoodie Nam Nữ của Navy là một chiếc áo hoodie mềm mại, ấm cúng. Nó được làm từ chất liệu nỉ cotton có pha sợi spandex giúp co giãn tốt & thoải mái cho người mặc. Họa tiết được in bằng công nghệ in kỹ thuật số cao cấp sẽ không bị phai màu sau khi giặt.

'
        ]);


        Product::create([
            'id' => 5,
            'name' => 'Áo Hoodie HX065',
            'quantity' => 38,
            'id_category' => 1,
            'image' => '/ckfinder/userfiles/images/%C3%81o%20Hoodie/%C3%81o%20Hoodie%20HX065/HX065-800x800.jpg',
            'price' => 380000,
            'description' => '

Áo Hoodie Nam Nữ HX065 là hàng may mặc đa diện trong thế giới ngày nay. Chúng phục vụ nhiều mục đích, nhiều đối tượng. Từ việc giữ ấm cơ thể trong mùa động lạnh, với chất liệu cotton thấm hút mồ hôi và thoáng mát cũng được sử dụng làm áo khoác chống nắng . Cũng là trang phục thời trang sành điệu. Áo Hoodie Nam Nữ của Navy là một chiếc áo hoodie mềm mại, ấm cúng. Nó được làm từ chất liệu nỉ cotton có pha sợi spandex giúp co giãn tốt & thoải mái cho người mặc. Họa tiết được in bằng công nghệ in kỹ thuật số cao cấp sẽ không bị phai màu sau khi giặt.

'
        ]);


        Product::create([
            'id' => 6,
            'name' => 'Áo Hoodie HX076',
            'quantity' => 41,
            'id_category' => 1,
            'image' => '/ckfinder/userfiles/images/%C3%81o%20Hoodie/%C3%81o%20Hoodie%20HX076/HX076-A-800x800.jpg',
            'price' => 380000,
            'description' => '

Áo Hoodie Nam Nữ HX076 là hàng may mặc đa diện trong thế giới ngày nay. Chúng phục vụ nhiều mục đích, nhiều đối tượng. Từ việc giữ ấm cơ thể trong mùa động lạnh, với chất liệu cotton thấm hút mồ hôi và thoáng mát cũng được sử dụng làm áo khoác chống nắng . Cũng là trang phục thời trang sành điệu. Áo Hoodie Nam Nữ của Navy là một chiếc áo hoodie mềm mại, ấm cúng. Nó được làm từ chất liệu nỉ cotton có pha sợi spandex giúp co giãn tốt & thoải mái cho người mặc. Họa tiết được in bằng công nghệ in kỹ thuật số cao cấp sẽ không bị phai màu sau khi giặt.

'
        ]);


        Product::create([
            'id' => 7,
            'name' => 'Áo Hoodie HX077',
            'quantity' => 17,
            'id_category' => 1,
            'image' => '/ckfinder/userfiles/images/%C3%81o%20Hoodie/%C3%81o%20Hoodie%20HX077/HX077-A-800x800.jpg',
            'price' => 380000,
            'description' => '

Áo Hoodie Nam Nữ HX077 là hàng may mặc đa diện trong thế giới ngày nay. Chúng phục vụ nhiều mục đích, nhiều đối tượng. Từ việc giữ ấm cơ thể trong mùa động lạnh, với chất liệu cotton thấm hút mồ hôi và thoáng mát cũng được sử dụng làm áo khoác chống nắng . Cũng là trang phục thời trang sành điệu. Áo Hoodie Nam Nữ của Navy là một chiếc áo hoodie mềm mại, ấm cúng. Nó được làm từ chất liệu nỉ cotton có pha sợi spandex giúp co giãn tốt & thoải mái cho người mặc. Họa tiết được in bằng công nghệ in kỹ thuật số cao cấp sẽ không bị phai màu sau khi giặt.

'
        ]);


        Product::create([
            'id' => 8,
            'name' => 'Áo Hoodie HX078',
            'quantity' => 36,
            'id_category' => 1,
            'image' => '/ckfinder/userfiles/images/%C3%81o%20Hoodie/%C3%81o%20Hoodie%20HX078/HX078-800x800.jpg',
            'price' => 350000,
            'description' => '

Áo Hoodie Nam Nữ HX078 là hàng may mặc đa diện trong thế giới ngày nay. Chúng phục vụ nhiều mục đích, nhiều đối tượng. Từ việc giữ ấm cơ thể trong mùa động lạnh, với chất liệu cotton thấm hút mồ hôi và thoáng mát cũng được sử dụng làm áo khoác chống nắng . Cũng là trang phục thời trang sành điệu. Áo Hoodie Nam Nữ của Navy là một chiếc áo hoodie mềm mại, ấm cúng. Nó được làm từ chất liệu nỉ cotton có pha sợi spandex giúp co giãn tốt & thoải mái cho người mặc. Họa tiết được in bằng công nghệ in kỹ thuật số cao cấp sẽ không bị phai màu sau khi giặt.

'
        ]);


        Product::create([
            'id' => 9,
            'name' => 'Áo Hoodie HX086',
            'quantity' => 20,
            'id_category' => 1,
            'image' => '/ckfinder/userfiles/images/%C3%81o%20Hoodie/%C3%81o%20Hoodie%20HX086/HX086-A-800x800.jpg',
            'price' => 350000,
            'description' => '

Áo Hoodie Nam Nữ HX086 là hàng may mặc đa diện trong thế giới ngày nay. Chúng phục vụ nhiều mục đích, nhiều đối tượng. Từ việc giữ ấm cơ thể trong mùa động lạnh, với chất liệu cotton thấm hút mồ hôi và thoáng mát cũng được sử dụng làm áo khoác chống nắng . Cũng là trang phục thời trang sành điệu. Áo Hoodie Nam Nữ của Navy là một chiếc áo hoodie mềm mại, ấm cúng. Nó được làm từ chất liệu nỉ cotton có pha sợi spandex giúp co giãn tốt & thoải mái cho người mặc. Họa tiết được in bằng công nghệ in kỹ thuật số cao cấp sẽ không bị phai màu sau khi giặt.

'
        ]);


        Product::create([
            'id' => 10,
            'name' => 'Áo Hoodie HX129',
            'quantity' => 18,
            'id_category' => 1,
            'image' => '/ckfinder/userfiles/images/%C3%81o%20Hoodie/%C3%81o%20Hoodie%20HX129/HX129D.jpg',
            'price' => 300000,
            'description' => '

Áo Hoodie Nam Nữ HX129 là hàng may mặc đa diện trong thế giới ngày nay. Chúng phục vụ nhiều mục đích, nhiều đối tượng. Từ việc giữ ấm cơ thể trong mùa động lạnh, với chất liệu cotton thấm hút mồ hôi và thoáng mát cũng được sử dụng làm áo khoác chống nắng . Cũng là trang phục thời trang sành điệu. Áo Hoodie Nam Nữ của Navy là một chiếc áo hoodie mềm mại, ấm cúng. Nó được làm từ chất liệu nỉ cotton có pha sợi spandex giúp co giãn tốt & thoải mái cho người mặc. Họa tiết được in bằng công nghệ in kỹ thuật số cao cấp sẽ không bị phai màu sau khi giặt.

'
        ]);


        Product::create([
            'id' => 11,
            'name' => 'Áo Oversize T-Shirt VX149',
            'quantity' => 0,
            'id_category' => 3,
            'image' => '/ckfinder/userfiles/images/%C3%81o%20Oversize%20T-Shirt/%C3%81o%20Oversize%20T-Shirt%20VX149/VXM149.jpg',
            'price' => 250000,
            'description' => '

Áo thun oversize là một món đồ hầu như không thể thiếu trong tủ quần áo của nhiều người. Nhờ sự linh hoạt trong sự phối đồ, áo thun oversize phù hợp với mọi giới tính và mọi lứa tuổi từ già đến trẻ và với mọi vóc dáng. Chính vì vậy, tuy đã xuất hiện từ rất lâu trong lịch sử thời trang nhưng sức hút của áo over size vẫn chưa bao giờ giảm “nhiệt”. Luôn giữ vững vị trí được ưa chuộng trong lòng khách hàng tiêu dùng. Áo thun oversize Unbreak VX236 của Navy làm bằng chất liệu thun cotton 100%, co giãn nhẹ.

\r\n\r\n
Không bị ra màu, rách hình khi giặt bằng máy giặt hay giặt tay.

\r\n\r\n
Mẫu có đủ size từ 40kg-120kg.

\r\n\r\n
Form dáng đẹp

'
        ]);


        Product::create([
            'id' => 12,
            'name' => 'Áo Oversize T-Shirt VX158',
            'quantity' => 0,
            'id_category' => 3,
            'image' => '/ckfinder/userfiles/images/%C3%81o%20Oversize%20T-Shirt/%C3%81o%20Oversize%20T-Shirt%20VX158/VXC158-800x800.jpg',
            'price' => 250000,
            'description' => '

Áo thun oversize là một món đồ hầu như không thể thiếu trong tủ quần áo của nhiều người. Nhờ sự linh hoạt trong sự phối đồ, áo thun oversize phù hợp với mọi giới tính và mọi lứa tuổi từ già đến trẻ và với mọi vóc dáng. Chính vì vậy, tuy đã xuất hiện từ rất lâu trong lịch sử thời trang nhưng sức hút của áo over size vẫn chưa bao giờ giảm “nhiệt”. Luôn giữ vững vị trí được ưa chuộng trong lòng khách hàng tiêu dùng. Áo thun oversize Unbreak VX236 của Navy làm bằng chất liệu thun cotton 100%, co giãn nhẹ.

\r\n\r\n
Không bị ra màu, rách hình khi giặt bằng máy giặt hay giặt tay.

\r\n\r\n
Mẫu có đủ size từ 40kg-120kg.

\r\n\r\n
Form dáng đẹp

'
        ]);


        Product::create([
            'id' => 13,
            'name' => 'Áo Oversize T-Shirt VX192',
            'quantity' => 0,
            'id_category' => 3,
            'image' => '/ckfinder/userfiles/images/%C3%81o%20Oversize%20T-Shirt/%C3%81o%20Oversize%20T-Shirt%20VX192/VXM192-800x800.jpg',
            'price' => 200000,
            'description' => '

Áo thun oversize là một món đồ hầu như không thể thiếu trong tủ quần áo của nhiều người. Nhờ sự linh hoạt trong sự phối đồ, áo thun oversize phù hợp với mọi giới tính và mọi lứa tuổi từ già đến trẻ và với mọi vóc dáng. Chính vì vậy, tuy đã xuất hiện từ rất lâu trong lịch sử thời trang nhưng sức hút của áo over size vẫn chưa bao giờ giảm “nhiệt”. Luôn giữ vững vị trí được ưa chuộng trong lòng khách hàng tiêu dùng. Áo thun oversize Unbreak VX236 của Navy làm bằng chất liệu thun cotton 100%, co giãn nhẹ.

\r\n\r\n
Không bị ra màu, rách hình khi giặt bằng máy giặt hay giặt tay.

\r\n\r\n
Mẫu có đủ size từ 40kg-120kg.

\r\n\r\n
Form dáng đẹp

'
        ]);


        Product::create([
            'id' => 14,
            'name' => 'Áo Oversize T-Shirt VX213',
            'quantity' => 0,
            'id_category' => 3,
            'image' => '/ckfinder/userfiles/images/%C3%81o%20Oversize%20T-Shirt/%C3%81o%20Oversize%20T-Shirt%20VX213/VXQ213-800x800.jpg',
            'price' => 200000,
            'description' => '

Áo thun oversize là một món đồ hầu như không thể thiếu trong tủ quần áo của nhiều người. Nhờ sự linh hoạt trong sự phối đồ, áo thun oversize phù hợp với mọi giới tính và mọi lứa tuổi từ già đến trẻ và với mọi vóc dáng. Chính vì vậy, tuy đã xuất hiện từ rất lâu trong lịch sử thời trang nhưng sức hút của áo over size vẫn chưa bao giờ giảm “nhiệt”. Luôn giữ vững vị trí được ưa chuộng trong lòng khách hàng tiêu dùng. Áo thun oversize Unbreak VX236 của Navy làm bằng chất liệu thun cotton 100%, co giãn nhẹ.

\r\n\r\n
Không bị ra màu, rách hình khi giặt bằng máy giặt hay giặt tay.

\r\n\r\n
Mẫu có đủ size từ 40kg-120kg.

\r\n\r\n
Form dáng đẹp

'
        ]);


        Product::create([
            'id' => 15,
            'name' => 'Áo Oversize T-Shirt VX255',
            'quantity' => 0,
            'id_category' => 3,
            'image' => '/ckfinder/userfiles/images/%C3%81o%20Oversize%20T-Shirt/%C3%81o%20Oversize%20T-Shirt%20VX255/VXD255.jpg',
            'price' => 220000,
            'description' => '

Áo thun oversize là một món đồ hầu như không thể thiếu trong tủ quần áo của nhiều người. Nhờ sự linh hoạt trong sự phối đồ, áo thun oversize phù hợp với mọi giới tính và mọi lứa tuổi từ già đến trẻ và với mọi vóc dáng. Chính vì vậy, tuy đã xuất hiện từ rất lâu trong lịch sử thời trang nhưng sức hút của áo over size vẫn chưa bao giờ giảm “nhiệt”. Luôn giữ vững vị trí được ưa chuộng trong lòng khách hàng tiêu dùng. Áo thun oversize Unbreak VX236 của Navy làm bằng chất liệu thun cotton 100%, co giãn nhẹ.

\r\n\r\n
Không bị ra màu, rách hình khi giặt bằng máy giặt hay giặt tay.

\r\n\r\n
Mẫu có đủ size từ 40kg-120kg.

\r\n\r\n
Form dáng đẹp

'
        ]);


        Product::create([
            'id' => 16,
            'name' => 'Áo Thun Wash ABX014',
            'quantity' => 0,
            'id_category' => 5,
            'image' => '/ckfinder/userfiles/images/%C3%81o%20Thun%20Wash/%C3%81o%20Thun%20Wash%20ABX014/ABX014-800x800.jpg',
            'price' => 180000,
            'description' => '

Áo Thun Wash Stronger AIX014 thiết kế đơn giản, tinh tế mang một vẻ đẹp riêng giúp bạn trờ nên tự tin khi mặc lên người. Bạn sẽ dễ dàng phối đồ nhiều phong cách. Năng động cá tính và chút bụi đường phố. Áo được làm chất liệu 100% cotton co dãn và bền màu, thấm hút mồ hôi cực tốt

\r\n\r\n
Áo Thun Wash Stronger AIX014 của Navy đang là mẫu hót được nhiều bạn trẻ săn đón

\r\n\r\n
Mẫu có đủ size từ 40kg-110kg.

\r\n\r\n
form dáng đẹp.

'
        ]);


        Product::create([
            'id' => 17,
            'name' => 'Áo Thun Wash ACX003',
            'quantity' => 0,
            'id_category' => 5,
            'image' => '/ckfinder/userfiles/images/%C3%81o%20Thun%20Wash/%C3%81o%20Thun%20Wash%20ACX003/ACX003-800x800.jpg',
            'price' => 180000,
            'description' => '

Áo Thun Wash Stronger AIX014 thiết kế đơn giản, tinh tế mang một vẻ đẹp riêng giúp bạn trờ nên tự tin khi mặc lên người. Bạn sẽ dễ dàng phối đồ nhiều phong cách. Năng động cá tính và chút bụi đường phố. Áo được làm chất liệu 100% cotton co dãn và bền màu, thấm hút mồ hôi cực tốt

\r\n\r\n
Áo Thun Wash Stronger AIX014 của Navy đang là mẫu hót được nhiều bạn trẻ săn đón

\r\n\r\n
Mẫu có đủ size từ 40kg-110kg.

\r\n\r\n
form dáng đẹp.

'
        ]);


        Product::create([
            'id' => 18,
            'name' => 'Áo Thun Wash ACX004',
            'quantity' => 0,
            'id_category' => 5,
            'image' => '/ckfinder/userfiles/images/%C3%81o%20Thun%20Wash/%C3%81o%20Thun%20Wash%20ACX004/ACX004-800x800.jpg',
            'price' => 180000,
            'description' => '

Áo Thun Wash Stronger AIX014 thiết kế đơn giản, tinh tế mang một vẻ đẹp riêng giúp bạn trờ nên tự tin khi mặc lên người. Bạn sẽ dễ dàng phối đồ nhiều phong cách. Năng động cá tính và chút bụi đường phố. Áo được làm chất liệu 100% cotton co dãn và bền màu, thấm hút mồ hôi cực tốt

\r\n\r\n
Áo Thun Wash Stronger AIX014 của Navy đang là mẫu hót được nhiều bạn trẻ săn đón

\r\n\r\n
Mẫu có đủ size từ 40kg-110kg.

\r\n\r\n
form dáng đẹp.

'
        ]);


        Product::create([
            'id' => 19,
            'name' => 'Áo Thun Wash ACX035',
            'quantity' => 0,
            'id_category' => 5,
            'image' => '/ckfinder/userfiles/images/%C3%81o%20Thun%20Wash/%C3%81o%20Thun%20Wash%20ACX035/ACX035-800x800.jpg',
            'price' => 150000,
            'description' => '

Áo Thun Wash Stronger AIX014 thiết kế đơn giản, tinh tế mang một vẻ đẹp riêng giúp bạn trờ nên tự tin khi mặc lên người. Bạn sẽ dễ dàng phối đồ nhiều phong cách. Năng động cá tính và chút bụi đường phố. Áo được làm chất liệu 100% cotton co dãn và bền màu, thấm hút mồ hôi cực tốt

\r\n\r\n
Áo Thun Wash Stronger AIX014 của Navy đang là mẫu hót được nhiều bạn trẻ săn đón

\r\n\r\n
Mẫu có đủ size từ 40kg-110kg.

\r\n\r\n
form dáng đẹp.

'
        ]);


        Product::create([
            'id' => 20,
            'name' => 'Áo Thun Wash AGX014',
            'quantity' => 0,
            'id_category' => 5,
            'image' => '/ckfinder/userfiles/images/%C3%81o%20Thun%20Wash/%C3%81o%20Thun%20Wash%20AGX014/AGX014-800x800.jpg',
            'price' => 150000,
            'description' => '

Áo Thun Wash Stronger AIX014 thiết kế đơn giản, tinh tế mang một vẻ đẹp riêng giúp bạn trờ nên tự tin khi mặc lên người. Bạn sẽ dễ dàng phối đồ nhiều phong cách. Năng động cá tính và chút bụi đường phố. Áo được làm chất liệu 100% cotton co dãn và bền màu, thấm hút mồ hôi cực tốt

\r\n\r\n
Áo Thun Wash Stronger AIX014 của Navy đang là mẫu hót được nhiều bạn trẻ săn đón

\r\n\r\n
Mẫu có đủ size từ 40kg-110kg.

\r\n\r\n
form dáng đẹp.

'
        ]);


        Product::create([
            'id' => 21,
            'name' => 'Áo Thun Wash AGX019',
            'quantity' => 0,
            'id_category' => 5,
            'image' => '/ckfinder/userfiles/images/%C3%81o%20Thun%20Wash/%C3%81o%20Thun%20Wash%20AGX019/AGX019-800x800.jpg',
            'price' => 150000,
            'description' => '

Áo Thun Wash Stronger AIX014 thiết kế đơn giản, tinh tế mang một vẻ đẹp riêng giúp bạn trờ nên tự tin khi mặc lên người. Bạn sẽ dễ dàng phối đồ nhiều phong cách. Năng động cá tính và chút bụi đường phố. Áo được làm chất liệu 100% cotton co dãn và bền màu, thấm hút mồ hôi cực tốt

\r\n\r\n
Áo Thun Wash Stronger AIX014 của Navy đang là mẫu hót được nhiều bạn trẻ săn đón

\r\n\r\n
Mẫu có đủ size từ 40kg-110kg.

\r\n\r\n
form dáng đẹp.

'
        ]);


        Product::create([
            'id' => 22,
            'name' => 'Áo Thun Wash AIX014',
            'quantity' => 0,
            'id_category' => 5,
            'image' => '/ckfinder/userfiles/images/%C3%81o%20Thun%20Wash/%C3%81o%20Thun%20Wash%20AIX014/AIX014-800x800.jpg',
            'price' => 150000,
            'description' => '

Áo Thun Wash Stronger AIX014 thiết kế đơn giản, tinh tế mang một vẻ đẹp riêng giúp bạn trờ nên tự tin khi mặc lên người. Bạn sẽ dễ dàng phối đồ nhiều phong cách. Năng động cá tính và chút bụi đường phố. Áo được làm chất liệu 100% cotton co dãn và bền màu, thấm hút mồ hôi cực tốt

\r\n\r\n
Áo Thun Wash Stronger AIX014 của Navy đang là mẫu hót được nhiều bạn trẻ săn đón

\r\n\r\n
Mẫu có đủ size từ 40kg-110kg.

\r\n\r\n
form dáng đẹp.

'
        ]);


        Product::create([
            'id' => 24,
            'name' => 'Áo Hoodie Trơn',
            'quantity' => 5,
            'id_category' => 1,
            'image' => '/ckfinder/userfiles/images/%C3%81o%20Hoodie/%C3%81o%20Hoodie%20Tr%C6%A1n/HXX044.jpg',
            'price' => 3000000,
            'description' => ''
        ]);

        Productmodel::create( [
            'id'=>1,
            'name'=>'Áo Hoodie HX044 (Đen - S)',
            'size'=>'S',
            'color'=>'Đen',
            'quantity'=>20,
            'id_product'=>3,
            'price'=>380000,
            'image'=>'/ckfinder/userfiles/images/%C3%81o%20Hoodie/%C3%81o%20Hoodie%20HX065/HX065-A-800x800.jpg'
        ] );



        Productmodel::create( [
            'id'=>2,
            'name'=>'Áo Hoodie HX044 (Trắng - S)',
            'size'=>'S',
            'color'=>'Trắng',
            'quantity'=>10,
            'id_product'=>3,
            'price'=>380000,
            'image'=>'/ckfinder/userfiles/images/%C3%81o%20Hoodie/%C3%81o%20Hoodie%20HX044/HX044-1.png'
        ] );



        Productmodel::create( [
            'id'=>3,
            'name'=>'Áo Hoodie HX044 (Đỏ - S)',
            'size'=>'S',
            'color'=>'Đỏ',
            'quantity'=>5,
            'id_product'=>3,
            'price'=>380000,
            'image'=>'/ckfinder/userfiles/images/%C3%81o%20Hoodie/%C3%81o%20Hoodie%20HX044/HXR044.jpg'
        ] );



        Productmodel::create( [
            'id'=>4,
            'name'=>'Áo Hoodie HX044 (Vàng - S)',
            'size'=>'S',
            'color'=>'Vàng',
            'quantity'=>10,
            'id_product'=>3,
            'price'=>380000,
            'image'=>'/ckfinder/userfiles/images/%C3%81o%20Hoodie/%C3%81o%20Hoodie%20HX044/HXV044.jpg'
        ] );



        Productmodel::create( [
            'id'=>5,
            'name'=>'Áo Hoodie HX044 (Xám - S)',
            'size'=>'S',
            'color'=>'Xám',
            'quantity'=>9,
            'id_product'=>3,
            'price'=>380000,
            'image'=>'/ckfinder/userfiles/images/%C3%81o%20Hoodie/%C3%81o%20Hoodie%20HX044/HXX044.jpg'
        ] );



        Productmodel::create( [
            'id'=>6,
            'name'=>'Áo Hoodie HX058 (Đen - S)',
            'size'=>'S',
            'color'=>'Đen',
            'quantity'=>7,
            'id_product'=>4,
            'price'=>380000,
            'image'=>'/ckfinder/userfiles/images/%C3%81o%20Hoodie/%C3%81o%20Hoodie%20HX065/HX065-A-800x800.jpg'
        ] );



        Productmodel::create( [
            'id'=>7,
            'name'=>'Áo Hoodie HX058 (Trắng - S)',
            'size'=>'S',
            'color'=>'Trắng',
            'quantity'=>10,
            'id_product'=>4,
            'price'=>380000,
            'image'=>'/ckfinder/userfiles/images/%C3%81o%20Hoodie/%C3%81o%20Hoodie%20HX058/HX058T.jpg'
        ] );



        Productmodel::create( [
            'id'=>8,
            'name'=>'Áo Hoodie HX065 (Đen - S)',
            'size'=>'S',
            'color'=>'Đen',
            'quantity'=>20,
            'id_product'=>5,
            'price'=>380000,
            'image'=>'/ckfinder/userfiles/images/%C3%81o%20Hoodie/%C3%81o%20Hoodie%20HX065/HX065-A-800x800.jpg'
        ] );



        Productmodel::create( [
            'id'=>9,
            'name'=>'Áo Hoodie HX065 (Trắng - S)',
            'size'=>'S',
            'color'=>'Trắng',
            'quantity'=>18,
            'id_product'=>5,
            'price'=>380000,
            'image'=>'/ckfinder/userfiles/images/%C3%81o%20Hoodie/%C3%81o%20Hoodie%20HX065/HX065-800x800.jpg'
        ] );



        Productmodel::create( [
            'id'=>10,
            'name'=>'Áo Hoodie HX076 (Đen - S)',
            'size'=>'S',
            'color'=>'Đen',
            'quantity'=>24,
            'id_product'=>6,
            'price'=>380000,
            'image'=>'/ckfinder/userfiles/images/%C3%81o%20Hoodie/%C3%81o%20Hoodie%20HX076/HX076-800x800.jpg'
        ] );



        Productmodel::create( [
            'id'=>11,
            'name'=>'Áo Hoodie HX076 (Trắng - S)',
            'size'=>'S',
            'color'=>'Trắng',
            'quantity'=>17,
            'id_product'=>6,
            'price'=>380000,
            'image'=>'/ckfinder/userfiles/images/%C3%81o%20Hoodie/%C3%81o%20Hoodie%20HX076/HX076-A-800x800.jpg'
        ] );



        Productmodel::create( [
            'id'=>12,
            'name'=>'Áo Hoodie HX077 (Đen - S)',
            'size'=>'S',
            'color'=>'Đen',
            'quantity'=>8,
            'id_product'=>7,
            'price'=>380000,
            'image'=>'/ckfinder/userfiles/images/%C3%81o%20Hoodie/%C3%81o%20Hoodie%20HX077/HX077-800x800.jpg'
        ] );



        Productmodel::create( [
            'id'=>13,
            'name'=>'Áo Hoodie HX077 (Trắng - S)',
            'size'=>'S',
            'color'=>'Trắng',
            'quantity'=>9,
            'id_product'=>7,
            'price'=>380000,
            'image'=>'/ckfinder/userfiles/images/%C3%81o%20Hoodie/%C3%81o%20Hoodie%20HX077/HX077-A-800x800.jpg'
        ] );



        Productmodel::create( [
            'id'=>14,
            'name'=>'Áo Hoodie HX078 (Đen - S)',
            'size'=>'S',
            'color'=>'Đen',
            'quantity'=>18,
            'id_product'=>8,
            'price'=>350000,
            'image'=>'/ckfinder/userfiles/images/%C3%81o%20Hoodie/%C3%81o%20Hoodie%20HX078/HX078-800x800.jpg'
        ] );



        Productmodel::create( [
            'id'=>15,
            'name'=>'Áo Hoodie HX078 (Trắng - S)',
            'size'=>'S',
            'color'=>'Trắng',
            'quantity'=>18,
            'id_product'=>8,
            'price'=>350000,
            'image'=>'/ckfinder/userfiles/images/%C3%81o%20Hoodie/%C3%81o%20Hoodie%20HX078/HX078-A-800x800.jpg'
        ] );



        Productmodel::create( [
            'id'=>16,
            'name'=>'Áo Hoodie HX086 (Đen - S)',
            'size'=>'S',
            'color'=>'Đen',
            'quantity'=>10,
            'id_product'=>9,
            'price'=>350000,
            'image'=>'/ckfinder/userfiles/images/%C3%81o%20Hoodie/%C3%81o%20Hoodie%20HX086/HX086-800x800.jpg'
        ] );



        Productmodel::create( [
            'id'=>17,
            'name'=>'Áo Hoodie HX086 (Trắng - S)',
            'size'=>'S',
            'color'=>'Trắng',
            'quantity'=>10,
            'id_product'=>9,
            'price'=>350000,
            'image'=>'/ckfinder/userfiles/images/%C3%81o%20Hoodie/%C3%81o%20Hoodie%20HX086/HX086-A-800x800.jpg'
        ] );



        Productmodel::create( [
            'id'=>18,
            'name'=>'Áo Hoodie HX129 (Trắng - S)',
            'size'=>'S',
            'color'=>'Trắng',
            'quantity'=>9,
            'id_product'=>10,
            'price'=>300000,
            'image'=>'/ckfinder/userfiles/images/%C3%81o%20Hoodie/%C3%81o%20Hoodie%20HX129/HX129T.jpg'
        ] );



        Productmodel::create( [
            'id'=>19,
            'name'=>'Áo Hoodie HX129 (Đen - S)',
            'size'=>'S',
            'color'=>'Đen',
            'quantity'=>9,
            'id_product'=>10,
            'price'=>300000,
            'image'=>'/ckfinder/userfiles/images/%C3%81o%20Hoodie/%C3%81o%20Hoodie%20HX129/HX129D.jpg'
        ] );



        Productmodel::create( [
            'id'=>22,
            'name'=>'Áo Hoodie Trơn (Trắng - S)',
            'size'=>'S',
            'color'=>'Trắng',
            'quantity'=>5,
            'id_product'=>24,
            'price'=>3000000,
            'image'=>'/ckfinder/userfiles/images/%C3%81o%20Hoodie/%C3%81o%20Hoodie%20Tr%C6%A1n/HX044-1.png'
        ] );


        Slider::create( [
            'id'=>1,
            'name'=>'Special Clothing',
            'url'=>'/shop',
            'thumb'=>'/ckfinder/userfiles/images/Slider/slider4.jpg',
            'sort_by'=>1,
            'active'=>1
        ] );

        Slider::create( [
            'id'=>2,
            'name'=>'Simplify Everything',
            'url'=>'/shop',
            'thumb'=>'/ckfinder/userfiles/images/Slider/slider5.jpg',
            'sort_by'=>2,
            'active'=>1
        ] );

        Slider::create( [
            'id'=>3,
            'name'=>'Hello Summer',
            'url'=>'/shop',
            'thumb'=>'/ckfinder/userfiles/images/Slider/slider6.jpg',
            'sort_by'=>3,
            'active'=>1
        ] );

        Supplier::create( [
            'id'=>1,
            'id_products'=>NULL,
            'name'=>'Xưởng Bắc Thái',
            'description'=>'Hà Nam'
        ] );



        Supplier::create( [
            'id'=>2,
            'id_products'=>NULL,
            'name'=>'Xưởng Thái Hà',
            'description'=>'Hà Nội'
        ] );


    }
}
