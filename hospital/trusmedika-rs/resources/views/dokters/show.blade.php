@extends('layouts.app')

@section('content')

<div class="panel panel-default">
    <div class="panel-heading clearfix">

        <span class="pull-left">
            <h4 class="mt-5 mb-5">{{ isset($title) ? $title : 'Dokter' }}</h4>
        </span>

        <div class="pull-right">

            <form method="POST" action="{!! route('dokters.dokter.destroy', $dokter->pegawai_id) !!}" accept-charset="UTF-8">
            <input name="_method" value="DELETE" type="hidden">
            {{ csrf_field() }}
                <div class="btn-group btn-group-sm" role="group">
                    <a href="{{ route('dokters.dokter.index') }}" class="btn btn-primary" title="Show All Dokter">
                        <span class="glyphicon glyphicon-th-list" aria-hidden="true"></span>
                    </a>

                    <a href="{{ route('dokters.dokter.create') }}" class="btn btn-success" title="Create New Dokter">
                        <span class="glyphicon glyphicon-plus" aria-hidden="true"></span>
                    </a>
                    
                    <a href="{{ route('dokters.dokter.edit', $dokter->pegawai_id ) }}" class="btn btn-primary" title="Edit Dokter">
                        <span class="glyphicon glyphicon-pencil" aria-hidden="true"></span>
                    </a>

                    <button type="submit" class="btn btn-danger" title="Delete Dokter" onclick="return confirm(&quot;Click Ok to delete Dokter.?&quot;)">
                        <span class="glyphicon glyphicon-trash" aria-hidden="true"></span>
                    </button>
                </div>
            </form>

        </div>

    </div>

    <div class="panel-body">
        <dl class="dl-horizontal">
            <dt>Pegawai Nomor</dt>
            <dd>{{ $dokter->pegawai_nomor }}</dd>
            <dt>Pegawai Nama</dt>
            <dd>{{ $dokter->pegawai_nama }}</dd>
            <dt>Pegawai Jenis Kelamin</dt>
            <dd>{{ $dokter->pegawai_jenis_kelamin }}</dd>
            <dt>Pegawai Sip</dt>
            <dd>{{ $dokter->pegawai_sip }}</dd>

        </dl>

    </div>
</div>

@endsection