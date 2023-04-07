<input type="hidden" name="id" value="{{ $edit->id }}">
<div class="row">
    <div class="col-sm-6">
        <div class="mb-3">
            <label class="form-label">Id Buku</label>
            <input type="date" name="id_buku" class="form-control @error('id_buku') is-invalid @enderror" placeholder="Tambahkan Id buku" value="{{ $edit->id_buku }}">
        </div>
    </div><!-- Col -->
    <div class="col-sm-6">
        <div class="mb-3">
            <label class="judul_buku">Judul Buku</label>
            <input type="text" name="judul_buku" class="form-control @error('judul_buku') is-invalid @enderror" placeholder="Tambahkan judul buku" value="{{ $edit->judul_buku }}">
        </div>
    </div><!-- Col -->
</div><!-- Row -->
<div class="row">
    <div class="col-sm-6">
        <div class="mb-3">
            <label class="kategori">Kategori</label>
                <div>
                    <select class="form-select" name="kategori_id" id="kategori_id">
                        <option value="">-- Pilih --</option>
                        @foreach ($kategori as $sdata)
                        <option value="{{ $sdata->id }}">{{ $sdata->nama_kategori }}</option>
                        @endforeach
                    </select>
                </div>
        </div>
    </div><!-- Col -->
    <div class="col-sm-6">
        <div class="mb-3">
            <label class="subkategori">Sub Kategori</label>
            <div>
                <select class="form-select" name="subkategori_id" id="subkategori_id">
                    <option value="">-- Pilih --</option>
                    @foreach ($subkategori as $sdata)
                    <option value="{{ $sdata->id }}">{{ $sdata->subkategori }}</option>
                    @endforeach
                </select>
            </div>
        </div>
    </div><!-- Col -->
</div><!-- Row -->
<div class="row">
    <div class="col-sm-6">
        <div class="mb-3">
            <label class="cover">Cover</label>
            <br><br>
            <img src="{{ url('/storage/' .$edit->cover)}}" style="width: 35%;"><br><br>
            <input type="file" class="form-control" name="cover_new" id="cover_new">
        </div>
    </div><!-- Col -->
    <div class="col-sm-6">
        <div class="mb-3">
            <label class="file">File</label>
            <input type="file" name="file" class="form-control" placeholder="Tambahkan file" value="{{ $edit->file }}">
        </div>
    </div><!-- Col -->
</div><!-- Row -->
<div class="row">
    <div class="col-sm-6">
        <div class="mb-3">
            <label class="penulis">Penulis</label>
            <input type="text" name="penulis" class="form-control" placeholder="Nama Penulis" value="{{ $edit->penulis }}">
        </div>
    </div><!-- Col -->
    <div class="col-sm-6">
        <div class="mb-3">
            <label class="tahun_terbit">Tahun Terbit</label>
            <input type="text" name="tahun_terbit" class="form-control" placeholder="Tahun Terbit" value="{{ $edit->tahun_terbit }}">
        </div>
    </div><!-- Col -->
</div><!-- Row -->
