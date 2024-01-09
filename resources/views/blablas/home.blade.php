@extends('layouts.app')
@section('content')
    <div class="container-fluid">
        <div class="row">
            <a href="route{{ 'todo' }}" class="btn btn-info">Back</a>
            <div class="col-3 bg-dark p-3 rounded">
                @if (session('data'))
                    <form action="{{ route('todo.update') }}" method="post">
                        @csrf
                        <label for="title" class="form-label text-warning mb-3 mt-3">Note Title</label>
                        <input type="text" name="title" placeholder="Enter Title"
                            class="form-control @error('title') is-invalid
                    @enderror"
                            value="{{ $data->title }}">
                        @error('title')
                            <div class="text-danger">{{ $message }}</div>
                        @enderror
                        <label for="description" class="form-label text-warning mb-3 mt-3">Note Description</label>
                        <textarea name="description" cols="20"
                            class="form-control @error('description') is-invalid
                    @enderror" rows="5"
                            placeholder="Enter Description">{{ $data->description }}</textarea>
                        @error('description')
                            <div class="text-danger">{{ $message }}</div>
                        @enderror
                        <label for="importantlv" class="form-label text-warning mb-3 mt-3">Important Level</label>
                        <input type="number" name="importantlv" placeholder="Enter Emportant Level"
                            class="form-control @error('importantlv') is-invalid
                    @enderror"
                            value="{{ $data->importantlv }}">
                        @error('importantlv')
                            <div class="text-danger">{{ $message }}</div>
                        @enderror
                        <label for="category" class="form-label text-warning mb-3 mt-3">Note Category</label>
                        <input type="text" name="category" placeholder="Enter Category"
                            class="form-control @error('category') is-invalid
                    @enderror"
                            value="{{ $data->category }}">
                        @error('category')
                            <div class="text-danger">{{ $message }}</div>
                        @enderror
                        <button class="btn mt-3 btn-outline-success">Submit</button>
                    </form>
                @endif
                @if (!session('data'))
                    <form action="{{ route('todo.store') }}" method="post">
                        @csrf
                        <label for="title" class="form-label text-warning mb-3 mt-3">Note Title</label>
                        <input type="text" name="title" placeholder="Enter Title"
                            class="form-control @error('title') is-invalid
                    @enderror"
                            value="{{ old('title') }}">
                        @error('title')
                            <div class="text-danger">{{ $message }}</div>
                        @enderror
                        <label for="description" class="form-label text-warning mb-3 mt-3">Note Description</label>
                        <textarea name="description" cols="20"
                            class="form-control @error('description') is-invalid
                    @enderror" rows="5"
                            placeholder="Enter Description">{{ old('description') }}</textarea>
                        @error('description')
                            <div class="text-danger">{{ $message }}</div>
                        @enderror
                        <label for="importantlv" class="form-label text-warning mb-3 mt-3">Important Level</label>
                        <input type="number" name="importantlv" placeholder="Enter Emportant Level"
                            class="form-control @error('importantlv') is-invalid
                    @enderror"
                            value="{{ old('important') }}">
                        @error('importantlv')
                            <div class="text-danger">{{ $message }}</div>
                        @enderror
                        <label for="category" class="form-label text-warning mb-3 mt-3">Note Category</label>
                        <input type="text" name="category" placeholder="Enter Category"
                            class="form-control @error('category') is-invalid
                    @enderror"
                            value="{{ old('category') }}">
                        @error('category')
                            <div class="text-danger">{{ $message }}</div>
                        @enderror
                        <button class="btn mt-3 btn-outline-success">Submit</button>
                    </form>
                @endif
            </div>
            <div class="col-4 bg-warning p-3 rounded">
                @foreach ($todos as $todo)
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
                        <div class="button-group m-2 d-flex justify-content-between">
                            <a href="{{ route('todo.show', $todo->id) }}" class="btn btn-info">See Detail</a>
                            <a href="{{ route('todo.edit', $todo->id) }}" class="btn btn-info">Edit</a>
                            <form action="{{ route('todo.destroy', $todo->id) }}" method="post">
                                @method('delete')
                                @csrf
                                <button class="btn btn-danger">Delete</button>
                            </form>
                        </div>
                    </div>
                @endforeach
            </div>
            {{-- @if (session('todo'))
                {
                <div class="col-5">
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
                }
            @endif --}}
        </div>
    </div>
@stop
