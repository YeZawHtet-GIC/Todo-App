@extends('layouts.app')
@section('content')
    <div class="container-fluid">
        <div class="row">
            <a href="route{{ 'todo' }}" class="btn btn-info">Back</a>
            <div class="col-3 bg-dark p-3 rounded">
                <form action="{{ route('todo.update', $todo->id) }}" method="post">
                    @method('patch')
                    @csrf
                    <label for="title" class="form-label text-warning mb-3 mt-3">Note Title</label>
                    <input type="text" name="title" placeholder="Enter Title"
                        class="form-control @error('title') is-invalid
                    @enderror"
                        value="{{ $todo->title }}">
                    @error('title')
                        <div class="text-danger">{{ $message }}</div>
                    @enderror
                    <label for="description" class="form-label text-warning mb-3 mt-3">Note Description</label>
                    <textarea name="description" cols="20"
                        class="form-control @error('description') is-invalid
                    @enderror" rows="5"
                        placeholder="Enter Description">{{ $todo->description }}</textarea>
                    @error('description')
                        <div class="text-danger">{{ $message }}</div>
                    @enderror
                    <label for="importantlv" class="form-label text-warning mb-3 mt-3">Important Level</label>
                    <input type="number" name="importantlv" placeholder="Enter Emportant Level"
                        class="form-control @error('importantlv') is-invalid
                    @enderror"
                        value="{{ $todo->importantlv }}">
                    @error('importantlv')
                        <div class="text-danger">{{ $message }}</div>
                    @enderror
                    <label for="category" class="form-label text-warning mb-3 mt-3">Note Category</label>
                    <input type="text" name="category" placeholder="Enter Category"
                        class="form-control @error('category') is-invalid
                    @enderror"
                        value="{{ $todo->category }}">
                    @error('category')
                        <div class="text-danger">{{ $message }}</div>
                    @enderror
                    <button class="btn mt-3 btn-outline-success">Update</button>
                </form>
            </div>
        </div>
    @stop
