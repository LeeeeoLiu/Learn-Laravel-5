@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-10 col-md-offset-1">
            <div class="panel panel-default">
                <div class="panel-heading">Dashboard</div>

                <div class="panel-body">
                    You are logged in!
                </div>
                <a href="{{ url('admin/article/') }}" class="btn btn-lg btn-primary">查看文章</a>

            </div>
        </div>
    </div>
</div>
@endsection
