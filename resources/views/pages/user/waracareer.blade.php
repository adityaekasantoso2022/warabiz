<x-user-layout title="Warabiz-Career" active="waracareer">
    @push('addonStyle')
        <link rel="stylesheet" href="{{ asset('assets') }}/frontend/css/main.css">
        <link rel="stylesheet" href="{{ asset('assets') }}/frontend/css/waracareer.css">
        <style>
        .card-container,
        .course-card,
        .course-card-responsive {
            background: #fff;
            border: none;
            border-radius: 14px;
            box-sizing: border-box;
            color: #34364a;
            display: flex;
            flex-direction: column;
            height: 320px;
            width: 300px;
            padding: 20px;
            position: relative;
            row-gap: 16px;
            margin-top: 30px;
        }
    
        .pricing .item-pricing {
            background: #fff;
            border-radius: 16px;
            padding: 15px;
        }
    
        .course-card .course-detail .course-name,
        .course-card-responsive .course-detail .course-name,
        .line-clamp,
        .line-clamp-1 {
            -webkit-line-clamp: 2;
            -webkit-box-orient: vertical;
            display: -webkit-box;
            overflow: hidden;
        }
    
        .course-card .course-detail .course-name {
            color: #34364a;
            font-size: 16px;
            font-weight: 700;
            line-height: 24px;
            min-height: 10px;
            position: relative;
            z-index: 80 !important;
        }
    
        .course-card .course-footer {
            align-items: baseline;
            display: flex;
            gap: 4px;
            justify-content: space-between;
        }
    
        .course-card .course-footer .star-rating {
            align-items: flex-start;
            display: flex;
            flex-wrap: wrap;
            gap: 2px;
        }
    
        @media only screen and (max-width: 991.100px) {
            .col-md-6 {
                flex: 0 0 50%;
                max-width: 50%;
                padding-right: 0px;
                padding-left: 0px;
            }
    
            .course-card {
                width: calc(100% - 10px);
                margin-bottom: 20px;
            }
    
            .course-card img.small-circle-img {
                width: 35px;
                height: 30px;
            }
    
            .course-card .d-flex.flex-column {
                margin-top: 3px;
                margin-bottom: 3px;
            }
    
            .course-card .d-flex.flex-column h6 {
                font-size: 13px;
            }
    
            .course-card .d-flex.flex-column p {
                font-size: 12px;
            }
        }
    
        @media only screen and (min-width: 992px) {
            .course-card {
                width: 300px;
            }
        }
    
        .course-card .course-footer .star-rating img {
            width: 22px;
        }
    
        .embed-responsive {
            display: block;
            height: 20vh;
            overflow: hidden;
            padding: 0;
            position: relative;
            width: 100% !important;
        }
    
        .embed-responsive iframe {
            border-radius: 14px;
            width: 100%;
            height: 20vh;
        }
    
        .plyr__video-embed {
            position: absolute;
            top: 0;
            left: 0;
            width: 100%;
        }
    
        .small-circle-img {
            width: 50px;
            height: 50px;
            object-fit: contain;
            border-radius: 50%;
            overflow: hidden;
        }
    
        .d-flex.flex-column {
            margin-top: 5px;
            margin-bottom: 5px;
        }
    
        .d-flex.flex-column h6,
        .d-flex.flex-column p {
            margin: 0;
        }
        </style>
    @endpush
    <section class="hero ">
        <div class="img-header">
            <img src="{{ asset('assets') }}/frontend/image/discuse.jpg" alt="Hero Image" class="img-fluid" height="1080px" width="1920px">
        </div>
        <div class="layar-penuh">
            <section id="aboutus">
                <div class="layar-dalam">
                    <h3>Warabiz-Career</h3>
                </div>
                    @foreach($data as $career)
                    <div class="konten-isi text-justify" style="display: flex; justify-content: center; align-items: center;">
                        <p>{{ $career->about }}</p>
                    </div>
                    @endforeach
            </section>
            <section class="quote">
                <div class="layar-dalam">
                    <p>"If you want it, then you'll have to take it"</p>
                </div>
            </section>            
        </div>
        <div class="d-flex container align-items-center ">
            <div class="container">
                    <section class="justify-content">
                        <div class="container-scrollable">
                            <div class="container">
                                <div class="row">
                                @foreach($data as $career)
                                    <div class="col-md-6 col-lg-3 mb-3">
                                        <a href="{{ route('waracareer.detail') }}" class="text-decoration-none">
                                            <div class="course-card">
                                                <div class="embed-responsive embed-responsive-16by9 video-iframe">
                                                    <div class="plyr__video-embed" id="player">
                                                        <img src="{{ $career->image_url }}" alt="Company Logo 1" width="250" height="250" class="img-fluid"
                                                            alt="Gambar">
                                                    </div>
                                                </div>
                                                <div class="d-flex gap-3 align-items-center">
                                                    <img class="small-circle-img" src="{{ $career->logo_url }}" alt="Waralaba Image">
                                                    <div class="d-flex flex-column">
                                                        <h6><b>{{ $career->career_title }}</b></h6>
                                                        <p style="font-size: 12px">{{ $career->description }}</p>
                                                    </div>
                                                </div>
                                                <p style="font-size: 12px"><i class="fa fa-map-marker"></i> {{ $career->address }}</p>
                                            </div>
                                        </a>
                                    </div>
                                @endforeach
                                </div>
                            </div>
                        </div>
                    </section>
            </div> 
        </div>
    </section>
    @push('addonScript')
        <script src="https://d17ivq9b7rppb3.cloudfront.net/build/commons_script-eb16678ced.js"></script>
    @endpush
</x-user-layout>
