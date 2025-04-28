@foreach($crops as $index => $crop)
    <div class="crop-card">
        <div class="crop-header">
            <h3>{{ $crop->name }}</h3>
            <span class="crop-id">
                #{{ ($crops->firstItem() ?? 0) + $index }}
            </span>
        </div>
        <p>{{ $crop->description }}</p>
    </div>
@endforeach
