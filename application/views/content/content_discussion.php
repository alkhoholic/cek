<div class="body">
    <script>
        $(document).ready(function(){
            $(".navlist ul li a:eq(2)").css({
                "color":"red",
                "font-size":"30px"
            });
            $(".navlist ul li a:eq(2)").mouseover(function(){
                $(this).css({
                    "font-size":"30px"
                }); 
                $(".navlist ul li a:eq(2)").mouseout(function(){
                    $(this).css({
                        "font-size":"30px" 
                    });
                });
            });

        });
    </script>
    <style>
        #stylized
        {
            margin-top: 30px;
        }
        #stylized h1
        {
            color: purple;
            font-size: 30px;
            text-align: center
        }
        #stylized p
        {
            font-size: 20px
        }
        .small
        {
            color: red;
            margin-left: 10px
        }
        .kirim
        {
            margin-left: 62px;
            margin-top: 12px
        }
        #username
        {
            margin-left: 43px;
            text-align: left
        }
        #komentar
        {
            margin-left: 25px
        }
        #dtabel
        {
            margin-left: 380px;
            margin-top: -211px;
            position: absolute;


        }

        #dtabel textarea
        {
            text-align: center;
            position: relative;
            readonly:readonly;
            font-size: normal;
            text-align: auto;

            border-radius: 20px 0px 0px 20px;
            border:2px solid purple;
            max-height: 165px;
            max-width: 400;
               color: blueviolet
        }


    </style>
    <div class="content">
        <?php
        echo '<div id="stylized" class="myform">';
        echo'<form id="form" name="form" method="post" action="' . site_url('/bt_controller/tambah') . '">';
        echo '<h1>Any Problem</h1><br/>';
        echo '<p>SilahkanMengisi Form Di Bawah ini :</p><br/>';
        echo '<label>Username<br/><br/>';
        echo '<span class="small">Masukkan Nama </span>';
        echo '</label>';
        echo '<input type="text" name="username" id="username" class="name" required="required style="text-align:left" /><br/><br/><br/>';
        echo '<label>Komentar<br/>';
        echo '<span class="small">Masukkan Komentar</span>';
        echo'</label>';
        echo '<textarea name="komentar" id="komentar"></textarea><br/>';
        echo '<button type="submit" class="kirim">Kirim</button>';
        echo '<div class="spacer"></div>';
        echo '</form>';
        echo'</div>';
        ?>
        <div id="dtabel">

            <?php echo '<textarea style="height:165px;width:400px;">  '; ?>
            <?php foreach ($data as $r): ?>
                
                <?php echo 'Username: ' . $r->username . ''; ?>   

                <?php echo 'comment : ' . $r->komentar . ''; ?>
            <?php endforeach; ?> 
            <?php echo '</textarea>'; ?>

        </div>
    </div>