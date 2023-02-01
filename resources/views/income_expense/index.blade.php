@extends('layouts.theme_for_admin')

@section('content')
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-body">
                        <div class="col-12">
                            <div class="row">
                                <div class="col-6 col-md-10">
                                    <h3 class="text-dark">รายรับ - รายจ่าย</h3>
                                </div>
                                <div class="col-6 col-md-2">
                                    <a style="width:100%;float: right;" href="{{ url('/income_expense/create') }}" class="btn btn-success btn-sm" title="Add New Income_expense">
                                        เพิ่มข้อมูล <i class="fa fa-plus" aria-hidden="true"></i> 
                                    </a>
                                </div>
                                <hr>
                                <div class="col-12 col-md-8"></div>
                                <div class="col-12 col-md-4">
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
                                </div>
                            </div>
                        </div>

                        <br/>
                        <hr style="border: solid 1px #8E5926;">
                        <br/>

                        <div class="row">
                            @foreach($income_expense as $item)
                            <div class="col-12 col-md-3">
                                <div class="card">
                                    <div class="col-12">
                                        @if( $item->type == 'รายจ่าย')
                                            <span style="width:40%;margin-top: 10px;margin-right: 10px;" class="btn btn-sm btn-danger main-shadow main-radius float-end">
                                                รายจ่าย
                                            </span>
                                        @elseif( $item->type == 'รายรับ')
                                            <span style="width:40%;margin-top: 10px;margin-right: 10px;" class="btn btn-sm btn-success main-shadow main-radius float-end">
                                                รายรับ
                                            </span>
                                        @endif
                                    </div>
                                    <center>
                                        @if( !empty($item->img))
                                            <br>
                                            <img style="width: 65%;border-radius: 50%;border: solid 4px #8E5926;" src="{{ url('storage')}}/{{ $item->img }}" class="card-img-top">
                                        @else
                                            <br>
                                            <img style="width: 65%;border-radius: 50%;border: solid 4px #8E5926;" src="{{ url('/img/logo/Doc. Kaffe.png')}}" class="card-img-top">
                                        @endif  
                                    </center>
                                    <br>
                                    <div class="row mt-1 text-center">
                                        <div class="col-12">
                                            <span style="width:80%;" class="text-dark">
                                                หมวดหมู่ : <b>{{ $item->category }}</b>
                                            </span>
                                        </div>
                                    </div>
                                    <center>
                                        <hr style="border: solid 0.5px #8E5926;width: 85%;">
                                    </center>
                                    <div class="card-body">
                                        <h4 class="card-title text-center text-info">
                                            <b><u>{{ $item->title }}</u></b>
                                        </h4>
                                        <p>{{ $item->detail }}</p>
                                        <br>
                                        <div class="row text-center">
                                            <div class="col-6">
                                                <p style="font-size: 18px;">ราคา : <b>{{ $item->price_per_piece }}</b> บาท/ชิ้น </p>
                                            </div>
                                            <div class="col-6">
                                                <p style="font-size: 18px;">จำนวน : <b>{{ $item->amount }}</b> ชิ้น </p>
                                            </div>
                                            <div class="col-12">
                                                <p style="font-size: 18px;">รวม : <b>{{ $item->total_price }}</b> บาท </p>
                                            </div>
                                            <center>
                                                <hr style="border: solid 0.5px #8E5926;width: 50%;">
                                            </center>
                                            <div class="col-12">
                                                <!-- <a href="{{ url('/income_expense/' . $item->id) }}" title="View Income_expense">
                                                    <button class="btn btn-info btn-sm text-white">
                                                        <i class="fa fa-eye" aria-hidden="true"></i> View
                                                    </button>
                                                </a> -->
                                                <a href="{{ url('/income_expense/' . $item->id . '/edit') }}" title="Edit Income_expense">
                                                    <button class="btn btn-primary btn-sm">
                                                        <i class="fa-solid fa-pen-to-square"></i> แก้ไข
                                                    </button>
                                                </a>
                                                <form method="POST" action="{{ url('/income_expense' . '/' . $item->id) }}" accept-charset="UTF-8" style="display:inline">
                                                    {{ method_field('DELETE') }}
                                                    {{ csrf_field() }}
                                                    <button type="submit" class="btn btn-danger btn-sm" title="Delete Income_expense" onclick="return confirm(&quot;Confirm delete?&quot;)">
                                                        <i class="fa-solid fa-trash-xmark"></i> ลบ
                                                    </button>
                                                </form>
                                            </div>
                                            <div class="col-12">
                                                <br>
                                                <div class="pagination-wrapper"> 
                                                    {!! $income_expense->appends(['search' => Request::get('search')])->render() !!} 
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            @endforeach
                        </div>

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
                                        <td>{{ $item->title }}</td><td>{{ $item->detail }}</td><td>{{ $item->category }}</td><td>{{ $item->type }}</td><td></td><td>{{ $item->price_per_piece }}</td><td>{{ $item->amount }}</td>
                                        <td>
                                            
                                        </td>
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
