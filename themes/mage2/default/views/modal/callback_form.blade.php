<link rel="stylesheet" href="{{ asset('admins/vendor/css/bootstrap.min.css')}}">
<link rel="stylesheet" href="{{ asset('admins/css/admin/AdminLTE.min.css')}}">
<body class="hold-transition login-page">

@if(isset($name)&& isset($phone))
    <div class="login__wrapper">
    <div class="login-box">
        <p align="center">
        <h2>Ваша заявка принята!</h2>
        <p><b>Указано имя:</b> {!! $name !!}</p>
       <p><b>Указан номер:</b> {!! $phone !!}</p>
        </p>
    </div>
    </div>
    <script>
        $( document ).ready(function() {
           $(".ui-dialog").height(250);
        });
    </script>
@else
<div id="callback_request">
<p align="center"><h1>Обратный звонок</h1></p>
{!! Form::open(['route' => 'contacts.store',
'method' => 'POST', 'id' => 'callback_request_form', 'enctype' => 'multipart/form-data']) !!}

@include('mage2-ecommerce::forms.text',[
    'name' => 'Name',
    'label' => 'Введите имя',
    'attributes' => [
        'class' => 'form-control',
    ]
])

@include('mage2-ecommerce::forms.text',[
'name' => 'Phone',
'label' => 'Введите телефон',
'attributes' => [
'class' => 'form-control',
]
])
    <div class="login__wrapper">
    <div class="box-footer">
        <div class="form-group">
            <button type="submit" class="btn btn-primary" >Перезвоните мне</button>
        </div>
    </div>
    {!! Form::close() !!}

<div class="col-md-12">
    <div class="col-md-6">
        <p><h3 align="center">Контактный e-mail</h3></p>
        <a href="mailto:contact@em-store.com.ua"><p align="center"><b>contact@em-store.com.ua</b></p></a>
    </div>

    <div class="col-md-6">
        <p><h3 align="center">Контактный Skype</h3></p>
        <a href="callto://emlax1k"><p align="center"><b>emlax1k</b></p></a>
    </div>
</div>
</div>
</div>
@endif
</body>
{{--<script>--}}
    {{--$( "callback_request_form" ).submit(function( ) {--}}
        {{--$.ajax({--}}
            {{--url: $('#callback_request_form').attr('action'),--}}
            {{--type: 'POST',--}}
            {{--data : $('#callback_request_form').serialize(),--}}
            {{--success: function(){--}}
                {{--console.log('form submitted.');--}}
                {{--$( "callback_request" ).fadeOut();--}}
                {{--$( "congrats" ).fadeIn();--}}
            {{--}--}}
        {{--});--}}
        {{--return false;--}}
        {{--//--}}
        {{--// $( "callback_request" ).fadeOut();--}}
        {{--// $( "congrats" ).fadeIn();--}}
    {{--});--}}

{{--</script>--}}