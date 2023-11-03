<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::create('products', function (Blueprint $table) {
            $table->id();
            $table->string('name');
            $table->text('description');
            $table->decimal('price', 8, 2);
            $table->unsignedBigInteger('category_id');
            $table->foreign('category_id')->references('id')->on('categories')->onDelete('cascade');
            $table->timestamps();
// $table->id(); // Khóa chính tự động tăng (ID)
// $table->string('name'); // Tên (kiểu dữ liệu chuỗi)
// $table->text('description'); // Mô tả (kiểu dữ liệu văn bản)
// $table->decimal('price', 8, 2); // Giá (kiểu dữ liệu số thập phân, tổng cộng 8 chữ số, trong đó 2 chữ số thập phân)
// $table->unsignedBigInteger('category_id'); // Khóa ngoại không dấu (ID) tham chiếu đến bảng "categories"
// $table->foreign('category_id')->references('id')->on('categories')->onDelete('cascade'); // Ràng buộc khóa ngoại: khi xóa bản ghi trong bảng "categories", xóa các bản ghi tương ứng trong bảng "products"
// $table->timestamps(); // Thêm cột "created_at" và "updated_at" (thời gian tạo và cập nhật bản ghi)
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('products');
    }
};
