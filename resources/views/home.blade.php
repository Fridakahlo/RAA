@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">RAA</div>

                <div class="card-body">
                    @if (session('status'))
                        <div class="alert alert-success">
                            {{ session('status') }}
                        </div>
                    @endif
                </div>

                <div class="card-body">
                    <div class="row">
                        <ul class="col-md-3">
                            <h1>Agents</h1>
                            @foreach($agents as $agent)
                            <li>{{$agent->agent}}
                            @endforeach
                        </ul>
                    </div>
                </div>

                

            </div>
        </div>
    </div>
</div>
@endsection
