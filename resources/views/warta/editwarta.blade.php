@extends('layout.admin')

@section('content')
    

<div class="container">
    <a href="{{url('/admin/warta')}}" class="btn btn-success m-2">back</a>
    <div class="row m-1">
        <div class="col">
            <form action="{{ url('/admin/updatewarta/'.$warta->id)}}" method="post" enctype="multipart/form-data">
                @csrf
                <div class="form-group">
                    <label for="nama">Judul</label>
                    <input name="judul" type="text" class="form-control @error('judul') is-invalid @enderror" id="judul" placeholder="judul" value="{{ $warta->judul }}">
                    @error('judul')
                    <div class="alert alert-danger">{{ $message }}</div>
                    @enderror
                </div>
                <div class="form-group">
                    <label for="keterangan">Keterangan</label>
                    <textarea name="keterangan" class="form-control @error('keterangan') is-invalid @enderror" id="keterangan" rows="3">{{ $warta->keterangan }}</textarea>
                    @error('keterangan')
                    <div class="alert alert-danger">{{ $message }}</div>
                    @enderror
                </div>
                <div class="form-group">
                    <label for="stok">Tanggal</label>
                    <input name="tanggal" type="date" class="form-control @error('tanggal') is-invalid @enderror" id="tanggal" value="{{ $warta->tanggal }}">
                    @error('tanggal')
                    <div class="alert alert-danger">{{ $message }}</div>
                    @enderror
                </div>
                <div class="form-group">
                    <label for="photo">Photo</label>
                    <input name="photo" type="file" class="form-control @error('photo') is-invalid @enderror" id="photo" value="{{ $warta->photo }}">
                    @error('photo')
                    <div class="alert alert-danger">{{ $message }}</div>
                    @enderror
                </div>
                <button class="btn btn-primary" type="submit">Update warta</button>
            </form>
        </div>
    </div>
</div>
@endsection