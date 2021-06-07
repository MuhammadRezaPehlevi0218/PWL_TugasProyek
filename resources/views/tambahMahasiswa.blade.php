@extends('adminlte::page')

@section('title', 'Tambah Mahasiswa')
@section('content')
<h1>Tambah Mahasiswa</h1>
<div class="row">
    <!-- left column -->
    <div class="col-md-12">
        <!-- general form elements -->
        <div class="box box-primary">
            <!-- /.box-header -->
            @if ($errors->any())
            <div class="alert alert-danger">
                <strong>Whoops!</strong> There were some problems with your input.<br><br>
                <ul>
                    @foreach ($errors->all() as $error)
                    <li>{{ $error }}</li>
                    @endforeach
                </ul>
            </div>
            @endif
            <!-- form start -->
            <form method="post" action="{{ route('mahasiswa.store') }}" id="myForm">
                <div class="box-body">
                    @csrf
                    <div class="form-group">
                        <label for="Nim">Nim</label>
                        <input type="text" name="Nim" class="form-control" id="Nim" required>
                    </div>
                    <div class="form-group">
                        <label>Nama</label>
                        <input type="text" name="Nama" class="form-control" id="Nama" required>
                    </div>
                    <div class="form-group">
                        <label>Kelas</label>
                        <select class="form-control" name="kelas" >
                            <option value="">- Pilih Kelas -</option>
                            <option value="Pagi">Pagi</option>
                            <option value="Siang">Siang</option>
                            <option value="Malam">Malam</option>
                            <option value="Karyawan">Karyawan</option>
                        </select>
                    </div>
                    <div class="form-group">
                        <label>Jurusan</label>
                        <select class="form-control" name="jurusan">
                            <option value="">- Pilih Jurusan -</option>
                            <option value="Manajemen Informatika">Manajemen Informatika</option>
                            <option value="Sistem Informasi">Sistem Informasi</option>
                            <option value="Teknik Informatika">Teknik Informatika</option>
                            <option value="Sistem Komputer">Sistem Komputer</option>
                            <option value="Akutansi">Akutansi</option>
                        </select>
                    </div>
                </div>
                <!-- /.box-body -->
                <div class="box-footer">
                    <button type="submit" class="btn btn-primary" title="Simpan Data"> <i class="glyphicon glyphicon-floppy-disk"></i> Simpan</button>
                </div>
            </form>
        </div>
        <!-- /.box -->
    </div>
</div>

@stop