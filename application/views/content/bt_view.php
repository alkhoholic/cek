<head>
    <title>Buku Tamu</title>
</head>
<body>
    <?php
    echo '<div id="stylized" class="myform">';
    echo'<form id="form" name="form" method="post" action="'.site_url('/bt_controller/tambah').'">';
    echo '<h1>Guest Book Form</h1>';
    echo '<p>SilahkanMengisi FormDi Bawahini</p>';
    echo '<label>Username';
    echo '<span class="small">MasukkanNama</span>';
    echo '</label>';
    echo '<input type="text" name="username" id="username" /><br/><br/><br/>';
    echo '<label>Komentar';
    echo '<span class="small">MasukkanKomentar</span>';
    echo'</label>';
    echo '<textarea name="komentar" id="komentar"></textarea>';
    echo '<button type="submit">Kirim</button>';
    echo '<div class="spacer"></div>';
    echo '</form>';
    echo'</div>';
    ?>
    <div id="dtabel">
        <?php foreach ($data as $r): ?>
        <?php echo '<table>'; ?>
        <?php echo '<tr>'; ?>
        <?php echo '<td>'.$r->id .'</td>'; ?>
        <?php echo '</tr>'; ?>
        <?php echo '<tr>'; ?>
        <?php echo '<td><label>Username</label>: '.$r->username.'</td>'; ?>
        <?php echo '</tr>'; ?>
        <?php echo '<tr>'; ?>
        <?php echo '<td><label>Username</label>: '.$r->komentar.'</td>'; ?>
        <?php echo '</tr>'; ?>
        <?php echo '<tr>'; ?>
        <?php echo '<td><label>Username</label>: '.$r->tanggal.'</td>'; ?>
        <?php echo '<td>'.$r->jam.'</td>'; ?>
        <?php echo '</tr>';?>
        <?php echo  '<tr>';?>
        <?php echo  '<td>';?>
        <?php echo  anchor('bt_controller/ubah/'.$r->id,'Ubah');?>
        <?php echo '&nbsp';?>
        <?php echo  anchor('bt_controller/hapus/'.$r->id,'Hapus');?>
        <?php echo '<td>';?>
        <?php echo  '</tr>';?>
        <?php echo '</table>';?>
        <?php endforeach;?>
    </div>
</body>
</html>
        