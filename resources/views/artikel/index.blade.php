@extends('layouts.master')

@section('content')
<div class="main-card mb-3 card">
    <div class="card-body">
        <h5 class="card-title">List Artikel</h5>

        <table class="mb-0 table table-striped">
            <thead>
                <tr>
                    <th>#</th>
                    <th>Pengirim</th>
                    <th>Artikel</th>
                    <th>Status</th>
                    <th>Aksi</th>
                </tr>
            </thead>
            <tbody>
                <tr>
                    <th scope="row">1</th>
                    <td><h5>Surya</h5> <p>3 menit lalu</p></td>
                    <td><h5>Tips agar rumah terlihat bersih dan rapi</h5><p>Halo semuanya, kali ini kita akan membahas....</p></td>
                    <td><div class="mb-2 mr-2 badge badge-primary">Terpublish</div><div class="mb-2 mr-2 badge badge-success">Headline</div></td>
                    <td><button class="mb-2 mr-2 btn btn-primary">Edit</button></td>
                </tr>
                
            </tbody>
        </table>
    </div>
</div>
@endsection
