@extends('master')
@section('content')

<form action="{{ route('pegawai.store') }}" method="POST" enctype="multipart/form-data">
    @csrf
    <div class="col-md-12">
        <div class="card mt-4">
            <div class="card-header">
                <div class="card-title text-center">Tambah Data Pegawai</div>
            </div>
            <div class="card-body">
                <div class="row form-group justify-content-center">
                    <div class="form-group form-floating-label col-md-6">
                        <input id="inputFloatingNama" name="name" type="text" class="form-control input-solid {{ $errors->has('name') ? 'is-invalid' : '' }}" value="{{ old('name')}}" required>
                        <label for="inputFloatingNama" class="placeholder">Nama</label>
                        @if ($errors->has('name'))
                        <p class="text-danger">{{ $errors->first('name') }}</p>
                        @endif
                    </div>
                    <div class="form-group form-floating-label col-md-6">
                        <input id="inputFloatingNoHandPhone" name="no_handphone" type="number" class="form-control input-solid {{ $errors->has('no_hanphone') ? 'is-invalid' : '' }}" value="{{ old('no_handphone')}}" required>
                        <label for="inputFloatingNoHandPhone" class="placeholder">No Handphone</label>
                        @if ($errors->has('no_handphone'))
                        <p class="text-danger">{{ $errors->first('no_handphone') }}</p>
                        @endif
                    </div>
                </div>
                <div class="row form-group justify-content-center">
                    <div class="form-group form-floating-label col-md-6">
                        <input id="inputFloatingAgama" name="agama" type="text" class="form-control input-solid {{ $errors->has('agama') ? 'is-invalid' : '' }}" value="{{ old('agama')}}" required>
                        <label for="inputFloatingAgama" class="placeholder">Agama</label>
                        @if ($errors->has('agama'))
                        <p class="text-danger">{{ $errors->first('agama') }}</p>
                        @endif
                    </div>
                    <div class="form-group form-floating-label col-md-6">
                        <input id="inputFloatingAlamat" name="alamat" type="text" class="form-control input-solid {{ $errors->has('alamat') ? 'is-invalid' : '' }}" value="{{ old('alamat')}}" required>
                        <label for="inputFloatingAlamat" class="placeholder">Alamat</label>
                        @if ($errors->has('alamat'))
                        <p class="text-danger">{{ $errors->first('alamat') }}</p>
                        @endif
                    </div>
                </div>
                <div class="row form-group justify-content-center">
                    <div class="form-group form-floating-label col-md-6">
                        <input id="inputFloatingTempatLahir" name="tempat_lahir" type="text" class="form-control input-solid {{ $errors->has('tempat_lahir') ? 'is-invalid' : '' }}" value="{{ old('tempat_lahir')}}" required>
                        <label for="inputFloatingTempatLahir" class="placeholder">Tempat Lahir</label>
                        @if ($errors->has('tempat_lahir'))
                        <p class="text-danger">{{ $errors->first('tempat_lahir') }}</p>
                        @endif
                    </div>
                    <div class="form-group form-floating-label col-md-6">
                        <input id="inputFloatingTanggalLahir" name="tanggal_lahir" type="text" class="form-control input-solid {{ $errors->has('tanggal_lahir') ? 'is-invalid' : '' }}" value="{{ old('tanggal_lahir')}}" onfocus="(this.type='date')" required>
                        <label for="inputFloatingTanggalLahir" class="placeholder">Tanggal Lahir</label>
                        @if ($errors->has('tanggal_lahir'))
                        <p class="text-danger">{{ $errors->first('tanggal_lahir') }}</p>
                        @endif
                    </div>
                </div>
                <div class="row form-group">
                    <div class="form-group form-floating-label col-md-6">
                        <input id="inputFloatingFoto" name="foto_pegawai" type="text" onfocus="(this.type='file')" class="form-control input-solid {{ $errors->has('foto_pegawai') ? 'is-invalid' : '' }}" value="{{ old('foto_pegawai')}}" required>
                        <label for="inputFloatingFoto" class="placeholder">Foto Pegawai</label>
                        @if ($errors->has('foto_pegawai'))
                        <p class="text-danger">{{ $errors->first('foto_pegawai') }}</p>
                        @endif
                    </div>
                    <div class="form-group form-floating col-md-6">
                        <div class="form-check {{ $errors->has('jk') ? 'is-invalid' : '' }}" name="jk" value="{{ old('jk')}}">
                            <label>Jenis Kelamin:</label>
                            <label class="form-radio-label ml-3">
                                <input class="form-radio-input" type="radio" name="jk" value="Laki-laki">
                                <span class="form-radio-sign">Laki-laki</span>
                            </label>
                            <label class="form-radio-label ml-2">
                                <input class="form-radio-input" type="radio" name="jk" value="Perempuan">
                                <span class="form-radio-sign">Perempuan</span>
                            </label>
                            @if ($errors->has('jk'))
                            <p class="text-danger">{{ $errors->first('jk') }}</p>
                            @endif
                        </div>
                    </div>
                </div>
            </div>
            <div class="card-action">
                <button class="btn btn-primary float-right">NEXT</button>
            </div>
        </div>
    </div>
</form>

@endsection