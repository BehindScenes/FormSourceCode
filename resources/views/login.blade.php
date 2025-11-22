<!DOCTYPE html>
<html lang="en" data-bs-theme="dark">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">

    {{-- IMPORT BOOTSTRAP & BOOTSTRAP ICONS --}}
    @VITE(['resources/js/app.js'])
    {{-- ---------------------------------- --}}

    <title>Login Page</title>
</head>

<body>
    <main class="bg-body-tertiary vh-100">
        <div class="container d-flex align-items-center justify-content-center h-100">
            <div class="col-12 col-md-4">
                @if (session('success'))
                    <div class="alert alert-success" role="alert">
                        {{ session('success') }}
                    </div>
                @endif
                @if ($errors->has('Error'))
                    <div class="alert alert-danger" role="alert">
                        {{ $errors->first() }}
                    </div>
                @endif
                <div class="card py-3 px-2 shadow">
                    <p class="fw-semibold fs-1 text-center">Login</p>
                    <div class="card-body">
                        {{-- Form action={{ route('routeName') }} --}}
                        <form action="{{ route('login') }}" method="POST">

                            @csrf
                            {{-- @csrf => <input type="hidden" name="_token" value="{{ csrf_token() }}" /> --}}

                            <div class="form-floating mb-3">
                                {{-- Email Input --}}
                                <input type="email" class="form-control border-0 border-bottom rounded-0"
                                    name="email" id="email" value="{{ old('email') }}"
                                    placeholder="name@example.com">
                                <label for="email">Email</label>
                                @error('email')
                                    <p class="ms-1 mt-2 small text-warning-emphasis">• {{ $message }}</p>
                                @enderror
                            </div>
                            <div class="form-floating mb-3">
                                {{-- Password Input --}}
                                <input type="password" class="form-control border-0 border-bottom rounded-0"
                                    name="password" id="password" placeholder="Password">
                                <label for="password">Password</label>
                                @error('password')
                                    <p class="ms-1 mt-2 small text-warning-emphasis">• {{ $message }}</p>
                                @enderror
                            </div>

                            <button type="submit" class="btn btn-secondary shadow w-100 mt-3">Login</button>

                        </form>
                    </div>
                </div>
            </div>
        </div>
    </main>
</body>

</html>
