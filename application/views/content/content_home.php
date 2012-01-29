
<script>
    $(document).ready(function(){
        $(".navlist ul li a:eq(0)").css({
            "color":"red",
            "font-size":"30px"
        });
            $(".navlist ul li a:eq(0)").mouseover(function(){
                $(this).css({
                "font-size":"30px"
            }); 
            $(".navlist ul li a:eq(0)").mouseout(function(){
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
    <div class="content_profile">
    <ul id="main_navi">

<li class="active">
<style>
.active img
{
margin-top: -10px;
}
</style>
<img src="<?php echo base_url(); ?>image/menu/piston1.png"/>
<strong>PERSONAL</strong>

</li>

<li>
<img src="<?php echo base_url(); ?>image/menu/piston2.png" />
<strong>ABOUT 522</strong>

</li>
<li>
<img src="<?php echo base_url(); ?>image/menu/drill.png" />
<strong>CONTACT</strong>

</li>
<li>
<img src="<?php echo base_url(); ?>image/menu/lock.png" />
<strong>AGENDA</strong>

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
<img src="<?php echo base_url(); ?>image/content/mastro.jpg" style="margin: 5px;float: left; height: 200px; width: 150px"/>
<h2>
ABOUT ME
</h2>
<p style="text-align: justify; text-indent: 20px">
Nama bengkel 522 adalah bengkel khusus mobil,nama 522 hanya diambil dari nomor rumah saja,bengkel 522 diantaranya melayani:<br />
<li>service ringan/berat</li>
<li>tune up</li>
<li>cek brake/disbrake rear/front</li>
<li>over holl</li>
<li>dan masih bnyak lagi..</li>
Bengkel 522 berusaha melayani pelanggan dengan sebaik-baiknya...dan berusaha untuk memuaskan para pelanggan
</p>
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
<li><a href="http://github.com/ondoel" target="_blank"><img src="<?php echo base_url(); ?>image/profile/git.png" title="github"/><p>SUHARTO</p></a></li>
<li><a href="http://www.facebook.com/people/Joko-Kgethan/100000141130438" target="_blank"><img src="<?php echo base_url(); ?>image/profile/fb.png" title="facebook"/><p>JOKO SISWANTO</p></a></li>
<li><a href="https://www.facebook.com/PutroRiyadiSetyoNugroho" target="_blank"><img src="<?php echo base_url(); ?>image/profile/google.png" title="google+"/><p>PUTRO RIYADI SETYO NUGROHO</p></a></li>
</ul>

</div>

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
    <ul>
        <li>SUHARTO&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;+622747409518</li><br />
        <li>JOKO SISWANTO&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;+6285740679614</li><br />
        <li>PUTRO RIYADI SETYO NUGROHO&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;+6281904203138</li>
    </ul>
</div>

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
border: 1px solid black
}
</style>
<table>
<tr>
<td>mobil</td>
<td>tanggal</td>
<td>jam</td>
<td>keterangan</td>
</tr>
<tr>
<td>star</td>
<td>12/12/2011</td>
<td>07:30 pm</td>
<td style="width: 600px;">tune up</td>
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


    