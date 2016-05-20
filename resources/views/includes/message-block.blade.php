@if(count($errors) > 0)
    <div class="row">
        <div class="col-md-4 col-md-offset-4 error">
        <div class="alert alert-danger fade in">
            <ul>
                @foreach($errors->all() as $error)
                    <li>
                        {{$error}}
                    </li>
                @endforeach
            </ul>
        </div>
        </div>
    </div>
@endif

@if(Session::has('message'))
    <div class="row">
        <div class="col-md-6 col-md-offset-3">
            <div class="alert alert-success fade in">
                <span class="close" data-dismiss="alert">&times;</span>
                {{Session::get('message')}}
            </div>
        </div>
    </div>
@endif