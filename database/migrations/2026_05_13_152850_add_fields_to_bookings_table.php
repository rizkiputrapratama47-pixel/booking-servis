<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
   public function up(): void
{
    Schema::table('bookings', function ($table) {
        $table->string('customer_name')->after('user_id');
        $table->string('phone')->after('customer_name');
        $table->string('laptop_brand')->after('phone');
    });
}

public function down(): void
{
    Schema::table('bookings', function ($table) {
        $table->dropColumn([
            'customer_name',
            'phone',
            'laptop_brand'
        ]);
    });
}
};
