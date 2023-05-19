<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('mst_meetings', function (Blueprint $table) {
            $table->id();
            $table->string('code');
            $table->foreignId('meeting_category_id')->nullable()->constrained('mst_meeting_categories')->onUpdate('cascade')->onDelete('cascade');
            $table->date('proposed_date_ad');
            $table->date('proposed_date_bs');
            $table->foreignId('meeting_status_id')->nullable()->constrained('mst_meeting_statuses')->onUpdate('cascade')->onDelete('cascade');
            $table->string('status_reason');
            $table->date('date_ad');
            $table->date('date_bs');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('mst_meetings');
    }
};
