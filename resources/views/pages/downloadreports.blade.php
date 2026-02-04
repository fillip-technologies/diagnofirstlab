@extends('layouts.app')

@section('content')
<section class="min-h-screen flex items-center justify-center
                px-4">

    <div class="w-full max-w-md bg-white rounded-2xl shadow-2xl p-8">

        <!-- Heading -->
        <div class="text-center mb-8">
            <h2 class="text-3xl font-bold text-gray-800">
                Customer Login
            </h2>
            <p class="text-gray-500 mt-2">
                Login to access your account
            </p>
        </div>

        <!-- Form (UI only) -->
        <form class="space-y-5">

            <!-- Email / Phone -->
            <div>
                <label class="text-sm font-medium text-gray-700">
                    Email or Phone
                </label>
                <input
                    type="text"
                    placeholder="Enter email or phone"
                    class="w-full mt-1 px-4 py-3 border rounded-xl
                           focus:ring-2 focus:ring-indigo-500 outline-none"
                >
            </div>

            <!-- Password -->
            <div>
                <label class="text-sm font-medium text-gray-700">
                    Password
                </label>
                <input
                    type="password"
                    placeholder="Enter password"
                    class="w-full mt-1 px-4 py-3 border rounded-xl
                           focus:ring-2 focus:ring-indigo-500 outline-none"
                >
            </div>

            <!-- Remember + Forgot -->
            <div class="flex items-center justify-between text-sm">
                <label class="flex items-center gap-2 text-gray-600">
                    <input type="checkbox" class="rounded">
                    Remember me
                </label>
                <span class="text-indigo-600 cursor-pointer">
                    Forgot password?
                </span>
            </div>

            <!-- Button -->
            <button
                type="button"
                class="w-full py-3 rounded-xl bg-indigo-600 text-white
                       font-semibold hover:bg-indigo-700 transition">
                Login
            </button>

        </form>

        <!-- Signup -->
        <p class="text-center text-sm text-gray-600 mt-6">
            Don’t have an account?
            <span class="text-indigo-600 font-semibold cursor-pointer">
                Sign up
            </span>
        </p>

    </div>
</section>

@endsection
