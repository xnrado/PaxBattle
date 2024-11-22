<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class ItemsTableSeeder extends Seeder
{

    /**
     * Auto generated seed file
     *
     * @return void
     */
    public function run()
    {


        \DB::table('items')->delete();

        \DB::table('items')->insert(array (
            0 =>
            array (
                'id' => 1,
                'name' => 'Talar',
                'description' => 'Niezły z niego gość',
                'emoji' => '<:Talar:1259251488585416765>',
                'image' => 'https://i.imgur.com/4MFkrcH.png',
                'color' => '000000',
                'type' => 0,
                'created_at' => now(),
                'updated_at' => now(),
            ),
            1 =>
            array (
                'id' => 2,
                'name' => 'Talary',
                'description' => 'Uniwersalna waluta, w której każdy szanujący się władca może ocenić swój majątek. Generowany przez podatki, handel oraz manufaktury jest używany jako pieniądz na kontynencie Zeonicy.',
                'emoji' => '<:Talary:1259245998698659850>',
                'image' => 'https://i.imgur.com/oAOGXz3.png',
                'color' => 'BF9000',
                'type' => 0,
                'created_at' => now(),
                'updated_at' => now(),
            ),
            2 =>
            array (
                'id' => 3,
                'name' => 'Żywność',
                'description' => 'Zaopatrzenie złożone z mięsa, pieczywa i warzyw, będące podstawą każdej zdrowej diety i logistyki wojennej. Produkowany przez farmy pozwala na rekrutowanie i utrzymywanie jednostek.',
                'emoji' => '<:Zywnosc:1259245985272561815>',
                'image' => 'https://i.imgur.com/1u9S4ib.png',
                'color' => 'CC4125',
                'type' => 0,
                'created_at' => now(),
                'updated_at' => now(),
            ),
            3 =>
            array (
                'id' => 4,
                'name' => 'Drewno',
                'description' => 'Podstawowy, organiczny materiał konsturkcyjny i grzewczy. Wytwarzany przez tartaki służy ludzkości do tworzenia ognisk, narzędzi i budowli.',
                'emoji' => '<:Drewno:1259246014292820058>',
                'image' => 'https://i.imgur.com/bd4dU5V.png',
                'color' => '6AA84F',
                'type' => 0,
                'created_at' => now(),
                'updated_at' => now(),
            ),
            4 =>
            array (
                'id' => 5,
                'name' => 'Kopaliny',
                'description' => 'Twardy, mineralny budulec używany przez budowniczych oraz architektów. Wydobywany w kopalniach pozwala wytwarzać budynki, fortyfikacje oraz narzędzia. ',
                'emoji' => '<:Kamien:1259246006990536764>',
                'image' => 'https://i.imgur.com/vISmNcS.png',
                'color' => '3D85C6',
                'type' => 0,
                'created_at' => now(),
                'updated_at' => now(),
            ),
            5 =>
            array (
                'id' => 6,
                'name' => 'Obsydian',
                'description' => 'Ciemny, szklisty kamień pochodzenia wulkanicznego. Antyczne wykorzystywany do produkcji ostrzy wciąż nadaje się do swej funkcji. Mimo niemożności formowania go przez kowali, zadaje wyjątkowo czyste rany, cenione przez chirurgów i cyrulików. ',
                'emoji' => '<:Obsydian:1260205435571408916>',
                'image' => 'https://i.imgur.com/yVjDRcY.png',
                'color' => '26172e',
                'type' => 1,
                'created_at' => now(),
                'updated_at' => now(),
            ),
            6 =>
            array (
                'id' => 7,
                'name' => 'Smoła',
                'description' => 'Czarna, oleista substancja, która sprawdza się świetnie jako spoiwo oraz izolacja. Jest łatwopalna, jednak bardzo użyteczna przy spajaniu desek, przypalaniu zbrodniarzy i utwardzaniu dróg.',
                'emoji' => '<:Smola:1260205458891870249>',
                'image' => 'https://i.imgur.com/mtn3fyJ.png',
                'color' => '2b2424',
                'type' => 1,
                'created_at' => now(),
                'updated_at' => now(),
            ),
            7 =>
            array (
                'id' => 8,
                'name' => 'Tran',
                'description' => 'Olej z wątroby wielkiej ryby nieraz uratował zdrowie marynarzy. Towar ten znany jest nie tylko ze swoich medycznych właściwości - jest także doskonałym paliwem, używanym szeroko poprzez lampy oliwne.',
                'emoji' => '<:Tran:1260205463484497942>',
                'image' => 'https://i.imgur.com/3VM151x.png',
                'color' => '393327',
                'type' => 1,
                'created_at' => now(),
                'updated_at' => now(),
            ),
            8 =>
            array (
                'id' => 9,
                'name' => 'Ołów',
                'description' => 'Miękki, lekki i szarawy metal, znakomicie nadający się do obróbki kowalskiej oraz odlewania. Jego zalety pozwalają mu stanowić budulec wielu przedmiotów użytku powszedniego. ',
                'emoji' => '<:Olow:1260205436506738733>',
                'image' => 'https://i.imgur.com/0sPz0w5.png',
                'color' => '414141',
                'type' => 1,
                'created_at' => now(),
                'updated_at' => now(),
            ),
            9 =>
            array (
                'id' => 10,
                'name' => 'Rtęć',
                'description' => 'Metal, który jako magiczny wyjątek, jest w warunkach większości laboratoriów płynny. Przypisuje się mu alchemiczne właściwości i od zarania dziejów stosuje się go do mnogości praktyk naukowych.',
                'emoji' => '<:Rtec:1260205448523546635>',
                'image' => 'https://i.imgur.com/L2PSY9y.png',
                'color' => '842de8',
                'type' => 1,
                'created_at' => now(),
                'updated_at' => now(),
            ),
            10 =>
            array (
                'id' => 11,
                'name' => 'Brąz',
                'description' => 'Materiał, który zasłynął ze swojej użyteczności przez technikę odlewu. Dzwony, pomniki czy nawet prototypowe armaty kłaniają się przed tym wybitnym budulcem.',
                'emoji' => '<:Braz:1260205404898463744>',
                'image' => 'https://i.imgur.com/W44Z8uu.png',
                'color' => '91660e',
                'type' => 1,
                'created_at' => now(),
                'updated_at' => now(),
            ),
            11 =>
            array (
                'id' => 12,
                'name' => 'Szafran',
                'description' => 'Diabelnie cenny kwiat, występujący w ciepłych, wilgotnych stronach. Wykorzystuje się go w arkanach barwnictwa, perfumerii oraz kulinarii. Przyprawa ta dodaje goryczy oraz prestiżu.',
                'emoji' => '<:Szafran:1260205461358252176>',
                'image' => 'https://i.imgur.com/aU1tRWZ.png',
                'color' => '7f1531',
                'type' => 1,
                'created_at' => now(),
                'updated_at' => now(),
            ),
            12 =>
            array (
                'id' => 13,
                'name' => 'Cynamon',
                'description' => 'Charakterystyczne, rudawe zwoje kory wonnego drzewa, które używa się szeroko w różnych daniach i napojach przez rozgrzewające właściwości. Ceniony przez kucharzy i alchemików.',
                'emoji' => '<:Cynamon:1260205406211276870>',
                'image' => 'https://i.imgur.com/S6LaGM4.png',
                'color' => '865f28',
                'type' => 1,
                'created_at' => now(),
                'updated_at' => now(),
            ),
            13 =>
            array (
                'id' => 14,
                'name' => 'Opium',
                'description' => 'Pozyskiwany z makówek narkotyk, który koi ból oraz uzależnia. Nie wymaga do uprawy dobrej gleby, a przez prostotę produkcji jest dość rozpoznawalnym specyfikiem.',
                'emoji' => '<:Opium:1260205438084055080>',
                'image' => 'https://i.imgur.com/X3jW502.png',
                'color' => '8ae289',
                'type' => 1,
                'created_at' => now(),
                'updated_at' => now(),
            ),
            14 =>
            array (
                'id' => 15,
                'name' => 'Cytrusy',
                'description' => 'Kwaśnawe, acz błogosławione przez marynarzy owoce, które zapobiegają szkorbutowi. Przez soczyste pomarańcze i cytryny niejeden żeglarz wciąż może pochwalić się pełnym uśmiechem.',
                'emoji' => '<:Cytrusy:1260205421256380517>',
                'image' => 'https://i.imgur.com/kuKB78K.png',
                'color' => 'cac925',
                'type' => 1,
                'created_at' => now(),
                'updated_at' => now(),
            ),
            15 =>
            array (
                'id' => 16,
                'name' => 'Słonie',
                'description' => 'Majestatyczne istoty, mające w swoim arsenale twardą skórę, potężne kościane ciosy, ogromne uszy oraz długie, niezgrabne trąby. Oswojone mogą być wielką pomocą dla ludzi, którym nie braknie odwagi i wyobraźni, aby ich użyć.',
                'emoji' => '<:Slonie:1260205451040260176>',
                'image' => 'https://i.imgur.com/NatQ1ii.png',
                'color' => '8d748d',
                'type' => 1,
                'created_at' => now(),
                'updated_at' => now(),
            ),
            16 =>
            array (
                'id' => 17,
                'name' => 'Barwniki',
                'description' => 'Mnogość pigmentów, proszków i olejków, których zadaniem jest uczynienie z szarej tkaniny istnego potoku barw. Stosowane przez sukienników, bywają czasem przez swą rzadkość niebagatelnie drogie.',
                'emoji' => '<:Barwniki:1260205402348326943>',
                'image' => 'https://i.imgur.com/d8lKpZf.png',
                'color' => 'ca17ca',
                'type' => 1,
                'created_at' => now(),
                'updated_at' => now(),
            ),
            17 =>
            array (
                'id' => 18,
                'name' => 'Marmur',
                'description' => 'Szlachetny, gładki biały kamień, który służy idealnie do wydobywania piękna za pomocą dłuta. Mistrzowie rzeźby cenią jego gracje i chętnie ozdabiają nim świat, tworząc niepowtarzalne cuda.',
                'emoji' => '<:Marmur:1260205425257615451>',
                'image' => 'https://i.imgur.com/9OwnETa.png',
                'color' => 'cacaca',
                'type' => 1,
                'created_at' => now(),
                'updated_at' => now(),
            ),
            18 =>
            array (
                'id' => 19,
                'name' => 'Jadeit',
                'description' => 'Zielonkawy, dostojny kryształ, którego kolor jest ucieleśnieniem szlachetności życia. Jest wydobywany w ciepłych okolicach i służy głównie za wyznacznik luksusu.',
                'emoji' => '<:Jadeit:1260205424175611914>',
                'image' => 'https://i.imgur.com/i0lrobd.png',
                'color' => '17c638',
                'type' => 1,
                'created_at' => now(),
                'updated_at' => now(),
            ),
            19 =>
            array (
                'id' => 20,
                'name' => 'Srebro',
                'description' => 'Szlachetny metal, którego barwa napomina o jego wartości. Przez swoją unikatowość uniwersalnie jest on symbolem zamożności. Używany do tworzenia biżuterii, odzdób oraz ornamentów.',
                'emoji' => '<:Srebro:1260205460145832008>',
                'image' => 'https://i.imgur.com/MP2YEB2.png',
                'color' => 'd4d49f',
                'type' => 1,
                'created_at' => now(),
                'updated_at' => now(),
            ),
            20 =>
            array (
                'id' => 21,
                'name' => 'Siarka',
                'description' => 'Składnik, który zdaniem jego wydobywców pachnie piekłem. Żółta i przeraźliwie pachnąca materia spala się niesamowicie szybko, przez co służy w wielu eksperymentach alchemików i inżynierów.',
                'emoji' => '<:Siarka:1260205449920249896>',
                'image' => 'https://i.imgur.com/CwMGsYa.png',
                'color' => 'afaf47',
                'type' => 1,
                'created_at' => now(),
                'updated_at' => now(),
            ),
            21 =>
            array (
                'id' => 22,
                'name' => 'Futra',
                'description' => 'Pokrycia zwierząt, które przez myśliwych i garbarzy, zmieniają prędko właściciela. Pozwalają się ogrzać lub też okazać swój status. Szczególnie przydatne w regionach narażonych na brutalną zimę.',
                'emoji' => '<:Futra:1260205422485438566>',
                'image' => 'https://i.imgur.com/cl24G1d.png',
                'color' => '63461d',
                'type' => 1,
                'created_at' => now(),
                'updated_at' => now(),
            ),
            22 =>
            array (
                'id' => 23,
                'name' => 'Miód',
                'description' => 'Owoc pracy pszczół, powszechnie uznawany za szczyt dostatku. Słodki, lepiący się towar nadaje się do tworzenia przekąsek, napitków oraz innych cudów sztuk kulinarnych.',
                'emoji' => '<:Miod:1260205434413908010>',
                'image' => 'https://i.imgur.com/LjarWEe.png',
                'color' => 'f1660e',
                'type' => 1,
                'created_at' => now(),
                'updated_at' => now(),
            ),
            23 =>
            array (
                'id' => 24,
                'name' => 'Porcelana',
                'description' => 'Specyficzny wykonana ceramika, najszlachetniejsza ze wszystkich dzieł garncarstwa. Biała czy barwiona zawsze jest oznaką elegancji oraz zamożności. Służy głównie wykonywaniu przedmiotów codziennego użytku.',
                'emoji' => '<:Porcelana:1260205446975717446>',
                'image' => 'https://i.imgur.com/GsHKH59.png',
                'color' => '3cb8a6',
                'type' => 1,
                'created_at' => now(),
                'updated_at' => now(),
            ),
            24 =>
            array (
                'id' => 25,
                'name' => 'Bawełna',
                'description' => 'Roślinna wełna, uprawiana w ciepłym blasku południa, pomaga wytwarzać niesamowite ilości ubrań. Odpowiednio uprawiana jest w stanie ubrać pół narodu i zachwycić niejednego krawca.',
                'emoji' => '<:Bawelna:1260205403715801130>',
                'image' => 'https://i.imgur.com/9aEVHgc.png',
                'color' => '8dd0d0',
                'type' => 1,
                'created_at' => now(),
                'updated_at' => now(),
            ),
            25 =>
            array (
                'id' => 26,
                'name' => 'Tytoń',
                'description' => 'Wysokawy krzak o rozłożystych liściach. Medycy jak i pospół cenią jego właściwości pobudzające i prozdrowotne we wszelkiej formie - wonnych oparów, liści do żucia czy nawet proszków do wciągania nosem. Oczyszcza nozdrza oraz umysł.',
                'emoji' => '<:Tyton:1260205471504269342>',
                'image' => 'https://i.imgur.com/smM40Hn.png',
                'color' => '635705',
                'type' => 1,
                'created_at' => now(),
                'updated_at' => now(),
            ),
            26 =>
            array (
                'id' => 27,
                'name' => 'Smocze Łzy',
                'description' => 'Nieregularne perły, o krwistym zabarwieniu, ekskluzywne dla zatok południowego Imgastu. Po wysuszeniu stają się niebezpieczne - każde drobne uszkodzenie może wywołać wybuch porównywalny do wypalenia kilku łyżek czarnego prochu.',
                'emoji' => '<:Smocze_lzy:1260300475354583262>',
                'image' => 'https://i.imgur.com/smM40Hn.png',
                'color' => 'cc0a2c',
                'type' => 2,
                'created_at' => now(),
                'updated_at' => now(),
            ),
            27 =>
            array (
                'id' => 28,
                'name' => 'Serce Puszczy',
                'description' => 'Piękny, srebrzysty kwiat, który zdaje się nigdy nie usychać. Jest delikatny i zadziwiająco wonny. Alchemicy mają co do jego zdolności wiele teorii, jednak jego pozyskanie graniczy z cudem. ',
                'emoji' => '<:Serce_puszczy:1260300472615702649>',
                'image' => 'https://i.imgur.com/smM40Hn.png',
                'color' => '61156a',
                'type' => 2,
                'created_at' => now(),
                'updated_at' => now(),
            ),
            28 =>
            array (
                'id' => 29,
                'name' => 'Anyż Senny',
                'description' => 'Przyprawa o kształcie zdrewniałych gwiazdek, która od wieków jest w zainteresowaniu wszelkich znachorów. Dym powstały po spaleniu kilku gwiazdek jest w stanie uśpić człowieka na co najmniej cztery godziny. Nadmiar potrafi przynieść efekty uboczne, w szcze',
                'emoji' => '<:Anyz_senny:1260300465141186636> ',
                'image' => 'https://i.imgur.com/smM40Hn.png',
                'color' => 'd79e06',
                'type' => 2,
                'created_at' => now(),
                'updated_at' => now(),
            ),
            29 =>
            array (
                'id' => 30,
                'name' => 'Skorupy A\'Tuinów',
                'description' => 'Skorupy ściągane z Wielkich Żółwi. Jako ciężkie acz całkiem opływowe płyty od wieków używane są do tworzenia pancerzy oraz osłaniania kadłubów statków.',
                'emoji' => '<:Skorupy_ATuinow:1260300473894830100>',
                'image' => 'https://i.imgur.com/smM40Hn.png',
                'color' => '095b51',
                'type' => 2,
                'created_at' => now(),
                'updated_at' => now(),
            ),
            30 =>
            array (
                'id' => 31,
                'name' => 'Beton Wulkaniczny',
                'description' => 'Materiał znany wieki temu ludom żyjącym wokół gór Jonutai. Wzbogacany wulkanicznym popiołem cement jest nieporównywalnie trwalszy. Tajemnica jego produkcji została zapomniana, jednak niejednokrotnie podejmowane są próby odtworzenia pradawnej receptury.',
                'emoji' => '<:Beton_wulkaniczny:1260300466886017187>',
                'image' => 'https://i.imgur.com/smM40Hn.png',
                'color' => '6b3e3f',
                'type' => 2,
                'created_at' => now(),
                'updated_at' => now(),
            ),
            31 =>
            array (
                'id' => 32,
                'name' => 'Żywe Szkło',
                'description' => 'Materiał o fakturze szkła, który czując żywą istotę, brnie do niej wolnym rozrostem. Rozrost jest szczególnie mocny w nocy, sam zaś kryształ wydaje się podobny w zachowaniu grzybom, co czyni jego naturę tym mniej oczywistą dla ciekawskiej ludzkości.',
                'emoji' => '<:Zywe_szklo:1260300476662939768>',
                'image' => 'https://i.imgur.com/smM40Hn.png',
                'color' => '1bf98e',
                'type' => 2,
                'created_at' => now(),
                'updated_at' => now(),
            ),
            32 =>
            array (
                'id' => 33,
                'name' => 'Nocna Mgła',
                'description' => 'Kryształy przypominające siarczki, które przy kontakcie z wodą powodują niesamowite kłębowisko pary. Dym unoszący się z kryształów podczas ich rozpuszczania jest chłodny i gęsty, skutecznie ograniczając wizję.',
                'emoji' => '<:Nocna_mgla:1260300471134982154>',
                'image' => 'https://i.imgur.com/smM40Hn.png',
                'color' => '1e1d35',
                'type' => 2,
                'created_at' => now(),
                'updated_at' => now(),
            ),
            33 =>
            array (
                'id' => 34,
                'name' => 'Kamienie Żniwne',
                'description' => 'Menhiry wykonane z nietypowego, wyżłobionego materiału, często obrośnięte mchem. Cenione przez chłopów z racji na nietypową właściwość wzmagania roślin do szybszego, bardziej urodzajnego wzrostu. Odstraszają jednak większość zwierząt, co rolnicy także uzn',
                'emoji' => '<:Kamienie_zniwne:1260300468345897143>',
                'image' => 'https://i.imgur.com/smM40Hn.png',
                'color' => '31cf00',
                'type' => 2,
                'created_at' => now(),
                'updated_at' => now(),
            ),
            34 =>
            array (
                'id' => 35,
                'name' => 'Kondut',
                'description' => 'Metal o wysokiej czystości, będący doskonałym przewodnikiem ciepła. Nabiera temperatury bardzo szybko, jednak oddaje ją powoli. W podobie do złota jest nieco miękki, a jego barwa przypomina przepalony fiolet. Często współdzieli złoża z cynkiem.',
                'emoji' => '<:Kondut:1260300469612314908>',
                'image' => 'https://i.imgur.com/smM40Hn.png',
                'color' => '3023ae',
                'type' => 2,
                'created_at' => now(),
                'updated_at' => now(),
            ),
            35 =>
            array (
                'id' => 36,
                'name' => 'Konie',
                'description' => 'Najlepsi przyjaciele człowieka, którzy niosą jego pługi, toboły, wojny i półdupki na swoich własnych plecach. Wymagają do utrzymania nieco żywności, służą głównie kawalerii.',
                'emoji' => '<:Konie:1259254606341476413> ',
                'image' => 'https://i.imgur.com/yPt1VRS.png',
                'color' => '000000',
                'type' => 0,
                'created_at' => now(),
                'updated_at' => now(),
            ),
            36 =>
            array (
                'id' => 37,
                'name' => 'Węgiel',
                'description' => 'Czarny skarb, który skrywa w sobie wiele energii. Zasila piece każdej maści, umożliwiając przetrwanie zimnych nocy oraz kucie zaawansowanych technicznie materiałów, np żelaza i stali.',
                'emoji' => '<:Wegiel:1259254512447651930> ',
                'image' => 'https://i.imgur.com/yPt1VRS.png',
                'color' => '000000',
                'type' => 0,
                'created_at' => now(),
                'updated_at' => now(),
            ),
            37 =>
            array (
                'id' => 38,
                'name' => 'Liny',
                'description' => 'Rzemyki, cumy, sznurówki i inne tkaniny służące do łączenia ze sobą rzeczy w małej i dużej skali. Szczególnie użyteczne w produkcji maszyn i okrętów.',
                'emoji' => '<:Liny:1259254591023743097> ',
                'image' => 'https://i.imgur.com/yPt1VRS.png',
                'color' => '000000',
                'type' => 0,
                'created_at' => now(),
                'updated_at' => now(),
            ),
            38 =>
            array (
                'id' => 39,
                'name' => 'Cegły',
                'description' => 'Graniastosłupy z gliny i ludzkiego geniuszu, używane do budowy największych cudów ludzkiej architektury. Przydatne przy budowaniu i rozwijaniu konstrukcji zaawansowanych technicznie.',
                'emoji' => '<:Cegly:1259246021746229248>',
                'image' => 'https://i.imgur.com/yPt1VRS.png',
                'color' => '000000',
                'type' => 0,
                'created_at' => now(),
                'updated_at' => now(),
            ),
            39 =>
            array (
                'id' => 40,
                'name' => 'Żelazo',
                'description' => 'Szarawy materiał, którego powszechne użycie zrewolucjonizowało narzędzia. Wykuwany wprawną ręką może posłużyć za budulec dla wielu narzędzi, maszyn czy broni.',
                'emoji' => '<:Zelazo:1259254532949676134> ',
                'image' => 'https://i.imgur.com/yPt1VRS.png',
                'color' => '000000',
                'type' => 0,
                'created_at' => now(),
                'updated_at' => now(),
            ),
            40 =>
            array (
                'id' => 41,
                'name' => 'Narzędzia',
                'description' => 'Wszelkie przydatne twory ludzkiej techniki przedłużające ręce i myśli konstruktorów. Proste czy złożone, ułatwiają pracę wielu ludzi na całym świecie.',
                'emoji' => '<:Narzedzia:1260207031982227477>',
                'image' => 'https://i.imgur.com/yPt1VRS.png',
                'color' => '000000',
                'type' => 0,
                'created_at' => now(),
                'updated_at' => now(),
            ),
            41 =>
            array (
                'id' => 42,
                'name' => 'Mechanizmy',
                'description' => 'Zbiory cięgien, odważników i zębatek, stanowiące serce każdej ludzkiej maszyny czy statku.',
                'emoji' => ':grey_question:',
                'image' => 'https://i.imgur.com/yPt1VRS.png',
                'color' => '000000',
                'type' => 0,
                'created_at' => now(),
                'updated_at' => now(),
            ),
            42 =>
            array (
                'id' => 43,
                'name' => 'Broń żelazna',
                'description' => 'Solidny żelazny rynsztunek uratował i zabrał niejedno życie. Zrobi to ponownie wręczony populacji szkolonej przez budynki rekrutacyjne.',
                'emoji' => ':grey_question:',
                'image' => 'https://i.imgur.com/yPt1VRS.png',
                'color' => '000000',
                'type' => 0,
                'created_at' => now(),
                'updated_at' => now(),
            ),
            43 =>
            array (
                'id' => 44,
                'name' => 'Stal',
                'description' => 'Hartowane żelazo z dodatkiem węgla, zdecydowanie wytrzymalsze i droższe od swego poprzednika. Szczyt obecnej techniki materiałoznawstwa, używany przy produkcji rynsztunku, narzędzi i maszyn najwyższej klasy.',
                'emoji' => ':grey_question:',
                'image' => 'https://i.imgur.com/yPt1VRS.png',
                'color' => '000000',
                'type' => 0,
                'created_at' => now(),
                'updated_at' => now(),
            ),
            44 =>
            array (
                'id' => 45,
                'name' => 'Broń stalowa',
                'description' => 'Pancerze i bronie wykonane z wytrzymałego materiału wedle najnowszej mody wojennej, zapewniające najlepsze obecnie znane ludzkości warunki do prowadzenia wojen.',
                'emoji' => ':grey_question:',
                'image' => 'https://i.imgur.com/yPt1VRS.png',
                'color' => '000000',
                'type' => 0,
                'created_at' => now(),
                'updated_at' => now(),
            ),
        ));


    }
}
