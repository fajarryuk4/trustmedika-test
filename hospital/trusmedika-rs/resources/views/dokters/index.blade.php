@extends('layouts.app')

@section('content')

    @if(Session::has('success_message'))
        <div class="alert alert-success">
            <span class="glyphicon glyphicon-ok"></span>
            {!! session('success_message') !!}

            <button type="button" class="close" data-dismiss="alert" aria-label="close">
                <span aria-hidden="true">&times;</span>
            </button>

        </div>
    @endif

    <div class="panel panel-default">

        <div class="panel-heading clearfix">

            <div class="pull-left">
                <h4 class="mt-5 mb-5">Dokters</h4>
            </div>

            <div class="btn-group btn-group-sm pull-right" role="group">
                <a href="{{ route('dokters.dokter.create') }}" class="btn btn-success" title="Create New Dokter">
                    <span class="glyphicon glyphicon-plus" aria-hidden="true"></span>
                </a>
            </div>

        </div>
        
        @if(count($dokters) == 0)
            <div class="panel-body text-center">
                <h4>No Dokters Available.</h4>
            </div>
        @else
        <div class="panel-body panel-body-with-table">
            <div class="table-responsive">

                <table class="table table-striped ">
                    <thead>
                        <tr>
                            <th>Pegawai Nomor</th>
                            <th>Pegawai Nama</th>
                            <th>Pegawai Jenis Kelamin</th>
                            <th>Pegawai Sip</th>

                            <th></th>
                        </tr>
                    </thead>
                    <tbody>
                    @foreach($dokters as $dokter)
                        <tr>
                            <td>{{ $dokter->pegawai_nomor }}</td>
                            <td>{{ $dokter->pegawai_nama }}</td>
                            <td>{{ $dokter->pegawai_jenis_kelamin }}</td>
                            <td>{{ $dokter->pegawai_sip }}</td>

                            <td>

                                <form method="POST" action="{!! route('dokters.dokter.destroy', $dokter->pegawai_id) !!}" accept-charset="UTF-8">
                                <input name="_method" value="DELETE" type="hidden">
                                {{ csrf_field() }}

                                    <div class="btn-group btn-group-xs pull-right" role="group">
                                        <a href="{{ route('dokters.dokter.show', $dokter->pegawai_id ) }}" class="btn btn-info" title="Show Dokter">
                                            <span class="glyphicon glyphicon-open" aria-hidden="true"></span>
                                        </a>
                                        <a href="{{ route('dokters.dokter.edit', $dokter->pegawai_id ) }}" class="btn btn-primary" title="Edit Dokter">
                                            <span class="glyphicon glyphicon-pencil" aria-hidden="true"></span>
                                        </a>

                                        <button type="submit" class="btn btn-danger" title="Delete Dokter" onclick="return confirm(&quot;Click Ok to delete Dokter.&quot;)">
                                            <span class="glyphicon glyphicon-trash" aria-hidden="true"></span>
                                        </button>
                                    </div>

                                </form>
                                
                            </td>
                        </tr>
                    @endforeach
                    </tbody>
                </table>

            </div>
        </div>

        <div class="panel-footer">
            {!! $dokters->render() !!}
        </div>
        
        @endif
    
    </div>
@endsection