<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class UpdateOauthTokensTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('oauth_tokens', function (Blueprint $table) {
            $table->bigInteger('user_id');
            $table->text('access_token');
            $table->bigInteger('expires_in');
            $table->text('refresh_token');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('oauth_tokens', function (Blueprint $table) {
            $table->dropColumn('user_id');
            $table->dropColumn('access_token');
            $table->dropColumn('expires_in');
            $table->dropColumn('refresh_token');
        });
    }
}
