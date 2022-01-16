@extends('layouts.index')
@section('center')
<section>
    <div class="container">
        <div class="row">
            <div class="col-sm-3">
                @include("layouts.categoryNavigation")
            </div>
            <div class="col-sm-9 padding-right">
                <div class="features_items">                    
                    <h2 class="title text-center" id="livrari">Livrari si retururi</h2>
                    <p><span style="color:#FF4040;"><span style="font-weight:bold;">!! Comanda produse in Valoare de 15.000 RON sau mai mult, TVA inclus, pentru a beneficia de transport gratuit oriunde in tara !!</span></span><br>(se aplica comenzilor de cu o greutate de maxim 3,5 t, lungime maxima de 6m si volum maxim de 20 m3)</p>
                        <p>Livrarile se efectueaza de Luni pana Vineri, in intervalul 08:00 – 17:00.</p>                      
                        <p>Produsele grele (materiale de construcii, produse metalurgice etc.) se vor livra prin flota proprie CreativTub.</p>                        
                        <p>Produsele mici (unelte, electrozi etc.) se vor livra prin servicii de curierat.</p>                       
                        <p>Pentru localitatile care se afla pe o raza de 30km de la sediul CreativTub (Str. Bucuresti nr. 216, Varteju, Ilfov) LIVRAREA ESTE GRATUITA!!!</p>
                        <p>Costurile de livrare exacte va vor fi comunicate telefonic de catre agentul nostru de vanzari, dupa efectuarea comenzii si vor fi achitate de catre client in momentul livrarii.</p>
                        
                        <h3>Livrari prin flota proprie CreativTub :</h3>
                        <p>Pentru livrare in localitatile care se afla la o distanta mai mare de 30 km de sediul CreativTub, costurile de livrare variaza, in functie de greutate si distanta, in felul urmator:</p>
                        <p>Pentru comenzi cu greutatea intre 1-800 kg costul transportului este 1,5 lei/km (TVA inclus)</p>
                        <p>Pentru comenzi cu greutatea intre 801-1200 kg costul transportului este 2,20 lei/km (TVA inclus)</p>
                        <p>Pentru comenzi cu greutatea intre 1201-3500 kg costul transportului este 3,5 lei/km (TVA incus)</p>
                        <p>Pentru comenzi de peste 3500 kg, pretul va va fi comunicat telefonic de catre agentul de vanzari.</p>
                        
                        
                        <h3>Livrari prin servicii de curierat :</h3>                        
                        <p>Pentru produsele expediate prin curier, platite in prealabil online, taxa de transport si impachetare este de 25 lei TVA Inclus la comnnzile in limita a 5 kg fizic sau volumetric, pe tot teritoriul Romaniei.</p>
                        <p>Pentru Livrarile cu plata ramburs se percepe o taxa de 5 lei TVA inclus.</p>
                        <p>Pentru fiecare kg in plus, Nemo Express percepe o taxa de 5 lei 1,72 lei plus TVA.</p>
                        <p>Pentru produsele a caror lungime depaseste 2m, Nemo Express perecepe o taxa de lungime liniara. Pentru o lungime cuprinsa intre 2m si 3m, Nemo Express adauga la taxare 50kg in plus fata de greutatea fizica sau volumetrica a comenzii, la lungimile intre 3m si 4m, Nemo Express adauga in plus la taxare 100kg fata de greuatea fizica sau volumetrica a comenzii, iar pentru colete cu o lungime mai amre de 4m, dar nu mai mare de 5,90m, se taxeasa in plus 200kg fata de greutatea fizica sau volumetrica a comenzii.</p>
                        <p>Pentru coletele care depasesc 31 kg si care necesita costuri de manipulare suplimentare, Nemo Express percepe o taxa suplimentara de 10 lei plus TVA per expediere.</p></div>
                        <h3>Politica de Retururi si Schimburi</h3>
                        <p>Pentru cereri de retururi sau schimburi, va rugam sa ne contactati telefonic la numarul</p>
                        <p><span style="text-decoration:underline;"><a href="tel:+40751839308">0751-839-308</a></span> sau la adresa de email <span style="text-decoration:underline;"><a href="mailto:contact@creativtub.ro" target="_self">contact@creativtub.ro.</a></span></p>
                        <p>Se va incerca intelegerea in termeni amiabili. In cazul in care nu se poate ajunge la o intelegere in termeni amiabili, se va continua prin a rezolva problema in termeni legali, conform legislatiei in vigoare.</p>

                        <br><br><br>
                        <h2 class="title text-center" id="termeni">Termeni si conditii</h2>
                        <p>Creativ Tub este denumirea comerciala a CREATUV TUB SRL, persoana juridica cu sediul in Strada Bucuresti Nr.216, Magurele, Judet Ilfov, inregistrata la Registrul Comertului sub numarul nr. J23/4428/2020, avand CUI RO 33141847, numita in continuare CREATIV TUB.</p>
                        <p>Va rugam sa cititi acesti termeni si conditii cu atentie pentru folosirea in cele mai bune conditii a site-ului. Utilizarea acestui site implica acceptarea tacita a termenilor si a conditiilor de utilizare prezentate mai jos, care reprezinta intelegerea (contractul) dintre parti.</p>
                        <p>In calitate de autor/ proprietar/ administrator al site-ului creativtub.ro, CREATIV TUB SRL isi rezerva dreptul de a schimba si actualiza in orice moment continutul acestuia, Termenii si conditiile de folosire, fara o notificare prealabila. Astfel, va rugam sa vizitati periodic aceasta sectiune pentru a verifica termenii si conditiile pe care ati agreat sa le respectati.</p>

                        <br><br><br>
                        <h2 class="title text-center" id="politicaConfidentialitate">Politica de Confidentialitate</h2>
                        <p>Respectarea vieții dumneavoastră private este unul dintre angajamentele noastre fundamentale și, de aceea, acordăm cea mai mare atenție prelucrării datelor dumneavoastră cu caracter personal, în conformitate cu legislația aplicabilă.</p>
                        <p>CREATIV TUB SRL, având sediul în Str. Bucuresti, Nr. 216, Magurele, Jud Ilfov, cod de identificare fiscală 33141847, înregistrată la Oficiul Registrului Comerțului sub nr. J23/4428/2020 ("CREATIV TUB SRL", "noi") prelucrează, în calitate de operator, datele dumneavoastră cu caracter personal („Date cu Caracter Personal”). Scopul acestei note de informare („Politică”) este să detalieze modul în care CREATIV TUB SRL prelucrează Datele dumneavoastră cu Caracter Personal.</p>
                        <p><span style="font-weight:bold;">DATELE CU CARACTER PERSONAL PRELUCRATE, SCOPURILE DE PRELUCRĂRE ȘI TEMEIURILE DE PRELUCRAREA.</span></p>
                        <p> A. Contactarea clienților online</p>                                        
                        <p><span style="font-weight:bold;">Contactarea clientului online</span></p>
                        <p>Date cu caracter personal prelucrate: nume, prenume, adresă de e-mail, număr de telefon.</p>
                        <p>Scopul prelucrării: Contactarea clientului online în legătură cu oferta solicitată sau în legătură cu soluționarea problemei indicate</p>
                        <p>Temeiul legal: Executarea unui contract la care persoana vizată este parte sau pentru a face demersuri la cererea persoanei vizate înainte de încheierea unui contract (art. 6, alin. 1, lit. b din GDPR).</p>
                        <p> B. Comandarea și livrarea produselor</p>
                        <p><span style="font-weight:bold;">Efectuarea plății</span></p>
                        <p>Date cu caracter personal prelucrate: nume, prenume, suma de plată, detalii ale cardului bancar.</p>
                        <p>Scopul prelucrării: Efectuarea plății produselor cumpărate</p>
                        <p>Temeiul legal: Executarea unui contract la care persoana vizată este parte sau pentru a face demersuri la cererea persoanei vizate înainte de încheierea unui contract (art. 6, alin. 1, lit. b din GDPR).</p>
                        <p> <span style="font-weight:bold;">2. Livrarea comenzii</span></p>
                        <p>Date cu caracter personal prelucrate: nume, prenume, produsele cumpărate, adresă de livrare, număr de telefon, orice informații suplimentare furnizate de client.</p>
                        <p>Scopul prelucrării: Livrarea comenzii plasate</p>
                        <p>Temeiul legal: Executarea unui contract la care persoana vizată este parte sau pentru a face demersuri la cererea persoanei vizate înainte de încheierea unui contract (art. 6, alin. 1, lit. b din GDPR).</p>
                        <p> <span style="font-weight:bold;">3. Adăugarea în coșul de cumpărături</span></p>
                        <p>Date cu caracter personal prelucrate: nume, prenume, produsul adăugat.</p>
                        <p>Scopul prelucrării: Adăugarea produsului în coșul de cumpărături</p>
                        <p>Temeiul legal: Executarea unui contract la care persoana vizată este parte sau pentru a face demersuri la cererea persoanei vizate înainte de încheierea unui contract (art. 6, alin. 1, lit. b din GDPR).</p>
                        <p> <span style="font-weight:bold;">4. Plasarea comenzii</span></p>
                        <p>Date cu caracter personal prelucrate: nume, prenume, produsele cumpărate, adresa de livrare, număr de telefon, adresă de e-mail, orice informații suplimentare furnizate de client.</p>
                        <p>Scopul prelucrării: Finalizarea și plasarea comenzii</p>
                        <p>Temeiul legal: Executarea unui contract la care persoana vizată este parte sau pentru a face demersuri la cererea persoanei vizate înainte de încheierea unui contract (art. 6, alin. 1, lit. b din GDPR).</p>
                        <p> <span style="font-weight:bold;">5. Emiterea facturii</span></p>
                        <p>Date cu caracter personal prelucrate: nume, prenume, adresă de domiciliu, produsele cumpărate, suma de plată.</p>
                        <p>Scopul prelucrării: Emiterea facturii aferente produselor cumpărate</p>
                        <p>Temeiul legal: Îndeplinirea unei obligații legale a Companiei (art. 6, alin. 1, lit. c din GDPR)<br>
                            Detalii: îndeplinirea obligațiilor fiscale.</p>
                        <p> C. Contul de utilizator</p>
                        <p><span style="font-weight:bold;">Crearea contului de utilizator</span></p>
                        <p>Date cu caracter personal prelucrate: nume, prenume, adresă de e-mail.</p>
                        <p>Scopul prelucrării: Crearea contului de utilizator al clientului</p>
                        <p>Temeiul legal: Executarea unui contract la care persoana vizată este parte sau pentru a face demersuri la cererea persoanei vizate înainte de încheierea unui contract (art. 6, alin. 1, lit. b din GDPR)</p>
                        <p><span style="font-weight:bold;">2. Completarea profilului de utilizator</span></p>
                        <p>Date cu caracter personal prelucrate: imagine avatar.</p>
                        <p>Scopul prelucrării : Completarea profilului de utilizator al clientului</p>
                        <p>Temeiul legal: Consimțământul persoanei vizate (art. 6, alin. 1, lit. a din GDPR)</p>
                        <p><span style="font-weight:bold;"> 3. Istoricul de comenzi</span></p>
                        <p>Date cu caracter personal prelucrate: nume, prenume, dată comandă, produse comandate, sumă de plată.</p>
                        <p>Scopul prelucrării : Afișarea istoricului de comenzi</p>
                        <p>Temeiul legal: Executarea unui contract la care persoana vizată este parte sau pentru a face demersuri la cererea persoanei vizate înainte de încheierea unui contract (art. 6, alin. 1, lit. b din GDPR).</p>
                        <p>D. Marketing (Newsletter, promoții, oferte)</p>
                        <p><span style="font-weight:bold;">Mesaje comerciale</span></p>
                        <p>Date cu caracter personal prelucrate: nume, prenume, număr de telefon, adresă de e-mail.</p>
                        <p>Scopul prelucrării: Trimiterea de mesaje comerciale în scopul promovării serviciilor companiei</p>
                        <p>Temeiul legal: Consimțământul persoanei vizate (art. 6, alin. 1, lit. a din GDPR)</p>
                        <p>E. Opinia clienților (feedback)</p>
                        <p><span style="font-weight:bold;">Opinia clienților (feedback)</span></p>
                        <p>Date cu caracter personal prelucrate: nume, prenume, adresă de e-mail, alte informații menționate de client.</p>
                        <p>Scopul prelucrării: Solicitarea și analizarea opiniilor clienților în scopul îmbunătățirii serviciilor</p>
                        <p>Temeiul legal: Consimțământul persoanei vizate (art. 6, alin. 1, lit. a din GDPR)</p>
                        <p> F. Soluționarea disputelor</p>
                        <p><span style="font-weight:bold;">Probleme litigioase</span></p>
                        <p>Date cu caracter personal prelucrate: nume, prenume, adresă de domiciliu.</p>
                        <p>Scopul prelucrării: Apărarea drepturilor și intereselor legitime și susținerea oricăror cereri în fața organelor judiciare sau a oricăror altor autorități publice</p>
                        <p>Temeiul legal: Interesul legitim al Companiei (art. 6, alin. 1, lit. f din GDPR)<br>
                        Detalii: interesul legitim al companiei de a apăra drepturile sau interesele legitime ori de a susține pretențiile rezultate sau aflate în strânsă legătură cu încheierea sau executarea contractului sau în vederea exercitării dreptului la apărare în ipoteza inițierii unor proceduri litigioase împotriva companiei.</p>
                        <p><span style="font-weight:bold;">2. FURNIZAREA DATELOR CU CARACTER PERSONAL</span></p>
                        <p>Puteți refuza să furnizați anumite Date cu Caracter Personal dar, într-un astfel de caz, este posibil să nu puteți beneficia de anumite servicii specifice raportului descris în această Politică.</p>
                        <p><span style="font-weight:bold;">3. DESPRE TEMEIURILE LEGALE</span></p>
                        <p>Temeiul legal de prelucrare diferă în funcție de situația concretă și de Datele cu Caracter Personal prelucrate.</p>
                        <p>În situațiile în care vom prelucra Datele dumneavoastră cu Caracter Personal în temeiul consimțământului, vom solicita consimțământul dumneavoastră liber, informat, specific și neechivoc pentru respectiva prelucrare. Prin exprimarea consimțământului dumneavoastră, veți fi de acord că putem colecta, folosi, dezvălui, prelucra și transfera Datele cu Caracter Personal, în conformitate cu această Politică.</p>
                        <p><span style="font-weight:bold;">4. SURSA DATELOR CU CARACTER PERSONAL</span></p>
                        <p>Sursa Datelor cu Caracter Personal este: clientul online.</p>
                        <p><span style="font-weight:bold;">5. PRELUCRAREA AUTOMATĂ A DATELOR CU CARACTER PERSONAL</span></p>
                        <p>Datele dumneavoastră cu Caracter Personal nu vor fi prelucrate în vederea generării unor decizii bazate exclusiv pe prelucrarea automată care ar urma să producă efecte juridice asupra dumneavoastră sau să vă afecteze într-o măsură semnificativă, în sensul celor prevăzute de art. 22 alin. (1) din GDPR.</p>
                        <p><span style="font-weight:bold;">6. DURATA DE PRELUCRARE</span></p>
                        <p>Durata de prelucrare a Datelor cu Caracter Personal diferă în funcție de operațiunea specifică de prelucrare:</p>
                        <p>Operațiunea: Contactarea clientului online</p>
                        <p>Durata: durata necesară soluționării cererii</p>
                        <p>Operațiunea: Efectuarea plății</p>
                        <p>Durata: până la finalizarea plății</p>
                        <p>Operațiunea: Livrarea comenzii</p>
                        <p>Durata: 1 an</p>
                        <p>Operațiunea: Adăugarea în coșul de cumpărături</p>
                        <p>Durata: pâna la finalizarea comenzii sau până la momentul ștergerii produselor din coș</p>
                        <p>Operațiunea: Plasarea comenzii</p>
                        <p>Durata: 3 ani</p>
                        <p>Operațiunea: Emiterea facturii</p>
                        <p>Durata: 10 ani</p>
                        <p>Operațiunea: Crearea contului de utilizator</p>
                        <p>Durata: durata existenței contului</p>
                        <p>Operațiunea: Completarea profilului de utilizator</p>
                        <p>Durata: durata existenței contului</p>
                        <p>Operațiunea: Istoricul de comenzi</p>
                        <p>Durata: durata existenței contului</p>
                        <p>Operațiunea: Mesaje comerciale</p>
                        <p>Durata: până la momentul retragerii consimțământului</p>
                        <p>Opinia clienților (feedback)</p>
                        <p>Durata: durata necesară analizei opiniei</p>
                        <p>Operațiunea: Probleme litigioase</p>
                        <p>Durata: durata necesară soluționării disputei</p>
                        <p>În anumite circumstanțe, este posibil să păstrăm Datele cu Caracter Personal pentru perioade mai lungi de timp pentru a avea o evidență exactă a raporturilor dumneavoastră cu noi în cazul oricăror plângeri ori dacă credem în mod rezonabil că există o perspectivă de litigiu.</p>
                        <p><span style="font-weight:bold;">7. TRANSFERUL DATELOR CU CARACTER PERSONAL</span></p>
                        <p>Putem transfera Datele cu Caracter Personal, în măsura în care acest lucru este necesar, următoarelor categorii de destinatari: furnizori de servicii IT, furnizori de servicii de plată, furnizori de servicii de curierat, furnizori de servicii de contabilitate, furnizori de servicii de marketing, autorități ale statului.</p>
                        <p>Acești destinatari pot fi situați în Uniunea Europeana și/sau în Spațiul Economic European, precum și în afara acestora, inclusiv în țări care nu sunt recunoscute ca asigurând un nivel adecvat de protecție, caz în care transferul Datelor cu Caracter Personal se efectuează doar dacă există garanții adecvate, în conformitate cu legea aplicabilă (precum clauzele contractuale standard emise de Comisia Europeană). Puteți solicita o listă de destinatari din țări terțe, precum și o copie a dispozițiilor convenite care asigură un nivel adecvat de protecție a Datelor cu Caracter Personal.</p>
                        <p><span style="font-weight:bold;">8. SECURITATEA DATELOR CU CARACTER PERSONAL</span></p>
                        <p>Securitatea Datelor dumneavoastră cu Caracter Personal este importantă pentru noi. Prin urmare, Datele dumneavoastră cu Caracter Personal vor fi prelucrate prin aplicarea unor măsuri tehnice și organizatorice rezonabile pentru a le proteja, precum limitarea accesului la Datele cu Caracter Personal, criptarea sau anonimizarea Datelor cu Caracter Personal, stocarea pe medii securizate. Cu toate acestea, în ciuda eforturilor depuse, nu putem garanta întotdeauna eficiența măsurilor de securitate implementate, și prin urmare, nu putem garanta în orice moment securitatea Datele cu Caracter Personal.</p>
                        <p><span style="font-weight:bold;">9. DREPTURILE PRIVIND PRELUCRAREA DATELOR CU CARACTER PERSONAL</span></p>
                        <p><span style="font-weight:bold;">Dreptul de acces:</span> Aveți dreptul de a obține confirmarea de la noi că Datele dumneavoastră cu Caracter Personal sunt prelucrate de noi, precum și informații privind specificul prelucrării precum: scopul, categoriile de Date cu Caracter Personal prelucrate, destinatarii acestora, perioada pentru care sunt păstrate, sursa acestora, dacă le transferăm în străinătate și cum le protejăm, drepturilor dumneavoastră, dreptul de a depune o plângere în fața autorității de supraveghere.</p>
                        <p><span style="font-weight:bold;">Dreptul la rectificare:</span> Aveți posibilitatea de a solicita rectificarea Datelor dumneavoastră cu Caracter Personal, cu condiția să fie respectate cerințele legale aplicabile. În eventualitatea unor erori, după notificare, vom corecta imediat Datele dumneavoastră cu Caracter Personal.</p>
                        <p><span style="font-weight:bold;">Dreptul la ștergere:</span> În anumite cazuri, aveți posibilitatea de a solicita ștergerea Datelor cu Caracter Personal, precum atunci când:</p>
                        <p>(i) acestea nu mai sunt necesare pentru scopurile pentru care le-am colectat și le-am prelucrat;</p>
                        <p>(ii) ați retras consimțământul pentru prelucrarea Datelor cu Caracter Personal și noi nu mai putem prelucra Datele cu Caracter Personal în baza altor temeiuri legale;</p>
                        <p>(iii) Datele cu Caracter Personal sunt prelucrate contrar legii;</p>
                        <p>(iv) dați curs unui drept legal de a vă opune. Nu avem obligația de a ne conforma solicitării dumneavoastră de ștergere în cazul în care prelucrarea Datelor cu Caracter Personal este necesară pentru respectarea unei obligații legale, sau pentru constatarea, exercitarea sau apărarea unui drept în instanță. De asemenea, există și alte circumstanțe în care nu suntem obligați să respectăm această solicitarea de ștergere a Datelor cu Caracter Personal.</p>
                        <p><span style="font-weight:bold;">Restricționarea prelucrării</span>: Puteți solicita să restricționăm prelucrarea Datelor dumneavoastră cu Caracter Personal în următoarele situații:</p>
                        <p>(i) în cazul în care contestați corectitudinea Datelor cu Caracter Personal, pentru o perioadă care ne permite să verificăm exactitatea Datelor cu Caracter Personal în cauză;</p>
                        <p>(ii) în cazul în care prelucrarea este ilegală, și vă opuneți ștergerii Datelor cu Caracter Personal, solicitând în schimb restricționarea utilizării lor;</p>
                        <p>(iii) în cazul în care nu mai avem nevoie de Datele cu Caracter Personal în scopul prelucrării, dar ni le solicitați pentru o acțiune în instanță;</p>
                        <p>(iv) în cazul în care v-ați opus prelucrării, pentru intervalul de timp în care se verifică dacă drepturile noastre legitime ca operator prevalează asupra celor ale persoanei vizate. Putem continua să folosim Datele cu Caracter Personal în urma unei solicitări de restricționare, în cazul în care:</p>
                        <p>(i) avem consimțământul dumneavoastră;</p>
                        <p>(ii) pentru a constata, exercita sau asigura apărarea unui drept în instanță; sau</p>
                        <p>(iii) pentru a proteja drepturile unei alte altei persoane fizice sau juridice.</p>
                        <p><span style="font-weight:bold;">Dreptul la portabilitatea datelor:</span> În măsura în care Datele cu Caracter Personal sunt prelucrate în baza consimțământului dumneavoastră sau pentru executarea contractului și prelucrarea se face prin mijloace automate, aveți dreptul ca Datele dumneavoastră cu Caracter Personal să vă fie furnizate într-un format structurat, utilizat în mod curent și care poate fi citit automat și aveți dreptul de a transmite aceste Date cu Caracter Personal altui operator. Acest drept nu afectează în mod negativ drepturile și libertățile celorlalți.</p>
                        <p><span style="font-weight:bold;">Dreptul la opoziție: </span>În anumite situații, precum atunci când prelucrăm Datele dumneavoastră cu Caracter Personal pe baza unui interes legitim, aveți dreptul de a vă opune prelucrării Datelor dumneavoastră cu Caracter Personal de către noi. În caz de opoziție nejustificată, CREATIV TUB SRL este îndreptățită să prelucreze în continuare Datele cu Caracter Personal. De asemenea, vă puteți opune la prelucrarea Datelor dumneavoastră cu Caracter Personal în scopul trimiterii de mesaje comerciale.</p>
                        <p><span style="font-weight:bold;">Revocarea consimțământului:</span> În măsura în care prelucrăm Datele dumneavoastră cu Caracter Personal în temeiul consimțământului dumneavoastră, puteți revoca oricând consimțământul, fără a afecta legalitatea prelucrării bazate pe consimțământ înainte de retragerea acestuia.</p>
                        <p><span style="font-weight:bold;">Procesul decizional individual automatizat:</span> Aveți dreptul de a nu fi supus unei decizii bazate exclusiv pe prelucrarea automată, inclusiv crearea de profiluri, care produce efecte juridice în privința dumneavoastră sau vă afectează în mod similar într-o măsură semnificativă. Acest drept nu este aplicabil în cazul în care decizia:</p>
                        <p>(i) este necesară pentru încheierea sau executarea unui contract între dumneavoastră și noi;</p>
                        <p>(ii) este autorizată de lege care prevede și garanții adecvate pentru drepturile și libertățile dumneavoastră;</p>
                        <p>(iii) are la bază consimțământul dumneavoastră explicit.</p>
                        <p><span style="font-weight:bold;">Dreptul de a vă adresa autorității de supraveghere: </span>Aveți dreptul de a depune o plângere înaintea Autorității Naționale pentru Supravegherea Prelucrării Datelor cu Caracter Personal („ANSPDCP”) în legătură cu orice încălcare a drepturilor dumneavoastră privind prelucrarea Datelor dumneavoastră cu Caracter Personal. Datele de contact ale ANSPDCP sunt: B-dul G-ral. Gheorghe Magheru 28-30, Sector 1, cod poștal 010336 București, Romania; e-mail: <span style="text-decoration:underline;"><a href="mailto:anspdcp@dataprotection.ro" target="_self">anspdcp@dataprotection.ro</a></span>.</p>
                        <p>Pentru exercitarea drepturilor menționate mai sus, vă rugăm să ne contactați la adresa de e-mail</p>
                        <p><span style="font-weight:bold;">10. CONTACT</span></p>
                        <p>Dacă aveți întrebări sau nelămuriri cu privire la această Politică sau la implementarea acesteia, ne puteți contacta la adresa de email: dpo [at] skyranking.ro, in atentia Responsabilului cu protectia datelor personale.</p>


                        <br><br><br>
                        <h2 class="title text-center" id="politicaCookies">Politica Cookie-uri</h2>
                        <p>Scopul acestei politici de cookies („Politică de Cookies”) este de a informa utilizatorii cu privire la modul în care CREATIV TUB SRL, având sediul în Str. Bucuresti, Nr.216, Magurele, Judetul Ilfov, cod de identificare fiscală RO 33141847, înregistrată la Oficiul Registrului Comerțului sub nr. J23/4428/2020 ("CREATIV TUB SRL", "noi"), utilizează cookies pe site-ul creativtub.ro, („<span style="text-decoration:underline;"><a href="https://gafwebmaster.wixsite.com/creativtub" target="_self">Site-ul</a></span>”).</p>
                        <p>Această Politică de Cookies se completează cu politica de prelucrare a datelor cu caracter personal („Politica de prelucrare a datelor”) și cu termenii și condițiile Site-ului.</p>
                        <p><span style="font-weight:bold;">Despre cookie-uri</span></p>
                        <p>Cookie-urile sunt fișiere text de mici dimensiuni care vor fi stocate pe dispozitivul (computerul, terminalul mobil sau alte echipamente) unui utilizator la momentul accesării Internetului. Cookie-urile au rolul de a asigura utilizatorului o experiență plăcută de navigare a unui website și prin oferirea anumitor funcționalități (precum opțiunile privind limba, salvarea datelor de înregistrare, analizarea navigării) de a îmbunătăți această experiență.</p>
                        <p>Ca regulă, utilizarea cookie-urilor nu implică prelucrarea de date cu caracter personal și, în cele mai multe cazuri, nu identifică personal utilizatorii. Cu toate acestea, dacă utilizarea cookie-urilor au ca rezultat prelucrarea de date cu caracter personal, pentru prelucrarea respectiva devine aplicabilă Politica de prelucrare a datelor.</p>
                        <p><span style="font-weight:bold;">2. Tipuri de cookie-uri și durata de viață</span></p>
                        <p>Cookie-uri de sesiune - cookie-urile ce sunt șterse de pe hard disk imediat după sesiunea ta de navigare.</p>
                        <p>Cookie-uri persistente - cookie-uri ce rămân salvate pe unitatea hard disk a dispozitivului tău și ne permit să recunoaștem dispozitivul în cazul unei vizite ulterioare pe Site-ul nostru.</p>
                        <p>Durata de viață a unui cookie poate varia în mod semnificativ, în funcție de scopul pentru care este plasat. Anumite cookie-uri sunt folosite exclusiv pentru o singură sesiune și sunt șterse odată ce utilizatorul părăsește site-ul, în timp ce alte cookie-uri sunt păstrate și reutilizate de fiecare dată când utilizatorul revine pe site-ul respectiv. Cu toate acestea, cookie-urile pot fi șterse în orice moment prin adaptarea setărilor browser-ului.</p>
                        <p>In functie de browserul Dvs puteti folosi link-urile de mai jos pentru a sterge Cookie-urile:</p> 
                        <ul class="font_8" style="font-size:15px;">
                            <li>
                                <p><span style="text-decoration:underline;"><a href="http://support.mozilla.com/en-US/kb/Enabling%20and%20disabling%20cookies" target="_blank">Cookie settings in Firefox</a></span></p>
                            </li>
                            <li>
                                <p><span style="text-decoration:underline;"><a href="https://support.microsoft.com/en-us/help/17442/windows-internet-explorer-delete-manage-cookies" target="_blank">Cookie settings in Internet Explorer</a></span></p>
                            </li>
                            <li>
                                <p><span style="text-decoration:underline;"><a href="http://www.google.com/support/chrome/bin/answer.py?answer=95647" target="_blank">Cookie settings in Google Chrome</a></span></p>
                            </li>
                            <li>
                                <p><span style="text-decoration:underline;"><a href="http://support.apple.com/kb/PH17191?viewlocale=en_US&amp;locale=en_US" target="_blank">Cookie settings in Safari (OS X)</a></span></p>
                            </li>
                            <li>
                                <p><span style="text-decoration:underline;"><a href="https://support.apple.com/en-us/HT201265" target="_blank">Cookie settings in Safari (iOS)</a></span></p>
                            </li>
                            <li>
                                <p><span style="text-decoration:underline;"><a href="https://support.google.com/chrome/answer/95647?co=GENIE.Platform%3DAndroid&amp;hl=en&amp;oco=0" target="_blank">Cookie settings in Android</a></span></p>
                            </li>
                        </ul>                  

                        <p><span style="font-weight:bold;">3. Cookie-uri plasate de terți</span></p>                        
                        <p>În general, cookie-urile pot fi instalate de către administratorul site-ului accesat de utilizator (așa-numitele cookie-uri proprii) sau de alte site-uri web (așa-numitele module cookie-uri instalate de terți). Această Politică de Cookies nu acoperă utilizarea cookie-urilor de către astfel de terțe părți și pentru mai multe informații despre acele cookie-uri, vă rugăm să accesați politicile lor de cookies.</p>
                        <p><span style="font-weight:bold;">4. Restricționarea și ștergerea cookie-urilor</span></p>
                        <p>Dacă doriți, puteți restricționa sau șterge cookie-urile utilizând setările browser-ului. Puteți refuza doar cookie-urile care nu sunt strict necesare pentru fucționarea Site-ului. De asemenea, în cazul în care setările cookie-urilor restricționate pe dispozitivul dumneavoastră, nu veți mai putea folosi toate funcțiile Site-ului nostru.</p>
                        <p>Pentru a modifica setările browser-ului, puteți accesa secțiunea „Ajutor” din browser-ul dumneavoastră.</p>
                        <p>Puteți afla mai multe detalii despre schimbarea setărilor, accesând următorul link: <span style="text-decoration:underline;"><a href="http://www.allaboutcookies.org/manage-cookies/" target="_blank">http://www.allaboutcookies.org/manage-cookies/</a></span>.</p>
                        <p><span style="font-weight:bold;">5. Categoriile de cookie-urile folosite pe Site</span></p>                  
                        <p>Cookie-urile utilizate pe Site-ul nostru sunt clasificate după cum urmează:</p>                   
                        <p><span style="font-weight:bold;">Cookie-uri esențiale.</span>Cookie-uri funcționale (strict necesare pentru funcționarea Site-ului). Aceste cookie-uri ne permit să controlăm o serie de parametri, cum ar fi memorarea preferințelor utilizatorului privind folosirea cookie-urilor.</p>
                        <p><span style="font-weight:bold;">Cookie-urile de marketing.</span>Aceste cookie-uri sunt utilizate pentru a urmări eficiența publicității pentru a oferi un serviciu mai relevant și pentru a-ți furniza reclame mai adaptate intereselor tale.</p>
                        <p><span style="font-weight:bold;">Cookie-urile funcționale.</span>Cookie-uri pentru sesiuni. Aceste cookie-uri permit utilizatorului să se conecteze la Site fără a-și introduce datele contului.</p>
                        <p><span style="font-weight:bold;">Cookie-urile Analytics/</span>Performanță. Aceste cookie-uri colectează informații despre modul în care utilzați Site-ul nostru.</p>
                        <p>Cookie-uri de analiză. Aceste cookie-uri sunt utilizate pentru a colecta informații agregate despre numărul de vizitatori și despre modul în care utilizează Site-ul.</p>
                        <p><span style="font-weight:bold;">6. Cookie-urile utilizate pe Site sunt următoarele: </span></p>
                        
                        
                        
                        
                        
                        
                        
                        <iframe sandbox="allow-same-origin allow-forms allow-popups allow-scripts allow-pointer-lock" class="_3Xz9Z" title="Embedded Content" name="htmlComp-iframe" width="100%" height="100%" allow="fullscreen" data-src="" src="https://gafwebmaster-wixsite-com.filesusr.com/html/21ebb6_76ccffd2ce331ae425d3b8d5177221eb.html"></iframe>

                        </div>
                </div>
                <!--features_items-->
            </div>
        </div>
    </div>
</section>
@endsection