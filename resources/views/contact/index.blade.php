<!-- resources/views/contact/index.blade.php -->
@extends('layouts.app-layout')
@include('components.header')
@section('content')
    <div class="container">
        <div class="card">
            <div class="card-header">
                <h2>Contact Us</h2>
            </div>
            <div class="card-body">
                <form action="{{ route('contact.submit') }}" method="post">
                    @csrf
                    @if(session('success'))
                    <script>
                        alert('we nemen contact met uw zo snel mogelijk', 'Message sent successfully!');
                    </script>
                @endif
                    <div class="mb-3">
                        <label for="name" class="form-label">Name:</label>
                        <input type="text" name="name" id="name" class="form-control" required>
                    </div>

                    <div class="mb-3">
                        <label for="email" class="form-label">Email:</label>
                        <input type="email" name="email" id="email" class="form-control" required>
                    </div>

                    <div class="mb-3">
                        <label for="message" class="form-label">Message:</label>
                        <textarea name="message" id="message" class="form-control" rows="5" required></textarea>
                    </div>

                    <button type="submit" class="btn btn-primary">Submit</button>
                </form>
            </div>
        </div>
    </div>
    <style>
.container {
    margin-top: 50px;
}

.card {
    max-width: 500px;
    margin: auto;
}

.form-label {
    font-weight: bold;
}


.form-control {
    width: 100%;
    padding: 10px;
    margin-bottom: 15px;
    box-sizing: border-box;
}


.btn-primary {
    background-color: #007bff;
    color: #fff;
    padding: 10px 20px;
    border: none;
    cursor: pointer;
}

.btn-primary:hover {
    background-color: #0056b3;
}
    </style>
    @include('components.footer')
@endsection
