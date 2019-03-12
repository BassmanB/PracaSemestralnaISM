<?php defined('BASEPATH') OR exit('No direct script access allowed'); ?>

ERROR - 2019-01-08 09:28:34 --> Query error: [Microsoft][ODBC Driver 11 for SQL Server][SQL Server]Ambiguous column name 'id'. - Invalid query: SELECT "name", "date", "id_product", "order_ammount", "id_address", "id_address_f", "id"
FROM "dbo"."orders"
JOIN "dbo"."users" ON "dbo"."users"."id" = "dbo"."orders"."id_user"
ORDER BY "date" DESC
ERROR - 2019-01-08 13:24:32 --> Severity: Notice --> Undefined variable: db D:\xampp\htdocs\4hifi\application\models\User_model.php 83
ERROR - 2019-01-08 13:25:55 --> Severity: Notice --> Undefined variable: db D:\xampp\htdocs\4hifi\application\models\User_model.php 83
ERROR - 2019-01-08 13:29:10 --> Severity: Notice --> Undefined variable: db D:\xampp\htdocs\4hifi\application\models\User_model.php 83
ERROR - 2019-01-08 13:34:18 --> Severity: Notice --> Undefined variable: db D:\xampp\htdocs\4hifi\application\models\User_model.php 83
ERROR - 2019-01-08 13:55:41 --> Severity: Notice --> Undefined variable: db D:\xampp\htdocs\4hifi\application\models\User_model.php 83
