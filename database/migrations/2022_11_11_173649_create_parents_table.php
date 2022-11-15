<?php
use App\Models\Parents;

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateParentsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('parents', function (Blueprint $table) {
            $table->id();
            $table->timestamps();
            $table->string('ParentID');
            $table->string('Gender');
            $table->string('FirstName');
            $table->string('MiddleName');
            $table->string('LastName');
            $table->string('Contact');
            $table->string('StudentRegistration');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('parents');
    }
}
