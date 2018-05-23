@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row">
            <div class="col-md-8 col-md-offset-2">
                <div class="panel panel-info">
                    <div class="panel-heading">商品一覧</div>
                    <div class="panel-body">
                        @if (Session::has('info'))
                            <div class="alert alert-success">
                                <a class="close" data-dismiss="alert">×</a>
                                {{ Session::get('info') }}
                            </div>
                        @elseif (Session::has('error'))
                            <div class="alert alert-danger">
                                <a class="close" data-dismiss="alert">×</a>
                                {{ Session::get('error') }}
                            </div>
                        @endif
                        <a class="btn btn-primary" href="{{ route('product::create') }}" role="button">新規登録</a>
                        <div class="table-responsive">
                            <table class="table table-striped">
                                <thead>
                                <tr>
                                    <th>商品名</th>
                                    <th>ジャンル</th>
                                    <th>値段</th>
                                </tr>
                                </thead>
                                <tbody>
                                @foreach($productList as $product)
                                    <tr>
                                        <td>{{ $product->getName() }}</td>
                                        <td>{{ $product->getGenre() }}</td>
                                        <td>{{ $product->getPrice() }}</td>
                                    </tr>
                                @endforeach
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
