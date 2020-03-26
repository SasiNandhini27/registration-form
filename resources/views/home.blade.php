@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">Dashboard</div>

                <div class="card-body">
                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif

                    Account has been created!!!
                </div>
                <div>Click on the Below button to List the Books...
                    <a href="{{ route('books.index')}}" class="btn btn-primary">Books Details</a>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
