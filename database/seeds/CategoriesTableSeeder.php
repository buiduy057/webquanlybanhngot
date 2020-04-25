<?php

use Illuminate\Database\Seeder;

class CategoriesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        
        $faker = Faker\Factory::create();
        DB::table('categories')->insert([
           'name'=> 'Bánh mặn', 
            'slug'=> 'banh-man',  
            'content' => 'Nếu từng bị mê hoặc bởi các loại tarlet ngọt thì chắn chắn bạn không thể bỏ qua những loại tarlet mặn. Ngoài hình dáng bắt mắt, lớp vở bánh giòn giòn cùng với nhân mặn như thịt gà, nấm, thị heo ,… của bánh sẽ chinh phục bất cứ ai dùng thử.',
            'image'=>'banh-man-1.jpg',
            'created_at' => date("Y-m-d"),
            'updated_at' => date("Y-m-d"),
        ]);
         DB::table('categories')->insert([
           'name'=> 'Bánh ngọt', 
            'slug'=> 'banh-ngot',  
            'content' => 'Bánh ngọt là một loại thức ăn thường dưới hình thức món bánh dạng bánh mì từ bột nhào, được nướng lên dùng để tráng miệng. Bánh ngọt có nhiều loại, có thể phân loại dựa theo nguyên liệu và kỹ thuật chế biến như bánh ngọt làm từ lúa mì, bơ, bánh ngọt dạng bọt biển. Bánh ngọt có thể phục vụ những mục đính đặc biệt như bánh cưới, bánh sinh nhật, bánh Giáng sinh, bánh Halloween..',
            'image'=>'banh-ngot-1.jpg',
            'created_at' => date("Y-m-d"),
            'updated_at' => date("Y-m-d"),
        ]);
         DB::table('categories')->insert([
           'name'=> 'Bánh trái cây', 
            'slug'=> 'banh-trai-cay',  
            'content' => 'Bánh trái cây, hay còn gọi là bánh hoa quả, là một món ăn chơi, không riêng gì của Huế nhưng khi "lạc" vào mảnh đất Cố đô, món bánh này dường như cũng mang chút tinh tế, cầu kỳ và đặc biệt. Lấy cảm hứng từ những loại trái cây trong vườn, qua bàn tay khéo léo của người phụ nữ Huế, món bánh trái cây ra đời - ngọt thơm, dịu nhẹ làm đẹp lòng biết bao người thưởng thức.',
            'image'=>'banh-trai-cay-1.png',
            'created_at' => date("Y-m-d"),
            'updated_at' => date("Y-m-d"),
        ]);
         DB::table('categories')->insert([
           'name'=> 'Bánh kem', 
            'slug'=> 'banh-kem',  
            'content' => 'Với người Việt Nam thì bánh ngọt nói chung đều hay được quy về bánh bông lan – một loại tráng miệng bông xốp, ăn không hoặc được phủ kem lên thành bánh kem. Tuy nhiên, cốt bánh kem thực ra có rất nhiều loại với hương vị, kết cấu và phương thức làm khác nhau chứ không chỉ đơn giản là “bánh bông lan” chung chung đâu nhé.',
            'image'=>'banh-kem-1.jpg',
            'created_at' => date("Y-m-d"),
            'updated_at' => date("Y-m-d"),
        ]);
         DB::table('categories')->insert([
           'name'=> 'Bánh crepe', 
            'slug'=> 'banh-crepe',  
            'content' => 'Crepe là một món bánh nổi tiếng của Pháp, nhưng từ khi du nhập vào Việt Nam món bánh đẹp mắt, ngon miệng này đã làm cho biết bao bạn trẻ phải “xiêu lòng”.',
            'image'=>'banh-crepe-1.jpg',
            'created_at' => date("Y-m-d"),
            'updated_at' => date("Y-m-d"),
        ]);
         DB::table('categories')->insert([
           'name'=> 'Bánh Pizza', 
            'slug'=> 'banh-pizza',  
            'content' => 'Pizza đã không chỉ còn là một món ăn được ưa chuộng khắp thế giới mà còn được những nhà cầm quyền EU chứng nhận là một phần di sản văn hóa ẩm thực châu Âu. Và để được chứng nhận là một nhà sản xuất pizza không hề đơn giản. Người ta phải qua đủ mọi các bước xét duyệt của chính phủ Ý và liên minh châu Âu nữa… tất cả là để đảm bảo danh tiếng cho món ăn này.',
            'image'=>'pizza.jpg',
            'created_at' => date("Y-m-d"),
            'updated_at' => date("Y-m-d"),
        ]);
         DB::table('categories')->insert([
           'name'=> 'Bánh su kem', 
           'slug'=> 'banh-su-kem',  
            'content' => 'Bánh su kem là món bánh ngọt ở dạng kem được làm từ các nguyên liệu như bột mì, trứng, sữa, bơ.... đánh đều tạo thành một hỗn hợp và sau đó bằng thao tác ép và phun qua một cái túi để định hình thành những bánh nhỏ và cuối cùng được nướng chín. Bánh su kem có thể thêm thành phần Sô cô la để tăng vị hấp dẫn. Bánh có xuất xứ từ nước Pháp.',
            'image'=>'banh-su-kem-1.jpg',
            'created_at' => date("Y-m-d"),
            'updated_at' => date("Y-m-d"),
        ]);
    }
}
