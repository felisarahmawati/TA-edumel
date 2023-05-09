<input type="hidden" name="id" value="{{ $edit->id }}">
<div class="form-group">
    <label for="image_new"> Gambar </label>
    <br><br>
    <img src="{{ url('/storage/' .$edit->image)}}" style="width: 35%;"><br><br>
    <input type="file" class="form-control" name="image" id="image_new">
</div>
<div class="form-group">
    <label for="teks1">Teks 1</label>
    <input type="text" class="form-control" name="teks1" id="teks1" placeholder="Masukkan teks1"
    @error('teks1') is-invalid @enderror value="{{ old('teks1') }}">
    @error('teks1')
        <div class="alert alert-danger">{{ $message }}</div>
    @enderror
</div>
<div class="form-group">
    <label for="teks2">Teks 1</label>
    <input type="text" class="form-control" name="teks2" id="teks2" placeholder="Masukkan teks2"
    @error('teks2') is-invalid @enderror value="{{ old('teks2') }}">
    @error('teks2')
        <div class="alert alert-danger">{{ $message }}</div>
    @enderror
</div>
