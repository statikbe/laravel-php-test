<p align="center"><a href="https://laravel.com" target="_blank"><img src="https://raw.githubusercontent.com/laravel/art/master/logo-lockup/5%20SVG/2%20CMYK/1%20Full%20Color/laravel-logolockup-cmyk-red.svg" width="400"></a></p>

<p align="center">
<a href="https://travis-ci.org/laravel/framework"><img src="https://travis-ci.org/laravel/framework.svg" alt="Build Status"></a>
<a href="https://packagist.org/packages/laravel/framework"><img src="https://img.shields.io/packagist/dt/laravel/framework" alt="Total Downloads"></a>
<a href="https://packagist.org/packages/laravel/framework"><img src="https://img.shields.io/packagist/v/laravel/framework" alt="Latest Stable Version"></a>
<a href="https://packagist.org/packages/laravel/framework"><img src="https://img.shields.io/packagist/l/laravel/framework" alt="License"></a>
</p>
<div align="center">

## Geautomatiseerde job
Schrijf een job die om de x-aantal tijd een export (Excel of csv) neemt van elke meeting room met alle aanwezig personen voor de eerst volgende week
en dit in een mail verstuurd. Dit mag enkel gebeuren voor meetings die nog moeten plaatsvinden.

Je gaat vooraf nog een seeder moeten voorzien om enkele toekomstige meeting rooms te voorzien van data. 

- Schrijft dit zo logisch mogelijk met een logische structuur.
- Voor het versturen kan je bijvoorbeeld gebruik maken van [Mailhog](https://github.com/mailhog/MailHog).
#### Settings voor Mailhog:
```dotenv
MAIL_DRIVER=smtp
MAIL_HOST=localhost
MAIL_USERNAME=null
MAIL_PASSWORD=null
MAIL_ENCRYPTION=null
MAIL_PORT=1025
```


##Tests
Schrijf enkele tests op je werk die zeker en vast moeten valideren.


### [Terug naar overzicht](/)

</div>
