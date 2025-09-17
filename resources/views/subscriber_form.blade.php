
@extends('layouts.app')

@section('content')
<div class="container" style="max-width:480px">
    <h1>Subscribe to new items</h1>

    @if(session('status'))
        <div class="alert alert-success">{{ session('status') }}</div>
    @endif

    <form method="POST" action="{{ route('subscribe.store') }}">
        @csrf
        <div class="mb-3">
            <label for="email" class="form-label">Your email</label>
            <input id="email" name="email" type="email" class="form-control" required>
            @error('email') <div class="text-danger">{{ $message }}</div> @enderror
        </div>
        <button class="btn btn-primary">Subscribe</button>
    </form>
</div>
@endsection
