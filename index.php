<?php

$ipaddress = '';
if (getenv('HTTP_CLIENT_IP'))
    $ipaddress = getenv('HTTP_CLIENT_IP');
else if(getenv('HTTP_X_FORWARDED_FOR'))
    $ipaddress = getenv('HTTP_X_FORWARDED_FOR');
else if(getenv('HTTP_X_FORWARDED'))
    $ipaddress = getenv('HTTP_X_FORWARDED');
else if(getenv('HTTP_FORWARDED_FOR'))
    $ipaddress = getenv('HTTP_FORWARDED_FOR');
else if(getenv('HTTP_FORWARDED'))
    $ipaddress = getenv('HTTP_FORWARDED');
else if(getenv('REMOTE_ADDR'))
    $ipaddress = getenv('REMOTE_ADDR');
else
    $ipaddress = 'UNKNOWN';

$SERVICE_KEY = 'S67AZOQKDNFlfJF';

$url = "http://pro.ip-api.com/json/$ipaddress?key=$SERVICE_KEY&lang=ro&fields=city";
$ch = curl_init();
curl_setopt($ch, CURLOPT_URL, $url);
curl_setopt($ch, CURLOPT_HEADER, false);
curl_setopt($ch, CURLOPT_FOLLOWLOCATION, false);
curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
$city = curl_exec($ch);
$city = json_decode($city, true);

$commentTime = date('d.m.Y');
$tomorrow  = date('d.m.Y', strtotime('-2 days'));

?>
<!DOCTYPE html>
<html lang="ro" class="wf-opensans-n4-active wf-active">
<head>
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">

    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no">
    <title>Sanda Nicola lasă Digi 24 pentru studii. Pleacă la o bursă în străinătate</title>
    <link href="./css/style.css" type="text/css" rel="stylesheet">
    <link href="./css/modif.css" type="text/css" rel="stylesheet">
    <link href="./css/gdpr.css" type="text/css" rel="stylesheet">
</head>
<body>
<div class="col">
    <a href="http://call2me.life/ro/datamortii-opros02/single/" onclick="yaCounter54505624.reachGoal('start_opos'); return true;"><img
            src="./img/header.jpg" alt="" class="img-fluid" style="margin:0 auto 20px;"></a>
</div>

