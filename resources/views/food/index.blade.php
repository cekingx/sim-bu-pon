@extends('welcome')

@section('title', 'SIM Bu Pon')

@section('content')
    <h1 class="">Daftar Menu Buk Pon</h1>
    <table class="col-12 ">
        <tr>
            <th>Menu</th>
            <th>Harga</th>
        </tr>
        @foreach ($foods as $food)
            <tr>
                <td>{{$food->menu}}</td>
                <td>{{$food->harga}}</td>
            </tr>
        @endforeach
    </table>
@endsection