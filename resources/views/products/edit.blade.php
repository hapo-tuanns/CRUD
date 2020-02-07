@extends('products.layout')
   
@section('content')
    <div class="row">
        <div class="col-lg-12 margin-tb">
            <div class="pull-left">
                <h2>Edit Members</h2>
            </div>
            <div class="pull-right">
                <a class="btn btn-primary" href="{{ route('products.index') }}"> Back</a>
            </div>
        </div>
    </div>
    <form action="{{ route('products.update',$product->id) }}" method="POST">
        @csrf
        @method('PUT')
   
         <div class="row">
            <div class="col-xs-12 col-sm-12 col-md-12">
                <div class="form-group">
                    <strong>Name:</strong>
                    <input type="text" name="name" value="{{ $product->name }}" class="form-control" placeholder="Name">
                </div>
            </div>
        @if ($errors->has('name'))
            <div class="alert alert-danger">
                <strong>Lỗi!</strong> Bạn cần nhập lại.<br><br>
                 <ul>
                @foreach ($errors->get('name') as $errormessage)
                    <li>{{ $errormessage }}</li>
                @endforeach
                </ul>
            </div>
        @endif
            <div class="col-xs-12 col-sm-12 col-md-12">
                <div class="form-group">
                    <strong>Detail:</strong>
                    <textarea class="form-control" name="detail" placeholder="Detail">{{ $product->detail }}</textarea>
                </div>
            </div>
        @if ($errors->has('detail'))
            <div class="alert alert-danger">
                <strong>Lỗi!</strong> Bạn cần nhập lại.<br><br>
                 <ul>
                @foreach ($errors->get('detail') as $errormessage)
                    <li>{{ $errormessage }}</li>
                @endforeach
                </ul>
            </div>
        @endif  
            <div class="col-xs-12 col-sm-12 col-md-12 text-center">
              <button type="submit" class="btn btn-primary">Submit</button>
            </div>
        </div>
   
    </form>
@endsection
