@extends('layouts.theme_for_admin')

@section('content')

<!--start page wrapper -->
<div class="page-wrapper">
    <div class="page-content">


    <div class="card">
        <div class="card-body p-4">
            <h5 class="card-title">
                เพิ่มรายการใหม่
                <div class="btn-group float-end" role="group" aria-label="Button group with nested dropdown">
                    <div class="btn-group" role="group">
                      <button id="btnGroupDrop1" type="button" class="btn btn-white dropdown-toggle dropdown-toggle-nocaret px-1" data-bs-toggle="dropdown" aria-expanded="false">
                        <i class='bx bx-chevron-down'></i>
                      </button>
                      <ul class="dropdown-menu" aria-labelledby="btnGroupDrop1">
                        <li><a class="dropdown-item" href="{{ url('/category_income_expense') }}">เพิ่มหมวดหมู่</a></li>
                      </ul>
                    </div>
                </div>
            </h5>
            <hr/>
        </div>
    </div>

        @if ($errors->any())
            <ul class="alert alert-danger">
                @foreach ($errors->all() as $error)
                    <li>{{ $error }}</li>
                @endforeach
            </ul>
        @endif

        <form method="POST" action="{{ url('/income_expense') }}" accept-charset="UTF-8" class="form-horizontal" enctype="multipart/form-data">
            {{ csrf_field() }}

            @include ('income_expense.form', ['formMode' => 'create'])

        </form>

    </div>
</div>
<!--end page wrapper -->

@endsection
