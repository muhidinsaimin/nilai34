<div class="row">
    <div class="col-xl-12 mx-auto">
        <div class="intro-text left-0 text-center bg-faded p-5 rounded">
            <h2 class="section-heading mb-4">
                <span class="section-heading-upper">Data</span>
                <span class="section-heading-lower">Siswa</span>
            </h2>
            <div class="card-body">
                <table class="table table-hover table-bordered table-striped">
                    <thead class="table-dark">
                        <tr>
                            <th>No</th>
                            <th>NIS</th>
                            <th>Nama Siswa</th>
                            <th>Jenis Kelamin</th>
                            <th>Tempat Lahir</th>
                            <th>Tanggal Lahir</th>
                            <th>Alamat</th>
                            <th>Foto</th>
                            <th>Aksi</th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php
                        include('config.php');
                        $sql = "SELECT * FROM students";
                        $result = mysqli_query($con, $sql);
                        if (mysqli_num_rows($result)>0) {
                            $no=1;
                            while ($r=mysqli_fetch_assoc($result)) {
                                echo '<tr>
                                    <td>'.$no.'</td>
                                    <td>'.$r['nis'].'</td>
                                    <td>'.$r['name'].'</td>
                                    <td>'.$r['gender'].'</td>
                                    <td>'.$r['pob'].'</td>
                                    <td>'.$r['dob'].'</td>
                                    <td>'.$r['address'].'</td>
                                    <td>'.$r['photo'].'</td>
                                    <td>
                                        <a href="?m=students&s=edit&id='.$r['id'].'" class="btn btn-warning btn-sm">Edit</a>&nbsp;
                                        <a href="?m=students&s=delete&id='.$r['id'].'" class="btn btn-danger btn-sm" onclick="return confirm(\'Yakin jurusan dihapus?\')">Hapus</a>
                                    </td>
                                </tr>';
                                $no++;
                            }
                        } else {
                            echo '<tr>
                                <td colspan=9 align="center">Data Kosong</td>
                            </tr>';
                        }
                        ?>
                    </tbody>
                </table>
            </div>
            <div class="intro-button mx-auto"><a class="btn btn-primary btn-xl" href="?m=students&s=add">Tambah</a></div>
        </div>
    </div>
</div>