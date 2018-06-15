<?php if(!$page->shareable()->bool() && !$site->user()) go('home'); ?>
<?php
  // Remember to use $delimiter
  $delimiter = c::get('papeterie.page_break','===');

?>
<!DOCTYPE html>
<html lang="<?php echo $site->language() ?>" class="no-js">
<head>

  <meta charset="utf-8" />
  <meta name="viewport" content="width=device-width,initial-scale=1.0">
  <meta name="description" content="<?php echo $site->description()->html() ?>">
  <meta name="keywords" content="<?php echo $site->keywords()->html() ?>">
  <meta name="author" content="<?php echo $site->author()->html() ?>">
  <meta name="robots" content="noindex">

  <title><?php echo $site->title()->html() ?> | <?php echo $page->title()->html() ?></title>

  <!-- load here your CSS file -->
  <?php echo css('bower_components/flexboxgrid/dist/flexboxgrid.min.css') ?>
  <?php echo css('assets/css/normalize.css') ?>
  <?= css('assets/css/main.css') ?>

  <?= css('assets/css/papeterie.css'); ?>
  <style>
    @media screen {
      .is--overflowing::after {
        content: '<?php echo "Attention, il y a probalement du texte en excès dans votre document. Utilisez '.$delimiter.' pour passer à la page suivante." ?>';
      }
    }
  </style>

</head>
<body>
  <div class="papeterie-main">
    <?php
      // check how many breaks there is in our page block
      $docContent = $page->text();
      // cut text by c::get('papeterie.page_break') , adding space next to it to prevent tables to bug big time
      $docPerPage = explode( c::get('papeterie.page_break','==='), $docContent);
      $idx = 0;
      foreach($docPerPage as $doc):
    ?>
      <div class="papeterie-onepage">
        <div class="papeterie-header row">
          <div class="logo-wrapper-print col-xs-6">
            <p>Administration</p>
            <img class="col-xs-6" src="<?php echo $page->parent()->logo()->toFile()->url() ?>" alt="">
          </div>
          <div class="entetehaut col-xs-6">
            <p class="site-print">
              <?= $page->entetehautsite()->html(); ?>  
            </p>
            <div class="entete-adresse">
              <?= $page->entetehaut()->kirbytext(); ?>
            </div>
            <div class="destinataire">
              <?= $page->destinataire()->kirbytext(); ?>
            </div>
          </div>
          <div class="footer">
            <div class="margin-small">
              <div class="type-smaller page-number"><p>Page <?= $idx+1 ?> / <?= count($docPerPage); ?></p></div>
              
            </div>
            <div class="type-smaller tva"><?= $page->entetebas()->kirbytext(); ?></div>
          </div>
        </div>
        <div class="papeterie-mainContent js--detectOverflows">
          <?php if($idx == 0): ?>
            <div class="intitule margin-small">
              <?= $page->intitule()->kirbytext(); ?>
            </div>
          <?php endif; ?>
          <?= kirbytext($doc); ?>
        </div>
      </div>
    <?php
      $idx++;
      endforeach;
    ?>
  </div>
</body>


<script>
// detect overflow text
function isOverflowing(el) {
  return (el.offsetHeight + 15 < el.scrollHeight);
}

(function() {
  var elements = document.querySelectorAll('.js--detectOverflows');
  Array.prototype.forEach.call(elements, function(el, i){
    if(isOverflowing(el)) {
      if(el.classList)
        el.classList.add('is--overflowing');
      else
        el.className += ' is--overflowing';
    }
  });
})();

function decodeHtml(html) {
    var txt = document.createElement("textarea");
    txt.innerHTML = html;
    return txt.value;
}
//unpack FigureImage-lazy images
(function() {
  var elements = document.querySelectorAll('.FigureImage-lazy');
  Array.prototype.forEach.call(elements, function(el, i){
    el.innerHTML = el.getElementsByTagName('noscript')[0].innerText;
  });
})();


</script>
