<x-admin-layout title="Dashboard" active="dashboard">
    @push('addonStyle')
        <style>
            body {
                background: #dae3ec !important;
            }

            .small-box {
                background: #fff;
                border-radius: 10px;
                padding: 20px;
                box-shadow: 0px 4px 10px rgba(0, 0, 0, 0.1);
                text-align: center;
                transition: all 0.3s ease;
            }

            .small-box:hover {
                transform: translateY(-5px);
            }

            .small-box .inner {
                margin-bottom: 20px;
            }

            .small-box .inner .d-flex {
                align-items: center;
                justify-content: center;
            }

            .small-box .inner h3 {
                font-size: 2.5rem;
                margin-bottom: 0;
            }

            .small-box .inner h6 {
                font-size: 0.875rem;
                color: #6c757d;
            }

            .progress {
                display: flex;
                height: 0.5rem;
                overflow: hidden;
                font-size: .75rem;
                background-color: #e9ecef;
                border-radius: 0.25rem;
                margin-top: 20px;
            }

            .progress-bar {
                background-color: #6c757d;
            }

            .card-home .card-body .card-title {
                font-size: 24px !important;
                font-weight: 600 !important;
                color: #131313;
            }

            .card-home .card-body .card-text {
                font-size: 14px !important;
                font-weight: 600 !important;
                color: #131313;
            }
        </style>
    @endpush


    <div class="row justify-content-center align-items-center g-2">
        <div class="col">
            <div class="small-box">
                <div class="inner">
                    <div class="d-flex">
                        <i class="fas fa-clipboard me-3"></i>
                        <h3>ff</h3>
                    </div>
                    <h6>waralaba terdaftar</h6>
                </div>
            </div>
        </div>
        <div class="col">
            <div class="small-box">
                <div class="inner">
                    <div class="d-flex">
                        <i class="fas fa-list-alt me-3"></i>
                        <h3>ff</h3>
                    </div>
                    <h6>Artikel diterbitkan</h6>
                </div>
            </div>
        </div>
        <div class="col">
            <div class="small-box">
                <div class="inner">
                    <div class="d-flex">
                        <i class="fas fa-cart-arrow-down me-3"></i>
                        <h3>fg</h3>
                    </div>
                    <h6>Produk Terjual</h6>
                </div>
            </div>
        </div>
    </div>

    <h4 class="mt-3">Progres waralaba</h4>
    <div class="card card-home mt-4 border-0 ">
        <div class="row g-0">
            <div class="col-md-8">
                <div class="card-body">
                    <h5 class="card-title">ffff</h5>

                    <div class="d-flex justify-content-between mt-5">
                        <p class="card-text"><small class="text-muted">dx Pertemuan</small></p>
                        <p class="card-text">System</p>
                    </div>
                    <div class="progress mt-3">
                        <div class="progress-bar w-75" role="progressbar" aria-label="Basic example" aria-valuenow="75"
                            aria-valuemin="0" aria-valuemax="100"></div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    @push('addonScript')

        <script>
            document.querySelector('.navbar-expand-lg').classList.add('scrolled');

            const previewImage = document.querySelector('#previewImage');
            const image = document.querySelector('#image');

            image.addEventListener('change', function() {
                const file = new FileReader();
                file.readAsDataURL(image.files[0]);

                file.onload = function(e) {
                    previewImage.src = e.target.result;
                }
            })
        </script>
    @endpush
</x-dashboard-admin-layout>
