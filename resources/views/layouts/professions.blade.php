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
                        <input id="inputFloatingNIP" name="nip" type="number" class="form-control input-solid {{ $errors->has('nip') ? 'is-invalid' : '' }}" value="{{ old('nip')}}" required>
                        <label for="inputFloatingNIP" class="placeholder">NIP</label>
                        @if ($errors->has('nip'))
                        <p class="text-danger">{{ $errors->first('nip') }}</p>
                        @endif
                    </div>
                    <div class="form-group form-floating-label col-md-6">
                        <input id="inputFloatingNPWP" name="npwp" type="text" class="form-control input-solid {{ $errors->has('npwp') ? 'is-invalid' : '' }}" value="{{ old('npwp')}}" required>
                        <label for="inputFloatingNPWP" class="placeholder">NPWP</label>
                        @if ($errors->has('npwp'))
                        <p class="text-danger">{{ $errors->first('npwp') }}</p>
                        @endif
                    </div>
                </div>
                <div class="row form-group justify-content-center">
                    <div class="form-group form-floating-label col-md-6">
                        <input id="inputFloatingJabatan" name="jabatan" type="text" class="form-control input-solid {{ $errors->has('jabatan') ? 'is-invalid' : '' }}" value="{{ old('jabatan')}}" required>
                        <label for="inputFloatingJabatan" class="placeholder">Jabatan</label>
                        @if ($errors->has('jabatan'))
                        <p class="text-danger">{{ $errors->first('jabatan') }}</p>
                        @endif
                    </div>
                    <div class="form-group form-floating-label col-md-6">
                        <input id="inputFloatingUnitKerja" name="unit_kerja" type="text" class="form-control input-solid {{ $errors->has('unit_kerja') ? 'is-invalid' : '' }}" value="{{ old('unit_kerja')}}" required>
                        <label for="inputFloatingUnitKerja" class="placeholder">Unit Kerja</label>
                        @if ($errors->has('unit_kerja'))
                        <p class="text-danger">{{ $errors->first('unit_kerja') }}</p>
                        @endif
                    </div>
                </div>
                <div class="row form-group justify-content-center">
                    <div class="form-group form-floating-label col-md-6">
                        <select class="form-control input-solid {{ $errors->has('golongan') ? 'is-invalid' : '' }}" name="golongan" id="selectFloatingGolongan" value="{{ old('golongan')}}" required>
                            <option value="">&nbsp;</option>
                            <option>1</option>
                            <option>2</option>
                            <option>3</option>
                            <option>4</option>
                            <option>5</option>
                        </select>
                        <label for="selectFloatingGolongan" class="placeholder">Golongan</label>
                        @if ($errors->has('golongan'))
                        <p class="text-danger">{{ $errors->first('golongan') }}</p>
                        @endif
                    </div>
                    <div class="form-group form-floating-label col-md-6">
                        <select class="form-control input-solid {{ $errors->has('eselon') ? 'is-invalid' : '' }}" name="eselon" id="selectFloatingEselon" value="{{ old('eselon')}}" required>
                            <option value="">&nbsp;</option>
                            <option>1</option>
                            <option>2</option>
                            <option>3</option>
                            <option>4</option>
                            <option>5</option>
                        </select>
                        <label for="selectFloatingEselon" class="placeholder">Eselon</label>
                        @if ($errors->has('eselon'))
                        <p class="text-danger">{{ $errors->first('eselon') }}</p>
                        @endif
                    </div>
                </div>
                <div class="row form-group">
                    <div class="form-group form-floating-label col-md-6">
                        <input id="inputFloatingTempatTugas" name="tempat_tugas" type="text" class="form-control input-solid {{ $errors->has('tempat_tugas') ? 'is-invalid' : '' }}" value="{{ old('tempat_tugas')}}" required>
                        <label for="inputFloatingTempatTugas" class="placeholder">Tempat Tugas</label>
                        @if ($errors->has('tempat_tugas'))
                        <p class="text-danger">{{ $errors->first('tempat_tugas') }}</p>
                        @endif
                    </div>
                </div>
            </div>
            <div class="card-action">
                <button class="btn btn-success float-right">Submit</button>
            </div>
        </div>
    </div>
</form>


@endsection