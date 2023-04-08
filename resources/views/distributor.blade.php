@extends('layouts.app')

@section('content')
<div class="">
    <div class="card">
        <div class="card-body">
            <div class="mt-4">
                <form method="post" action="{{route('addDistributor')}}">
                    @csrf
                    <label for="">Kode</label>
                    <input type="text" placeholder="Kode_Suplier" class="form-control" name="kd" id="">

                    <div class="mt-4">
                        <label for="">Nama</label>
                        <input type="text" placeholder="Nama Suplier" class="form-control" name="Nama_Suplier" id="">
                    </div>
                    <div class="mt-4">
                        <label for="">Alamat</label>
                        <textarea name="alamat" id="" cols="10" rows="5" class="form-control"></textarea>
                    </div>
                    <div class="mt-4">
                        <label for="">Kota</label>
                        <input type="text" value="" placeholder="Kota_Suplier" class="form-control" name="Kota_Suplier"
                            id="">
                    </div>
                    <div class="mt-4">
                        <label for="">Provinsi</label>
                        <input type="text" value="" placeholder="Provinsi_Suplier" class="form-control"
                            name="Provinsi_Suplier" id="">
                    </div>
                    <div class="mt-4">
                        <label for="">Kode POS</label>
                        <input type="text" value="" placeholder="Kode_POS_Suplier" class="form-control"
                            name="Kode_POS_Suplier" id="">
                    </div>
                    <div class="mt-4">
                        <label for="">Email</label>
                        <input type="text" value="" placeholder="Email_Suplier" class="form-control"
                            name="Email_Suplier" id="">
                    </div>
                    <div class="mt-4">
                        <label for="">No. HP</label>
                        <input type="text" value="" placeholder="No_HP_Suplier" class="form-control"
                            name="No_HP_Suplier" id="">
                    </div>
                    <div class="mt-4">
                        <label for="">NPWP</label>
                        <input type="text" value="" placeholder="NPWP_Suplier" class="form-control" name="NPWP_Suplier"
                            id="">
                    </div>

                    <input type="hidden" name="petugas" value="Masih Kosong">

                    <button type="submit" class="btn btn-success float-right mt-3">Simpan</button>
                </form>
            </div>
        </div>
    </div>
    <br>
    <hr>

    <table class="table table-stripped table-bordered">
        <thead>
            <tr>
                <th>kd distri</th>
                <th>Nama</th>
                <th>alamat</th>
                <th>Kota</th>
                <th>Provinsi</th>
                <th>Kode POS</th>
                <th>Email</th>
                <th>No.HP</th>
                <th>NPWP</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($data as $x)
            <tr>
                <td>{{$x->Kode_Suplier}}</td>
                <td>{{$x->Nama_Suplier}}</td>
                <td>{{$x->alamat}}</td>
                <td>{{$x->Kota_Suplier}}</td>
                <td>{{$x->Provinis_Suplier}}</td>
                <td>{{$x->Kode_POS_Suplier}}</td>
                <td>{{$x->Email_Suplier}}</td>
                <td>{{$x->No_HP_Suplier}}</td>
                <td>{{$x->NPWP_Suplier}}</td>
            </tr>
            @endforeach
        </tbody>
    </table>
    <div class="float-right">
        {!! $data->links() !!}
    </div>
</div>

</div>
@endsection