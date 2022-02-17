{{-- TODO :: Slider is now working properly  --}}

@if(count($data['testimonial']) >0 )
<section class="testinomial-section pad-tb">
    <div class="container">
        <div class="row">
            <div class="col-lg-5 v-center">
                <div class="common-heading text-l">
                    <span>{{ $_settings['client_testimonial_title'] ?? 'Client Testimonial Title' }}</span>
                    <h2>{{ $_settings['client_testimonial_subtitle'] ?? 'Client Testimonial Subtitle' }}</h2>
                </div>
            </div>
            <div class="col-lg-7">

                <div class="owl-carousel testimonial-card-a pl25">
                    @forelse($data['testimonial'] as $key => $testimonial)
                        <div class="testimonial-card">
                            <div class="t-text">
                                <p>{!! $testimonial->testimonial !!}</p>
                            </div>
                            <div class="client-thumbs mt30">
                                <div class="media v-center">
                                    <div class="user-image bdr-radius"><img src="{{ \App\Facades\ViewHelperFacade::getImagePath('testimonial',$testimonial->image)  }}" alt="girl" class="img-fluid lazy"></div>
                                    <div class="media-body user-info">
                                        <h5>{{ $testimonial->testimonial_by }}</h5>
                                        <p> {{ $testimonial->designation }} <small></small></p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    @empty
                    @endforelse
                </div>
            </div>
        </div>
    </div>
</section>
@endisset





<!--
<section class="testinomial-section pad-tb">
    <div class="container">
        <div class="row">
            <div class="col-lg-5 v-center">
                <div class="common-heading text-l">
                    <span>Clients Testimonial</span>
                    <h2 class="mb0">What our clients say about our Company.</h2>
                </div>
            </div>
            <div class="col-lg-7">
                <div class="owl-carousel testimonial-card-a pl25">
                    <div class="testimonial-card">
                        <div class="t-text">
                            <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum
                                has been the industry's standard dummy text ever since the 1500s, when an unknown
                                printer took a galley of type and scrambled it to make a type
                                specimen book. Lorem Ipsum is simply dummy text of the printing and typesetting
                                industry. Lorem Ipsum has been the industry's standard dummy text ever since.</p>
                        </div>
                        <div class="client-thumbs mt30">
                            <div class="media v-center">
                                <div class="user-image bdr-radius"><img src="images/user-thumb/girl.jpg" alt="girl"
                                                                        class="img-fluid"/></div>
                                <div class="media-body user-info v-center">
                                    <h5>Moana Smile</h5>
                                    <p>CEO of Niwax, <small>Jaipur, India</small></p>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="testimonial-card">
                        <div class="t-text">
                            <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum
                                has been the industry's standard dummy text ever since the 1500s, when an unknown
                                printer took a galley of type and scrambled it to make a type
                                specimen book. Lorem Ipsum is simply dummy text of the printing and typesetting
                                industry. Lorem Ipsum has been the industry's standard dummy text ever since.</p>
                        </div>
                        <div class="client-thumbs mt30">
                            <div class="media v-center">
                                <div class="user-image bdr-radius"><img src="images/user-thumb/girl.jpg" alt="girl"
                                                                        class="img-fluid"/></div>
                                <div class="media-body user-info">
                                    <h5>Moana Smile</h5>
                                    <p>CEO of Niwax, <small>Jaipur, India</small></p>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="testimonial-card">
                        <div class="t-text">
                            <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum
                                has been the industry's standard dummy text ever since the 1500s, when an unknown
                                printer took a galley of type and scrambled it to make a type
                                specimen book. Lorem Ipsum is simply dummy text of the printing and typesetting
                                industry. Lorem Ipsum has been the industry's standard dummy text ever since.</p>
                        </div>
                        <div class="client-thumbs mt30">
                            <div class="media v-center">
                                <div class="user-image bdr-radius"><img src="images/user-thumb/girl.jpg" alt="girl"
                                                                        class="img-fluid"/></div>
                                <div class="media-body user-info">
                                    <h5>Moana Smile</h5>
                                    <p>CEO of Niwax, <small>Jaipur, India</small></p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>-->
