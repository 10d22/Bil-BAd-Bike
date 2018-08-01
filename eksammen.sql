-- phpMyAdmin SQL Dump
-- version 4.3.11
-- http://www.phpmyadmin.net
--
-- Vært: 127.0.0.1
-- Genereringstid: 09. 12 2016 kl. 14:46:16
-- Serverversion: 5.6.24
-- PHP-version: 5.6.8

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `eksammen`
--

-- --------------------------------------------------------

--
-- Struktur-dump for tabellen `artikler`
--

CREATE TABLE IF NOT EXISTS `artikler` (
  `id` int(11) NOT NULL,
  `overskrift` varchar(255) NOT NULL,
  `tekst` text NOT NULL,
  `dato` datetime NOT NULL,
  `fk_kategorier_id` int(11) NOT NULL,
  `fk_bruger_id` int(11) NOT NULL,
  `visninger` int(255) NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=25 DEFAULT CHARSET=latin1;

--
-- Data dump for tabellen `artikler`
--

INSERT INTO `artikler` (`id`, `overskrift`, `tekst`, `dato`, `fk_kategorier_id`, `fk_bruger_id`, `visninger`) VALUES
(4, 'Fremtidens Supermateriale: Nanorør', '<p>Der er tale om et &aelig;gteskab, som for os b&aring;dfolk er mere sensationelt end Brad Pitts og Angelina Jolies. Kulfiberen har m&oslash;dt nanoteknologien, og hed musik er opst&aring;et. Nanor&oslash;r er nu jordens st&aelig;rkeste og letteste materiale. Og det er p&aring; vej frem. Smag p&aring; ordet &ndash; om kort tid er det p&aring; alles l&aelig;ber!<br />\r\nSejlb&aring;de i den dyre ende har l&aelig;nge v&aelig;ret bygget af kulfiber fra top til t&aring; &ndash; ikke kun skrog og d&aelig;k, men ogs&aring; mast, bom og sejl. Men kulfiberlaminaterne er ogs&aring; p&aring; vej ind i ganske almindelig b&aring;dproduktion, i takt med at priserne falder, og brugen bliver velkendt. Nanoteknologi er et andet af tidens &rdquo;buzzwords&rdquo;. Det handler om at &aelig;ndre molekyle-strukturen og dermed egenskaberne i alverdens materialer, alts&aring; helt nede p&aring; et niveau hvor der arbejdes i milliontedel millimeter. Nanoteknologi bruges forel&oslash;big mest til overfladebehandling og har endnu ikke haft nogen stor betydning for b&aring;dbranchen. Men alt tyder p&aring; at b&aring;de kulfiber og nanoteknologi vil f&aring; langt st&oslash;rre og mere vidtg&aring;ende konsekvenser i de kommende &aring;r. Ikke mindst fordi de to nu har m&oslash;dt hinanden og indg&aring;et et sensationelt &aelig;gteskab. Navnet er nanor&oslash;r.<br />\r\n<h6>Milliontedel millimeter</h6>\r\nNanor&oslash;r er, som navnet antyder, mikroskopiske, hule cylindre. De er lavet af kulstof, alts&aring; samme substans som kulfiber, bare i en anden struktur. Diameteren er under en milliontedel millimeter, og l&aelig;ngden er nogle f&aring; mikro (en mikro er en milliontedel meter). De ligner st&oslash;v, s&aring; sm&aring; er de. Og hvad der er ret interessant for os sejlere: De danner basis for det suver&aelig;nt st&aelig;rkeste og letteste materiale, menneskeheden nogensinde har frembragt. Sammenligner man et laminat af nanor&oslash;r med et tilsvarende stykke st&aring;l, vejer st&aring;let seks gange mere. Og styrken? Vel, hold fast; Nanor&oslash;r-strukturen er 100 gange st&aelig;rkere! Nu vil folk med en smule indsigt i fysik ryste lidt p&aring; hovedet, for styrke er rent faktisk mange ting. En lidt mere pr&aelig;cis beskrivelse vil v&aelig;re at sige, at kulfiber-nanor&oslash;r har fantastiske egenskaber, hvad ang&aring;r str&aelig;kbelastning og elasticitet. Kompression er ikke materialets livret, selv om resultaterne her ogs&aring; er bedre end det meste andet p&aring; markedet.</p>\r\n', '2016-01-22 22:51:13', 2, 7, 6),
(5, 'Ny koncept-bike fra Suzuki', '<p>Suzuki har gjort det igen...<br />\r\nKoncept-cyklen B-King tager dig med til en ny tid i motorcykel &aelig;raen - udover det sci-fi-agtige udseende, byder B-King p&aring; en superkraftig tunet 1300 kubik motor fra Hayabusa&#39;en, p&aring; i alt 250 hk. til blot 250 kg.<br />\r\nDette giver alts&aring; et st&aelig;rkt v&aelig;gt/kraft forhold p&aring; hele 1 hk/kg...<br />\r\nMen B-King er ikke kun en kraftig sports maskine, for under &quot;hjelmen&quot;, gemmer der sig avanceret computer teknologi, der via censorer bla unders&oslash;ger motorcyklen for fejl f&oslash;r hver k&oslash;retur.<br />\r\nB-king&#39;s elektroniske system indeholder endvidere en avanceret tyverisikring. Motorcyklen startes via &#39;finger-touch&#39;, og kun hvis fingeraftrykket matcher ejerens. Skulle en tyv pr&oslash;ve p&aring; at f&aring; startet eller flyttet motorcyklen, ringer B-king op til din mobiltelefon, hvorefter du har mulighed for at tale med synderen, eller aktivere horn og lys.<br />\r\nKommunikations forbindelsen giver naturligvis ogs&aring; mulighed for internetadgang og e-mail, og der er selvf&oslash;lgelig installeret GPS navigationssystem.<br />\r\nChancen for at vi ser B-king p&aring; gaden er nok ret minimal, men der er ingen tvivl om at dette er fremtiden.</p>\r\n', '2016-03-05 22:04:10', 3, 8, 3),
(12, 'Småt er godt – endelig', '<p>Ford har store planer med den nye Ford Fiesta- serie, som ikke kun skal s&aelig;lges i Europa, men ogs&aring; i USA.<br />\r\nDen nye Ford Fiesta-serie var en af stjernerne p&aring; Geneve udstillingen, der lyste kraftigt op p&aring; den store Ford stand. Den er baseret p&aring; den tidligere viste prototype Verve og kommer til salg i l&oslash;bet af &aring;ret herhjemme. Til n&aelig;ste &aring;r skal den samme modelserie som sedan indtage det store marked i Nordamerika. Designchef Peter Horbury er sikker p&aring;, at mindre biler g&aring;r en stor fremtid i m&oslash;de, ogs&aring; i Nordamerika efter mange &aring;rs mere eller mindre m&aelig;rkv&aelig;rdig modelstrategi fra de s&aring;kaldte tre store i USA, GM, Ford og Chrysler. Amerikanerne er begyndt at tage ved l&aelig;re af europ&aelig;erne med de stigende oliepriser og mindre biler, mener han.<br />\r\n- Small is beautiful - at last, som han udtrykte det, under en samtale. Sm&aring;t er godt - endelig.</p>\r\n\r\n<h6>Og han fortsatte:</h6>\r\n\r\n<p>\r\n- Alt er gr&oslash;nt med mindre biler og en del sp&aelig;ndende ny teknologi. Jeg tror, kunderne i USA efterh&aring;nden har samme opfattelse, og jeg er sikker p&aring;, at de vil synes om den nye Fiesta, ligesom jeg er sikker p&aring;, at Ford vil tjene gode penge p&aring; modellen.<br />\r\nFord har aldrig introduceret Focus Mark II i Nordamerika, som er blevet en stor succes i Europa, af frygt for at den ville blive for dyr. De er fortsat med den f&oslash;rste Focus i ret skrabede udstyrsversioner, men med den nye Fiesta ser tingene anderledes ud, udtaler han. Den bliver udstyret med iPod og alt andet nyt s&aring;som navigation og MP3 i topversionerne, samt hele sikkerhedspakken i alle modeller.<br />\r\nPeter Horbury, 57, engelsk f&oslash;dt, er uddannet p&aring; London College of Art, og har blandt andet arbejdet hos Ford, hvor han var med til at designe Escort og Sierra, derefter i 11 &aring;r hos Volvo, hvor han udviklede designet til modellerne S40/V50, S60/S80 og XC90, der er blevet meget rost. Han blev h&aelig;dret som bedste designer i Storbritannien i 1998.<br />\r\nI dag er han ansvarlig for Fords design i Nordamerika, med modellerne Lincoln og Mercury. Horbury bor i Detroit.</p>\r\n\r\n<p>&nbsp;</p>\r\n', '2016-03-14 09:02:12', 1, 3, 11),
(13, 'General Motors svarer igen', '<p>Om et par &aring;r er General Motors klar med hybrid-teknologi med nye batterityper, der forl&aelig;nger bilernes aktionsradius mere end tre gange.<br />\r\n<h6>Milj&oslash;biler</h6>\r\nGeneral Motors har alt for l&aelig;nge set stiltiende p&aring;, at blandt andet Toyota og Honda s&aelig;lger hybridbiler, men nu sl&aring;r GM tilbage. Det sker blandt andet med den lille smarte Volt, som blev pr&aelig;senteret i Detroit sidste &aring;r under stor festivitas, samt med en ny Saab 9-X, ligesom GM og Ford begge satser enormt p&aring; ethanol i benzinen i USA. P&aring; dette punkt er man i dag langt foran japanerne, der f&oslash;rst lige er begyndt at interessere sig for den nye blandede benzin. GM er ogs&aring;<br />\r\n2<br />\r\nlangt fremme med diesel-hybrid i konceptmodellen Flextreme, som blandt andet stod i Geneve for nogle uger siden.<br />\r\nHer pr&aelig;senterede chef Rick Wagoner samtidig anden generation af de ny Lithium-Ion batterier. Det er samme batteriudvikling som i mobiltelefoner. De har mindst tre gange l&aelig;ngere aktionsradius end almindelige batterityper. De nye batterier kommer f&oslash;rst ned i den nye Saab 9-X fra 2010. Det er planen, at fremstille mindst 100.000 Saab 9-X &aring;rligt, der sparer p&aring; br&aelig;ndstoffet, og loves et benzingennemsnit p&aring; 20,4 kilometer med et CO2 udslip p&aring; kun 117 g/km fra en mindre motor.<br />\r\n<h6>Stor interesse for Volt</h6>\r\nGM vil fremstille cirka 10.000 af den lille Chevrolet Volt i 2010, og derefter h&oslash;jere styktal i de efterf&oslash;lgende &aring;r. Efter lanceringen sidste &aring;r i Detroit fik GM s&aring; mange henvendelser fra interesserede kunder, at det n&aelig;rmest overstiger alle andre nyhedspr&aelig;sentationer i nyere tid, som en GM medarbejder udtrykte det i Detroit i &aring;r.<br />\r\nOgs&aring; flere tusinde mails fra Europa viser, at interessen for hybrid ikke kun er den lille niche, som flere europ&aelig;iske bil-topchefer troede for nogle &aring;r siden.<br />\r\nDet var sm&aring;t med tekniske informationer sidste &aring;r, men de foreligger nu. Med Lithium-Ion batterier er bilens aktionsradius alts&aring; mindst tre gange l&aelig;ngere end almindelige batterier, som de kendes i dag, og som hj&aelig;lpemotor, til de store afstande i USA eller i Europa, bliver Volt udstyret med en lille trecylindret benzinturbomotor, der yder 160 hk og klarer 0-100 kilometer i timen p&aring; cirka 8,0 sekunder, med en topfart p&aring; cirka 190 kilometer i timen. Med en 55 liters tank er der nok batterieffekt og br&aelig;ndstof til cirka 1000 kilometers k&oslash;rsel f&oslash;r optankning. Genopladningen af batterierne sker fra et almindeligt str&oslash;mudtag, og varer seks timer.<br />\r\nPrisen loves p&aring; linie med en mellemklassebil i dag. N&aelig;ste trin p&aring; Volt udviklingsstigen bliver solarenergi og br&aelig;ndselscelle med brint, men det har l&aelig;ngere udsigter.</p>\r\n', '2016-03-09 15:17:40', 1, 3, 1),
(14, 'Nissan-finansiering skærer i prisen', '<p>Med en anderledes finansieringsform af nye biler vil for eksempel en Nissan X-Trail p&aring; hvide plader, med en nybilpris p&aring; omkring 400.000 kroner, kunne erhverves med under det halve til udbetaling og godt halvdelen af den m&aring;nedlige ydelse i forhold til et traditionelt l&aring;n, oplyser Nissan i en meddelelse.<br />\r\nEn Nissan X-Trail koster med metallak 417.717 kroner, som nu kan levere med en udbetaling p&aring; kun 36.000 kroner, inklusive oprettelsesomkostninger, til en m&aring;nedlig ydelse f&oslash;r skat p&aring; 3.595 kroner, efter skat 2.972 kroner.<br />\r\nEn traditionel finansiering med bill&aring;n vil l&oslash;be op i 83.554 kroner i udbetaling og en m&aring;nedlig ydelse p&aring; 5.516 kroner.<br />\r\nNissan oplyser videre, at efter tre &aring;r og maksimalt 60.000 kilometer kan bilen leveres tilbage til Nissan, hvis kunden &oslash;nsker det, eller kunden kan forts&aelig;tte sin m&aring;nedlige betaling i den resterende l&oslash;betid og beholde bilen. Tilbuddet er en kampagnepris, der g&aelig;lder til 30. juni i &aring;r og er baseret p&aring; det nuv&aelig;rende renteniveau, og det tilbydes hos udvalgte forhandlere, skriver Nissan.</p>\r\n', '2016-03-10 12:22:00', 1, 3, 5),
(15, 'Kongen blandt sportsvogne tilbage', '<p>hjemlandet USA kaldes Corvette &rdquo;King of the Hill&rdquo; - ZR1 har f&aring;et super h&oslash;jt drejningsmoment, dobbeltkobling, sekstrins close-ratio transmission samt helt ny undervogn og affjedring.<br />\r\nCorvette ZR1 er noget af en bil for entusiaster, der endnu engang har taget de andre p&aring; sengen med en helt ny LS9 6.2 liters V8-motor, der yder over 600 hk med et drejningsmoment p&aring; hele 823 Newtonmeter.<br />\r\nDet er sikkert baggrunden for den nye models fornemme titel i hjemlandet, &rdquo;King of the Hill&rdquo; med det super h&oslash;je drejningsmoment, dobbeltkobling, sekstrins close-ratio transmission, helt ny undervogn og affjedring med Magnetic Selective Ride Control, 19&rdquo; hjul foran, og 20&rdquo; bagunder med d&aelig;kst&oslash;rrelsen 285/30 ZR19 foran og 335/25 ZR20 bag, med specielt udviklede Michelin Pilot Sport til den ny amerikanske sportsvogn.<br />\r\nBremseskiverne er i kulfiber, keramik og st&oslash;rre end tidligere. I det hele taget er bilen opbygget som mere eller mindre end racerbil til banerne med nye lette materialer for og bag, s&aring;som specielle polycarbonat ruder, en ny spoiler, der h&aelig;ves ved h&oslash;jere hastigheder samt head-up display i forruden.<br />\r\nBilen k&oslash;rer 370 kilometer p&aring; toppen, og den vejer kun 1.519 kilogram. Det er den hurtigste bil, General Motors har fremstillet i selskabets 100-&aring;rige historie<br />\r\nDet var store ord, der blev brugt forleden ved introduktionen i Detroit.<br />\r\n- Kongen er vendt tilbage, sagde Chevrolets direkt&oslash;r Ed Pepper, og han fortsatte:<br />\r\n- Det nye ZR1 er det ypperste, en amerikansk superbil kan give, med v&aelig;rdier der overtrumfer andre eksotiske biler, som m&aring;ske koster to til fire gange mere.<br />\r\nDe f&oslash;rste test har vist, at den nye Corvette ogs&aring; overtrumfer den h&oslash;jt respekterede Corvette Z06, kendt fra banerne. Corvette lover en topfart p&aring; 325-330 kilometer, men gearingen afg&oslash;r dette. Effekt-v&aelig;gtforholdet er bedre end Porsche GT2, Ferrari 599 og selv Lamborghini LP640.</p>\r\n', '2016-01-23 09:17:32', 1, 5, 0),
(16, 'Seat Leon Van tordner frem', '<p>Sidste &aring;rs afgifts&aelig;ndring, der tog livet af de tunge firehjulstr&aelig;kkere, har betydet at de mindre gul-pladebiler som for eksempel Seat Leon Van tordner frem. I januar m&aring;ned kom Leon Van ud med knap 21 procent markedsandel i segmentet for varebiler op til 2.000 kilogram og blev den mest solgte varebil til private.<br />\r\nFra Seat-import&oslash;ren fort&aelig;ller pressechef Tonny Soltau, at salget af Leon Van i &oslash;vrigt er meget polariseret. Enten v&aelig;lger k&oslash;berne de vilde powervans 240 hk Cupra eller 170 hk FR TDI, eller ogs&aring; g&aring;r de m&aring;lrettet efter den nye pendlerbil 1.9 TDI Ecomotive Van.<br />\r\n- Ud fra en ren CO2-reducerende betragtning er der en stor her-og-nu milj&oslash;gevinst for samfundet ved at k&oslash;be de mindre og energieffektive dieselbiler, som for eksempel Leon Ecomotive Van. Denne van-model, med fuld sikkerhedspakke og 1.200 liter varerum til under 154.000 kroner inklusive moms, udleder kun 119 gram CO2 og 0,0005 gram partikelmasse per kilometer, siger Tonny Soltau.</p>\r\n', '2016-01-22 19:42:27', 1, 5, 0),
(17, 'Bryant 190 Bowrider', '<p>Lille og til en konkurrencedygtig pris. Endnu et amerikansk m&aelig;rke p&aring; det danske marked og med bowriders fra 18 til 27 fod. Noget, du kan v&aelig;re helt sikker p&aring;, er, at du i en Bryant ikke finder et eneste stykke tr&aelig;. For b&aring;dene er garanteret 100 % fri for tr&aelig;.<br />\r\n190-modellen er den mindste i fl&aring;den. Det betyder en b&aring;d p&aring; lidt over 18 fod. Som standard findes en 3 liters MerCruiser p&aring; 135 hk i motorrummet. Ikke nogen avanceret motor, men den har kr&aelig;fter nok og er med til at give en fornuftig pris. N&aring;r man ser b&aring;den p&aring; afstand ved broen, virker det, som om den ligger lidt h&oslash;jt med agterskibet. Dette forst&aelig;rkes under sejlads og vidner om, at b&aring;den antagelig b&oslash;r leveres med en noget tungere motor. Typisk amerikansk &ndash; for en st&oslash;rre motor koster n&aelig;sten ikke noget &rdquo;over there&rdquo;, og benzinpriserne er lave i forhold til herhjemme.<br />\r\n6<br />\r\nDet er en fornuftig b&aring;d, hvor du f&aring;r det, du ser. Her er integreret badeplatform med lejder, agterb&aelig;nk, to stole og et par siddepladser foran vindspejlet. B&aring;den har p&aelig;n indst&oslash;bt staffering og bl&oslash;d polstring. Under d&oslash;rken er stuverum til vandski etc., og midt i b&aelig;nken foran er der plads til den medf&oslash;lgende transportable k&oslash;leboks. Smart detalje! Instrumenterne er placeret i et buet instrumentpanel, og et lille kompas foran rattet er standard. Selve f&oslash;rerpladsen fungerer fint, man sidder godt, og der er vippehynde i forkanten af den formst&oslash;bte stol. Man v&aelig;lger fortrinsvis at sidde med vippehynden oppe. S&aring; ser man lige over vindspejlet. At sejle b&aring;den i st&aring;ende stilling kan man godt glemme, for motorkontrol og rat er placeret til en siddende. Instrumenterne er overskuelige med kontakterne ved siden af rattet. Her er ogs&aring; kontrolpanel til stereoanl&aelig;gget &ndash; selvf&oslash;lgelig standard med vandt&aelig;tte h&oslash;jtalere i hver side.<br />\r\nN&aring;r alt kommer til alt, er dette en lille b&aring;d. Det skal man tage hensyn til, n&aring;r man laster den. Det er ogs&aring; vigtigt med korrekt v&aelig;gtfordeling, og fribordet er ikke s&aelig;rligt h&oslash;jt. Med tanke p&aring; det skal man v&aelig;re opm&aelig;rksom p&aring; ikke at sejle ud i for store b&oslash;lger og ikke med for meget last fremme. At f&aring; en &rdquo;gr&oslash;n s&oslash;&rdquo; ind over st&aelig;vnen er ikke sagen, for b&aring;den er ikke selvl&aelig;nsende. Brugsomr&aring;det for denne b&aring;d begr&aelig;nser sig alts&aring; til det samme som for en almindelig, &aring;ben b&aring;d, selvom der medf&oslash;lger et d&aelig;kken til at lukke forskibet med. Man f&aring;r bare lidt mere design og komfort i indretningen med bl&oslash;de hynder, stole og polstring.<br />\r\n<h6>B&aring;dens egenskaber</h6>\r\nGenerelt er b&aring;den enkelt udstyret &ndash; her er, hvad der er brug for til en familietur, n&aring;r vejret er godt. B&aring;den passer f.eks. til en familie p&aring; to voksne og to b&oslash;rn. Med en kraftig motor og friske svingegenskaber vil den v&aelig;re en god tr&aelig;kb&aring;d til vandski og vandleget&oslash;j.<br />\r\nDen amerikanske producent p&aring;st&aring;r, at de bruger flere timer p&aring; hver enkelt b&aring;d end nogen anden producent. Det kan godt v&aelig;re rigtigt. Men der er lidt raslelyde i b&aring;den, og den virker kompakt. Man kunne dog godt have lagt nogle flere timer i at g&oslash;re lydisoleringen perfekt. For motoren larmer overraskende meget.<br />\r\nDer var krap s&oslash; og b&oslash;lger p&aring; omkring en meter p&aring; vores testtur. Planingst&aelig;rsklen er lav, og b&aring;den kommer hurtigt i fart, virker levende og sjov at sejle. Den svinger let, og l&aelig;gger man den ind i et maksimalt sving fra h&oslash;j fart, drejer den p&aring; en fem&oslash;re. St&aelig;vnen tager fat, agterskibet slipper og giver et skarpt sving med kraftige G-kr&aelig;fter.<br />\r\nSelvf&oslash;lgelig sejler man ikke s&aring;dan p&aring; en familietur, men vi blev lidt overstadige og susede af sted mod fotob&aring;den. En levende hop- og spr&oslash;jt-tur. Med 17 graders V-bund i agterspejlet bliver sejloplevelsen ikke en af de mest behagelige, vi har haft, men holder sig p&aring; et niveau, som vi vil betegne som gennemsnitligt. Pludselig m&aring; vi erkende, at dette er en forholdsvis lille b&aring;d med et moderat fribord fremme. Vi tager en b&oslash;lgetop ind over st&aelig;vnen. Og f&aring;r en ordentlig skylle. Efter at have gentaget man&oslash;vren et par gange f&oslash;ler vi ikke behov for at blive mere v&aring;de og vender st&aelig;vnen mod land.<br />\r\nVor konklusion er, at Bryant 190 er en konkurrencedygtig b&aring;d med hensyn til prisen. Den virker godt bygget og har gode fartegenskaber. Men man skal ikke tage ud i for store b&oslash;lger med den. Vi var kun to personer i b&aring;den under testsejladsen. Har man hele familien og bagage om bord, er det endnu vigtigere at passe p&aring; b&oslash;lgeh&oslash;jden. Det g&aelig;lder ogs&aring;, hvis man skal over store h&aelig;ks&oslash;er. B&aring;den er slet og ret ikke st&oslash;rre, end den er, og uden ford&aelig;k skal man tage de samme forholdsregler som i en helt &aring;ben b&aring;d.<br />\r\nL&aelig;ngde/bredde:<br />\r\n5,80/2,45 m<br />\r\nV&aelig;gt:<br />\r\n1.245 kg<br />\r\nMaks. personer:<br />\r\n7 stk.<br />\r\nMotor, standard/testb&aring;d:<br />\r\n135/135 hk<br />\r\nBr&aelig;ndstoftank:<br />\r\n120 l<br />\r\nCE-kategori:<br />\r\nC<br />\r\nPris fra/testb&aring;d:<br />\r\n199.900 / 216.900 kr.<br />\r\nProducent:<br />\r\nBryant Boats<br />\r\nImport&oslash;r:<br />\r\nK&oslash;ge Trolling Center, tlf. 56 63 01 00, www.k-t-c.dk<br />\r\n+ Konkurrencedygtig pris<br />\r\n+ Virker velbygget<br />\r\n+ Fin trailerb&aring;d<br />\r\n- Lavt fribord<br />\r\n- Den kan blive v&aring;d<br />\r\n- Skal lastes med fornuft</p>\r\n', '2016-01-22 14:13:10', 2, 6, 1),
(18, 'Nauta motoryacht', '<p>Dobbeltskruet motoryacht fra 1934. Motorb&aring;den &rdquo;Nauta&rdquo; er i dag 73 &aring;r og stadig i topform. Som ny i 1934 kostede den 11 m lange b&aring;d &rdquo;meget mere end en stor villa&rdquo;. Det siger noget om kvaliteten.<br />\r\nAlle stopper p&aring; kajen og kikker p&aring; den fine, gamle motorb&aring;d med lakeret oregonpined&aelig;k og forkromede beslag, mahognikahyt og ulasteligt hvidmalet fribord.<br />\r\nHavnens naboer til &rdquo;Nauta&rdquo; mener, at den gamle motorb&aring;d er irriterende. For n&aring;r de h&oslash;rer folk oppe p&aring; kajen sige &rdquo;Nej, en flot b&aring;d,&rdquo; s&aring; h&aring;ber de, at det er deres egen b&aring;d, der menes. Men det er altid gamle &rdquo;Nauta&rdquo;, tilskuere ser p&aring;, for tr&aelig;b&aring;den skiller sig meget ud fra hvide glasfiberb&aring;de.<br />\r\nInge og Torben Leig Andersen har ejet &rdquo;Nauta&rdquo; siden 1971, alts&aring; 36 &aring;r. &rdquo;Der er af og til folk, der vil k&oslash;be b&aring;den,&rdquo; siger Torben og Inge muntert. &rdquo;Engang for 30 &aring;r siden i en sluse p&aring; G&ouml;ta kanalen kom en meget interesseret svensker, der fotograferede b&aring;den og ville k&oslash;be den for 100.000 kr. Vi ville ikke s&aelig;lge. Straks tilb&oslash;d han 150.000 kr. Vi ville stadig ikke s&aelig;lge. Svenskeren k&oslash;rte i bil fra sluse til sluse efter os og gentog sit tilbud, og i tilgift ville han give en taxa hjem til Danmark.&rdquo;<br />\r\n&rdquo;Nautas&rdquo; marchfart er 8 knob, hvor dieselforbruget er fornuftigt med 5 liter i timen. Topfarten er ca. 13 knob, men med et br&aelig;ndstofforbrug p&aring; 26-27 liter i timen. &rdquo;Men vi kan da hurtigt komme af vejen for en f&aelig;rge,&rdquo; siger Torben.<br />\r\n&rdquo;Vi vandt engang et v&aelig;ddem&aring;l om, at &rdquo;Nauta&rdquo; kunne tr&aelig;kke en vandskil&oslash;ber. Det kunne hun sagtens, endda en stor en,&rdquo; ler Torben, &rdquo;og jeg vandt en bajer.&rdquo;<br />\r\n<br />\r\nDe foretr&aelig;kker at sejle p&aring; fladt vand uden b&oslash;lger, men egentlig generer b&oslash;lger ikke b&aring;den meget. &rdquo;Det er bare pokkers ubehageligt,&rdquo; synes Inge.<br />\r\n<h6>To &rdquo;bagl&aelig;ns&rdquo; motorer</h6>\r\nB&aring;den er bygget i 1934 som &rdquo;dobbeltskruet motoryacht&rdquo; af spejlsk&aring;ret kalmarfyr p&aring; eg og egesv&oslash;b p&aring; Bogense Skibsv&aelig;rft.<br />\r\nB&aring;den havde dengang to skruer og to Albin 4-cylindrede motorer. De stod i hver sin side af agterkahytten, der hvor der nu er en sofa og et skab. For at undg&aring; at motorerne optog plads i cockpittet, var installationen ret avanceret. Motorerne stod &rdquo;bagl&aelig;ns&rdquo; i agterkahytten med drevet vendt fremad, hvor det blev f&oslash;rt lodret ned til skrueakslerne, der gik agterud neden under motorerne. De k&oslash;rte p&aring; traktolin, en blanding af benzin og petroleum. De startedes p&aring; ren benzin, hvorefter man skiftede over til billigere petroleum.<br />\r\nI 1956 fik b&aring;den erstattet de to motorer med &eacute;n ny 6-cylindret Albin motor p&aring; 70 hk, ogs&aring; til traktolin. Den blev placeret midtskibs i forkahyttens agterste del, og med en lang skrueaksel under cockpitd&oslash;rk og b&aring;dbund til en stor propel agter. For at f&aring; plads til propellen blev egetr&aelig;s-k&oslash;len foran skrue og ror gjort dybere til nuv&aelig;rende 1,2 m dybgang.<br />\r\nI 1975 fik &rdquo;Nauta&rdquo; den nuv&aelig;rende motor, en Scania Vabis D8 dieselmotor p&aring; 156 hk, og den k&oslash;rer stadig fint efter 32 &aring;r. Motoren vejer ca. 1.100 kg, s&aring; for ikke at trykke forskibet ned blev den flyttet agterud til det naturlige sted, cockpittet. Torbens &aelig;ldre bror er mekaniker og hjalp med ombytningen. Selv har Torben masser af mekanisk snilde, men f&aring;r ogs&aring; stadig hj&aelig;lp af sin bror &rdquo;doktor mek.&rdquo;, der hvert andet &aring;r tjekker motoren. Han s&aelig;tter som et stetoskop en skruetr&aelig;kker mellem &oslash;re og motor og lytter til hver af de seks cylindere, mens motoren k&oslash;rer.<br />\r\n<h6>tolt af glasfiber sp&oslash;rgsm&aring;l</h6>\r\nB&aring;den v&aelig;kker altid opm&aelig;rksomhed. &rdquo;Hvor gammel er den?&rdquo; er det almindelige sp&oslash;rgsm&aring;l. &rdquo;73 &aring;r,&rdquo; er svaret i dag.<br />\r\nDet er n&aelig;sten altid starten p&aring; flere sp&oslash;rgsm&aring;l og hyggelige samtaler. &rdquo;Et sp&oslash;rgsm&aring;l, vi er lidt stolte over at f&aring;, er, n&aring;r nogen siger: Jamen, man byggede da ikke glasfiberb&aring;de i 1934? S&aring; ved vi, at vores arbejde med at male fribordet er gjort godt nok,&rdquo; siger Torben.<br />\r\n&rdquo;Nauta&rdquo; har ogs&aring; v&aelig;ret filmstjerne: &rdquo;Under sejlads i G&ouml;ta kanalen blev vi filmet af et tysk tv-hold, som fulgte b&aring;den op ad den store slusetrappe i Mem. Tv-holdet bad os gentage visse man&oslash;vrer, s&aring; de kunne filme en ekstra gang. Desv&aelig;rre har vi aldrig set optagelserne.&rdquo;<br />\r\nDe har en fin tilladelse fra 1954 til at f&oslash;re yachtflag. &rdquo;Ha,&rdquo; siger Torben, &rdquo;hvem har s&aring;dan en tilladelse i dag?&rdquo; Dengang skulle hver b&aring;d s&oslash;ge om lov til at f&oslash;re yachtflag (splitflag), men siden 1956 er der generel tilladelse til alle b&aring;de.<br />\r\n<h6>Cykler, fisketip og landstr&oslash;m</h6>\r\nSiden &rdquo;Nauta&rdquo; i 1975 fik den nye motor, har de sejlet ca. 30.000 s&oslash;mil. De er hvert &aring;r p&aring; sommertur, og de har v&aelig;ret i stort set alle danske havne. Desuden i Stockholm, G&ouml;ta kanalen, p&aring; Gotland, ad tyske kanaler til Berlin f&aring; &aring;r efter murens fald, ad Trave kanalen, i Hannover, p&aring; Elben, Kielerkanalen og Ejderen, Slien og to gange ad Dalslands kanal til Norge.<br />\r\n<br />\r\nDe bruger minicykler. &rdquo;N&aelig;st efter kompasset er cyklerne det vigtigste om bord,&rdquo; siger de. &rdquo;Det er tredje hold cykler, vi har nu. For at f&aring; plads til en &rdquo;cykelk&aelig;lder&rdquo; sl&oslash;jfede vi en lille sofa i agterkahytten.&rdquo;<br />\r\nDe fisker en del og s&aelig;tter af og til lidt garn med ruser. Torben overvejede at bygge flybridge p&aring; b&aring;den, men det passede ikke i stilen, s&aring; han n&aelig;nnede det ikke.<br />\r\nDet originale porcel&aelig;ns-wc og h&aring;ndvasken fra 1934 m&aring;tte udskiftes med nyt i 2007. &rdquo;Mon den nye wc-pumpe af plast kan holde i 73 &aring;r som den gamle af bronze?&rdquo; tvivler Torben.<br />\r\nTil landstr&oslash;m er der 230 volt stik i hver af de to kahytter og i cockpittet. En god ting med landstr&oslash;m er det &rdquo;nye&rdquo; k&oslash;leskab, som er 16-17 &aring;r. Det er af rustfrit st&aring;l, 60 liter med et lille fryserum. Det forrige, almindelige k&oslash;leskab rustede op og var i &oslash;vrigt en meget stor str&oslash;mforbruger.<br />\r\nDen store motor har et meget stort el-forbrug i start&oslash;jeblikket, mens de to startbatteriers kapacitet er lille. Hvis motoren ikke starter inden for ni sekunder, er batterierne t&oslash;mt. Men motoren starter altid straks. De har dog en meget kraftig oplader, og med den koblet til landstr&oslash;m kan den i n&oslash;dsituation starte motoren.<br />\r\n<h6>B&aring;debygger gens&aring; sit &rdquo;barn&rdquo;</h6>\r\nDen dobbeltskruede motoryacht blev bygget i 1934 p&aring; Bogense Skibsv&aelig;rft til Herr Direkt&oslash;r H. Rasmussen, Vedb&aelig;k, l&aelig;ser man i Skibsregisterets &rdquo;Tilsynsbog&rdquo;. B&aring;dens navn blev &rdquo;Mayo&rdquo;, for H. Rasmussen var direkt&oslash;r for mayonnaisefabrikken Mayo.<br />\r\nKun to &aring;r efter, i 1936, blev b&aring;den solgt og kom i 1937 til Rungsted.<br />\r\nI 1946 var b&aring;den i &Aring;rhus. Det var jo en bem&aelig;rkelsesv&aelig;rdig stor b&aring;d dengang, og den l&aring; for enden af sin egen bro. Der bem&aelig;rkede den 9-10 &aring;rige Torben b&aring;den. Han er fra &Aring;rhus og var begyndt at sejle i motorb&aring;dsklubben, men dr&oslash;mte ikke om, at han senere skulle eje den.<br />\r\nI 1951 kom &rdquo;Nauta&rdquo; til K&oslash;benhavn for en st&oslash;rre renovering af motorerne.<br />\r\nI 1953 var b&aring;den i K&oslash;ge og hed &rdquo;Ulla&rdquo; et &aring;rs tid, inden den blev d&oslash;bt &rdquo;Nauta&rdquo; og kom i Skibsregisteret, og i 1961 kom &rdquo;Nauta&rdquo; s&aring; til Snekkersten, hvor Torben og Inge overtog b&aring;den i 1971.<br />\r\nI sommeren 1974 var de i Bogense med &rdquo;Nauta&rdquo;, og om bord kom den dengang 87-&aring;rige Eiler Pedersen, &rdquo;Bogense-Pedersen&rdquo;, som byggede b&aring;den. Han fortalte, at &rdquo;den i 1934 kostede meget mere end en stor villa&rdquo;. Den gamle b&aring;debygger klappede k&aelig;rligt b&aring;den og sagde: &rdquo;Godt at man kan v&aelig;re sine b&oslash;rn bekendt.&rdquo;<br />\r\nHan kunne ikke hj&aelig;lpe med de originale tegninger til b&aring;den, for en mindre brand p&aring; v&aelig;rftets kontor havde &oslash;delagt n&aelig;sten alle arkiver.<br />\r\nNylig s&oslash;sat i 1934 fik b&aring;den &rdquo;midlertidig godkendelse til indskr&aelig;nket fart indtil 6 s&oslash;mil af kysten&rdquo; af Statens Skibstilsyn. Men f&oslash;lgende skulle findes i b&aring;den: S&oslash;vejsregler, to p&oslash;se, kompas og flag, og &rdquo;5 BRT&rdquo; skulle indhugges i en lugekarm, som det var almindeligt dengang. BRT er bruttoregistertons, et nu for&aelig;ldet rumm&aring;l for b&aring;dens st&oslash;rrelse. En uge efter var de ting i orden, og b&aring;den fik den 9. juli 1934 den endelige godkendelse &rdquo;til indskr&aelig;nket fart, dog ikke vest for Skagen.&rdquo;<br />\r\n<br />\r\n<h6>Anker i fjord og i have</h6>\r\nTorben begyndte som n&aelig;vnt som 9-10 &aring;rig at sejle. Inge havde kun v&aelig;ret i morfaderens pram p&aring; Stege Nor. Ellers havde hun ikke sejlet, f&oslash;r hun og Torben havde v&aelig;ret gift i 16 &aring;r, og de overtog &rdquo;Nauta&rdquo; i 1971. &rdquo;Jeg vidste jo ikke, hvad jeg gik ind til,&rdquo; undskylder Inge tilfreds.<br />\r\nAnkrene i st&aelig;vnen havde oprindelig henholdsvis 40 og 60 m galvaniseret k&aelig;de. Nu er de to ankre kun til pynt, og de er boltet fast i ankerklyssene. De er nemlig hule kopier smedet i jernplade efter de originale massive 22 kg ankre. Det ene af dem ligger p&aring; bunden af Roskilde Fjord, det andet ligger til pynt i Torben og Inges have.<br />\r\nInge og Torben er n&aelig;sten p&aring; alder med Nauta, men har slet ingen planer om at &rdquo;sluge ankeret&rdquo;, som man siger om s&oslash;folk, der g&aring;r i land.<br />\r\nDobbeltskruet motoryacht &rdquo;Nauta&rdquo; ex &rdquo;Ulla&rdquo; ex &rdquo;Mayo&rdquo;.<br />\r\nBygget 1934 p&aring; Bogense Skibsv&aelig;rft, som ogs&aring; byggede store fiskekuttere.<br />\r\nMarchfart/topfart:<br />\r\n8/13 knob<br />\r\nL&aelig;ngde/bredde/dybgang:<br />\r\n11,1/3/1,2 m<br />\r\nV&aelig;gt:<br />\r\n9 t<br />\r\nDieseltanke:<br />\r\n2 x 180 l<br />\r\nVandtanke:<br />\r\n75 + 250 l</p>\r\n', '2016-01-04 17:10:24', 2, 6, 0),
(19, 'Hvis nabobåden kommer i klemme', '<p>Hvad g&oslash;r du, hvis du ser en ubemandet b&aring;d i havn i f&aelig;rd med at synke &ndash; og hvad har du lov til? Advokaten giver svar.<br />\r\nNu er vi s&aring; langt henne p&aring; &aring;ret, at de fleste har f&aring;et deres b&aring;d p&aring; land. Enkelte b&aring;dejere lader dog b&aring;den blive i vandet, og set med de sidste mange &aring;rs milde vintre er det forst&aring;eligt nok. Men under efter&aring;rs- og vinterstormene kan der opst&aring; ekstraordin&aelig;re vind- og vejrforhold, der betyder, at der skal holdes ekstra &oslash;je med b&aring;den.<br />\r\nAf og til oplever man den situation, at en b&aring;d h&aelig;nger s&aring; voldsomt i sine fort&oslash;jninger, at der er overh&aelig;ngende risiko for, at den vil synke. Hvad skal man g&oslash;re i denne situation, hvor det ikke kan lade sig g&oslash;re at komme i kontakt med b&aring;dens ejer &ndash; han sidder m&aring;ske og hygger sig under sydens sol? Skal man sk&aelig;re b&aring;dens fort&oslash;jninger over, for at undg&aring; at b&aring;den synker, uanset at det kan medf&oslash;re problemer, og hvordan forholder det sig, hvis b&aring;den efterf&oslash;lgende driver over i nabob&aring;den og forvolder skade p&aring; denne b&aring;d?<br />\r\n<h6>Det m&aring; du</h6>\r\nI n&aelig;vnte eksempel er det klart, at hj&aelig;lperen ikke p&aring;drager sig noget ansvar over for ejeren af den n&oslash;dstedte b&aring;d, som han klipper fort&oslash;jningerne over p&aring;. Hj&aelig;lperen sikrer, at b&aring;den ikke synker, og ejeren undg&aring;r et formuetab. N&aelig;ste sp&oslash;rgsm&aring;l er, om hj&aelig;lperen kan risikere at blive ansvarlig for andre skader, der eksempelvis p&aring;drages nabo b&aring;den.<br />\r\n11<br />\r\nEksemplet rummer en velkendt problemstilling, nemlig retten til at foretage rimelige foranstaltninger, der er n&oslash;dvendige for at afv&aelig;rge et truende tab, n&aring;r tredjemand selv er forhindret i at handle. Man taler om uanmodet forretningsf&oslash;relse eller n&oslash;dret i de tilf&aelig;lde, hvor man foretager en handling for at afv&aelig;rge skade p&aring; tredjemands ting og derved p&aring;drager denne tredjemand en udgift.<br />\r\n<h6>N&oslash;dret</h6>\r\nForuds&aelig;tningen for at den person, der handler p&aring; ejerens vegne, bliver ansvarsfri, er:<br />\r\n&bull; At ejeren selv har v&aelig;ret forhindret i at gribe ind<br />\r\n&bull; At handlingen har v&aelig;ret forsvarlig, og at den har v&aelig;ret n&oslash;dvendig.<br />\r\nEr de betingelser opfyldt, er den handlende person ikke ansvarlig for de udgifter, som handlingen p&aring;f&oslash;rer ejeren. Ejeren af b&aring;den skal derfor erstatte nabob&aring;den, de skader, der bliver p&aring;f&oslash;rt denne som f&oslash;lge af, at b&aring;dens fort&oslash;jninger bliver sk&aring;ret over.</p>\r\n', '2015-12-10 12:22:00', 2, 6, 0),
(20, 'Vinterstorm = 25-33 m/s', '<p>En storm har ufattelig kraft. Her genopfrisker vi din fantasi om, hvad der kan ske, og hvad du kan g&oslash;re for at sk&aring;ne b&aring;den.<br />\r\nDet er rystende dagen efter en storm at se en 177 kg tung Wayfarerjolle bl&aelig;st op fra sin trailer og smidt oven p&aring; nabojollen. Tunge tagplader kan ogs&aring; bl&aelig;se omkring p&aring; havnepladsen, og store tr&aelig;er, der har st&aring;et trygt i mange &aring;r, kan v&aelig;lte i en vinterstorm.<br />\r\nDu kan n&aelig;ppe forebygge stormskader, men n&aring;r stormen f&oslash;rst er der, m&aring; du forlade din varme stue og se til b&aring;den. M&aring;ske kan nogle ekstra surringer forebygge skader.<br />\r\nB&aring;den i haven<br />\r\nVi kender til en forsigtig b&aring;dejer, der har b&aring;den vinteroplagt hjemme i haven. Der kom varsel om orkanagtig storm fra nordvest, den v&aelig;rst t&aelig;nkelige retning for netop den have. I haven er et 20 m h&oslash;jt, tyndt grantr&aelig;, der efter tidligere vestlige storme h&aelig;ldede lidt mod &oslash;st, og normalt svajede det ogs&aring; rigtig meget i kuling. Nu frygtede b&aring;dejeren, at en storm kunne v&aelig;lte tr&aelig;et ned over b&aring;den &ndash; et 20 m tr&aelig; vejer 500-1.000 kg.<br />\r\nDerfor klatrede han s&aring; h&oslash;jt op i tr&aelig;et som muligt, bandt en trosse om stammen og f&oslash;rte trossen til roden af et st&aelig;rkt tr&aelig; til luv og strammede op med en talje.<br />\r\nTr&aelig;et v&aelig;ltede da heller ikke i stormens vilde sus, og nogle dage efter savede han konsekvent &oslash;verste tredjedel af tr&aelig;et af, s&aring; det fik mindre vindfang. Det var for risikabelt at f&aelig;lde hele tr&aelig;et, mens b&aring;den stod i haven.<br />\r\nStormen v&aelig;ltede motorb&aring;den. En sejlb&aring;d bagved rokkede ned ad sine klodser, men v&aelig;ltede ikke. Den orange jolle fik ved lavvande st&aelig;vnen under bolv&aelig;rkets bj&aelig;lke. S&aring; kom storm og h&oslash;jvande. Ejerne kom ikke.<br />\r\n<br />\r\nEfter p&aring;landsstormen 8. januar 2005. Orkanagtige vindst&oslash;d har kastet den hvide Wayfarerjolle op p&aring; nabojollen. Wayfarer&rsquo;en vejer 177 kg og stod p&aring; den tomme trailer bag manden.<br />\r\nGamle tr&aelig;er er farlige i storm. Jollen med gr&oslash;n bund var heldig, en tyk gren stoppede det tonstunge tr&aelig; en millimeter over jollen. I baggrunden joller, som er smidt rundt af stormen.<br />\r\nHusk<br />\r\nInden du g&aring;r i seng om aftenen er det sidste du g&oslash;r at tjekke b&aring;den. Bor du langt fra b&aring;den, s&aring; f&aring; en ven til at tjekke.<br />\r\nDet f&oslash;rste, du g&oslash;r n&aelig;ste morgen, er ogs&aring; at tjekke b&aring;den og nabob&aring;dene og se, om der er skader, der m&aring;ske kan standses ved en hurtig indsats.<br />\r\n<h6>Hvad kan du g&oslash;re, inden stormen kommer?</h6>\r\n&bull; Du kan l&aelig;gge 50-100 kg ballast p&aring; trailerens aksel og tr&aelig;kstang, f.eks. vanddunke med strandsand bundet sammen to og to til at h&aelig;nge over akselen.<br />\r\n&bull; Du kan tage masten af, s&aring; der er mindre vindfang. S&aring; skades masten heller ikke, hvis b&aring;den bl&aelig;ser om.<br />\r\n&bull; Du kan forhindre, at en tynd plastpresenning blafrer for meget ved at l&aelig;gge en tung, gammel presenning oven p&aring;. Den tunge presenning m&aring; godt v&aelig;re ut&aelig;t, det er kun dens v&aelig;gt, der t&aelig;ller. Midt i stormen er det n&aelig;ppe muligt at l&aelig;gge en ekstra presenning p&aring;.<br />\r\n<h6>Hvad kan du g&oslash;re, mens stormen raser?</h6>\r\n&bull; M&aelig;rker du stormen uden for dine vinduer og ved, at der er p&aring;landsvind, er det tid at g&aring; ned og se til b&aring;den.<br />\r\n&bull; Tjek b&aring;den p&aring; land. Du kender havnens vinterplads og vindretningerne og ved, at stedet er mest udsat ved p&aring;landsvind, hvis den ude fra vandet g&aring;r rent ind p&aring; b&aring;denes vinterplads, mens fralandsvind generer mindre eller slet ikke, n&aring;r bygninger, bakker og tr&aelig;er giver l&aelig; for vinden.<br />\r\n&bull; Tjek b&aring;den i vand. Der vil altid v&aelig;re risiko for ekstremt h&oslash;j- eller lavvande om vinteren, n&aring;r det bl&aelig;ser, uanset vindretningen.<br />\r\n&bull; Er det m&oslash;rkt, s&aring; tag en lommelygte, tovv&aelig;rk og m&aring;ske ogs&aring; lidt v&aelig;rkt&oslash;j med.<br />\r\n&bull; Lette joller og flerskrogsb&aring;de p&aring; land har stor risiko for at bl&aelig;se omkuld i p&aring;landsvind. Sur dem stramt til traileren, s&aring; dens v&aelig;gt er med til at holde p&aring; b&aring;den. Er masten p&aring;, s&aring; f&oslash;r et fald ud i vindretningen og bind det fast til noget solidt. Pr&oslash;v ikke at l&aelig;gge masten ned, mens det stormer. N&aring;r du ikke kan holde en avis op mod vinden, s&aring; vil en mast antagelig bl&aelig;se fra dig.<br />\r\n&bull; Blafrer presenningen, kan den sikres ved at stramme linerne og h&aelig;nge flere tunge v&aelig;gte p&aring; dem. Kast evt. tunge trosser hen over b&aring;den og stram ned. Kast i medvind, ellers lykkes det ikke.<br />\r\n&bull; Giver presenningen for stort vindfang, er det antagelig for sent at pille den af midt i stormen. Hvis den fyldes af et stormpust, har du ingen chance for at holde den nede, og m&aring;ske brager den over i en nabob&aring;d, der herved f&aring;r et for stort vindfang.<br />\r\n&bull; Basker nabob&aring;dens presenning i vinden, s&aring; b&aring;den truer med at v&aelig;lte over i din b&aring;d, s&aring; g&oslash;r noget, eller ring straks til naboen.<br />\r\n&bull; Rokker dit eller naboens b&aring;dstativ? Det kan ske, hvis stativet er d&aring;rligt, is&aelig;r hvis det er et tr&aelig;stativ. Det kan ogs&aring; ske, hvis presenningens liner er fastgjort h&oslash;jt oppe i stativet. Flyt linerne ned omkring b&aring;dens k&oslash;l, ror, propelaksel og andre lavt placerede steder. Sl&aring; kiler under eller over stativets ben, hvis de er l&oslash;se. S&oslash;m afstivninger p&aring; et m&oslash;rt tr&aelig;stativ.<br />\r\nVind<br />\r\nm/s<br />\r\nKuling<br />\r\n14-17<br />\r\nH&aring;rd kuling:<br />\r\n17-21<br />\r\nStormende kuling:<br />\r\n21-25<br />\r\n13<br />\r\nStorm:<br />\r\n25-28<br />\r\nSt&aelig;rk storm:<br />\r\n28-33<br />\r\nOrkan:<br />\r\n33+<br />\r\nN&aring;r teksten n&aelig;vner storm, er det alts&aring; 28-33 m/s. Ved ca. 30 m/s er det vanskeligt at st&aring; op uden at bl&aelig;se omkuld. I en b&aring;d kan man kun kravle, og ved sejlads mod vinden sl&aring;r b&oslash;lgespr&oslash;jt h&aring;rdere end hagl, s&aring; man m&aring; vende ansigtet bort.<br />\r\nMeteorologer angiver en tropisk hurricane i km/t, &rdquo;for det ved alle, hvad er.&rdquo; Nej, det ved vi sejlere ikke, for vi er vant til meter i sekundet. Men hvis du h&oslash;rer om en hurricane med 150 km/t, svarer det til 42 m/s 200 km/t er 56 m/s.</p>\r\n', '2015-10-17 16:03:29', 2, 7, 0),
(21, 'Når en anglofil skal vælge', '<p>Triumph Daytona 955i &aring;rgang 2000.<br />\r\nFor 2 &aring;r siden havde jeg forn&oslash;jelsen af at pr&oslash;vek&oslash;re en Triumph 1200 Daytona, og det var en s&aelig;rdeles positiv oplevelse.<br />\r\nAllerede fra f&oslash;rste sekund vidste jeg at her er en sp&aelig;ndende maskine, men desv&aelig;rre skulle den ikke blive min.<br />\r\nLyden fra den 147 heste store motor glemte jeg ikke lige med det samme.<br />\r\nDa jeg s&aring; efter en lang vinter skulle til at overveje, hvilken MC jeg skulle k&oslash;be, faldt tankerne tilbage p&aring; den positive oplevelse jeg havde p&aring; 1200 Daytona&rsquo;en. Jeg k&oslash;rte ned til Vagn Jensen. i Lystrup og spurgte efter en 1200 Daytona - han mente imidlertid i stedet, at jeg skulle k&oslash;be en 955i. Efter en pr&oslash;vetur var jeg solgt og k&oslash;bte den med det samme.<br />\r\nEfter nu at have k&oslash;rt en del km p&aring; 955&#39;eren er jeg ikke i tvivl om at jeg har fundet en MC, som jeg vil have gl&aelig;de af i mange &aring;r.<br />\r\n15<br />\r\n<h6>Udseende og lyd</h6>\r\nDet karry gule udseende f&aring;r mange til at vende hovedet en ekstra gang, is&aelig;r n&aring;r man er inde og tanke op.<br />\r\nLyden af denne motor er en behagelig oplevelse, dens tre cylindres klang giver omg&aring;ende opm&aelig;rksomhed, n&aring;r man kommer hurtigt frem i trafikken. De fleste bilister sp&aelig;rrer &oslash;jnene op n&aring;r man foretager en hurtig overhaling og motoren runder de 9000 omdrejninger.<br />\r\nK&oslash;reegenskaber<br />\r\n955&rsquo;eren egner sig ikke til l&aelig;ngerevarende byk&oslash;rsel. Efter et stykke tid begynder k&oslash;restillingen at f&oslash;les anstrengende, men det er heldigvis ikke i byen at jeg tilbringer det meste af min tid. P&aring; landevejen f&oslash;ler man sig noget bedre til rette, dog skal man holde &oslash;je med kilometert&aelig;lleren, da man helt ubevidst kommer til at overskride de tilladte 80 km i timen. Motorvejen er 955&rsquo;erns foretrukne legeplads, og her er det sjovt at lukke op for de 130 legesyge heste. De 250 km/t opn&aring;s p&aring; ingen tid og selv p&aring; den anden side af denne hastighed, f&oslash;ler du stadig at det er dig der har kontrollen over MC&rsquo;en.<br />\r\n<h6>Styreegenskaber</h6>\r\nStyringen er pr&aelig;cis, og man kan tr&aelig;kke den igennem et sving, uden man p&aring; noget tidspunkt f&oslash;ler vrik eller vrid.<br />\r\nSkal det g&aring; st&aelig;rkt, og er man i et omr&aring;de med en masse sving, s&aring; er det at det bliver sjovt - her kan man virkeligt komme igennem uden at man f&oslash;ler maskine tager magten fra en.<br />\r\n<h6>Bremser</h6>\r\nBremserne er s&aelig;rdeles effektive og nemme at dosere. En bilist med sorte nummerplader som ikke overholdte sin vigepligt, gav mig lejlighed at foretage en katastrofe opbremsning. Testen forl&oslash;b perfekt og bilisten fik opfrisket diverse gloser fra det danske sprog.<br />\r\n<h6>&Oslash;konomi</h6>\r\nDet er en dyr, meget dyr MC, men man f&aring;r trods alt en MC der er anderledes.<br />\r\nVed normal k&oslash;rsel er benzin forbruget omkring de 18km/l.<br />\r\nKaskoforsikringen ligger p&aring; ca. 12.000 kr. om &aring;ret.<br />\r\n<h6>Tuning</h6>\r\nDet skulle ikke v&aelig;re n&oslash;dvendigt, men det er muligt at f&aring; ekstra HK ud af denne pragtmaskine. Triumph kan levere en effektudst&oslash;dning med en ganske l&aelig;kker lyd. Derudover kan man chiptune og p&aring; denne m&aring;de f&aring; ekstra HK.<br />\r\nSkal det v&aelig;re voldsomt, kan man faktisk f&aring; en turbo der er specielt udviklet til 955&#39;eren. Med denne p&aring;monteret, har man mere end 160 heste p&aring; baghjulet. Desv&aelig;rre koster s&aring;dan en 35.000 tusinde, men hvem har ogs&aring; brug for en turbo...? M&aring;ske skulle man her til vinter. Hmm...<br />\r\n<h6>Konklusion</h6>\r\nAlt i alt en flot maskine, som styrer fortr&aelig;ffeligt, men der er dog minusser:<br />\r\nSelve gearskiftet virker lidt for mekanisk, og burde v&aelig;re mere lydl&oslash;st p&aring; en s&aring;dan cykel.<br />\r\n16<br />\r\nP&aring; begge sider af maskinen sidder der et skjold, der d&aelig;kker for k&aelig;de og for bag bremsen. Dette er udformet p&aring; en s&aring;dan m&aring;de, at ens buksekant kan h&aelig;nge fast, hvis den h&aelig;nger l&oslash;st. Dette pr&oslash;vede jeg en dag da jeg standsede for at tanke op. Resultatet var et brud p&aring; k&aring;ben.</p>\r\n', '2016-02-01 12:36:32', 3, 9, 0),
(22, 'BMW F650GS', '<p>Jeg har haft forn&oslash;jelsen af at pr&oslash;vek&oslash;re BMW&#39;s F650GS, som er en s&aelig;rdeles alsidig motorcykel. Motorcyklen er udstyret med semi-offroad affjedring og d&aelig;k, hvilket g&oslash;r den til en all-round motorcykel der b&aring;de k&oslash;rer godt i byen, p&aring; landevejen og i lettere terr&aelig;n.<br />\r\nF650GS&#39;eren er ikke noget lyn, og henvender sig, med sine 650 kubik og en topfart p&aring; godt 160 km/t, ogs&aring; til det yngre motorcykelfolk, hvor den udm&aelig;rker sig ved let og hurtig styring, god komfort og motocross pr&aelig;get udseende.<br />\r\n<h6>Udseende og lyd</h6>\r\nMotorcyklen ser ikke ud af meget, og lyder heller ikke af meget. De 650 kubik kommer fra en en-cylindret motor, hvilket giver en lidt uj&aelig;vn motorgang og svag accelerationsevne - den uj&aelig;vne motorgang kommer is&aelig;r til udtryk ved h&oslash;jere hastigheder p&aring; motorvejen. En l&aelig;kker detalje er at der er varme i h&aring;ndtagene, hvilket er rigtig dejligt ved landevejs- og motorvejsk&oslash;rsel, og s&aring; er den ligeledes udstyret med ABS bremser der virker utroligt godt.<br />\r\n<h6>K&oslash;reegenskaber</h6>\r\nMotorcyklen er bedst til byk&oslash;rsel og landevejsk&oslash;rsel, da vindsk&aelig;rmen kun giver minimal beskyttelse p&aring; motorvejen, men er man til vind i h&aring;ret (eller hjelmen red.), er den ogs&aring; sjov at k&oslash;re p&aring; her.<br />\r\nDen har, som skrevet, ikke de store pr&aelig;stationsegenskaber, men kan k&oslash;re dig fra punkt A til B p&aring; en hurtig og betryggende m&aring;de. Eneste &oslash;nske til forbedring her, kunne v&aelig;re et ekstra gear at give af, da man meget hurtigt n&aring;r femte og sidste gear.<br />\r\n<h6>Styreegenskaber</h6>\r\nMotorcyklen f&oslash;les rigtig retningsstabil, men dette g&oslash;r hverken styringen tr&aelig;g eller langsom. Den man&oslash;vrerer godt i sving og slalom b&aring;de p&aring; alm. asfaltvej og grusvej.<br />\r\n<h6>Bremser</h6>\r\nBremserne er effektive og nemme at dosere, og ABS&#39;en hj&aelig;lper rigtig godt til ved katastrofeopbremsninger.<br />\r\n<h6>&Oslash;konomi</h6>\r\nDette er en billig motorcykel, men kigger man p&aring; andre motorcykler i denne prisklasse, kan man let f&aring; en meget mere sportspr&aelig;get motorcykel for pengene.<br />\r\n<h6>Konklusion</h6>\r\nAlt i alt en god all-round maskine, som k&oslash;rer og styrer godt. Motorcyklen her er utrolig sjov at &quot;smide&quot; rundt p&aring; de kuperede grusveje...</p>\r\n', '2015-12-15 14:17:12', 3, 9, 0);
INSERT INTO `artikler` (`id`, `overskrift`, `tekst`, `dato`, `fk_kategorier_id`, `fk_bruger_id`, `visninger`) VALUES
(23, 'Suzuki GSF600S Bandit', '<p>Da jeg f&oslash;rste gang satte mig op p&aring; Suzuki&#39;s &quot;&aelig;ldre&quot; men bestemt ikke kedelige streetbike, var det ikke ligefrem forventningerne til en racercykel jeg havde i baghovedet, og den er vel nok ogs&aring; bedre til seri&oslash;s brug s&aring;som et transportmiddel - ikke desto mindre g&oslash;r den sig godt p&aring; vejen, og er en fornuftig motorcykel til prisen.<br />\r\nMotorcyklen der har v&aelig;ret en af Suzuki&#39;s mest popul&aelig;re, er utroligt letk&oslash;rt og passer fint til nybegyndere s&aring;vel som de lidt mere garvede motorcyklister, og komfortm&aelig;ssigt er der ikke meget at s&aelig;tte fingre p&aring;, da s&aelig;det er af god kvalitet og k&oslash;restillingen fin til b&aring;de store og sm&aring; personer.<br />\r\nDen har en fin gas-respons, og tr&aelig;kker godt i alle seks gear.<br />\r\n&lt;h6&gt;Udseende og lyd&lt;/h6&gt;<br />\r\nBanditten er sk&aring;ret efter streetbike eller nakedbike konceptet, hvor der er frit udsyn til motoren, og der er efter min mening gjort et godt arbejde.<br />\r\nHalvk&aring;ben til 10.000 kr., er ganske vidst et dyrt skridt fra den helt n&oslash;gne model, men et godt valg, hvis man har lyst til at k&oslash;re l&aelig;ngere ture eller motorvejsture der bestemt ikke er s&aelig;rligt sjove uden - desuden ser den rigtig fr&aelig;k ud forfra, noget man godt kunne have videref&oslash;rt til GSX-F serien.<br />\r\nMotoren p&aring; banditten, der er luft og oliek&oslash;let og m&aring;ske lidt gammeldags, lyder ikke af meget, men giver alligevel et indtryk af en motor der er rask gennempr&oslash;vet. De fire cylindre kan godt virke lidt &quot;slappe&quot; i de lave omdrejninger, men har faktisk et solidt tr&aelig;k i mellemomr&aring;det fra ca. 4-5000 omdrejninger til ca. 9-10.000 omdrejninger, hvorefter motoren ligesom mister pustet op imod de 12.000 omdrejninger.<br />\r\nDen yder dog godt prisen taget i betragtning, og pepper man den lidt op med jet-kit, sportsfilter, potte og omdysning, vil man kunne hente nogle af de gemte kr&aelig;fter frem, der har m&aring;ttet vige for emissionskravene.<br />\r\n&lt;h6&gt;K&oslash;reegenskaber&lt;/h6&gt;<br />\r\nDer er igen ikke snak om nogen sportscykel, men banditten er alligevel utrolig styrevillig og letk&oslash;rt, og der f&oslash;les ingen ubehag hvad enten man k&oslash;rer 50 km/t eller 200 km/t. Den ligger utroligt godt i svingene, der kan tages som en leg selv for de mere uerfarne.<br />\r\nAffjedringen virker ok p&aring; en motorcykel som denne, hvor den bagerste monost&oslash;dd&aelig;mpers d&aelig;mpning kan justeres i syv trin og returd&aelig;mpning i fire trin. Der er ingen justeringsmuligheder p&aring; d&aelig;mpningen i forgaflen, hvilket ikke fordrer alt for aggressiv k&oslash;rsel.<br />\r\nK&oslash;restillingen er som sagt rimelig, men det skal dog siges, at l&aelig;ngere k&oslash;reture kan blive lidt ubehagelige hvis man har lange ben, grundet fodhvilernes placering, hvilket is&aelig;r kan komme til at genere hvis man under hurtig k&oslash;rsel kryber ned bag halvk&aring;ben, og da de bagerste fodhvilere sidder rimeligt h&oslash;jt, kan det ogs&aring; blive lidt ubekvemt at sidde bagp&aring; i l&aelig;ngere tid.<br />\r\n&lt;h6&gt;&Oslash;konomi&lt;/h6&gt;<br />\r\nDenne motorcykel h&oslash;rer til i den billige ende, og er en glimrende begynder-mc. Den har en fornuftig benzin&oslash;konomi der ved almindelig k&oslash;rsel giver en r&aelig;kkeevne p&aring; omkring 17 km/l, og er billig i forsikring.<br />\r\nDa nyprisen ligger godt under 100.000 kr., er den ogs&aring; noget alle burde kunne klemme ind i budgettet, uden at sl&aring; det helt i stykker.<br />\r\n&lt;h6&gt;Konklusion&lt;/h6&gt;<br />\r\nHvis man har brug for et transportmiddel der samtidigt er sjovt at k&oslash;re p&aring;, og som ogs&aring; kan k&oslash;re hurtigt, er banditten lige sagen - s&oslash;ger man derimod noget mere sportspr&aelig;get, er dette nok ikke motorcyklen, da den hurtigt bliver triviel at k&oslash;re p&aring;.<br />\r\nMen set p&aring; den lyse side, er den s&aring; billig at man vil kunne udskifte den med noget st&oslash;rre efter et par &aring;r, hvis det er det man &oslash;nsker.</p>\r\n', '2015-10-01 09:34:19', 3, 8, 0),
(24, 'Vedligeholdelse før vinteren', '<p>Der er ingen tvivl om at vinteren er h&aring;rd ved din motorcykel. Derfor er det en god id&eacute; at opbevare den indend&oslash;rs - har du ikke den mulighed, tilbyder flere forhandlere opbevaring og pleje for et par hundrede kroner.<br />\r\nForsikringsselskaberne tager ekstra h&oslash;je priser for forsikring af mc i vinterm&aring;nederne, s&aring; derfor er det en god id&eacute; at indlevere nummerpladen til dem.<br />\r\nPleje f&oslash;r vinteren Det f&oslash;rste du skal g&oslash;re er at s&oslash;rge for at tanken er fyldt op med benzin, s&aring;ledes tanken ikke ruster - Husk at benzin godt kan blive for gammel.<br />\r\nDern&aelig;st skal du reng&oslash;re motorcyklen grundigt, og give s&aelig;det en gang l&aelig;derfedt - har du k&aring;be p&aring; din motorcykel, m&aring; du ikke bruge ruderens eller sprit til at reng&oslash;re glasset, da dette h&aelig;rdes og splintrer under styrt. Sm&oslash;r al gummi med noget gummipleje. Sm&oslash;r alle lejer med olie eller WD-40, og rens k&aelig;den med noget k&aelig;derens. P&aring;f&oslash;r k&aelig;den k&aelig;despray.</p>\r\n\r\n<h6>Motoren skal ogs&aring; have en omgang!</h6>\r\n\r\n<p>Allerf&oslash;rst skal du skifte olie og oliefilter, hvorefter du tager t&aelig;ndr&oslash;rene ud, og reng&oslash;re disse med en st&aring;lb&oslash;rste hvis de tr&aelig;nger til det. Afmonter batteriet, og p&aring;fyld destilleret vand (kan f&aring;s p&aring; tankstationer), hvis dette er n&oslash;dvendigt.<br />\r\nDu kan evt. tilslutte en p&aelig;re til det for at aflade det, og s&aring; oplade det igen. Dette b&oslash;r g&oslash;res en gang om m&aring;neden - husk at bruge en decideret mc-oplader.<br />\r\nDet er endvidere en god id&eacute; at udf&oslash;re eftersyn p&aring; bremser, k&aelig;de, og luftfilter...</p>\r\n\r\n<h6>I gang til for&aring;ret</h6>\r\n\r\n<p>S&oslash;rg for at aftappe karburatoren for benzin via den lille aftapningsskrue der sidder i bunden. H&aelig;ld evt. lidt karburatorv&aelig;ske i tanken, for at lette starten.<br />\r\nS&oslash;rg for at batteriet er fuldt opladet.<br />\r\nPuds og pol&eacute;r motorcyklen og s&aring; er du klar til at g&aring; for&aring;ret i m&oslash;de.</p>\r\n\r\n<p>&nbsp;</p>\r\n', '2015-09-10 20:03:43', 3, 9, 0);

-- --------------------------------------------------------

--
-- Struktur-dump for tabellen `bruger`
--

CREATE TABLE IF NOT EXISTS `bruger` (
  `id` int(11) NOT NULL,
  `navn` varchar(80) NOT NULL,
  `profiltekst` text NOT NULL,
  `billed` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `rolle` tinyint(1) NOT NULL,
  `hash` varchar(255) NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=10 DEFAULT CHARSET=latin1;

--
-- Data dump for tabellen `bruger`
--

INSERT INTO `bruger` (`id`, `navn`, `profiltekst`, `billed`, `email`, `rolle`, `hash`) VALUES
(1, 'Admin', 'Dette er admin', 'jaj.JPG', 'admin@bbbmag.dk', 1, '$2y$10$BAX3f.sFmvHj9qQhPCD4Ze9zH5wZIjiB1XaU3dTa9bCSKpPLSi8sa'),
(3, 'Lise Lissen', 'Lorem ipsum dolor sit amet, wisi nisl. Non quis lacus auctor pretium est sed, elit mauris, ac felis cras, libero accusantium, in morbi magna magna vel. A nibh porta erat. Ultricies curabitur, ridiculus amet, interdum orci.', '1481289709_lil.jpg', 'lil@bbbmag.dk', 2, '$2y$10$xzwBu9zWCOHDGTnzQoneze6ixga3lDMtnHxNr3m0X19b/h6lc/08O'),
(5, 'Mikkel Mikkelsen', 'Lorem ipsum dolor sit amet, wisi nisl. Non quis lacus auctor pretium est sed, elit mauris, ac felis cras, libero accusantium, in morbi magna magna vel. A nibh porta erat. Ultricies curabitur, ridiculus amet, interdum orci.', '1481275386_mim.jpg', 'mim@bbbmag.dk', 2, '$2y$10$.y7YSnEe.g2Ke/tah6d0y.SGxOiwJmDaliiTQdd4o7KN.R2AyOkpm'),
(6, 'Hans Hansen', 'Lorem ipsum dolor sit amet, wisi nisl. Non quis lacus auctor pretium est sed, elit mauris, ac felis cras, libero accusantium, in morbi magna magna vel. A nibh porta erat. Ultricies curabitur, ridiculus amet, interdum orci.', '1481275419_hah.jpg', 'hah@bbbmag.dk', 2, '$2y$10$fEmRno1ElMXULRWLq5ZdqOcK1sSQelEB/3BBojkmYiqRm9x2FdoRi'),
(7, 'Jan Jensen', 'Lorem ipsum dolor sit amet, wisi nisl. Non quis lacus auctor pretium est sed, elit mauris, ac felis cras, libero accusantium, in morbi magna magna vel. A nibh porta erat. Ultricies curabitur, ridiculus amet, interdum orci.', '1481275444_jaj.JPG', 'jaj@bbbmag.dk', 2, '$2y$10$3szC/TueTHSraX.X9LnHYegisugJDhxJMJnWrwSrNAPiOH39h1lZ6'),
(8, 'Carl Carlsen', 'Lorem ipsum dolor sit amet, wisi nisl. Non quis lacus auctor pretium est sed, elit mauris, ac felis cras, libero accusantium, in morbi magna magna vel. A nibh porta erat. Ultricies curabitur, ridiculus amet, interdum orci.', '1481275470_cac.jpeg', 'cac@bbbmag.dk', 2, '$2y$10$b79Gq5a97YRkeQ34M1XP1.X4TkN.se5L.Nj58dV2x71O8k9J2C.hm'),
(9, 'Erik Eriksen', 'Lorem ipsum dolor sit amet, wisi nisl. Non quis lacus auctor pretium est sed, elit mauris, ac felis cras, libero accusantium, in morbi magna magna vel. A nibh porta erat. Ultricies curabitur, ridiculus amet, interdum orci.', '1481275495_ere.jpg', 'ere@bbbmag.dk', 2, '$2y$10$/yK1znGOENiJIHBVXKdRa.XFRq0AfsXdRR5rb3bOFIWbAueGDqutK');

-- --------------------------------------------------------

--
-- Struktur-dump for tabellen `kategorier`
--

CREATE TABLE IF NOT EXISTS `kategorier` (
  `id` int(11) NOT NULL,
  `navn` varchar(40) NOT NULL,
  `sortering` int(11) NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=5 DEFAULT CHARSET=latin1;

--
-- Data dump for tabellen `kategorier`
--

INSERT INTO `kategorier` (`id`, `navn`, `sortering`) VALUES
(1, 'Biler', 1),
(2, 'Både', 2),
(3, 'Bike''s', 3);

-- --------------------------------------------------------

--
-- Struktur-dump for tabellen `kategorie_editor`
--

CREATE TABLE IF NOT EXISTS `kategorie_editor` (
  `fk_bruger_id` int(11) NOT NULL,
  `fk_kategorier_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Data dump for tabellen `kategorie_editor`
--

INSERT INTO `kategorie_editor` (`fk_bruger_id`, `fk_kategorier_id`) VALUES
(3, 1),
(5, 1),
(6, 2),
(7, 2),
(8, 3),
(9, 3);

-- --------------------------------------------------------

--
-- Struktur-dump for tabellen `kommentar`
--

CREATE TABLE IF NOT EXISTS `kommentar` (
  `id` int(11) NOT NULL,
  `navn` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `dato` datetime NOT NULL,
  `tekst` text NOT NULL,
  `fk_artikler_id` int(11) NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=11 DEFAULT CHARSET=latin1;

--
-- Data dump for tabellen `kommentar`
--

INSERT INTO `kommentar` (`id`, `navn`, `email`, `dato`, `tekst`, `fk_artikler_id`) VALUES
(1, 'Test navn', '', '2016-12-07 10:15:25', 'test tekst', 5),
(2, 'test2', '', '2016-12-07 10:24:44', 'tst2', 5),
(6, 'Bo', 'test2@test.dk', '2016-12-07 11:15:40', 'Hvordan går det?', 4),
(7, 'Kurt', '', '2016-12-09 14:24:05', 'Hahahaha det lyder som en god båd', 4),
(8, 'Sebastian', '', '2016-12-09 14:28:23', 'God Artikel !', 12),
(10, 'Jens', '', '2016-12-09 14:30:32', ':O det vil sige at jeg har råd til sådan en bil nu', 14);

-- --------------------------------------------------------

--
-- Struktur-dump for tabellen `kontakt`
--

CREATE TABLE IF NOT EXISTS `kontakt` (
  `adresse` text NOT NULL,
  `by` varchar(255) NOT NULL,
  `postnr` int(4) NOT NULL,
  `land` varchar(255) NOT NULL,
  `telefon` varchar(40) NOT NULL,
  `fax` varchar(40) NOT NULL,
  `email` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Data dump for tabellen `kontakt`
--

INSERT INTO `kontakt` (`adresse`, `by`, `postnr`, `land`, `telefon`, `fax`, `email`) VALUES
('Marielundvej 46 E', 'Herlev', 2730, 'Denmark', '+45 7011 5100', '+45 4485 8925', 'redaktionen@bbbmag.dk');

-- --------------------------------------------------------

--
-- Struktur-dump for tabellen `log`
--

CREATE TABLE IF NOT EXISTS `log` (
  `id` int(11) NOT NULL,
  `tekst` varchar(255) NOT NULL,
  `dato` datetime NOT NULL,
  `fk_bruger_id` int(11) NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=27 DEFAULT CHARSET=latin1;

--
-- Data dump for tabellen `log`
--

INSERT INTO `log` (`id`, `tekst`, `dato`, `fk_bruger_id`) VALUES
(1, 'artiklen test blevt oprettet', '2016-12-08 15:54:24', 1),
(2, 'artiklen test2 blevt updateret', '2016-12-08 15:57:38', 1),
(3, 'artiklen test3 blevt updateret', '2016-12-08 15:58:28', 1),
(4, 'artiklen test3 blevt slettet', '2016-12-08 15:58:40', 1),
(5, 'artiklen test3 blev slettet', '2016-12-09 09:16:58', 1),
(6, 'artiklen test blev slettet', '2016-12-09 09:17:00', 1),
(7, 'artiklen Test blev slettet', '2016-12-09 09:17:03', 1),
(8, 'artiklen Småt er godt – endelig blev oprettet', '2016-12-09 09:19:05', 1),
(9, 'artiklen Småt er godt – endelig blev slettet', '2016-12-09 09:19:12', 1),
(10, 'artiklen Småt er godt – endelig blev updateret', '2016-12-09 09:24:09', 1),
(11, 'artiklen General Motors svarer igen blev oprettet', '2016-12-09 09:26:19', 1),
(12, 'artiklen General Motors svarer igen æøå blev slettet', '2016-12-09 09:26:25', 1),
(13, 'artiklen Nissan-finansiering skærer i prisen blev oprettet', '2016-12-09 09:29:57', 1),
(14, 'artiklen Kongen blandt sportsvogne tilbage blev oprettet', '2016-12-09 09:30:35', 1),
(15, 'artiklen Seat Leon Van tordner frem blev oprettet', '2016-12-09 09:31:14', 1),
(16, 'artiklen Fremtidens Supermateriale: Nanorør blev updateret', '2016-12-09 09:32:38', 1),
(17, 'artiklen Bryant 190 Bowrider blev oprettet', '2016-12-09 09:34:34', 1),
(18, 'artiklen Nauta motoryacht blev oprettet', '2016-12-09 09:39:38', 1),
(19, 'artiklen Hvis nabobåden kommer i klemme blev oprettet', '2016-12-09 10:08:36', 1),
(20, 'artiklen Vinterstorm = 25-33 m/s blev oprettet', '2016-12-09 10:11:03', 1),
(21, 'artiklen Ny koncept-bike fra Suzuki blev updateret', '2016-12-09 10:13:51', 1),
(22, 'artiklen Når en anglofil skal vælge blev oprettet', '2016-12-09 10:15:44', 1),
(23, 'artiklen BMW F650GS blev oprettet', '2016-12-09 10:17:13', 1),
(24, 'artiklen Suzuki GSF600S Bandit blev oprettet', '2016-12-09 10:18:58', 1),
(25, 'artiklen Vedligeholdelse før vinteren blev oprettet', '2016-12-09 10:20:40', 1),
(26, 'artiklen Vedligeholdelse før vinteren blev updateret', '2016-12-09 10:20:58', 1);

-- --------------------------------------------------------

--
-- Struktur-dump for tabellen `nyhedsbrev`
--

CREATE TABLE IF NOT EXISTS `nyhedsbrev` (
  `id` int(11) NOT NULL,
  `email` varchar(255) NOT NULL,
  `dato` datetime NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=4 DEFAULT CHARSET=latin1;

--
-- Data dump for tabellen `nyhedsbrev`
--

INSERT INTO `nyhedsbrev` (`id`, `email`, `dato`) VALUES
(3, 'test@bbbmag.dk', '2016-12-09 14:35:37');

-- --------------------------------------------------------

--
-- Struktur-dump for tabellen `sponsor`
--

CREATE TABLE IF NOT EXISTS `sponsor` (
  `id` int(11) NOT NULL,
  `visninger` int(11) NOT NULL,
  `billed` varchar(255) NOT NULL,
  `fk_kategorier_id` int(11) NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=35 DEFAULT CHARSET=latin1;

--
-- Data dump for tabellen `sponsor`
--

INSERT INTO `sponsor` (`id`, `visninger`, `billed`, `fk_kategorier_id`) VALUES
(1, 118, 'bike_ad_1.gif', 3),
(2, 106, 'bike_ad_2.gif', 3),
(3, 120, 'bike_ad_3.gif', 3),
(4, 126, 'bike_ad_4.gif', 3),
(5, 119, 'bike_ad_5.gif', 3),
(6, 114, 'bike_ad_6.gif', 3),
(7, 138, 'boat_ad_1.gif', 2),
(8, 129, 'boat_ad_2.gif', 2),
(9, 122, 'boat_ad_3.gif', 2),
(10, 129, 'boat_ad_4.gif', 2),
(11, 127, 'boat_ad_5.gif', 2),
(12, 151, 'boat_ad_6.gif', 2),
(13, 113, 'car_ad_1.gif', 1),
(14, 137, 'car_ad_2.gif', 1),
(15, 124, 'car_ad_3.gif', 1),
(16, 112, 'car_ad_4.gif', 1),
(31, 121, 'car_ad_5.gif', 1);

-- --------------------------------------------------------

--
-- Struktur-dump for tabellen `sponsorinfo`
--

CREATE TABLE IF NOT EXISTS `sponsorinfo` (
  `id` int(11) NOT NULL,
  `tekst` text NOT NULL,
  `visninger` int(11) NOT NULL,
  `priser` decimal(10,2) NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=10 DEFAULT CHARSET=latin1;

--
-- Data dump for tabellen `sponsorinfo`
--

INSERT INTO `sponsorinfo` (`id`, `tekst`, `visninger`, `priser`) VALUES
(1, '<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Curabitur porttitor ex ac justo elementum fermentum. Fusce viverra sodales nulla sed condimentum. Praesent id varius ligula, eu suscipit odio. Integer ut justo in lacus bibendum tempus. Maecenas sit amet interdum risus. Sed hendrerit viverra ex, ut gravida ex volutpat lacinia. Phasellus in felis sodales sem malesuada luctus. Fusce lobortis mauris non quam varius malesuada. Praesent vulputate blandit erat ut egestas. Nullam venenatis turpis at neque mattis vestibulum.</p>\r\n\r\n<p>Vestibulum blandit tristique nisl, ac ullamcorper elit vulputate quis. Maecenas et orci convallis, gravida dolor sit amet, maximus dui. Suspendisse feugiat ante eu pulvinar ultricies. Maecenas non est in sem consequat dignissim. Quisque accumsan venenatis tristique. Vestibulum cursus, nunc id aliquam sagittis, ex ex faucibus neque, non interdum metus est vitae eros</p>\r\n', 0, '0.00'),
(2, '<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Curabitur porttitor ex ac justo elementum fermentum. Fusce viverra sodales nulla sed condimentum. Praesent id varius ligula, eu suscipit odio. Integer ut justo in lacus bibendum tempus. Maecenas sit amet interdum risus. Sed hendrerit viverra ex, ut gravida ex volutpat lacinia. Phasellus in felis sodales sem malesuada luctus. Fusce lobortis mauris non quam varius malesuada. Praesent vulputate blandit erat ut egestas. Nullam venenatis turpis at neque mattis vestibulum.</p>\r\n\r\n<p>Vestibulum blandit tristique nisl, ac ullamcorper elit vulputate quis. Maecenas et orci convallis, gravida dolor sit amet, maximus dui. Suspendisse feugiat ante eu pulvinar ultricies. Maecenas non est in sem consequat dignissim. Quisque accumsan venenatis tristique. Vestibulum cursus, nunc id aliquam sagittis, ex ex faucibus neque, non interdum metus est vitae eros</p>\r\n', 1000, '0.50'),
(3, '<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Curabitur porttitor ex ac justo elementum fermentum. Fusce viverra sodales nulla sed condimentum. Praesent id varius ligula, eu suscipit odio. Integer ut justo in lacus bibendum tempus. Maecenas sit amet interdum risus. Sed hendrerit viverra ex, ut gravida ex volutpat lacinia. Phasellus in felis sodales sem malesuada luctus. Fusce lobortis mauris non quam varius malesuada. Praesent vulputate blandit erat ut egestas. Nullam venenatis turpis at neque mattis vestibulum.</p>\r\n\r\n<p>Vestibulum blandit tristique nisl, ac ullamcorper elit vulputate quis. Maecenas et orci convallis, gravida dolor sit amet, maximus dui. Suspendisse feugiat ante eu pulvinar ultricies. Maecenas non est in sem consequat dignissim. Quisque accumsan venenatis tristique. Vestibulum cursus, nunc id aliquam sagittis, ex ex faucibus neque, non interdum metus est vitae eros</p>\r\n', 2000, '0.47'),
(4, '<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Curabitur porttitor ex ac justo elementum fermentum. Fusce viverra sodales nulla sed condimentum. Praesent id varius ligula, eu suscipit odio. Integer ut justo in lacus bibendum tempus. Maecenas sit amet interdum risus. Sed hendrerit viverra ex, ut gravida ex volutpat lacinia. Phasellus in felis sodales sem malesuada luctus. Fusce lobortis mauris non quam varius malesuada. Praesent vulputate blandit erat ut egestas. Nullam venenatis turpis at neque mattis vestibulum.</p>\r\n\r\n<p>Vestibulum blandit tristique nisl, ac ullamcorper elit vulputate quis. Maecenas et orci convallis, gravida dolor sit amet, maximus dui. Suspendisse feugiat ante eu pulvinar ultricies. Maecenas non est in sem consequat dignissim. Quisque accumsan venenatis tristique. Vestibulum cursus, nunc id aliquam sagittis, ex ex faucibus neque, non interdum metus est vitae eros</p>\r\n', 5000, '0.45'),
(5, '<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Curabitur porttitor ex ac justo elementum fermentum. Fusce viverra sodales nulla sed condimentum. Praesent id varius ligula, eu suscipit odio. Integer ut justo in lacus bibendum tempus. Maecenas sit amet interdum risus. Sed hendrerit viverra ex, ut gravida ex volutpat lacinia. Phasellus in felis sodales sem malesuada luctus. Fusce lobortis mauris non quam varius malesuada. Praesent vulputate blandit erat ut egestas. Nullam venenatis turpis at neque mattis vestibulum.</p>\r\n\r\n<p>Vestibulum blandit tristique nisl, ac ullamcorper elit vulputate quis. Maecenas et orci convallis, gravida dolor sit amet, maximus dui. Suspendisse feugiat ante eu pulvinar ultricies. Maecenas non est in sem consequat dignissim. Quisque accumsan venenatis tristique. Vestibulum cursus, nunc id aliquam sagittis, ex ex faucibus neque, non interdum metus est vitae eros</p>\r\n', 10000, '0.40'),
(6, '<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Curabitur porttitor ex ac justo elementum fermentum. Fusce viverra sodales nulla sed condimentum. Praesent id varius ligula, eu suscipit odio. Integer ut justo in lacus bibendum tempus. Maecenas sit amet interdum risus. Sed hendrerit viverra ex, ut gravida ex volutpat lacinia. Phasellus in felis sodales sem malesuada luctus. Fusce lobortis mauris non quam varius malesuada. Praesent vulputate blandit erat ut egestas. Nullam venenatis turpis at neque mattis vestibulum.</p>\r\n\r\n<p>Vestibulum blandit tristique nisl, ac ullamcorper elit vulputate quis. Maecenas et orci convallis, gravida dolor sit amet, maximus dui. Suspendisse feugiat ante eu pulvinar ultricies. Maecenas non est in sem consequat dignissim. Quisque accumsan venenatis tristique. Vestibulum cursus, nunc id aliquam sagittis, ex ex faucibus neque, non interdum metus est vitae eros</p>\r\n', 25000, '0.35'),
(7, '<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Curabitur porttitor ex ac justo elementum fermentum. Fusce viverra sodales nulla sed condimentum. Praesent id varius ligula, eu suscipit odio. Integer ut justo in lacus bibendum tempus. Maecenas sit amet interdum risus. Sed hendrerit viverra ex, ut gravida ex volutpat lacinia. Phasellus in felis sodales sem malesuada luctus. Fusce lobortis mauris non quam varius malesuada. Praesent vulputate blandit erat ut egestas. Nullam venenatis turpis at neque mattis vestibulum.</p>\r\n\r\n<p>Vestibulum blandit tristique nisl, ac ullamcorper elit vulputate quis. Maecenas et orci convallis, gravida dolor sit amet, maximus dui. Suspendisse feugiat ante eu pulvinar ultricies. Maecenas non est in sem consequat dignissim. Quisque accumsan venenatis tristique. Vestibulum cursus, nunc id aliquam sagittis, ex ex faucibus neque, non interdum metus est vitae eros</p>\r\n', 50000, '0.30');

--
-- Begrænsninger for dumpede tabeller
--

--
-- Indeks for tabel `artikler`
--
ALTER TABLE `artikler`
  ADD PRIMARY KEY (`id`);

--
-- Indeks for tabel `bruger`
--
ALTER TABLE `bruger`
  ADD PRIMARY KEY (`id`);

--
-- Indeks for tabel `kategorier`
--
ALTER TABLE `kategorier`
  ADD PRIMARY KEY (`id`);

--
-- Indeks for tabel `kommentar`
--
ALTER TABLE `kommentar`
  ADD PRIMARY KEY (`id`);

--
-- Indeks for tabel `log`
--
ALTER TABLE `log`
  ADD PRIMARY KEY (`id`);

--
-- Indeks for tabel `nyhedsbrev`
--
ALTER TABLE `nyhedsbrev`
  ADD PRIMARY KEY (`id`);

--
-- Indeks for tabel `sponsor`
--
ALTER TABLE `sponsor`
  ADD PRIMARY KEY (`id`);

--
-- Indeks for tabel `sponsorinfo`
--
ALTER TABLE `sponsorinfo`
  ADD PRIMARY KEY (`id`);

--
-- Brug ikke AUTO_INCREMENT for slettede tabeller
--

--
-- Tilføj AUTO_INCREMENT i tabel `artikler`
--
ALTER TABLE `artikler`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=25;
--
-- Tilføj AUTO_INCREMENT i tabel `bruger`
--
ALTER TABLE `bruger`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=10;
--
-- Tilføj AUTO_INCREMENT i tabel `kategorier`
--
ALTER TABLE `kategorier`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=5;
--
-- Tilføj AUTO_INCREMENT i tabel `kommentar`
--
ALTER TABLE `kommentar`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=11;
--
-- Tilføj AUTO_INCREMENT i tabel `log`
--
ALTER TABLE `log`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=27;
--
-- Tilføj AUTO_INCREMENT i tabel `nyhedsbrev`
--
ALTER TABLE `nyhedsbrev`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=4;
--
-- Tilføj AUTO_INCREMENT i tabel `sponsor`
--
ALTER TABLE `sponsor`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=35;
--
-- Tilføj AUTO_INCREMENT i tabel `sponsorinfo`
--
ALTER TABLE `sponsorinfo`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=10;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
