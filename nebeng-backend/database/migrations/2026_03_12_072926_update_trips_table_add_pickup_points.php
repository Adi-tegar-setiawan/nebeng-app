<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up(): void
    {
        Schema::table('trips', function (Blueprint $table) {

            $table->foreignId('origin_point_id')
                ->nullable()
                ->after('destination');

            $table->foreignId('destination_point_id')
                ->nullable()
                ->after('origin_point_id');

            $table->foreign('origin_point_id')
                ->references('id')
                ->on('pickup_points')
                ->nullOnDelete();

            $table->foreign('destination_point_id')
                ->references('id')
                ->on('pickup_points')
                ->nullOnDelete();
        });
    }

    public function down(): void
    {
        Schema::table('trips', function (Blueprint $table) {

            $table->dropForeign(['origin_point_id']);
            $table->dropForeign(['destination_point_id']);

            $table->dropColumn([
                'origin_point_id',
                'destination_point_id'
            ]);
        });
    }
};