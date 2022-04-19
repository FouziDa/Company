@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">Companies</div>

                <div class="card-body">
                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif

                    <a href="{{url('add')}}" class="btn btn-success">Add Company</a>
                    <table class="table table-striped">
                        <tr>
                            <th>Name</th>
                            <th>E-mail</th>
                            <th>Website</th>
                            <th>Logo</th>
                            <tr></tr>
                        </tr>
                        @foreach($coms as $com)
                            <tr>
                                <td>{{$com->name}}</td>
                                <td>{{$com->email}}</td>
                                <td>{{$com->website}}</td>
                                <td><img width="100" height="100" src="{{asset('storage/logos/'.$com->logo)}}"></td>
                                <td>
                                    <a href="{{url('update/'.$com->id)}}" class="btn btn-primary">Update</a>
                                    <a href="{{url('delete/'.$com->id)}}" class="btn btn-outline-danger" onclick="return confirm('Are you sure?')">Delete</a>
                                </td>
                            </tr>
                        @endforeach
                    </table>
                        {{ $coms->links('pagination::bootstrap-4') }}
                </div>
            </div>
        </div>
    </div>
</div>


@endsection
