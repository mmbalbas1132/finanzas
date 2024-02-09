{{-- resources/views/categories/manage.blade.php --}}
@extends('layouts.app')

@section('content')
    <div class="container">
        <h1>Gestión de Categorías</h1>
        @livewire('category-manager')
    </div>
@endsection
