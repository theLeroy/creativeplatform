



<!-- PROJECT SHIELDS -->
[![Build Status][build-shield]]()
[![Contributors][contributors-shield]]()
[![MIT License][license-shield]][license-url]



# Evenement 

**test link https://trash.janiswanger.ch**


## Table of Contents

* [About the Project](#about-the-project)
* [Installation](#Installation)
* [Usage](#usage)
* [Navitagtion](#Navitagtion)
* [Dateistruktur](#Dateistruktur)
* [Contact](#contact)



## About the Project  
Die Webseite ist eine Hilfe für die Planung von Projekten und Events. Auf der Webseite kannst du mit anderen Eventplaner in Kontakt treten, eigene Events erstellen und Mitarbeiter dafür finden. Auch kannst du dich als Mitarbeiter für andere Events bewerben.  


## Installation
Das projekt erfordert eine mysql db und php 7.2. Einfach die Files colonen und das example.env.php ausfüllen und zu .env.php umbenennen. 


## Datenbank erstellen
Zur korrekten Erstellung/Implementierung der Datenbank wurden drei seperate Files erstellt. Diese müssen in nummerierter Abfolge ausgeführt werden.  

- dbconnect_evenement_01: Erstellung der DB  
- Zum Fortfahren muss man sich nun auf die DB verbinden  
- dbconnect_evenement_02: Erstellung der einzelnen Tabellen  
- dbconnect_evenement_03: Testdaten einfügen  

## Navitagtion
Home <-- Übersichtsseite von allen Projekten
  project <-- Detailseite eines einzelnen Projekts
Impressum <-- Impressum
Login <-- Als Benutzer anmelden
Projekt erstellen <-- neues Projekt erstellen
 


## Dateistruktur 
Components -> Einzelne Kompononenten des Codes die man auf den verschiedenen Seiten immer wieder verwenden kann.
DB -> Files für den Datenbank Aufbau.
libs -> Librarys aus dem Internet bspw. für das CSS reset, damit dieses keine fehler beinhaltet.

## Contact


Github Repo -> https://github.com/theLeroy/creativeplatform/

[build-shield]: https://img.shields.io/badge/build-passing-brightgreen.svg?style=flat-square
[contributors-shield]: https://img.shields.io/badge/contributors-1-orange.svg?style=flat-square
[license-shield]: https://img.shields.io/badge/license-MIT-blue.svg?style=flat-square
[license-url]: https://choosealicense.com/licenses/mit
[linkedin-shield]: https://img.shields.io/badge/-LinkedIn-black.svg?style=flat-square&logo=linkedin&colorB=555
[GitHub-url]: https://github.com/theLeroy
[product-screenshot]: https://raw.githubusercontent.com/othneildrew/Best-README-Template/master/screenshot.png
