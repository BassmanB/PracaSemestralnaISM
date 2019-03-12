<?php defined('BASEPATH') OR exit('No direct script access allowed'); ?>

ERROR - 2018-11-27 13:20:01 --> Severity: Notice --> Array to string conversion D:\xampp\htdocs\4hifi2\application\controllers\Welcome.php 131
ERROR - 2018-11-27 13:54:25 --> Severity: Notice --> Undefined offset: 1 D:\xampp\htdocs\4hifi2\application\controllers\Welcome.php 78
ERROR - 2018-11-27 13:54:25 --> Severity: Notice --> Undefined offset: 2 D:\xampp\htdocs\4hifi2\application\controllers\Welcome.php 79
ERROR - 2018-11-27 13:54:25 --> Severity: Notice --> Undefined offset: 0 D:\xampp\htdocs\4hifi2\application\controllers\Welcome.php 83
ERROR - 2018-11-27 13:54:25 --> Severity: Notice --> Undefined offset: 0 D:\xampp\htdocs\4hifi2\application\models\Products_model.php 61
ERROR - 2018-11-27 15:17:32 --> Query error: [Microsoft][ODBC Driver 11 for SQL Server][SQL Server]Invalid column name 'TwI_Ilosc'. - Invalid query: SELECT DISTINCT "Twr_TwrId", "Twr_Kod", "Twr_Nazwa", "Twr_Opis", "TwC_Wartosc", "TwC_Typ", "TwI_Ilosc"
FROM "CDN"."TOWARY"
JOIN "CDN"."TwrCeny" ON "CDN"."TwrCeny"."TwC_TwrID" = "CDN"."TOWARY"."Twr_TwrId"
JOIN "CDN"."TwrZasoby" ON "CDN"."TwrZasoby"."TwZ_TwrId" = "CDN"."TOWARY"."Twr_TwrId"
WHERE "TwC_Wartosc" > '9167'
AND "TwC_Wartosc" < '13250'
ERROR - 2018-11-27 15:18:22 --> Query error: [Microsoft][ODBC Driver 11 for SQL Server][SQL Server]Invalid column name 'TwI_Ilosc'. - Invalid query: SELECT DISTINCT "Twr_TwrId", "Twr_Kod", "Twr_Nazwa", "Twr_Opis", "TwC_Wartosc", "TwC_Typ", "TwI_Ilosc"
FROM "CDN"."TOWARY"
JOIN "CDN"."TwrCeny" ON "CDN"."TwrCeny"."TwC_TwrID" = "CDN"."TOWARY"."Twr_TwrId"
JOIN "CDN"."TwrZasoby" ON "CDN"."TwrZasoby"."TwZ_TwrId" = "CDN"."TOWARY"."Twr_TwrId"
WHERE "TwC_Wartosc" > '10580'
AND "TwC_Wartosc" < '15821'
ERROR - 2018-11-27 15:18:23 --> Query error: [Microsoft][ODBC Driver 11 for SQL Server][SQL Server]Invalid column name 'TwI_Ilosc'. - Invalid query: SELECT DISTINCT "Twr_TwrId", "Twr_Kod", "Twr_Nazwa", "Twr_Opis", "TwC_Wartosc", "TwC_Typ", "TwI_Ilosc"
FROM "CDN"."TOWARY"
JOIN "CDN"."TwrCeny" ON "CDN"."TwrCeny"."TwC_TwrID" = "CDN"."TOWARY"."Twr_TwrId"
JOIN "CDN"."TwrZasoby" ON "CDN"."TwrZasoby"."TwZ_TwrId" = "CDN"."TOWARY"."Twr_TwrId"
WHERE "TwC_Wartosc" > '10580'
AND "TwC_Wartosc" < '15821'
ERROR - 2018-11-27 15:40:34 --> Severity: Notice --> Undefined offset: 0 D:\xampp\htdocs\4hifi2\application\controllers\Welcome.php 83
