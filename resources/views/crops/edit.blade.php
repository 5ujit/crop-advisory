@extends('layouts.app')

@section('content')
<div class="crop-form-container">
    <div class="form-header">
        <div class="header-content">
            <h1><i class="fas fa-edit"></i> Edit Crop: {{ $crop->name }}</h1>
            <p class="subtitle">Update the details for this crop in the database</p>
        </div>
        <a href="{{ route('crops.index') }}" class="back-link">
            <i class="fas fa-arrow-left"></i> Back to All Crops
        </a>
    </div>

    <div class="form-card">
        <form action="{{ route('crops.update', $crop->id) }}" method="POST">
            @csrf
            @method('PUT')
            
            <div class="form-group">
                <label for="name" class="form-label">
                    <i class="fas fa-tag"></i> Crop Name
                </label>
                <input type="text" name="name" id="name" class="form-control" 
                    value="{{ old('name', $crop->name) }}" required
                    placeholder="Enter crop name">
                @error('name')
                    <span class="error-message">{{ $message }}</span>
                @enderror
            </div>

            <div class="form-group">
                <label for="description" class="form-label">
                    <i class="fas fa-align-left"></i> Description
                </label>
                <textarea name="description" id="description" rows="5" class="form-control" required
                    placeholder="Describe the crop characteristics, varieties, etc.">{{ old('description', $crop->description) }}</textarea>
                @error('description')
                    <span class="error-message">{{ $message }}</span>
                @enderror
            </div>

            <div class="form-group">
                <label for="ideal_conditions" class="form-label">
                    <i class="fas fa-sun"></i> Ideal Growing Conditions
                </label>
                <textarea name="ideal_conditions" id="ideal_conditions" rows="4" class="form-control" required
                    placeholder="Describe optimal soil, climate, water requirements">{{ old('ideal_conditions', $crop->ideal_conditions) }}</textarea>
                @error('ideal_conditions')
                    <span class="error-message">{{ $message }}</span>
                @enderror
            </div>

            <div class="form-actions">
                <button type="submit" class="btn btn-primary">
                    <i class="fas fa-save"></i> Update Crop
                </button>
                <a href="{{ route('crops.show', $crop->id) }}" class="btn btn-secondary">
                    <i class="fas fa-times"></i> Cancel
                </a>
                <button type="button" class="btn btn-danger" onclick="confirmDelete()">
                    <i class="fas fa-trash"></i> Delete Crop
                </button>
            </div>
        </form>

        <!-- Hidden Delete Form -->
        <form id="deleteForm" action="{{ route('crops.destroy', $crop->id) }}" method="POST" class="d-none">
            @csrf
            @method('DELETE')
        </form>
    </div>
</div>

<script>
    function confirmDelete() {
        if (confirm('Are you sure you want to delete this crop? This action cannot be undone.')) {
            document.getElementById('deleteForm').submit();
        }
    }
</script>

<style>
    /* Form Container */
    .crop-form-container {
        max-width: 800px;
        margin: 2rem auto;
        padding: 0 1.5rem;
    }

    /* Form Header */
    .form-header {
        display: flex;
        justify-content: space-between;
        align-items: flex-start;
        margin-bottom: 2rem;
        flex-wrap: wrap;
    }

    .header-content {
        flex: 1;
        min-width: 300px;
    }

    .form-header h1 {
        font-size: 2rem;
        color: var(--primary-dark);
        display: flex;
        align-items: center;
        gap: 0.8rem;
        margin-bottom: 0.5rem;
    }

    .form-header .subtitle {
        color: var(--dark-text);
        opacity: 0.8;
    }

    .back-link {
        display: flex;
        align-items: center;
        gap: 0.5rem;
        color: var(--primary-color);
        text-decoration: none;
        padding: 0.5rem 0;
        transition: var(--transition);
    }

    .back-link:hover {
        color: var(--primary-dark);
        text-decoration: underline;
    }

    /* Form Card */
    .form-card {
        background: white;
        padding: 2rem;
        border-radius: 10px;
        box-shadow: 0 4px 12px rgba(0, 0, 0, 0.08);
    }

    /* Form Groups */
    .form-group {
        margin-bottom: 1.5rem;
    }

    .form-label {
        display: block;
        margin-bottom: 0.5rem;
        font-weight: 500;
        color: var(--dark-text);
        display: flex;
        align-items: center;
        gap: 0.5rem;
    }

    .form-control {
        width: 100%;
        padding: 0.8rem 1rem;
        border: 1px solid #ddd;
        border-radius: 6px;
        font-size: 1rem;
        transition: var(--transition);
    }

    .form-control:focus {
        border-color: var(--primary-color);
        outline: none;
        box-shadow: 0 0 0 3px rgba(46, 125, 50, 0.2);
    }

    textarea.form-control {
        min-height: 120px;
        resize: vertical;
    }

    /* Error Messages */
    .error-message {
        color: #f44336;
        font-size: 0.8rem;
        margin-top: 0.3rem;
        display: block;
    }

    /* Form Actions */
    .form-actions {
        display: flex;
        gap: 1rem;
        margin-top: 2rem;
        flex-wrap: wrap;
    }

    .btn {
        display: inline-flex;
        align-items: center;
        gap: 0.5rem;
        padding: 0.8rem 1.5rem;
        border-radius: 6px;
        font-weight: 500;
        text-decoration: none;
        transition: var(--transition);
        cursor: pointer;
        border: none;
    }

    .btn-primary {
        background: var(--primary-color);
        color: white;
    }

    .btn-primary:hover {
        background: var(--primary-dark);
        transform: translateY(-2px);
        box-shadow: 0 4px 8px rgba(46, 125, 50, 0.3);
    }

    .btn-secondary {
        background: #f5f5f5;
        color: #333;
        border: 1px solid #ddd;
    }

    .btn-secondary:hover {
        background: #e9e9e9;
        transform: translateY(-2px);
    }

    .btn-danger {
        background: #f44336;
        color: white;
        margin-left: auto;
    }

    .btn-danger:hover {
        background: #d32f2f;
        transform: translateY(-2px);
    }

    /* Responsive */
    @media (max-width: 768px) {
        .form-header {
            flex-direction: column;
            gap: 1rem;
        }
        
        .form-actions {
            flex-direction: column;
        }
        
        .btn {
            width: 100%;
            justify-content: center;
        }
        
        .btn-danger {
            margin-left: 0;
            margin-top: 0.5rem;
        }
    }
</style>
@endsection