@extends('layouts.master')
@section('page-header')
<!-- breadcrumb -->
<div class="page-title">
    <div class="row">
        <div class="col-sm-6">
            <h4 class="mb-0">{{trans('initiatives_tran.Admin')}}</h4>
        </div>
        <div class="col-sm-6">
            <ol class="breadcrumb pt-0 pr-0 float-left float-sm-right ">
                <li class="breadcrumb-item">{{trans('initiatives_tran.Admin')}}</li>
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
                <button type="button" class="button x-small" data-toggle="modal" data-target="#exampleinitiative">
                    {{ trans('general_tran.Add') }} {{trans('initiatives_tran.initiatives')}}
                </button>
                <br><br>

                <div class="table-responsive">
                    <table id="datatable" class="table table-striped table-bordered p-0">
                      <thead>
                          <tr>
                              <th>#</th>
                              <th>{{trans('initiatives_tran.Title')}}</th>
                              <th>{{trans('initiatives_tran.Status')}}</th>
                              <th>{{trans('initiatives_tran.Image')}}</th>

                              <th>{{trans('general_tran.Events')}}</th>
                          </tr>
                      </thead>
                      <tbody>
                            @foreach ($initiatives as $index=>$initiative)
                                <tr>
                                    <td>{{$index+1}}</td>
                                    <td>{{$initiative->title}}</td>
                                    <td>{{$initiative->status}}</td>
                                    <td><img src="{{asset('Upload/'.$initiative->image)}}" width="100" class="img-thumbnail" alt=""></td>
                                    <td>
                                        <button type="button" class="btn btn-info btn-sm" data-toggle="modal"
                                                data-target="#edit{{ $initiative->id }}"
                                                title="{{ trans('general_tran.Edit') }}"><i
                                                class="fa fa-edit"></i></button>
                                        <button type="button" class="btn btn-danger btn-sm" data-toggle="modal"
                                                data-target="#delete{{ $initiative->id }}"
                                                title="{{ trans('general_tran.Delete') }}"><i
                                                class="fa fa-trash"></i></button>
                                    </td>
                                </tr>

                                <!-- edit_modal_initiative -->
                                <div class="modal fade" id="edit{{ $initiative->id }}" tabindex="-1" role="dialog"
                                aria-labelledby="exampleModalLabel" aria-hidden="true">
                                <div class="modal-dialog" role="document">
                                    <div class="modal-content">
                                        <div class="modal-header">
                                            <h5 style="font-family: 'Cairo', sans-serif;" class="modal-title"
                                                id="exampleModalLabel">
                                                {{ trans('general_tran.Edit_data') }} {{$initiative->name}}
                                            </h5>
                                            <button type="button" class="close" data-dismiss="modal"
                                                    aria-label="Close">
                                                <span aria-hidden="true">&times;</span>
                                            </button>
                                        </div>
                                        <div class="modal-body">
                                            <!-- add_form -->
                                            <form action="{{ route('admin.initiatives.update', ['id'=>$initiative->id]) }}" method="POST" enctype="multipart/form-data">
                                                {{method_field('PUT')}}
                                                @csrf
                                                <div class="row">
                                                    @foreach(LaravelLocalization::getSupportedLocales() as $localeCode => $properties)
                                                        <div class="col">
                                                            <label for="title_{{$localeCode}}"
                                                                    class="mr-sm-2">{{ trans('initiatives_tran.Title_'.$localeCode) }}
                                                                :</label>
                                                            <input id="title_{{$localeCode}}" value="{{$initiative->getTranslation('title', $localeCode)}}" type="text" name="title_{{$localeCode}}" class="form-control">
                                                        </div>
                                                    @endforeach
                                                </div>
                                                <div class="row">
                                                    @foreach(LaravelLocalization::getSupportedLocales() as $localeCode => $properties)
                                                        <div class="col">
                                                            <label for="description_{{$localeCode}}"
                                                                    >{{ trans('initiatives_tran.Description_'.$localeCode) }}
                                                                :</label>
                                                                <textarea id="description_{{$localeCode}}" name="description_{{$localeCode}}" cols="30" rows="3" class="form-control">{{$initiative->getTranslation('description', $localeCode)}}</textarea>
                                                        </div>
                                                    @endforeach
                                                </div>
                                                <div class="row">
                                                    @foreach(LaravelLocalization::getSupportedLocales() as $localeCode => $properties)
                                                        <div class="col-md-12">
                                                            <label for="subject_{{$localeCode}}"
                                                                    >{{ trans('initiatives_tran.Subject_'.$localeCode) }}
                                                                :</label>
                                                                <textarea id="subject_{{$localeCode}}" name="subject_{{$localeCode}}" cols="30" rows="3" class="form-control">{{$initiative->getTranslation('subject', $localeCode)}}</textarea>
                                                        </div>
                                                    @endforeach
                                                </div>
                                                <div class="row">
                                                    <div class="col">
                                                        <label for="image"
                                                                class="mr-sm-2">{{ trans('initiatives_tran.Image') }}
                                                            :</label>
                                                        <input id="image" type="file" name="image" class="form-control" >
                                                        <img src="{{asset('Upload/'.$initiative->image)}}" width="100" class="img-thumbnail" alt="">
                                                    </div>
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

                            <!-- delete_modal_initiative -->
                            <div class="modal fade" id="delete{{ $initiative->id }}" tabindex="-1" role="dialog"
                                aria-labelledby="exampleModalLabel" aria-hidden="true">
                                <div class="modal-dialog" role="document">
                                    <div class="modal-content">
                                        <div class="modal-header">
                                            <h5 style="font-family: 'Cairo', sans-serif;" class="modal-title"
                                                id="exampleModalLabel">
                                                {{ trans('general_tran.Delete') }}  {{$initiative->name}}
                                            </h5>
                                            <button type="button" class="close" data-dismiss="modal"
                                                    aria-label="Close">
                                                <span aria-hidden="true">&times;</span>
                                            </button>
                                        </div>
                                        <div class="modal-body">
                                            <form action="{{ route('admin.initiatives.destroy', ['id'=>$initiative->id]) }}" method="post">
                                                {{method_field('Delete')}}
                                                @csrf
                                                {{ trans('general_tran.Warning_delet')}} {{$initiative->name }} ?
                                                <input id="id" type="hidden" name="id" class="form-control"
                                                        value="{{ $initiative->id }}">
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
                            <th>{{trans('initiatives_tran.Title')}}</th>
                            <th>{{trans('initiatives_tran.Status')}}</th>
                            <th>{{trans('initiatives_tran.Image')}}</th>
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

        <!-- add_modal_initiative -->
    <div class="modal fade" id="exampleinitiative" tabindex="-1" role="dialog"
            aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 style="font-family: 'Cairo', sans-serif;" class="modal-title"
                        id="exampleModalLabel">
                        {{ trans('general_tran.Add') }} {{trans('initiatives_tran.initiatives')}}
                    </h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body">
                    <!-- add_form -->
                    <form action="{{ route('admin.initiatives.store') }}" method="POST" enctype="multipart/form-data">
                        @csrf
                        <div class="row">
                            @foreach(LaravelLocalization::getSupportedLocales() as $localeCode => $properties)
                                <div class="col">
                                    <label for="title_{{$localeCode}}"
                                            class="mr-sm-2">{{ trans('initiatives_tran.Title_'.$localeCode) }}
                                        :</label>
                                    <input id="title_{{$localeCode}}" type="text" name="title_{{$localeCode}}" class="form-control">
                                </div>
                            @endforeach
                        </div>
                        <div class="row">
                            @foreach(LaravelLocalization::getSupportedLocales() as $localeCode => $properties)
                                <div class="col">
                                    <label for="description_{{$localeCode}}"
                                            >{{ trans('initiatives_tran.Description_'.$localeCode) }}
                                        :</label>
                                        <textarea id="description_{{$localeCode}}" name="description_{{$localeCode}}" cols="30" rows="3" class="form-control"></textarea>
                                </div>
                            @endforeach
                        </div>
                        <div class="row">
                            @foreach(LaravelLocalization::getSupportedLocales() as $localeCode => $properties)
                                <div class="col-md-12">
                                    <label for="subject_{{$localeCode}}"
                                            >{{ trans('initiatives_tran.Subject_'.$localeCode) }}
                                        :</label>
                                        <textarea id="subject_{{$localeCode}}" name="subject_{{$localeCode}}" cols="30" rows="3" class="form-control"></textarea>
                                </div>
                            @endforeach
                        </div>
                        <div class="row">
                            <div class="col">
                                <label for="image"
                                        class="mr-sm-2">{{ trans('initiatives_tran.Image') }}
                                    :</label>
                                <input id="image" type="file" name="image" class="form-control" >
                            </div>
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
