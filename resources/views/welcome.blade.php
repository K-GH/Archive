@extends('layouts.app')

@section('content')

<!-- switch languages to switch  -->
  @if (app()->getLocale() == 'ar')
  <div class="jumbotron">
      <h1 class="display-3 d-flex justify-content-center">مرحبا بك فى نظام الارشيف</h1>
      <p class="lead d-flex justify-content-center">يسمح لك بالاطلاع على ملفاتك ومستنداتك وصورالوثائق ، عبر واجهة بسيطة</p>
      <hr class="my-4 d-flex justify-content-center">
      <p class="d-flex justify-content-center">تم تطوير نظام الأرشيف في شكل خدمة ويب ؛ يتكيف مع جميع الأنظمة الأساسية ولا يتطلب تثبيتًا إضافيًا</p>
      <p class="lead d-flex justify-content-center">
        <a class="btn btn-primary btn-lg" href="/about" role="button">@lang('site.learn_more')</a>
      </p>
  </div>
  @else
  <div class="jumbotron">
      <h1 class="display-3 d-flex justify-content-center">Welcome to Archive System</h1>
      <p class="lead d-flex justify-content-center">It will allow you to consult your physical records and the image of your dematerialised document, via a simple interface.</p>
      <hr class="my-4 d-flex justify-content-center">
      <p class="d-flex justify-content-center">Archive system has been developed in the form of a web service; it adapts to all platforms and it requires no additional installation.</p>
      <p class="lead d-flex justify-content-center">
        <a class="btn btn-primary btn-lg" href="/about" role="button">Learn more</a>
      </p>
  </div>
  @endif


@endsection
