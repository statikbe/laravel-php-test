<p align="center"><a href="https://laravel.com" target="_blank"><img src="https://raw.githubusercontent.com/laravel/art/master/logo-lockup/5%20SVG/2%20CMYK/1%20Full%20Color/laravel-logolockup-cmyk-red.svg" width="400"></a></p>

<p align="center">
<a href="https://travis-ci.org/laravel/framework"><img src="https://travis-ci.org/laravel/framework.svg" alt="Build Status"></a>
<a href="https://packagist.org/packages/laravel/framework"><img src="https://img.shields.io/packagist/dt/laravel/framework" alt="Total Downloads"></a>
<a href="https://packagist.org/packages/laravel/framework"><img src="https://img.shields.io/packagist/v/laravel/framework" alt="Latest Stable Version"></a>
<a href="https://packagist.org/packages/laravel/framework"><img src="https://img.shields.io/packagist/l/laravel/framework" alt="License"></a>
</p>
<div align="center">

## File upload
Schrijf een file upload zodat je medewerkers van een profielfoto kan voorzien.
Dit gebeurt op basis van medewerker keuze en dan een file upload.

Hiervoor werd al een controller en template voorzien.
- FileUploadController
- pages/files/**

Je maakt een overzichtspagina van alle werknemers met een afbeelding (wanneer deze niet aanwezig is geef je een default avatar).



## Gebruik van API
Schrijf een randomizer die op basis van een api call een svg afbeelding inlaadt en opslaat in de folder __avatars__. Dezelfde avatar mag maar 1 maal voorkomen.

De manier waarop je dit genereert bepaal je helemaal zelf. Dit mag met een knop, maar evengoed ook met een job die op de achtergrond loopt of via een schedule dat om de x-aantal tijd loopt.
- Te gebruiken API: [Dicebear.com](https://avatars.dicebear.com/docs/http-api)
- Avatarcontroller
- pages/index.blade.php


### [Terug naar overzicht](/)

</div>
