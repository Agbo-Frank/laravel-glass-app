<x-guest-layout>
    @include("layouts.header")
    <x-auth-card>
        <x-page-title title="my account" location="login" />
        <!-- Session Status -->
        <x-auth-session-status class="mb-4" :status="session('status')" />

        <form method="POST" class="form" action="{{ route('login') }}">
            <h3>User Login</h3>
            @csrf
            <!-- Validation Errors -->
            <x-auth-validation-errors :errors="$errors" />

            <div class="input-field">
                <i class="fa fa-user"></i>
                <input type="email"  placeholder="Your Email" :value="old('email')" name="email"/>
            </div>
            <div class="input-field">
                <i class="fa fa-lock"></i>
                <input type="password" placeholder="Your Password" name="password"/>
            </div>
            <button type="submit">Login</button>
            <p>Forgot Password</p> 
            <a href="{{ route('register') }}" class="btn">Create An Account</a>
        </form>
    </x-auth-card>
</x-guest-layout>
