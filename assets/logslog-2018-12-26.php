<?php defined('BASEPATH') OR exit('No direct script access allowed'); ?>

ERROR - 2018-12-26 11:52:48 --> Severity: Notice --> Undefined variable: db2 D:\xampp\htdocs\4hifi2\application\models\User_model.php 16
ERROR - 2018-12-26 11:53:50 --> Severity: Notice --> Undefined property: Welcome::$db2 D:\xampp\htdocs\4hifi2\system\core\Model.php 73
ERROR - 2018-12-26 12:03:36 --> Severity: Notice --> Undefined variable: passwords D:\xampp\htdocs\4hifi2\application\models\User_model.php 28
ERROR - 2018-12-26 12:03:36 --> Query error: [Microsoft][ODBC Driver 11 for SQL Server][SQL Server]Invalid column name 'email'. - Invalid query: INSERT INTO "dbo"."users" ("id", "name", "email", "password") VALUES (3, 'Janek', 'test3@hifi.pl', NULL)
ERROR - 2018-12-26 12:04:06 --> Query error: [Microsoft][ODBC Driver 11 for SQL Server][SQL Server]Invalid column name 'email'. - Invalid query: INSERT INTO "dbo"."users" ("id", "name", "email", "password") VALUES (3, 'Janek', 'test3@hifi.pl', '098f6bcd4621d373cade4e832627b4f6')
ERROR - 2018-12-26 12:04:43 --> Query error: [Microsoft][ODBC Driver 11 for SQL Server][SQL Server]Invalid column name 'name'. - Invalid query: SELECT "name"
ERROR - 2018-12-26 12:05:50 --> Severity: Notice --> Undefined index: username D:\xampp\htdocs\4hifi2\application\controllers\Welcome.php 60
ERROR - 2018-12-26 12:15:18 --> Severity: Notice --> Undefined index: username D:\xampp\htdocs\4hifi2\application\controllers\Welcome.php 60
ERROR - 2018-12-26 12:17:24 --> Severity: Notice --> Undefined variable: lampyElektronowe D:\xampp\htdocs\4hifi2\application\views\templates\sidebar.php 17
ERROR - 2018-12-26 12:17:24 --> Severity: Warning --> Invalid argument supplied for foreach() D:\xampp\htdocs\4hifi2\application\views\templates\sidebar.php 17
ERROR - 2018-12-26 12:17:25 --> Severity: Notice --> Undefined variable: lampyElektronowe D:\xampp\htdocs\4hifi2\application\views\templates\sidebar.php 17
ERROR - 2018-12-26 12:17:25 --> Severity: Warning --> Invalid argument supplied for foreach() D:\xampp\htdocs\4hifi2\application\views\templates\sidebar.php 17
ERROR - 2018-12-26 12:18:20 --> Severity: Notice --> Undefined offset: 0 D:\xampp\htdocs\4hifi2\application\controllers\Welcome.php 80
ERROR - 2018-12-26 12:18:20 --> Query error: [Microsoft][ODBC Driver 11 for SQL Server][SQL Server]Invalid object name 'dbo.orders'. - Invalid query: INSERT INTO "dbo"."orders" ("id_client", "order_ammount", "id_product", "order_date") VALUES (NULL, 423, 10, '2018-12-26 12:18:20')
ERROR - 2018-12-26 12:49:21 --> Severity: Notice --> Undefined index: id D:\xampp\htdocs\4hifi2\application\controllers\Welcome.php 81
ERROR - 2018-12-26 12:49:22 --> Query error: [Microsoft][ODBC Driver 11 for SQL Server][SQL Server]Cannot insert the value NULL into column 'id', table '4HIFI_USERS.dbo.orders'; column does not allow nulls. INSERT fails. - Invalid query: INSERT INTO "dbo"."orders" ("id", "order_ammount", "id_product", "date") VALUES (NULL, 23, 10, '2018-12-26 12:49:22')
ERROR - 2018-12-26 12:49:31 --> Severity: Notice --> Undefined offset: 1 D:\xampp\htdocs\4hifi2\application\controllers\Welcome.php 76
ERROR - 2018-12-26 12:49:31 --> Severity: Notice --> Undefined offset: 2 D:\xampp\htdocs\4hifi2\application\controllers\Welcome.php 77
ERROR - 2018-12-26 12:49:31 --> Severity: Notice --> Undefined offset: 0 D:\xampp\htdocs\4hifi2\application\controllers\Welcome.php 81
ERROR - 2018-12-26 12:49:31 --> Severity: Notice --> Undefined offset: 0 D:\xampp\htdocs\4hifi2\application\models\Products_model.php 62
ERROR - 2018-12-26 12:49:32 --> Query error: [Microsoft][ODBC Driver 11 for SQL Server][SQL Server]Cannot insert the value NULL into column 'id', table '4HIFI_USERS.dbo.orders'; column does not allow nulls. INSERT fails. - Invalid query: INSERT INTO "dbo"."orders" ("id", "order_ammount", "id_product", "date") VALUES (NULL, 0, NULL, '2018-12-26 12:49:31')
ERROR - 2018-12-26 12:52:24 --> Severity: Notice --> Array to string conversion D:\xampp\htdocs\4hifi2\application\controllers\Welcome.php 74
ERROR - 2018-12-26 12:52:24 --> Severity: Notice --> Undefined index: id D:\xampp\htdocs\4hifi2\application\controllers\Welcome.php 80
ERROR - 2018-12-26 12:52:24 --> Query error: [Microsoft][ODBC Driver 11 for SQL Server][SQL Server]Cannot insert the value NULL into column 'id', table '4HIFI_USERS.dbo.orders'; column does not allow nulls. INSERT fails. - Invalid query: INSERT INTO "dbo"."orders" ("id", "order_ammount", "id_product", "date") VALUES (NULL, 321, 10, '2018-12-26 12:52:24')
ERROR - 2018-12-26 12:54:19 --> Query error: [Microsoft][ODBC Driver 11 for SQL Server][SQL Server]Cannot insert the value NULL into column 'id_user', table '4HIFI_USERS.dbo.orders'; column does not allow nulls. INSERT fails. - Invalid query: INSERT INTO "dbo"."orders" ("id", "order_ammount", "id_product", "date") VALUES (2, 123, 10, '2018-12-26 12:54:19')
ERROR - 2018-12-26 13:41:50 --> Severity: Notice --> Undefined variable: lampyElektronowe D:\xampp\htdocs\4hifi2\application\views\templates\sidebar.php 17
ERROR - 2018-12-26 13:41:50 --> Severity: Warning --> Invalid argument supplied for foreach() D:\xampp\htdocs\4hifi2\application\views\templates\sidebar.php 17
ERROR - 2018-12-26 13:41:50 --> Severity: Notice --> Undefined index: Twr_Kod D:\xampp\htdocs\4hifi2\application\views\users\userAccount.php 9
ERROR - 2018-12-26 13:41:50 --> Severity: Notice --> Undefined index: order_ammount D:\xampp\htdocs\4hifi2\application\views\users\userAccount.php 9
ERROR - 2018-12-26 13:41:53 --> Severity: Notice --> Undefined variable: lampyElektronowe D:\xampp\htdocs\4hifi2\application\views\templates\sidebar.php 17
ERROR - 2018-12-26 13:41:53 --> Severity: Warning --> Invalid argument supplied for foreach() D:\xampp\htdocs\4hifi2\application\views\templates\sidebar.php 17
ERROR - 2018-12-26 13:41:53 --> Severity: Notice --> Undefined index: Twr_Kod D:\xampp\htdocs\4hifi2\application\views\users\userAccount.php 9
ERROR - 2018-12-26 13:41:53 --> Severity: Notice --> Undefined index: order_ammount D:\xampp\htdocs\4hifi2\application\views\users\userAccount.php 9
ERROR - 2018-12-26 15:12:24 --> Unable to connect to the database
ERROR - 2018-12-26 15:23:14 --> Severity: Notice --> Undefined variable: lampyElektronowe D:\xampp\htdocs\4hifi2\application\views\templates\sidebar.php 17
ERROR - 2018-12-26 15:23:14 --> Severity: Warning --> Invalid argument supplied for foreach() D:\xampp\htdocs\4hifi2\application\views\templates\sidebar.php 17
ERROR - 2018-12-26 15:23:14 --> Severity: Notice --> Undefined index: Twr_Kod D:\xampp\htdocs\4hifi2\application\views\users\userAccount.php 9
ERROR - 2018-12-26 15:23:14 --> Severity: Notice --> Undefined index: order_ammount D:\xampp\htdocs\4hifi2\application\views\users\userAccount.php 9
ERROR - 2018-12-26 15:23:20 --> Severity: Notice --> Undefined variable: lampyElektronowe D:\xampp\htdocs\4hifi2\application\views\templates\sidebar.php 17
ERROR - 2018-12-26 15:23:20 --> Severity: Warning --> Invalid argument supplied for foreach() D:\xampp\htdocs\4hifi2\application\views\templates\sidebar.php 17
ERROR - 2018-12-26 15:23:20 --> Severity: Notice --> Undefined index: Twr_Kod D:\xampp\htdocs\4hifi2\application\views\users\userAccount.php 9
ERROR - 2018-12-26 15:23:20 --> Severity: Notice --> Undefined index: order_ammount D:\xampp\htdocs\4hifi2\application\views\users\userAccount.php 9
ERROR - 2018-12-26 15:23:21 --> Severity: Notice --> Undefined variable: lampyElektronowe D:\xampp\htdocs\4hifi2\application\views\templates\sidebar.php 17
ERROR - 2018-12-26 15:23:21 --> Severity: Warning --> Invalid argument supplied for foreach() D:\xampp\htdocs\4hifi2\application\views\templates\sidebar.php 17
ERROR - 2018-12-26 15:23:21 --> Severity: Notice --> Undefined index: Twr_Kod D:\xampp\htdocs\4hifi2\application\views\users\userAccount.php 9
ERROR - 2018-12-26 15:23:21 --> Severity: Notice --> Undefined index: order_ammount D:\xampp\htdocs\4hifi2\application\views\users\userAccount.php 9
ERROR - 2018-12-26 15:23:26 --> Severity: Notice --> Undefined variable: lampyElektronowe D:\xampp\htdocs\4hifi2\application\views\templates\sidebar.php 17
ERROR - 2018-12-26 15:23:26 --> Severity: Warning --> Invalid argument supplied for foreach() D:\xampp\htdocs\4hifi2\application\views\templates\sidebar.php 17
ERROR - 2018-12-26 15:23:26 --> Severity: Notice --> Undefined index: Twr_Kod D:\xampp\htdocs\4hifi2\application\views\users\userAccount.php 9
ERROR - 2018-12-26 15:23:26 --> Severity: Notice --> Undefined index: order_ammount D:\xampp\htdocs\4hifi2\application\views\users\userAccount.php 9
ERROR - 2018-12-26 15:23:29 --> Severity: Notice --> Undefined variable: lampyElektronowe D:\xampp\htdocs\4hifi2\application\views\templates\sidebar.php 17
ERROR - 2018-12-26 15:23:29 --> Severity: Warning --> Invalid argument supplied for foreach() D:\xampp\htdocs\4hifi2\application\views\templates\sidebar.php 17
ERROR - 2018-12-26 15:23:29 --> Severity: Notice --> Undefined index: Twr_Kod D:\xampp\htdocs\4hifi2\application\views\users\userAccount.php 9
ERROR - 2018-12-26 15:23:29 --> Severity: Notice --> Undefined index: order_ammount D:\xampp\htdocs\4hifi2\application\views\users\userAccount.php 9
ERROR - 2018-12-26 15:24:45 --> Severity: Notice --> Undefined variable: lampyElektronowe D:\xampp\htdocs\4hifi2\application\views\templates\sidebar.php 17
ERROR - 2018-12-26 15:24:45 --> Severity: Warning --> Invalid argument supplied for foreach() D:\xampp\htdocs\4hifi2\application\views\templates\sidebar.php 17
ERROR - 2018-12-26 15:24:45 --> Severity: Notice --> Undefined index: Twr_Kod D:\xampp\htdocs\4hifi2\application\views\users\userAccount.php 9
ERROR - 2018-12-26 15:24:45 --> Severity: Notice --> Undefined index: order_ammount D:\xampp\htdocs\4hifi2\application\views\users\userAccount.php 9
ERROR - 2018-12-26 15:24:46 --> Severity: Notice --> Undefined variable: lampyElektronowe D:\xampp\htdocs\4hifi2\application\views\templates\sidebar.php 17
ERROR - 2018-12-26 15:24:46 --> Severity: Warning --> Invalid argument supplied for foreach() D:\xampp\htdocs\4hifi2\application\views\templates\sidebar.php 17
ERROR - 2018-12-26 15:24:46 --> Severity: Notice --> Undefined index: Twr_Kod D:\xampp\htdocs\4hifi2\application\views\users\userAccount.php 9
ERROR - 2018-12-26 15:24:46 --> Severity: Notice --> Undefined index: order_ammount D:\xampp\htdocs\4hifi2\application\views\users\userAccount.php 9
ERROR - 2018-12-26 15:35:54 --> Severity: Notice --> Undefined variable: lampyElektronowe D:\xampp\htdocs\4hifi2\application\views\templates\sidebar.php 17
ERROR - 2018-12-26 15:35:54 --> Severity: Warning --> Invalid argument supplied for foreach() D:\xampp\htdocs\4hifi2\application\views\templates\sidebar.php 17
ERROR - 2018-12-26 15:35:54 --> Severity: Notice --> Undefined index: Twr_Kod D:\xampp\htdocs\4hifi2\application\views\users\userAccount.php 9
ERROR - 2018-12-26 15:35:54 --> Severity: Notice --> Undefined index: order_ammount D:\xampp\htdocs\4hifi2\application\views\users\userAccount.php 9
ERROR - 2018-12-26 15:35:55 --> Severity: Notice --> Undefined variable: lampyElektronowe D:\xampp\htdocs\4hifi2\application\views\templates\sidebar.php 17
ERROR - 2018-12-26 15:35:55 --> Severity: Warning --> Invalid argument supplied for foreach() D:\xampp\htdocs\4hifi2\application\views\templates\sidebar.php 17
ERROR - 2018-12-26 15:35:55 --> Severity: Notice --> Undefined index: Twr_Kod D:\xampp\htdocs\4hifi2\application\views\users\userAccount.php 9
ERROR - 2018-12-26 15:35:55 --> Severity: Notice --> Undefined index: order_ammount D:\xampp\htdocs\4hifi2\application\views\users\userAccount.php 9
ERROR - 2018-12-26 15:47:43 --> Severity: Notice --> Undefined variable: lampyElektronowe D:\xampp\htdocs\4hifi2\application\views\templates\sidebar.php 17
ERROR - 2018-12-26 15:47:43 --> Severity: Warning --> Invalid argument supplied for foreach() D:\xampp\htdocs\4hifi2\application\views\templates\sidebar.php 17
ERROR - 2018-12-26 15:47:43 --> Severity: Notice --> Undefined index: Twr_Kod D:\xampp\htdocs\4hifi2\application\views\users\userAccount.php 9
ERROR - 2018-12-26 15:47:43 --> Severity: Notice --> Undefined index: order_ammount D:\xampp\htdocs\4hifi2\application\views\users\userAccount.php 9
ERROR - 2018-12-26 15:47:56 --> Severity: Notice --> Undefined variable: lampyElektronowe D:\xampp\htdocs\4hifi2\application\views\templates\sidebar.php 17
ERROR - 2018-12-26 15:47:56 --> Severity: Warning --> Invalid argument supplied for foreach() D:\xampp\htdocs\4hifi2\application\views\templates\sidebar.php 17
ERROR - 2018-12-26 15:47:56 --> Severity: Notice --> Undefined index: Twr_Kod D:\xampp\htdocs\4hifi2\application\views\users\userAccount.php 9
ERROR - 2018-12-26 15:47:56 --> Severity: Notice --> Undefined index: order_ammount D:\xampp\htdocs\4hifi2\application\views\users\userAccount.php 9
ERROR - 2018-12-26 15:47:59 --> Severity: Notice --> Undefined variable: lampyElektronowe D:\xampp\htdocs\4hifi2\application\views\templates\sidebar.php 17
ERROR - 2018-12-26 15:47:59 --> Severity: Warning --> Invalid argument supplied for foreach() D:\xampp\htdocs\4hifi2\application\views\templates\sidebar.php 17
ERROR - 2018-12-26 15:47:59 --> Severity: Notice --> Undefined index: Twr_Kod D:\xampp\htdocs\4hifi2\application\views\users\userAccount.php 9
ERROR - 2018-12-26 15:47:59 --> Severity: Notice --> Undefined index: order_ammount D:\xampp\htdocs\4hifi2\application\views\users\userAccount.php 9
ERROR - 2018-12-26 15:48:06 --> Severity: Notice --> Undefined variable: lampyElektronowe D:\xampp\htdocs\4hifi2\application\views\templates\sidebar.php 17
ERROR - 2018-12-26 15:48:07 --> Severity: Warning --> Invalid argument supplied for foreach() D:\xampp\htdocs\4hifi2\application\views\templates\sidebar.php 17
ERROR - 2018-12-26 15:48:07 --> Severity: Notice --> Undefined index: Twr_Kod D:\xampp\htdocs\4hifi2\application\views\users\userAccount.php 9
ERROR - 2018-12-26 15:48:07 --> Severity: Notice --> Undefined index: order_ammount D:\xampp\htdocs\4hifi2\application\views\users\userAccount.php 9
ERROR - 2018-12-26 15:48:16 --> Severity: Notice --> Undefined variable: lampyElektronowe D:\xampp\htdocs\4hifi2\application\views\templates\sidebar.php 17
ERROR - 2018-12-26 15:48:16 --> Severity: Warning --> Invalid argument supplied for foreach() D:\xampp\htdocs\4hifi2\application\views\templates\sidebar.php 17
ERROR - 2018-12-26 15:48:16 --> Severity: Notice --> Undefined index: Twr_Kod D:\xampp\htdocs\4hifi2\application\views\users\userAccount.php 9
ERROR - 2018-12-26 15:48:16 --> Severity: Notice --> Undefined index: order_ammount D:\xampp\htdocs\4hifi2\application\views\users\userAccount.php 9
ERROR - 2018-12-26 15:48:18 --> Severity: Notice --> Undefined variable: lampyElektronowe D:\xampp\htdocs\4hifi2\application\views\templates\sidebar.php 17
ERROR - 2018-12-26 15:48:18 --> Severity: Warning --> Invalid argument supplied for foreach() D:\xampp\htdocs\4hifi2\application\views\templates\sidebar.php 17
ERROR - 2018-12-26 15:48:18 --> Severity: Notice --> Undefined index: Twr_Kod D:\xampp\htdocs\4hifi2\application\views\users\userAccount.php 9
ERROR - 2018-12-26 15:48:18 --> Severity: Notice --> Undefined index: order_ammount D:\xampp\htdocs\4hifi2\application\views\users\userAccount.php 9
ERROR - 2018-12-26 15:49:23 --> Severity: Notice --> Undefined variable: lampyElektronowe D:\xampp\htdocs\4hifi2\application\views\templates\sidebar.php 17
ERROR - 2018-12-26 15:49:23 --> Severity: Warning --> Invalid argument supplied for foreach() D:\xampp\htdocs\4hifi2\application\views\templates\sidebar.php 17
ERROR - 2018-12-26 15:49:23 --> Severity: Notice --> Undefined index: Twr_Kod D:\xampp\htdocs\4hifi2\application\views\users\userAccount.php 9
ERROR - 2018-12-26 15:49:23 --> Severity: Notice --> Undefined index: order_ammount D:\xampp\htdocs\4hifi2\application\views\users\userAccount.php 9
ERROR - 2018-12-26 15:49:26 --> Severity: Notice --> Undefined variable: lampyElektronowe D:\xampp\htdocs\4hifi2\application\views\templates\sidebar.php 17
ERROR - 2018-12-26 15:49:26 --> Severity: Warning --> Invalid argument supplied for foreach() D:\xampp\htdocs\4hifi2\application\views\templates\sidebar.php 17
ERROR - 2018-12-26 15:49:26 --> Severity: Notice --> Undefined index: Twr_Kod D:\xampp\htdocs\4hifi2\application\views\users\userAccount.php 9
ERROR - 2018-12-26 15:49:26 --> Severity: Notice --> Undefined index: order_ammount D:\xampp\htdocs\4hifi2\application\views\users\userAccount.php 9
ERROR - 2018-12-26 15:50:17 --> Severity: Notice --> Undefined variable: lampyElektronowe D:\xampp\htdocs\4hifi2\application\views\templates\sidebar.php 17
ERROR - 2018-12-26 15:50:17 --> Severity: Warning --> Invalid argument supplied for foreach() D:\xampp\htdocs\4hifi2\application\views\templates\sidebar.php 17
ERROR - 2018-12-26 15:50:17 --> Severity: Notice --> Undefined index: Twr_Kod D:\xampp\htdocs\4hifi2\application\views\users\userAccount.php 9
ERROR - 2018-12-26 15:50:17 --> Severity: Notice --> Undefined index: order_ammount D:\xampp\htdocs\4hifi2\application\views\users\userAccount.php 9
ERROR - 2018-12-26 16:00:58 --> Severity: Notice --> Undefined variable: id D:\xampp\htdocs\4hifi2\application\controllers\Welcome.php 82
ERROR - 2018-12-26 16:00:58 --> Severity: Notice --> Undefined offset: 0 D:\xampp\htdocs\4hifi2\application\models\Products_model.php 62
ERROR - 2018-12-26 16:00:58 --> Query error: [Microsoft][ODBC Driver 11 for SQL Server][SQL Server]Conversion failed when converting the varchar value 'AUDIO-GD-MASTER-2   ' to data type int. - Invalid query: INSERT INTO "dbo"."orders" ("order_ammount", "id_product", "date", "id_user") VALUES (66, NULL, '2018-12-26 16:00:58', 'AUDIO-GD-MASTER-2   ')
ERROR - 2018-12-26 16:01:42 --> Severity: Notice --> Undefined variable: id D:\xampp\htdocs\4hifi2\application\controllers\Welcome.php 82
ERROR - 2018-12-26 16:01:42 --> Severity: Notice --> Undefined variable: id D:\xampp\htdocs\4hifi2\application\controllers\Welcome.php 86
ERROR - 2018-12-26 16:01:42 --> Severity: Notice --> Undefined offset: 0 D:\xampp\htdocs\4hifi2\application\models\Products_model.php 62
ERROR - 2018-12-26 16:01:42 --> Query error: [Microsoft][ODBC Driver 11 for SQL Server][SQL Server]Conversion failed when converting the varchar value 'AUDIO-GD-MOD-JZ-1   ' to data type int. - Invalid query: INSERT INTO "dbo"."orders" ("order_ammount", "id_product", "date", "id_user") VALUES (66, NULL, '2018-12-26 16:01:42', 'AUDIO-GD-MOD-JZ-1   ')
ERROR - 2018-12-26 16:02:27 --> Severity: Notice --> Undefined offset: 0 D:\xampp\htdocs\4hifi2\application\controllers\Welcome.php 82
ERROR - 2018-12-26 16:02:27 --> Query error: [Microsoft][ODBC Driver 11 for SQL Server][SQL Server]Cannot insert the value NULL into column 'id_user', table '4HIFI_USERS.dbo.orders'; column does not allow nulls. INSERT fails. - Invalid query: INSERT INTO "dbo"."orders" ("order_ammount", "id_product", "date", "id_user") VALUES (66, 20, '2018-12-26 16:02:27', NULL)
ERROR - 2018-12-26 16:03:39 --> Severity: Notice --> Undefined offset: 0 D:\xampp\htdocs\4hifi2\application\controllers\Welcome.php 83
ERROR - 2018-12-26 16:03:39 --> Query error: [Microsoft][ODBC Driver 11 for SQL Server][SQL Server]Cannot insert the value NULL into column 'id_user', table '4HIFI_USERS.dbo.orders'; column does not allow nulls. INSERT fails. - Invalid query: INSERT INTO "dbo"."orders" ("order_ammount", "id_product", "date", "id_user") VALUES (66, 50, '2018-12-26 16:03:39', NULL)
ERROR - 2018-12-26 16:04:34 --> Severity: Notice --> Undefined offset: 0 D:\xampp\htdocs\4hifi2\application\controllers\Welcome.php 83
ERROR - 2018-12-26 16:04:34 --> Query error: [Microsoft][ODBC Driver 11 for SQL Server][SQL Server]Cannot insert the value NULL into column 'id_user', table '4HIFI_USERS.dbo.orders'; column does not allow nulls. INSERT fails. - Invalid query: INSERT INTO "dbo"."orders" ("order_ammount", "id_product", "date", "id_user") VALUES (66, 20, '2018-12-26 16:04:34', NULL)
ERROR - 2018-12-26 16:05:33 --> Severity: Notice --> Undefined offset: 0 D:\xampp\htdocs\4hifi2\application\controllers\Welcome.php 83
ERROR - 2018-12-26 16:05:33 --> Query error: [Microsoft][ODBC Driver 11 for SQL Server][SQL Server]Cannot insert the value NULL into column 'id_user', table '4HIFI_USERS.dbo.orders'; column does not allow nulls. INSERT fails. - Invalid query: INSERT INTO "dbo"."orders" ("order_ammount", "id_product", "date", "id_user") VALUES (66, 20, '2018-12-26 16:05:33', NULL)
ERROR - 2018-12-26 16:06:20 --> Severity: Notice --> Undefined offset: 0 D:\xampp\htdocs\4hifi2\application\controllers\Welcome.php 83
ERROR - 2018-12-26 16:06:21 --> Query error: [Microsoft][ODBC Driver 11 for SQL Server][SQL Server]Cannot insert the value NULL into column 'id_user', table '4HIFI_USERS.dbo.orders'; column does not allow nulls. INSERT fails. - Invalid query: INSERT INTO "dbo"."orders" ("order_ammount", "id_product", "date", "id_user") VALUES (77, 20, '2018-12-26 16:06:21', NULL)
ERROR - 2018-12-26 16:28:41 --> Severity: Notice --> Array to string conversion D:\xampp\htdocs\4hifi2\system\database\DB_query_builder.php 2442
ERROR - 2018-12-26 16:28:41 --> Query error: [Microsoft][ODBC Driver 11 for SQL Server][SQL Server]Invalid column name 'Array'. - Invalid query: SELECT "id_user", "date", "id_product", "order_ammount"
FROM "dbo"."orders"
WHERE "id_user" = Array
ERROR - 2018-12-26 21:57:13 --> Unable to connect to the database
ERROR - 2018-12-26 23:04:06 --> Severity: Notice --> Undefined index: id_product D:\xampp\htdocs\4hifi2\application\controllers\Welcome.php 109
ERROR - 2018-12-26 23:10:59 --> Severity: Notice --> Undefined variable: product D:\xampp\htdocs\4hifi2\application\controllers\Welcome.php 113
ERROR - 2018-12-26 23:10:59 --> Severity: Warning --> array_merge(): Argument #1 is not an array D:\xampp\htdocs\4hifi2\application\controllers\Welcome.php 113
ERROR - 2018-12-26 23:10:59 --> Severity: Notice --> Undefined variable: product D:\xampp\htdocs\4hifi2\application\controllers\Welcome.php 113
ERROR - 2018-12-26 23:10:59 --> Severity: Warning --> array_merge(): Argument #1 is not an array D:\xampp\htdocs\4hifi2\application\controllers\Welcome.php 113
ERROR - 2018-12-26 23:20:11 --> Severity: Notice --> Undefined index: Twr_Opis D:\xampp\htdocs\4hifi2\application\controllers\Welcome.php 114
ERROR - 2018-12-26 23:20:11 --> Severity: Notice --> Undefined index: Twr_Nazwa D:\xampp\htdocs\4hifi2\application\controllers\Welcome.php 114
ERROR - 2018-12-26 23:20:11 --> Severity: Notice --> Undefined index: Twr_Opis D:\xampp\htdocs\4hifi2\application\controllers\Welcome.php 114
ERROR - 2018-12-26 23:20:11 --> Severity: Notice --> Undefined index: Twr_Nazwa D:\xampp\htdocs\4hifi2\application\controllers\Welcome.php 114
ERROR - 2018-12-26 23:20:18 --> Severity: Notice --> Undefined index: Twr_Opis D:\xampp\htdocs\4hifi2\application\controllers\Welcome.php 114
ERROR - 2018-12-26 23:20:18 --> Severity: Notice --> Undefined index: Twr_Nazwa D:\xampp\htdocs\4hifi2\application\controllers\Welcome.php 114
ERROR - 2018-12-26 23:20:18 --> Severity: Notice --> Undefined index: Twr_Opis D:\xampp\htdocs\4hifi2\application\controllers\Welcome.php 114
ERROR - 2018-12-26 23:20:18 --> Severity: Notice --> Undefined index: Twr_Nazwa D:\xampp\htdocs\4hifi2\application\controllers\Welcome.php 114
ERROR - 2018-12-26 23:20:49 --> Severity: Notice --> Undefined index: Twr_Nazwa D:\xampp\htdocs\4hifi2\application\controllers\Welcome.php 114
ERROR - 2018-12-26 23:20:49 --> Severity: Notice --> Undefined index: Twr_Nazwa D:\xampp\htdocs\4hifi2\application\controllers\Welcome.php 114
