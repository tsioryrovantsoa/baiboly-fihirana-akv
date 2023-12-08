@extends('admin.layout.layout')

@section('title', 'Backup')

@section('content')
    <div class="card">
        <div class="card-header">
            <h3 class="card-title">Backup</h3>
            <div class="card-actions">
                <a href="{{ route('admin.export') }}" class="btn btn-success">
                    <!-- Download SVG icon from http://tabler-icons.io/i/plus -->
                    <svg xmlns="http://www.w3.org/2000/svg" class="icon icon-tabler icon-tabler-file-export" width="24"
                        height="24" viewBox="0 0 24 24" stroke-width="2" stroke="currentColor" fill="none"
                        stroke-linecap="round" stroke-linejoin="round">
                        <path stroke="none" d="M0 0h24v24H0z" fill="none" />
                        <path d="M14 3v4a1 1 0 0 0 1 1h4" />
                        <path d="M11.5 21h-4.5a2 2 0 0 1 -2 -2v-14a2 2 0 0 1 2 -2h7l5 5v5m-5 6h7m-3 -3l3 3l-3 3" />
                    </svg>
                    Sauvegarde
                </a>
            </div>
        </div>
        <div class="card-body">
            <div class="table-responsive">
                <table class="table table-vcenter card-table table-striped">
                    <thead>
                        <tr>
                            <th>Fichier</th>
                            <th></th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach ($files as $file)
                            <tr>
                                <td>
                                    {{ $file ?? '-' }}
                                </td>
                                <td>
                                    <a href="{{ asset('storage/Laravel/' . basename($file)) }}" download
                                        class="btn btn-primary">
                                        Télécharger
                                    </a>
                                </td>
                            </tr>
                        @endforeach
                    </tbody>
                </table>
            </div>
        </div>
    </div>

@endsection
