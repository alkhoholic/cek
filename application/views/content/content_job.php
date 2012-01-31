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
    <!--start scroll honda-->
    <script>
        $(document).ready(function(){
            var p0 = $(".item p:eq(0)");
            var p1 = $(".item p:eq(1)");
            var p2 = $(".item p:eq(2)");
            
            var p3 = $(".item p#p1");
            var p4 = $(".item p#p2");
            var p5 = $(".item p#p3");
            
            var p6 = $(".item p#p4");
            var p7 = $(".item p#p5");
            var p8 = $(".item p#p6");
            
            var p9 = $(".item p#p7");
            var p10 = $(".item p#p8");
            var p11 = $(".item p#p9");
            
            var p12 = $(".item p#p10");
            var p13 = $(".item p#p11");
            var p14 = $(".item p#p12");
            
            
        
            var el0 = $(".item ul.as:eq(0)");
            var el1 = $(".item ul.as:eq(1)");
            var el2 = $(".item ul.as:eq(2)");
            
            var el3 = $(".item ul.as1:eq(0)");
            var el4 = $(".item ul.as1:eq(1)");
            var el5 = $(".item ul.as1:eq(2)");
            
            var el6 = $(".item ul.as2:eq(0)");
            var el7 = $(".item ul.as2:eq(1)");
            var el8 = $(".item ul.as2:eq(2)");
            
            var el9 = $(".item ul.as3:eq(0)");
            var e20 = $(".item ul.as3:eq(1)");
            var e21 = $(".item ul.as3:eq(2)");
            
            var e22 = $(".item ul.as4:eq(0)");
            var e23 = $(".item ul.as4:eq(1)");
            var e24 = $(".item ul.as4:eq(2)");
            
            
       
            $(p0).click(function(){
                $(el0).slideToggle();
            });
            $(p1).click(function(){
                $(el1).slideToggle();
            });
            $(p2).click(function(){
                $(el2).slideToggle();
            });
            $(p3).click(function(){
                $(el3).slideToggle();
            });
            $(p4).click(function(){
                $(el4).slideToggle();
            });
            $(p5).click(function(){
                $(el5).slideToggle();
            });
            $(p6).click(function(){
                $(el6).slideToggle();
            });
            $(p7).click(function(){
                $(el7).slideToggle();
            });
            $(p8).click(function(){
                $(el8).slideToggle();
            });
            $(p9).click(function(){
                $(el9).slideToggle();
            });
            $(p10).click(function(){
                $(e20).slideToggle();
            });
            $(p11).click(function(){
                $(e21).slideToggle();
            });
            $(p12).click(function(){
                $(e22).slideToggle();
            });
            $(p13).click(function(){
                $(e23).slideToggle();
            });
            $(p14).click(function(){
                $(e24).slideToggle();
            });
            
            
        });
    </script>
    <!-- end scroll honda-->
    <script>
        <!--ki ra sah akeh2 ngene..eneng jquery selektor sing lebih singkat,,goleki jquery selektor "gt"-->
        $(document).ready(function(){
            var i0 =$(".as img:eq(0)");
            var i1 =$(".as img:eq(1)");
            var i2 =$(".as img:eq(2)");
            var i3 =$(".as img:eq(3)");
            var i4 =$(".as img:eq(4)");
            var i5 =$(".as img:eq(5)");
            var i6 =$(".as img:eq(6)");
            var i7 =$(".as img:eq(7)");
            var i8 =$(".as img:eq(8)");
            var i9 =$(".as img:eq(9)");
            $(i0).mouseover(function(){
                $(this).css({
                    "opacity":"2",
                    "height":"200px",
                    "width":"200px",
                    "border":"3px solid black"
                });
                $(i1).css({
                    "opacity":"0.6"
                });
                $(i2).css({
                    "opacity":"0.6"
                });
                $(i3).css({
                    "opacity":"0.6"
                });
                $(i4).css({
                    "opacity":"0.6"
                });
                $(i5).css({
                    "opacity":"0.6"
                });
                $(i6).css({
                    "opacity":"0.6"
                });
                $(i7).css({
                    "opacity":"0.6"
                });
                $(i8).css({
                    "opacity":"0.6"
                });
                $(i9).css({
                    "opacity":"0.6"
                });
            });
            $(i0).mouseout(function(){
                $(this).css({
                    "opacity":"0.6",
                    "height":"100px",
                    "width":"100px",
                    "border":"none"
                });
            });
            $(i1).mouseover(function(){
                $(this).css({
                    "opacity":"2",
                    "height":"250px",
                    "width":"250px",
                    "border":"3px solid black"
                });
                $(i0).css({
                    "opacity":"0.6"
                });
                $(i2).css({
                    "opacity":"0.6"
                });
                $(i3).css({
                    "opacity":"0.6"
                });
                $(i4).css({
                    "opacity":"0.6"
                });
                $(i5).css({
                    "opacity":"0.6"
                });
                $(i6).css({
                    "opacity":"0.6"
                });
                $(i7).css({
                    "opacity":"0.6"
                });
                $(i8).css({
                    "opacity":"0.6"
                });
                $(i9).css({
                    "opacity":"0.6"
                });
            });
            $(i1).mouseout(function(){
                $(this).css({
                    "opacity":"0.6",
                    "height":"100px",
                    "width":"100px",
                    "border":"none"
                });
            });
            $(i2).mouseover(function(){
                $(this).css({
                    "opacity":"2",
                    "height":"250px",
                    "width":"250px",
                    "border":"3px solid black"
                });
                $(i0).css({
                    "opacity":"0.6"
                });
                $(i1).css({
                    "opacity":"0.6"
                });
                $(i3).css({
                    "opacity":"0.6"
                });
                $(i4).css({
                    "opacity":"0.6"
                });
                $(i5).css({
                    "opacity":"0.6"
                });
                $(i6).css({
                    "opacity":"0.6"
                });
                $(i7).css({
                    "opacity":"0.6"
                });
                $(i8).css({
                    "opacity":"0.6"
                });
                $(i9).css({
                    "opacity":"0.6"
                });
            });
            $(i2).mouseout(function(){
                $(this).css({
                    "opacity":"0.6",
                    "height":"100px",
                    "width":"100px",
                    "border":"none"
                });
            });
            $(i3).mouseover(function(){
                $(this).css({
                    "opacity":"2",
                    "height":"250px",
                    "width":"250px",
                    "border":"3px solid black"
                });
                $(i0).css({
                    "opacity":"0.6"
                });
                $(i1).css({
                    "opacity":"0.6"
                });
                $(i2).css({
                    "opacity":"0.6"
                });
                $(i4).css({
                    "opacity":"0.6"
                });
                $(i5).css({
                    "opacity":"0.6"
                });
                $(i6).css({
                    "opacity":"0.6"
                });
                $(i7).css({
                    "opacity":"0.6"
                });
                $(i8).css({
                    "opacity":"0.6"
                });
                $(i9).css({
                    "opacity":"0.6"
                });
            });
            $(i3).mouseout(function(){
                $(this).css({
                    "opacity":"0.6",
                    "height":"100px",
                    "width":"100px",
                    "border":"none"
                });
            });
            $(i4).mouseover(function(){
                $(this).css({
                    "opacity":"2",
                    "height":"250px",
                    "width":"250px",
                    "border":"3px solid black"
                });
                $(i0).css({
                    "opacity":"0.6"
                });
                $(i1).css({
                    "opacity":"0.6"
                });
                $(i2).css({
                    "opacity":"0.6"
                });
                $(i3).css({
                    "opacity":"0.6"
                });
                $(i5).css({
                    "opacity":"0.6"
                });
                $(i6).css({
                    "opacity":"0.6"
                });
                $(i7).css({
                    "opacity":"0.6"
                });
                $(i8).css({
                    "opacity":"0.6"
                });
                $(i9).css({
                    "opacity":"0.6"
                });
            });
            $(i4).mouseout(function(){
                $(this).css({
                    "opacity":"0.6",
                    "height":"100px",
                    "width":"100px",
                    "border":"none"
                });
            });
            $(i5).mouseover(function(){
                $(this).css({
                    "opacity":"2",
                    "height":"250px",
                    "width":"250px",
                    "border":"3px solid black"
                });
                $(i0).css({
                    "opacity":"0.6"
                });
                $(i1).css({
                    "opacity":"0.6"
                });
                $(i2).css({
                    "opacity":"0.6"
                });
                $(i3).css({
                    "opacity":"0.6"
                });
                $(i4).css({
                    "opacity":"0.6"
                });
                $(i6).css({
                    "opacity":"0.6"
                });
                $(i7).css({
                    "opacity":"0.6"
                });
                $(i8).css({
                    "opacity":"0.6"
                });
                $(i9).css({
                    "opacity":"0.6"
                });
            });
            $(i5).mouseout(function(){
                $(this).css({
                    "opacity":"0.6",
                    "height":"100px",
                    "width":"100px",
                    "border":"none"
                });
            });
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
                    <img src="<?php echo base_url(); ?>image/menu/honda.png"/>
                    <strong>HONDA</strong>

                </li>

                <li>
                    <img src="<?php echo base_url(); ?>image/menu/suzuki.png" />
                    <strong>SUZUKI</strong>

                </li>
                <li>
                    <img src="<?php echo base_url(); ?>image/menu/daihatsu.png" />
                    <strong>DAIHATSU</strong>

                </li>
                <li>
                    <img src="<?php echo base_url(); ?>image/menu/Mitsubishi.png" />
                    <strong>MITSUBISHI</strong>
                </li>
                <li>
                    <img src="<?php echo base_url(); ?>image/menu/toyota.png" />
                    <strong>TOYOTA</strong>
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
                                    <ul>
                                        <li>
                                            <p>MAESTRO</p>
                                            <ul class="as" style="display: none;">
                                                <li>
                                                    <img src="<?php echo base_url(); ?>image/content/honda/maestro/1.jpg"/>
                                                    &nbsp;<img src="<?php echo base_url(); ?>image/content/honda/maestro/2.jpg"/>
                                                    &nbsp;<img src="<?php echo base_url(); ?>image/content/honda/maestro/7.jpg"/><br/>
                                                    <img src="<?php echo base_url(); ?>image/content/honda/maestro/4.jpg"/>
                                                    &nbsp;<img src="<?php echo base_url(); ?>image/content/honda/maestro/8.jpg"/>
                                                    &nbsp;<img src="<?php echo base_url(); ?>image/content/honda/maestro/6.jpg"/>

                                                </li>

                                            </ul>

                                        </li>
                                        <li>
                                            <p>GENIO</p>
                                            <ul class="as" style="display: none">
                                                <li>
                                                    as
                                                </li>
                                                <li>
                                                    as
                                                </li>
                                                <li>
                                                    as
                                                </li>
                                                <li>
                                                    as
                                                </li>

                                            </ul>
                                        </li>
                                        <li>
                                            <p>CIVIC WONDER</p>
                                            <ul class="as" style="display: none">
                                                <li>
                                                    as
                                                </li>
                                                <li>
                                                    as
                                                </li>
                                                <li>
                                                    as
                                                </li>
                                                <li>
                                                    as
                                                </li>

                                            </ul>
                                        </li>
                                    </ul>
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

                        <!-- sub navigator #1 -->
                        <div class="navi"></div>

                        <!-- inner scrollable #1 -->
                        <div class="scrollable">

                            <!-- root element for scrollable items -->
                            <div class="items">

                                <!-- items -->
                                <div class="item">
                                    <ul>
                                        <li>
                                            <p id="p1">JIMNY</p>
                                            <ul class="as1" style="display: none;">
                                                <li>
                                                    <img src="<?php echo base_url(); ?>image/content/suzuki/jimmy/1.jpg"/>
                                                    &nbsp;<img src="<?php echo base_url(); ?>image/content/suzuki/jimmy/2.jpg"/>
                                                    &nbsp;<img src="<?php echo base_url(); ?>image/content/suzuki/jimmy/3.jpg"/><br/>
                                                    <img src="<?php echo base_url(); ?>image/content/suzuki/jimmy/4.jpg"/>


                                                </li>

                                            </ul>

                                        </li>
                                        <li>
                                            <p id="p2">KARIMUN</p>
                                            <ul class="as1" style="display: none">
                                                <li>
                                                    as
                                                </li>
                                                <li>
                                                    as
                                                </li>
                                                <li>
                                                    as
                                                </li>
                                                <li>
                                                    as
                                                </li>

                                            </ul>
                                        </li>
                                        <li>
                                            <p id="p3">KATANA</p>
                                            <ul class="as1" style="display: none">
                                                <li>
                                                    as
                                                </li>
                                                <li>
                                                    as
                                                </li>
                                                <li>
                                                    as
                                                </li>
                                                <li>
                                                    as
                                                </li>

                                            </ul>
                                        </li>
                                    </ul>
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
                    <!-- page #3 -->
                    <div class="page">

                        <!-- sub navigator #1 -->
                        <div class="navi"></div>

                        <!-- inner scrollable #1 -->
                        <div class="scrollable">

                            <!-- root element for scrollable items -->
                            <div class="items">

                                <!-- items -->
                                <div class="item">
                                    <ul>
                                        <li>
                                            <p id="p4">STARLET</p>
                                            <ul class="as2" style="display: none">
                                                <li>
                                                    <img src="<?php echo base_url(); ?>image/content/daihatsu/starlet/1.jpg"/>
                                                    &nbsp;&nbsp;<img src="<?php echo base_url(); ?>image/content/daihatsu/starlet/2.jpg"/>
                                                    &nbsp;&nbsp;<img src="<?php echo base_url(); ?>image/content/daihatsu/starlet/3.jpg"/><br/>
                                                    <img src="<?php echo base_url(); ?>image/content/daihatsu/starlet/4.jpg"/>
                                                    &nbsp;&nbsp;<img src="<?php echo base_url(); ?>image/content/daihatsu/starlet/5.jpg"/>
                                                    &nbsp;&nbsp;<img src="<?php echo base_url(); ?>image/content/daihatsu/starlet/6.jpg"/>
                                                </li>

                                            </ul>

                                        </li>
                                        <li>
                                            <p id="p5">ESPASS</p>
                                            <ul class="as2" style="display: none">
                                                <li>
                                                    as
                                                </li>
                                                <li>
                                                    as
                                                </li>
                                                <li>
                                                    as
                                                </li>
                                                <li>
                                                    as
                                                </li>

                                            </ul>
                                        </li>
                                        <li>
                                            <p id="p6">ZEBRA</p>
                                            <ul class="as2" style="display: none">
                                                <li>
                                                    as
                                                </li>
                                                <li>
                                                    as
                                                </li>
                                                <li>
                                                    as
                                                </li>
                                                <li>
                                                    as
                                                </li>

                                            </ul>
                                        </li>
                                    </ul>
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
                    <!-- page #5 -->
                    <div class="page">

                        <!-- sub navigator #1 -->
                        <div class="navi"></div>

                        <!-- inner scrollable #1 -->
                        <div class="scrollable">

                            <!-- root element for scrollable items -->
                            <div class="items">

                                <!-- items -->
                                <div class="item">
                                    <ul>
                                        <li>
                                            <p id="p7">L300 (bensin)</p>
                                            <ul class="as3" style="display: none">
                                                <li>
                                                    <img src="<?php echo base_url(); ?>image/content/maestro/Maestro.jpg"/>
                                                    &nbsp;&nbsp;<img src="<?php echo base_url(); ?>image/content/maestro/Maestro1.jpg"/>
                                                    &nbsp;&nbsp;<img src="<?php echo base_url(); ?>image/content/maestro/Maestro2.jpg"/>
                                                </li>

                                            </ul>

                                        </li>
                                        <li>
                                            <p id="p8">L300 (diesel)</p>
                                            <ul class="as3" style="display: none">
                                                <li>
                                                    as
                                                </li>
                                                <li>
                                                    as
                                                </li>
                                                <li>
                                                    as
                                                </li>
                                                <li>
                                                    as
                                                </li>

                                            </ul>
                                        </li>
                                        <li>
                                            <p id="p9">JET STAR</p>
                                            <ul class="as3" style="display: none">
                                                <li>
                                                    as
                                                </li>
                                                <li>
                                                    as
                                                </li>
                                                <li>
                                                    as
                                                </li>
                                                <li>
                                                    as
                                                </li>

                                            </ul>
                                        </li>
                                    </ul>
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
                    <div class="page">

                        <!-- sub navigator #1 -->
                        <div class="navi"></div>

                        <!-- inner scrollable #1 -->
                        <div class="scrollable">

                            <!-- root element for scrollable items -->
                            <div class="items">

                                <!-- items -->
                                <div class="item">
                                    <ul>
                                        <li>
                                            <p id="p10">TWINCAME GT</p>
                                            <ul class="as4" style="display: none">
                                                <li>
                                                    <img src="<?php echo base_url(); ?>image/content/toyota/twincameGT/1.jpg"/>
                                                    &nbsp;&nbsp;<img src="<?php echo base_url(); ?>image/content/toyota/twincameGT/2.jpg"/>
                                                    &nbsp;&nbsp;<img src="<?php echo base_url(); ?>image/content/toyota/twincameGT/3.jpg"/><br/>
                                                    <img src="<?php echo base_url(); ?>image/content/toyota/twincameGT/4.jpg"/>
                                                    &nbsp;&nbsp;<img src="<?php echo base_url(); ?>image/content/toyota/twincameGT/5.jpg"/>
                                                    &nbsp;&nbsp;<img src="<?php echo base_url(); ?>image/content/toyota/twincameGT/6.jpg"/>
                                                </li>

                                            </ul>

                                        </li>
                                        <li>
                                            <p id="p11">COROLLA DX ('83)</p>
                                            <ul class="as4" style="display: none">
                                                <li>
                                                    <img src="<?php echo base_url(); ?>image/content/toyota/corola/1.jpg"/>
                                                    &nbsp;&nbsp;<img src="<?php echo base_url(); ?>image/content/toyota/corola/2.jpg"/>
                                                    &nbsp;&nbsp;<img src="<?php echo base_url(); ?>image/content/toyota/corola/3.jpg"/><br/>
                                                    <img src="<?php echo base_url(); ?>image/content/toyota/corola/4.jpg"/>
                                                    &nbsp;&nbsp;<img src="<?php echo base_url(); ?>image/content/toyota/corola/5.jpg"/>
                                                    &nbsp;&nbsp;<img src="<?php echo base_url(); ?>image/content/toyota/corola/6.jpg"/>

                                                </li>


                                            </ul>
                                        </li>
                                        <li>
                                            <p id="p12">KIJANG SUPER</p>
                                            <ul class="as4" style="display: none">
                                                <li>
                                                    as
                                                </li>
                                                <li>
                                                    as
                                                </li>
                                                <li>
                                                    as
                                                </li>
                                                <li>
                                                    as
                                                </li>

                                            </ul>
                                        </li>
                                    </ul>
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


                </div>

            </div>

        </div>

    </div>