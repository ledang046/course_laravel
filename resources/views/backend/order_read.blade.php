@extends("layouts.layout")
@section("do-du-lieu")
<link rel="stylesheet" type="text/css" href="{{ asset('backend/assets/css/user.css') }}">
<div class="content">
            <div class="animated fadeIn">
                <div class="row">
                    <div class="col-md-12">
                        <div class="card">
                            <div class="card-header">
                            <div class="row">
                                    <div class="col-md-10">
                                        <strong class="card-title" >Users manager</strong>
                                    </div>
                                </div>
                            </div>
                            <div class="card-body">
                            <div class="table-stats order-table ov-h">
                                <table id="datatablesSimple">
                                    <thead>
                                        <tr>
                                            <th>Id</th>
                                            <th>Product</th>
                                            <th>Customer</th>
                                            <th>Discount Code</th>
                                            <th>Price</th>
                                            <th>Date</th>
                                            <th></th>
                                        </tr>   
                                    </thead>
                                    <tbody>
                                        @foreach($data as $rows)
                                        <tr>
                                            <td>{{$rows->id}}</td>
                                            <td>{{$rows->product->name}}</td>
                                            <td>{{$rows->customer->name}}</td>
                                            <td>{{$rows->discount->name}}</td>
                                            <td>{{number_format($rows->price)}}đ</td>
                                            <td>{{$rows->date}}</td> 
                                            <td>
                                            <form style="display:inline;" action="{{ url('admin/orders/'.$rows->id) }}" method="POST" onsubmit="return confirm('Are you sure you want to delete?');" >
                                                @csrf
                                                @method('DELETE')
                                                <a class="badge badge-complete" style="color:white;" href="{{ url('admin/orders/'.$rows->id.'/edit') }}">
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
                    <nav aria-label="Page navigation example">
                        <ul class="pagination justify-content-center">
                            {{$data->links()}}
                        </ul>
                    </nav>
                </div>
            </div><!-- .animated -->
        </div><!-- .content -->

@endsection