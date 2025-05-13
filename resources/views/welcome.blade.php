@extends('layouts.main')

@section('title', 'Home')
@section('h1', 'Clean Blog')
@section('p', 'A Blog Theme By Start Bootstrap')


@section('content')
<div class="py-3 my">
    <div class="py-4 border-bottom border-gray">
        <h2><b>Lorem ipsum</b></h2>
        <p class="fs-5">Lorem ipsum dolor sit amet consectetur adipisicing elit. Fugiat mollitia aliquid distinctio eius eaque.</p>
        <i><small>Posted by <b>John Doe</b></small></i>
    </div>
    <div class="py-4 border-bottom border-gray">
        <h2><b> Lorem ipsum 2</b>
        </h2>
        <i><small>Posted by <b>John Doe</b> in another boring news</small></i>
    </div>
    <div class="py-4 border-bottom border-gray">
        <h2><b>Lorem ipsum 3</b></h2>
        <p class="fs-5">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Doloremque, maxime dolor, eos accusantium fuga officia beatae ratione consequuntur esse nam provident ut sint blanditiis ullam cum perspiciatis quisquam tempora repellat quidem voluptas quibusdam. Fugiat doloremque nam optio facere provident similique ducimus expedita voluptas vero esse?</p>
        <i><small>Posted by <b>Jane Doe</b></small></i>
    </div>
    <div class="py-4 border-bottom border-gray">
        <h2><b>Lorem ipsum 4</b></h2>
        <p class="fs-5">Lorem ipsum dolor sit amet consectetur adipisicing elit. Ipsam, laudantium!</p>
        <i><small>Posted by <b>Missy Doe</b></small></i>
    </div>
    <div class="text-end">
        <a class="btn btn-info mt-3 mb-4 text-white" href="#">Older Posts -></a>
    </div>
</div>
@endsection