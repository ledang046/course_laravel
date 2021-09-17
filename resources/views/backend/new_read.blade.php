@extends("layouts.layout")
@section("do-du-lieu")
<?php $i = 0; ?>
<link rel="stylesheet" type="text/css" href="{{ asset('backend/assets/css/user.css') }}">
<div class="col-lg-12">
                        <div class="card">
                            <div class="card-header">
                                <div class="row">
                                    <div class="col-md-10">
                                        <strong class="card-title" >News manager</strong>
                                    </div>
                                    <div class="col-md-2 text-right">
                                        <a class="btn-add py-1 px-3" href="{{route('news.create')}}">
                                            <i class="fas fa-plus"></i> Create
                                        </a>
                                    </div>
                                </div>
                            </div>
                           
                            <div class="table-stats order-table ov-h">
                                <table class="table ">
                                    <thead>
                                        <tr>
                                           	<th style="width: 50px;" class="serial" > 
                                                <button class="btn dropdown-toggle btn_arrange" type="button" id="dropdownMenuButton2" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                                    Id
                                                </button>
                                                <div class="dropdown-menu" aria-labelledby="dropdownMenuButton2">
                                                    <!-- <a class="dropdown-item" href="{{ url('admin/arrangeuser/id/asc') }}">asc</a>
                                                    <a class="dropdown-item" href="{{ url('admin/arrangeuser/id/desc') }}">desc</a> -->
                                                </div>
                                            </th>
                                            <th>Photo</th>
                                            <th style="width: 120px;">
                                            <div class="dropdown">
                                                <button class="btn dropdown-toggle btn_arrange" type="button" id="dropdownMenuButton2" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                                    Name
                                                </button>
                                                <div class="dropdown-menu" aria-labelledby="dropdownMenuButton2">
                                                    <!-- <a class="dropdown-item" href="{{ url('admin/arrangeuser/name/asc') }}">A-Z</a>
                                                    <a class="dropdown-item" href="{{ url('admin/arrangeuser/name/desc') }}">Z-A</a> -->
                                                </div>
                                            </div>
                                            </th>
                                            <th>Description</th>
                                            <th>Content</th>
                                            <th>Display</th>
                                            <th style="width:120px;"></th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                         @foreach($data as $rows)
                                        <tr>
                                
											<td>{{ $rows->id}}.</td>
                                            <td>
                                                <div>
                                                    <a href="#"><img style="max-width: 125px;" src="{{asset('upload/news/'.$rows->photo)}}" alt=""></a>
                                                </div>
                                            </td>
                                            <td>{{ $rows->name}}</td>
                                            <td><span>{{ $rows->description}}</span> </td>
                                            <td> <span>{{ $rows->content}}</span> </td>
                                            <td>
                                                <span>
                                                    @if($rows->display == 1)
                                                        <i class="fas fa-check ml-3" style="color:green"></i>
                                                    @else
                                                        <i class="fas fa-times ml-3" style="color:red"></i>
                                                    @endif
                                                </span>
                                            </td>
                                            <td>

                                            <form style="display: inline;" action="{{ url('admin/news/'.$rows->id) }}" method="POST" onsubmit="return confirm('Are you sure you want to delete?');" >
                                                @csrf
                                                @method('DELETE')          
                                                    <a class="badge badge-complete" style="color:white;" href="{{ url('admin/news/'.$rows->id.'/edit') }}">
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
                            </div> <!-- /.table-stats -->
                        </div>
                        <nav aria-label="Page navigation example">
                        <ul class="pagination justify-content-center">
                        {{ $data->links() }}

                        </ul>
                        </nav>
                    </div>

@endsection