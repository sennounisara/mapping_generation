# Générateur des Classes Mapping-Propel
Ce projet permet de regrouper les library et bdd de génération du mapping propel.

## Getting started 

1. `git clone` dans votre dossier `src` (il est important de déposer ce projet dans le dossier src)
2. Créez la BDD __matx_mpe_ma_schema_generation__ `CREATE DATABASE matx_mpe_ma_schema_generation;`
3. Importez le script `matx_mpe_ma_schema_generation.sql`
4. Pas d'étape 4. ¯\\\_(ツ)_/¯ 

## Lancer la génération

Pour lancer la génération des classes mapping, __alimentez le fichier maj_COMMON_db.sql__ avec vos modifications puis depuis l'image docker (container_apache_MPE) :

```
php /var/www/html/mpe/protected/bin/mpe propel common NomClass
```

Cette commande exécutera en premier temps la MAJ de la BDD de génération en se basant sur le fichier ``maj_COMMON_db.sql``, en suite, elle génère les classes mapping et en fin, elle fera la copie des fichiers générés vers votre dossier MPE.

⚠️ En cas d'ajout d'une relation avec une autre table, veuillez vérifier la copie des fichiers des autres tables pour les commiter aussi.



## Utiliser une autre BDD pour la génération

Pour utiliser une autre BDD durant la génération, modifier la valeur du paramètre `GENERATION_DB` dans :

```
//application.xml.php

...
Atexo_Config::setParameterIfNotExists('GENERATION_DB','nom_bdd_generation');
...

```

⚠️  __On présume que vous n'avez pas changé le préfix de la BDD par default, si non, modifier `matx` avec le préfix défini par le paramètre `DB_PREFIX`__

Lancer la génération à partir de powershell

./bin/propel-gen reverse
./bin/propel-gen om
