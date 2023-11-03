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
        Schema::create('orders', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('user_id');
            $table->decimal('total_price', 10, 2);
            $table->enum('status', ['pending', 'completed', 'cancelled'])->default('pending');
            $table->foreign('user_id')->references('id')->on('users')->onDelete('cascade');
            $table->timestamps();
        });
// id(); // Khóa chính tự động tăng (ID)
// unsignedBigInteger('user_id'); // Khóa ngoại không dấu (ID) tham chiếu đến bảng "users"
// decimal('total_price', 10, 2); // Tổng giá trị đơn hàng (kiểu dữ liệu số thập phân, tổng cộng 10 chữ số, trong đó 2 chữ số thập phân)
// enum('status', ['pending', 'completed', 'cancelled'])->default('pending'); // Trạng thái đơn hàng (lựa chọn từ danh sách 'pending', 'completed', 'cancelled', mặc định là 'pending')
// foreign('user_id')->references('id')->on('users')->onDelete('cascade'); // Ràng buộc khóa ngoại: khi xóa bản ghi trong bảng "users", xóa các bản ghi tương ứng trong bảng "orders"
// timestamps(); // Thêm cột "created_at" và "updated_at" (thời gian tạo và cập nhật bản ghi)
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('orders');
    }
};
