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
                            {{__('Video: SampleVideo_1280x720_5mb.mp4 will follow: ')}}
                            <br>
                            <video width="1280" height="720" controls>
                                <source src="{{url('storage/video/SampleVideo_1280x720_5mb.mp4')}}" type="video/mp4">
                                Your browser does not support the video tag.
                            </video>
                        @endguest
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
