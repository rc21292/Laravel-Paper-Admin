@extends('layouts.master')
@section('content')
<div class="content">
  <div class="container-fluid">
    <div class="row">
      <div class="col-lg-12">
        <div class="card">
            <div class="card-header">
                <h4 class="card-title">{{ trans('global.show') }} {{ trans('cruds.permission.title') }}</h4>
            </div>

            <div class="card-body">
                <div class="mb-2">
                    <table class="table table-bordered table-striped">
                        <tbody>
                            <tr>
                                <th>
                                    {{ trans('cruds.permission.fields.id') }}
                                </th>
                                <td>
                                    {{ $permission->id }}
                                </td>
                            </tr>
                            <tr>
                                <th>
                                    {{ trans('cruds.permission.fields.title') }}
                                </th>
                                <td>
                                    {{ $permission->name }}
                                </td>
                            </tr>
                        </tbody>
                    </table>
                    <a style="margin-top:20px;" class="btn btn-default" href="{{ url()->previous() }}">
                        {{ trans('global.back_to_list') }}
                    </a>
                </div>
            </div>
        </div>
    </div>
</div>
</div>
</div>
@endsection