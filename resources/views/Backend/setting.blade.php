@extends('layouts.master')
@section('page-header')
<!-- breadcrumb -->
<div class="page-title">
    <div class="row">
        <div class="col-sm-6">
            <h4 class="mb-0">{{trans('setting_tran.Admin')}}</h4>
        </div>
        <div class="col-sm-6">
            <ol class="breadcrumb pt-0 pr-0 float-left float-sm-right ">
                <li class="breadcrumb-item">{{trans('setting_tran.Admin')}}</li>
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
                <button type="button" class="button x-small" data-toggle="modal" data-target="#edit{{ $setting->id }}">
                    {{ trans('general_tran.Edit') }} {{trans('setting_tran.setting')}}
                </button>
                <br><br>

                <div class="row">
                    @foreach(LaravelLocalization::getSupportedLocales() as $localeCode => $properties)
                        <div class="col">
                            <label>{{ trans('setting_tran.Title_'.$localeCode) }}</label>
                            <h5 class="card-title">{{$setting->getTranslation('title', $localeCode)}}</h5>
                        </div>
                    @endforeach
                </div>
                <div class="row">
                    @foreach(LaravelLocalization::getSupportedLocales() as $localeCode => $properties)
                        <div class="col">
                            <label>{{ trans('setting_tran.address_'.$localeCode) }}</label>
                            <h5 class="card-title">{{$setting->getTranslation('address', $localeCode)}}</h5>
                        </div>
                    @endforeach
                </div>
                <div class="row">
                    <div class="col">
                        <label>{{ trans('setting_tran.logo') }}</label>
                        <img src="{{asset('Upload/'.$setting->logo)}}" alt="" style="height: 80px">
                    </div>
                    <div class="col">
                        <label>{{ trans('setting_tran.favicon') }}</label>
                        <img src="{{asset('Upload/'.$setting->favicon)}}" alt="" style="height: 80px">
                    </div>
                </div>
                <div class="row">
                    <div class="col">
                        <label>{{ trans('setting_tran.facebook') }}</label>
                        <h5 class="card-title">{{$setting->facebook}}</h5>
                    </div>
                    <div class="col">
                        <label>{{ trans('setting_tran.instagram') }}</label>
                        <h5 class="card-title">{{$setting->instagram}}</h5>
                    </div>
                </div>
                <div class="row">
                    <div class="col">
                        <label>{{ trans('setting_tran.phone') }}</label>
                        <h5 class="card-title">{{$setting->phone}}</h5>
                    </div>
                    <div class="col">
                        <label>{{ trans('setting_tran.email') }}</label>
                        <h5 class="card-title">{{$setting->email}}</h5>
                    </div>
                </div>
                <div class="row">
                    @foreach(LaravelLocalization::getSupportedLocales() as $localeCode => $properties)
                        <div class="col">
                            <label>{{ trans('setting_tran.content_'.$localeCode) }}</label>
                            <h5 class="card-title">{{$setting->getTranslation('content', $localeCode)}}</h5>
                        </div>
                    @endforeach
                </div>
                <div class="row">
                    @foreach(LaravelLocalization::getSupportedLocales() as $localeCode => $properties)
                        <div class="col">
                            <label>{{ trans('setting_tran.team_'.$localeCode) }}</label>
                            <h5 class="card-title">{{$setting->getTranslation('team', $localeCode)}}</h5>
                        </div>
                    @endforeach
                </div>


            </div>
        </div>
    </div>
</div>
<!-- row closed -->

