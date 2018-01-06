@extends('layouts.admin')

@section('content')
<div class="main-content">
  <div class="row">
    <h4>Tambah Barang</h4>
    <form id="barang-form" class="col s12">
      {{ csrf_field() }}
      <div class="row">
        <div class="input-field col s12 m6">
          <input id="nama_barang" name="nama_barang" type="text" class="validate">
          <label for="nama_barang">Nama Barang</label>
        </div>  
        <div class="input-field col s12 m6">
          <select multiple>
            <option value="" disabled selected>Kategori</option>
            @foreach($kategori as $opt)
              <option value="{{ $opt->nama_kategori }}">{{ $opt->nama_kategori }}</option>
            @endforeach
          </select>
          <!-- <label>Kategori</label> -->
        </div>
      </div>
      <div class="row">
        <div class="input-field col s12 m6">
          <input id="kode_produksi" name="kode_produksi" type="text" class="validate">
          <label for="kode_produksi">Kode Produksi</label>
        </div>
        <div class="input-field col s12 m6">
          <input id="harga" name="harga" type="text" class="validate">
          <label for="harga">Harga</label>
        </div>
      </div>
      <div class="row">
        <div class="file-field input-field">
          <div class="btn">
            <span>File</span>
            <input id="image_file" name="image_file" type="file">
          </div>
          <div class="file-path-wrapper">
            <input class="file-path validate" type="text">
          </div>
        </div>
      </div>
      <div class="row">
        <div class="input-field col s12">
          <textarea id="deskripsi" name="deskripsi" class="materialize-textarea"></textarea>
          <label for="deskripsi">Deskripsi</label>
        </div>
      </div>
      <button class="waves-effect waves-light btn">Submit</button>
    </form>
  </div>
</div>
@endsection