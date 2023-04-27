<?php
$url = 'https://www.lemonde.fr/international/rss_full.xml'; //lien du fichier xml
$xml = simplexml_load_file($url); //Interprète un fichier XML en un objet que je stock dans la variable xml

$items = $xml->channel->item;
foreach ($items as $item) { ?>
    <?php
    //namespace pour recupérer l'url de la balise media
    $namespace = $item->getNamespaces(true);
    $media=$item->children($namespace['media']);
    $imageUrl=$media->content->attributes()['url'];
    //----------------------------------------------------
    ?>
    
    <div class="card mb-3 mx-2 " style="max-width:400px">
        <div class="row g-0">
            <div class="col-md-4 col-lg-12">
                <img src="<?= $imageUrl?>" class="imgNews img-fluid rounded-start" alt="...">
            </div>
            <div class="col-md-8 col-lg-12">
                <div class="card-body">
                    <h5 class="card-title"><a href="<?= $item->link ?>"><?= $item->title ?></a></h5>
                    <p class="card-text"><small class="text-muted"><?= $item->pubDate ?></small></p>
                    <p class="card-text"><?= $item->description ?></p>
                </div>
            </div>
        </div>
    </div>

<?php } ?>