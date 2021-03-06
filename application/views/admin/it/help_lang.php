<?php
/**
 * Copyright © OXID eSales AG. All rights reserved.
 * See LICENSE file for license details.
 */
$sLangName  = "English";
// -------------------------------
// RESOURCE IDENTIFIER = STRING
// -------------------------------
$aLang = [
'HELP_ALTERNATIVE_IMAGE_SERVER_NOTE' => 'L\'URL alternativo al server di immagini remoto può essere specificato nel file di configurazione config.inc.php impostando <i>sAltImageUrl</i> e <i>sSSLAltImageUrl</i> . 
Quindi tutte le immagini del prodotto verranno caricate da questo server alternativo invece che da quello locale. Tuttavia, i file caricati verranno archiviati localmente. In questo caso la sincronizzazione con il server esterno deve essere eseguita manualmente o con script personalizzati.',
'HELP_ARTICLE_EXTEND_BLFIXEDPRICE' => 'Avviso prezzo può essere disattivato per questo prodotto.',
'HELP_ARTICLE_EXTEND_EXTURL' => 'In <span class="navipath_or_inputname">URL esterno</span> è possibile inserire un collegamento in cui sono disponibili ulteriori informazioni sul prodotto (ad es. sul sito Web del produttore). In <span class="navipath_or_inputname">Testo per URL esterno</span> è possibile inserire il testo a cui è collegato, ad es. <span class="userinput_or_code">Ulteriori informazioni sul sito web del produttore</span> .',
'HELP_ARTICLE_EXTEND_FREESHIPPING' => 'L\'impostazione viene ereditata dal prodotto principale a Varianti e si applica all\'intero prodotto.',
'HELP_ARTICLE_EXTEND_ISCONFIGURABLE' => 'Se il prodotto è personalizzabile, viene visualizzato un campo di input aggiuntivo nella pagina dei dettagli dei prodotti e nel carrello. Qui i clienti possono inserire un testo per personalizzare il prodotto. 

Un tipico esempio sono le t-shirt che possono essere stampate con testo personalizzato. Nel campo di input i clienti possono inserire il testo da stampare sulla t-shirt.',
'HELP_ARTICLE_EXTEND_NONMATERIAL' => 'L\'impostazione viene ereditata dal prodotto principale a Varianti e si applica all intero prodotto.',
'HELP_ARTICLE_EXTEND_QUESTIONEMAIL' => 'Ad <span class="navipath_or_inputname">Alt. Contatto</span> puoi inserire un indirizzo e-mail. Se gli utenti inviano domande su questo prodotto, verranno inviate a questo indirizzo e-mail. Se non viene inserito alcun indirizzo e-mail, la richiesta verrà inviata al normale indirizzo e-mail informativo.',
'HELP_ARTICLE_EXTEND_SHOWCUSTOMAGREEMENT' => 'Se questa opzione è attivata, gli utenti devono confermare i termini e le condizioni nella quarta fase del processo di check-out per questo articolo specifico. Assicurati che sia attivata anche l\'opzione generale e che l\'articolo del prodotto sia intangibile o scaricabile.',
'HELP_ARTICLE_EXTEND_SKIPDISCOUNTS' => 'Se <span class="navipath_or_inputname">Salta tutti gli sconti negativi</span> è attivo, le quote negative non verranno calcolate per questo prodotto. Sono per esempio sconti e buoni.',
'HELP_ARTICLE_EXTEND_TEMPLATE' => 'La visualizzazione dei dettagli di un prodotto può essere visualizzata con un template diverso. A tal fine, immettere il percorso e il nome del template da utilizzare.',
'HELP_ARTICLE_EXTEND_TPRICE' => 'In <span class="navipath_or_inputname">RRP</span> è possibile inserire il prezzo di vendita consigliato del produttore. Se si immette il prezzo di vendita consigliato, viene mostrato agli utenti: Sopra il prezzo del prodotto <span class="filename_filepath_or_italic">Ridotto dal</span> prezzo <span class="filename_filepath_or_italic">di vendita consigliato ora</span> viene visualizzato <span class="filename_filepath_or_italic">solo</span> .',
'HELP_ARTICLE_EXTEND_UNITQUANTITY' => 'Con <span class="navipath_or_inputname">Quantità</span> e <span class="navipath_or_inputname">Unità</span> è possibile impostare il prezzo per unità di quantità. Il prezzo per unità di quantità viene calcolato e visualizzato con il prodotto (es. 1,43 EUR al litro). In <span class="navipath_or_inputname">Quantità</span> inserire la quantità del prodotto (es. <span class="userinput_or_code">1,5</span> ), in <span class="navipath_or_inputname">Unità</span> definire l&#39;unità di quantità corrispondente (es. <span class="userinput_or_code">Litro</span> ). È possibile scegliere il tipo di unità dai valori dati oppure, selezionando il tipo di unità vuota "-", immettere manualmente il tipo di unità. Se desideri aggiungere un elenco di tipi esistente, segui questo <a href="http://oxidforge.org/en/adding-new-unit-types.html" target="_blank">collegamento</a> per le istruzioni.',
'HELP_ARTICLE_EXTEND_UPDATEPRICE' => 'I prezzi possono essere modificati in un tempo definito. I campi forniti aggiornano i prezzi standard. Se lasci i valori di prezzo "0", i prezzi non verranno aggiornati.',
'HELP_ARTICLE_FILES_DOWNLOAD_EXPIRATION_TIME' => 'Specificare il tempo in ore, il collegamento per il download è valido dopo il primo download. Per questo file è possibile sovrascrivere l\'impostazione predefinita, definita in Impostazioni principali -> Impostazioni di base -> Impostazioni -> Download per tutti i prodotti.',
'HELP_ARTICLE_FILES_LINK_EXPIRATION_TIME' => 'Specificare il tempo in ore per le quali il link per il download sarà valido dopo il primo ordine. In questo file è possibile sovrascrivere gli impostazioni generali predifiniti in Impostazioni principali -> Impostazioni di base -> Impostazioni -> Download per tutti i prodotti.',
'HELP_ARTICLE_FILES_LINK_EXPIRATION_TIME_UNREGISTERED' => 'Qui puoi definire quante volte un utente non registrato può usare il link per scaricare i dati. In questo file è possibile sovrascrivere l\'impostazione predefinita, definita in Impostazioni principali -> Impostazioni di base -> Impostazioni -> Download per tutti i prodotti.',
'HELP_ARTICLE_FILES_MAX_DOWNLOADS_COUNT' => 'Qui è possibile definire quante volte l\'utente può scaricare dallo stesso link dopo l\'ordine. Per questo file è possibile sovrascrivere l\'impostazione predefinita, definita in Impostazioni principali -> Impostazioni di base -> Impostazioni -> Download per tutti i prodotti.',
'HELP_ARTICLE_FILES_NEW' => 'Immettere qui il nome di un file tramite FTP trasferito o caricare un nuovo file. Si noti che i file di grandi dimensioni devono essere caricati tramite FTP. La limitazione delle dimensioni dei file è valida solo quando il file viene caricato tramite l\'amministratore. Questa limitazione dipende dalle impostazioni PHP del server e potrebbe essere modificata solo lì.',
'HELP_ARTICLE_IS_DOWNLOADABLE' => 'I file di questo prodotto possono essere scaricati.',
'HELP_ARTICLE_MAIN_ALDPRICE' => 'Con <span class="navipath_or_inputname">Alt. Prezzi</span> è possibile impostare prezzi speciali per determinati utenti (gruppi di utenti "Prezzo A", "Prezzo B" e "Prezzo C").',
'HELP_ARTICLE_MAIN_TAGS' => 'Qui è possibile inserire le tag per il prodotto. Da questi tag viene generato la tag cloud nella prima pagina. Le tag sono separati da una virgola.',
'HELP_ARTICLE_MAIN_VAT' => 'Qui è possibile immettere un\'IVA speciale per questo prodotto. Questa IVA viene utilizzata per questo prodotto in tutti i calcoli successivi (carrello, ordine, fatture)',
'HELP_ARTICLE_PICTURES_ICON' => 'Le icone sono le immagini più piccole di un prodotto. Ad esempio, vengono utilizzati nel carrello.<br>Il caricamento dell\'icona personalizzata sostituirà l\'icona, generata dalla prima immagine del prodotto.<br>Dopo il caricamento, il nome del file viene visualizzato in Icona. Se non viene ancora caricata alcuna icona, viene visualizzato ---',
'HELP_ARTICLE_PICTURES_PIC1' => 'Le immagini vengono utilizzate nella veduta dettagliata di un prodotto. Puoi caricare fino a 7 immagini per prodotto. Dopo il caricamento, il nome del file viene visualizzato nel campo di immissione corrispondente. Se non è stata ancora caricata alcuna immagine, viene visualizzato ---. 
È possibile caricare immagini con una risoluzione massima di 2 MB o 1500 * 1500 pixel. Questa restrizione serve a evitare problemi con il limite di memoria PHP. Dopo aver caricato l\'immagine principale, lo zoom, la miniatura e l\'icona verranno generate automaticamente.',
'HELP_ARTICLE_PICTURES_THUMB' => 'Le miniature sono piccole immagini di prodotti. Ad esempio, vengono utilizzati negli elenchi di prodotti (categorie, risultati di ricerca). Il caricamento della miniatura personalizzata sovrascriverà la miniatura generata automaticamente. Dopo il caricamento, il nome del file viene mostrato in miniatura. Se non è stata ancora caricata alcuna miniatura, viene visualizzato ----.',
'HELP_ARTICLE_PICTURES_ZOOM1' => 'Immagini Zoom sono immagini ingranditi che possono essere aperte nella veduta dettagliata di un prodotto. 
Puoi caricare immagini zoom <span class="navipath_or_inputname">zoom in caricamento Zoom X.</span> Dopo il caricamento, il nome del file viene mostrato in <span class="navipath_or_inputname">Zoom X.</span> Se non è stata ancora caricata alcuna immagine zoom, viene visualizzato <span class="userinput_or_code">nopic.jpg</span> .',
'HELP_ARTICLE_SEO_ACTCAT' => 'Puoi definire diversi URL SEO per i prodotti: per determinate categorie e pagine di produttori. Con <span class="navipath_or_inputname">Active Category / Vendor</span> puoi selezionare l\'URL SEO che desideri modificare.',
'HELP_ARTICLE_SEO_DESCRIPTION' => 'Questa descrizione è integrata nel codice sorgente HTML della pagina del prodotto (descrizione META). Questo testo viene spesso visualizzato nelle pagine dei risultati dei motori di ricerca. Una descrizione adeguata può essere inserita qui. Se viene lasciato vuoto, la descrizione viene generata automaticamente.',
'HELP_ARTICLE_SEO_FIXED' => '',
'HELP_ARTICLE_SEO_KEYWORDS' => '',
'HELP_ARTICLE_STOCK_AMOUNTPRICE_AMOUNTFROM' => '',
'HELP_ARTICLE_STOCK_AMOUNTPRICE_PRICE' => '',
'HELP_ARTICLE_STOCK_DELIVERY' => '',
'HELP_ARTICLE_STOCK_NOSTOCKTEXT' => '',
'HELP_ARTICLE_STOCK_REMINDACTIV' => '',
'HELP_ARTICLE_STOCK_REMINDAMAOUNT' => '',
'HELP_ARTICLE_STOCK_STOCKFLAG' => '',
'HELP_ARTICLE_STOCK_STOCKTEXT' => '',
'HELP_ARTICLE_VARIANT_VARNAME' => '',
'HELP_ATTRIBUTE_MAIN_DISPLAYINBASKET' => '',
'HELP_CATEGORY_MAIN_DEFSORT' => '',
'HELP_CATEGORY_MAIN_EXTLINK' => '',
'HELP_CATEGORY_MAIN_HIDDEN' => '',
'HELP_CATEGORY_MAIN_PARENTID' => '',
'HELP_CATEGORY_MAIN_PRICEFROMTILL' => '',
'HELP_CATEGORY_MAIN_PROMOTION_ICON' => '',
'HELP_CATEGORY_MAIN_SKIPDISCOUNTS' => '',
'HELP_CATEGORY_MAIN_SORT' => '',
'HELP_CATEGORY_MAIN_THUMB' => '',
'HELP_CATEGORY_SEO_DESCRIPTION' => '',
'HELP_CATEGORY_SEO_FIXED' => '',
'HELP_CATEGORY_SEO_KEYWORDS' => '',
'HELP_CATEGORY_SEO_SHOWSUFFIX' => '',
'HELP_CONTENT_MAIN_CATEGORY' => '',
'HELP_CONTENT_MAIN_MAINMENU' => '',
'HELP_CONTENT_MAIN_MANUAL' => '',
'HELP_CONTENT_MAIN_SNIPPET' => '',
'HELP_CONTENT_SEO_DESCRIPTION' => '',
'HELP_CONTENT_SEO_FIXED' => '',
'HELP_CONTENT_SEO_KEYWORDS' => '',
'HELP_DELIVERYSET_MAIN_POS' => '',
'HELP_DELIVERY_MAIN_CONDITION' => '',
'HELP_DELIVERY_MAIN_COUNTRULES' => '',
'HELP_DELIVERY_MAIN_FINALIZE' => '',
'HELP_DELIVERY_MAIN_ORDER' => '',
'HELP_DELIVERY_MAIN_PRICE' => '',
'HELP_DISCOUNT_MAIN_AMOUNT' => '',
'HELP_DISCOUNT_MAIN_PRICE' => '',
'HELP_DISCOUNT_MAIN_REBATE' => '',
'HELP_DYN_TRUSTED_ACTIVE' => '',
'HELP_DYN_TRUSTED_PASSWORD' => '',
'HELP_DYN_TRUSTED_RATINGS_ID' => '',
'HELP_DYN_TRUSTED_RATINGS_ORDEREMAIL' => '',
'HELP_DYN_TRUSTED_RATINGS_ORDERSENDEMAIL' => '',
'HELP_DYN_TRUSTED_RATINGS_THANKYOU' => '',
'HELP_DYN_TRUSTED_RATINGS_WIDGET' => '',
'HELP_DYN_TRUSTED_TESTMODUS' => '',
'HELP_DYN_TRUSTED_TSID' => '',
'HELP_DYN_TRUSTED_TSPAYMENT' => '',
'HELP_DYN_TRUSTED_USER' => '',
'HELP_GENERAL_SEO_ACTCAT' => '',
'HELP_GENERAL_SEO_FIXED' => '',
'HELP_GENERAL_SEO_OXDESCRIPTION' => '',
'HELP_GENERAL_SEO_OXKEYWORDS' => '',
'HELP_GENERAL_SEO_SHOWSUFFIX' => '',
'HELP_GENIMPORT_FIRSTCOLHEADER' => '',
'HELP_GENIMPORT_REPEATIMPORT' => '',
'HELP_LANGUAGE_ACTIVE' => '',
'HELP_LANGUAGE_DEFAULT' => '',
'HELP_MANUFACTURER_MAIN_ICON' => '',
'HELP_MANUFACTURER_SEO_DESCRIPTION' => '',
'HELP_MANUFACTURER_SEO_FIXED' => '',
'HELP_MANUFACTURER_SEO_KEYWORDS' => '',
'HELP_MANUFACTURER_SEO_SHOWSUFFIX' => '',
'HELP_PAYMENT_MAIN_ADDPRICE' => '',
'HELP_PAYMENT_MAIN_ADDSUMRULES' => '',
'HELP_PAYMENT_MAIN_AMOUNT' => '',
'HELP_PAYMENT_MAIN_FROMBONI' => '',
'HELP_PAYMENT_MAIN_SELECTED' => '',
'HELP_PAYMENT_MAIN_SORT' => '',
'HELP_PROMOTIONS_BANNER_PICTUREANDLINK' => '',
'HELP_REVERSE_PROXY_GET_BACKEND' => '',
'HELP_REVERSE_PROXY_GET_FRONTEND' => '',
'HELP_SELECTLIST_MAIN_FIELDS' => '',
'HELP_SELECTLIST_MAIN_TITLEIDENT' => '',
'HELP_SHOP_CACHE_CLASSES' => '',
'HELP_SHOP_CACHE_ENABLED' => '',
'HELP_SHOP_CACHE_LAYOUT_CACHE_AGE' => '',
'HELP_SHOP_CACHE_LIFETIME' => '',
'HELP_SHOP_CACHE_REVERSE_PROXY_ENABLED' => '',
'HELP_SHOP_CONFIG_ADDITIONAL_SERVICE_VAT_CALCULATION_BIGGEST_NET' => '',
'HELP_SHOP_CONFIG_ADDITIONAL_SERVICE_VAT_CALCULATION_PROPORTIONAL' => '',
'HELP_SHOP_CONFIG_ALTVATIDCHECKINTERFACEWSDL' => '',
'HELP_SHOP_CONFIG_ATTENTION' => '',
'HELP_SHOP_CONFIG_BASKETEXCLUDE' => '',
'HELP_SHOP_CONFIG_BASKETRESERVATION' => '',
'HELP_SHOP_CONFIG_BASKETRESERVATIONTIMEOUT' => '',
'HELP_SHOP_CONFIG_BIDIRECTCROSS' => '',
'HELP_SHOP_CONFIG_DEBIT_OLD_BANK_INFORMATION_NOT_ALLOWED' => '',
'HELP_SHOP_CONFIG_DELETERATINGLOGS' => '',
'HELP_SHOP_CONFIG_DISABLEONLINEVATIDCHECK' => '',
'HELP_SHOP_CONFIG_DOWNLOADS' => '',
'HELP_SHOP_CONFIG_DOWNLOADS_PATH' => '',
'HELP_SHOP_CONFIG_DOWNLOAD_EXPIRATION_TIME' => '',
'HELP_SHOP_CONFIG_ENABLE_INTANGIBLE_PRODUCTS_AGREEMENT' => '',
'HELP_SHOP_CONFIG_ENTERNETPRICE' => '',
'HELP_SHOP_CONFIG_FACEBOOKCONNECT' => '',
'HELP_SHOP_CONFIG_FBCOMMENTS' => '',
'HELP_SHOP_CONFIG_FBFACEPILE' => '',
'HELP_SHOP_CONFIG_FBINVITE' => '',
'HELP_SHOP_CONFIG_FBLIKE' => '',
'HELP_SHOP_CONFIG_FBSHARE' => '',
'HELP_SHOP_CONFIG_INVITATION' => '',
'HELP_SHOP_CONFIG_LINK_EXPIRATION_TIME' => '',
'HELP_SHOP_CONFIG_LINK_EXPIRATION_TIME_UNREGISTERED' => '',
'HELP_SHOP_CONFIG_LOAD_DYNAMIC_PAGES' => '',
'HELP_SHOP_CONFIG_MAX_DOWNLOADS_COUNT' => '',
'HELP_SHOP_CONFIG_MUSTFILLFIELDS' => '',
'HELP_SHOP_CONFIG_NEWARTBYINSERT' => '',
'HELP_SHOP_CONFIG_ORDEROPTINEMAIL' => '',
'HELP_SHOP_CONFIG_OVERRIDEZEROABCPRICES' => '',
'HELP_SHOP_CONFIG_POINTSFORINVITATION' => '',
'HELP_SHOP_CONFIG_POINTSFORREGISTRATION' => '',
'HELP_SHOP_CONFIG_PSLOGIN' => '',
'HELP_SHOP_CONFIG_SEARCHFIELDS' => '',
'HELP_SHOP_CONFIG_SHOP_CONFIG_FACEBOOKAPPID' => '',
'HELP_SHOP_CONFIG_SHOP_CONFIG_FACEBOOKCONFIRM' => '',
'HELP_SHOP_CONFIG_SHOP_CONFIG_FBSECRETKEY' => '',
'HELP_SHOP_CONFIG_SHOWTAGS' => '',
'HELP_SHOP_CONFIG_SHOWTSCODMESSAGE' => '',
'HELP_SHOP_CONFIG_SHOWTSINTERNATIONALFEESMESSAGE' => '',
'HELP_SHOP_CONFIG_SORTFIELDS' => '',
'HELP_SHOP_CONFIG_STOCKOFFDEFAULTMESSAGE' => '',
'HELP_SHOP_CONFIG_STOCKONDEFAULTMESSAGE' => '',
'HELP_SHOP_CONFIG_USENEGATIVESTOCK' => '',
'HELP_SHOP_CONFIG_VIEWNETPRICE' => '',
'HELP_SHOP_MAIN_ACTIVE' => '',
'HELP_SHOP_MAIN_INFOEMAIL' => '',
'HELP_SHOP_MAIN_ORDEREMAIL' => '',
'HELP_SHOP_MAIN_OWNEREMAIL' => '',
'HELP_SHOP_MAIN_PRODUCTIVE' => '',
'HELP_SHOP_MAIN_SMTPSERVER' => '',
'HELP_SHOP_MALL_MALLMODE' => '',
'HELP_SHOP_MALL_PRICEADDITION' => '',
'HELP_SHOP_PERF_CHECKIFTPLCOMPILE' => '',
'HELP_SHOP_PERF_CLEARCACHEONLOGOUT' => '',
'HELP_SHOP_PERF_DISBASKETSAVING' => '',
'HELP_SHOP_PERF_LOADACTION' => '',
'HELP_SHOP_PERF_LOADATTRIBUTES' => '',
'HELP_SHOP_PERF_LOADDELIVERY' => '',
'HELP_SHOP_PERF_LOADFULLTREE' => '',
'HELP_SHOP_PERF_LOADPRICE' => '',
'HELP_SHOP_PERF_LOADREVIEWS' => '',
'HELP_SHOP_PERF_LOADSELECTLISTSINALIST' => '',
'HELP_SHOP_PERF_NEWESTARTICLES' => '',
'HELP_SHOP_PERF_PARSELONGDESCINSMARTY' => '',
'HELP_SHOP_PERF_SEO_CACHE' => '',
'HELP_SHOP_PERF_TOPSELLER' => '',
'HELP_SHOP_PERF_USESELECTLISTPRICE' => '',
'HELP_SHOP_RDFA_COND' => '',
'HELP_SHOP_RDFA_CONTENT_DELIVERY' => '',
'HELP_SHOP_RDFA_CONTENT_OFFERER' => '',
'HELP_SHOP_RDFA_CONTENT_PAYMENT' => '',
'HELP_SHOP_RDFA_COSTUMER' => '',
'HELP_SHOP_RDFA_DUNS' => '',
'HELP_SHOP_RDFA_DURATION_OFFERINGS' => '',
'HELP_SHOP_RDFA_DURATION_PRICES' => '',
'HELP_SHOP_RDFA_FNC' => '',
'HELP_SHOP_RDFA_GEO_LATITUDE' => '',
'HELP_SHOP_RDFA_GEO_LONGITUDE' => '',
'HELP_SHOP_RDFA_GLN' => '',
'HELP_SHOP_RDFA_ISIC' => '',
'HELP_SHOP_RDFA_LOGO_URL' => 'L\'indirizzo Web (URL) di un logo o immagine.',
'HELP_SHOP_RDFA_NAICS' => '',
'HELP_SHOP_RDFA_RATING_MAX' => '',
'HELP_SHOP_RDFA_RATING_MIN' => '',
'HELP_SHOP_RDFA_SHOW_PRODUCTSTOCK' => '',
'HELP_SHOP_RDFA_SUBMIT_URL' => '',
'HELP_SHOP_RDFA_VAT' => '',
'HELP_SHOP_SEO_IDSSEPARATOR' => '',
'HELP_SHOP_SEO_RESERVEDWORDS' => '',
'HELP_SHOP_SEO_SAFESEOPREF' => '',
'HELP_SHOP_SEO_SKIPTAGS' => '',
'HELP_SHOP_SEO_STATICURLS' => '',
'HELP_SHOP_SEO_TITLEPREFIX' => '',
'HELP_SHOP_SEO_TITLESUFFIX' => '',
'HELP_SHOP_SYSTEM_DEFAULTIMAGEQUALITY' => '',
'HELP_SHOP_SYSTEM_DISABLENAVBARS' => '',
'HELP_SHOP_SYSTEM_INLINEIMGEMAIL' => '',
'HELP_SHOP_SYSTEM_ISERVERTIMESHIFT' => '',
'HELP_SHOP_SYSTEM_LDAP' => 'Modificare il file core/oxldap.php.',
'HELP_SHOP_SYSTEM_OTHERCOUNTRYORDER' => '',
'HELP_SHOP_SYSTEM_SHOP_LOCATION' => '',
'HELP_SHOP_SYSTEM_SHOWVARIANTREVIEWS' => '',
'HELP_SHOP_SYSTEM_UTILMODULE' => '',
'HELP_SHOP_SYSTEM_VARIANTINHERITAMOUNTPRICE' => '',
'HELP_SHOP_SYSTEM_VARIANTPARENTBUYABLE' => '',
'HELP_SHOP_SYSTEM_VARIANTSSELECTION' => '',
'HELP_USER_EXTEND_BONI' => '',
'HELP_USER_EXTEND_EMAILFAILED' => '',
'HELP_USER_EXTEND_NEWSLETTER' => '',
'HELP_USER_MAIN_HASPASSWORD' => '',
'HELP_USER_PAYMENT_METHODS' => '',
'HELP_VOUCHERSERIE_MAIN_ALLOWOTHERSERIES' => '',
'HELP_VOUCHERSERIE_MAIN_ALLOWSAMESERIES' => '',
'HELP_VOUCHERSERIE_MAIN_CALCULATEONCE' => '',
'HELP_VOUCHERSERIE_MAIN_DISCOUNT' => '',
'HELP_VOUCHERSERIE_MAIN_RANDOMNUM' => '',
'HELP_VOUCHERSERIE_MAIN_SAMESEROTHERORDER' => '',
'HELP_VOUCHERSERIE_MAIN_VOUCHERNUM' => '',
'HELP_WRAPPING_MAIN_PICTURE' => '',
];
