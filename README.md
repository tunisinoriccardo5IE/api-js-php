# CRUD API Demo (PHP & JavaScript)

Questo progetto mostra come consumare una semplice API RESTful (CRUD) sia in PHP (usando cURL) che in JavaScript (usando Fetch API). Include anche una collezione Postman per testare le richieste.

## Struttura dei file

- `crud-api-postman.json` — Collezione Postman con richieste CRUD (importabile in Postman)
- `api_crud_curl.php` — Script PHP che esegue richieste CRUD tramite cURL
- `crud-api-demo.html` — Pagina web per testare le richieste CRUD in JavaScript
- `crud-api-demo.css` — Stile base per la pagina HTML

## Endpoint di esempio
Tutte le richieste puntano a un endpoint di esempio su [Beeceptor](https://beeceptor.com/crud-api/):
```
https://beeceptor.com/crud-api/items
```

## Come usare

### 1. Test con Postman
- Importa `crud-api-postman.json` in Postman
- Esegui le richieste CRUD (Create, Read, Update, Delete)

### 2. Test con PHP (cURL)
- Assicurati di avere PHP installato
- Esegui:
  ```bash
  php api_crud_curl.php
  ```
- Vedrai le risposte delle operazioni CRUD nel terminale

### 3. Test con HTML/JS
- Apri `crud-api-demo.html` in un browser
- Usa l’interfaccia per creare, visualizzare, modificare ed eliminare elementi
- Le richieste sono fatte tramite Fetch API (sia con `.then` che con `async/await`)

## Note
- L’endpoint Beeceptor è solo un esempio: puoi sostituirlo con il tuo vero endpoint API.
- Gli ID usati per update/delete sono di esempio (es: `1`).
- Il file CSS è opzionale, solo per migliorare la grafica.

---

**Autore:** tunisinoriccardo5IE

