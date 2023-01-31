@extends('layouts.theme_for_admin')

@section('content')
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-header">Income_expense {{ $income_expense->id }}</div>
                    <div class="card-body">

                        <a href="{{ url('/income_expense') }}" title="Back"><button class="btn btn-warning btn-sm"><i class="fa fa-arrow-left" aria-hidden="true"></i> Back</button></a>
                        <a href="{{ url('/income_expense/' . $income_expense->id . '/edit') }}" title="Edit Income_expense"><button class="btn btn-primary btn-sm"><i class="fa fa-pencil-square-o" aria-hidden="true"></i> Edit</button></a>

                        <form method="POST" action="{{ url('income_expense' . '/' . $income_expense->id) }}" accept-charset="UTF-8" style="display:inline">
                            {{ method_field('DELETE') }}
                            {{ csrf_field() }}
                            <button type="submit" class="btn btn-danger btn-sm" title="Delete Income_expense" onclick="return confirm(&quot;Confirm delete?&quot;)"><i class="fa fa-trash-o" aria-hidden="true"></i> Delete</button>
                        </form>
                        <br/>
                        <br/>

                        <div class="table-responsive">
                            <table class="table">
                                <tbody>
                                    <tr>
                                        <th>ID</th><td>{{ $income_expense->id }}</td>
                                    </tr>
                                    <tr><th> Title </th><td> {{ $income_expense->title }} </td></tr><tr><th> Detail </th><td> {{ $income_expense->detail }} </td></tr><tr><th> Category </th><td> {{ $income_expense->category }} </td></tr><tr><th> Type </th><td> {{ $income_expense->type }} </td></tr><tr><th> Img </th><td> {{ $income_expense->img }} </td></tr><tr><th> Price Per Piece </th><td> {{ $income_expense->price_per_piece }} </td></tr><tr><th> Amount </th><td> {{ $income_expense->amount }} </td></tr>
                                </tbody>
                            </table>
                        </div>

                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
