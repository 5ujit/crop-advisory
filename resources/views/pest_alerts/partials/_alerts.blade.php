@foreach ($alerts as $alert)
    <div class="alert-card {{ strtolower($alert->severity) }}">
        <div class="alert-header">
            <span class="alert-badge {{ strtolower($alert->severity) }}-bg">{{ strtoupper($alert->severity) }}</span>
            <span class="alert-date">{{ \Carbon\Carbon::parse($alert->date)->format('F d, Y') }}</span>
        </div>
        <h3 class="alert-title">{{ $alert->title }}</h3>
        <p class="alert-crop"><i class="fas fa-seedling"></i> Affected: {{ $alert->crop }}</p>
        <p class="alert-region"><i class="fas fa-map-marker-alt"></i> {{ $alert->location }} Region</p>
        <div class="alert-description">
            <p>{{ $alert->description }}</p>
        </div>
        <div class="alert-actions">
            <button class="action-button"><i class="fas fa-book"></i> Details</button>
            <button class="action-button"><i class="fas fa-file-download"></i> Report</button>
        </div>
    </div>
@endforeach
