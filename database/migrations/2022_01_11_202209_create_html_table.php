<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateHtmlTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        if (!Schema::hasTable('html')) {
            Schema::create('html', function (Blueprint $table) {
                $table->id();
                $table->string('title', 150);
                $table->string('author', 50);
                $table->string('h2', 100);
                $table->longText('content');
                $table->string('img', 70)->nullable();
                $table->string('description', 250);
                $table->string('keywords', 100);
                $table->timestamp('created_at')->useCurrent()->useCurrentOnUpdate();
                $table->timestamp('updated_at')->useCurrent()->useCurrentOnUpdate();
            });
        }
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('html');
    }
}
