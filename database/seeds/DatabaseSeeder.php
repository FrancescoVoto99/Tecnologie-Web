<?php

use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
          // \App\Models\User::factory(10)->create();
         DB::table('events')->insert([
             ['nomeEvento' => 'Ancona_Pescara','categoria' => 'Calcio', 
             'dataOra' => '2021-07-21 15:58:00', 'luogo' => 'https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d46256.48781766185!2d13.491182979101564!3d43.56424779999999!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x132d8084e3822f2d%3A0x3ff4d14f21488e41!2sStadio%20del%20Conero!5e0!3m2!1sen!2sit!4v1619618566074!5m2!1sen!2sit',
             'descrizione' => 'jvejcejncedkscjskcdrvrgtbtgnbtgbt
              btrg
              brtgfbrfgbv
              frb
              trfbtrfb
              trfb
              tr',
             'raggiungere' =>'in macchina: cdcececdecedcdc

             in treno:divjejvefkvjfvjfjvf

             in aereo:dhvjhdvjdjdjvdjvdjvcdj',
             'prezzo' => 25,'bigliettiDisponibili' => 500,
             'bigliettiVenduti' => 0,'incassoTotale' => 0,'sconto' => NULL,'insconto' => 0,'regione' => 'Marche','image' => 'ancona.png','admin' => 3,'societa'=>'Eventstore'],
            ['nomeEvento' => 'Alianz Milano-NBV Verona','categoria' => 'Pallavolo', 
             'dataOra' => '2022-07-05 18:00:00', 'luogo' => 'https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d2797.3631068682917!2d9.140047614843647!3d45.48263227910115!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x4786c1a0655d4a4b%3A0xba1196451bed81f!2sAllianz%20Cloud!5e0!3m2!1sit!2sit!4v1619628627777!5m2!1sit!2sit',
             'descrizione' =>'Il giorno 5-07-2022 si disputerà a Milano la partita di super League di pallavolo tra l Alianz Milano e NBV Verona.
             NBV Verona potrebbe avvicinarsi all Alianz Milano in caso di vittoria per la loro situazione in classifica.',
             'raggiungere' =>'COME RAGGIUNGERE IL POSTO:
                In macchina, uscire dall autostrada A1 e proseguire fino Milano centro dove troverà seguenti segnali per arrivare all Alianz Cloud.
                In aereo, atterrare nell aereoporto di Milano e proseguire fino alla stazione della metropolitana, prendere la linea verde e scendere sulla seguente fermata : Alianz Cloud.
                A piedi, prendere la metropolitana (linea verde) fino alla fermata: Alianz Cloud.',
             'prezzo' => 20,'bigliettiDisponibili' => 50000,
             'bigliettiVenduti' => 0,'incassoTotale' => 0,'sconto' => NULL,'insconto' => 0,'regione' => 'Lombardia','image' => 'milano.png','admin' => 3,'societa'=>'Eventstore'],
             ['nomeEvento' => 'Italia-Belgio','categoria' => 'Pallavolo', 
             'dataOra' => '2022-06-19 21:00:00', 'luogo' => 'https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d45879.17589450767!2d12.480655375438406!3d44.053446751914876!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x132cc364df47aaf1%3A0xb3dffc6d5099956d!2sLa%20Casa%20del%20Volley!5e0!3m2!1sit!2sit!4v1622810412739!5m2!1sit!2sit',
             'descrizione' => 'La Nazionale guidata da Davide Mazzanti torna in campo nella “bolla” di Rimini per disputare la VNL e confrontarsi con le migliori squadre al mondo. L’Italia inizierà la sua avventura martedì 25 maggio sfidando la Polonia, per poi incontrare tutte le altre Nazionali nel round-robin con la speranza di passare il turno per giocarsi le medaglie.',
             'raggiungere' =>'"COME RAGGIUNGERE LA CASA DEL VOLLEY:
                In macchina , usciti dall autostrada proseguire verso lo LA CASA DEL VOLLEY.
                In Aereo, atterrare nell aereoporto..
                A piedi, ...',
             'prezzo' => 19,'bigliettiDisponibili' => 5000,
             'bigliettiVenduti' => 0,'incassoTotale' => 0,'sconto' => NULL,'insconto' => 0,'regione' => 'Emilia-Romagna','image' => 'italia-volley-belgio.jpg','admin' => 3,'societa'=>'pallavoloStore'],
        
            ['nomeEvento' => 'Sassuolo-Atalanta','categoria' => 'Calcio', 
             'dataOra' => '2021-07-02 15:00:00', 'luogo' => 'https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d2835.2096187166467!2d10.647284914808438!3d44.71533327909918!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x47801c32dbfe6e5b%3A0xf52ec233179c5eb9!2sMAPEI%20Stadium%20-%20Citt%C3%A0%20del%20Tricolore!5e0!3m2!1sit!2sit!4v1619628318279!5m2!1sit!2sit',
             'descrizione' => 'Il giorno 02-05-2021 si terrà la partita tra Sassuolo e Atalanta.
             l Atalanta proverà a vincere per continuare la striscia positiva di vittorie e per rimanere al 2 posto, ma soprattutto per non far crollare la questione scudetto da parte dell Inter con 5 giornate di anticipo.',
             'raggiungere' =>'COME RAGGIUNGERE LO STADIO MAPEI STADIUM:
                In macchina, uscire dall autostrada e andare verso il centro di sassuolo dove ci saranno cartelli per il MAPEI stadium.
                In aereo, atterrare nell aereoporto più vicino a sassuolo e proseguire fino al MAPEI stadium.
                A piedi, proseguire verso il MAPEI stadium.',
             'prezzo' => 40,'bigliettiDisponibili' => 60000,
             'bigliettiVenduti' => 0,'incassoTotale' => 0,'sconto' => NULL,'insconto' => 0,'regione' => 'Emilia-Romagna','image' => 'sassuolo.jpg','admin' => 3,'societa'=>'Eventstore'],
            ['nomeEvento' => 'Turchia-Italia','categoria' => 'Calcio', 
             'dataOra' => '2022-06-11 21:00:00', 'luogo' => 'https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3039316.5546635943!2d10.21351406249999!3d41.934077!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x132f60bc3db30885%3A0x791c21ce91960617!2sStadio%20Olimpico!5e0!3m2!1sit!2sit!4v1622809468214!5m2!1sit!2sit',
             'descrizione' => 'Nei tornei internazionali la Turchia è sempre stata in bilico fra trionfo e tragedia, senza mezze misure. A questi Europei le aspettative sono alte e in molti la indicano come la possibile outsider più pericolosa. Anche per questo il ct Senol Gunes ci ha tenuto a smorzare le pressioni: «Tutte le nostre avversarie del girone sono sopra di noi nel ranking». L’impressione, però, è che la Turchia abbia tutte le caratteristiche per arrivare lontana: una rosa completa in ogni reparto, un’organizzazione difensiva promettente, talenti che possono svoltare i momenti difficili e un grande leader carismatico come Burak Yilmaz che spingerà tutti a giocare in modo entusiasta e disperato. L’Italia arriva con legittime aspettative, ma difficilmente poteva pescare un avversario peggiore per iniziare il proprio cammino.',
             'raggiungere' =>'"COME RAGGIUNGERE IL PALATRENTO:
                In macchina , usciti dall autostrada proseguire verso lo Stadio Olimpico.
                In Aereo, atterrare nell aereoporto..
                A piedi, ...',
             'prezzo' => 21,'bigliettiDisponibili' => 50000,
             'bigliettiVenduti' => 0,'incassoTotale' => 0,'sconto' => NULL,'insconto' => 0,'regione' => 'Lazio','image' => 'Tuekey_Italia.jpeg','admin' => 3,'societa'=>'footballStore'],
            
             ['nomeEvento' => 'Trento-Brindisi','categoria' => 'Basket', 
             'dataOra' => '2021-07-12 18:00:00', 'luogo' => 'https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d2769.503072446205!2d11.120962714869584!3d46.04106297911205!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x4782740f806cf469%3A0xd7bfa432c7330100!2sBLM%20Group%20Arena!5e0!3m2!1sit!2sit!4v1619629042533!5m2!1sit!2sit',
             'descrizione' => 'Dieci casi di positività tra giocatori e staff della Happy Casa Brindisi, gli ultimi emersi dai tamponi eseguiti ieri, 19 aprile, hanno indotto la Asl competente a fermare la squadra che è in lotta per il primo posto in serie A e che di sicuro non potrà giocare domenica prossima in campionato, a Trento, per la penultima giornata di campionato. La giornata si recupererà il 12-05-2021 solamente se almeno la metà delle persone contagiate saranno negativizzate.',
             'raggiungere' =>'"COME RAGGIUNGERE IL PALATRENTO:
                In macchina , usciti dall autostrada proseguire verso il centro di trento e seguire i cartelli sottostanti.
                In Aereo, atterrare nell aereoporto..
                A piedi, ...',
             'prezzo' => 30,'bigliettiDisponibili' => 30000,
             'bigliettiVenduti' => 0,'incassoTotale' => 0,'sconto' => NULL,'insconto' => 0,'regione' => ' Trentino-Alto Adige','image' => 'trento.png','admin' => 3,'societa'=>'Eventstore'],
             
             ['nomeEvento' => 'Italia-Grecia','categoria' => 'Basket', 
             'dataOra' => '2022-09-01 18:00:00', 'luogo' => 'https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d44822.113059414565!2d9.107060979101568!3d45.40163460000001!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x4786c3087f24ab5d%3A0x6cbf33cb191a7f9b!2sMediolanum%20Forum!5e0!3m2!1sit!2sit!4v1622811114417!5m2!1sit!2sit',
                 'descrizione' => 'Si è svolta presso la Verti Music Hall di Berlino, in Germania, la cerimonia del sorteggio dei gironi di EuroBasket 2022: l’Italia, inserita nel gruppo C, giocherà a Milano con Grecia, Croazia, Ucraina, Gran Bretagna e Estonia. Passano alla fase finale le prime quattro squadre ed è un girone sicuramente molto complesso perché ci sono due formazioni tradizionalmente ostiche come la Croazia (che nel 2016 ci sbattè fuori a Torino qualificandosi per l’Olimpiade di Rio) e la Grecia di Giannis Antetokounmpo, stella Nba di Milwaukee. Per la qualificazione alla fase finale non ci sarà alcun problema, ma visto che poi sarà ad incroci con gli altri gironi sarà fondamentale chiudere nelle prime due posizioni. Non semplice, ma alla portata.',
                 'raggiungere' =>'"COME RAGGIUNGERE IL MEDIOLANUM FORUM:
                In macchina , usciti dall autostrada proseguire verso il Mediolanum Forum.
                In Aereo, atterrare nell aereoporto..
                A piedi, ...',
             'prezzo' => 25,'bigliettiDisponibili' => 10000,
             'bigliettiVenduti' => 0,'incassoTotale' => 0,'sconto' => NULL,'insconto' => 0,'regione' => 'Lombardia','image' => 'grecia-italia-tv.png','admin' => 3,'societa'=>'basketStore'],
             
        ]);
        DB::table('users')->insert([
            ['name' => 'Alex', 'surname' => 'Verdi', 'email' => 'alex@verdi.it', 'username' => 'alexalex',
                'password' => Hash::make('alexalex'), 'role' => 'amm','created_at' => date("Y-m-d H:i:s"),
                'updated_at' => date("Y-m-d H:i:s"),'societa'=>null],
            ['name' => 'Marco', 'surname' => 'Bianchi', 'email' => 'marco@bianchi.it', 'username' => 'useruser',
                'password' => Hash::make('useruser'), 'role' => 'user', 'created_at' => date("Y-m-d H:i:s"),
                'updated_at' => date("Y-m-d H:i:s"),'societa'=>null],
            ['name' => 'Mario', 'surname' => 'Minotti', 'email' => 'mario@bianchi.it', 'username' => 'mariomario',
                'password' => Hash::make('mariomario'), 'role' => 'user', 'created_at' => date("Y-m-d H:i:s"),
                'updated_at' => date("Y-m-d H:i:s"),'societa'=>null],
            ['name' => 'giulio', 'surname' => 'richetti', 'email' => 'mario@bianchi.it', 'username' => 'giuliogiulio',
                'password' => Hash::make('giuliogiulio'), 'role' => 'user', 'created_at' => date("Y-m-d H:i:s"),
                'updated_at' => date("Y-m-d H:i:s"),'societa'=>null],
            ['name' => 'Mario', 'surname' => 'Rossi', 'email' => 'mario@rossi.it', 'username' => 'adminadmin',
                'password' => Hash::make('adminadmin'), 'role' => 'admin', 'created_at' => date("Y-m-d H:i:s"),
                'updated_at' => date("Y-m-d H:i:s"),'societa'=>'Eventstore'],
            ['name' => 'Gianluca', 'surname' => 'ciarlariello', 'email' => 'gianluca@verdi.it', 'username' => 'giannigianni',
                'password' => Hash::make('giannigianni'), 'role' => 'admin','created_at' => date("Y-m-d H:i:s"),
                'updated_at' => date("Y-m-d H:i:s"),'societa'=>'footballStore'],
            ['name' => 'Gianmarco', 'surname' => 'Di Renzo', 'email' => 'Gianmarco@verdi.it', 'username' => 'giangian',
                'password' => Hash::make('giangian'), 'role' => 'admin','created_at' => date("Y-m-d H:i:s"),
                'updated_at' => date("Y-m-d H:i:s"),'societa'=>'pallavoloStore'],
            ['name' => 'Francesco', 'surname' => 'Voto', 'email' => 'Francesco@verdi.it', 'username' => 'votovoto',
                'password' => Hash::make('votovoto'), 'role' => 'admin','created_at' => date("Y-m-d H:i:s"),
                'updated_at' => date("Y-m-d H:i:s"),'societa'=>'basketStore']
        ]);
        DB::table('faq')->insert([
            ['domande' => 'Qual è la figura professionale più adatta a occuparsi dell’organizzazione?',
                
                'risposte' =>'I manager e i professionisti che già prima si occupavano dell’organizzazione
                di eventi sono sicuramente le figure aziendali più indicate.
                Tuttavia, cambiando completamente la cornice dell’incontro e rendendosi necessario l’utilizzo
                di strumenti tecnologici sarebbe bene affiancargli una figura più tecnica come un IT manager,
                che abbia dimestichezza con l’utilizzo di strumenti di comunicazione digitale.
                Il consiglio è di affiancare sempre al team aziendale interno una squadra esterna di professionisti
                del settore che possano supportare le figure aziendali nel lavoro di organizzazione del meeting online
                che, come abbiamo visto, è più complesso di quanto sembra.',]
       ]);
        DB::table('tickets')->insert([
            ['quantita' => 1, 'prezzo' => 30,'idevento' => 1,'idutente' => 1],
             ]);
    }
}
