<x-user-layout title="WaraCareer" active="waracareer">
    @push('addonStyle')
    <style>
    body {
        background: #ffffff !important;
    }

    .navbar .navbar-nav a:hover.btn-signup {
        color: white !important;
    }

    .navbar .navbar-nav a:hover {
        color: #131313 !important;
    }

    .navbar .navbar-nav .active {
        color: #131313 !important;
    }

    .profil-name {
        color: #131313;
    }

    .bgTheme {
        background: #4F94D7 !important;
    }

    .navbar .btn-signup,
    .navbar-expand-lg .login {
        border-radius: 12px;
        padding: 7.6px 32px 8px 32px;
        color: white;
    }

    .hero h1 {
        font-weight: 500 !important;
        letter-spacing: 1px;
        line-height: 150%;
    }

    .nav-pills .nav-link.active {
        background-color: #3ECAB0;
        box-shadow: 0 0 5px #3ECAB0;
    }

    .nav-pills .nav-link {
        background-color: #0A2048;
        border: 0;
        border-radius: 0.25rem;
        color: rgba(255, 255, 255, 0.6);
    }

    .navbar-expand-lg {
        background-color: white !important;
        box-shadow: -1.5px 4px 16px rgb(118 126 148 / 20%);
        transition: background-color 200ms linear;
    }

    .job-card {
        display: grid;
        grid-template-columns: 80px auto 100px;
        grid-template-rows: 35px 10px 35px;
        width: 640px;
        height: 135px;
        border-top: 1px solid #e3e3e3;
        border-bottom: 1px solid #e3e3e3;
        padding: 24px;
        background-color: #fff;
        margin-bottom: 20px;
        margin-right: 20px;
        border-radius: 5px;
        border: none;
        box-shadow: 0 0 5px rgba(0, 0, 0, 0.1);
    }

    .job-card:hover,
    .job-card:focus {
        transform: scale(1.01);
        transition: transform 0.3s ease;
    }

    .company-logo-img {
        grid-area: 1 / 1 / 2 / 2;
        background-color: #fff;
        border: 1px solid #e3e3e3;
        height: 80px;
        width: 80px;
        box-sizing: border-box;
        position: relative;
        padding: 5px;
        border-radius: 4px;

    }

    .company-logo-img img {
        max-height: calc(100% - 10px);
        max-width: calc(100% - 10px);
        position: absolute;
        top: 50%;
        left: 50%;
        transform: translate(-50%, -50%);
    }

    .job-title {
        grid-area: 1 / 2 / 2 / 3;
        font-size: 16px;
        align-self: start;
        font-weight: 600;
        margin-top: 6px;
        padding: 0 24px;
    }

    .company-name {
        grid-area: 2 / 2 / 3 / 3;
        align-self: center;
        font-size: 14px;
        color: #777;
        padding: 0 24px;
    }

    .apply {
        grid-area: 1 / 3 / 2 / 4;
        background-color: #1ab059;
        color: #fff;
        display: block;
        width: 100%;
        cursor: pointer;
        border: 0;
        border-radius: 4px;
        font-size: 14px;
        padding: 6px 12px;
        z-index: 2;
    }

    form {
        grid-area: 3 / 3 / 4 / 5;
        display: flex;
        align-items: flex-end;
        padding-top: 10px;
    }

    form button {
        margin-top: 10px;
        margin-left: 100px
    }

    .save {
        grid-area: 3 / 3 / 4 / 4;
        background-color: #fff;
        border: 1px solid #a4a5a8;
        color: #777;
        display: block;
        width: 100%;
        cursor: pointer;
        border-radius: 4px;
        font-size: 14px;
        padding: 6px 12px;
        z-index: 2;
        transition: background-color 0.3s ease;
    }

    .save:hover {
        background-color: #f0f0f0;
    }

    .salary {
        grid-area: 5 / 2 / 3 / 3;
        align-self: center;
        font-size: 14px;
        color: #000000;
        font-weight: 550;
        margin-top: 6px;
        padding: 0 24px;
    }

    .featured-image {
        width: 100%;
        height: 40%;
        margin-bottom: 30px;
        border-radius: 10px
    }
    </style>
    @endpush

    <section style="margin-top: 140px;">
        <div class="container">
            <div id="bannerCarousel" class="carousel slide" data-bs-ride="carousel">
                <div class="carousel-indicators">
                    <button type="button" data-bs-target="#bannerCarousel" data-bs-slide-to="0" class="active"
                        aria-current="true" aria-label="Slide 1"></button>
                    <button type="button" data-bs-target="#bannerCarousel" data-bs-slide-to="1"
                        aria-label="Slide 2"></button>
                </div>
                <div class="carousel-inner">
                    <div class="carousel-item active">
                        <a href="http://localhost:8000/career/37">
                            <img src="{{ asset('assets/frontend/image/banner-wc.svg') }}" class="d-block w-100"
                                alt="Banner 1">
                        </a>
                    </div>
                    <div class="carousel-item">
                        <a href="https://drive.google.com/drive/folders/1-bLVil98HxXz44N-H-8gfYTMVjvTbK69?usp=drive_link">
                            <img src="{{ asset('assets/frontend/image/banner-wc2.svg') }}" class="d-block w-100"
                                alt="Banner 2">
                        </a>
                    </div>
                </div>
                <button class="carousel-control-prev" type="button" data-bs-target="#bannerCarousel"
                    data-bs-slide="prev">
                    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                    <span class="visually-hidden">Previous</span>
                </button>
                <button class="carousel-control-next" type="button" data-bs-target="#bannerCarousel"
                    data-bs-slide="next">
                    <span class="carousel-control-next-icon" aria-hidden="true"></span>
                    <span class="visually-hidden">Next</span>
                </button>
            </div>
            <div class="row mt-5">
                @foreach($data as $career)
                <div class="job-card">
                    <div class="company-logo-img">
                        <img src="{{ $career->logo_url }}" />
                    </div>
                    <div class="job-title">{{ $career->career_title }}</div>
                    <div class="company-name">{{ $career->company_name }}</div>
                    <div class="salary">
                        <p>{{ $career->min_salary }} - {{ $career->max_salary }}</p>
                    </div>
                    <div class="button-container">
                        <button class="apply" onclick="applyJob({{ $career->id }})">Daftar</button>
                        <form action="{{ route('save.job', $career->id) }}" method="POST">
                            @csrf
                            <input type="hidden" name="user_id" value="{{ auth()->id() }}">
                            @php
                            // Retrieve the SavedJob record for the current user and career
                            $savedJob = auth()->user()->savedJobs()->where('career_id', $career->id)->first();
                            @endphp
                            @if($savedJob && $savedJob->is_saved)
                            <!-- If is_saved is true, show "Batalkan" button -->
                            <input type="hidden" name="is_saved" value="0">
                            <button type="submit" class="save"
                                style="background-color: #cf0606; color: #fff; border: none; margin-left: 0;">Batalkan</button>
                            @else
                            <!-- If is_saved is false, show "Simpan" button -->
                            <input type="hidden" name="is_saved" value="1">
                            <button type="submit" class="save" style="margin-left: 0;">Simpan</button>
                            @endif
                        </form>
                    </div>
                </div>
                @endforeach
            </div>
    </section>
</x-user-layout>

<script>
function applyJob(careerId) {
    window.location.href = "{{ route('career.show', 'career_id') }}".replace('career_id', careerId);
}
</script>