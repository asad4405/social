<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Bootstrap demo</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.7/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-LN+7fdVzj6u52u30Kp6M/trliBMCMKTyK833zpbD+pXdCLuTusPj697FH4R/5mcr" crossorigin="anonymous">
</head>

<body>
    <div class="my-5 row justify-content-center">
        <div class="col-lg-6">
            <div class="card">
                <div class="card-header">
                    <h3>Login</h3>
                </div>
                @if (session('exists'))
                    <div class="alert alert-danger">{{ session('exists') }}</div>
                @endif
                @if (session('wrong'))
                    <div class="alert alert-danger">{{ session('wrong') }}</div>
                @endif
                <div class="card-body">
                    <form method="POST" action="{{ route('user.login.submit') }}">
                        @csrf
                        <div class="mb-3">
                            <label for="" class="form-label">Email/Phone</label>
                            <input type="text" class="form-control" name="email" value="{{ old('email') }}">
                        </div>
                        <div class="mb-3">
                            <label for="" class="form-label">Password</label>
                            <input type="password" class="form-control" name="password" value="{{ old('password') }}">
                        </div>

                        <div class="mb-3">
                            <button type="submit" class="btn btn-success">Submit</button>
                        </div>


                        <div class="flex items-center justify-end mt-4">
                            <a class="text-sm text-gray-600 underline rounded-md hover:text-gray-900 focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-indigo-500"
                                href="{{ route('login') }}">
                                {{ __('Already registered?') }}
                            </a>

                            {{-- <x-primary-button class="ms-4">
                                {{ __('Register') }}
                            </x-primary-button> --}}
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.7/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-ndDqU0Gzau9qJ1lfW4pNLlhNTkCfHzAVBReH9diLvGRem5+R9g2FzA8ZGN954O5Q"
        crossorigin="anonymous"></script>
</body>

</html>
