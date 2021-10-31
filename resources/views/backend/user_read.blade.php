@extends("layouts.layout")
@section("do-du-lieu")
<link rel="stylesheet" type="text/css" href="{{ asset('backend/assets/css/user.css') }}">
<div class="content">
            <div class="animated fadeIn">
                <div class="row">
                    <div class="col-md-12">
                        <div class="card">
                            <div class="card-header">
                                <i class="fas fa-table me-1"></i>
                                Users Management
                            </div>
                            <div class="card-body">
                            <div class="table-stats order-table ov-h">
                                <table id="datatablesSimple">
                                    <thead>
                                        <tr>
                                            <th>Id</th>
                                            <th><div class="round-img">Avatar</div></th>
                                            <th>Name</th>
                                            <th>Email</th>
                                            <th>Address</th>
                                            <th>Phone</th>
                                            <th></th>
                                        </tr>   
                                    </thead>
                                    <tbody>
                                        @foreach($data as $rows)
                                        <tr>
                                            <td>{{$rows->id}}</td>
                                            <td><img class="rounded-circle" src="{{asset('upload/users/'.$rows->photo)}}"></td>
                                            <td>{{$rows->name}}</td>
                                            <td>{{$rows->email}}</td>
                                            <td>{{$rows->address}}</td>
                                            <td>{{$rows->phone}}</td> 
                                            <td>
                                            <form style="display:inline;" action="{{ url('admin/users/'.$rows->id) }}" method="POST" onsubmit="return confirm('Are you sure you want to delete?');" >
                                                @csrf
                                                @method('DELETE')
                                                <a class="badge badge-complete" style="color:white;" href="{{ url('admin/users/'.$rows->id.'/edit') }}">
                                                    <i class="fas fa-pencil-alt"></i>
                                                </a>
                                                <button style="background-color:gray;border:none;cursor:pointer;" class="badge badge-complete" type="submit"><i class="fas fa-trash-alt"></i>
                                                </button>
                                            </form>  
                                            </td>
                                        </tr>
                                       @endforeach
                                    </tbody>
                                </table>
                            </div>
                            </div>
                        </div>
                    </div>


                </div>
            </div><!-- .animated -->
        </div><!-- .content -->

@endsection