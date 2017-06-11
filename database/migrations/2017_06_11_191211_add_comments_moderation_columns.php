<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class AddCommentsModerationColumns extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('comments', function (Blueprint $table) {
            $table->smallInteger('status')->default(0);
            $table->dateTime('moderated_at')->nullable();
            //If you want to track who moderated the Model add 'moderated_by' too.
            //$table->integer('moderated_by')->nullable()->unsigned();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('comments', function(Blueprint $table)
        {
            $table->dropColumn('status');
            $table->dropColumn('moderated_at');
            //$table->dropColumn('moderated_by');
        });
    }
}
