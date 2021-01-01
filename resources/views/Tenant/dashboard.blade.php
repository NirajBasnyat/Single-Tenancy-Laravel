@extends('layouts.app')

@section('content')

    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-8">
                <div class="card">

                    <div class="card-header">X Dashboard</div>
                    <div class="card-body">

                        @foreach ($projects as $project)
                            <a href="{{route('project.show',$project)}}"
                               class="list-group-item text-decoration-none text-success">
                                {{ $project->name }}
                            </a>
                        @endforeach

                        @include('Tenant.Projects._form')

                    </div>
                </div>

            </div>
        </div>
    </div>

@endsection
