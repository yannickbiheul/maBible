# Docker

Container Linux

Avec mySQL, PHP ou Node MongoDB, etc...

## Installation :

[Docker Desktop](https://hub.docker.com/editions/community/docker-ce-desktop-windows/)

[dockerHub.com](https://hub.docker.com/)

Pour voir si ça marche : 

```docker```

Télécharger bash et afficher salut :

```docker run --rm bash echo salut```

Le --rm signifie "installe bash et supprime-le tout de suite après".

Affiche :

```
Unable to find image 'bash:latest' locally
latest: Pulling from library/bash
f84cab65f19f: Pull complete
9f33ec3cbeb8: Pull complete
e664623ea448: Pull complete
Digest: sha256:ad5e40db3e26bed0d627e049f83e76988ea7d93133e03ea0649fbce51d161272
Status: Downloaded newer image for bash:latest
salut
```

On relance la commande :

```docker run --rm bash echo salut```

Affiche : 

```
salut
```

Voir les images dans le dépôt : 

```docker images```

Utiliser bash : 

```docker run bash echo coco```

Lancer la machine virtuelle :

```docker run -ti bash```

Voir l'OS en cours : 

```uname -a```

Cmder du cours :

```

I:\OUTILS\Cmder
λ docker

Usage:  docker [OPTIONS] COMMAND

A self-sufficient runtime for containers

Options:
      --config string      Location of client config files (default
                           "C:\\Users\\yanni\\.docker")
  -c, --context string     Name of the context to use to connect to the
                           daemon (overrides DOCKER_HOST env var and
                           default context set with "docker context use")
  -D, --debug              Enable debug mode
  -H, --host list          Daemon socket(s) to connect to
  -l, --log-level string   Set the logging level
                           ("debug"|"info"|"warn"|"error"|"fatal")
                           (default "info")
      --tls                Use TLS; implied by --tlsverify
      --tlscacert string   Trust certs signed only by this CA (default
                           "C:\\Users\\yanni\\.docker\\ca.pem")
      --tlscert string     Path to TLS certificate file (default
                           "C:\\Users\\yanni\\.docker\\cert.pem")
      --tlskey string      Path to TLS key file (default
                           "C:\\Users\\yanni\\.docker\\key.pem")
      --tlsverify          Use TLS and verify the remote
  -v, --version            Print version information and quit

Management Commands:
  app*        Docker App (Docker Inc., v0.9.1-beta3)
  builder     Manage builds
  buildx*     Build with BuildKit (Docker Inc., v0.5.1-docker)
  config      Manage Docker configs
  container   Manage containers
  context     Manage contexts
  image       Manage images
  manifest    Manage Docker image manifests and manifest lists
  network     Manage networks
  node        Manage Swarm nodes
  plugin      Manage plugins
  scan*       Docker Scan (Docker Inc., v0.5.0)
  secret      Manage Docker secrets
  service     Manage services
  stack       Manage Docker stacks
  swarm       Manage Swarm
  system      Manage Docker
  trust       Manage trust on Docker images
  volume      Manage volumes

Commands:
  attach      Attach local standard input, output, and error streams to a running container
  build       Build an image from a Dockerfile
  commit      Create a new image from a container's changes
  cp          Copy files/folders between a container and the local filesystem
  create      Create a new container
  diff        Inspect changes to files or directories on a container's filesystem
  events      Get real time events from the server
  exec        Run a command in a running container
  export      Export a container's filesystem as a tar archive
  history     Show the history of an image
  images      List images
  import      Import the contents from a tarball to create a filesystem image
  info        Display system-wide information
  inspect     Return low-level information on Docker objects
  kill        Kill one or more running containers
  load        Load an image from a tar archive or STDIN
  login       Log in to a Docker registry
  logout      Log out from a Docker registry
  logs        Fetch the logs of a container
  pause       Pause all processes within one or more containers
  port        List port mappings or a specific mapping for the container
  ps          List containers
  pull        Pull an image or a repository from a registry
  push        Push an image or a repository to a registry
  rename      Rename a container
  restart     Restart one or more containers
  rm          Remove one or more containers
  rmi         Remove one or more images
  run         Run a command in a new container
  save        Save one or more images to a tar archive (streamed to STDOUT by default)
  search      Search the Docker Hub for images
  start       Start one or more stopped containers
  stats       Display a live stream of container(s) resource usage statistics
  stop        Stop one or more running containers
  tag         Create a tag TARGET_IMAGE that refers to SOURCE_IMAGE
  top         Display the running processes of a container
  unpause     Unpause all processes within one or more containers
  update      Update configuration of one or more containers
  version     Show the Docker version information
  wait        Block until one or more containers stop, then print their exit codes

Run 'docker COMMAND --help' for more information on a command.

To get more help with docker, check out our guides at https://docs.docker.com/go/guides/

I:\OUTILS\Cmder
λ systeminfo.exe

Nom de l’hôte:                              PC
Nom du système d’exploitation:              Microsoft Windows 10 Famille
Version du système:                         10.0.19042 N/A version 19042
Fabricant du système d’exploitation:        Microsoft Corporation
Configuration du système d’exploitation:    Station de travail autonome
Type de version du système d’exploitation:  Multiprocessor Free
Propriétaire enregistré:                    N/A
Organisation enregistrée:                   N/A
Identificateur de produit:                  00326-00012-27164-AAOEM
Date d’installation originale:              28/07/2020, 01:41:26
Heure de démarrage du système:              03/03/2021, 15:49:15
Fabricant du système:                       MSI
Modèle du système:                          MS-7A70
Type du système:                            x64-based PC
Processeur(s):                              1 processeur(s) installé(s).
                                            [01] : Intel64 Family 6 Model 158 Stepping 9 GenuineIntel ~3792 MHz
Version du BIOS:                            American Megatrends Inc. A.40, 17/07/2017
Répertoire Windows:                         C:\WINDOWS
Répertoire système:                         C:\WINDOWS\system32
Périphérique d’amorçage:                    \Device\HarddiskVolume1
Option régionale du système:                fr;Français (France)
Paramètres régionaux d’entrée:              fr;Français (France)
Fuseau horaire:                             (UTC+01:00) Bruxelles, Copenhague, Madrid, Paris
Mémoire physique totale:                    16 349 Mo
Mémoire physique disponible:                10 618 Mo
Mémoire virtuelle : taille maximale:        18 781 Mo
Mémoire virtuelle : disponible:             10 507 Mo
Mémoire virtuelle : en cours d’utilisation: 8 274 Mo
Emplacements des fichiers d’échange:        C:\pagefile.sys
Domaine:                                    WORKGROUP
Serveur d’ouverture de session:             \\PC
Correctif(s):                               11 Corrections installées.
                                            [01]: KB4601050
                                            [02]: KB4561600
                                            [03]: KB4562830
                                            [04]: KB4566785
                                            [05]: KB4570334
                                            [06]: KB4577266
                                            [07]: KB4580325
                                            [08]: KB4586864
                                            [09]: KB4593175
                                            [10]: KB4598481
                                            [11]: KB4601319
Carte(s) réseau:                            1 carte(s) réseau installée(s).
                                            [01]: Realtek PCIe GBE Family Controller
                                                  Nom de la connexion : Ethernet 2
                                                  DHCP activé :         Oui
                                                  Serveur DHCP :        192.168.1.254
                                                  Adresse(s) IP
                                                  [01]: 192.168.1.23
                                                  [02]: fe80::2086:7a35:8330:dba
                                                  [03]: 2001:861:5440:b7e0:19ee:6bdb:8753:2f49
                                                  [04]: 2001:861:5440:b7e0:2086:7a35:8330:dba
Configuration requise pour Hyper-V:         Un hyperviseur a été détecté. Les fonctionnalités nécessaires à Hyper-V ne seront pas affichées.

I:\OUTILS\Cmder
λ docker run --rm bash echo salut
Unable to find image 'bash:latest' locally
latest: Pulling from library/bash
f84cab65f19f: Pull complete
9f33ec3cbeb8: Pull complete
e664623ea448: Pull complete
Digest: sha256:ad5e40db3e26bed0d627e049f83e76988ea7d93133e03ea0649fbce51d161272
Status: Downloaded newer image for bash:latest
salut

I:\OUTILS\Cmder
λ docker run --rm bash echo salut
salut

I:\OUTILS\Cmder
λ docker images
REPOSITORY   TAG       IMAGE ID       CREATED      SIZE
bash         latest    edc51ba74f14   6 days ago   13.6MB

I:\OUTILS\Cmder
λ docker run bash echo coco
coco

I:\OUTILS\Cmder
λ docker run -ti bash
bash-5.1# ls -lrt
total 56
drwxr-xr-x    2 root     root          4096 Feb 23 19:27 srv
drwxr-xr-x    2 root     root          4096 Feb 23 19:27 sbin
drwxr-xr-x    2 root     root          4096 Feb 23 19:27 run
drwx------    2 root     root          4096 Feb 23 19:27 root
drwxr-xr-x    2 root     root          4096 Feb 23 19:27 opt
drwxr-xr-x    2 root     root          4096 Feb 23 19:27 mnt
drwxr-xr-x    5 root     root          4096 Feb 23 19:27 media
drwxr-xr-x    2 root     root          4096 Feb 23 19:27 home
drwxrwxrwt    1 root     root          4096 Feb 24 20:40 tmp
drwxr-xr-x    1 root     root          4096 Feb 24 20:40 var
drwxr-xr-x    1 root     root          4096 Feb 24 20:40 usr
drwxr-xr-x    1 root     root          4096 Feb 24 20:40 lib
drwxr-xr-x    1 root     root          4096 Feb 24 20:40 bin
dr-xr-xr-x   11 root     root             0 Mar  3 15:16 sys
dr-xr-xr-x  131 root     root             0 Mar  3 15:16 proc
drwxr-xr-x    1 root     root          4096 Mar  3 15:16 etc
drwxr-xr-x    5 root     root           360 Mar  3 15:16 dev
bash-5.1# uname -a
Linux b60d1dbb340b 5.4.72-microsoft-standard-WSL2 #1 SMP Wed Oct 28 23:40:43 UTC 2020 x86_64 Linux
bash-5.1# exit
exit

I:\OUTILS\Cmder
λ uname -a
MSYS_NT-10.0-19042 PC 3.1.7-340.x86_64 2020-10-23 13:08 UTC x86_64 Msys

I:\OUTILS\Cmder
λ docker run -ti bash
bash-5.1# uname -a
Linux 61fe8087424f 5.4.72-microsoft-standard-WSL2 #1 SMP Wed Oct 28 23:40:43 UTC 2020 x86_64 Linux
bash-5.1# echo toto > fichier
bash-5.1# cat fichier
toto
bash-5.1# uname -n
61fe8087424f
bash-5.1# exit
exit

I:\OUTILS\Cmder
λ docker run -ti -rm -v $(pwd)/fichier:/texte bash
unknown shorthand flag: 'r' in -rm
See 'docker run --help'.

I:\OUTILS\Cmder
λ docker run -ti --rm -v $(pwd)/fichier:/texte bash
docker: Error response from daemon: create $(pwd)/fichier: "$(pwd)/fichier" includes invalid characters for a local volume name, only "[a-zA-Z0-9][a-zA-Z0-9_.-]" are allowed. If you intended to pass a host directory, use absolute path.
See 'docker run --help'.

I:\OUTILS\Cmder
λ docker run --rm nginx
Unable to find image 'nginx:latest' locally
latest: Pulling from library/nginx
45b42c59be33: Pull complete
8acc495f1d91: Pull complete
ec3bd7de90d7: Pull complete
19e2441aeeab: Pull complete
f5a38c5f8d4e: Pull complete
83500d851118: Pull complete
Digest: sha256:f3693fe50d5b1df1ecd315d54813a77afd56b0245a404055a946574deb6b34fc
Status: Downloaded newer image for nginx:latest
/docker-entrypoint.sh: /docker-entrypoint.d/ is not empty, will attempt to perform configuration
/docker-entrypoint.sh: Looking for shell scripts in /docker-entrypoint.d/
/docker-entrypoint.sh: Launching /docker-entrypoint.d/10-listen-on-ipv6-by-default.sh
10-listen-on-ipv6-by-default.sh: info: Getting the checksum of /etc/nginx/conf.d/default.conf
10-listen-on-ipv6-by-default.sh: info: Enabled listen on IPv6 in /etc/nginx/conf.d/default.conf
/docker-entrypoint.sh: Launching /docker-entrypoint.d/20-envsubst-on-templates.sh
/docker-entrypoint.sh: Launching /docker-entrypoint.d/30-tune-worker-processes.sh
/docker-entrypoint.sh: Configuration complete; ready for start up

I:\OUTILS\Cmder
λ docker run --rm -p 80:80 nginx
/docker-entrypoint.sh: /docker-entrypoint.d/ is not empty, will attempt to perform configuration
/docker-entrypoint.sh: Looking for shell scripts in /docker-entrypoint.d/
/docker-entrypoint.sh: Launching /docker-entrypoint.d/10-listen-on-ipv6-by-default.sh
10-listen-on-ipv6-by-default.sh: info: Getting the checksum of /etc/nginx/conf.d/default.conf
10-listen-on-ipv6-by-default.sh: info: Enabled listen on IPv6 in /etc/nginx/conf.d/default.conf
/docker-entrypoint.sh: Launching /docker-entrypoint.d/20-envsubst-on-templates.sh
/docker-entrypoint.sh: Launching /docker-entrypoint.d/30-tune-worker-processes.sh
/docker-entrypoint.sh: Configuration complete; ready for start up
172.17.0.1 - - [03/Mar/2021:15:41:00 +0000] "GET / HTTP/1.1" 200 612 "-" "Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/88.0.4324.190 Safari/537.36" "-"
2021/03/03 15:41:01 [error] 32#32: *1 open() "/usr/share/nginx/html/favicon.ico" failed (2: No such file or directory), client: 172.17.0.1, server: localhost, request: "GET /favicon.ico HTTP/1.1", host: "localhost", referrer: "http://localhost/"
172.17.0.1 - - [03/Mar/2021:15:41:01 +0000] "GET /favicon.ico HTTP/1.1" 404 555 "http://localhost/" "Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/88.0.4324.190 Safari/537.36" "-"

I:\OUTILS\Cmder
λ docker run --rm -p 8080:80 nginx
/docker-entrypoint.sh: /docker-entrypoint.d/ is not empty, will attempt to perform configuration
/docker-entrypoint.sh: Looking for shell scripts in /docker-entrypoint.d/
/docker-entrypoint.sh: Launching /docker-entrypoint.d/10-listen-on-ipv6-by-default.sh
10-listen-on-ipv6-by-default.sh: info: Getting the checksum of /etc/nginx/conf.d/default.conf
10-listen-on-ipv6-by-default.sh: info: Enabled listen on IPv6 in /etc/nginx/conf.d/default.conf
/docker-entrypoint.sh: Launching /docker-entrypoint.d/20-envsubst-on-templates.sh
/docker-entrypoint.sh: Launching /docker-entrypoint.d/30-tune-worker-processes.sh
/docker-entrypoint.sh: Configuration complete; ready for start up
172.17.0.1 - - [03/Mar/2021:15:42:52 +0000] "GET / HTTP/1.1" 200 612 "-" "Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/88.0.4324.190 Safari/537.36" "-"
2021/03/03 15:42:52 [error] 32#32: *1 open() "/usr/share/nginx/html/favicon.ico" failed (2: No such file or directory), client: 172.17.0.1, server: localhost, request: "GET /favicon.ico HTTP/1.1", host: "localhost:8080", referrer: "http://localhost:8080/"
172.17.0.1 - - [03/Mar/2021:15:42:52 +0000] "GET /favicon.ico HTTP/1.1" 404 555 "http://localhost:8080/" "Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/88.0.4324.190 Safari/537.36" "-"

I:\OUTILS\Cmder
λ docker run -ti php
Unable to find image 'php:latest' locally
latest: Pulling from library/php
45b42c59be33: Already exists
a48991d6909c: Pull complete
935e2abd2c2c: Pull complete
61ccf45ccdb9: Pull complete
5804e3449053: Pull complete
d702e619cf5e: Pull complete
617bddff94d0: Pull complete
d2aa39e842fc: Pull complete
3788dfe34b03: Pull complete
Digest: sha256:936a37592ef1a9486ffe60430947b7e6ad0494254fc59c8465053af2ff230841
Status: Downloaded newer image for php:latest
Interactive shell

php > php -v
php > 3 + 3
php > ^Cexit
exit

I:\OUTILS\Cmder
λ
```