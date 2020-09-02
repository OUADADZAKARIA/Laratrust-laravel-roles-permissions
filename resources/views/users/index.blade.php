@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <table class="table">
                <thead>
                    <tr>
                        <th>#</th>
                        <th>Name</th>
                        <th>Email</th>
                        <th>Roles</th>
                        <th>Edit</th>
                    </tr>
                </thead>
                <tbody>

                    @foreach ($users as $index=>$user)
                    <tr>
                        <th scope="row">{{$index+1}}</th>
                        <td>{{$user->name}}</td>
                        <td>{{$user->email}}</td>
                        <td>
                            @foreach ($user->roles as $index=>$role)
                            {{$role->display_name}}
                            {{$index+1<$user->roles->count()?',':''}}
                                
                            @endforeach

                        </td>
                        <td>
                        <a href="{{route('users.edit',$user->id)}}" class="btn btn-info text-white">edit</a>
                        </td>
                    </tr>

                    @endforeach

                </tbody>
            </table>
        </div>
    </div>
</div>
@endsection