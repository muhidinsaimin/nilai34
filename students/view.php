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
                            <th>Jurusan</th>
                            <th>Foto</th>
                            <th>Aksi</th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php
                        include('config.php');
                        $sql = "SELECT majors.id AS mid, majors.major, students.id AS sid, students.nis, students.name, students.gender, students.pob, students.dob, students.address, students.photo FROM students JOIN majors ON majors.id=students.major_id";
                        $result = mysqli_query($con, $sql);
                        if (mysqli_num_rows($result)>0) {
                            $no=1;
                            while ($r=mysqli_fetch_assoc($result)) {
                                if (isset($r['photo'])) {
                                    $photo = '<img src="students/photos/'.$r['photo'].'" alt="Siswa" height="100px">';
                                    } else {
                                    $photo = '<img src="students/photos/0.png" alt="Siswa" height="100px">';
                                }
                                echo '<tr>
                                    <td>'.$no.'</td>
                                    <td>'.$r['nis'].'</td>
                                    <td>'.$r['name'].'</td>
                                    <td>'.$r['gender'].'</td>
                                    <td>'.$r['pob'].'</td>
                                    <td>'.$r['dob'].'</td>
                                    <td>'.$r['address'].'</td>
                                    <td>'.$r['major'].'</td>
                                    <td>'.$photo.'</td>
                                    <td>
                                        <a href="?m=students&s=edit&id='.$r['sid'].'" class="btn btn-warning btn-sm">Edit</a>
                                        <a href="?m=students&s=delete&id='.$r['sid'].'" class="btn btn-danger btn-sm" onclick="return confirm(\'Yakin siswa dihapus?\')">Hapus</a>
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