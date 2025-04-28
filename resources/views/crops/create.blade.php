@extends('layouts.app')

@section('content')
<div class="crop-form-container">
    <div class="form-header">
        <h1><i class="fas fa-plus-circle"></i> Add New Crop</h1>
        <p class="subtitle">Fill in the details below to add a new crop to the database</p>
    </div>

    <div class="form-card">
        <form action="{{ route('crops.store') }}" method="POST">
            @csrf
            
            <div class="form-group">
                <label for="name" class="form-label">
                    <i class="fas fa-tag"></i> Crop Name
                </label>
                <input type="text" name="name" id="name" class="form-control" required
                    placeholder="Enter crop name (e.g., Wheat, Tomato)">
                @error('name')
                    <span class="error-message">{{ $message }}</span>
                @enderror
            </div>

            <div class="form-group">
                <label for="description" class="form-label">
                    <i class="fas fa-align-left"></i> Description
                </label>
                <textarea name="description" id="description" rows="5" class="form-control" required
                    placeholder="Describe the crop characteristics, varieties, etc."></textarea>
                @error('description')
                    <span class="error-message">{{ $message }}</span>
                @enderror
            </div>

            <div class="form-group">
                <label for="ideal_conditions" class="form-label">
                    <i class="fas fa-sun"></i> Ideal Growing Conditions
                </label>
                <textarea name="ideal_conditions" id="ideal_conditions" rows="4" class="form-control" required
                    placeholder="Describe optimal soil, climate, water requirements"></textarea>
                @error('ideal_conditions')
                    <span class="error-message">{{ $message }}</span>
                @enderror
            </div>

            <div class="form-actions">
                <button type="submit" class="btn btn-primary">
                    <i class="fas fa-save"></i> Save Crop
                </button>
                <a href="{{ route('crops.index') }}" class="btn btn-secondary">
                    <i class="fas fa-times"></i> Cancel
                </a>
            </div>
        </form>
    </div>
</div>

<style>
    /* Form Container */
    .crop-form-container {
        max-width: 800px;
        margin: 2rem auto;
        padding: 0 1.5rem;
    }

    /* Form Header */
    .form-header {
        margin-bottom: 2rem;
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

    /* Responsive */
    @media (max-width: 600px) {
        .form-actions {
            flex-direction: column;
        }
        
        .btn {
            width: 100%;
            justify-content: center;
        }
    }
</style>
@endsection