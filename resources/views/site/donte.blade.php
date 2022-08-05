@extends('site.include.layout')
@section('content')

    <!-- Inner Banner html start-->
    <section class="inner-banner-wrap">
        <div class="inner-baner-container" style="background-image: url({{asset('site/assets/images/form.jpg')}});">
            <div class="container">
                <div class="inner-banner-content">
                    <h1 class="inner-title">تبرع الان</h1>
                </div>
            </div>
        </div>
    </section>
    <!-- Inner Banner html end-->
    <!-- donate section html start -->
    <div class="donate-section">
        <div class="container">
            @if(session()->has('error'))
                <div class="alert alert-danger">{{ session()->get('error') }}</div>
            @endif
            <form method="get" class="donate-form" action="{{ route('paypal.processTransaction') }}">
                @if($errors->has('amount_value'))
                    <div class="alert alert-danger">{{ $errors->first('amount_value') }}</div>
                @endif
                @if(\Session::has('success'))
                    <div class="alert alert-success">{{ \Session::get('success') }}</div>
                    {{ \Session::forget('success') }}
                @endif
                <div class="donate-amout form-inner">
                    <h3>تبرعك</h3>
                    <div class="form-wrap d-flex">
                        {{-- <form  method="get" id="dontenow"> --}}
                        @csrf
                        <div class="form-group amount-radio">
                            <input type="radio" name="amount" id="amount-50" value="50">
                            <label for="amount-50">$50</label>
                        </div>
                        <div class="form-group amount-radio">
                            <input type="radio" name="amount" id="amount-100" value="100">
                            <label for="amount-100">$100</label>
                        </div>
                        <div class="form-group amount-radio">
                            <input type="radio" name="amount" id="amount-200" value="200">
                            <label for="amount-200">$200</label>
                        </div>
                        <div class="form-group">
                            <input type="number" name="amount_value" id="amount_value" placeholder="أدخل مبلغ التبرع">
                        </div>
                        {{-- <div class="form-group"> --}}
                        <button type="submit" class="btn btn-info button-round"
                                id="checkout">ادفع الان
                        </button>
                        {{-- <input type="button" value="ادفع الان"> --}}
                        {{-- <a id="checkout"
                           role="button" class="btn  btn-success px-3 waves-effect waves-light"> شراء المنتج
                        </a> --}}
                        {{-- </div> --}}

                        {{-- </form> --}}


                    </div>
                </div>
            </form>


            <div class="donate-method form-inner">
                <h3>اختر طريقتك في الدفع</h3>
                <h3><i class="fab fa-paypal"></i></h3>


                <div id="showPayForm"></div>

            </div>

        </div>
    </div>


@endsection

@section('scripts')
    <script src="http://ajax.googleapis.com/ajax/libs/jquery/1.9.1/jquery.min.js"></script>

    </script>
@endsection
