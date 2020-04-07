@extends('home')
@section('title','danh sách tỉnh thành')
@section('content')
    <div class="clo-12">
        <div class="row">
            <div class="col-12">
                <h1> Danh sách các tỉnh thành</h1>
            </div>
            <table class="table table-striped">
                <thead>
                    <tr>
                        <th scope="col">ID</th>
                        <th scope="col"> Tên tỉnh thành</th>
                        <th scope="col"> Số khách hàng</th>
                        <th scope="col-2">Aticon</th>
                        <th></th>
                    </tr>
                </thead>
                <tbody>
                     @if(count($cities) == 0)
                         <tr>
                             <td colspan="4"> Không có dữ liệu</td>
                         </tr>
                      @else
                            @foreach($cities as $key => $city)
                                <tr>
                                    <th scope="row">{{++$key}}</th>
                                    <td>{{ $city->name }}</td>
{{--                                    Muốn lấy ở vị trí nào--}}
{{--                                    @foreach($citie->customer as $cus)--}}
{{--                                    <td> {{$cus->name}}</td>--}}
{{--                                    @endforeach--}}
                                    <td>{{ count($city->customers) }}</td>


                                    <td><a href="{{route("cities.edit",$city->id)}}">sửa</a></td>
                                    <td><a href="" class="text-danger" onclick="return confirm('Bạn chắc chắn muốn xóa?')">xóa</a></td>
                                </tr>
                            @endforeach
                         @endif

                </tbody>
            </table>
            <a href="{{route('cities.create')}}" class="btn btn-primary"> thêm mới</a>
        </div>

    </div>
@endsection
