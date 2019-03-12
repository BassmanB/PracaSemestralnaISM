<?php defined('BASEPATH') OR exit('No direct script access allowed'); ?>

ERROR - 2018-12-18 22:36:55 --> Query error: [Microsoft][ODBC Driver 11 for SQL Server][SQL Server]Incorrect syntax near ')'. - Invalid query: SELECT DISTINCT "Twr_TwrId", "Twr_Kod", "Twr_Nazwa", "Twr_Opis", "TwZ_Ilosc", "TwZ_Wartosc"
FROM "CDN"."TOWARY"
JOIN "CDN"."TwrZasoby" ON "CDN"."TwrZasoby"."TwZ_TwrId" = "CDN"."TOWARY"."Twr_TwrId"
WHERE "Twr_TwrId" IN()
