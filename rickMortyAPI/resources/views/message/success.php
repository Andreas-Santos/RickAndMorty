@if(session()->has('success'))
    <div class="alert alert-success alert-dismissible fade show mt-3" role="alert">
        <p>{{ session('success')}}</p>
        <button class="btn-close" data-bs-dismiss="alert" aria-label="Fechar"></button>
    </div>
@endif