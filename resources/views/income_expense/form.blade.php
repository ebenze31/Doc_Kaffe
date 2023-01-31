<div class="form-group {{ $errors->has('title') ? 'has-error' : ''}}">
    <label for="title" class="control-label">{{ 'ชื่อรายการ' }}</label>
    <input class="form-control" name="title" type="text" id="title" value="{{ isset($income_expense->title) ? $income_expense->title : ''}}" >
    {!! $errors->first('title', '<p class="help-block">:message</p>') !!}
</div>
<div class="form-group {{ $errors->has('detail') ? 'has-error' : ''}}">
    <label for="detail" class="control-label">{{ 'รายละเอียด' }}</label>
    <input class="form-control" name="detail" type="text" id="detail" value="{{ isset($income_expense->detail) ? $income_expense->detail : ''}}" >
    {!! $errors->first('detail', '<p class="help-block">:message</p>') !!}
</div>
<div class="row">
    <div class="col-10">
        <div class="form-group {{ $errors->has('category') ? 'has-error' : ''}}">
            <label for="category" class="control-label">{{ 'หมวดหมู่' }}</label>
            <!-- <input class="form-control" name="category" type="text" id="category" value="{{ isset($income_expense->category) ? $income_expense->category : ''}}" > -->
            <select name="category" id="category" class="form-control">
                    <option value="" selected >เลือกหมวดหมู่</option>
                    @foreach($category as $item)
                        <option value="{{ $item->title }}" >{{ $item->title }}</option>
                    @endforeach
            </select>
            {!! $errors->first('category', '<p class="help-block">:message</p>') !!}
        </div>
    </div>
    <div class="col-2">
        <br>
        <a style="width: 100%;" href="{{ url('/category_income_expense') }}" class="btn btn-primary">
            เพิ่มหมวดหมู่
        </a>
    </div>
</div>

<div class="form-group {{ $errors->has('type') ? 'has-error' : ''}}">
    <label for="type" class="control-label">{{ 'รายรับ / รายจ่าย' }}</label>
    <!-- <input class="form-control" name="type" type="text" id="type" value="{{ isset($income_expense->type) ? $income_expense->type : ''}}" > -->
    <select name="type" id="type" class="form-control">
            <option value="" selected >เลือกประเภท</option>
            <option value="รายรับ" >รายรับ</option>
            <option value="รายจ่าย" >รายจ่าย</option>
    </select>
    {!! $errors->first('type', '<p class="help-block">:message</p>') !!}
</div>
<div class="form-group {{ $errors->has('img') ? 'has-error' : ''}}">
    <label for="img" class="control-label">{{ 'รูปภาพ' }}</label>
    <input class="form-control" name="img" type="file" id="img" value="{{ isset($income_expense->img) ? $income_expense->img : ''}}" >
    {!! $errors->first('img', '<p class="help-block">:message</p>') !!}
</div>
<div class="form-group {{ $errors->has('price_per_piece') ? 'has-error' : ''}}">
    <label for="price_per_piece" class="control-label">{{ 'ราคาต่อชิ้น' }}</label>
    <input class="form-control" name="price_per_piece" type="number" id="price_per_piece" value="{{ isset($income_expense->price_per_piece) ? $income_expense->price_per_piece : ''}}" oninput="sum_price();">
    {!! $errors->first('price_per_piece', '<p class="help-block">:message</p>') !!}
</div>
<div class="form-group {{ $errors->has('amount') ? 'has-error' : ''}}">
    <label for="amount" class="control-label">{{ 'จำนวน' }}</label>
    <input class="form-control" name="amount" type="number" id="amount" value="{{ isset($income_expense->amount) ? $income_expense->amount : ''}}" oninput="sum_price();">
    {!! $errors->first('amount', '<p class="help-block">:message</p>') !!}
</div>

<div class="form-group {{ $errors->has('total_price') ? 'has-error' : ''}}">
    <label for="total_price" class="control-label">{{ 'ราคารวม' }}</label>
    <input class="form-control" name="total_price" type="number" id="total_price" value="{{ isset($income_expense->total_price) ? $income_expense->total_price : ''}}" readonly>
    {!! $errors->first('total_price', '<p class="help-block">:message</p>') !!}
</div>
<br>

<div class="form-group">
    <input class="btn btn-primary" type="submit" value="{{ $formMode === 'edit' ? 'Update' : 'Create' }}">
</div>


<script>
    function sum_price() {
        let price_per_piece = document.querySelector('#price_per_piece').value ;
        let amount = document.querySelector('#amount').value ;

        if (price_per_piece && amount) {
            let sum = parseInt(price_per_piece) * parseInt(amount)
            document.querySelector('#total_price').value = sum ;
        }
    }
</script>