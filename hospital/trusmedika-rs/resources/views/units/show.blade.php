@extends('layouts.app')

@section('content')

<div class="panel panel-default">
    <div class="panel-heading clearfix">

        <span class="pull-left">
            <h4 class="mt-5 mb-5">{{ isset($title) ? $title : 'Unit' }}</h4>
        </span>

        <div class="pull-right">

            <form method="POST" action="{!! route('units.unit.destroy', $unit->unit_id) !!}" accept-charset="UTF-8">
            <input name="_method" value="DELETE" type="hidden">
            {{ csrf_field() }}
                <div class="btn-group btn-group-sm" role="group">
                    <a href="{{ route('units.unit.index') }}" class="btn btn-primary" title="Show All Unit">
                        <span class="glyphicon glyphicon-th-list" aria-hidden="true"></span>
                    </a>

                    <a href="{{ route('units.unit.create') }}" class="btn btn-success" title="Create New Unit">
                        <span class="glyphicon glyphicon-plus" aria-hidden="true"></span>
                    </a>
                    
                    <a href="{{ route('units.unit.edit', $unit->unit_id ) }}" class="btn btn-primary" title="Edit Unit">
                        <span class="glyphicon glyphicon-pencil" aria-hidden="true"></span>
                    </a>

                    <button type="submit" class="btn btn-danger" title="Delete Unit" onclick="return confirm(&quot;Click Ok to delete Unit.?&quot;)">
                        <span class="glyphicon glyphicon-trash" aria-hidden="true"></span>
                    </button>
                </div>
            </form>

        </div>

    </div>

    <div class="panel-body">
        <dl class="dl-horizontal">
            <dt>Unit Kode</dt>
            <dd>{{ $unit->unit_kode }}</dd>
            <dt>Unit Nama</dt>
            <dd>{{ $unit->unit_nama }}</dd>

        </dl>

    </div>
</div>

@endsection