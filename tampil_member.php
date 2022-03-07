<!DOCTYPE html>

<html>

<head>

    

    <title></title>

</head>

<body>

    <h3>Tampil Pelanggan</h3>

    

        <thead>

            <tr>

                <th>NO</th>
                <th>NAMA PELANGGAN</th>
                <th>ALAMAT</th>
                <th>TELP</th>
                <th>USERNAME</th>
                <th>AKSI</th>

            </tr>

        </thead>

        <tbody>

            <?php 

            include "connection.php";

$qry_member=mysqli_query($conn,"select * from member ");

            $no=0;

            while($data_member=mysqli_fetch_array($qry_member)){

            $no++;?>

<tr>              <td><?=$no?></td>
                    <td><?=$data_member['member_name']?></td>
                    <td><?=$data_member['member_address']?></td> 
                    <td><?=$data_member['member_gender']?></td>
                    <td><?=$data_member['member_phone']?></td>
                    
                    <td><a href="ubah_pelanggan.php?id_pelanggan=<?=$data_pelanggan
                    ['id_pelanggan']?> " class="btn btn-success">Ubah</a>
                    | <a href="hapus_pelanggan.php?id_pelanggan=<?=$data_pelanggan['id_pelanggan']?>" 
                    onclick="return confirm('Apakah anda yakin menghapus data ini?')" class="btn btn-danger">Hapus</a></td>


            </tr>

            <?php 

            }

            ?>

        </tbody>

    </table>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-gtEjrD/SeCtmISkJkNUaaKMoLD0//ElJ19smozuHV6z3Iehds+3Ulb9Bn9Plx0x4" crossorigin="anonymous"></script>

</body>

</html>