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
        <div class="col-lg-8">
            <div class="card">
                <div class="card-header">
                    <h3>Register</h3>
                </div>
                <div class="card-body">
                    <form method="POST" action="{{ route('user.register.submit') }}">
                        @csrf

                        <div class="mb-3">
                            <label for="" class="form-label">Name</label>
                            <input type="text" class="form-control" name="name" value="{{ old('name') }}">
                        </div>

                        <div class="mb-3">
                            <label for="" class="form-label">Email/Phone</label>
                            <input type="text" class="form-control" name="email" value="{{ old('email') }}">
                            <strong class="text-success">[Forgot password must be email]</strong>
                        </div>

                        <div class="mb-3">
                            <label for="" class="form-label">Birthday</label>
                            <input type="date" class="form-control" name="birthday">
                        </div>

                        <div class="mb-3">
                            <label class="form-label d-block">Gender</label>
                            <div class="form-check form-check-inline">
                                <input class="form-check-input" type="radio" name="gender" id="genderMale" value="male">
                                <label class="form-check-label" for="genderMale">Male</label>
                            </div>
                            <div class="form-check form-check-inline">
                                <input class="form-check-input" type="radio" name="gender" id="genderFemale" value="female">
                                <label class="form-check-label" for="genderFemale">Female</label>
                            </div>
                        </div>
                        <div class="mb-3">
                            <label for="" class="form-label">Password</label>
                            <input type="password" class="form-control" name="password" value="{{ old('password') }}">
                        </div>

                        <div class="mb-3">
                            <label for="" class="form-label">Password Confirmation</label>
                            <input type="password" class="form-control" name="password_confirmation">
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
