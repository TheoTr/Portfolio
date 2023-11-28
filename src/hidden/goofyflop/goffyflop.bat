@echo off
setlocal enabledelayedexpansion

:loop

REM Exécute le script PowerShell pour ajuster le volume
PowerShell -ExecutionPolicy Bypass -File "soundup.ps1"

REM Chemin vers le dossier contenant les sons
set "chemin_sons=sounds"

REM Vérifie si le dossier sounds existe
if not exist "%chemin_sons%" (
    echo Le dossier des sons n'existe pas.
    exit /b
)

REM Récupère tous les noms de fichiers sons dans le dossier
set "index=0"
for %%A in ("%chemin_sons%\*.*") do (
    set /a "index+=1"
    set "sons[!index!]=%%~fA"
)

REM Vérifie s'il y a des fichiers sons dans le dossier
if %index% equ 0 (
    echo Aucun fichier sonore trouvé dans le dossier.
    exit /b
)

REM Fonction pour générer un nombre aléatoire entre 1 et le nombre total de fichiers sons
:generateRandom
set /a "random_num=%random% %% index + 1"
set "fichier_audio=!sons[%random_num%]!"

REM Commande PowerShell pour jouer le fichier audio de manière silencieuse
PowerShell -Command "(New-Object Media.SoundPlayer '%fichier_audio%').PlaySync();"

REM Attente d'une minute avant la prochaine exécution
timeout /t 300 /nobreak >nul

REM Retour à la boucle pour une nouvelle exécution
goto loop
