
<div class="form-group {{ $errors->has('pegawai_nomor') ? 'has-error' : '' }}">
    <label for="pegawai_nomor" class="col-md-2 control-label">Pegawai Nomor</label>
    <div class="col-md-10">
        <input class="form-control" name="pegawai_nomor" type="text" id="pegawai_nomor" value="{{ old('pegawai_nomor', optional($dokter)->pegawai_nomor) }}" maxlength="255" placeholder="Enter pegawai nomor here...">
        {!! $errors->first('pegawai_nomor', '<p class="help-block">:message</p>') !!}
    </div>
</div>

<div class="form-group {{ $errors->has('pegawai_nama') ? 'has-error' : '' }}">
    <label for="pegawai_nama" class="col-md-2 control-label">Pegawai Nama</label>
    <div class="col-md-10">
        <input class="form-control" name="pegawai_nama" type="text" id="pegawai_nama" value="{{ old('pegawai_nama', optional($dokter)->pegawai_nama) }}" maxlength="255" placeholder="Enter pegawai nama here...">
        {!! $errors->first('pegawai_nama', '<p class="help-block">:message</p>') !!}
    </div>
</div>

<div class="form-group {{ $errors->has('pegawai_jenis_kelamin') ? 'has-error' : '' }}">
    <label for="pegawai_jenis_kelamin" class="col-md-2 control-label">Pegawai Jenis Kelamin</label>
    <div class="col-md-10">
        <input class="form-control" name="pegawai_jenis_kelamin" type="text" id="pegawai_jenis_kelamin" value="{{ old('pegawai_jenis_kelamin', optional($dokter)->pegawai_jenis_kelamin) }}" maxlength="255" placeholder="Enter pegawai jenis kelamin here...">
        {!! $errors->first('pegawai_jenis_kelamin', '<p class="help-block">:message</p>') !!}
    </div>
</div>

<div class="form-group {{ $errors->has('pegawai_sip') ? 'has-error' : '' }}">
    <label for="pegawai_sip" class="col-md-2 control-label">Pegawai Sip</label>
    <div class="col-md-10">
        <input class="form-control" name="pegawai_sip" type="text" id="pegawai_sip" value="{{ old('pegawai_sip', optional($dokter)->pegawai_sip) }}" maxlength="255" placeholder="Enter pegawai sip here...">
        {!! $errors->first('pegawai_sip', '<p class="help-block">:message</p>') !!}
    </div>
</div>

