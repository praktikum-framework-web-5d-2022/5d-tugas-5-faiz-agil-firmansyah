@extends('master')
@section('title','Bengkel')

@section('content')
    <style>
        .bg-maroon {
            background-color: maroon;
            color: white;
        }
    </style>
    <div class="container pt-4 bg-white">
        <div class="row">
            <div class="col-md-12">
                <h2>Edit Data Customer</h2>
                <p>Masukkan data Customer dengan lengkap</p>
                @if (session()->has('message'))
                    <div class="my-3">
                        <div class="alert alert-success">
                            {{session()->get('message')}}
                        </div>
                    </div>
                @endif
                <form action="{{route('customer.update', ['pasien' => $customer->id])}}" method="POST">
                    @method('PATCH')
                    @csrf
                    <div class="mb-4">
                        <label for="nik" class="form-label">NIK</label>
                        <input type="text" name="nik" id="nik" placeholder="Masukkan NIK" class="form-control" value="{{old('npm') ?? $pasien->nik}}">
                        @error('nik')
                            <div class="text-danger">{{$message}}</div>
                        @enderror
                    </div>
                    <div class="mb-4">
                        <label for="nama" class="form-label">Nama</label>
                        <input type="text" name="nama" id="nama" placeholder="Masukkan Nama" class="form-control" value="{{old('nama') ?? $pasien->nama}}">
                        @error('nama')
                            <div class="text-danger">{{$message}}</div>
                        @enderror
                    </div>
                    <div class="mb-4">
                        <label for="jenis_kelamin" class="form-label">Jenis Kelamin</label>
                        <select name="jenis_kelamin" id="jenis_kelamin" class="form-control">
                            <option value="Laki-laki" {{old('jenis_kelamin') ?? $pasien->jenis_kelamin == "Laki-laki" ? "selected" : ""}}>Laki-laki</option>
                            <option value="Perempuan" {{old('jenis_kelamin') ?? $pasien->jenis_kelamin == "Perempuan" ? "selected" : ""}}>Perempuan</option>
                        </select>
                        @error('jenis_kelamin')
                            <div class="text-danger">{{$message}}</div>
                        @enderror
                    </div>
                    <div class="mb-4">
                        <label for="alamat" class="form-label">Alamat</label>
                        <input type="text" name="alamat" id="alamat" placeholder="Masukkan Alamat" class="form-control" value="{{old('alamat') ?? $pasien->alamat}}">
                        @error('pasien')
                            <div class="text-danger">{{$message}}</div>
                        @enderror
                    </div>
                    <div class="mb-4">
                        <label for="biaya_gantioli" class="form-label">Biaya Ganti Oli</label>
                        <input type="text" name="biaya_gantioli" id="biaya_gantioli" placeholder="Masukkan 0 jika tidak ada biaya ganti oli" class="form-control" value="{{old('biaya_gantioli') ?? $customer->tagihan->biaya_gantioli}}">
                        @error('biaya_gantioli')
                            <div class="text-danger">{{$message}}</div>
                        @enderror
                    </div>
                    <div class="mb-4">
                        <label for="biaya_gantiban" class="form-label">Biaya Ganti Ban</label>
                        <input type="text" name="biaya_gantiban" id="biaya_gantiban" placeholder="Masukkan 0 jika tidak ada biaya ganti ban" class="form-control" value="{{old('biaya_gantiban') ?? $customer->tagihan->biaya_gantiban}}">
                        @error('biaya_konsultasi')
                            <div class="text-danger">{{$message}}</div>
                        @enderror
                    </div>
                    <div class="mb-4">
                        <label for="biaya_administrasi" class="form-label">Biaya Administrasi</label>
                        <input type="text" name="biaya_administrasi" id="biaya_administrasi" placeholder="Masukkan 0 jika tidak ada biaya administrasi" class="form-control" value="{{old('biaya_administrasi') ?? $pasien->tagihan->biaya_administrasi}}">
                        @error('biaya_administrasi')
                            <div class="text-danger">{{$message}}</div>
                        @enderror
                    </div>
                    <div class="mb-4">
                        <label for="biaya_lain" class="form-label">Biaya Lainnya</label>
                        <input type="text" name="biaya_lain" id="biaya_lain" placeholder="Masukkan 0 jika tidak ada biaya lainnya" class="form-control" value="{{old('biaya_lain') ?? $pasien->tagihan->biaya_lain}}">
                        @error('biaya_lain')
                            <div class="text-danger">{{$message}}</div>
                        @enderror
                    </div>
                    <button type="submit" class="btn bg-maroon">Edit</button>
                    <p></p>
                </form>
            </div>
        </div>
    </div>
@endsection
