@extends('home')
@section('title','thêm các tỉnh')
@section('content')
    <div class="col-12">
        <div class="row">
            <div class="col-12">
                <h1>Thêm mới các tĩnh thành</h1>
            </div>
            <div class="col-12">
                <form action="{{route('cities.store')}}" method="POST">
                @csrf
                <div class="form-group">
                    <label for="">tĩnh thành</label>
                    <input type="text" class="form-control" name="name" placeholder="enter name" required>
                </div>
                <button type="submit" class="btn btn-primary"> thêm mới</button>
                <button class="btn btn-secondary" onclick="window.history.go(-1); return false;"> hủy</button>
                </form>
            </div>
        </div>

    </div>
@endsection
