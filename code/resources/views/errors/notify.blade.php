@if ($errors->any())
@foreach($errors->all() as $message)
<div class="error-msg">
    <i class="fa fa-times-circle"></i>
    {{$message}}
</div>
@endforeach
@endif

@if (Session::has('success') )

<div class="success-msg">
    <i class="fa fa-check"></i>
    ("{{Session::get('success')}}",'success')
</div>

@endif

@if (Session::has('error'))

<div class="error-msg">
    <i class="fa fa-times-circle"></i>
    ("{{Session::get('error')}}",'danger')
</div>

@php
session()->forget('error');
@endphp
@endif
