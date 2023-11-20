<div>
    <div class="row mb-2">
        <div class="col-6">
            <h5>Settinjgs</h5>
        </div>
    </div>
    <div class="card">
        <div class="card-body">
            <ul class="nav nav-pills nav-justified bg-body-secondary" role="tablist">
                <li class="nav-item" role="presentation"> <a class="nav-link active" data-bs-toggle="tab" href="#home" role="tab" aria-selected="true"> <span class="d-block d-sm-none"><i class="fas fa-home"></i></span> <span class="d-none d-sm-block">Home</span> </a> </li>
                <li class="nav-item" role="presentation"> <a class="nav-link" data-bs-toggle="tab" href="#about" role="tab" aria-selected="true"> <span class="d-block d-sm-none"><i class="fas fa-home"></i></span> <span class="d-none d-sm-block">About Us</span> </a> </li>
                <li class="nav-item" role="presentation"> <a class="nav-link" data-bs-toggle="tab" href="#contact" role="tab" aria-selected="true"> <span class="d-block d-sm-none"><i class="fas fa-home"></i></span> <span class="d-none d-sm-block">Contact Us</span> </a> </li>
            </ul>
            <div class="tab-content p-3 text-muted">
                <div class="tab-pane active show" id="home" role="tabpanel">
                    <livewire-backend.settings.home/>
                </div>
                <div class="tab-pane" id="about" role="tabpanel">
                    <livewire-backend.settings.about-us/>
                </div>
                <div class="tab-pane" id="contact" role="tabpanel">
                    <livewire-backend.settings.contact-us/>
                </div>
            </div>
        </div>
    </div>
</div>
