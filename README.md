# Caseificio

Sito del Consorzio di un Formaggio Tipico che permette agli utenti di cercare, identificare e visitare virtualmente i vari caseifici. 

Per ogni caseificio bisogna raccogliere i dati relativi alla quantità di latte raccolto, alla quantità di latte impiegata alla produzione di formaggio, alla quantità di forme prodotte e venduta. Per ogni forma venduta bisogna conoscere la stagionatura raggiunta (12, 24, 30 o 36 mesi), nome, tipo dell' acquirente (aziende) e se è di prima o seconda scelta (se seconda -> forma con difetti.)

Ogni caseificio ha un codice di 4 cifre. Con questo vengono marchiate le forme + la data (mese ed anno) + il numero progressivo all'interno della giornata.

Per i luoghi di produzione, si salva il nome, indirizzo, dati di geocalizzazione?, nome del titolare, ed una serie di foto.

Se loggato come operatore di un caseificio -> possibilità di aggiungere i dati giornalieri;

# Obiettivi

1. Visualizzare il numero di forme prodotte di ogni caseificio tra due date in input;
2. Visualizzare la media di latte lavorato giornalmente in quest'anno dai caseifici provincia per provincia;
3. Visualizzare i dati del caseificio che ha venduto il maggior numero di forme di prima scelta in un anno impostato dall' utente.

# Database

tConsorzio -> id, nomeConsorzio;
tProvincia -> id, nomeProvincia;
tCaseificio -> id, codice, nome, CAP, via, numero civico, nomeTitolare, cognome titolare, idProvincia, idConsorzio;
tFotografia -> id, url;
tLatte -> id, dataDiRaccolta, quantitàRaccolta, idCaseificio;
tForma -> id, codice, quantitàLatteLavorato, stagionatura, tipologia;
tAcquirente -> id, nome, tipo;
tVendita -> id, idForma, idAcquirente, dataVendita;
tUtente -> id, email, password, username, tipologia, idCaseificio;