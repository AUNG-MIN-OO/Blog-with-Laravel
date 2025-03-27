<x-alert></x-alert>

<x-layout>
    <x-slot name="title">Login | My Blog</x-slot>
    <div class="container">
        <div class="row">
            <div class="col-md-5 mx-auto">
                <h2 class="text-center mt-3">Welcome from MyBlog</h2>
                <div class="card p-4 shadow-sm m-4">
                    <form method="POST">
                        @csrf
                        <div class="mb-3">
                            <label for="exampleInputEmail1" class="form-label">Email address</label>
                            <input type="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" name="email" value="{{old('email')}}">
                            <x-show-error errorName="email"></x-show-error>
                        </div>
                        <div class="mb-3">
                            <label for="password" class="form-label">Password</label>
                            <input type="password" class="form-control" id="password" name="password">
                            <x-show-error errorName="password"></x-show-error>
                        </div>
                        <button type="submit" class="btn btn-primary float-end">Login</button>
                    </form>
                </div>
            </div>
        </div>
    </div>
</x-layout>
