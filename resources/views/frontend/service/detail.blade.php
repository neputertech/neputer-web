@extends('frontend.layouts.master')

@section('title', $data['service']->seo_title)
@section('keywords', $data['service']->seo_keywords)
@section('description', $data['service']->seo_desc)


@push('css')
    <link rel="stylesheet" href="{{asset('Frontend/css/intlTelInput.css')}}" type="text/css"/>
    <style>
        #mobile-error {
            position: absolute;
            top: calc(100% + 3px);
            left: 0;
        }
        /*.custom-file label{*/
        /*    display: initial !important;*/
        /*}*/
        /*.custom-file>.error{*/
        /*    color: #fe2691;*/
        /*    font-size: 14px;*/
        /*    margin-top: 3px;*/
        /*}*/

        @media only screen and (max-width: 768px) {
            .intl-tel-input {
                 flex-basis: 100%;
                width: 100%;
            }
            .custom-number-form-group{
                padding-bottom: 15px;
            }
            #mobile-error {
                padding-bottom: 15px;
            }
        }
    </style>
@endpush


@section('content')
<!--End Header -->
<!--Breadcrumb Area-->
@include('frontend.layouts.breadcrumb',[
    'title'=> $data['service']->title,
    'description'=> $data['service']->description ,
    'banner'=> $_settings['service_detail_image'],
])


<section class="service pad-tb bg-gradient5">
    <div class="container">
        <div class="row">
            <div class="col-lg-4">
                <div class="image-block wow fadeIn">
                    <img src="{{ ViewHelper::getImagePath(AppHelper::getFolderName('services'), $data['service']->image) }}" alt="image" class="img-fluid no-shadow"/>
                </div>
            </div>
            <div class="col-lg-8 block-1">
                <div class="common-heading text-l pl25">
                    <span>{{ $data['service']->expertise_title}}</span>
                  <p>{!! $data['service']->expertise_detail !!}</p>
                   </div>
            </div>
        </div>
    </div>
</section>
<!--End About-->
<section class="service pad-tb">
    <div class="container">
        <div class="row">
            <div class="col-lg-7">
                <div class="text-l service-desc- pr25">
                  {!! $data['service']->service_description !!}
                    <a href="javascript:void(0);" class="btn-main bg-btn3 lnk mt20" data-toggle="modal" data-target="#modalform">Request a Service<i class="fas fa-chevron-right fa-icon"></i><span class="circle"></span></a>

                </div>
            </div>
            <div class="col-lg-5">
                <div class="service-key-points">
                    {!! $data['service']->highlight_description !!}
                </div>
            </div>
        </div>
    </div>
</section>

<div class="popup-modals">
    <div class="modal" id="modalform">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <div class="common-heading">
                        <h4 class="mt0 mb0">Apply Now</h4>
                    </div>
                    <button type="button" class="closes" data-dismiss="modal">&times;</button></div>
                <!-- Modal body -->
                <div class="modal-body pt40 pb60">
                    <div class="form-block fdgn2">
                        <form id="service-form" method="post" action="{{ route('serviceForm.Submit') }}" enctype="multipart/form-data">
                            @csrf
                            <div class="fieldsets row">
                                <div class="col-md-6 form-group">
                                    {{ Form::text('name',null ,['placeholder'=> 'Enter your name *']) }}
                                    @if($errors->has('name'))
                                        <label class="has-error" for="name">{{ $errors->first('name') }}</label>
                                    @endif
                                </div>
                                <div class="col-md-6 form-group custom-number-form-group">
                                    {{ Form::tel('phone', null ,['class' => 'mobileNum','id' => 'mobile','placeholder'=> 'Enter your mobile no. *']) }}
                                @if($errors->has('phone'))
                                        <label class="has-error" for="phone">{{ $errors->first('phone') }}</label>
                                    @endif
                                </div>

                            </div>
                            <div class="fieldsets row">
                                <div class="col-md-12 form-group">
                                    {{ Form::email('email', null ,['placeholder'=> 'Enter your email *',
                                 "pattern" => "([a-zA-Z0-9._-]+@[a-zA-Z0-9.-]+\.[a-zA-Z]{2,4}$)",
                                'required']) }}
                                    @if($errors->has('email'))
                                        <label class="has-error" for="email">{{ $errors->first('email') }}</label>
                                    @endif

                                </div>
                                <input value="{{ $data['service']->title }}" type="hidden" name="topic">
                            </div>
                            <div class="fieldsets form-group">
                                {{ Form::textarea('message', null ,['rows'=>'4', 'required','id'=>'form_message']) }}

                                @if($errors->has('message'))
                                    <label class="has-error" for="message">{{ $errors->first('message') }}</label>
                                @endif
                            </div>
                            <div class="fieldsets- row">
                                <div class="col-md-12 form-group">
                                    <div class="custom-file">
                                        <input type="file" class="custom-file-input mb0" id="customFile" name="file">
                                        <label class="custom-file-label" for="customFile">Choose file</label>
                                        @if($errors->has('file'))
                                            <label class="has-error" for="file">{{ $errors->first('file') }}</label>
                                        @endif
                                    </div>

                                    <p><small>Please upload files Only pdf, docx and doc files.</small></p>
                                </div>
                            </div>
                            <div class="fieldset mt20">

                                <button type="submit" class="lnk btn-main bg-btn">Submit Application<span class="circle"></span>
                                </button>

                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

@endsection


@push('js')
    <script src="https://code.jquery.com/jquery-3.5.1.js" integrity="sha256-QWo7LDvxbWT2tbbQ97B53yJnYU3WhH/C8ycbRAkjPDc=" crossorigin="anonymous"></script>
    <script src="{{asset('Frontend/js/jquery.maskedinput.js')}}"></script>
    <script src="{{asset('Frontend/js/intlTelInput.js')}}"></script>
    <script src="{{asset('Frontend/js/jquery.validate.js')}}"></script>
    <script src="{{asset('Frontend/js/additional-methods.min.js')}}"></script>
    @include('frontend.home.Section.contact_no_scripts')
    @include('frontend.career.includes.scripts')
    <script>
        $(document).ready(function () {
            $('#service-form').validate({
                rules: {
                    'name': "required",
                    'phone': "required",
                    'email':{
                        required: true,
                        email: true
                    },
                },
            });
        });

    </script>
@endpush
