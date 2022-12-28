@extends('master')
@section('title','Bengkel')
@section('menu','active')

@section('content')
    <style>
        .bg-maroon {
            background-color: maroon;
            color: white;
        }
        .text-maroon {
            color: maroon;
            font-weight: bold
        }
    </style>
    <div class="container pt-4 bg-white">
        <div class="row">
            <div class="col-md-12">
                <div class="d-flex justify-content-between">
                    <h2>Data Customer</h2>
                    <a href="{{route('customer.create')}}" class="btn bg-maroon">Tambah</a>
                </div>
                <p>Dibawah ini merupakan data customer <span class="text-maroon">Bengkel UNSIKA</span></p>
                @if (session()->has('message'))
                    <div class="my-3">
                        <div class="alert alert-success">
                            {{session()->get('message')}}
                        </div>
                    </div>
                @endif
                <div class="table-responsive">
                    <table class="table table-bordered" align="center">
                        <thead>
                            <tr align="center">
                                <th align="center" class="align-middle" rowspan="2">#</th>
                                <th align="center" class="align-middle" rowspan="2">NIK</th>
                                <th align="center" class="align-middle" rowspan="2">Nama Lengkap</th>
                                <th align="center" class="align-middle" rowspan="2">Jenis Kelamin</th>
                                <th align="center" class="align-middle" rowspan="2">Alamat</th>
                                <th align="center" colspan="4">Tagihan</th>
                                <th align="center" class="align-middle" rowspan="2">Total Tagihan</th>
                                <th align="center" class="align-middle" rowspan="2">Aksi</th>
                            </tr>
                            <tr align="center">
                                <td align="center">Biaya Ganti Oli</td>
                                <td align="center">Biaya Ganti Ban</td>
                                <td align="center">Biaya Administrasi</td>
                                <td align="center">Biaya Lainnya</td>
                            </tr>
                        </thead>
                        <tbody>
                            @forelse ($customers as $customer)
                                <tr>
                                    <td align="center">{{$loop->iteration}}</td>
                                    <td align="center">{{$customer->nik}}</td>
                                    <td align="center">{{$customer->nama}}</td>
                                    <td align="center">{{$customer->jenis_kelamin}}</td>
                                    <td align="center">{{$customer->alamat}}</td>
                                    <td align="center">@currency($customer->tagihan->biaya_gantioli ?? 0)</td>
                                    <td align="center">@currency($customer->tagihan->biaya_gantiban ?? 0)</td>
                                    <td align="center">@currency($customer->tagihan->biaya_administrasi ?? 0)</td>
                                    <td align="center">@currency($customer->tagihan->biaya_lain ?? 0)</td>
                                    <td align="center">Rp.
                                        <?php
                                        $total_tagihan = ($customer->tagihan->biaya_gantioli ?? 0) + ($customer->tagihan->biaya_gantiban ?? 0) + ($customer->tagihan->biaya_administrasi ?? 0) + ($customer->tagihan->biaya_lain ?? 0);
                                        echo number_format($total_tagihan,0,',','.');
                                        ?>
                                    </td>
                                    <td align="center">
                                        <div class="d-flex">
                                        <a href="{{route('customer.edit', ['customer'=>$customer->id])}}" class="btn btn-warning">Edit</a>
                                        <form action="{{route('customer.destroy', ['customer'=>$customer->id])}}" method="POST" class="ms-1">
                                            @method('DELETE')
                                            @csrf
                                            <button type="submit" class="btn btn-danger">Delete</button>
                                        </form>
                                        </div>
                                    </td>
                                </tr>
                            @empty
                                <td colspan="11">Tidak ada data...</td>
                            @endforelse
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
@endsection
