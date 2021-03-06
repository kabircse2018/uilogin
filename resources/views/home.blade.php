@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">{{ __('Dashboard') }}</div>

                <div class="card-body">
                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif

                    {{ __('You are logged in!') }} {{Auth::user()->name}}

                    <br>

                    {{-- Data Show from Database --}}
                    <a href="{{route('class.index')}}" class="btn btn-info btn-sm">Class</a>
                    <a href="" class="btn btn-danger btn-sm">Students</a>

                    {{-- <a href="{{route('user.details',Crypt::encryptString('2'))}}" class="btn btn-sm btn-success">HUMAUN DETAILS</a> --}}

                    {{-- <form method="POST" action="{{route('store.user')}}">
                        @csrf
                        <div>
                            <label>Password</label>
                            <input type="text" name="password" class="form-control" placeholder="Input Your Password here">
                        </div><br>
                        <button type="submit" class="btn btn-dark">Submit</button>
                    </form> --}}


                </div>
            </div>
        </div>
    </div>
</div>
@endsection
