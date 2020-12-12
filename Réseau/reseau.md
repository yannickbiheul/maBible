# Quelques infos réseau

Adresses ip  ipv4 sur 4 chiffres séparés par des points : 192.168.16.1

Adresses dynamiques ou fixes

## telnet
telnet www.perdu.com 80

GET / HTTP/1.1Host: www.perdu.com

pour pomper un site:  (linux)  wget http://www.perdu.com

ipconfig /all Obtenir les adresses IP de votre PC :

ifconfig (unix, linux , mac)

ipconfig /all windows

L’ip de l’url localhost est 127.0.0.1  ( correspondance effectuée en local dans le fichier hosts )

## exemple sous mac os x:  /etc/hosts
Host Database 

localhost is used to configure the loopback interface 

when the system is booting.  Do not change this entry. 

127.0.0.1       localhost

255.255.255.255 broadcasthost

::1             localhost 

## Tester la liaison
ping www.free.fr  (accede à l’adresse ip de l’url) (réponds si l’adresse est "pingable")

ping www.perdu 

## Route d'une connection
tracert  unsiteweb pour tracer les route d’un appel à un site web 

( traceroute pour unix )  

tracert www.perdu.com