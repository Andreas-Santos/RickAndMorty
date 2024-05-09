@if(session()->has('error'))
    <div class="alert alert-danger alert-dismissible fade show mt-3" role="alert">
        <p>{{ session('error')}}</p>
        <button class="btn-close" data-bs-dismiss="alert" aria-label="Fechar"></button>
    </div>
@endif