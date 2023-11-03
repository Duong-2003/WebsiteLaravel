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
        Schema::create('order_items', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('order_id');
            $table->unsignedBigInteger('product_id');
            $table->integer('quantity');
            $table->decimal('price', 8, 2);
            $table->foreign('order_id')->references('id')->on('orders')->onDelete('cascade');
            $table->foreign('product_id')->references('id')->on('products')->onDelete('cascade');
            $table->timestamps();
        });
// $table->id(); // Khóa chính tự động tăng (ID)
// $table->unsignedBigInteger('order_id'); // Khóa ngoại không dấu (ID) tham chiếu đến bảng "orders"
// $table->unsignedBigInteger('product_id'); // Khóa ngoại không dấu (ID) tham chiếu đến bảng "products"
// $table->integer('quantity'); // Số lượng sản phẩm trong đơn hàng (kiểu dữ liệu số nguyên)
// $table->decimal('price', 8, 2); // Giá sản phẩm (kiểu dữ liệu số thập phân, tổng cộng 8 chữ số, trong đó 2 chữ số thập phân)
// $table->foreign('order_id')->references('id')->on('orders')->onDelete('cascade'); // Ràng buộc khóa ngoại: khi xóa bản ghi trong bảng "orders", xóa các bản ghi tương ứng trong bảng "order_items"
// $table->foreign('product_id')->references('id')->on('products')->onDelete('cascade'); // Ràng buộc khóa ngoại: khi xóa bản ghi trong bảng "products", xóa các bản ghi tương ứng trong bảng "order_items"
// $table->timestamps(); // Thêm cột "created_at" và "updated_at" (thời gian tạo và cập nhật bản ghi)
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('order_items');
    }
};
