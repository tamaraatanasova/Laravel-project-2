@extends('layouts.main')

@section('title', 'Contact')

@section('h1', 'Contact me')
@section('p', 'Have questions? I have answers!')


@section('content')
    <form class="p-4" action="#">
        <div class="mb-3">
            <label for="name" class="form-label text-secondary">Name</label>
            <input type="text" class="form-control " id="name">
        </div>
        <div class="mb-3">
            <label for="email" class="form-label text-secondary">Email address</label>
            <input type="email" class="form-control" id="email" aria-describedby="emailHelp">
        </div>
        <div class="mb-3">
            <label for="phone" class="form-label text-secondary">Phone Number</label>
            <input type="tel" class="form-control" id="phone">
        </div>
        <div class="mb-3">
            <label for="message" class="form-label text-secondary">Message</label>
            <textarea class="form-control" id="message" rows="4"></textarea>
        </div>
        <button type="submit" class="btn btn-info text-white ">SEND</button>
    </form>
@endsection
