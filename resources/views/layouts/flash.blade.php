<div class="mt-2">
    @if (session()->has('succes'))
        <div class="alert alert-succes" role="alert">
            {{ session('succes') }}
        </div>
    @endif
</div>