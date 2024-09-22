<?php

use App\Models\Product;
use App\Models\Tag;
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
        Schema::create('product_tags', function (Blueprint $table) {
            $table->id();
            $table->foreignIdFor(Product::class)->constrained(); // dùng để kết nối giữa bảng SP vs SP_tag
            $table->foreignIdFor(Tag::class)->constrained(); // dùng để kết nối giữa bảng SP_tag vs tag SP
            $table->unsignedBigInteger('product_id'); // id của sản phẩm
            $table->unsignedBigInteger('tag_id'); // id của tag sản phẩm
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('product_tags');
    }
};
