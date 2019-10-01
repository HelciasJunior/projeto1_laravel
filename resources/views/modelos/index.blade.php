<div class="container">
    <div class="col-md-12">
        <form action="{{ route('modelos.store') }}" class="form-horizontal" method="POST">
            @foreach($modelos as $modelo)
                {{ $modelo->modelo }}
            @endforeach
        </form>
    </div>
</div>