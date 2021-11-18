@extends("layouts.layout")

@section("do-du-lieu")
<link rel="stylesheet" type="text/css" href="{{ asset('backend/assets/css/category.css') }}">
<div class="col-lg-12">
    <div class="card">
        <div class="card-header">
            <div class="row">
                <div class="col-md-10">
                    <strong class="card-title" >Course manager</strong>
                </div>
                <div class="col-md-2 text-right">
                    <a class="btn-add py-1 px-3" href="{{ route('products.create') }}">
                        <i class="fas fa-plus"></i> Create
                    </a>
                </div>
            </div>
        </div>
        <div class="table-stats order-table ov-h">
            <table class="table ">
                <thead>
                    <tr>
                       	<th>
                            <div class="dropdown">
                                <button class="btn dropdown-toggle btn_arrange" type="button" id="dropdownMenuButton1" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                    Id
                                </button>
                                <div class="dropdown-menu" aria-labelledby="dropdownMenuButton1">
                                    <a class="dropdown-item" href="{{ url('admin/arrangeproduct/'.$id.'/id/asc') }}">Asc</a>
                                    <a class="dropdown-item" href="{{ url('admin/arrangeproduct/'.$id.'/id/desc') }}">Desc</a>
                                </div>
                            </div>
                        </th>
                        <th>Photo</th>
                        <th>
                            <div class="dropdown">
                                <button class="btn dropdown-toggle btn_arrange" type="button" id="dropdownMenuButton2" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                    Name
                                </button>
                                <div class="dropdown-menu" aria-labelledby="dropdownMenuButton2">
                                    <a class="dropdown-item" href="{{ url('admin/arrangeproduct/'.$id.'/name/asc') }}">A-Z</a>
                                    <a class="dropdown-item" href="{{ url('admin/arrangeproduct/'.$id.'/name/desc') }}">Z-A</a>
                                </div>
                            </div>
                        </th>
                        <th>
                            <div class="dropdown">
                                <button class="btn dropdown-toggle btn_arrange" type="button" id="dropdownMenuButton3" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                    Display
                                </button>
                                <div class="dropdown-menu" aria-labelledby="dropdownMenuButton2">
                                    <a class="dropdown-item" href="{{ url('admin/arrangeproduct/'.$id.'/display/desc') }}">Display</a>
                                    <a class="dropdown-item" href="{{ url('admin/arrangeproduct/'.$id.'/display/asc') }}">Undisplayed</a>
                                </div>
                            </div>
                        </th>
                        <th>
                            <div class="dropdown">
                                <button class="btn dropdown-toggle btn_arrange" type="button" id="dropdownMenuButton3" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                    Price
                                </button>
                                <div class="dropdown-menu" aria-labelledby="dropdownMenuButton2">
                                    <a class="dropdown-item" href="{{ url('admin/arrangeproduct/'.$id.'/price/desc') }}">Desc</a>
                                    <a class="dropdown-item" href="{{ url('admin/arrangeproduct/'.$id.'/price/asc') }}">Asc</a>
                                </div>
                            </div>
                        </th>
                        <th>Discount</th>
                        <th></th>
                    </tr>
                </thead>
                <tbody>
                    @foreach($data as $rows)
                    <tr>
                        <td>{{ $rows->id }}</td>
                        <td>
                            <div>
                                <a href="#"><img style="max-width: 125px;" src="{{asset('upload/products/'.$rows->photo)}}" alt=""></a>
                            </div>
                        </td>
                        <td>{{ $rows->name }}</td>
                        <td>
                            @if($rows->display == 1)
                                <i class="fas fa-check ml-3" style="color:green"></i>
                            @else
                                <i class="fas fa-times ml-3" style="color:red"></i>
                            @endif
                        </td>
                        <td>
                            {{ number_format($rows->price) }} VND
                        </td>
                        <td>
                            {{ number_format($rows->discount) }} %
                        </td>
                        <td>
                            <form style="display: inline;" action="{{ url('admin/products/'.$rows->id) }}" method="POST" onsubmit="return confirm('Are you sure you want to delete?');" >
                                @csrf
                                @method('DELETE')
                                <a class="badge badge-complete" style="color:white;" href="{{ url('admin/products/'.$rows->id.'/edit') }}">
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
    <nav aria-label="Page navigation example">
                        <ul class="pagination justify-content-center">
                        {{ $data->links() }}

                        </ul>
    </nav>
</div>
@endsection

@section('add-ajax')
<script type="text/javascript" language="javascript">
    
</script>
@endsection


