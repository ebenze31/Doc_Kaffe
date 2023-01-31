<div class="form-group {{ $errors->has('title') ? 'has-error' : ''}}">
    <label for="title" class="control-label">{{ 'Title' }}</label>
    <input class="form-control" name="title" type="text" id="title" value="{{ isset($category_income_expense->title) ? $category_income_expense->title : ''}}" >
    {!! $errors->first('title', '<p class="help-block">:message</p>') !!}
</div>
<div class="form-group {{ $errors->has('icon') ? 'has-error' : ''}}">
    <label for="icon" class="control-label">{{ 'Icon' }}</label>
    <input class="form-control" name="icon" type="file" id="icon" value="{{ isset($category_income_expense->icon) ? $category_income_expense->icon : ''}}" >
    {!! $errors->first('icon', '<p class="help-block">:message</p>') !!}
</div>


<div class="form-group">
    <input class="btn btn-primary" type="submit" value="{{ $formMode === 'edit' ? 'Update' : 'Create' }}">
</div>
