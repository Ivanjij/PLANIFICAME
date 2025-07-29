@echo off
echo Importando archivo SQL a la base de datos en Aiven...

REM Ruta completa del archivo SQL
SET SQL_FILE=planificame.sql

REM Configuración de conexión
SET HOST=planificame-planificame.g.aivencloud.com
SET PORT=13784
SET USER=avnadmin
SET PASSWORD=AVNS_S8b9PDewcMFHuc0MwUF
SET SSL_CA="C:\wamp64\www\htdocs\PLANIFICAME\config\ssl\ca.pem"
SET DB=defaultdb

REM Ejecutar la importación
mysql --host=%HOST% --port=%PORT% --user=%USER% --password=%PASSWORD% --ssl-ca=%SSL_CA% %DB% < %SQL_FILE%

echo.
echo ¡Importación completada!
pause
