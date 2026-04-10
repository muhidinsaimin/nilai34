<div class="row">
    <div class="col-xl-12 mx-auto">
        <div class="intro-text left-0 text-center bg-faded p-5 rounded">
            <h2 class="section-heading mb-4">
                <span class="section-heading-upper">Data</span>
                <span class="section-heading-lower">Jurusan</span>
            </h2>
            <div class="card-body">
                <table class="table table-hover table-bordered table-striped">
                    <thead>
                        <tr>
                            <th>No</th>
                            <th>Kode</th>
                            <th>Jurusan</th>
                            <th>Aksi</th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php
                        include('config.php');
                        $sql = "SELECT * FROM majors";
                        $result = mysqli_query($con, $sql);
                        if (mysqli_num_rows($result)>0) {
                            $no=1;
                            while ($r=mysqli_fetch_assoc($result)) {
                                echo '<tr>
                                    <td>'.$no.'</td>
                                    <td>'.$r['code'].'</td>
                                    <td>'.$r['major'].'</td>
                                    <td>Edit
                                    Hapus</td>
                                </tr>';
                                $no++;
                            }
                        } else {
                            echo '<tr>
                                <td colspan=4 align="center">Data Kosong</td>
                            </tr>';
                        }
                        ?>
                    </tbody>
                </table>
            </div>
            <div class="intro-button mx-auto"><a class="btn btn-primary btn-xl" href="?m=majors&s=add">Tambah</a></div>
        </div>
    </div>
</div>