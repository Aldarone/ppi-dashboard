<!DOCTYPE html>
<!--[if lt IE 7]> <html class="no-js lt-ie9 lt-ie8 lt-ie7"> <![endif]-->
<!--[if IE 7]> <html class="no-js lt-ie9 lt-ie8"> <![endif]-->
<!--[if IE 8]> <html class="no-js lt-ie9"> <![endif]-->
<!--[if gt IE 8]><!--> <html class="no-js"> <!--<![endif]-->
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
        <title>Les Partis Pirates Francophones</title>
        <meta name="description" content="Cette page présente une liste des sites officiels des partis pirates francophones">
        <meta name="viewport" content="width=device-width">

        <link rel="stylesheet" type="text/css" href="style.css">
    </head>
    <body class="row">
        <!--[if lt IE 7]>
<p class="chromeframe">You are using an <strong>outdated</strong> browser. Please <a href="http://browsehappy.com/">upgrade your browser</a> or <a href="http://www.google.com/chromeframe/?redirect=true">activate Google Chrome Frame</a> to improve your experience.</p>
<![endif]-->

        <!-- Add your site or application content here -->

<?php

$listeppi = fopen('liste_partis.csv', 'r');
$ppi = array();

while ( ($data = fgetcsv($listeppi, 0, ';')) !== FALSE ) {
    $ppi[] = $data;
}

shuffle($ppi);
$i = 0;
?>

    <div class="col vmiddle">
        <div class="mw960p center txtcenter wrapper">
            <img class="inbl w25" src="img/PartiPirate.svg" alt="Voile du Parti Pirate">
            <h1 class="main-title">Les Partis Pirates Francophones</h1>
            <div class="grid3 txtcenter liste-parti">
<?php foreach ($ppi as $parti ) { ?>
<?php $newrow = ( $i % 3 == 0 ) ? 'newrow' : '' ; ?>
                <div class="parti pal <?php echo $newrow.' '.strtolower($parti[0]) ?>">
                    <div class="row">
                        <div class="vmiddle">
                            <a href="<?php echo $parti[1]; ?>"><img class="center" src="<?php echo $parti[2]; ?>" /></a>
                            <h2><?php echo $parti[0]; ?></h2>
                        </div>
                    </div>
                </div>
<?php $i++ ?>
<?php } ?>
            </div>
        </div>
    </div>
    </body>
</html>