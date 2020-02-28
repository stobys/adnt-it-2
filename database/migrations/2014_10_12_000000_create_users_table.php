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
            $table -> bigIncrements('id');

            $table -> string('username') -> unique();
            $table -> string('email');

            $table -> string('family_name') -> description('nazwisko') -> nullable();
            $table -> string('given_name') -> description('imie lub imiona') -> nullable();

            $table -> unsignedInteger('logins') -> description('successful logins count') -> default(0) -> index();
            $table -> unsignedInteger('is_non_human') -> default(0) -> index();

            $table -> string('password') -> nullable();

            $table -> rememberToken();

            $table -> char('last_login_ip', 15) -> nullable();
            $table -> dateTime('last_login_at') -> nullable();
            $table -> dateTime('email_verified_at') -> nullable();
            $table -> dateTime('password_changed_at') -> nullable();
            $table -> dateTime('created_at') -> nullable();
            $table -> dateTime('updated_at') -> nullable() -> useCurrent();
            $table -> dateTime('deleted_at') -> nullable();
        });
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
}
