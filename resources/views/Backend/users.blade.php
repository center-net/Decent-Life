@extends('layouts.master')
@section('page-header')
<!-- breadcrumb -->
<div class="page-title">
    <div class="row">
        <div class="col-sm-6">
            <h4 class="mb-0">{{trans('users_tran.Admin')}}</h4>
        </div>
        <div class="col-sm-6">
            <ol class="breadcrumb pt-0 pr-0 float-left float-sm-right ">
                <li class="breadcrumb-item">{{trans('users_tran.Admin')}}</li>
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
                <button type="button" class="button x-small" data-toggle="modal" data-target="#exampleUser">
                    {{ trans('general_tran.Add') }} {{trans('users_tran.Admin')}}
                </button>
                <br><br>

                <div class="table-responsive">
                    <table id="datatable" class="table table-striped table-bordered p-0">
                      <thead>
                          <tr>
                              <th>#</th>
                              <th>{{trans('users_tran.Full_Name')}}</th>
                              <th>{{trans('users_tran.E_mail')}}</th>

                              <th>{{trans('general_tran.Events')}}</th>
                          </tr>
                      </thead>
                      <tbody>
                            @foreach ($users as $index=>$user)
                                <tr>
                                    <td>{{$index+1}}</td>
                                    <td>{{$user->name}}</td>
                                    <td>{{$user->email}}</td>
                                    <td>
                                        <button type="button" class="btn btn-info btn-sm" data-toggle="modal"
                                                data-target="#edit{{ $user->id }}"
                                                title="{{ trans('general_tran.Edit') }}"><i
                                                class="fa fa-edit"></i></button>
                                        <button type="button" class="btn btn-danger btn-sm" data-toggle="modal"
                                                data-target="#delete{{ $user->id }}"
                                                title="{{ trans('general_tran.Delete') }}"><i
                                                class="fa fa-trash"></i></button>
                                    </td>
                                </tr>

                                <!-- edit_modal_user -->
                                <div class="modal fade" id="edit{{ $user->id }}" tabindex="-1" role="dialog"
                                aria-labelledby="exampleModalLabel" aria-hidden="true">
                                <div class="modal-dialog" role="document">
                                    <div class="modal-content">
                                        <div class="modal-header">
                                            <h5 style="font-family: 'Cairo', sans-serif;" class="modal-title"
                                                id="exampleModalLabel">
                                                {{ trans('general_tran.Edit_data') }} {{$user->name}}
                                            </h5>
                                            <button type="button" class="close" data-dismiss="modal"
                                                    aria-label="Close">
                                                <span aria-hidden="true">&times;</span>
                                            </button>
                                        </div>
                                        <div class="modal-body">
                                            <!-- add_form -->
                                            <form action="{{ route('admin.users.update', ['id'=>$user->id]) }}" method="POST">
                                                {{method_field('PUT')}}
                                                @csrf
                                                    <div class="row">
                                                        @foreach(LaravelLocalization::getSupportedLocales() as $localeCode => $properties)
                                                            <div class="col">
                                                                <label for="name_{{$localeCode}}"
                                                                        class="mr-sm-2">{{ trans('users_tran.Full_Name_'.$localeCode) }}
                                                                    :</label>
                                                                <input id="name_{{$localeCode}}" type="text" name="name_{{$localeCode}}" value="{{$user->getTranslation('name', $localeCode)}}" class="form-control">
                                                            </div>
                                                        @endforeach
                                                    </div>
                                                    <div class="row">
                                                        <div class="col">
                                                            <label for="email"
                                                                    class="mr-sm-2">{{ trans('users_tran.E_mail') }}
                                                                :</label>
                                                            <input id="email" type="email" name="email" class="form-control" value="{{$user->email }}">
                                                        </div>
                                                    </div>
                                                    <div class="row">
                                                        <div class="col">
                                                            <label for="password"
                                                                    class="mr-sm-2">{{ trans('users_tran.Password') }}
                                                                        :</label>
                                                            <input id="password" type="password" name="password" class="form-control" autocomplete="new-password">
                                                        </div>
                                                        <div class="col">
                                                            <label for="password-confirm"
                                                                    class="mr-sm-2">{{ trans('users_tran.Password_Confirmation') }}
                                                                :</label>
                                                            <input id="password-confirm" type="password" class="form-control" name="password_confirmation" autocomplete="new-password">
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

                            <!-- delete_modal_user -->
                            <div class="modal fade" id="delete{{ $user->id }}" tabindex="-1" role="dialog"
                                aria-labelledby="exampleModalLabel" aria-hidden="true">
                                <div class="modal-dialog" role="document">
                                    <div class="modal-content">
                                        <div class="modal-header">
                                            <h5 style="font-family: 'Cairo', sans-serif;" class="modal-title"
                                                id="exampleModalLabel">
                                                {{ trans('general_tran.Delete') }}  {{$user->name}}
                                            </h5>
                                            <button type="button" class="close" data-dismiss="modal"
                                                    aria-label="Close">
                                                <span aria-hidden="true">&times;</span>
                                            </button>
                                        </div>
                                        <div class="modal-body">
                                            <form action="{{ route('admin.users.destroy', ['id'=>$user->id]) }}" method="post">
                                                {{method_field('Delete')}}
                                                @csrf
                                                {{ trans('general_tran.Warning_delet')}} {{$user->name }} ?
                                                <input id="id" type="hidden" name="id" class="form-control"
                                                        value="{{ $user->id }}">
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
                            <th>{{trans('users_tran.Full_Name')}}</th>
                            <th>{{trans('users_tran.E_mail')}}</th>
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

        <!-- add_modal_user -->
    <div class="modal fade" id="exampleUser" tabindex="-1" role="dialog"
            aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 style="font-family: 'Cairo', sans-serif;" class="modal-title"
                        id="exampleModalLabel">
                        {{ trans('general_tran.Add') }} {{trans('users_tran.Admin')}}
                    </h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body">
                    <!-- add_form -->
                    <form action="{{ route('admin.users.store') }}" method="POST">
                        @csrf
                        <div class="row">
                            @foreach(LaravelLocalization::getSupportedLocales() as $localeCode => $properties)
                                <div class="col">
                                    <label for="name_{{$localeCode}}"
                                            class="mr-sm-2">{{ trans('users_tran.Full_Name_'.$localeCode) }}
                                        :</label>
                                    <input id="name_{{$localeCode}}" type="text" name="name_{{$localeCode}}" class="form-control">
                                </div>
                            @endforeach
                        </div>
                        <div class="row">
                            <div class="col">
                                <label for="email"
                                        class="mr-sm-2">{{ trans('users_tran.E_mail') }}
                                    :</label>
                                <input id="email" type="email" name="email" class="form-control">
                            </div>
                        </div>
                        <div class="row">
                            <div class="col">
                                <label for="password"
                                        class="mr-sm-2">{{ trans('users_tran.Password') }}
                                    :</label>
                                <input id="password" type="password" name="password" class="form-control" required autocomplete="new-password">
                            </div>
                            <div class="col">
                                <label for="password-confirm"
                                        class="mr-sm-2">{{ trans('users_tran.Password_Confirmation') }}
                                    :</label>
                                <input id="password-confirm" type="password" class="form-control" name="password_confirmation" required autocomplete="new-password">
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
