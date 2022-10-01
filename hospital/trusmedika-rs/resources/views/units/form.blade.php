
<div class="form-group {{ $errors->has('unit_kode') ? 'has-error' : '' }}">
    <label for="unit_kode" class="col-md-2 control-label">Unit Kode</label>
    <div class="col-md-10">
        <input class="form-control" name="unit_kode" type="text" id="unit_kode" value="{{ old('unit_kode', optional($unit)->unit_kode) }}" maxlength="255" placeholder="Enter unit kode here...">
        {!! $errors->first('unit_kode', '<p class="help-block">:message</p>') !!}
    </div>
</div>

<div class="form-group {{ $errors->has('unit_nama') ? 'has-error' : '' }}">
    <label for="unit_nama" class="col-md-2 control-label">Unit Nama</label>
    <div class="col-md-10">
        <input class="form-control" name="unit_nama" type="text" id="unit_nama" value="{{ old('unit_nama', optional($unit)->unit_nama) }}" maxlength="255" placeholder="Enter unit nama here...">
        {!! $errors->first('unit_nama', '<p class="help-block">:message</p>') !!}
    </div>
</div>

