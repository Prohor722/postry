@extends('layouts.app')

@section('content')
    <div class="flex justify-center">
        <div class="w-4/12 bg-white p-6 rounded">
            <form action="{{route('login')}}" method="post">
                @csrf
                <div class="mb-4">
                    <label for="email" classsr-only>Email</label>
                    <input type="text" name="email" id="email" placeholder="Enter email"
                           class="bg-gray-100 border-2 w-full p-2 rounded-lg mt-3
                            @error('email') border-red-500 @enderror" value="{{old('email')}}">

                    @error('email')
                    <div class="text-red-500 mt-2 text-sm">
                        {{$message}}
                    </div>
                    @enderror
                </div>

                <div class="mb-4">
                    <label for="password" classsr-only>Password</label>
                    <input type="password" name="password" id="password" placeholder="Enter your password"
                           class="bg-gray-100 border-2 w-full p-2 rounded-lg
                            @error('password') border-red-500 @enderror" value="">
                    @error('password')
                    <div class="text-red-500 mt-2 text-sm">
                        {{$message}}
                    </div>
                    @enderror
                </div>

                @if(session('status'))
                    <div class="bg-red-500 p-4 border-2 rounded-lg
                    text-white text-center mb-3">
                        {{session('status')}}
                    </div>
                @endif

                <div class="flex items-center">
                    <input type="checkbox" name="remember" id="remember"
                           class="mr-2">
                    <label for="remember">Remember me</label>
                </div>

                <div>
                    <button type="submit" class="bg-green-500 mt-3 text-white px-4 py-3
                rounded font-medium w-full">Login</button>
                </div>
            </form>

        </div>
    </div>
@endsection
