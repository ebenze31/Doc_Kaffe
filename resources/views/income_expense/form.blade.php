
<div class="card">
  <div class="card-body p-4">
        <div class="form-body mt-4">
        <div class="row">
           <div class="col-lg-8">
           <div class="border border-3 p-4 rounded">
            <div class="mb-3">
                <label for="title" class="form-label">ชื่อรายการ</label>
                <input class="form-control" name="title" type="text" id="title" placeholder="Enter product title" value="{{ isset($income_expense->title) ? $income_expense->title : ''}}" >
                {!! $errors->first('title', '<p class="help-block">:message</p>') !!}
              </div>
              <div class="mb-3">
                <label for="detail" class="form-label">รายละเอียด</label>
                <input class="form-control" name="detail" type="text" id="detail" value="{{ isset($income_expense->detail) ? $income_expense->detail : ''}}" >
                {!! $errors->first('detail', '<p class="help-block">:message</p>') !!}
              </div>
              <div class="mb-3">
                <label for="img" class="form-label">รูปภาพ</label>
                <input id="image-uploadify"  name="img" type="file" value="{{ isset($income_expense->img) ? $income_expense->img : ''}}" multiple accept=".xlsx,.xls,image/*,.doc,audio/*,.docx,video/*,.ppt,.pptx,.txt,.pdf">
                {!! $errors->first('img', '<p class="help-block">:message</p>') !!}
              </div>
            </div>
           </div>
           <div class="col-lg-4">
            <div class="border border-3 p-4 rounded">
              <div class="row g-3">
                
                  <div class="col-md-6">
                    <label for="price_per_piece" class="form-label">ราคาต่อชิ้น</label>
                    <input class="form-control" name="price_per_piece" min="0" type="number" id="price_per_piece" value="{{ isset($income_expense->price_per_piece) ? $income_expense->price_per_piece : ''}}" placeholder="00.00" oninput="sum_price();">
                    {!! $errors->first('price_per_piece', '<p class="help-block">:message</p>') !!}
                  </div>
                  <div class="col-md-6">
                    <label for="transportation_costs" class="form-label">ค่าขนส่ง</label>
                    <input class="form-control" name="transportation_costs" min="0" type="number" id="transportation_costs" value="{{ isset($income_expense->transportation_costs) ? $income_expense->transportation_costs : 0 }}" placeholder="00.00" oninput="sum_price();">
                    {!! $errors->first('transportation_costs', '<p class="help-block">:message</p>') !!}
                  </div>
                  <div class="col-md-6">
                    <label for="amount" class="form-label">จำนวน</label>
                    <input class="form-control" name="amount" type="number" min="1" id="amount" value="{{ isset($income_expense->amount) ? $income_expense->amount : ''}}" oninput="sum_price();">
                    {!! $errors->first('amount', '<p class="help-block">:message</p>') !!}
                  </div>
                  <div class="col-md-6">
                    <label for="total_price" class="form-label">ราคารวม</label>
                    <input class="form-control" name="total_price" type="number" min="0" id="total_price" value="{{ isset($income_expense->total_price) ? $income_expense->total_price : ''}}" readonly>
                    {!! $errors->first('total_price', '<p class="help-block">:message</p>') !!}
                  </div>
                  <div class="col-12">
                    <label for="category" class="form-label">หมวดหมู่</label>
                    <select name="category" id="category" class="form-control">
                        @if(!empty($income_expense->category))
                            <option value="{{ $income_expense->category }}" selected >{{ $income_expense->category }}</option>
                        @else
                            <option value="" selected >เลือกหมวดหมู่</option>
                        @endif
                        @foreach($category as $item)
                            <option value="{{ $item->title }}" >{{ $item->title }}</option>
                        @endforeach
                    </select>
                    {!! $errors->first('category', '<p class="help-block">:message</p>') !!}
                  </div>
                  <div class="col-12">
                    <label for="type" class="form-label">รายรับ / รายจ่าย</label>
                    <select name="type" id="type" class="form-control">
                        @if(!empty($income_expense->type))
                            <option value="{{ $income_expense->type }}" selected >{{ $income_expense->type }}</option>
                        @else
                            <option value="" selected >เลือกประเภท</option>
                        @endif
                        <option value="รายรับ" >รายรับ</option>
                        <option value="รายจ่าย" >รายจ่าย</option>
                    </select>
                    {!! $errors->first('type', '<p class="help-block">:message</p>') !!}
                  </div>
                  <div class="col-12">
                      <div class="d-grid">
                        <input class="btn btn-primary" type="submit" value="{{ $formMode === 'edit' ? 'Update' : 'Create' }}">
                      </div>
                  </div>
              </div> 
          </div>
          </div>
       </div><!--end row-->
    </div>
  </div>
</div>

<script>
    function sum_price() {
        let price_per_piece = document.querySelector('#price_per_piece').value ;
        let amount = document.querySelector('#amount').value ;
        let transportation_costs = document.querySelector('#transportation_costs').value ;

        if (price_per_piece && amount && transportation_costs) {
            let sum = ( parseInt(price_per_piece) * parseInt(amount) ) + parseInt(transportation_costs) ;
            document.querySelector('#total_price').value = sum ;
        }
    }
</script>

<script>
    $(document).ready(function () {
        $('#image-uploadify').imageuploadify();
    })
</script>