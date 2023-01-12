<x-app title="{!! $collection->name !!}">
    <div class="container p-5">

        <div class="card border-0 bg-light rounded-4 mb-4">
            <div class="card-body p-4">
                <h3>{{ $collection->name }}</h3>
            </div>
        </div>

        <div class="row row-cols-4">
            @foreach ($collection->recipes as $recipe)
                <div class="col">
                    <x-card-recipe :recipe='$recipe'></x-card-recipe>
                </div>
            @endforeach
        </div>
    </div>
</x-app>