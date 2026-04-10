<div class="row">
    <div class="col-xl-12 mx-auto">
        <div class="intro-text left-0 text-center bg-faded p-5 rounded">
            <h2 class="section-heading mb-4">
                <span class="section-heading-upper">Tambah Data</span>
                <span class="section-heading-lower">Siswa</span>
            </h2>
            <div class="card-body">
                <form action="?m=students&s=save" method="post">
                    <div class="mb-2">
                        <input type="number" name="code" placeholder="Kode Siswa" class="form-control" required>
                    </div>
                    <div class="mb-2">
                        <input type="text" name="major" placeholder="Nama Siswa" class="form-control" required>
                    </div>
                    <div class="mb-2">
                        <input type="reset" class="btn btn-secondary">
                        <input type="submit" value="Simpan" name="simpan" class="btn btn-primary">
                    </div>
                </form>
            </div>
            <div class="intro-button mx-auto"><a class="btn btn-primary btn-sm" href="?m=students">Kembali</a></div>
        </div>
    </div>
</div>