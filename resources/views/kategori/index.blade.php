@extends('layouts.master')

@section('content')
<div class="main-card mb-3 card">
    <div class="card-body">
        <h5 class="card-title">Kategori</h5>
        <form class="form-inline left">
            <div class="position-relative form-group">
                
            <label for="exampleEmail22" class="mr-sm-2">Kategori Baru</label>
                    <input name="kategori" id="examplePassword44"
                    type="text" class="mr-2 form-control">
            </div>
            <button class="btn btn-primary">Tambah</button>
        </form>
        <hr/>
        <table class="mb-0 table table-striped">
            <thead>
                <tr>
                    <th>#</th>
                    <th>Nama Kategori</th>
                    <th>Slug</th>
                    <th>Status</th>
                    <th>Aksi</th>
                </tr>
            </thead>
            <tbody>
                <tr>
                    <th scope="row">1</th>
                    <td>Sejarah</td>
                    <td>/sejarah</td>
                    <td><span class="badge badge-success">6 artikel</span></td>
                    <td><button class="mb-2 mr-2 btn btn-primary">Edit</button></td>
                </tr>

            </tbody>
        </table>
    </div>
</div>
<div class="main-card mb-3 card">
    <div class="card-body">
        <h5 class="card-title">Tags</h5>
        <form class="form-inline left">
            <div class="position-relative form-group">
                
            <label for="exampleEmail22" class="mr-sm-2">Tags Baru</label>
                    <input name="kategori" id="examplePassword44"
                    type="text" class="mr-2 form-control">
            </div>
            <button class="btn btn-primary">Tambah</button>
        </form>
        <hr/>
        <table class="mb-0 table table-striped">
            <thead>
                <tr>
                    <th>#</th>
                    <th>Nama Tags</th>
                    <th>Slug</th>
                  
                    <th>Aksi</th>
                </tr>
            </thead>
            <tbody>
                <tr>
                    <th scope="row">1</th>
                    <td>infowarga</td>
                    <td>/infowarga</td>
                    
                    <td><button class="mb-2 mr-2 btn btn-primary">Edit</button></td>
                </tr>

            </tbody>
        </table>
    </div>
</div>
@endsection
