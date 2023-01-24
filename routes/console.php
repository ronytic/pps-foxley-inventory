<?php
use Illuminate\Support\Facades\Schema;
Artisan::command('pps-foxley-inventory:install', function () {
    if (!Schema::hasTable('sample_skeleton')) {
        Schema::create('sample_skeleton', function (Illuminate\Database\Schema\Blueprint $table) {
            $table->increments('id');
            $table->string('name');
            $table->enum('status', ['ENABLED', 'DISABLED'])->default('ENABLED');
            $table->timestamps();
        });
    }
    Artisan::call('vendor:publish', [
        '--tag' => 'pps-foxley-inventory',
        '--force' => true
    ]);

    $this->info('Pps Foxley Inventory has been installed');
})->describe('Installs the required js files and table in DB');


