@extends('layouts.master')
@section('page-header')
<!-- breadcrumb -->
<div class="page-title">
    <div class="row">
        <div class="col-sm-6">
            <h4 class="mb-0">{{trans('serves_tran.Admin')}}</h4>
        </div>
        <div class="col-sm-6">
            <ol class="breadcrumb pt-0 pr-0 float-left float-sm-right ">
                <li class="breadcrumb-item">{{trans('serves_tran.Admin')}}</li>
            </ol>
        </div>
    </div>
</div>
<!-- breadcrumb -->
@endsection
@section('content')
<!-- row -->
<div class="row">
    <div class="col-md-12 mb-30">
        <div class="card card-statistics h-100">
            <div class="card-body">
                <button type="button" class="button x-small" data-toggle="modal" data-target="#exampleserve">
                    {{ trans('general_tran.Add') }} {{trans('serves_tran.serves')}}
                </button>
                <br><br>

                <div class="table-responsive">
                    <table id="datatable" class="table table-striped table-bordered p-0">
                      <thead>
                          <tr>
                              <th>#</th>
                              <th>{{trans('serves_tran.Title')}}</th>
                              <th>{{trans('serves_tran.Status')}}</th>

                              <th>{{trans('general_tran.Events')}}</th>
                          </tr>
                      </thead>
                      <tbody>
                            @foreach ($serves as $index=>$serve)
                                <tr>
                                    <td>{{$index+1}}</td>
                                    <td>{{$serve->title}}</td>
                                    <td>{{$serve->status}}</td>
                                    <td>
                                        <button type="button" class="btn btn-info btn-sm" data-toggle="modal"
                                                data-target="#edit{{ $serve->id }}"
                                                title="{{ trans('general_tran.Edit') }}"><i
                                                class="fa fa-edit"></i></button>
                                        <button type="button" class="btn btn-danger btn-sm" data-toggle="modal"
                                                data-target="#delete{{ $serve->id }}"
                                                title="{{ trans('general_tran.Delete') }}"><i
                                                class="fa fa-trash"></i></button>
                                    </td>
                                </tr>

                                <!-- edit_modal_serve -->
                                <div class="modal fade" id="edit{{ $serve->id }}" tabindex="-1" role="dialog"
                                aria-labelledby="exampleModalLabel" aria-hidden="true">
                                <div class="modal-dialog" role="document">
                                    <div class="modal-content">
                                        <div class="modal-header">
                                            <h5 style="font-family: 'Cairo', sans-serif;" class="modal-title"
                                                id="exampleModalLabel">
                                                {{ trans('general_tran.Edit_data') }} {{$serve->title}}
                                            </h5>
                                            <button type="button" class="close" data-dismiss="modal"
                                                    aria-label="Close">
                                                <span aria-hidden="true">&times;</span>
                                            </button>
                                        </div>
                                        <div class="modal-body">
                                            <!-- add_form -->
                                            <form action="{{ route('admin.serves.update', ['id'=>$serve->id]) }}" method="POST">
                                                {{method_field('PUT')}}
                                                @csrf
                                                    <div class="row">
                                                        @foreach(LaravelLocalization::getSupportedLocales() as $localeCode => $properties)
                                                            <div class="col-md-12">
                                                                <label for="title_{{$localeCode}}"
                                                                        class="mr-sm-2">{{ trans('serves_tran.Title_'.$localeCode) }}
                                                                    :</label>
                                                                <input id="title_{{$localeCode}}" type="text" name="title_{{$localeCode}}" value="{{$serve->getTranslation('title', $localeCode)}}" class="form-control">
                                                            </div>
                                                        @endforeach
                                                    </div>
                                                    <br><br>
                                                </div>
                                                <div class="modal-footer">
                                                    <button type="button" class="btn btn-secondary"
                                                            data-dismiss="modal">{{ trans('general_tran.Close') }}</button>
                                                    <button type="submit"
                                                            class="btn btn-success">{{ trans('general_tran.Submit') }}</button>
                                                </div>
                                            </form>

                                        </div>
                                    </div>
                                </div>
                            </div>

                            <!-- delete_modal_serve -->
                            <div class="modal fade" id="delete{{ $serve->id }}" tabindex="-1" role="dialog"
                                aria-labelledby="exampleModalLabel" aria-hidden="true">
                                <div class="modal-dialog" role="document">
                                    <div class="modal-content">
                                        <div class="modal-header">
                                            <h5 style="font-family: 'Cairo', sans-serif;" class="modal-title"
                                                id="exampleModalLabel">
                                                {{ trans('general_tran.Delete') }}  {{$serve->name}}
                                            </h5>
                                            <button type="button" class="close" data-dismiss="modal"
                                                    aria-label="Close">
                                                <span aria-hidden="true">&times;</span>
                                            </button>
                                        </div>
                                        <div class="modal-body">
                                            <form action="{{ route('admin.serves.destroy', ['id'=>$serve->id]) }}" method="post">
                                                {{method_field('Delete')}}
                                                @csrf
                                                {{ trans('general_tran.Warning_delet')}} {{$serve->title }} ?
                                                <input id="id" type="hidden" name="id" class="form-control"
                                                        value="{{ $serve->id }}">
                                                <div class="modal-footer">
                                                    <button type="button" class="btn btn-secondary"
                                                            data-dismiss="modal">{{ trans('general_tran.Close') }}</button>
                                                    <button type="submit"
                                                            class="btn btn-danger">{{ trans('general_tran.Submit') }}</button>
                                                </div>
                                            </form>
                                        </div>
                                    </div>
                                </div>
                            </div>


                            @endforeach
                      </tbody>
                      <tfoot>
                        <tr>
                            <th>#</th>
                            <th>{{trans('serves_tran.Title')}}</th>
                            <th>{{trans('serves_tran.Status')}}</th>
                            <th>{{trans('general_tran.Events')}}</th>
                        </tr>
                      </tfoot>

                   </table>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- row closed -->

        <!-- add_modal_serve -->
    <div class="modal fade" id="exampleserve" tabindex="-1" role="dialog"
            aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 style="font-family: 'Cairo', sans-serif;" class="modal-title"
                        id="exampleModalLabel">
                        {{ trans('general_tran.Add') }} {{trans('serves_tran.serves')}}
                    </h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body">
                    <!-- add_form -->
                    <form action="{{ route('admin.serves.store') }}" method="POST">
                        @csrf
                        <div class="row">
                            @foreach(LaravelLocalization::getSupportedLocales() as $localeCode => $properties)
                                <div class="col-md-12">
                                    <label for="title_{{$localeCode}}"
                                            class="mr-sm-2">{{ trans('initiatives_tran.Title_'.$localeCode) }}
                                        :</label>
                                    <input id="title_{{$localeCode}}" type="text" name="title_{{$localeCode}}" class="form-control">
                                </div>
                            @endforeach
                        </div>
                        <br><br>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary"
                            data-dismiss="modal">{{ trans('general_tran.Close') }}</button>
                    <button type="submit"
                            class="btn btn-success">{{ trans('general_tran.Submit') }}</button>
                </div>
                </form>

            </div>
        </div>
    </div>

@endsection
@section('js')

@endsection
