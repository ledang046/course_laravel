@extends("layouts.layout")
@section("do-du-lieu")
<link rel="stylesheet" type="text/css" href="{{ asset('backend/assets/css/new.css') }}">
<div class="col-lg-12">
                        <div class="card">
                            <div class="card-header">
                                <div class="row">
                                    <div class="col-md-10">
                                        <strong class="card-title" >Coupons manager</strong>
                                    </div>
                                    <div class="col-md-2 text-right">
                                        <a class="btn-add py-1 px-3" href="{{route('discounts.create')}}">
                                            <i class="fas fa-plus"></i> Create
                                        </a>
                                    </div>
                                </div>
                            </div>
                            <div class="table-stats order-table ov-h">
                                <table id="datatablesSimple">
                                    <thead>
                                            <th>Id</th>
                                            <th>Name</th>
                                            <th>Code</th>
                                            <th>Quantity</th>
                                            <th>Option</th>
                                            <th>Numer</th>
                                            <th></th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                    @foreach($data as $rows)
                                        <tr>
                                            <td>{{$rows->id}}</td>
                                            <td>{{$rows->name}}</td>
                                            <td>{{$rows->code}}</td>
                                            <td>{{$rows->time}}</td>
                                            <td>
                                                @if($rows->condition == 1)
                                                Percent discount (%) 
                                                @else
                                                Price discount (VNĐ)
                                                @endif
                                            </td>
                                            <td>
                                                @if($rows->condition == 1)
                                                Discount {{$rows->number}}%
                                                @else
                                                Dicount  {{$rows->number}} VNĐ
                                                @endif
                                            </td>
                                            <td>
                                                <form style="display:inline;" action="{{ url('admin/discounts/'.$rows->id) }}" onsubmit="return confirm('Are you sure you want to delete?');" method="POST">
                                                @csrf @method("DELETE")
                                                <a class="badge badge-complete" style="color:black;" href="{{ url('admin/discounts/'.$rows->id.'/edit') }}">
                                                <i class="fas fa-pencil-alt"></i></a>
                                                <button style="background-color:gray;border:none;cursor:pointer;" class="badge badge-complete" type="submit">
                                                <i class="fas fa-trash-alt"></i></button>
                                                </form>
                                            </td>
                                        </tr>
                                       @endforeach
                                    </tbody>
                                </table>
                            </div> <!-- /.table-stats -->
                        </div>
                        
                    </div>

@endsection