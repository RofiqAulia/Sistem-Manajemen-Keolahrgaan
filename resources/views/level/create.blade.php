@extends('layouts.template')

@section('content')
<div class="card card-outline card-primary">
    <div class="card-header">
        <h3 class="card-title">{{ $page->title }}</h3>
        <div class="card-tools">    
            <a class="btn btn-sm btn-default ml-1" href="{{ url('level') }}"><i class="fas fa-arrow-left mr-2"></i> Kembali</a>
        </div>
    </div>
    <div class="card-body">
        <form method="POST" action="{{ url('level') }}" class="form-horizontal">
            @csrf
            <div class="form-group row">
                <label class="col-2 control-label col-form-label">Kode Level</label>
                <div class="col-10">
                    <input type="text" class="form-control" id="kode_level" name="kode_level" value="{{ old('kode') }}" placeholder="EXMPL" required>
                    @error('kode_level')
                        <small class="form-text text-danger">{{ $message }}</small>
                    @else
                        <small class="form-text form-muted">Kode level harus unik dan terisi, minimal panjang 2 karakter, maksimal panjang 5 karakter.</small>
                    @enderror
                </div>
            </div>
            <div class="form-group row">
                <label class="col-2 control-label col-form-label">Level Nama</label>
                <div class="col-10">
                    <input type="text" class="form-control" id="nama" name="nama" value="{{ old('nama') }}" placeholder="Example"  required>
                    @error('nama')
                        <small class="form-text text-danger">{{ $message }}</small>
                    @else
                        <small class="form-text form-muted">Nama level terisi, maksimal panjang 100 karakter.</small>
                    @enderror
                </div>
            </div>
            <div class="form-group row">
                <label class="col-2 control-label col-form-label"></label>
                <div class="col-10">
                    <button type="submit" class="btn btn-success btn-sm"><i class="fa-solid fa-check"></i>  Simpan</button>
                    <a class="btn btn-sm btn-danger ml-1" href="{{ url('level') }}"><i class="fa-solid fa-xmark"></i>  Batal</a>
                </div>
            </div>
        </form>
    </div>
</div>
@endsection

@push('css')
@endpush

@push('js')
@endpush