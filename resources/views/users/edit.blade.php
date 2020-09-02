@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">
                    Edit User {{$user->name}}
                </div>

                <div class="card-body">
                    <form action="{{route('users.update',$user->id)}}" method="POST">

                        @csrf
                        @method('PUT')

                        <div class="form-group">
                            <label for="name">Name</label>
                            <input type="text" class="form-control"name="name" placeholder="Enter name"
                                value="{{$user->name}}" required>
                        </div>


                        <div class="form-group">
                            <label for="Email">Email</label>
                            <input type="email" class="form-control" id="Email" aria-describedby="emailHelp"
                                placeholder="Enter email" value="{{$user->email}}" disabled required>
                        </div>
                        <div class="form-group">
                            <label for="role">Roles</label>

                            <div class="form-check">
                                <input type="checkbox" class="form-check-input" name="roles[]" value="super_admin"
                                    {{$user->hasRole('super_admin')?'checked':''}}>
                                <label class="form-check-label">Super Admin</label>
                            </div>

                            <div class="form-check">
                                <input type="checkbox" class="form-check-input" name="roles[]" value="user"
                                    {{$user->hasRole('user')?'checked':''}}>
                                <label class="form-check-label">User</label>
                            </div>
                        </div>


                        <button type="submit" class="btn btn-primary">Submit</button>
                    </form>

                </div>
            </div>
        </div>
    </div>
</div>
@endsection