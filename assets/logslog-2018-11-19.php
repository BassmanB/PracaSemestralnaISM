<?php defined('BASEPATH') OR exit('No direct script access allowed'); ?>

ERROR - 2018-11-19 23:30:38 --> Query error: [Microsoft][ODBC Driver 11 for SQL Server]TCP Provider: Istniejące połączenie zostało gwałtownie zamknięte przez zdalnego hosta.
 - Invalid query: SELECT "Twr_TwrId", "Twr_Kod", "Twr_Nazwa", "Twr_Opis", "TwC_Wartosc", "TwC_Typ", "TwG_Nazwa", "TwG_GIDNumer", "TwG_GrONumer", "TwI_Ilosc"
FROM "CDN"."TOWARY"
JOIN "CDN"."TwrCeny" ON "CDN"."TwrCeny"."TwC_TwrID" = "CDN"."TOWARY"."Twr_TwrId"
JOIN "CDN"."TwrGrupy" ON "CDN"."TwrGrupy"."TwG_GIDNumer" = "CDN"."TOWARY"."Twr_TwrId"
JOIN "CDN"."TwrIlosci" ON "CDN"."TwrIlosci"."TwI_TwrId" = "CDN"."TOWARY"."Twr_TwrId"
WHERE "TwC_Wartosc" > 0
AND "TwC_Typ" = 1
ERROR - 2018-11-19 23:33:36 --> Unable to connect to the database
ERROR - 2018-11-19 23:45:00 --> Severity: Notice --> Undefined variable: data D:\xampp\htdocs\4hifi2\application\models\Products_model.php 39
ERROR - 2018-11-19 23:45:00 --> Severity: Warning --> Invalid argument supplied for foreach() D:\xampp\htdocs\4hifi2\application\views\welcome_message.php 11
ERROR - 2018-11-19 23:45:46 --> Query error: [Microsoft][ODBC Driver 11 for SQL Server]TCP Provider: Istniejące połączenie zostało gwałtownie zamknięte przez zdalnego hosta.
 - Invalid query: SELECT "Twr_TwrId", "Twr_Kod", "Twr_Nazwa", "Twr_Opis", "TwC_Wartosc", "TwC_Typ", "TwG_Nazwa", "TwG_GIDNumer", "TwG_GrONumer", "TwI_Ilosc"
FROM "CDN"."TOWARY"
JOIN "CDN"."TwrCeny" ON "CDN"."TwrCeny"."TwC_TwrID" = "CDN"."TOWARY"."Twr_TwrId"
JOIN "CDN"."TwrGrupy" ON "CDN"."TwrGrupy"."TwG_GIDNumer" = "CDN"."TOWARY"."Twr_TwrId"
JOIN "CDN"."TwrIlosci" ON "CDN"."TwrIlosci"."TwI_TwrId" = "CDN"."TOWARY"."Twr_TwrId"
WHERE "TwC_Wartosc" > 0
AND "TwC_Typ" = 1
