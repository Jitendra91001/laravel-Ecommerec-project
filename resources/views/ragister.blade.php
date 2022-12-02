@extends('layouts')
@section('contant')
<div class="container">
    <div class="row abc">
        <div class="col-sm-4 col-md-4 offset-4 my-3">
            <form action="/ragister" method="POST">
                @csrf
                <div class="mb-3">
                    <label for="exampleInputEmail1" class="form-label">User Name</label>
                    <input type="text" name="name" spellcheck="false" autofocus autocomplete="false" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">
                  </div>

                <div class="mb-3">
                  <label for="exampleInputEmail1" class="form-label">Email address</label>
                  <input type="email" name="email" spellcheck="false" autofocus autocomplete="false" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">
                </div>
                <div class="mb-3">
                  <label for="exampleInputPassword1" class="form-label">Password</label>
                  <input type="password" name="password" class="form-control" id="exampleInputPassword1">
                </div>
                <button type="submit" class="btn btn-primary">Ragister</button>
              </form>
        </div>
    </div>
</div>
@endsection