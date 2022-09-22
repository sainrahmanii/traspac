@extends('master')
@section('content')

<div class="col-lg-12 mt-3">
    <div class="card">
        <div class="card-header text-center">
            <div class="card-title">Data Pegawai Negri Sipil</div>
        </div>
        <div class="card-body">
            <table class="table table-hover table-head-bg-info">
                <thead>
                    <tr class="text-center">
                        <th scope="col">No</th>
                        <th scope="col">NIP</th>
                        <th scope="col">Nama</th>
                        <th scope="col">Jenis Kelamin</th>
                        <th scope="col">Alamat</th>
                        <th scope="col">Action</th>
                    </tr>
                </thead>
                <tbody>
                    @forelse($data as $data)
                    <tr class="text-center">
                        <td>{{ $loop->iteration }}</td>
                        <td>{{ $data->Professions?->nip }}</td>
                        <td>{{ $data->name }}</td>
                        <td>{{ $data->jk }}</td>
                        <td>{{ $data->alamat }}</td>
                        <td>
                            <button class="btn btn-success" data-toggle="modal" data-target="#modalpegawai{{$data->id}}"><i class="fas fa-eye"></i></button>

                            <!-- Detail Modal Pegawai -->
                            <div class="modal fade" id="modalpegawai{{$data->id}}" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
                                <div class="modal-dialog modal-dialog-centered">
                                    <div class="modal-content">
                                        <div class="modal-body">
                                            <div class="text-center">
                                                <div>
                                                    <img src="/assets/img/profile.jpg" class="avatar-img rounded-circle avatar-lg" alt="">
                                                    <h4><b>{{ $data->name }}</b></h4>
                                                </div>
                                            </div>
                                            <hr>
                                            <div class="card-category">
                                                <span class="float-left">NIP</span>
                                                <span class="float-right"><b>{{ $data->Professions?->nip }}</b></span>
                                            </div>
                                            <br>
                                            <hr>
                                            <div class="card-category">
                                                <span class="float-left">NPWP</span>
                                                <span class="float-right"><b>{{ $data->Professions?->npwp }}</b></span>
                                            </div>
                                            <br>
                                            <hr>
                                            <div class="card-category">
                                                <span class="float-left">Nama</span>
                                                <span class="float-right"><b>{{ $data->name }}</b></span>
                                            </div>
                                            <br>
                                            <hr>
                                            <div class="card-category">
                                                <span class="float-left">Agama</span>
                                                <span class="float-right"><b>{{ $data->agama }}</b></span>
                                            </div>
                                            <br>
                                            <hr>
                                            <div class="card-category">
                                                <span class="float-left">Tempat Lahir</span>
                                                <span class="float-right"><b>{{ $data->tempat_lahir }}</b></span>
                                            </div>
                                            <br>
                                            <hr>
                                            <div class="card-category">
                                                <span class="float-left">Tanggal Lahir</span>
                                                <span class="float-right"><b>{{ $data->tanggal_lahir }}</b></span>
                                            </div>
                                            <br>
                                            <hr>
                                            <div class="card-category">
                                                <span class="float-left">Alamat</span>
                                                <span class="float-right"><b>{{ $data->alamat }}</b></span>
                                            </div>
                                            <br>
                                            <hr>
                                            <div class="card-category">
                                                <span class="float-left">Jenis Kelamin</span>
                                                <span class="float-right"><b>{{ $data->jk }}</b></span>
                                            </div>
                                            <br>
                                            <hr>
                                            <div class="card-category">
                                                <span class="float-left">Golongan</span>
                                                <span class="float-right"><b>{{ $data->Assignments?->golongan }}</b></span>
                                            </div>
                                            <br>
                                            <hr>
                                            <div class="card-category">
                                                <span class="float-left">Eselon</span>
                                                <span class="float-right"><b>{{ $data->Assignments?->eselon }}</b></span>
                                            </div>
                                            <br>
                                            <hr>
                                            <div class="card-category">
                                                <span class="float-left">Jabatan</span>
                                                <span class="float-right"><b>{{ $data->Professions?->jabatan }}</b></span>
                                            </div>
                                            <br>
                                            <hr>
                                            <div class="card-category">
                                                <span class="float-left">Unit Kerja</span>
                                                <span class="float-right"><b>{{ $data->Assignments?->unit_kerja }}</b></span>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <!-- end modal -->

                            <button class="btn btn-primary" data-toggle="modal" data-target="#modalUpdatePegawai{{ $data->id }}" aria-labelledby="exampleModalLabel" aria-hidden="true"><i class="fas fa-edit"></i></button>

                            <!-- update modal data pegawai -->
                            <div class="modal fade" id="modalUpdatePegawai{{ $data->id }}">
                                <div class="modal-dialog modal-dialog-centered">
                                    <div class="modal-content">
                                        <div class="modal-body">
                                            <div class="row justify-content-center">
                                                <div class="form-group col-md-6">
                                                    <label for="largeInput" class="float-left">Nama</label>
                                                    <input type="text" class="form-control form-control" id="defaultInput" value="{{ old('name') ?: $data->name }}">
                                                </div>
                                                <div class="form-group col-md-6">
                                                    <label for="largeInput" class="float-left">No Handphone</label>
                                                    <input type="number" class="form-control form-control" id="defaultInput" value="{{ old('no_handppone') ?: $data->no_handphone }}">
                                                </div>
                                            </div>
                                            <div class="row justify-content-center">
                                                <div class="form-group col-md-6">
                                                    <label for="largeInput" class="float-left">Agama</label>
                                                    <input type="text" class="form-control form-control" id="defaultInput" value="{{ old('agama') ?: $data->agama }}">
                                                </div>
                                                <div class="form-group col-md-6">
                                                    <label for="largeInput" class="float-left">Alamat</label>
                                                    <input type="text" class="form-control form-control" id="defaultInput" value="{{ old('alamat') ?: $data->alamat }}">
                                                </div>
                                            </div>
                                            <div class="row justify-content-center">
                                                <div class="form-group col-md-6">
                                                    <label for="largeInput" class="float-left">NIP</label>
                                                    <input type="number" class="form-control form-control" id="defaultInput" value="{{ old('nip') ?: $data->Professions?->nip }}">
                                                </div>
                                                <div class="form-group col-md-6">
                                                    <label for="largeInput" class="float-left">NPWP</label>
                                                    <input type="text" class="form-control form-control" id="defaultInput" value="{{ old('npwp') ?: $data->Professions?->npwp }}">
                                                </div>
                                            </div>
                                            <div class="row justify-content-center">
                                                <div class="form-group col-md-6">
                                                    <label for="largeInput" class="float-left">Jabatan</label>
                                                    <input type="text" class="form-control form-control" id="defaultInput" value="{{ old('nip') ?: $data->Professions?->jabatan }}">
                                                </div>
                                                <div class="form-group col-md-6">
                                                    <label for="largeInput" class="float-left">Unit Kerja</label>
                                                    <input type="text" class="form-control form-control" id="defaultInput" value="{{ old('nip') ?: $data->Assignments?->unit_kerja }}">
                                                </div>
                                            </div>
                                            <div class="row justify-content-center">
                                                <div class="form-group col-md-6">
                                                    <label for="largeInput" class="float-left">Tempat Lahir</label>
                                                    <input type="text" class="form-control form-control" id="defaultInput" value="{{ old('tempat_lahir') ?: $data->tempat_lahir }}">
                                                </div>
                                                <div class="form-group col-md-6">
                                                    <label for="largeInput" class="float-left">Tanggal Lahir</label>
                                                    <input type="date" class="form-control form-control" id="defaultInput" value="{{ old('tanggal_lahir') ?: $data->tanggal_lahir }}">
                                                </div>
                                            </div>
                                            <div class="row justify-content-center">
                                                <div class="form-group col-md-6">
                                                    <label for="selectGolongan" class="float-left">Golongan</label>
                                                    <select class="form-control form-control" id="selectGolongan" value="{{ old('golongan') ?: $data->Assignments?->golongan }}">
                                                        <option>1</option>
                                                        <option>2</option>
                                                        <option>3</option>
                                                        <option>4</option>
                                                        <option>5</option>
                                                    </select>
                                                </div>
                                                <div class="form-group col-md-6">
                                                    <label for="selectEselon" class="float-left">Eselon</label>
                                                    <select class="form-control form-control" id="selectEselon" value="{{ old('eselon') ?: $data->Assignments?->eselon }}">
                                                        <option>1</option>
                                                        <option>2</option>
                                                        <option>3</option>
                                                        <option>4</option>
                                                        <option>5</option>
                                                    </select>
                                                </div>
                                            </div>
                                            <div class="row">
                                                <div class="form-group col-md">
                                                    <label for="largeInput" class="float-left">Tempat Tugas</label>
                                                    <input type="text" class="form-control form-control" id="defaultInput" value="{{ old('tempat_tugas') ?: $data->Assignments?->tempat_tugas }}">
                                                </div>
                                                <div class="form-group col-md">
                                                    <label for="largeInput" class="float-left">Foto</label>
                                                    <input type="text" onfocus="(this.type='file')" class="form-control form-control" id="defaultInput" placeholder="Foto" value="{{ old('foto_pegawai') ?: $data->foto_pegawai }}">
                                                </div>
                                            </div>
                                            <div class="form-group form-floating col-md">
                                                <div class="form-check float-bottom" value="{{ old('jk') ?: $data->jk }}">
                                                    <label class="float-left">Jenis Kelamin:</label>
                                                    <label class="form-radio-label">
                                                        <input class="form-radio-input float-left" type="radio" name="optionsRadios" value="" checked="">
                                                        <span class="form-radio-sign">Laki-laki</span>
                                                    </label>
                                                    <label class="form-radio-label">
                                                        <input class="form-radio-input float-left" type="radio" name="optionsRadios" value="">
                                                        <span class="form-radio-sign">Perempuan</span>
                                                    </label>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="modal-action pb-3 pr-3">
                                            <a href="#" style="text-decoration: none; color: white;" class="float-right"><button class="btn btn-warning">UPDATE</button></a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <!-- end modal -->

                            <button class="btn btn-warning"><i class="fas fa-download"></i></button>
                            <a href="{{ route('pegawai.destroy', $data->id) }}" method="POST">
                                @csrf
                                @method('delete')
                                <button class="btn btn-danger"><i class="fas fa-trash-alt"></i></button>
                            </a>
                        </td>
                        @empty
                    <tr>
                        <td colspan="6" class="text-center"><b>Data Belum Tersedia</b></td>
                    </tr>
                    </tr>
                    @endforelse
                </tbody>
            </table>
            <a href="{{ route('pegawai.create') }}" style="text-decoration: none; color: white;"><button class="btn btn-success float-right mt-3">CREATE</button></a>
        </div>
    </div>
</div>

@endsection