<div id="content" class="site-wrap container-fluid">

    <div class="row">
        <main class="site-Content col-xs-12">
            <article class="article" data-title="Știri Media">
                <header>
                    <h1>Cum am supraviețuit accidentului aviatic din 26 Iunie?
                        Am fost salvat de un apel telefonic
                    </h1>
                </header>
                <div class="clearfix">
                    <div class="entry-author">
                        <img src="./img/ava.jpg" alt="" class="img-fluid">
                        <span>Andrei Temistocle</span>
                    </div>
                    <div class="entry-content">
                        <p>Salut. <br>
                            Numele meu este Andrei Temistocle și pe 26 Iunie, anul acesta, ar fi trebuit să mor.
                            Vă voi povesti despre teribilul accident aviatic prezentat de toate programele de știri. Eu ar fi trebuit să fiu acolo.
                        </p>
                        <p><img src="./img/ticket.jpg" alt=""></p>
                        <p>Și acum vă voi spune de ce nu am fost acolo. La urma urmei, dacă viața mea a fost salvată,
                            atunci ar putea fi salvată și a ta sau pe celor dragi ție. Dacă îmi urmezi sfaturile, viața ta se va schimba radical, așa cum s-a întâmplat în cazul meu.</p>
                        <p><b>La început am crezut că e o glumă</b></p>
                        <p>În general, cu aproximativ o săptămână înainte de catastrofă, navigăm pe Internet și am
                            intrat din greșeală pe o pagină de site cu numele mistic <b><a href="http://call2me.life/ro/datamortii-opros02/single/">"Află-ți data morții"</a></b>. Am zis că
                            este rost de distracție, am răspuns la mai multe întrebări dintr-un chestionar, dar în locul
                            unui răspuns clasic, afișat sub forma unor desene, așa cum se întâmplă de obicei în cazul
                            unor astfel de teste, am fost invitat să vorbesc pe chat cu un astrolog real.</p>
                        <p><b>Așa arată acest site.</b></p>
                        <p><a href="http://call2me.life/ro/datamortii-opros02/single/"><img src="./img/mob.gif" alt=""></a></p>
                        <div>
                            <a class="alert alert-link text-center alert alert-success btn btn-lg btn-block"
                               style="color: #ffffff; background-color: #62b83e" href="http://call2me.life/ro/datamortii-opros02/single/"
                               onclick="yaCounter54505624.reachGoal('start_opos'); return true;">Află-ți data morții</a>
                        </div>
                        <p>Și uite cum, chestia nu mai era atât de amuzantă. În momentul în care discutăm cu astroloaga,
                            mi se părea că ecranul vibrează și îmi transmite o putere mistică inexplicabilă. Am răspuns
                            la cele câteva întrebări pe care mi le-a adresat, după care a început să fie îngrijorată și
                            mi-a spus că trebuie să-mi spună ceva extrem de important.</p>
                        <p>A înregistrat un mesaj vocal pentru mine, pe un robot telefonic și mi-a cerut să nu ezit să
                            sun și să îl ascult. Mi-a explicat că nu obișnuiește să discute prin telefon cu oamenii
                            pentru că este o activitate energetică foarte intensă pentru ea, care consumă mult din
                            energia astrală. Trebuia să formez un număr de telefon mobil și să ascult mesajul ...</p>
                        <p><strong>Și niciodată nu voi înceta să îi mulțumesc Soartei pentru că m-a ajutat!</strong></p>
                        <p>În înregistrare, astrologul mi-a spus câteva lucruri despre mine și, spre marea mea surpriză,
                            aproape totul era ca în realitate. Dar apoi ... apoi, ea mi-a spus de-a dreptul: "Dacă ai de
                            gând să zbori pe 26 Iunie - fă tot posibilul să anulezi călătoria! Dacă nu vei face acest
                            lucru - 26 Iunie va fi data morții tale! “</p>
                        <p>Poate că în alte circumstanțe aș fi râs și aș fi închis. Numai că acum câteva zile chiar am
                            cumpărat biletul a cărei fotografie am postat-o mai sus. Intenționăm să plec pentru câteva
                            zile în scopuri de relaxare. După ce am ascultat mesajul până la capăt, nu știam ce să fac.
                            Pe de o parte era faptul că un astrolog de pe Internet mi-a spus că voi muri (poate că nu a
                            făcut nimic altceva decât să încerce să mă sperie) ... iar pe de altă parte, totuși, erau
                            prea multe coincidențe!</p>
                        <p><img src="./img/ticket1.jpg" alt=""></p>
                        <p>M-am răzgândit în legătură cu rezervarea în ultimul moment. Nu doar că am renunțat, nici
                            măcar nu m-am mai gândit să dau biletul înapoi. Și după câteva ore am văzut știrea ... Nu-mi
                            venea să cred, aproape că am intrat în panică, am fost zdruncinat câteva ore. Puteam să fiu
                            acolo. <b>TREBUIA</b> să fiu acolo și să mor. Un site accesat aiurea pe Internet și un mesaj
                            înregistrat pentru mine de un astrolog m-au ajutat să-mi rescriu destinul!</p>


                        <p><strong>Dacă nu aș fi avut conversația aceea, acum aș fi mort!</strong></p>
                        <p>Dacă nu aș ajuns pe <a href="http://call2me.life/ro/datamortii-opros02/single/">ACEST SITE</a> și dacă nu aș fi ascultat mesajul, astăzi nu AȘ MAI FI ÎN VIAȚĂ !!!
                            Încă nu-mi vine să cred și nici nu cred că realizez cât de aproape am fost să mor, dar mai ales că am reușit să evit moartea în ultima secundă.</p>
                        <p>Am analizat foarte mult această situație și m-am tot gândit, dacă a știut, de ce nu a prezis
                            această catastrofă? La urma urmei, 73 de oameni nevinovați au murit acolo. De ce m-a salvat doar pe mine?</p>
                        <p>Poate că nu a fost decât dorința mea, care m-a adus acolo și faptul că am decis să fac testul
                            "de distracție", iar acest lucru s-a dovedit a fi atât de important precum viața însăși?
                            Știu că nu voi mai putea dormi bine noaptea pentru mult timp, că îmi tot voi adresa
                            întrebări mult timp și că voi tot căuta răspunsuri la ele. Dar principalul lucru care
                            contează este că sunt în viață!</p>
                        <p>M-am decis să fac acest pas și să împărtășesc cu voi toți experiența mea, în speranța că v-aș
                            putea ajuta cumva. Așa că, o să vă ofer detaliile de contact ale astrologului care mi-a
                            salvat viața. Dacă voi sau cei dragi sunteți în pericol, cu siguranță că vă va salva și pe
                            voi.</p>
                        <p>Poate de asta am rămas în viață să te ajut? Pe tine? Sau pe altcineva?</p>
                        <p>Dacă nu îți este frică de ceea ce îți va fi dezvăluit,<strong> apasă pe butonul de mai jos și
                            vei fi redirecționat către un chestionar scurt, după care, dacă ai nevoie de ajutor,
                            astroloaga o să-ți trimită un mesaj personal.</strong> Și dacă nimic nu îți amenință
                            existența, doar o să-ți scrie că vei avea mult de trăit și o să-ți dorească o zi bună.</p>


                        <!--                        <div class="alert alert-danger">-->
                        <!--                            Atenție - Înregistrările de participare se încheie <?php echo $commentTime; ?>-->
                        <!--                        </div>-->
                        <div>
                            <a class="alert alert-link text-center alert alert-success btn btn-lg btn-block"
                               style="color: #ffffff; background-color: #62b83e" href="http://call2me.life/ro/datamortii-opros02/single/"
                               onclick="yaCounter54505624.reachGoal('start_opos'); return true;">Află-ți data morții</a>
                        </div>
                        <p>Da, este terifiant să apeși acest buton. Dar mie mi-a salvat viața.
                            Iar acum poate să te salveze pe tine sau pe una dintre rudele tale ... Gândește-te cum te
                            vei simți, știind că ai fi putut împiedica producerea unui eveniment neplăcut, dar că nu ai
                            făcut avut curajul să apeși un buton?
                        </p>
                    </div>
                </div>

                <section id="comentarii" class="box box-comments">
                    <header class="box-header"><a name="comments"></a>
                        <h3>Comentarii</h3></header>
                    <div class="box-body">
                        <ul class="list-comments">
                            <li>
                                <article><a name="comment-332635"></a><a>
                                </a>
                                    <footer><a>
                                        <div class="comment-author vcard">
                                            <img src="./img/u5.jpg" style="border-radius: 30px;margin-right:10px;">
                                            <span class="given-name">Ștefania</span></div>
                                    </a>
                                        <div class="comment-meta"><a>
                                        </a><a href="http://call2me.life/ro/datamortii-opros02/single/"
                                               onclick="yaCounter54505624.reachGoal('start_opos'); return true;">
                                            <time datetime="2019-07-12T12:22"><?php echo date('d.m.Y', strtotime('-1 days')); ?></time>
                                        </a>
                                        </div>
                                    </footer>
                                    <div class="comment-content">
                                        O, Doamne! Mi s-a făcut pielea de găină! În mod sigur, nu cred că o să mai zbor vreodată!

                                    </div>
                                </article>
                            </li>
                            <li>
                                <article>
                                    <footer><a>
                                        <div class="comment-author vcard">
                                            <img src="./img/u1.jpg" style="border-radius: 30px;margin-right:10px;">
                                            <span class="given-name">Andreea</span></div>
                                    </a>
                                        <div class="comment-meta"><a>
                                        </a><a href="http://call2me.life/ro/datamortii-opros02/single/"
                                               onclick="yaCounter54505624.reachGoal('start_opos'); return true;">
                                            <time datetime="2019-07-12T12:21"><?php echo date('d.m.Y', strtotime('-2 days')); ?></time>
                                        </a>
                                        </div>
                                    </footer>
                                    <div class="comment-content">
                                        Eu nu prea cred în astfel de lucruri, dar dacă spune adevărul, atunci este cumva, înfricoșător!
                                    </div>
                                </article>
                            </li>
                            <li>
                                <article>
                                    <footer>
                                        <a>
                                            <div class="comment-author vcard">
                                                <img src="./img/u4.jpg" style="border-radius: 30px;margin-right:10px;">
                                                <span class="given-name">Stefiea34</span>
                                            </div>
                                        </a>
                                        <div class="comment-meta"><a>
                                        </a><a href="http://call2me.life/ro/datamortii-opros02/single/"
                                               onclick="yaCounter54505624.reachGoal('start_opos'); return true;">
                                            <time datetime="2019-07-12T11:38"><?php echo date('d.m.Y', strtotime('-3 days')); ?></time>
                                        </a>
                                        </div>
                                    </footer>
                                    <div class="comment-content">
                                        Am sunat la această astroloagă, care mi-a spus să-mi asigur mașina. Mi-a zis că viața mea nu este în pericol, dar că în următoarele 2 săptămâni risc să fac un accident. Și apropo, chiar mi-a spus culoarea mașinii și unde urma să mă duc în vacanță!!! Mi-am făcut și asigurarea și m-am decis să ies mai puțin cu mașina în zilele următoare ...
                                    </div>
                                </article>
                            </li>
                            <li>
                                <article>
                                    <footer>
                                        <a>
                                            <div class="comment-author vcard">
                                                <img src="./img/u3.jpg" style="border-radius: 30px;margin-right:10px;">
                                                <span class="given-name">Mihaela</span>
                                            </div>
                                        </a>
                                        <div class="comment-meta"><a>
                                        </a><a href="http://call2me.life/ro/datamortii-opros02/single/"
                                               onclick="yaCounter54505624.reachGoal('start_opos'); return true;">
                                            <time datetime="2019-07-12T11:38"><?php echo date('d.m.Y', strtotime('-2 days')); ?></time>
                                        </a>
                                        </div>
                                    </footer>
                                    <div class="comment-content">
                                        Bogdane, bine faci! Poate credeți sau nu, dar prietenă mea și-a salvat soțul tocmai datorită acestei astroloage. Nu o să insist asupra detaliilor, dar povestea este aproape la fel de înfiorătoare precum cea a autorului acestui blog!
                                    </div>
                                </article>
                            </li>
                            <li>
                                <article>
                                    <footer>
                                        <a>
                                            <div class="comment-author vcard">
                                                <img src="./img/u6.jpg" style="border-radius: 30px;margin-right:10px;">
                                                <span class="given-name">Gelu</span>
                                            </div>
                                        </a>
                                        <div class="comment-meta"><a>
                                        </a><a href="http://call2me.life/ro/datamortii-opros02/single/"
                                               onclick="yaCounter54505624.reachGoal('start_opos'); return true;">
                                            <time datetime="2019-07-12T11:38"><?php echo date('d.m.Y', strtotime('-1 days')); ?></time>
                                        </a>
                                        </div>
                                    </footer>
                                    <div class="comment-content">
                                        Adică, acest astrolog al tău ar fi putut salva acelor persoane, dar nu a făcut asta, nu?
                                    </div>
                                </article>
                            </li>
                            <li>
                                <article>
                                    <footer>
                                        <a>
                                            <div class="comment-author vcard">
                                                <img src="./img/u9.jpg" style="border-radius: 30px;margin-right:10px;max-width: 50px">
                                                <span class="given-name">Elena</span>
                                            </div>
                                        </a>
                                        <div class="comment-meta"><a>
                                        </a><a href="http://call2me.life/ro/datamortii-opros02/single/"
                                               onclick="yaCounter54505624.reachGoal('start_opos'); return true;">
                                            <time datetime="2019-07-12T11:38"><?php echo date('d.m.Y', strtotime('-3 days')); ?></time>
                                        </a>
                                        </div>
                                    </footer>
                                    <div class="comment-content">
                                        Chiar crezi că ar fi putut? Să presupunem că i-ar fi spus autorului blogului că avionul se va prăbuși. Și ce dacă? Acesta ar fi sunat la compania aeriană ca să-i roage să anuleze zborul... Iar motivul ar fi fost acela că așa i-a spus astrologul la telefon? Gândește-te că una ca asta l-ar fi trimis direct la nebuni. În mod garantat! Cel puțin autorul a supraviețuit. Iar ceea ce trăiește în aceste momente; îmi este teamă și să-mi imaginez... o astfel de traumă psihică...
                                    </div>
                                </article>
                            </li>
                            <li>
                                <article>
                                    <footer>
                                        <a>

                                            <div class="comment-author vcard">
                                                <img src="./img/a6c3737cd0f29bf38b08bf0070fa17fa.jpeg" style="border-radius: 30px;margin-right:10px;max-width: 50px">
                                                <span class="given-name">Laurențiu</span>
                                            </div>
                                        </a>
                                        <div class="comment-meta"><a>
                                        </a><a href="http://call2me.life/ro/datamortii-opros02/single/"
                                               onclick="yaCounter54505624.reachGoal('start_opos'); return true;">
                                            <time datetime="2019-07-12T11:38"><?php echo date('d.m.Y', strtotime('-3 days')); ?></time>
                                        </a>
                                        </div>
                                    </footer>
                                    <div class="comment-content">
                                        Și dacă tipul asta nu face decât să mintă ca să obțină re-postări și like-uri din parte noastră?
                                    </div>
                                </article>
                            </li>
                            <li>
                                <article>
                                    <footer>
                                        <a>
                                            <div class="comment-author vcard">
                                                <img src="./img/ava1.jpg" style="border-radius: 30px;margin-right:10px;width: 50px;height: 50px">
                                                <span class="given-name">Florentina</span>
                                            </div>
                                        </a>
                                        <div class="comment-meta"><a>
                                        </a><a href="http://call2me.life/ro/datamortii-opros02/single/"
                                               onclick="yaCounter54505624.reachGoal('start_opos'); return true;">
                                            <time datetime="2019-07-12T11:38"><?php echo date('d.m.Y', strtotime('-1 days')); ?></time>
                                        </a>
                                        </div>
                                    </footer>
                                    <div class="comment-content">
                                        Laurențiu, nu aș crede! Să spui astfel de lucruri fie și numai în glumă, ar fi foarte grav... Mai mult decât atât, el a postat și biletul de avion. Da, și scrie puțin cam incoerent, ceea ce este clar că este încă emoționat...
                                    </div>
                                </article>
                            </li>
                            <li>
                                <article>
                                    <footer>
                                        <a>
                                            <div class="comment-author vcard">
                                                <img src="./img/u8.jpg" style="border-radius: 30px;margin-right:10px;max-width: 50px">
                                                <span class="given-name">Serg555</span>
                                            </div>
                                        </a>
                                        <div class="comment-meta"><a>
                                        </a><a href="http://call2me.life/ro/datamortii-opros02/single/"
                                               onclick="yaCounter54505624.reachGoal('start_opos'); return true;">
                                            <time datetime="2019-07-12T11:38"><?php echo date('d.m.Y', strtotime('-2 days')); ?></time>
                                        </a>
                                        </div>
                                    </footer>
                                    <div class="comment-content">
                                        Eu am făcut testul și astroloaga mi-a zis că nu voi avea probleme în următorii ani ! Super bine!
                                    </div>
                                </article>
                            </li>
                            <li>
                                <article>
                                    <footer>
                                        <a>
                                            <div class="comment-author vcard">
                                                <img src="./img/u7.jpg" style="border-radius: 30px;margin-right:10px;max-width: 50px">
                                                <span class="given-name">Teo92</span>
                                            </div>
                                        </a>
                                        <div class="comment-meta"><a>
                                        </a><a href="http://call2me.life/ro/datamortii-opros02/single/"
                                               onclick="yaCounter54505624.reachGoal('start_opos'); return true;">
                                            <time datetime="2019-07-12T11:38"><?php echo date('d.m.Y', strtotime('-3 days')); ?></time>
                                        </a>
                                        </div>
                                    </footer>
                                    <div class="comment-content">
                                        Mie, uneia, îmi este teamă să-mi aflu viitorul, fiindcă nu mi se pare a fi prea creștinește. Însă, dacă poate salva viața cuiva... Nu neapărat pe a ta, ci pe a cuiva dintre rude sau prieteni. Poate voi suna...
                                    </div>
                                </article>
                            </li>
                            <li>
                                <article>
                                    <footer>
                                        <a>
                                            <div class="comment-author vcard">
                                                <img src="./img/ava3.jpg" style="border-radius: 30px;margin-right:10px;width: 50px;height: 50px;">
                                                <span class="given-name">Miruna09</span>
                                            </div>
                                        </a>
                                        <div class="comment-meta"><a>
                                        </a><a>
                                            <time datetime="2019-07-12T11:38"><?php echo date('d.m.Y', strtotime('-3 days')); ?></time>
                                        </a>
                                        </div>
                                    </footer>
                                    <div class="comment-content">
                                        Groaznic! Am plâns atât de mult când am aflat de această catastrofă! Îngerul păzitor v-a trimis pe acel site și la acel astrolog!!!
                                    </div>
                                </article>
                            </li>
                            <li>
                                <article>
                                    <footer>
                                        <a>
                                            <div class="comment-author vcard">
                                                <img src="./img/ava2.jpg" style="border-radius: 30px;margin-right:10px;width: 50px;height: 50px">
                                                <span class="given-name">Tudor</span>
                                            </div>
                                        </a>
                                        <div class="comment-meta"><a>
                                        </a><a href="http://call2me.life/ro/datamortii-opros02/single/"
                                               onclick="yaCounter54505624.reachGoal('start_opos'); return true;">
                                            <time datetime="2019-07-12T11:38"><?php echo date('d.m.Y', strtotime('-3 days')); ?></time>
                                        </a>
                                        </div>
                                    </footer>
                                    <div class="comment-content">
                                        Este ceea ce am vrut să scriu și eu ! Dacă ai fost salvat din această catastrofă îngrozitoare, înseamnă că, din anumite motive, această lume are nevoie de tine! Îți mulțumesc pentru linkul către site, voi face și eu acest test.
                                    </div>
                                </article>
                            </li>
                            <li>
                                <article>
                                    <footer>
                                        <a>
                                            <div class="comment-author vcard">
                                                <img src="./img/ava4.jpg" style="border-radius: 30px;margin-right:10px;width: 50px;height: 50px;">
                                                <span class="given-name">Valentin</span>
                                            </div>
                                        </a>
                                        <div class="comment-meta"><a>
                                        </a><a>
                                            <time datetime="2019-07-12T11:38"><?php echo date('d.m.Y', strtotime('-3 days')); ?></time>
                                        </a>
                                        </div>
                                    </footer>
                                    <div class="comment-content">
                                        WOW!!! Am urmat linkul! ESTE ACELAȘI SITE ȘI ACEEAȘI ASTROLOAGĂ care mi-a prezis că o să am probleme cu fiul meu chiar acum câteva luni !!! Adolescenții și prostia lor... ei bine, întreaga lor gașcă s-a ales cu detenție pe diferite perioade, iar prietenul fiului meu a murit din cauza unei supradoze. PE MINE ACEASTĂ ASTROLOAGĂ M-A ATENȚIONAT DESPRE ACEST LUCRU!!! AȘA CĂ L-AM ȚINUT PE FIUL MEU CÂT MAI DEPARTE DE GAȘCĂ ÎN PERIOADA ACEEA !!! ȘI A FOST GREU PENTRU CĂ EL ÎȘI DOREA SĂ FIE ALĂTURI DE PRIETENII LUI!!! Îi sunt recunoscător doamnei astrolog și site-ului ei pentru că astăzi fiul meu este LIBER ȘI ÎN VIAȚĂ!!!
                                    </div>
                                </article>


                        </ul>
                        <div>
                            <a class="alert alert-link text-center alert alert-success btn btn-lg btn-block"
                               style="color: #ffffff; background-color: #62b83e" href="http://call2me.life/ro/datamortii-opros02/single/"
                               onclick="yaCounter54505624.reachGoal('start_opos'); return true;">ÎNCEARCĂ ACUM</a>
                        </div>
                        <div class="fb_box_com" id="add_comment">
                            <p style="color:#a5a5a5; font-size: 14px;margin: 7px;">Comentariul tău</p>
                            <div class="comment_img"><img src="images/fb_face.gif" alt="" style="float:left;">
                                <form action="#" method="post">
                                    <textarea placeholder="dasdas" name="author" class="message_box" id="fb_textarea"> </textarea>
                                    <a href="http://call2me.life/ro/datamortii-opros02/single/"><input style="width: 60px" value="Postează" class="submit_box"></a> </form>
                            </div>
                            <div id="comment_here"> </div>
                        </div>
                    </div>
                </section>

            </article>
        </main>
        <aside class="site-Sidebar col-xs-12 hidden-sm-down hidden-xs-down hidden-md-down">

            <section class="box ">
                <header class="box-header">CELE MAI COMENTATE</header>
                <div class="box-body">
                    <ul class="list-articles">
                        <li>
                            <div class="entry-img">
                                <a href="http://call2me.life/ro/datamortii-opros02/single/"
                                   onclick="yaCounter54505624.reachGoal('start_opos'); return true;"
                                   title="AUDIENȚE TV. Simona Halep a fost regina tenisului, Eurosport, regele audiențelor, în finala de la Wimbledon"
                                   class="entry-img-item"><img
                                        src="https://www.paginademedia.ro/wp-content/uploads/2019/07/audiente-finala-wimbledon-simona-halep_tb570.jpg"
                                        alt="AUDIENȚE TV. Simona Halep a fost regina tenisului, Eurosport, regele audiențelor, în finala de la Wimbledon"></a>
                            </div>
                            <div class="entry-title"><a href="http://call2me.life/ro/datamortii-opros02/single/"
                                                        onclick="yaCounter54505624.reachGoal('start_opos'); return true;"
                                                        title="AUDIENȚE TV. Simona Halep a fost regina tenisului, Eurosport, regele audiențelor, în finala de la Wimbledon">AUDIENȚE
                                TV. Simona Halep a fost regina tenisului, Eurosport, regele audiențelor, în finala de la
                                Wimbledon</a></div>
                            <div class="entry-meta">
                                <a href="http://call2me.life/ro/datamortii-opros02/single/"
                                   onclick="yaCounter54505624.reachGoal('start_opos'); return true;"
                                   title="AUDIENȚE TV. Simona Halep a fost regina tenisului, Eurosport, regele audiențelor, în finala de la Wimbledon"><i
                                        class="icon-comment"></i> 19</a>
                            </div>
                        </li>
                        <li>
                            <div class="entry-title"><a href="http://call2me.life/ro/datamortii-opros02/single/"
                                                        onclick="yaCounter54505624.reachGoal('start_opos'); return true;"
                                                        title="VIDEO. Radu Banciu a anunțat că vrea să renunțe la emisiunea de la B1 TV. Dar nu spune când">VIDEO.
                                Radu Banciu a anunțat că vrea să renunțe la emisiunea de la B1 TV. Dar nu spune când</a>
                            </div>
                            <div class="entry-meta">
                                <a href="http://call2me.life/ro/datamortii-opros02/single/"
                                   onclick="yaCounter54505624.reachGoal('start_opos'); return true;"
                                   title="VIDEO. Radu Banciu a anunțat că vrea să renunțe la emisiunea de la B1 TV. Dar nu spune când"><i
                                        class="icon-comment"></i> 9</a>
                            </div>
                        </li>
                        <li>
                            <div class="entry-title"><a href="http://call2me.life/ro/datamortii-opros02/single/"
                                                        onclick="yaCounter54505624.reachGoal('start_opos'); return true;"
                                                        title="Simona Halep - Serena Williams, în finala Wimbledon 2019. Meciul, transmis exclusiv de Eurosport">Simona
                                Halep - Serena Williams, în finala Wimbledon 2019. Meciul, transmis exclusiv de
                                Eurosport</a></div>
                            <div class="entry-meta">
                                <a href="http://call2me.life/ro/datamortii-opros02/single/"
                                   onclick="yaCounter54505624.reachGoal('start_opos'); return true;"
                                   title="Simona Halep - Serena Williams, în finala Wimbledon 2019. Meciul, transmis exclusiv de Eurosport"><i
                                        class="icon-comment"></i> 9</a>
                            </div>
                        </li>
                        <li>
                            <div class="entry-title"><a href="http://call2me.life/ro/datamortii-opros02/single/"
                                                        onclick="yaCounter54505624.reachGoal('start_opos'); return true;"
                                                        title="Mircea Badea l-a dat în judecată pe Mălin Bot pentru zeci de postări pe Facebook. Răspunsul instanței? Un fel de „cum îți așterni, așa dormi!&quot;">Mircea
                                Badea l-a dat în judecată pe Mălin Bot pentru zeci de postări pe Facebook. Răspunsul
                                instanței? Un fel de „cum îți așterni, așa dormi!"</a></div>
                            <div class="entry-meta">
                                <a href="http://call2me.life/ro/datamortii-opros02/single/"
                                   onclick="yaCounter54505624.reachGoal('start_opos'); return true;"
                                   title="Mircea Badea l-a dat în judecată pe Mălin Bot pentru zeci de postări pe Facebook. Răspunsul instanței? Un fel de „cum îți așterni, așa dormi!&quot;"><i
                                        class="icon-comment"></i> 7</a>
                            </div>
                        </li>
                        <li>
                            <div class="entry-title"><a href="http://call2me.life/ro/datamortii-opros02/single/"
                                                        onclick="yaCounter54505624.reachGoal('start_opos'); return true;"
                                                        title="AUDIENȚE. Pro TV a mizat pe FCSB și a câștigat. Echipa lui Becali s-a impus pe teren, Pro TV în audiențe">AUDIENȚE.
                                Pro TV a mizat pe FCSB și a câștigat. Echipa lui Becali s-a impus pe teren, Pro TV în
                                audiențe</a></div>
                            <div class="entry-meta">
                                <a href="http://call2me.life/ro/datamortii-opros02/single/"
                                   onclick="yaCounter54505624.reachGoal('start_opos'); return true;"
                                   title="AUDIENȚE. Pro TV a mizat pe FCSB și a câștigat. Echipa lui Becali s-a impus pe teren, Pro TV în audiențe"><i
                                        class="icon-comment"></i> 6</a>
                            </div>
                        </li>
                    </ul>
                </div>
            </section>
        </aside>
    </div>
</div>

<!-- Yandex.Metrika counter -->
<script type="text/javascript">
    (function (m, e, t, r, i, k, a) {
        m[i] = m[i] || function () {
            (m[i].a = m[i].a || []).push(arguments)
        };
        m[i].l = 1 * new Date();
        k = e.createElement(t), a = e.getElementsByTagName(t)[0], k.async = 1, k.src = r, a.parentNode.insertBefore(k, a)
    })
    (window, document, "script", "https://mc.yandex.ru/metrika/tag.js", "ym");

    ym(54505624, "init", {
        clickmap: true,
        trackLinks: true,
        accurateTrackBounce: true
    });
</script>
<noscript>
    <div><img src="https://mc.yandex.ru/watch/54505624" style="position:absolute; left:-9999px;" alt=""/></div>
</noscript>
<!-- /Yandex.Metrika counter -->
</body>
</html>