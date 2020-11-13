@extends('layouts.master')


@section('content')


                    <div class="row">
                    <div class="col-md-12">
                    <div class="card">

                        <div class="card-header">
                        <h5>{{ $question->text }}</h5>
                        </div>

                        <div class="card-body">
                                {{-- @livewire('choices') --}}
                                {{-- :@livewire('choices', ['user' => $user], key($user->id)) --}}
                                @livewire('choices', ['id' => Route::current()->parameter('id')])
                        </div>

                    </div>
                    </div>
                    </div>
    
@endsection