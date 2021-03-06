@extends('layouts.master')

@section('title')
    Account
@endsection

@section('content')
    <section class="row new-post">
        <div class="col-md-6 col-md-offset-3">
            <header><h3>Your Account</h3></header>
            <form action="{{ route('account.save') }}" method="post" enctype="multipart/form-data">
                <div class="form-group">
                    <label for="first_name">First Name</label>
                    <input type="text" name="first_name" class="form-control" value="{{ $user->first_name }}" id="first_name">
                </div>
                <div class="form-group">
                    <label for="image">Image (only .jpg)</label>
                    <input type="file" name="image" id="image" class="form-control">
                </div>
                <button type="submit" class="btn btn-primary">Save Account</button>
                <input type="hidden" value="{{ csrf_token() }}" name="_token">
            </form>
        </div>
    </section>
    @if(Storage::disk('local')->has($user->first_name.'_'.$user->id.'.jpg'))
        <section class="row new-post">
            <div class="col-md-6 col-md-offset-3">
                <image src="{{ route('account.image', ['filename' => $user->first_name.'_'.$user->id.'.jpg']) }}" alt="user pic" class="img-responsive"></image>
            </div>
        </section>
    @endif
@endsection