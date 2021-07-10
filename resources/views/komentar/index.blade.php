@extends('layouts.master')

@section('content')
<div class="main-card mb-3 card">
    <div class="card-body">
        <h5 class="card-title">Komentar</h5>
        
        <hr/>
        <table class="mb-0 table table-striped">
            <thead>
                <tr>
                    <th>#</th>
                    <th>Artikel</th>
                    <th>Komentar</th>
                    <th>Status</th>
                    <th>Aksi</th>
                </tr>
            </thead>
            <tbody>
                <tr>
                    <th scope="row">1</th>
                    <td><h5>Tips agar rumah terlihat bersih dan rapi<small>oleh Surya<small></h5></td>
                    <td>Wah keren banget tips nya, jadi mau coba nih</td>
                    <td><span class="badge badge-success">Pendding</span></td>
                    <td><button class="mb-2 mr-2 btn btn-primary">disetujui</button></td>
                </tr>

            </tbody>
        </table>
    </div>
</div>

@endsection
