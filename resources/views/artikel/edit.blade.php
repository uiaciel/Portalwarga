@extends('layouts.master')

@section('content')
<div class="main-card mb-3 card">
    <div class="card-body">
        <h5 class="card-title">Edit Artikel</h5>
        <form class="">
            <div class="position-relative row form-group">
                <label for="judul" class="col-sm-2 col-form-label">Judul</label>
                <div class="col-sm-10">
                    <input name="judul" id="judul" placeholder="Isi judul disini" type="text"
                        class="form-control"></div>
            </div>
            <div class="position-relative row form-group">
                <label for="slug" class="col-sm-2 col-form-label">slug</label>
                <div class="col-sm-10">
                    <input name="slug" id="slug" placeholder="terisi otomatis" type="text"
                        class="form-control" disable></div>
            </div>
            <div class="position-relative row form-group">
                <label for="kategori" class="col-sm-2 col-form-label">Pilih Kategori</label>
                <div class="col-sm-10">
                    <select name="kategori" id="kategori" class="form-control"></select>
                </div>
            </div>
            <div class="position-relative row form-group">
                <label for="tags" class="col-sm-2 col-form-label">Pilih Tag</label>
                <div class="col-sm-10">
                    <select multiple="" name="tags" id="tags" class="form-control"></select>
                </div>
            </div>
            <div class="position-relative row form-group">
                <label for="exampleText" class="col-sm-2 col-form-label">Detail</label>
                <div class="col-sm-10">
                    <textarea name="text" id="editor" class="form-control"></textarea>
                </div>
            </div>
            <div class="position-relative row form-group">
                <label for="exampleFile" class="col-sm-2 col-form-label">Gambar</label>
                <div class="col-sm-10">
                    <input name="file" id="exampleFile" type="file" class="form-control-file">
                    <small class="form-text text-muted">upload gambar max 3 mb</small>
                </div>
            </div>
            <fieldset class="position-relative row form-group">
                <legend class="col-form-label col-sm-2">Publikasi</legend>
                <div class="col-sm-10">
                    <div class="position-relative form-check">
                        <label class="form-check-label">
                            <input name="radio2" type="radio" class="form-check-input">
                            Publikasikan</label>
                    </div>
                    <div class="position-relative form-check">
                        <label class="form-check-label">
                            <input name="radio2" type="radio" class="form-check-input">
                            Simpan sebagai Draf</label>
                    </div>
            </fieldset>

            <div class="position-relative row form-check">
                <div class="col-sm-12">
                    <button class="btn btn-secondary btn-block">Update</button>
                </div>
            </div>
        </form>
    </div>
</div>
@endsection
