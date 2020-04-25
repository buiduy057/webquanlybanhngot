<?php

use Illuminate\Database\Seeder;

class NewsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $faker = Faker\Factory::create();
        DB::table('news')->insert([
            'title' => 'Nguồn gốc và ý nghĩa của bánh kem',
            'content' => 'Ngày nay bánh kem trở thành quá quen thuộc đối với những bữa tiệc sinh nhật, tiệc cưới, đám hỏi,... Vì việc quá quen thuộc nên nhiều người không chú ý đến nguồn gốc ra..', 
            'image'=>'banh-kem-2.jpg', 
            'status'=>rand(0,1),         
            'created_at' => date("Y-m-d"),
            'updated_at' => date("Y-m-d")
        ]);
     DB::table('news')->insert([
           'title' => 'Những chiếc bánh sinh nhật độc đáo',
           'content' => 'Đối với nhiều người thì bánh sinh nhật không nhất thiết phải to và cầu kỳ quan trọng là nó phải độc đáo lạ mắt và nó có thể tạo được ấn tượng cũng như người..',           
           'image'=>'banh-kem-4.jpg',   
           'status'=>rand(0,1),    
            'created_at' => date("Y-m-d"),
            'updated_at' => date("Y-m-d")
        ]);
     DB::table('news')->insert([
           'title' => 'ƯU ĐÃI NHÂN DỊP KHAI TRƯƠNG FRESH GARDEN MỄ TRÌ',
           'content' => 'Tưng bừng khai trương 𝐅𝐫𝐞𝐬𝐡 𝐆𝐚𝐫𝐝𝐞𝐧 𝐆𝐫𝐞𝐞𝐧 𝐁𝐚𝐲 Mễ Trì bùng nổ chương trình ưu đãi độc quyền từ ngày 12/9: 
             Giảm 20% tất cả các loại bánh mì',           
            'image'=>'banh-man-8.jpg',  
            'status'=>rand(0,1),   
            'created_at' => date("Y-m-d"),
            'updated_at' => date("Y-m-d")
        ]);
      DB::table('news')->insert([
           'title' => 'LỰA CHỌN BÁNH SINH NHẬT THEO CUNG HOÀNG ĐẠO',
           'content' => 'Bánh sinh nhật làm quà tặng cho mọi người luôn là điều khiến cho chúng ta đau đầu nhất vì bánh không những ngon, đẹp mà còn phải phù hợp với người được tặng. Nếu bạn..',           
            'image'=>'banh-trai-cay-1.png', 
            'status'=>rand(0,1),    
            'created_at' => date("Y-m-d"),
            'updated_at' => date("Y-m-d")
        ]);
     
    }
}
