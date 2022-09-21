<h3>Data Pegawai</h3>
<table class="table table-striped">
  <thead>
    <tr>
      <th scope="col">NO</th>
      <th scope="col">NIP</th>
      <th scope="col">Nama</th>
      <th scope="col">Gender</th>
    </tr>
  </thead>
  <tbody>
    <?php
    //ciptakan object
    $model = new Pegawai();
    $rs = $model->dataPegawai();
    $no = 1;
    foreach($rs as $peg){
    ?>
        <tr>
            <th scope="row"><?= $no ?></th>
            <td><?= $peg['nip'] ?></td>
            <td><?= $peg['nama'] ?></td>
            <td><?= $peg['gender'] ?></td>
        </tr>
    <?php $no++; } ?>    
  </tbody>
</table>