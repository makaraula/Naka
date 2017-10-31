<?php
  $title = 'Kontakt';
  $keywords = 'Kontakt';
  include '../include/header.php';
?>

<div class="row page-pic">
  <img class="intro-photo lazy" data-src="../lib/plugins/thumb.php?src=../images/content-images/top.jpg&w=1920&h=400&zc=1" alt="">
</div><!-- end of .page-pic -->

<div class="row">
  <div class="wrapper">
    <div class="content fw flex">
      <div class="w2 eqheight">
        <div class="tline">
          <h1>kontakt</h1>
        </div><!-- end tline -->
      </div><!-- end w2 -->
      <div class="w8 eqheight">

        <div class="kinfo fw">
          <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Temporibus consequatur vero, eaque rerum et dolorum voluptates maxime, ipsa. Doloribus velit consequuntur, ut iure architecto, fuga ipsum qui aperiam quia ea aliquid esse magnam ratione culpa asperiores quae iusto dignissimos laudantium! Earum at atque voluptatibus sunt est quidem illo cumque et!</p>

          <div class="clearfix mt50"></div>

          <div class="kicon phone">
            <p><a data-rel="external" target="_self" href="tel:0038512922196">+385 1 292 2196</a></p>
          </div><!-- end phone -->

          <div class="kicon adresa">
            <p>IV Poljanice 8, 10 000 Zagreb (1. kat)</p>
          </div><!-- end adresa -->

          <div class="kicon whatsapp">
            <p><a data-rel="external" target="_self" href="tel:0038512922196">+385 1 292 2196</a></p>
          </div><!-- end whatsapp -->

          <div class="kicon mail">
            <p><a href="mailto:ordinacija@info.hr">ordinacija@info.hr</a></p>
          </div><!-- end mail -->

          <div class="kicon viber">
            <p><a data-rel="external" target="_self" href="tel:0038512922196">+385 1 292 2196</a></p>
          </div><!-- end viber -->

          <div class="kicon invalidi">
            <p>Pristup invalidima</p>
          </div><!-- end invalidi -->

          <div class="kicon parking">
            <p>Besplatan parking</p>
          </div><!-- end parking -->

          <div class="kicon rv">
            <p>Radno vrijeme: 09 - 12h i 16-19h</p>
          </div><!-- end rv -->

        </div><!-- end kinfo -->

        <div id="kontakt-forma" class="fw mt50">

          <form id="forma" name="forma" method="post" action="" class="fw">

            <input name="ime_i_prezime" type="text" class="" id="ime_i_prezime" value="" placeholder="Ime i prezime *">

            <input name="email" type="text" class="" id="email" value="" placeholder="Email *">

            <textarea name="poruka" class="" id="poruka" cols="" rows="5" placeholder="Poruka"></textarea>

            <input name="kod" type="text"  class="" id="kod" placeholder="Zbrojite 7 + 8 *">

            <p>Ako imate RTG snimak ili ortopan pošaljite nam ga uz upit</p>
            <input name="myFile" type="file">

            <input type="submit" class="send" name="posalji_upit" value="Pošaljite upit" />
          </form>

        </div><!-- end of #kontakt-forma -->

        <div id="map" class="map fw mt50">
          <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d2828.5792122668204!2d13.85093681586682!3d44.850502082202034!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x477cd337ee3e4e4d%3A0xeeb090f53c7c0085!2sUl.+Drage+Gervaisa+59%2C+52100%2C+Pula!5e0!3m2!1shr!2shr!4v1453127087375" width="100%" height="100%" frameborder="0" style="border:0" allowfullscreen></iframe>
        </div><!-- end map -->

      </div><!-- end w8 -->
    </div><!-- end content -->
  </div><!-- end wrapper -->
</div><!-- end row -->

<script type="text/javascript" src="https://maps.googleapis.com/maps/api/js"></script>
<script type="text/javascript">
  google.maps.event.addDomListener(window, 'load', init);

  function init() {
      var mapOptions = {
          zoom: 16,
          center: new google.maps.LatLng(45.829676, 16.073855),
          styles: [{"featureType":"water","elementType":"geometry.fill","stylers":[{"color":"#d3d3d3"}]},{"featureType":"transit","stylers":[{"color":"#808080"},{"visibility":"off"}]},{"featureType":"road.highway","elementType":"geometry.stroke","stylers":[{"visibility":"on"},{"color":"#b3b3b3"}]},{"featureType":"road.highway","elementType":"geometry.fill","stylers":[{"color":"#ffffff"}]},{"featureType":"road.local","elementType":"geometry.fill","stylers":[{"visibility":"on"},{"color":"#ffffff"},{"weight":1.8}]},{"featureType":"road.local","elementType":"geometry.stroke","stylers":[{"color":"#d7d7d7"}]},{"featureType":"poi","elementType":"geometry.fill","stylers":[{"visibility":"on"},{"color":"#ebebeb"}]},{"featureType":"administrative","elementType":"geometry","stylers":[{"color":"#a7a7a7"}]},{"featureType":"road.arterial","elementType":"geometry.fill","stylers":[{"color":"#ffffff"}]},{"featureType":"road.arterial","elementType":"geometry.fill","stylers":[{"color":"#ffffff"}]},{"featureType":"landscape","elementType":"geometry.fill","stylers":[{"visibility":"on"},{"color":"#efefef"}]},{"featureType":"road","elementType":"labels.text.fill","stylers":[{"color":"#696969"}]},{"featureType":"administrative","elementType":"labels.text.fill","stylers":[{"visibility":"on"},{"color":"#737373"}]},{"featureType":"poi","elementType":"labels.icon","stylers":[{"visibility":"off"}]},{"featureType":"poi","elementType":"labels","stylers":[{"visibility":"off"}]},{"featureType":"road.arterial","elementType":"geometry.stroke","stylers":[{"color":"#d6d6d6"}]},{"featureType":"road","elementType":"labels.icon","stylers":[{"visibility":"off"}]},{},{"featureType":"poi","elementType":"geometry.fill","stylers":[{"color":"#dadada"}]}]
      };
      var mapElement = document.getElementById('map');
      var map = new google.maps.Map(mapElement, mapOptions);
      var marker = new google.maps.Marker({
          position: new google.maps.LatLng(45.829676, 16.073855),
          map: map,
          icon: '../images/pin.png',
          title: 'Ordinacija dentalne medicine, Janko Naka dr.med.dent.'
      });
  }
</script>

<?php include '../include/footer.php';?>
