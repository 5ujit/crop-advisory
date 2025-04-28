@extends('layouts.app')

@section('content')
<div class="crop-detail-container">
    <div class="crop-header">
        <div class="header-content">
            <h1><i class="fas fa-seedling"></i> {{ $crop->name }}</h1>
            <div class="crop-meta">
                <span class="meta-item"><i class="fas fa-hashtag"></i> ID: {{ $crop->id }}</span>
                <span class="meta-item"><i class="fas fa-calendar-alt"></i> Updated: {{ $crop->updated_at->format('M d, Y') }}</span>
            </div>
        </div>
        <div class="header-actions">
            <a href="{{ route('crops.edit', $crop->id) }}" class="btn btn-edit">
                <i class="fas fa-edit"></i> Edit
            </a>
            <form action="{{ route('crops.destroy', $crop->id) }}" method="POST" class="delete-form">
                @csrf
                @method('DELETE')
                <button type="submit" class="btn btn-delete" onclick="return confirm('Are you sure you want to delete this crop?')">
                    <i class="fas fa-trash"></i> Delete
                </button>
            </form>
        </div>
    </div>

    <div class="crop-details">
        <div class="detail-card">
            <div class="detail-header">
                <i class="fas fa-align-left"></i>
                <h3>Description</h3>
            </div>
            <div class="detail-content">
                <p>{{ $crop->description }}</p>
            </div>
        </div>

        <div class="detail-card">
            <div class="detail-header">
                <i class="fas fa-sun"></i>
                <h3>Ideal Growing Conditions</h3>
            </div>
            <div class="detail-content">
                <p>{{ $crop->ideal_conditions }}</p>
            </div>
        </div>
    </div>

    <div class="back-link">
        <a href="{{ route('crops.index') }}" class="btn btn-back">
            <i class="fas fa-arrow-left"></i> Back to All Crops
        </a>
    </div>
</div>

<style>
    /* Detail Container */
    .crop-detail-container {
        max-width: 900px;
        margin: 2rem auto;
        padding: 0 1.5rem;
    }

    /* Header */
    .crop-header {
        display: flex;
        justify-content: space-between;
        align-items: flex-start;
        margin-bottom: 2rem;
        flex-wrap: wrap;
        gap: 1.5rem;
    }

    .header-content {
        flex: 1;
        min-width: 300px;
    }

    .crop-header h1 {
        font-size: 2.2rem;
        color: var(--primary-dark);
        margin-bottom: 0.5rem;
        display: flex;
        align-items: center;
        gap: 0.8rem;
    }

    .crop-meta {
        display: flex;
        gap: 1.5rem;
        flex-wrap: wrap;
    }

    .meta-item {
        font-size: 0.9rem;
        color: #666;
        display: flex;
        align-items: center;
        gap: 0.5rem;
    }

    /* Header Actions */
    .header-actions {
        display: flex;
        gap: 1rem;
        align-items: center;
    }

    .btn {
        display: inline-flex;
        align-items: center;
        gap: 0.5rem;
        padding: 0.7rem 1.2rem;
        border-radius: 6px;
        font-weight: 500;
        text-decoration: none;
        transition: var(--transition);
        cursor: pointer;
        border: none;
    }

    .btn-edit {
        background: #ff9800;
        color: white;
    }

    .btn-edit:hover {
        background: #f57c00;
        transform: translateY(-2px);
        box-shadow: 0 4px 8px rgba(255, 152, 0, 0.3);
    }

    .btn-delete {
        background: #f44336;
        color: white;
    }

    .btn-delete:hover {
        background: #d32f2f;
        transform: translateY(-2px);
        box-shadow: 0 4px 8px rgba(244, 67, 54, 0.3);
    }

    .delete-form {
        margin: 0;
    }

    /* Detail Cards */
    .crop-details {
        display: grid;
        grid-template-columns: 1fr;
        gap: 1.5rem;
        margin-bottom: 2rem;
    }

    .detail-card {
        background: white;
        border-radius: 10px;
        box-shadow: 0 4px 12px rgba(0, 0, 0, 0.08);
        overflow: hidden;
    }

    .detail-header {
        padding: 1rem 1.5rem;
        background: rgba(46, 125, 50, 0.05);
        border-bottom: 1px solid #eee;
        display: flex;
        align-items: center;
        gap: 0.8rem;
    }

    .detail-header h3 {
        margin: 0;
        color: var(--primary-dark);
        font-size: 1.2rem;
    }

    .detail-header i {
        color: var(--primary-color);
        font-size: 1.2rem;
    }

    .detail-content {
        padding: 1.5rem;
    }

    .detail-content p {
        margin: 0;
        color: #444;
        line-height: 1.6;
        white-space: pre-line;
    }

    /* Back Link */
    .back-link {
        margin-top: 2rem;
    }

    .btn-back {
        background: #f5f5f5;
        color: #333;
        border: 1px solid #ddd;
        padding: 0.8rem 1.5rem;
    }

    .btn-back:hover {
        background: #e9e9e9;
        transform: translateY(-2px);
    }

    /* Responsive */
    @media (max-width: 768px) {
        .crop-header {
            flex-direction: column;
        }
        
        .header-actions {
            width: 100%;
        }
        
        .btn {
            flex: 1;
            justify-content: center;
        }
    }
</style>
@endsection