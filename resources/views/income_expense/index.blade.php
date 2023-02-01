@extends('layouts.theme_for_admin')

@section('content')
    
    <!--start page wrapper -->
    <div class="page-wrapper">
        <div class="page-content">

            <div class="row">
                <div class="col-12">
                    <div class="card">
                        <div class="card-body">
                            <div class="row align-items-center">
                                <div class="col-6 col-lg-6 col-xl-6">
                                    <h3 class="text-dark">รายรับ-รายจ่าย</h3>
                                </div>
                                <div class="col-6 col-lg-6 col-xl-6">
                                    <a href="{{ url('/income_expense/create') }}" class="btn btn-primary mb-3 mb-lg-0 float-end">
                                        <i class='bx bxs-plus-square'></i> เพิ่มข้อมูล
                                    </a>
                                </div>
                            </div>
                            <br>
                            <div class="row align-items-center">
                                <div class="col-lg-12 col-xl-12">
                                    <form class="float-lg-end">
                                        <div class="row row-cols-lg-auto g-2">
                                            <div class="col-12">
                                                <div class="position-relative">
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
                                            <div class="col-6">
                                                <div style="width:100%;" class="btn-group" role="group" aria-label="Button group with nested dropdown">
                                                    <button type="button" class="btn btn-white">Sort By</button>
                                                    <div class="btn-group" role="group">
                                                      <button id="btnGroupDrop1" type="button" class="btn btn-white dropdown-toggle dropdown-toggle-nocaret px-1" data-bs-toggle="dropdown" aria-expanded="false">
                                                        <i class='bx bx-chevron-down'></i>
                                                      </button>
                                                      <ul class="dropdown-menu" aria-labelledby="btnGroupDrop1">
                                                        <li><a class="dropdown-item" href="#">Dropdown link</a></li>
                                                        <li><a class="dropdown-item" href="#">Dropdown link</a></li>
                                                      </ul>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="col-6">
                                                <div style="width:100%;" class="btn-group" role="group">
                                                    <button type="button" class="btn btn-white">Price Range</button>
                                                    <div class="btn-group" role="group">
                                                      <button id="btnGroupDrop1" type="button" class="btn btn-white dropdown-toggle dropdown-toggle-nocaret px-1" data-bs-toggle="dropdown" aria-expanded="false">
                                                        <i class='bx bx-slider'></i>
                                                      </button>
                                                      <ul class="dropdown-menu dropdown-menu-start" aria-labelledby="btnGroupDrop1">
                                                        <li><a class="dropdown-item" href="#">Dropdown link</a></li>
                                                        <li><a class="dropdown-item" href="#">Dropdown link</a></li>
                                                      </ul>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </form>
                                </div>
                            </div>
                            <br>
                            <div class="row align-items-center">
                                <div class="col-lg-12 col-xl-12">
                                    <div class="row row-cols-1 row-cols-md-2 row-cols-xl-4">
                                        <div class="col">
                                            <div class=" radius-10 bg- bg-">
                                                <div class="card-body">
                                                    <div class="d-flex align-items-center">
                                                        <!--  -->
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col">
                                            <div class="card radius-10 bg-success bg-gradient">
                                                <div class="card-body">
                                                    <div class="d-flex align-items-center">
                                                        <div>
                                                            <p class="mb-0 text-white">รายรับ <b>{{ $count_income }}</b> รายการ</p>
                                                            <h4 class="my-1 text-white">{{ $sum_income }}</h4>
                                                        </div>
                                                        <div class="text-white ms-auto font-35"><i class='bx bx-cart-alt'></i>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col">
                                            <div class="card radius-10 bg-danger bg-gradient">
                                                <div class="card-body">
                                                    <div class="d-flex align-items-center">
                                                        <div>
                                                            <p class="mb-0 text-white">รายจ่าย <b>{{ $count_expense }}</b> รายการ</p>
                                                            <h4 class="my-1 text-white">{{ $sum_expense }}</h4>
                                                        </div>
                                                        <div class="text-white ms-auto font-35"><i class='bx bx-dollar'></i>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col">
                                            <div class="card radius-10 bg-info bg-gradient">
                                                <div class="card-body">
                                                    <div class="d-flex align-items-center">
                                                        <div>
                                                            <p class="mb-0 text-white">รวม <b>{{ $count_income + $count_expense }}</b> รายการ</p>
                                                            <h4 class="my-1 text-white">{{ $total_money }}</h4>
                                                        </div>
                                                        <div class="text-white ms-auto font-35">
                                                            <i class="fa-solid fa-money-check-dollar-pen"></i>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <!--end row-->
                                </div>
                            </div>
                            <br>
                            <div class="row align-items-center">
                                <div class="col-lg-12 col-xl-12">
                                    <div class="pagination-wrapper float-end"> 
                                        {!! $income_expense->appends(['search' => Request::get('search')])->render() !!} 
                                    </div>
                                </div>
                            </div>
                            <br>
                            <div class="row align-items-center">
                                <div class="col-lg-12 col-xl-12">
                                    <div class="row row-cols-1 row-cols-sm-2 row-cols-lg-3 row-cols-xl-4 row-cols-xxl-5 product-grid">
                                        @foreach($income_expense as $item)
                                        <div class="col">
                                            <div class="card">
                                                @if( !empty($item->img))
                                                    <img style="  width: 100%;height: 300px;object-fit: contain; " src="{{ url('storage')}}/{{ $item->img }}" class="card-img-top center" style="padding: 10px;">
                                                @else
                                                    <img style="  width: 100%;height: 300px;object-fit: contain; " src="{{ url('/img/logo/Doc. Kaffe.png')}}" class="card-img-top center" style="padding: 10px;">
                                                @endif  

                                                <div class="">
                                                    @if( $item->type == 'รายจ่าย')
                                                        <div class="text-center" style="width:30%;position: absolute;right: 5px;top: 5px;">
                                                            <span class="btn btn-sm btn-danger main-shadow main-radius">รายจ่าย</span>
                                                        </div>
                                                    @elseif( $item->type == 'รายรับ')
                                                        <div class="text-center" style="width:30%;position: absolute;right: 5px;top: 5px;">
                                                            <span class="btn btn-sm btn-success main-shadow main-radius">รายรับ</span>
                                                        </div>
                                                    @endif
                                                </div>
                                                <div class="card-body">
                                                    <h6 class="card-title cursor-pointer" style="line-height:1em;white-space: nowrap;overflow: hidden;text-overflow: ellipsis;">
                                                        <b>{{ $item->title }}</b>
                                                    </h6>
                                                    <div class="clearfix">
                                                        <p class="mb-0 float-start"><strong><u>{{ $item->category }}</u></strong></p>
                                                        <p class="mb-0 float-end fw-bold"><span></span></p>
                                                        <br>
                                                        <p>{{ $item->detail }}</p>
                                                    </div>
                                                    <div class="d-flex align-items-center mt-3 fs-6">
                                                        <div class="cursor-pointer">
                                                            ราคา : <b>{{ $item->price_per_piece }}</b>
                                                        </div>
                                                        <div class="mb-0 ms-auto">
                                                            จำนวน : <b>{{ $item->amount }}</b>
                                                        </div>
                                                    </div>
                                                    <div class="d-flex align-items-center mt-3 fs-6">
                                                        <h4 class="mb-0 ms-auto">
                                                            รวม : <b class="text-info">{{ $item->total_price }}</b> บาท
                                                        </h4>
                                                    </div>
                                                </div>
                                                <div id="accordionExample_{{ $item->id }}">
                                                    <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapse_{{ $item->id }}" aria-expanded="true" aria-controls="collapse_{{ $item->id }}"></button>
                                                    <div id="collapse_{{ $item->id }}" class="accordion-collapse collapse" aria-labelledby="heading_{{ $item->id }}" data-bs-parent="#accordionExample_{{ $item->id }}">
                                                        <div class="accordion-body float-end">
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
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        @endforeach
                                    </div>
                                </div>
                            </div>

                        </div>
                    </div>
                </div>
            </div>

            


        </div>
    </div>
    <!--end page wrapper -->


@endsection
