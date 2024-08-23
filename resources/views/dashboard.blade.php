@extends('layout.main')

@section('halaman')
<h1>Ini Adalah Halaman Dashboard</h1>
@endsection

@push('css')
    <style>
        .warna{
            color:aqua
        }
    </style>
@endpush


@section('depan')
<p class="warna">Lorem ipsum dolor sit amet consectetur, adipisicing elit. Distinctio ab vel voluptas temporibus cumque! Quibusdam libero, beatae veritatis perferendis, ab quia sapiente consectetur sed distinctio adipisci earum fuga amet molestias.</p>
@endsection