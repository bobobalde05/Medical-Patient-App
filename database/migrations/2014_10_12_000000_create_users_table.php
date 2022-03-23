<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateUsersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('users', function (Blueprint $table) {
            $table->id();
            $table->foreignId("doctor_id")->nullable(true);
            $table->foreignId('patient_id')->nullable(true);
            $table->string('name');
            $table->string('email')->unique();
            $table->timestamp('email_verified_at')->nullable();
            $table->string('password');
            $table->rememberToken();
            $table->timestamps();
        });

        $this->seedDefaultUser();
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('users');
    }

    private function  seedDefaultUser() {
        try {
            \Illuminate\Support\Facades\DB::beginTransaction();

            \App\Models\User::query()->firstOrCreate([
                "name" => "Admin One",
                "email" => "admin@gmail.com",
                "password" => bcrypt("password")
            ]);

            \App\Models\User::query()->firstOrCreate([
                "name" => "Doctor One",
                "email" => "doctor1@gmail.com",
                "password" => bcrypt("password")
            ]);

            \Illuminate\Support\Facades\DB::commit();
        } catch (Exception $ex) {
            \Illuminate\Support\Facades\DB::rollBack();
        }

    }
}