<div class="modal fade" id="edit{{ $setting->id }}" tabindex="-1" role="dialog"
    aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 style="font-family: 'Cairo', sans-serif;" class="modal-title"
                    id="exampleModalLabel">
                    {{ trans('general_tran.Edit_data') }} {{trans('setting_tran.setting')}}
                </h5>
                <button type="button" class="close" data-dismiss="modal"
                        aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                <!-- add_form -->
                <form action="{{ route('admin.setting.update', ['id'=>$setting->id]) }}" method="POST" enctype="multipart/form-data">
                    {{method_field('PUT')}}
                    @csrf
                    <div class="row">
                        @foreach(LaravelLocalization::getSupportedLocales() as $localeCode => $properties)
                            <div class="col">
                                <label for="title_{{$localeCode}}"
                                        class="mr-sm-2">{{ trans('setting_tran.Title_'.$localeCode) }}
                                    :</label>
                                <input id="title_{{$localeCode}}" value="{{$setting->getTranslation('title', $localeCode)}}" type="text" name="title_{{$localeCode}}" class="form-control">
                            </div>
                        @endforeach
                    </div>
                    <div class="row">
                        @foreach(LaravelLocalization::getSupportedLocales() as $localeCode => $properties)
                            <div class="col">
                                <label for="address_{{$localeCode}}"
                                        class="mr-sm-2">{{ trans('setting_tran.address_'.$localeCode) }}
                                    :</label>
                                <input id="address_{{$localeCode}}" value="{{$setting->getTranslation('address', $localeCode)}}" type="text" name="address_{{$localeCode}}" class="form-control">
                            </div>
                        @endforeach
                    </div>
                    <div class="row">
                        @foreach(LaravelLocalization::getSupportedLocales() as $localeCode => $properties)
                            <div class="col-md-12">
                                <label for="content_{{$localeCode}}"
                                        class="mr-sm-2">{{ trans('setting_tran.content_'.$localeCode) }}
                                    :</label>
                                    <textarea id="content_{{$localeCode}}" name="content_{{$localeCode}}" cols="30" rows="3" class="form-control">{{$setting->getTranslation('content', $localeCode)}}</textarea>
                            </div>
                        @endforeach
                    </div>
                    <div class="row">
                        @foreach(LaravelLocalization::getSupportedLocales() as $localeCode => $properties)
                            <div class="col-md-12">
                                <label for="team_{{$localeCode}}"
                                        class="mr-sm-2">{{ trans('setting_tran.team_'.$localeCode) }}
                                    :</label>
                                    <textarea id="team_{{$localeCode}}" name="team_{{$localeCode}}" cols="30" rows="3" class="form-control">{{$setting->getTranslation('team', $localeCode)}}</textarea>
                            </div>
                        @endforeach
                    </div>
                    <div class="row">
                        <div class="col">
                            <label>{{ trans('setting_tran.logo') }}</label>
                            <input type="file" name="logo" class="form-control">
                            <img src="{{asset('Upload/'.$setting->logo)}}" alt="" style="height: 50px">
                        </div>
                        <div class="col">
                            <label>{{ trans('setting_tran.favicon') }}</label>
                            <input type="file" name="favicon" class="form-control">
                            <img src="{{asset('Upload/'.$setting->favicon)}}" alt="" style="height: 50px">
                        </div>
                    </div>
                    <div class="row">
                        <div class="col">
                            <label>{{ trans('setting_tran.facebook') }}</label>
                            <input  type="text" name="facebook" class="form-control"
                                placeholder="{{ trans('setting_tran.facebook') }}" value="{{$setting->facebook}}">
                        </div>
                        <div class="col">
                            <label>{{ trans('setting_tran.instagram') }}</label>
                            <input  type="text" name="instagram" class="form-control"
                                placeholder="{{ trans('setting_tran.instagram') }}" value="{{$setting->instagram}}">
                        </div>
                    </div>
                    <div class="row">
                        <div class="col">
                            <label>{{ trans('setting_tran.phone') }}</label>
                            <input type="text" name="phone" class="form-control"
                                placeholder="{{ trans('setting_tran.phone') }}" value="{{$setting->phone}}">
                        </div>
                        <div class="col">
                            <label>{{ trans('setting_tran.email') }}</label>
                            <input type="email" name="email" class="form-control"
                                placeholder="{{ trans('setting_tran.email') }}" value="{{$setting->email}}">
                        </div>
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
@endsection
@section('js')

@endsection
