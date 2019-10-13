<?php
/**
 * Template Name: Trattamenti
 *
 * Template for displaying a page without sidebar even if a sidebar widget is published.
 *
 * @package understrap
 */

// Exit if accessed directly.
defined( 'ABSPATH' ) || exit;

get_header();
$container = get_theme_mod( 'understrap_container_type' );
?>

<?php if ( is_front_page() ) : ?>
  <?php get_template_part( 'global-templates/hero' ); ?>
<?php endif; ?>


<div class="wrapper" id="full-width-page-wrapper">

	

		<div class="row">

			<div class="col-md-12 content-area" id="primary">

				<main class="site-main" id="main" role="main">

                <?php while ( have_posts() ) : the_post(); ?>

                <section class="top-space"></section>

                <!--CONTENUTO INIZIALE-->
                <div class="container">
                    <?php the_content(); ?>
                </div>

                <!--============================================================================-->
                
                <div class="container pt-8">
                    <div class="row">
                        <div class="col-12 col-md-8">
                            <h4><i><?php the_field('titolo_trattamenti'); ?></i></h4>
                            <?php the_field('descrizione_trattamenti'); ?>
                        </div>
                        <div class="col-12 col-md-4 d-flex justify-content-center align-items-center">
                            <img src="<?php echo get_template_directory_uri(); ?>/img/staff-icon.svg" alt="convenction-icons" width="100px">
                        </div>
                    </div>
                </div>


                <!--ACCORDION-->
                <div class="container">
                <div id="accordionExample" class="container py-8">
                        <!-- data-parent="#accordionExample" è la proprietà che fa in modo che alterna i testi senza incolonnarli in sequenza -->
                        <div class="row">
                    
                            <div class="col-12 col-sm-3 list-group list-group-flush">
                    
                                <a class="list-group-item list-group-item-action bg-light" data-toggle="collapse" href="#collapseExample"
                                    role="button" aria-expanded="true" aria-controls="collapseExample">
                                    Conservativa
                                </a>
                    
                                <a class="list-group-item list-group-item-action bg-light" data-toggle="collapse" href="#Endodonzia"
                                    role="button" aria-expanded="false" aria-controls="Endodonzia">
                                    Endodonzia
                                </a>
                    
                                <a class="list-group-item list-group-item-action bg-light" data-toggle="collapse" href="#Ortodonzia"
                                    role="button" aria-expanded="false" aria-controls="Ortodonzia">
                                    Ortodonzia
                                </a>
                    
                                <a class="list-group-item list-group-item-action bg-light" data-toggle="collapse" href="#Igiene-Orale"
                                    role="button" aria-expanded="false" aria-controls="Igiene-Orale">
                                    Igiene Orale
                                </a>
                    
                    
                                <a class="list-group-item list-group-item-action bg-light accordion" id="test" data-toggle="collapse"
                                    data-target="#collapseOne" role="button" aria-expanded="false" aria-controls="collapseOne">
                                    Chirurgia Orale +
                                </a>
                                <div id="collapseOne" class="collapse" aria-labelledby="headingOne" data-parent="#test">
                                    <div class="list-group-item list-group-item-action bg-light">
                                        <ul>
                                            <li>
                                                <a class="list-group-item list-group-item-action bg-light" data-toggle="collapse"
                                                    href="#Denti-Inclusi" role="button" aria-expanded="true" aria-controls="Denti-Inclusi">
                                                    + Denti Inclusi
                                                </a>
                                            </li>
                                            <li>
                                                <a class="list-group-item list-group-item-action bg-light" data-toggle="collapse"
                                                    href="#Cisti" role="button" aria-expanded="true" aria-controls="Cisti">
                                                    + Cisti
                                                </a>
                                            </li>
                                            <li>
                                                <a class="list-group-item list-group-item-action bg-light" data-toggle="collapse"
                                                    href="#Impiantologia" role="button" aria-expanded="true" aria-controls="Impiantologia">
                                                    + Impiantologia
                                                </a>
                                            </li>
                                            <li>
                                                <a class="list-group-item list-group-item-action bg-light" data-toggle="collapse"
                                                    href="#Rigenerativa" role="button" aria-expanded="true" aria-controls="Rigenerativa">
                                                    + Rigenerativa Implantare
                                                </a>
                                            </li>
                                        </ul>
                                    </div>
                                </div>
                    
                    
                                <a class="list-group-item list-group-item-action bg-light accordion" id="protesi" data-toggle="collapse"
                                    data-target="#collapseTwo" role="button" aria-expanded="false" aria-controls="collapseOne">
                                    Protesi +
                                </a>
                                <div id="collapseTwo" class="collapse" aria-labelledby="headingTwo" data-parent="#protesi">
                                    <div class="list-group-item list-group-item-action bg-light">
                                        <ul>
                                            <li>
                                                <a class="list-group-item list-group-item-action bg-light" data-toggle="collapse"
                                                    href="#Fissa" role="button" aria-expanded="true" aria-controls="Fissa">
                                                    + Fissa
                                                </a>
                                            </li>
                                            <li>
                                                <a class="list-group-item list-group-item-action bg-light" data-toggle="collapse"
                                                    href="#Rimovibile" role="button" aria-expanded="true" aria-controls="Rimovibile">
                                                    + Rimovibile
                                                </a>
                                            </li>
                                            <li>
                                                <a class="list-group-item list-group-item-action bg-light" data-toggle="collapse"
                                                    href="#Combinata" role="button" aria-expanded="true" aria-controls="Combinata">
                                                    + Combinata
                                                </a>
                                            </li>
                                            <li>
                                                <a class="list-group-item list-group-item-action bg-light" data-toggle="collapse"
                                                    href="#Implantare" role="button" aria-expanded="true" aria-controls="Implantare">
                                                    + Implantare
                                                </a>
                                            </li>
                                        </ul>
                                    </div>
                                </div>
                    
                    
                    
                                <a class="list-group-item list-group-item-action bg-light" data-toggle="collapse" href="#Medicina"
                                    role="button" aria-expanded="false" aria-controls="Medicina">
                                    Medicina Estetica
                                </a>
                            </div>
                    
                            <div class="col-12 col-sm-9">
                                <div class="collapse" id="collapseExample" data-parent="#accordionExample">
                                    <div class="card card-body">
                                        <h6 class="pb-3"><i>Conservativa</i></h6>
                                        E’ la branca che si dedica ai trattamenti atti al ristabilimento di una corretta forma, funzione ed
                                        estetica del dente
                                        in seguito alla rimozione della carie e di tessuto dentale danneggiato. <br><br>
                    
                                        L’ obiettivo è conservare tessuto dentale maggiormente possibile grazie ad una ricostruzione. <br>
                                        Oggigiorno l’ amalgama d’
                                        argento ( le “otturazioni in metallo” ) è stata quasi completamente sostituita nella pratica
                                        quotidiana dai materiali
                                        compositi ( le “otturazioni bianche” con colore simil dente ) attraverso i quali avviene il
                                        ripristino dei denti
                                        cariati. <br> La cura è finalizzata in una sola seduta nella quasi totalità dei casi, il materiale
                                        indurisce immediatamente
                                        quindi il paziente può masticare tranquillamente.
                                    </div>
                                </div>
                    
                                <div class="collapse" id="Endodonzia" data-parent="#accordionExample">
                                    <div class="card card-body">
                                        <h6 class="pb-3"><i>Endodonzia</i></h6>
                                        E’ la disciplina odontoiatrica che si occupa dell’endodonto, ossia lo spazio interno del dente
                                        occupato dalla polpa dentale. <br><br>
                    
                                        La terapia endodontica di un dente si rende necessaria ogni qualvolta che, per attacco carioso in
                                        profondità o per lesione traumatica, vi sia una compromissione dell’endodonto tale da pregiudicare
                                        la vitalità del dente oppure qualora la polpa dentale sia già andata in necrosi con o senza
                                        manifestazioni dolorose. <br><br>
                    
                                        Si tratta di "devitalizzare" il dente ossia rimuovere il contenuto della camera pulpare e dei canali
                                        radicolari, successivamente detergere, sagomare e otturare il sistema canalare. Nei nostri studi si
                                        lavora con l’ottica del recupero e della conservazione in arcata dei denti. Nelle fasi operative
                                        vengono utilizzati strumenti rotanti al nichel-titanio di ultima generazione che velocizzano e
                                        facilitano i tempi della seduta.
                                    </div>
                                </div>
                    
                                <div class="collapse" id="Ortodonzia" data-parent="#accordionExample">
                                    <div class="card card-body">
                                        <h6 class="pb-3"><i>Ortodonzia</i></h6>
                                        Si occupa dell'apparato dento-maxillo-facciale dalla crescita alla maturità e ha lo scopo di
                                        stabilire corrette relazioni anatomiche e funzionali dei denti e delle basi ossee fino ad una
                                        corretta occlusione ed un soddisfacente aspetto estetico. Sempre più adulti ricorrono all’ortodonzia
                                        per migliorare soprattutto l’aspetto estetico ma i movimenti dentali in età matura sono più
                                        complessi rispetto un adolescente essendo le ossa completamente formate. <br><br>
                    
                                        L'apparecchio mobile di solito si usa come pretrattamento nei bambini per correggere abitudini (come
                                        succhiare il dito); gli apparecchi fissi sono usati negli adolescenti e negli adulti da quando quasi
                                        tutti i denti permanenti sono presenti. Si effettua terapia con mascherine trasparenti (Invasilign).
                                        In seguito alla visita, i nostri ortodontisti studiano i modelli in gesso delle arcate dentarie e le
                                        indagini radiografiche per impostare il piano cure.
                                    </div>
                                </div>
                    
                                <div class="collapse" id="Igiene-Orale" data-parent="#accordionExample">
                                    <div class="card card-body">
                                        <h6 class="pb-3"><i>Igiene Orale</i></h6>
                                        Una buona salute del cavo orale è garantita dalla rimozione della placca batterica e se ciò non
                                        viene fatto per un certo tempo, essa solidifica e si trasforma in tartaro. La placca e il tartaro
                                        sono insulti continui alle gengive e all’osso in cui sono impiantati i denti; una loro presenza
                                        duratura nel tempo determina segni di infiammazione gengivale, che sono reversibile, con il rischio
                                        di evolvere in parodontite (definita comunemente piorrea), che è irreversibile, fino alla perdita
                                        dei denti.
                    
                                        Presentarsi a controlli periodici è fondamentale per valutare la condizione della placca del proprio
                                        cavo orale ed eventualmente rimuoverla con una ablazione tartaro (pulizia dei denti) con l’obiettivo
                                        di evitare i processi irreversibili; fondamentale è una buona igiene orale domiciliare con l’uso del
                                        filo interdentale e un corretto metodo di spazzolamento.
                                    </div>
                                </div>
                    
                                <!--=================================================================================================-->
                                <div class="collapse" id="Denti-Inclusi" data-parent="#accordionExample">
                                    <div class="card card-body">
                                        <h6 class="pb-3"><i>Denti Inclusi</i></h6>
                                        I canini superiori e i terzi molari sono i denti che più frequentemente rimangono inclusi nell’ osso
                                        dato il loro difficile e lungo percorso di eruzione durante il quale diverse cause possono
                                        intervenire e determinarne l’ inclusione. Bisogna motivare ai controlli i pazienti fin da piccoli
                                        per valutare l’ eruzione di tali denti in quanto è necessario avere in arcata i canini per il
                                        fondamentale ruolo nei movimenti mandibolari ed evitare un’ eruzione dannosa dei terzi molari nei
                                        confronti dei secondi molari.
                                    </div>
                                </div>
                    
                                <div class="collapse" id="Cisti" data-parent="#accordionExample">
                                    <div class="card card-body">
                                        <h6 class="pb-3"><i>Cisti</i></h6>
                                        Le cisti dei mascellari possono avere una origine odontogena ( dal dente ) o non odontogena e sono
                                        diversamente invasive nell'ambito delle ossa mascellari. Per la loro stessa natura le cisti tendono
                                        ad espandersi continuamente e questo è uno dei motivi principali per cui devono essere rimosse; non
                                        rimuovere una cisti può portare alla perdita degli elementi dentali coinvolti o nei casi peggiori
                                        alla frattura dell'osso mandibolare in quanto l’ espansione di una lesione cistica è a spese del
                                        tessuto osseo. Come qualsiasi lesione orale, le cisti devono essere portate all'attenzione
                                        dell'anatomo patologo per una analisi istopatologica.
                                    </div>
                                </div>
                    
                                <div class="collapse" id="Impiantologia" data-parent="#accordionExample">
                                    <div class="card card-body">
                                        <h6 class="pb-3"><i>Impiantologia</i></h6>
                                        Nel caso il paziente richiede una riabilitazione fissa, vengono utilizzate tecniche chirurgiche che
                                        prevedono l’ inserimento di viti implantari in titanio che supporteranno denti in ceramica. I
                                        pazienti in questo modo non sono costretti ad accettare protesi totali o parziali removibili
                                        aumentando incredibilmente il comfort masticatorio e psicologico. <br><br>
                    
                                        Naturalmente è importante avere una quantità di osso tale da permettere l’ inserimento della vite
                                        implantare e che non ci siano strutture anatomiche rilevanti a rischio. In alcune condizioni e’
                                        possibile l’ inserimento di un impianto nella stessa seduta dell’ estrazione dentaria ( impianto
                                        post-estrattivo ), a volte anche con l’ opportunità di mettere un dente provvisorio ( impianto
                                        post-estrattivo a carico immediato ). I pazienti che si sottopongono a tali interventi vengono
                                        motivati e seguiti dal punto di vista dell’ igiene orale domiciliare, presupposto fondamentale per
                                        la longevità delle protesi su impianti. Il sistema implantare utilizzato presso i nostri studi è la
                                        metodica Winsix.
                                    </div>
                                </div>
                    
                                <div class="collapse" id="Rigenerativa" data-parent="#accordionExample">
                                    <div class="card card-body">
                                        <h6 class="pb-3"><i>Rigenerativa Implantare</i></h6>
                                        Nel caso in cui il paziente decide di riabilitare una sua edentulia attraverso una riabilitazione
                                        fissa, la scelta cade sull’ implantologia. Spesso ci troviamo di fronte ad un’ insufficiente
                                        quantità di osso per l’ inserimento della vite implantare. In questi casi e’ necessario intervenire
                                        aumentando l’ osso attraverso innesti ossei a blocco o rialzi del seno mascellare ( riempimento di
                                        osso delle cavità laterali al naso ) utilizzando osso autologo ( prelievi intraorali ). Le procedure
                                        utilizzate sono conformi alle più moderne tecniche chirurgiche che includono l' uso di membrane
                                        riassorbibili, non riassorbibili e l'uso di placche da osteosintesi in titanio.
                                    </div>
                                </div>
                    
                    
                    
                                <!--=================================================================================================-->
                                <div class="collapse" id="Fissa" data-parent="#accordionExample">
                                    <div class="card card-body">
                                        <h6 class="pb-3"><i>Fissa</i></h6>
                                        La protesi ha lo scopo di restituire la forma, la funzione, l’ estetica a denti compromessi ( ad es.
                                        fratturati o con enormi ricostruzioni ) realizzando manufatti protesici ( capsule o corone ) in
                                        metallo-ceramica, oro-ceramica o zirconia. Quest’ ultimo materiale permette la realizzazione di
                                        corone senza metallo che hanno proprietà ottiche e meccaniche simili ai denti naturali. L’ assenza
                                        del metallo permette di preparare il dente in maniera più conservativa e non dovendo nascondere
                                        nessun bordino metallico, il limite della preparazione può rimanere a livello del margine gengivale:
                                        questo aspetto permette un migliore controllo igienico del paziente. L’ utilizzo di questo materiale
                                        è indicato soprattutto per il gruppo frontale per le eccellenti proprietà estetiche che lo
                                        caratterizza.
                                    </div>
                                </div>
                    
                                <div class="collapse" id="Rimovibile" data-parent="#accordionExample">
                                    <div class="card card-body">
                                        <h6 class="pb-3"><i>Rimovibile</i></h6>
                                        Si tratta di protesi non fisse, parziali (con ganci o attacchi) o totali, in caso di parziale o
                                        totale assenza degli elementi dentari; mentre le totali sono completamente in resina, le parziali,
                                        oltre che in resina, possono presentare una struttura metallica portante ( parliamo di scheletrato )
                                        che le rende più resistenti.
                                    </div>
                                </div>
                    
                                <div class="collapse" id="Combinata" data-parent="#accordionExample">
                                    <div class="card card-body">
                                        <h6 class="pb-3"><i>Combinata</i></h6>
                                        Un ottimo compromesso sono le protesi combinate in cui c’ è la parte mobile (lo scheletrato) che si
                                        ancora alla parte fissa (denti incapsulati) tramite dei binari che danno la stabilità alla parte
                                        mobile senza la necessità di fare dei ganci (notevole vantaggio estetico). Il requisito fondamentale
                                        è che i denti presenti in arcata siano in buone condizioni soprattutto parodontali. E’ un tipo di
                                        protesi ottima principalmente per l’ arcata inferiore dove l’ azione della lingua tende a
                                        destabilizzare gli altri tipi di protesi removibile.
                                    </div>
                                </div>
                    
                                <div class="collapse" id="Implantare" data-parent="#accordionExample">
                                    <div class="card card-body">
                                        <h6 class="pb-3"><i>Implantare</i></h6>
                                        Da sottolineare in questa sezione, l’ influenza positiva dell’ implantologia sulla protesi
                                        removibile. Là dove le ossa mascellari in zona anteriore lo permettono, si possono infatti inserire
                                        nel tessuto osseo impianti in titanio successivamente collegati tramite una barra in oro, alla quale
                                        viene agganciata una protesi removibili ( Metodologia overdenture ). <br><br>
                    
                                        Rappresenta un’ ottima soluzione nel caso in cui il paziente non presenti quantità di osso
                                        sufficiente nei settori posteriore per avere i denti fissi singoli su impianti e nel caso non
                                        rifiuta la protesi mobile. I vantaggi di tale procedura sono la stabilità conferita dalla barra alla
                                        protesi removibile, economici in quanto si riabilita un’ arcata dentaria completa con un prezzo
                                        modico, igienici in quanto il paziente ha un migliore accesso e quindi controllo delle strutture
                                        protesiche.
                                    </div>
                                </div>
                    
                    
                    
                                <!-- Medicina Estetica -->
                                <div class="collapse" id="Medicina" data-parent="#accordionExample">
                                    <div class="card card-body">
                                        <h6 class="pb-3"><i>Medicina Estetica</i></h6>
                                        E’ la branca che si dedica ai trattamenti atti al ristabilimento di una corretta forma, funzione ed
                                        estetica del dente
                                        in seguito alla rimozione della carie e di tessuto dentale danneggiato. <br><br>
                    
                                        L’ obiettivo è conservare tessuto dentale maggiormente possibile grazie ad una ricostruzione. <br>
                                        Oggigiorno l’ amalgama d’
                                        argento ( le “otturazioni in metallo” ) è stata quasi completamente sostituita nella pratica
                                        quotidiana dai materiali
                                        compositi ( le “otturazioni bianche” con colore simil dente ) attraverso i quali avviene il
                                        ripristino dei denti
                                        cariati. <br> La cura è finalizzata in una sola seduta nella quasi totalità dei casi, il materiale
                                        indurisce immediatamente
                                        quindi il paziente può masticare tranquillamente.
                                    </div>
                                </div>
                    
                            </div>
                        </div>
                    </div>
                </div>


                <div class="container">

                    <div class="row">

                    <?php if( have_rows('galleria_trattamenti') ): ?>

                    <?php
                        while ( have_rows('galleria_trattamenti') ) : the_row();
                        $image = get_sub_field('immagine_galleria_trattamenti'); 
                    ?>

                    
                        <div class="col-12 col-sm-4">
                            <img class="w-100 zoom" src="<?php echo $image['url']; ?>" alt="<?php echo $image['alt'] ?>" />
                        </div>
                    

                    <?php endwhile; ?>

                    <?php 
                    
                        else :

                            // no rows found

                        endif;

                    ?>

                    </div>

                    <div class="pb-8"></div>

                </div>

























                
                <!--CONVENZIONI-->
                <hr>
                <div class="container py-4">
                    <div class="row">
                        <div class="col-12 col-sm-8">
                            <h4 class="pb-3"><i>Convenzioni</i></h4>
                            <p>Lorem ipsum dolor sit amet consectetur
                                adipisicing
                                elit. Voluptates, doloremque eum sed nesciunt assumenda reprehenderit eveniet eaque veniam aspernatur
                                adipisci
                                iusto
                                quisquam dolores repudiandae ratione, distinctio quasi, natus optio impedit.</p>
                        </div>
                        <div class="col-12 col-sm-4">
                            <div class="d-flex justify-content-center align-items-center">
                                <img src="<?php echo get_template_directory_uri(); ?>/img/convenzioni.png" alt="convenction-icons" width="180px">
                            </div>
                        </div>
                    </div>
                </div>
                        
                <?php endwhile; // end of the loop. ?>

				</main><!-- #main -->

                
			</div><!-- #primary -->

		</div><!-- .row end -->

	

</div><!-- #full-width-page-wrapper -->

<?php get_footer(); ?>
