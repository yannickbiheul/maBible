# Dépannages

## System File Checker

[Lien Microsoft](https://support.microsoft.com/en-us/topic/use-the-system-file-checker-tool-to-repair-missing-or-corrupted-system-files-79aa86cb-ca52-166a-92a3-966e85d4094e)

Si certaines fonctions de Windows ne fonctionnent pas ou si Windows se bloque, utilisez le Vérificateur des fichiers système pour analyser Windows et restaurer vos fichiers.

Ouvrir CMD en tant qu'administrateur, et taper :
```
DISM.exe /Online /Cleanup-image /Restorehealth
```
Attendre.

Taper ensuite :
```
sfc /scannow
```
Attendre.

Chemin d'accès des résultats :
```
C:\Windows\Logs\CBS\CBS.log
```

## Problème de connexion interface BBox

clic droit sur windows => Connexions réseaux => Modifier les options d'adaptateur => 

clic droit sur Ethernet 2 => Propriétés => Protocole internet version 4 (TCP/IPv4) =>

Propriétés => Serveur DNS préféré : 192.168.1.254

Serveur DNS auciliaire : vide.