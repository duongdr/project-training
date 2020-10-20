<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class PostSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
//        factory(\App\Models\Post::class, 30)->create();
        DB::table('posts')->insert([
            [
                'title' => 'Kinh doanh ẩm thực ồ ạt trả mặt bằng',
                'description' => 'Quý III, làn sóng thu hẹp diện tích hoặc trả mặt bằng để cắt giảm chi phí của các đơn vị kinh doanh F&B (ẩm thực) vẫn tiếp diễn',
                'content' => 'Bà Võ Thị Khánh Trang, Trưởng bộ phận Nghiên cứu thị trường Savills Việt Nam cho biết, hiện các khách thuê mới khá thận trọng, hạn chế mở cửa hàng trong khi khách thuê cũ thu hẹp diện tích thuê hiện hữu. Bà Trang nhận định tình trạng này sẽ tiếp tục diễn ra trong một thời gian nữa.
Việc cắt giảm diện tích thuê thậm chí trả mặt bằng là một trong những giải pháp được nhiều khách thuê áp dụng trong giai đoạn nhạy cảm này để vượt qua khó khăn do tác động của dịch bệnh. Tuy nhiên, bà Trang cho rằng thị trường có thể được cải thiện dần khi càng về cuối năm, đặc biệt trong các dịp lễ Tết sắp tới.
Trong khi đó, báo cáo diễn biến thị trường mặt bằng bán lẻ của CBRE Việt Nam cũng xác nhận, suốt quý III, tỷ lệ mặt bằng bị bỏ trống trung bình tại TP HCM vẫn cao hơn năm trước do các thương hiệu thời trang và đặc biệt là thương hiệu ngành ăn uống trả lại mặt bằng. Trường hợp thu hẹp và trả mặt bằng ở ngành ẩm thực chủ yếu rơi vào những thương hiệu trong nước.',
                'user_id' => 1
            ],
            [
                'title' => 'Cầu 2.250 tỷ đồng bắc qua sông Trà Khúc hoàn thành',
                'description' => 'Cầu và đường Cổ Lũy dài 3,7 km, riêng cầu dài hơn 1,8 km, bắc qua sông Trà Khúc, tổng vốn đầu tư 2.250 tỷ đồng, thông xe sáng 20/10.',
                'content' => 'Tại lễ thông xe, ông Nguyễn Tăng Bính, Phó chủ tịch thường trực UBND tỉnh Quảng Ngãi cho biết, cầu Cổ Lũy nằm trong quy hoạch tuyến đường Dung Quất - Sa Huỳnh, nối phía Đông tỉnh Quảng Ngãi với Quảng Nam và Bình Định. Cầu tạo điều kiện phát triển hạ tầng, du lịch, mở rộng không gian đô thị Quảng Ngãi hướng về biển, thúc đẩy kinh tế, xã hội của tỉnh.
Hơn 10 năm trước, lãnh đạo tỉnh Quảng Ngãi có ý tưởng xây dựng, phát triển thành phố Quảng Ngãi ở hai bên sông Trà Khúc, được kết nối bởi những cây cầu. Sau đó, Chính phủ đồng ý cho Quảng Ngãi mở rộng thành phố lên gấp bốn lần, sáp nhập các xã ở bờ Bắc sông Trà Khúc vào thành phố.',
                'user_id' => 1
            ],
            [
                'title' => 'Bội chi ngân sách năm nay có thể tới 5,59%',
                'description' => 'Hụt thu do đại dịch có thể khiến tỷ lệ chi ngân sách vượt thu năm nay lên tới 5,59%, cao hơn 2,15% so với mục tiêu đầu năm.',
                'content' => 'Ước thu ngân sách cả năm khoảng 1,32 triệu tỷ đồng, hụt 189.200 tỷ đồng (giảm 12,5%) so với dự toán. Con số này cũng giảm 14% so với năm 2019 và là mức thấp nhất trong 10 năm gần đây. Trong đó, thu tại nhiều địa phương đạt thấp, như Hà Nội chỉ đạt 58,8%, TP HCM đạt 58,1%, Hải Phòng đạt 55,1%, Khánh Hòa 51,8%...
Ước chi ngân sách năm nay khoảng 1,68 triệu tỷ đồng, giảm 60.890 tỷ đồng (giảm 3,5%) so với dự toán. Tuy nhiên, chi thường xuyên khoảng 1,07 triệu tỷ đồng, tăng 12.000 tỷ đồng (1,1%), chủ yếu do sử dụng dự phòng để chi cho công tác phòng chống dịch, khắc phục hậu quả thiên tai và thực hiện các chính sách an sinh xã hội đã ban hành.
Đánh giá về mức bội chi ngân sách, Chủ nhiệm Ủy ban Tài chính Ngân sách Nguyễn Đức Hải cho rằng, kết quả bội chi tăng cao là hợp lý. Nguyên do là ảnh hưởng của Covid-19 khiến các nguồn thu ngân sách giảm mạnh, nhưng nhiệm vụ chi vẫn cần được bảo đảm, dẫn đến việc cân đối không đạt được dự toán Quốc hội giao.',
                'user_id' => 1
            ]
        ]);
    }
}
