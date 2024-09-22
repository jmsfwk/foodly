<?php

use Tempest\Database\Connections\SQLiteConnection;
use Tempest\Database\DatabaseConfig;

return new DatabaseConfig(
    connection: new SQLiteConnection(
        path: env('DB_DATABASE')
    ),
);
