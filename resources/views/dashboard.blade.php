@extends('layouts.master')

@section('content')
    <section class="row new-post">
        <div class="col-md-6 col-md-offset-3">
            <header><h3>What do you want to say?</h3></header>
            <form action="">
                <div class="form-group">
                    <textarea class="form-control" name="new-post" id="new-post" rows="5" placeholder="Your post"></textarea>
                </div>
                <button type="submit" class="btn btn-primary">Create Post</button>
            </form>
        </div>
    </section>
    <section class="row posts">
        <div class="col-md-6 col-md-offset-3">
            <header>
                <h3>What people say...</h3>
            </header>
            <article class="post">
                <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Accusantium aliquam assumenda debitis necessitatibus! Adipisci deleniti dicta nobis nostrum perspiciatis, quasi quibusdam quod repudiandae sapiente sed similique voluptate voluptatibus voluptatum. Necessitatibus.</p>
                <div class="info">
                    Posted by diding on 15 may 2016
                </div>
                <div class="interaction">
                    <a href="#">Like</a> |
                    <a href="#">Dislike</a> |
                    <a href="#">Edit</a> |
                    <a href="#">Delete</a>
                </div>
            </article>
            <article class="post">
                <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Accusantium aliquam assumenda debitis necessitatibus! Adipisci deleniti dicta nobis nostrum perspiciatis, quasi quibusdam quod repudiandae sapiente sed similique voluptate voluptatibus voluptatum. Necessitatibus.</p>
                <div class="info">
                    Posted by diding on 15 may 2016
                </div>
                <div class="interaction">
                    <a href="#">Like</a> |
                    <a href="#">Dislike</a> |
                    <a href="#">Edit</a> |
                    <a href="#">Delete</a>
                </div>
            </article>
        </div>
    </section>
@endsection