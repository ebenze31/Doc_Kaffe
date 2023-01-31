@extends('layouts.theme_for_admin')

@section('content')
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-header">Income_expense</div>
                    <div class="card-body">
                        <a href="{{ url('/income_expense/create') }}" class="btn btn-success btn-sm" title="Add New Income_expense">
                            <i class="fa fa-plus" aria-hidden="true"></i> Add New
                        </a>

                        <form method="GET" action="{{ url('/income_expense') }}" accept-charset="UTF-8" class="form-inline my-2 my-lg-0 float-right" role="search">
                            <div class="input-group">
                                <input type="text" class="form-control" name="search" placeholder="Search..." value="{{ request('search') }}">
                                <span class="input-group-append">
                                    <button class="btn btn-secondary" type="submit">
                                        <i class="fa fa-search"></i>
                                    </button>
                                </span>
                            </div>
                        </form>

                        <br/>
                        <br/>
                        <div class="table-responsive">
                            <table class="table">
                                <thead>
                                    <tr>
                                        <th>#</th><th>Title</th><th>Detail</th><th>Category</th><th>Type</th><th>Img</th><th>Price Per Piece</th><th>Amount</th><th>Actions</th>
                                    </tr>
                                </thead>
                                <tbody>
                                @foreach($income_expense as $item)
                                    <tr>
                                        <td>{{ $loop->iteration }}</td>
                                        <td>{{ $item->title }}</td><td>{{ $item->detail }}</td><td>{{ $item->category }}</td><td>{{ $item->type }}</td><td><img width="70%" src="{{ url('storage')}}/{{ $item->img }}"></td><td>{{ $item->price_per_piece }}</td><td>{{ $item->amount }}</td>
                                        <td>
                                            <a href="{{ url('/income_expense/' . $item->id) }}" title="View Income_expense"><button class="btn btn-info btn-sm"><i class="fa fa-eye" aria-hidden="true"></i> View</button></a>
                                            <a href="{{ url('/income_expense/' . $item->id . '/edit') }}" title="Edit Income_expense"><button class="btn btn-primary btn-sm"><i class="fa fa-pencil-square-o" aria-hidden="true"></i> Edit</button></a>

                                            <form method="POST" action="{{ url('/income_expense' . '/' . $item->id) }}" accept-charset="UTF-8" style="display:inline">
                                                {{ method_field('DELETE') }}
                                                {{ csrf_field() }}
                                                <button type="submit" class="btn btn-danger btn-sm" title="Delete Income_expense" onclick="return confirm(&quot;Confirm delete?&quot;)"><i class="fa fa-trash-o" aria-hidden="true"></i> Delete</button>
                                            </form>
                                        </td>
                                    </tr>
                                @endforeach
                                </tbody>
                            </table>
                            <div class="pagination-wrapper"> {!! $income_expense->appends(['search' => Request::get('search')])->render() !!} </div>
                        </div>

                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
