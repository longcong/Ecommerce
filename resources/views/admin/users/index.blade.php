@extends('layouts.admin')

@section('title', '| Registered User')

@section('content')


<div class="card-body">
    <div class="container">
        <div class="row">
            <div class="card">
                <div class="card-header">
                    <h4>Tài khoản đăng ký</h4>
                </div>
                <div class="card-body">
                    <table class="table table-bordered ">
                        <thead>
                            <tr style="text-align: center;">
                                <th>Id</th>
                                <th>Tên tài khoản</th>
                                <th>Email</th>
                                <th>Số điện thoại</th>
                                <th>Role</th>
                                <th>Hành động</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach($users as $item)
                                <tr style="text-align: center;">
                                    <td>{{ $item->id }}</td>
                                    <td>{{ $item->username }}</td>
                                    <td>{{ $item->email }}</td>
                                    <td>{{ $item->phone }}</td>
                                    <td>
                                        <div class="form-check form-switch ps-0 is-filled" >
                                            <input data-id="{{$item->id}}" class="toggle-class form-check-input ms-auto" type="checkbox" {{ $item->role ? 'checked' : '' }}>                                        
                                        </div>
                                    </td>
                                    <td>
                                        <div class="dropdown show">
                                            <a class="btn btn-secondary dropdown-toggle" href="#" role="button" id="dropdownMenuLink" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                                hành động
                                            </a>

                                            <div class="dropdown-menu"  aria-labelledby="dropdownMenuLink">
                                                <a class="dropdown-item" href="{{ url('admin/view-user/'.$item->id) }}">Chi tiết</a>
                                                @if(Auth::check())
                                                    <a class="dropdown-item" href="{{ url('admin/create/'.$item->id) }}">Cập nhật</a>
                                                @endif
                                            </div>
                                        </div>  
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

@endsection

@section('scripts')
    <script>
        $(function() { 
                $('.toggle-class').change(function() { 
                var role = $(this).prop('checked') == true ? 1 : 0;  
                var user_id = $(this).data('id');  
                $.ajax({ 

                    type: "GET", 
                    dataType: "json", 
                    url: 'update/role', 
                    data: {'role': role, 'user_id': user_id}, 
                    success: function(response){
                        alert(response.status);
                    } 
                }); 
            }) 
        }); 
    </script>
@endsection
