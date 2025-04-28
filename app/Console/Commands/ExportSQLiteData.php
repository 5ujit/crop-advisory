<?php

namespace App\Console\Commands;

use Illuminate\Console\Command;
use Illuminate\Support\Facades\DB;

class ExportSQLiteData extends Command
{
    protected $signature = 'export:sqlite-data';

    protected $description = 'Export data from SQLite and insert into MySQL';

    public function handle()
{
    // Step 1: Read from SQLite
    config(['database.default' => 'sqlite']);

    $sqliteData = [
        'users' => DB::table('users')->get(),
        'crops' => DB::table('crops')->get(),
        'pest_alerts' => DB::table('pest_alerts')->get(),
        'crop_suggestions' => DB::table('crop_suggestions')->get(),
    ];

    // Step 2: Switch to MySQL and set correct DB config
    config([
        'database.default' => 'mysql',
        'database.connections.mysql.host' => env('DB_HOST', '127.0.0.1'),
        'database.connections.mysql.port' => env('DB_PORT', '3306'),
        'database.connections.mysql.database' => env('MYSQL_DB_NAME', 'crop_advisory'),
        'database.connections.mysql.username' => env('MYSQL_DB_USER', 'root'),
        'database.connections.mysql.password' => env('MYSQL_DB_PASS', ''),
    ]);

    // Step 3: Insert into MySQL
    foreach ($sqliteData as $table => $rows) {
        foreach ($rows as $row) {
            $rowArray = (array) $row;
            DB::table($table)->insert($rowArray);
        }
    }

    $this->info('✅ Data copied from SQLite to MySQL successfully!');
}

}
