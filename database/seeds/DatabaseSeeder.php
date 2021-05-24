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
             'bigliettiVenduti' => 0,'incassoTotale' => 0,'sconto' => NULL,'insconto' => 0,'regione' => 'Marche','image' => 'ancona.png','admin' => 3],
            ['nomeEvento' => 'Alianz Milano-NBV Verona','categoria' => 'Pallavolo', 
             'dataOra' => '2021-07-05 18:00:00', 'luogo' => 'https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d2797.3631068682917!2d9.140047614843647!3d45.48263227910115!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x4786c1a0655d4a4b%3A0xba1196451bed81f!2sAllianz%20Cloud!5e0!3m2!1sit!2sit!4v1619628627777!5m2!1sit!2sit',
             'descrizione' =>'Il giorno 5-05-2021 si disputerà a Milano la partita di super League di pallavolo tra l Alianz Milano e NBV Verona.
             NBV Verona potrebbe avvicinarsi all Alianz Milano in caso di vittoria per la loro situazione in classifica.',
             'raggiungere' =>'COME RAGGIUNGERE IL POSTO:
                In macchina, uscire dall autostrada A1 e proseguire fino Milano centro dove troverà seguenti segnali per arrivare all Alianz Cloud.
                In aereo, atterrare nell aereoporto di Milano e proseguire fino alla stazione della metropolitana, prendere la linea verde e scendere sulla seguente fermata : Alianz Cloud.
                A piedi, prendere la metropolitana (linea verde) fino alla fermata: Alianz Cloud.',
             'prezzo' => 20,'bigliettiDisponibili' => 50000,
             'bigliettiVenduti' => 0,'incassoTotale' => 0,'sconto' => NULL,'insconto' => 0,'regione' => 'Lombardia','image' => 'milano.png','admin' => 3],
            ['nomeEvento' => 'Sassuolo-Atalanta','categoria' => 'Calcio', 
             'dataOra' => '2021-07-02 15:00:00', 'luogo' => 'https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d2835.2096187166467!2d10.647284914808438!3d44.71533327909918!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x47801c32dbfe6e5b%3A0xf52ec233179c5eb9!2sMAPEI%20Stadium%20-%20Citt%C3%A0%20del%20Tricolore!5e0!3m2!1sit!2sit!4v1619628318279!5m2!1sit!2sit',
             'descrizione' => 'Il giorno 02-05-2021 si terrà la partita tra Sassuolo e Atalanta.
             l Atalanta proverà a vincere per continuare la striscia positiva di vittorie e per rimanere al 2 posto, ma soprattutto per non far crollare la questione scudetto da parte dell Inter con 5 giornate di anticipo.',
             'raggiungere' =>'COME RAGGIUNGERE LO STADIO MAPEI STADIUM:
                In macchina, uscire dall autostrada e andare verso il centro di sassuolo dove ci saranno cartelli per il MAPEI stadium.
                In aereo, atterrare nell aereoporto più vicino a sassuolo e proseguire fino al MAPEI stadium.
                A piedi, proseguire verso il MAPEI stadium.',
             'prezzo' => 40,'bigliettiDisponibili' => 60000,
             'bigliettiVenduti' => 0,'incassoTotale' => 0,'sconto' => NULL,'insconto' => 0,'regione' => 'Emilia-Romagna','image' => 'sassuolo.jpg','admin' => 3],
            ['nomeEvento' => 'Trento-Brindisi','categoria' => 'Basket', 
             'dataOra' => '2021-07-12 18:00:00', 'luogo' => 'https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d2769.503072446205!2d11.120962714869584!3d46.04106297911205!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x4782740f806cf469%3A0xd7bfa432c7330100!2sBLM%20Group%20Arena!5e0!3m2!1sit!2sit!4v1619629042533!5m2!1sit!2sit',
             'descrizione' => 'Dieci casi di positività tra giocatori e staff della Happy Casa Brindisi, gli ultimi emersi dai tamponi eseguiti ieri, 19 aprile, hanno indotto la Asl competente a fermare la squadra che è in lotta per il primo posto in serie A e che di sicuro non potrà giocare domenica prossima in campionato, a Trento, per la penultima giornata di campionato. La giornata si recupererà il 12-05-2021 solamente se almeno la metà delle persone contagiate saranno negativizzate.',
             'raggiungere' =>'"COME RAGGIUNGERE IL PALATRENTO:
                In macchina , usciti dall autostrada proseguire verso il centro di trento e seguire i cartelli sottostanti.
                In Aereo, atterrare nell aereoporto..
                A piedi, ...',
             'prezzo' => 30,'bigliettiDisponibili' => 30000,
             'bigliettiVenduti' => 0,'incassoTotale' => 0,'sconto' => NULL,'insconto' => 0,'regione' => ' Trentino-Alto Adige','image' => 'trento.png','admin' => 3],
        ]);
        DB::table('users')->insert([
            ['name' => 'Alex', 'surname' => 'Verdi', 'email' => 'alex@verdi.it', 'username' => 'alexalex',
                'password' => Hash::make('alexalex'), 'role' => 'user','created_at' => date("Y-m-d H:i:s"),
                'updated_at' => date("Y-m-d H:i:s")],
            ['name' => 'Marco', 'surname' => 'Bianchi', 'email' => 'marco@bianchi.it', 'username' => 'useruser',
                'password' => Hash::make('useruser'), 'role' => 'user', 'created_at' => date("Y-m-d H:i:s"),
                'updated_at' => date("Y-m-d H:i:s")],
            ['name' => 'Mario', 'surname' => 'Rossi', 'email' => 'mario@rossi.it', 'username' => 'adminadmin',
                'password' => Hash::make('adminadmin'), 'role' => 'admin', 'created_at' => date("Y-m-d H:i:s"),
                'updated_at' => date("Y-m-d H:i:s")]
        ]);
    }
}
