@extends('layoutAdmin')
@section('title')
    Thêm mới tài khoản
@endsection
@section('content')
    @if ($errors->any())
        <div class="alert alert-danger">
            <ul>
                @foreach ($errors->all() as $error)
                    <li>{{ $error }}</li>
                @endforeach
            </ul>
        </div>
    @endif
    @if(session('success'))
        <div>
            {{session('success')}}
        </div>
    @endif
    @if(session('error'))
        <div>
            {{session('error')}}
        </div>
    @endif
    <form action="{{route('postRegister')}}" method="POST" enctype="multipart/form-data">
        @csrf
        <div class="mb-3">
            <label class="form-label">Name</label>
            <input type="text" class="form-control" name="name" placeholder="Nguyễn Văn A" value="{{old('name')}}">
            @error('name')
            <div class="alert alert-danger">{{ $message }}</div>
            @enderror
        </div>
        <div class="mb-3">
            <label class="form-label">Email</label>
            <input type="email" class="form-control" name="email" value="{{old('email')}}">
        </div>
        <div class="mb-3">
            <label class="form-label">Password</label>
            <input type="password" class="form-control" name="password" value="{{old('password')}}">
        </div>
        <button type="submit" class="btn btn-primary">Đăng Ký</button>
    </form>
@endsection
