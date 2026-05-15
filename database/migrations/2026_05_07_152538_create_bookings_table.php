<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{public function up(): void
{
    Schema::create('bookings', function (Blueprint $table) {
        $table->id();
        $table->foreignId('user_id')->constrained()->onDelete('cascade');
        $table->date('booking_date');
        $table->time('booking_time');
        $table->text('complaint');
        $table->string('photo')->nullable();
        $table->enum('status', [
            'pending',
            'approved',
            'in_progress',
            'completed',
            'cancelled'
        ])->default('pending');
        $table->timestamps();
    });
}
};
