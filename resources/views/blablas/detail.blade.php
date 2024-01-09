@extends('layouts.app')
@section('content')
    <div class="container-fluid">
        <div class="row">
                <div class="col-6">
                    <div class="card bg-dark text-warning mb-3">
                        <h3 class="card-title">{{ $todo->title }}</h3>
                        <div class="card-body">
                            <span class="text-success">
                                Note Category -> {{ $todo->category }}
                            </span>
                            <p>
                                {{ $todo->description }}
                            </p>
                            <span class="text-danger">Important Level -> {{ $todo->importantlv }}</span>
                        </div>
                    </div>
                </div>
        </div>
    </div>
@stop
