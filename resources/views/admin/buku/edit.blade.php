<input type="hidden" name="id" value="{{ $edit->id }}">
<input type="hidden" name="gambarLama" value="{{ $edit->cover }}">
<div class="row">
    <div class="col-sm-12">
        <div class="mb-3">
            <label>Judul Buku</label>
            <input type="text" name="judul_buku" class="form-control @error('judul_buku') is-invalid @enderror" placeholder="Tambahkan judul buku" value="{{ $edit->judul_buku }}">
        </div>
    </div><!-- Col -->
</div><!-- Row -->
<div class="row">
    <div class="col-sm-6">
        <div class="mb-3">
            <label>Kategori</label>
                <div>
                    <select class="form-select" name="kategori_id" id="kategori_id">
                        <option value="">{{ $edit->kategori->nama_kategori}}</option>
                        @foreach ($kategori as $sdata)
                         <option value="{{ $sdata->id }}">{{ $sdata->nama_kategori }}</option>
                        @endforeach
                    </select>
                </div>
        </div>
    </div><!-- Col -->
    <div class="col-sm-6">
        <div class="mb-3">
            <label>Sub Kategori</label>
            <div>
                <select class="form-select" name="subkategori_id" id="subkategori_id">
                    <option value="">{{ $edit->subkategori->subkategori}}</option>
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
            <label>Cover</label>
            <br><br>
            <img src="{{ url('/storage/' .$edit->cover)}}" style="width: 35%;"><br><br>
            <input type="file" class="form-control" name="cover" id="cover_new">
        </div>
    </div><!-- Col -->
</div><!-- Row -->
<div class="row">
    <div class="col-sm-6">
        <div class="mb-3">
            <label>Penulis</label>
            <input type="text" name="penulis" class="form-control" placeholder="Nama Penulis" value="{{ $edit->penulis }}">
        </div>
    </div><!-- Col -->
    <div class="col-sm-6">
        <div class="mb-3">
            <label>Tahun Terbit</label>
            <input type="text" name="tahun_terbit" class="form-control" placeholder="Tahun Terbit" value="{{ $edit->tahun_terbit }}">
        </div>
    </div><!-- Col -->
</div><!-- Row -->
