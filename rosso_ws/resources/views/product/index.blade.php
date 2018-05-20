@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row">
            <div class="col-md-8 col-md-offset-2">
                <div class="panel panel-default">
                    <div class="panel-heading">商品一覧</div>
                    <div class="panel-body">
                        <div class="table-responsive">
                            <table class="table table-striped">
                                <thead>
                                <tr>
                                    <th>カラム名①</th><th>カラム名②</th><th>カラム名③</th>
                                </tr>
                                </thead>
                                <tbody>
                                <tr>
                                    <td>データ①</td><td>データ②</td><td>データ③</td>
                                </tr>
                                <tr>
                                    <td>データ④</td><td>データ⑤</td><td>データ⑥</td>
                                </tr>
                                <tr>
                                    <td>データ⑦</td><td>データ⑧</td><td>データ⑨</td>
                                </tr>
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
