<div class="body">
<script>
$(document).ready(function(){
    $(".navlist ul li a:eq(1)").css({
        "color":"red",
        "font-size":"30px"
    });
       $(".navlist ul li a:eq(1)").mouseover(function(){
          $(this).css({
              "font-size":"30px"
          }); 
          $(".navlist ul li a:eq(1)").mouseout(function(){
              $(this).css({
                 "font-size":"30px" 
              });
          });
       });

});
</script>
<script>
// What is $(document).ready ? See: http://flowplayer.org/tools/documentation/basics.html#document_ready
$(document).ready(function() {



// main vertical scroll
$("#main").scrollable({

// basic settings
vertical: true,

// up/down keys will always control this scrollable
keyboard: 'static',

// assign left/right keys to the actively viewed scrollable
onSeek: function(event, i) {
horizontal.eq(i).data("scrollable").focus();
}

// main navigator (thumbnail images)
}).navigator("#main_navi");

// horizontal scrollables. each one is circular and has its own navigator instance
var horizontal = $(".scrollable").scrollable({ circular: true }).navigator(".navi");


// when page loads setup keyboard focus on the first horzontal scrollable
horizontal.eq(0).data("scrollable").focus();

});
</script>

<div class="content">
<div class="content">
    <div class="content_profile">
    <ul id="main_navi">

<li class="active">
<style>
.active img
{
margin-top: -10px;
}
</style>
<img src="<?php echo base_url(); ?>image/admin/512User.png"/>
<strong>PERSONAL</strong>

</li>

<li>
<img src="<?php echo base_url(); ?>image/admin/512Sites.png" />
<strong>ANY THING ABOUT MY SITE</strong>

</li>
<li>
<img src="<?php echo base_url(); ?>image/admin/512Movies.png" />
<strong>ANY THING ABOUT MY VIDEO</strong>

</li>
<li>
<img src="<?php echo base_url(); ?>image/admin/512Pictures.png" />
<strong>ANY THING ABOUT MY AGENDA</strong>

</li>
</ul>

<!-- root element for the main scrollable -->
<div id="main">

<!-- root element for pages -->
<div id="pages">
    <!-- page #1 -->
<div class="page">

<!-- sub navigator #1 -->
<div class="navi"></div>

<!-- inner scrollable #1 -->
<div class="scrollable">

<!-- root element for scrollable items -->
<div class="items">

<!-- items -->
<div class="item">
<img src="<?php echo base_url(); ?>image/profile/ondoel.jpg" style="margin: 5px;float: left; height: 200px; width: 150px"/>
<h2>
ABOUT ME
</h2>
<p style="text-align: justify; text-indent: 20px">
hai gan gmn kabar agan agan sekalian baik kan?? , ok nama saya Ngadiono, saya sekarang kuliah di sekolah tinggi teknologi adisucipto jogjakarta, and saya sekarang udah semester 7 gan soo udah tua n mau lulus penginnya ciii..hoby saya main bola ma main game ol terutama game lineage 2, nick char gwe "jupesusu", klo agan agan ada yang main disitu Whisp ja char gwe,
loh kok ngomongin game hahaha...ok klo agan agan ingin mengenal lebih jauh tentang saya agan bisa buka list di account2 dunia maya saya, he,,,ntu di list"ANY THING ABOUT MY SITE" dah ya,,<br/>pesan saya jangan lah kalian mudah menyerah dengan apa yang sudah dijalani, maju pantang mundur!!!
</p>
</div>
<div class="item">
<!-- <img src="http://farm1.static.flickr.com/200/507751258_5f13e3d802.jpg" />-->
</div>
<div class="item">
<!-- <img src="http://farm1.static.flickr.com/30/37446217_14bc95631a.jpg" />-->
</div>

</div>

</div>

</div>

<!-- page #2 -->
<div class="page">

<div class="navi"></div>

<!-- inner scrollable #2 -->
<div class="scrollable">

<!-- root element for scrollable items -->
<div class="items">

<!-- items on the second page -->
<div class="item">
<ul>
<li><a href="http://github.com/ondoel" target="_blank"><img src="<?php echo base_url(); ?>image/profile/git.png" title="github"/><p>hai gan klo ma nge git bareng gwe di sini ja</p></a></li>
<li><a href="http://www.facebook.com/ondoel.return?ref=tn_tnmn" target="_blank"><img src="<?php echo base_url(); ?>image/profile/fb.png" title="facebook"/><p>yang mau mengenal lebih dalam tentang saya, add aja q</p></a></li>
<li><a href="http://plus.google.com/113797769252980007899/posts" target="_blank"><img src="<?php echo base_url(); ?>image/profile/google.png" title="google+"/><p>ni account saya di google+</p></a></li>
<li><a href="http://pulse.yahoo.com/y" target="_blank"><img src="<?php echo base_url(); ?>image/profile/yahoo.png" title="yahoo"/><p>klo agan agan skalian mau berbagi ilmu lewat email, dsni ja</p></a></li>
<li><a href="http://twitter.com/#!/ondoelratz" target="_blank"><img src="<?php echo base_url(); ?>image/profile/twitter.png" title="twitter"/><p>follow me y</p></a></li>
<li><a href="http://ondoel.blogspot.com/" target="_blank"><img src="<?php echo base_url(); ?>image/profile/blog.png" title="blog"/><p>ni blog yang sedang q handle</p></a></li>
</ul>

</div>
<!-- <div class="item">
<img src="http://farm1.static.flickr.com/164/399223606_b875ddf797.jpg" />
</div>
<div class="item">
<img src="http://farm4.static.flickr.com/3651/3445879840_7ca4b491e9.jpg" />
</div>-->

</div>

</div>

</div>
<!-- page #3 -->
<div class="page">

<div class="navi"></div>

<!-- inner scrollable #3 -->
<div class="scrollable">

<!-- root element for scrollable items -->
<div class="items">

<!-- items on the first page -->
<div class="item">
<iframe width="420" height="315" src="http://www.youtube.com/embed/tsiMrl92RK0" frameborder="0" allowfullscreen></iframe>
</div>
<!-- <div class="item">
<img src="http://farm1.static.flickr.com/40/122343298_22333fb8e3.jpg" />
</div>
<div class="item">
<img src="http://farm4.static.flickr.com/3105/2618870872_cf22d3cdb1.jpg" />
</div>-->

</div>

</div>

</div>
<!-- page #5 -->
<div class="page">

<div class="navi"></div>

<!-- inner scrollable #3 -->
<div class="scrollable">

<!-- root element for scrollable items -->
<div class="items">

<!-- items on the first page -->
<div class="item">
<style>
.item table
{
margin: 0;
padding: 0;
}
.item table tr
{
margin: 0;
padding: 0;
border: 1px solid white
}
.item table tr td
{
width: 250px;
text-align: center;
border: 1px solid white
}
</style>
<table>
<tr>
<td>judul</td>
<td>tanggal</td>
<td>jam</td>
<td>keterangan</td>
</tr>
<tr>
<td>baca buku</td>
<td>12/12/2011</td>
<td>07:30 pm</td>
<td style="width: 600px;">baca buku biar tambah pintar</td>
</tr>
</table>
</div>
<!-- <div class="item">
</div>
<div class="item">
<img src="http://farm4.static.flickr.com/3105/2618870872_cf22d3cdb1.jpg" />
</div>-->

</div>

</div>

</div>


</div>

</div>

</div>    

</div>
