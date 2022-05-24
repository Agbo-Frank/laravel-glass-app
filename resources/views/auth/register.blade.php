<x-guest-layout>
    @include("layouts.header")
    <x-auth-card>
        <x-page-title title="my account" location="login" />

        <form method="POST" class="form" action="{{ route('register') }}">
            <h3>User Login</h3>
            @csrf
            <!-- Validation Errors -->
            <x-auth-validation-errors class="mb-4" :errors="$errors" />

            <!-- Name -->
            <div class="input-field">
                <i class="fa fa-user"></i>
                <input type="text" id="name" placeholder="Your Name" required :value="old('name')" name="name"/>
            </div>

            <!-- Email Address -->
            <div class="input-field">
                <i class="fa fa-user"></i>
                <input type="email" id="email"  placeholder="Your Email" name="email" :value="old('email')" required/>
            </div>

            <!-- Password -->
            <div class="input-field">
                <i class="fa fa-lock"></i>
                <input type="password" id="password" placeholder="Your Password"type="password" name="password" required/>
            </div>

            <!-- Confirm Password -->
            <div class="input-field">
                <i class="fa fa-lock"></i>
                <input type="password" id="password_confirmation" name="password_confirmation" required placeholder="Confirm Password"/>
            </div>
            <button type="submit">Register</button>
            <label htmlFor="check">
                <input type="checkbox" ref={isUser} id="check" />&nbsp;
                Become a vendor?
            </label>
            <a href="/login" class="btn">Already Have An Account</a>
        </form>
    </x-auth-card>
</x-guest-layout>
