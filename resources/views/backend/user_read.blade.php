@extends("backend.layout")
@section("do-du-lieu")
<?php $i = 0; ?>
<div class="col-lg-12">
                        <div class="card">
                            <div class="card-header">
                                <strong class="card-title">Users manager</strong>
                            </div>
                            <div class="table-stats order-table ov-h">
                                <table class="table ">
                                    <thead>
                                        <tr>
                                           	<th class="serial">#</th>
                                            <th class="avatar">Avatar</th>
                                            <th style="width: 180px;">Name</th>
                                            <th>Email</th>
                                            <th>Address</th>
                                            <th>Phone</th>
                                            <th style="width:120px;"></th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                         @foreach($data as $rows)
                                        <tr>
                                            <td class="serial"> 
											<?php echo ++$i;?>.</td>
                                            <td class="avatar">
                                                <div class="round-img">
                                                    <a href="#"><img style="width: 100%;" class="rounded-circle" src="{{asset('backend/images/avatar/'.$rows->photo)}}" alt=""></a>
                                                </div>
                                            </td>
                                            <td>{{ $rows->name}}</td>
                                            <td><span>{{ $rows->email}}</span> </td>
                                            <td> <span>{{ $rows->address}}</span> </td>
                                            <td><span>{{ $rows->phone}}</span></td>
                                            <td>

                                                 <form style="display: inline;" action="{{ url('admin/users/'.$rows->id) }}" method="POST" onsubmit="return confirm('Are you sure you want to delete?');" >
                                                @csrf
                                                 <a class="badge badge-complete" style="color:white;" href="{{ url('admin/users/'.$rows->id.'/edit') }}"><i class="fas fa-pencil-alt"></i></a>
                                               <input type="hidden" name="_token" value="{{ csrf_token() }}">
                                               <input type="hidden" name="_method" value="DELETE">
                                               <button style="background-color:gray;border:none;cursor:pointer;" class="badge badge-complete" type="submit"><i class="fas fa-trash-alt"></i></button>
                                              <!--  <span style="background-color:gray" class="badge badge-complete"><i class="fas fa-trash-alt"></i></span> -->
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
    <li class="page-item">
      <a class="page-link" href="#"><i class="fas fa-chevron-left"></i></a>
    </li>
    <li class="page-item"><a class="page-link" href="#">1</a></li>
    <li class="page-item"><a class="page-link" href="#">2</a></li>
    <li class="page-item"><a class="page-link" href="#">3</a></li>
    <li class="page-item">
      <a class="page-link" href="#"><i class="fas fa-chevron-right"></i></a>
    </li>
  </ul>
</nav>
                    </div>

@endsection