@extends('layouts.app')

@section('content')
<div class="flex items-center justify-center min-h-screen bg-gray-50">
    <div class="w-full max-w-md p-8 space-y-8 shadow-lg card bg-white">
        <h2 class="text-2xl font-bold text-center text-gray-800">
            <a href="{{url('/')}}" class="text-2xl font-bold text-center text-blue-400 hover:underline">{{ __('Sano Care') }}</a>
            {{ __('Login') }}
        </h2>

        <form method="POST" action="{{ route('login') }}" class="space-y-6">
            @csrf

            <!-- Name Input -->
            <div class="form-control">
                <label for="name" class="label">
                    <span class="label-text text-black">{{ __('Name') }}</span>
                </label>
                <input id="name" type="text" name="name" value="{{ old('name') }}" required autocomplete="name" autofocus
                       class="input input-bordered w-full @error('name') input-error @enderror bg-blue-200 text-black">
                @error('name')
                    <span class="text-error">
                        <strong>{{ $message }}</strong>
                    </span>
                @enderror
            </div>


            <!-- Password Input -->
            <div class="form-control">
                <label for="password" class="label">
                    <span class="label-text text-black">{{ __('Password') }}</span>
                </label>
                <input id="password" type="password" name="password" required autocomplete="current-password"
                       class="input input-bordered w-full @error('password') input-error @enderror bg-blue-200 text-black">
                @error('password')
                    <span class="text-error">
                        <strong>{{ $message }}</strong>
                    </span>
                @enderror
            </div>

            <!-- Remember Me Checkbox -->
            <div class="form-control">
                <label class="cursor-pointer label">
                    <input type="checkbox" name="remember" class="checkbox" {{ old('remember') ? 'checked' : '' }}>
                    <span class="label-text text-black">{{ __('Remember Me') }}</span>
                </label>
            </div>

            <!-- Submit Button -->
            <div>
                <button type="submit" class="btn btn-primary w-full">{{ __('Login') }}</button>
            </div>

            <!-- Forgot Password -->
            {{-- @if (Route::has('password.request'))
                <div class="text-center">
                    <a class="link link-primary" href="{{ route('password.request') }}">
                        {{ __('Forgot Your Password?') }}
                    </a>
                </div>
            @endif --}}

            {{-- Register --}}
            @if (Route::has('register'))
                <div class="text-center text-black">
                    Don't have account?
                    <a class="text-blue-700 hover:underline" href="{{ route('register') }}">
                        {{ __(" register now") }}
                    </a>
                </div>
            @endif
        </form>
    </div>
</div>
@endsection
