@extends('layouts.theme_for_admin')

@section('content')

<!--start page wrapper -->
<div class="page-wrapper">
    <div class="page-content">

        <div class="card">
            <div class="card-body p-4">
                <h5 class="card-title">
                    แก้ไขข้อมูล #{{ $income_expense->id }} : <span class="text-info">{{ $income_expense->title }}</span>
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

        <form method="POST" action="{{ url('/income_expense/' . $income_expense->id) }}" accept-charset="UTF-8" class="form-horizontal" enctype="multipart/form-data">
            {{ method_field('PATCH') }}
            {{ csrf_field() }}

            @include ('income_expense.form', ['formMode' => 'edit'])

        </form>

    </div>
</div>
<!--end page wrapper -->

@endsection
