<x-layout>
    <x-slot name="title">Register | My Blog</x-slot>
    <div class="container">
        <div class="row">
            <div class="col-md-5 mx-auto">
                <h2 class="text-center mt-3">Welcome from MyBlog</h2>
                <div class="card p-4 shadow-sm m-4">
                    <form method="POST">
                        @csrf
                        <div class="mb-3">
                            <label for="name" class="form-label">Name</label>
                            <input type="text" class="form-control" id="name" aria-describedby="nameHelp" name="name" value="{{old('name')}}">
                            @error('name')
                                <small class="text-danger fw-bold">*{{$message}}</small>
                            @enderror
                        </div>
                        <div class="mb-3">
                            <label for="username" class="form-label">Username</label>
                            <input type="text" class="form-control" id="username" aria-describedby="usernameHelp" name="username" value="{{old('username')}}">
                            @error('username')
                                <small class="text-danger fw-bold">*{{$message}}</small>
                            @enderror
                        </div>
                        <div class="mb-3">
                            <label for="exampleInputEmail1" class="form-label">Email address</label>
                            <input type="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" name="email" value="{{old('email')}}">
                            @error('email')
                                <small class="text-danger fw-bold">*{{$message}}</small>
                            @enderror
                        </div>
                        <div class="mb-3">
                            <label for="password" class="form-label">Password</label>
                            <input type="password" class="form-control" id="password" name="password">
                            @error('password')
                                <small class="text-danger fw-bold">*{{$message}}</small>
                            @enderror
                        </div>
                        <button type="submit" class="btn btn-primary float-end">Register</button>
                    </form>
                </div>
            </div>
        </div>
    </div>
</x-layout>
