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
        
            var el0 = $(".item ul ul.as:eq(0)");
            var el1 = $(".item ul.as:eq(1)");
            var el2 = $(".item ul.as:eq(2)");
      
            $(p0).click(function(){
                $(el0).slideToggle();
            });
            $(p1).click(function(){
                $(el1).slideToggle();
            });
            $(p2).click(function(){
                $(el2).slideToggle();
            });
        });
    </script>
<!--    end scroll honda-->
    <script>
    
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
                    <img src="<?php echo base_url(); ?>image/menu/Mitsubishi.png" />
                    <strong>Toyota</strong>
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
                                            <p>maestro</p>
                                            <ul class="as" style="display: none">
                                                <li>
                                                    <img src="<?php echo base_url(); ?>image/content/maestro/Maestro.jpg"/>
                                                    &nbsp;&nbsp;<img src="<?php echo base_url(); ?>image/content/maestro/Maestro1.jpg"/>
                                                    &nbsp;&nbsp;<img src="<?php echo base_url(); ?>image/content/maestro/Maestro2.jpg"/>
                                                </li>

                                            </ul>

                                        </li>
                                        <li>
                                            <p>genio</p>
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
                                            <p>civic wonder</p>
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
                                            <p>maestro</p>
                                            <ul class="as" style="display: none">
                                                <li>
                                                    <img src="<?php echo base_url(); ?>image/content/maestro/Maestro.jpg"/>
                                                    &nbsp;&nbsp;<img src="<?php echo base_url(); ?>image/content/maestro/Maestro1.jpg"/>
                                                    &nbsp;&nbsp;<img src="<?php echo base_url(); ?>image/content/maestro/Maestro2.jpg"/>
                                                </li>

                                            </ul>

                                        </li>
                                        <li>
                                            <p>genio</p>
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
                                            <p>civic wonder</p>
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
                                            <p>maestro</p>
                                            <ul class="as" style="display: none">
                                                <li>
                                                    <img src="<?php echo base_url(); ?>image/content/maestro/Maestro.jpg"/>
                                                    &nbsp;&nbsp;<img src="<?php echo base_url(); ?>image/content/maestro/Maestro1.jpg"/>
                                                    &nbsp;&nbsp;<img src="<?php echo base_url(); ?>image/content/maestro/Maestro2.jpg"/>
                                                </li>

                                            </ul>

                                        </li>
                                        <li>
                                            <p>genio</p>
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
                                            <p>civic wonder</p>
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


                </div>

            </div>

        </div>    

    </div>
