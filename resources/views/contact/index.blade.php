<!-- resources/views/contact/index.blade.php -->
@include('components.header')
@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="card">
            <div class="card-header">
                <h2>Contact Us</h2>
            </div>
            <div class="card-body">
                <form action="{{ route('contact.submit') }}" method="post">
                    @csrf

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
        /* Style for the card container */
.container {
    margin-top: 50px;
}

/* Style for the form */
.card {
    max-width: 500px;
    margin: auto;
}

/* Style for form labels */
.form-label {
    font-weight: bold;
}

/* Style for form input and textarea */
.form-control {
    width: 100%;
    padding: 10px;
    margin-bottom: 15px;
    box-sizing: border-box;
}

/* Style for the submit button */
.btn-primary {
    background-color: #007bff;
    color: #fff;
    padding: 10px 20px;
    border: none;
    cursor: pointer;
}

/* Style for the submit button on hover */
.btn-primary:hover {
    background-color: #0056b3;
}
    </style>
    @include('components.footer')
@endsection
