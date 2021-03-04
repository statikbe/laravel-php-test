## Geautomatiseerde job
Schrijf een job die om de x-aantal tijd een export (Excel of csv) neemt van elke meeting room met alle aanwezig personen
en dit in een mail verstuurd.

- Schrijft dit zo logisch mogelijk met een logische structuur.
- Voor het versturen kan je bijvoorbeeld gebruik maken van `Mailhog`
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
