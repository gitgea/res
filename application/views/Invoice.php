<style>
  table {
    width: 100%;
    border-collapse: collapse;
  }

  th,
  td {
    padding: 8px;
    text-align: left;
    border-bottom: 1px solid #ddd;
  }

  th {
    background-color: #f2f2f2;
  }

  tr:hover {
    background-color: #f5f5f5;
  }
</style>
<table>
  <tr>
    <th>No</th>
    <th>Masakan</th>
    <th>Total</th>
    <th>Meja</th>
    <th>Harga</th>
  </tr>
  <?php $no = 1;
  foreach ($transaksi->masakan as $masakan_key => $masakan) {
  ?>
    <tr>
      <td><?= $no++ ?></td>
      <td><?= $masakan ?></td>
      <td><?= $transaksi->total[$masakan_key] ?></td>
      <td><?= $transaksi->no_meja ?></td>
      <td><?= $transaksi->harga[$masakan_key] ?></td>
    </tr>
  <?php
  }
  ?>
</table>