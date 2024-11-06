<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateCommentsTable extends Migration
{
    public function up()
    {
        Schema::create('comments', function (Blueprint $table) {
            $table->id();
            $table->foreignId('post_id')->constrained()->onDelete('cascade'); // This line creates the post_id column
            $table->text('content');
            $table->timestamps();
			$table->foreignId('user_id')->constrained()->onDelete('cascade'); // This line creates the user_id column
        });
    }

    public function down()
    {
        Schema::dropIfExists('comments');
    }
}
