@csrf

<div class="form-group row">
        <label form ="nama" class="col-md-4 col-form-label text-md-right">{{ __('Nama') }}</label>

        <div class="col-md-6">
            <input id="nama" type="text" class="form-control @error('nama') is-invalid @enderror" name="nama" value="{{ old('nama') }}" required autofocus>

            @error('nama')
            <span class="invalid-feedback" role="alert">
                <strong>{{ $message }}</strong>
            </span>
            @enderror
        </div>
</div>
 <div class="form-group row">
        <label form ="keterangan" class="col-md-4 col-form-label text-md-right">{{ __('keterangan') }}</label>

        <div class="col-md-6">
            <input id="keterangan" type="text" class="form-control @error('keterangan') is-invalid @enderror" name="keterangan" value="{{ old('keterangan') }}" required autofocus>

            @error('keterangan')
            <span class="invalid-feedback" role="alert">
                <strong>{{ $message }}</strong>
            </span>
            @enderror
        </div>

</div>
<div class="form-group row">
        <label form ="path" class="col-md-4 col-form-label text-md-right">{{ __('path') }}</label>

        <div class="col-md-6">
            <input id="path" type="text" class="form-control @error('path') is-invalid @enderror" name="path" value="{{ old('path') }}" required autofocus>

            @error('path')
            <span class="invalid-feedback" role="alert">
                <strong>{{ $message }}</strong>
            </span>
            @enderror
        </div>

</div>
 <div class="form-group row">
        <label form ="kategori_galeri_id" class="col-md-4 col-form-label text-md-right">{{ __('kategori_galeri_id') }}</label>

        <div class="col-md-6">
            <input id="kategori_galeri_id" type="text" class="form-control @error('kategori_galeri_id') is-invalid @enderror" name="kategori_galeri_id" value="{{ old('kategori_galeri_id') }}" required autofocus>

            @error('kategori_galeri_id')
            <span class="invalid-feedback" role="alert">
                <strong>{{ $message }}</strong>
            </span>
            @enderror
        </div>
</div>
<input id="users_id" type="hidden" class="form-control @error('users_id') is-invalid @enderror" name="users_id" value="{{ Auth::id() }}" required autocomplete="users_id" autofocus>

<div class="form-group row mb-0">
    <div class="col-md-6 offset-md-4">
            <button type="submit" class="btn btn-primary">
                {{ __('Simpan Data') }}
            </button>
            <a href="{!! route('galeri.index')!!}" class="btn btn-danger">
                {{ __('Batal') }}
            </a>
    </div>
</div>