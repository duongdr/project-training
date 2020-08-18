<?php

use Illuminate\Database\Seeder;

class PostSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('posts')->insert([
           [
               'user_id' => '2',
               'title' => 'Mu bị loại khỏi C2',
               'content' => '“Chúng tôi đã có một vài khoảnh khắc thăng hoa trong hiệp 2 mà lẽ ra đội phải ghi được một vài bàn thắng. Thật đáng thất vọng khi đội không thể ghi bàn, bởi MU có những cầu thủ chất lượng”, huấn luyện viên MU Ole Gunnar Solskjaer cho biết trên BT Sport.
Tiền vệ Bruno Fernades nói thêm: “Chúng tôi đã có khởi đầu thuận lợi, tạo ra rất nhiều cơ hội ghi bàn, nhưng đều đã bỏ lỡ. Thủ môn của Sevilla đã chơi tốt nhưng với chất lượng cầu thủ của MU, lý ra đội phải ghi bàn”.'
           ],
            [
                'user_id' => '2',
                'title' => 'Barce bị loại khỏi C2',
                'content' => 'Thua rồi. Còn thua những 2-8. Thua hơi nhiều.'
            ],

        ]);
    }
}
