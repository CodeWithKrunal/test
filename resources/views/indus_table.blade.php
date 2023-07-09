@extends('layouts.app')
@section('content')
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <a href="{{ route("indus.create") }}">
                    Add Indus
                </a>
            </div>

            @if( session()->has('status') )
                <div class="errormessage alert alert-{{ session()->get('status') === 'success' ? 'primary' : 'danger' }}">
                    {{ session()->get('message') }}
                </div>
            @endif


            <div class="card">
                <div class="card-header">Yajara DataTables</div>
                <div class="card-body">
                    {{ $dataTable->table() }}
                </div>
            </div>


        </div>
    </div>
    @push('scripts')
    {{ $dataTable->scripts(attributes: ['type' => 'module']) }}
@endpush
@endsection

