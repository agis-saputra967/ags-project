@extends('layouts.app')

@section('content')
<div class="container">
    <h1>Dashboard - Semua File di Project</h1>
    <ul>
        @foreach ($files as $file)
            <li>
                @if ($file['is_dir'])
                    <strong>[Folder]</strong> {{ $file['name'] }}
                @else
                    {{ $file['name'] }}
                @endif
            </li>
        @endforeach
    </ul>
</div>
@endsection
