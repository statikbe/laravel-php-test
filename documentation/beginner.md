## Relaties

De volgende tabellen zijn al voorzien: `employees`, `meeting_rooms`, `schedules_meetings`

Zorg ervoor dat de volgende relaties correct zijn gelegd door middel van foreign keys:
- voor `schedules_meetings`:
    - belongsTo met `meeting_rooms` voor `meeting_room_id`
    - belongsTo met `employees` voor `organizer_id`
    
Daarna creëer je zelf nog een linktabel om personen te kunnen koppelen aan `scheduled_meetings`
- Deze noem je `scheduled_meetings_participants`
- zorgt voor de juiste koppeling door middel van foreign keys


## Blade componenten
Nu de koppelingstabel tussen je relaties correct gelegd is.

Zorg ervoor dat je per meeting room kan zien welke personen aanwezig zijn.

Dit kan zo uitgebreid als je zelf wilt. Maar een basis is toch:
- overzicht van de meeting rooms
- overzicht van de toekomstig geplande meetings in een meeting room
- gedetailleerde informatie over de gepland meeting (aanwezigen, titel, beschrijving, etc)
