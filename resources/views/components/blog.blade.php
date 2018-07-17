<section id="blog">
    {{-- <img class="d-none d-md-block bg-position" src="{{ asset('imgs/bg_myblog.svg') }}" alt="" width="100%"> --}}
    <img class="d-block d-md-none bg-position" src="{{ asset('imgs/bg_myblog_mobile.svg') }}" alt="" width="100%">

    <div class="container blog-content">
        <div class="row justify-content-end" data-aos="fade-up" data-aos-duration="1000" data-aos-offset="0">
            <div class="col-12 col-md-3 text-right">
                <p class="my-text no-margin">MY</p>
                <p class="blog-text no-margin">BLOG</p>
            </div>
        </div>
        <div class="row d-block d-md-none" data-aos="fade-up" data-aos-duration="1000" data-aos-offset="0">
            <div class="col-12">
                <img class="image-blog" src="{{ $blog->thumbnail }}" alt="" width="100%">
            </div>
        </div>
        <div class="row justify-content-center margin-content align-items-center" data-aos="fade-up" data-aos-duration="1000" data-aos-offset="-100">
            <div class="col-12 col-md-6">
                <div class="row justify-content-center">
                    <div class="col-11">
                        <p class="topic">{{ $blog->title }}</p>
                    </div>
                </div>
                <div class="line"></div>
                <div class="row justify-content-center">
                    <div class="col-11">
                        <p id="description" class="description">{{ strip_tags($blog->description) }}</p>
                    </div>
                </div>
                <div class="row justify-content-start">
                    <div class="col-4 text-center btn-position">
                        <div class="btn-readmore">
                            <a class="readmore-text" href="{{ $blog->link }}">Read More</a>
                        </div>
                    </div>
                </div>
            </div>
            <div class="d-none d-md-block col-md-4">
                <img class="image-blog" src="{{ $blog->thumbnail }}" alt="" width="100%">
            </div>
        </div>
        <div class="row justify-viewall">
            <div class="col-6 col-md-3 text-center">
                <div class="btn-viewall">
                    <a class="viewall-text" href="https://medium.com/@joeywasin">VIEW ALL MY BLOGS</a>
                </div>
            </div>
            <div class="col-md-1 d-none d-md-block"></div>
        </div>
    </div>
</section>