<div class="row">
    <div class="col-xl-12 mx-auto">
        <div class="intro-text left-0 text-center bg-faded p-5 rounded">
            <h2 class="section-heading mb-4">
                <span class="section-heading-upper">Tambah Data</span>
                <span class="section-heading-lower">Jurusan</span>
            </h2>
            <div class="card-body">
                <form action="?m=majors&s=save" method="post">
                    <div class="mb-2">
                        <input type="number" name="code" placeholder="Kode Jurusan" class="form-control" required>
                    </div>
                    <div class="mb-2">
                        <input type="text" name="major" placeholder="Nama Jurusan" class="form-control" required>
                    </div>
                    <div class="mb-2">
                        <input type="reset" class="btn btn-secondary">
                        <input type="submit" value="Simpan" name="simpan" class="btn btn-primary">
                    </div>
                </form>
            </div>
            <div class="intro-button mx-auto"><a class="btn btn-primary btn-sm" href="?m=majors">Kembali</a></div>
        </div>
    </div>
</div>