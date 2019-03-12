<?php defined('BASEPATH') OR exit('No direct script access allowed'); ?>

ERROR - 2018-11-28 09:07:16 --> Query error: [Microsoft][ODBC Driver 11 for SQL Server][SQL Server]Invalid column name 'TwI_Ilosc'. - Invalid query: SELECT DISTINCT "Twr_TwrId", "Twr_Kod", "Twr_Nazwa", "Twr_Opis", "TwZ_Ilosc", "TwG_Nazwa", "TwG_GIDNumer", "TwG_GrONumer", "TwI_Ilosc"
FROM "CDN"."TOWARY"
JOIN "CDN"."TwrCeny" ON "CDN"."TwrCeny"."TwC_TwrID" = "CDN"."TOWARY"."Twr_TwrId"
JOIN "CDN"."TwrGrupy" ON "CDN"."TwrGrupy"."TwG_GIDNumer" = "CDN"."TOWARY"."Twr_TwrId"
JOIN "CDN"."TwrZasoby" ON "CDN"."TwrZasoby"."TwZ_TwrId" = "CDN"."TOWARY"."Twr_TwrId"
ERROR - 2018-11-28 09:08:05 --> Query error: [Microsoft][ODBC Driver 11 for SQL Server][SQL Server]Invalid column name 'TwZ_Ilosc'. - Invalid query: SELECT DISTINCT "Twr_TwrId", "Twr_Kod", "Twr_Nazwa", "Twr_Opis", "TwC_Wartosc", "TwC_Typ", "TwG_Nazwa", "TwG_GIDNumer", "TwG_GrONumer", "TwZ_Ilosc"
FROM "CDN"."TOWARY"
JOIN "CDN"."TwrCeny" ON "CDN"."TwrCeny"."TwC_TwrID" = "CDN"."TOWARY"."Twr_TwrId"
JOIN "CDN"."TwrGrupy" ON "CDN"."TwrGrupy"."TwG_GIDNumer" = "CDN"."TOWARY"."Twr_TwrId"
JOIN "CDN"."TwrIlosci" ON "CDN"."TwrIlosci"."TwI_TwrId" = "CDN"."TOWARY"."Twr_TwrId"
ERROR - 2018-11-28 09:08:31 --> Severity: Notice --> Undefined index: TwI_Ilosc D:\xampp\htdocs\4hifi2\application\views\welcome_message.php 154
ERROR - 2018-11-28 09:08:31 --> Severity: Notice --> Undefined index: TwI_Ilosc D:\xampp\htdocs\4hifi2\application\views\welcome_message.php 154
ERROR - 2018-11-28 09:08:31 --> Severity: Notice --> Undefined index: TwI_Ilosc D:\xampp\htdocs\4hifi2\application\views\welcome_message.php 154
ERROR - 2018-11-28 09:08:31 --> Severity: Notice --> Undefined index: TwI_Ilosc D:\xampp\htdocs\4hifi2\application\views\welcome_message.php 154
ERROR - 2018-11-28 09:08:31 --> Severity: Notice --> Undefined index: TwI_Ilosc D:\xampp\htdocs\4hifi2\application\views\welcome_message.php 154
ERROR - 2018-11-28 09:08:31 --> Severity: Notice --> Undefined index: TwI_Ilosc D:\xampp\htdocs\4hifi2\application\views\welcome_message.php 154
ERROR - 2018-11-28 09:11:22 --> Severity: Notice --> Undefined index: TwI_Ilosc D:\xampp\htdocs\4hifi2\application\views\welcome_message.php 154
ERROR - 2018-11-28 09:11:45 --> Severity: Notice --> Undefined index: TwI_Ilosc D:\xampp\htdocs\4hifi2\application\views\welcome_message.php 154
ERROR - 2018-11-28 09:12:17 --> Query error: [Microsoft][ODBC Driver 11 for SQL Server][SQL Server]Incorrect syntax near the keyword 'AND'. - Invalid query: SELECT DISTINCT "Twr_TwrId", "Twr_Kod", "Twr_Nazwa", "Twr_Opis", "TwC_Wartosc", "TwC_Typ", "TwZ_Ilosc"
FROM "CDN"."TOWARY"
JOIN "CDN"."TwrCeny" ON "CDN"."TwrCeny"."TwC_TwrID" = "CDN"."TOWARY"."Twr_TwrId"
JOIN "CDN"."TwrZasoby" ON "CDN"."TwrZasoby"."TwZ_TwrId" = "CDN"."TOWARY"."Twr_TwrId"
WHERE "TwC_Wartosc" >
AND "TwC_Wartosc" <
ERROR - 2018-11-28 09:13:15 --> Severity: Notice --> Undefined index: TwI_Ilosc D:\xampp\htdocs\4hifi2\application\views\welcome_message.php 154
ERROR - 2018-11-28 09:14:39 --> Severity: Notice --> Undefined index: TwI_Ilosc D:\xampp\htdocs\4hifi2\application\views\welcome_message.php 155
ERROR - 2018-11-28 09:15:05 --> Severity: Notice --> Undefined index: TwI_Ilosc D:\xampp\htdocs\4hifi2\application\views\welcome_message.php 155
ERROR - 2018-11-28 10:01:17 --> Query error: [Microsoft][ODBC Driver 11 for SQL Server][SQL Server]Conversion failed when converting the varchar value 'KABLE' to data type int. - Invalid query: SELECT "TwG_TwGID"
FROM "CDN"."TwrGrupy"
WHERE "TwG_GrONumer" = 'KABLE'
ERROR - 2018-11-28 10:01:25 --> Query error: [Microsoft][ODBC Driver 11 for SQL Server][SQL Server]Incorrect syntax near ')'. - Invalid query: SELECT "TwG_TwGID"
FROM "CDN"."TOWARY"
WHERE "Twr_TwrId" IN()
ERROR - 2018-11-28 10:02:49 --> Query error: [Microsoft][ODBC Driver 11 for SQL Server][SQL Server]Conversion failed when converting the varchar value 'ALPIN_LINE' to data type int. - Invalid query: SELECT "TwG_TwGID"
FROM "CDN"."TwrGrupy"
WHERE "TwG_GrONumer" = 'ALPIN_LINE'
ERROR - 2018-11-28 10:02:56 --> Severity: Notice --> Undefined index: TwG_TwGID D:\xampp\htdocs\4hifi2\application\controllers\Welcome.php 142
ERROR - 2018-11-28 10:02:56 --> Query error: [Microsoft][ODBC Driver 11 for SQL Server][SQL Server]Invalid column name 'TwG_TwGID'. - Invalid query: SELECT "TwG_TwGID"
FROM "CDN"."TOWARY"
ERROR - 2018-11-28 10:04:08 --> Query error: [Microsoft][ODBC Driver 11 for SQL Server][SQL Server]Conversion failed when converting the varchar value 'FELIKS_AUDIO' to data type int. - Invalid query: SELECT "TwG_TwGID"
FROM "CDN"."TwrGrupy"
WHERE "TwG_GrONumer" = 'FELIKS_AUDIO'
ERROR - 2018-11-28 10:04:14 --> Severity: Notice --> Undefined index: TwG_TwGID D:\xampp\htdocs\4hifi2\application\controllers\Welcome.php 142
ERROR - 2018-11-28 10:05:54 --> Query error: [Microsoft][ODBC Driver 11 for SQL Server][SQL Server]Conversion failed when converting the varchar value 'KABLE' to data type int. - Invalid query: SELECT "TwG_TwGID"
FROM "CDN"."TwrGrupy"
WHERE "TwG_GrONumer" = 'KABLE'
ERROR - 2018-11-28 10:09:54 --> Severity: Notice --> Undefined index: TwG_GIDNumer D:\xampp\htdocs\4hifi2\application\controllers\Welcome.php 142
ERROR - 2018-11-28 10:09:54 --> Severity: Notice --> Undefined index: TwG_TwGID D:\xampp\htdocs\4hifi2\application\controllers\Welcome.php 143
ERROR - 2018-11-28 10:15:15 --> Severity: Notice --> Undefined index: TwG_TwGID D:\xampp\htdocs\4hifi2\application\controllers\Welcome.php 146
ERROR - 2018-11-28 10:16:02 --> Severity: Notice --> Array to string conversion D:\xampp\htdocs\4hifi2\system\database\DB_query_builder.php 837
ERROR - 2018-11-28 10:16:02 --> Query error: [Microsoft][ODBC Driver 11 for SQL Server][SQL Server]Invalid column name 'Array'. - Invalid query: SELECT "Twr_Kod"
FROM "CDN"."TOWARY"
WHERE "Twr_TwrId" IN(Array)
ERROR - 2018-11-28 10:36:38 --> Query error: [Microsoft][ODBC Driver 11 for SQL Server][SQL Server]Invalid object name 'dbo.users'. - Invalid query: SELECT "id"
FROM "dbo"."users"
WHERE "username" = 'test3'
ERROR - 2018-11-28 10:37:01 --> Query error: [Microsoft][ODBC Driver 11 for SQL Server][SQL Server]Invalid object name 'dbo.users'. - Invalid query: SELECT "username"
FROM "dbo"."users"
WHERE "username" = 'test3'
AND "password" = '8ad8757baa8564dc136c1e07507f4a98'
ERROR - 2018-11-28 10:37:03 --> Query error: [Microsoft][ODBC Driver 11 for SQL Server][SQL Server]Invalid object name 'dbo.users'. - Invalid query: SELECT "username"
FROM "dbo"."users"
WHERE "username" = 'test3'
AND "password" = '8ad8757baa8564dc136c1e07507f4a98'
ERROR - 2018-11-28 10:37:04 --> Query error: [Microsoft][ODBC Driver 11 for SQL Server][SQL Server]Invalid object name 'dbo.users'. - Invalid query: SELECT "username"
FROM "dbo"."users"
WHERE "username" = 'test3'
AND "password" = '8ad8757baa8564dc136c1e07507f4a98'
ERROR - 2018-11-28 10:37:06 --> Query error: [Microsoft][ODBC Driver 11 for SQL Server][SQL Server]Invalid object name 'dbo.users'. - Invalid query: SELECT "username"
FROM "dbo"."users"
WHERE "username" = 'test3'
AND "password" = '8ad8757baa8564dc136c1e07507f4a98'
ERROR - 2018-11-28 10:37:22 --> Query error: [Microsoft][ODBC Driver 11 for SQL Server][SQL Server]Invalid object name 'dbo.users'. - Invalid query: SELECT "id"
FROM "dbo"."users"
WHERE "username" = 'test3'
ERROR - 2018-11-28 10:37:54 --> Query error: [Microsoft][ODBC Driver 11 for SQL Server][SQL Server]Invalid object name 'dbo.users'. - Invalid query: SELECT "username"
FROM "dbo"."users"
WHERE "username" = 'test3'
AND "password" = '8ad8757baa8564dc136c1e07507f4a98'
ERROR - 2018-11-28 10:37:56 --> Query error: [Microsoft][ODBC Driver 11 for SQL Server][SQL Server]Invalid object name 'dbo.users'. - Invalid query: SELECT "username"
FROM "dbo"."users"
WHERE "username" = 'test3'
AND "password" = '8ad8757baa8564dc136c1e07507f4a98'
ERROR - 2018-11-28 10:37:57 --> Query error: [Microsoft][ODBC Driver 11 for SQL Server][SQL Server]Invalid object name 'dbo.users'. - Invalid query: SELECT "username"
FROM "dbo"."users"
WHERE "username" = 'test3'
AND "password" = '8ad8757baa8564dc136c1e07507f4a98'
ERROR - 2018-11-28 10:38:00 --> Query error: [Microsoft][ODBC Driver 11 for SQL Server][SQL Server]Invalid object name 'dbo.users'. - Invalid query: SELECT "id"
FROM "dbo"."users"
WHERE "username" = 'test3'
ERROR - 2018-11-28 11:07:32 --> Query error: [Microsoft][ODBC Driver 11 for SQL Server][SQL Server]Invalid object name 'dbo.users'. - Invalid query: SELECT "username"
FROM "dbo"."users"
WHERE "username" = 'test3'
AND "password" = '8ad8757baa8564dc136c1e07507f4a98'
ERROR - 2018-11-28 11:07:33 --> Query error: [Microsoft][ODBC Driver 11 for SQL Server][SQL Server]Invalid object name 'dbo.users'. - Invalid query: SELECT "username"
FROM "dbo"."users"
WHERE "username" = 'test3'
AND "password" = '8ad8757baa8564dc136c1e07507f4a98'
ERROR - 2018-11-28 11:07:34 --> Query error: [Microsoft][ODBC Driver 11 for SQL Server][SQL Server]Invalid object name 'dbo.users'. - Invalid query: SELECT "username"
FROM "dbo"."users"
WHERE "username" = 'test3'
AND "password" = '8ad8757baa8564dc136c1e07507f4a98'
ERROR - 2018-11-28 11:07:34 --> Query error: [Microsoft][ODBC Driver 11 for SQL Server][SQL Server]Invalid object name 'dbo.users'. - Invalid query: SELECT "username"
FROM "dbo"."users"
WHERE "username" = 'test3'
AND "password" = '8ad8757baa8564dc136c1e07507f4a98'
ERROR - 2018-11-28 11:07:35 --> Query error: [Microsoft][ODBC Driver 11 for SQL Server][SQL Server]Invalid object name 'dbo.users'. - Invalid query: SELECT "username"
FROM "dbo"."users"
WHERE "username" = 'test3'
AND "password" = '8ad8757baa8564dc136c1e07507f4a98'
ERROR - 2018-11-28 11:07:47 --> Severity: Notice --> Undefined property: Welcome::$d2b D:\xampp\htdocs\4hifi2\system\core\Model.php 73
ERROR - 2018-11-28 11:32:02 --> Severity: Notice --> Undefined property: Welcome::$d2b D:\xampp\htdocs\4hifi2\system\core\Model.php 73
ERROR - 2018-11-28 12:48:37 --> Query error: [Microsoft][ODBC Driver 11 for SQL Server][SQL Server]Incorrect syntax near ')'. - Invalid query: SELECT DISTINCT "Twr_TwrId", "Twr_Kod", "Twr_Nazwa", "Twr_Opis", "TwC_Wartosc", "TwC_Typ", "TwZ_Ilosc"
FROM "CDN"."TOWARY"
JOIN "CDN"."TwrCeny" ON "CDN"."TwrCeny"."TwC_TwrID" = "CDN"."TOWARY"."Twr_TwrId"
JOIN "CDN"."TwrZasoby" ON "CDN"."TwrZasoby"."TwZ_TwrId" = "CDN"."TOWARY"."Twr_TwrId"
WHERE "Twr_TwrId" IN()
AND "TwC_Wartosc" > 0
ERROR - 2018-11-28 12:55:06 --> Severity: Notice --> Undefined property: Welcome::$d2b D:\xampp\htdocs\4hifi2\system\core\Model.php 73
ERROR - 2018-11-28 13:55:31 --> Severity: Notice --> Undefined property: Welcome::$db2 D:\xampp\htdocs\4hifi2\system\core\Model.php 73
ERROR - 2018-11-28 14:30:04 --> Query error: [Microsoft][ODBC Driver 11 for SQL Server][SQL Server]Invalid object name 'dbo.users'. - Invalid query: SELECT "username"
FROM "dbo"."users"
WHERE "username" = 'test3'
AND "password" = '8ad8757baa8564dc136c1e07507f4a98'
ERROR - 2018-11-28 14:30:06 --> Severity: Notice --> Undefined property: Welcome::$db2 D:\xampp\htdocs\4hifi2\system\core\Model.php 73
ERROR - 2018-11-28 14:31:21 --> Severity: Notice --> Undefined property: Welcome::$db2 D:\xampp\htdocs\4hifi2\system\core\Model.php 73
ERROR - 2018-11-28 15:07:47 --> Severity: Notice --> Undefined variable: db2 D:\xampp\htdocs\4hifi2\application\models\User_model.php 31
ERROR - 2018-11-28 15:08:04 --> Severity: Notice --> Undefined variable: db2 D:\xampp\htdocs\4hifi2\application\models\User_model.php 31
ERROR - 2018-11-28 15:08:21 --> Severity: Notice --> Undefined variable: db2 D:\xampp\htdocs\4hifi2\application\models\User_model.php 31
ERROR - 2018-11-28 15:08:43 --> Severity: Notice --> Undefined property: Welcome::$db2 D:\xampp\htdocs\4hifi2\system\core\Model.php 73
ERROR - 2018-11-28 15:08:47 --> Severity: Notice --> Undefined property: Welcome::$db2 D:\xampp\htdocs\4hifi2\system\core\Model.php 73
ERROR - 2018-11-28 15:09:22 --> Severity: Notice --> Undefined property: Welcome::$db2 D:\xampp\htdocs\4hifi2\system\core\Model.php 73
ERROR - 2018-11-28 15:13:55 --> Severity: Notice --> Undefined property: Welcome::$db2 D:\xampp\htdocs\4hifi2\system\core\Model.php 73
ERROR - 2018-11-28 15:14:04 --> Severity: Notice --> Undefined property: Welcome::$db2 D:\xampp\htdocs\4hifi2\system\core\Model.php 73
