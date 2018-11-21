 <?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateTaskTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        //creating table tasks in to_do_list database
        Schema::create('tasks', function (Blueprint $table) {
            $table->increments('id')->unique();
            $table->string('note');
            $table->timestamps();
            $table->rememberToken();

        });

    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        //
         Schema::dropIfExists('tasks');
    }
}
