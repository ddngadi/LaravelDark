@extends('layouts.layouts')

@section('sidebar')
    <li class="sidebar-item"><a class="sidebar-link" href="{{ route('dashboard.index') }}"> 
        <svg class="svg-icon svg-icon-sm svg-icon-heavy">
            <use xlink:href="#real-estate-1"> </use>
        </svg><span>Home </span></a></li>
    <li class="sidebar-item"><a class="sidebar-link" href="{{ route('barang.index') }}"> 
        <svg class="svg-icon svg-icon-sm svg-icon-heavy">
            <use xlink:href="#survey-1"> </use>
        </svg><span>Barang </span></a></li>
    <li class="sidebar-item active"><a class="sidebar-link" href="#exampledropdownDropdown" data-bs-toggle="collapse"> 
        <svg class="svg-icon svg-icon-sm svg-icon-heavy">
            <use xlink:href="#browser-window-1"> </use>
        </svg><span>Management Barang </span></a>
    <ul class="collapse list-unstyled " id="exampledropdownDropdown">
        <li><a class="sidebar-link" href="{{ route('barangmasuk.index') }}">Barang Masuk</a></li>
        <li><a class="sidebar-link" href="{{ route('barangkeluar.index') }}">Barang Keluar</a></li>
    </ul>
    </li>
    <li class="sidebar-item"><a class="sidebar-link" href="login.html"> 
        <svg class="svg-icon svg-icon-sm svg-icon-heavy">
            <use xlink:href="#disable-1"> </use>
        </svg><span>Login page </span></a></li>
    </ul><span class="text-uppercase text-gray-600 text-xs mx-3 px-2 heading mb-2">Administrator</span>
        <ul class="list-unstyled">
            <li class="sidebar-item"><a class="sidebar-link" href="{{ route('kategori.index') }}"> 
                <svg class="svg-icon svg-icon-sm svg-icon-heavy">
                    <use xlink:href="#imac-screen-1"> </use>
                </svg><span>Kategori </span></a></li>
@endsection

@section('content')
<div class="bg-dash-dark-2 py-4">
    <div class="container-fluid">
        <h2 class="h5 mb-0">Create Barang Masuk</h2>
    </div>
</div>
</br>

    <div class="container-fluid">
        <form method="POST" action="{{ route('barangmasuk.store') }}">
            @csrf

            <div class="form-group">
                <label for="tgl_masuk">Tanggal Masuk:</label>
                <input type="date" name="tgl_masuk" id="tgl_masuk" class="form-control text-gray-100" required>
            </div>

            <div class="form-group">
                <label for="qty_masuk">Jumlah Masuk:</label>
                <input type="number" name="qty_masuk" id="qty_masuk" class="form-control text-gray-100" required>
            </div>

            <div class="form-group">
                <label for="barang_id">Barang:</label>
                <select name="barang_id" id="barang_id" class="form-control text-gray-100" required>
                    @foreach ($barangs as $barang)
                        <option value="{{ $barang->id }}">{{ $barang->merk }} - {{ $barang->seri }}</option>
                    @endforeach
                </select>
            </div>
</br>
            <a href="{{ route('barangmasuk.index') }}" class="btn btn-secondary">Cancel</a>
            <button type="submit" class="btn btn-primary">Add</button>
        </form>
        </div>
    </div>
</div>
</div>
</div>
@endsection
