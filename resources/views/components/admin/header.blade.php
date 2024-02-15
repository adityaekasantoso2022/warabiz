<div class="page-heading">
    <div class="page-title">
        <div class="row">
            <div class="col-12 col-md-6 order-md-1 order-last">
                <h3>Dashoard</h3>
                <form action="{{ url('logout') }}" method="post">
                                @csrf
                                <button
                                    class="dropdown-item bg-white btn baseColor rounded-0 fw-bold text-white d-flex align-items-center m-0 py-3 shadow-none"
                                    type="submit">
                                    <p class="me-3"><i class="fas fa-sign-out-alt"></i></p>
                                    <p class="text-sm">Logout</p>
                                </button>
                            </form>
            </div>
        </div>
    </div>
</div>
