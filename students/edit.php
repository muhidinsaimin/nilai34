<div class="row">
    <div class="col-xl-12 mx-auto">
        <div class="intro-text left-0 text-center bg-faded p-5 rounded">
            <h2 class="section-heading mb-4">
                <span class="section-heading-upper">Edit Data</span>
                <span class="section-heading-lower">Siswa</span>
            </h2>
            <?php
            include_once('config.php');
            $id = $_GET['id'];
            $sql = "SELECT * FROM students WHERE id='$id'";
            $result = mysqli_query($con, $sql);
            $r = mysqli_fetch_assoc($result);
            ?>
            <div class="card-body">
                <form action="?m=students&s=update" method="post">
                    <div class="mb-2">
                        <label for="">Kode Siswa</label>
                        <input type="text" name="code" value="<?=$r['code'];?>" placeholder="Kode Siswa" class="form-control" required>
                    </div>
                    <div class="mb-2">
                        <label for="">Nama Siswa</label>
                        <input type="text" name="major" value="<?=$r['major'];?>" placeholder="Nama Siswa" class="form-control" required>
                    </div>
                    <div class="mb-2">
                        <input type="hidden" name="id" value="<?=$r['id'];?>">
                        <input type="reset" class="btn btn-secondary">
                        <input type="submit" value="Update" name="update" class="btn btn-primary">
                    </div>
                </form>
            </div>
            <div class="intro-button mx-auto"><a class="btn btn-primary btn-sm" href="?m=students">Kembali</a></div>
        </div>
    </div>
</div>