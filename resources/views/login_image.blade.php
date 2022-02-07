@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-12">
            <div class="card">
                <div class="card-header">{{ __('Dashboard') }}</div>

                <div class="card-body">
                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif
                        @guest
                            {{__('Nothing to see here')}}
                        @else
                            {{ __('You are logged in!') }}
                            {{__('Img: SampleJPGImage_10mbmb.jpg will follow:')}}
                        <br>
                            <img src="{{url('storage/image/SampleJPGImage_10mbmb.jpg')}}" alt="" title="" />

                        @endguest

                </div>
            </div>
        </div>
    </div>
</div>
@endsection
