@extends('layouts.app')

@section('content')
<div class="crop-suggestions-container">
    <div class="suggestions-header">
        <div class="header-content">
            <h1><i class="fas fa-seedling"></i> Smart Crop Advisor</h1>
            <p class="subtitle">AI-powered recommendations tailored to your unique farming conditions</p>
            <div class="header-decoration">
                <div class="decoration-line"></div>
                <div class="decoration-icon"><i class="fas fa-leaf"></i></div>
                <div class="decoration-line"></div>
            </div>
        </div>
    </div>

    <div class="selection-panel">
        <div class="selection-form card">
            <div class="card-header">
                <h2><i class="fas fa-tune"></i> Farming Parameters</h2>
                <p>Customize the parameters to get personalized recommendations</p>
            </div>

            <div class="form-content">
                <div class="form-grid">
                    <div class="form-group">
                        <label for="region"><i class="fas fa-map-marked-alt"></i> Region</label>
                        <div class="select-wrapper">
                            <select id="region" class="form-control">
                                <option value="">Select your region</option>
                                <option>Northern Highlands</option>
                                <option>Central Valley</option>
                                <option>Southern Plains</option>
                                <option>Eastern Foothills</option>
                                <option>Western Coast</option>
                            </select>
                            <i class="fas fa-chevron-down"></i>
                        </div>
                    </div>

                    <div class="form-group">
                        <label for="soil-type"><i class="fas fa-mountain"></i> Soil Type</label>
                        <div class="select-wrapper">
                            <select id="soil-type" class="form-control">
                                <option value="">Select soil type</option>
                                <option>Clay</option>
                                <option>Sandy</option>
                                <option>Loamy</option>
                                <option>Silty</option>
                                <option>Peaty</option>
                                <option>Chalky</option>
                            </select>
                            <i class="fas fa-chevron-down"></i>
                        </div>
                    </div>

                    <div class="form-group">
                        <label for="season"><i class="fas fa-calendar-alt"></i> Growing Season</label>
                        <div class="select-wrapper">
                            <select id="season" class="form-control">
                                <option value="">Select season</option>
                                <option>Spring (Mar-May)</option>
                                <option>Summer (Jun-Aug)</option>
                                <option>Autumn (Sep-Nov)</option>
                                <option>Winter (Dec-Feb)</option>
                            </select>
                            <i class="fas fa-chevron-down"></i>
                        </div>
                    </div>

                    <div class="form-group">
                        <label for="water-availability"><i class="fas fa-tint"></i> Water Availability</label>
                        <div class="select-wrapper">
                            <select id="water-availability" class="form-control">
                                <option value="">Select availability</option>
                                <option>High (Irrigation available)</option>
                                <option>Moderate (Limited irrigation)</option>
                                <option>Low (Rainfed only)</option>
                            </select>
                            <i class="fas fa-chevron-down"></i>
                        </div>
                    </div>
                </div>

                <button class="generate-btn" id="generate-btn">
                    <i class="fas fa-magic"></i> Generate Recommendations
                    <div class="btn-hover-effect"></div>
                </button>
            </div>
        </div>

        <div class="weather-integration">
            <div class="weather-card card">
                <div class="weather-header">
                    <h3><i class="fas fa-cloud-sun"></i> Current Weather</h3>
                    <p>Real-time data for accurate suggestions</p>
                </div>
                <div class="weather-data">
                    <div class="weather-item">
                        <div class="weather-icon temp-icon">
                            <i class="fas fa-temperature-high"></i>
                        </div>
                        <div class="weather-info">
                            <span class="weather-value">24°C</span>
                            <span class="weather-label">Temperature</span>
                        </div>
                    </div>
                    <div class="weather-item">
                        <div class="weather-icon humidity-icon">
                            <i class="fas fa-tint"></i>
                        </div>
                        <div class="weather-info">
                            <span class="weather-value">65%</span>
                            <span class="weather-label">Humidity</span>
                        </div>
                    </div>
                    <div class="weather-item">
                        <div class="weather-icon wind-icon">
                            <i class="fas fa-wind"></i>
                        </div>
                        <div class="weather-info">
                            <span class="weather-value">12 km/h</span>
                            <span class="weather-label">Wind Speed</span>
                        </div>
                    </div>
                </div>
                <div class="weather-footer">
                    <i class="fas fa-sync-alt"></i> Updated 5 minutes ago
                </div>
            </div>
        </div>
    </div>

    <div class="recommendations-section">
        <div class="section-header">
            <h2><i class="fas fa-star"></i> Recommended Crops</h2>
            <p>Optimized selections based on your parameters and current conditions</p>
            <div class="result-count" id="result-count">Ready for recommendations</div>
        </div>

        <div class="crops-grid" id="crops-grid">
            <div class="loading-message" id="loading-message">
                <div class="loading-spinner">
                    <div class="spinner"></div>
                </div>
                <p>Analyzing your farming conditions...</p>
            </div>
        </div>
    </div>

    <style>
        :root {
            --primary-color: #4CAF50;
            --primary-dark: #388E3C;
            --primary-light: #C8E6C9;
            --secondary-color: #FFC107;
            --accent-color: #FF5722;
            --dark-text: #263238;
            --light-text: #607D8B;
            --border-color: #E0E0E0;
            --card-shadow: 0 10px 30px rgba(0, 0, 0, 0.08);
            --hover-shadow: 0 15px 35px rgba(0, 0, 0, 0.12);
        }

        /* Main Container */
        .crop-suggestions-container {
            max-width: 1400px;
            margin: 0 auto;
            padding: 2rem;
            font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;
            color: var(--dark-text);
            background-color: #f8f9fa;
        }

        /* Header Section */
        .suggestions-header {
            text-align: center;
            margin-bottom: 3rem;
            position: relative;
        }

        .header-content {
            max-width: 800px;
            margin: 0 auto;
        }

        .suggestions-header h1 {
            color: var(--primary-dark);
            font-size: 2.5rem;
            margin-bottom: 1rem;
            font-weight: 700;
            display: flex;
            align-items: center;
            justify-content: center;
            gap: 1rem;
        }

        .suggestions-header .subtitle {
            color: var(--light-text);
            font-size: 1.1rem;
            margin-bottom: 1.5rem;
            line-height: 1.5;
        }

        .header-decoration {
            display: flex;
            align-items: center;
            justify-content: center;
            margin: 1.5rem 0;
        }

        .decoration-line {
            height: 2px;
            width: 80px;
            background: linear-gradient(to right, transparent, var(--primary-color), transparent);
        }

        .decoration-icon {
            margin: 0 1.5rem;
            color: var(--primary-color);
            font-size: 1.2rem;
        }

        /* Card Styles */
        .card {
            background: white;
            border-radius: 12px;
            box-shadow: var(--card-shadow);
            overflow: hidden;
            transition: all 0.3s ease;
        }

        .card:hover {
            transform: translateY(-5px);
            box-shadow: var(--hover-shadow);
        }

        .card-header {
            padding: 1.5rem;
            border-bottom: 1px solid var(--border-color);
        }

        .card-header h2 {
            margin: 0;
            font-size: 1.5rem;
            color: var(--primary-dark);
            display: flex;
            align-items: center;
            gap: 0.8rem;
        }

        .card-header p {
            margin: 0.5rem 0 0;
            color: var(--light-text);
            font-size: 0.95rem;
        }

        /* Selection Panel */
        .selection-panel {
            display: grid;
            grid-template-columns: 2fr 1fr;
            gap: 2rem;
            margin-bottom: 3rem;
        }

        @media (max-width: 1024px) {
            .selection-panel {
                grid-template-columns: 1fr;
            }
        }

        /* Form Styles */
        .form-content {
            padding: 1.5rem;
        }

        .form-grid {
            display: grid;
            grid-template-columns: repeat(auto-fit, minmax(220px, 1fr));
            gap: 1.5rem;
            margin-bottom: 1.5rem;
        }

        .form-group {
            margin-bottom: 0;
        }

        .form-group label {
            display: block;
            margin-bottom: 0.8rem;
            font-weight: 600;
            color: var(--dark-text);
            display: flex;
            align-items: center;
            gap: 0.6rem;
            font-size: 0.95rem;
        }

        .select-wrapper {
            position: relative;
        }

        .select-wrapper i {
            position: absolute;
            right: 15px;
            top: 50%;
            transform: translateY(-50%);
            color: var(--light-text);
            pointer-events: none;
        }

        .form-control {
            width: 100%;
            padding: 0.9rem 1.2rem;
            border: 1px solid var(--border-color);
            border-radius: 8px;
            font-size: 1rem;
            appearance: none;
            background-color: white;
            transition: all 0.3s ease;
        }

        .form-control:focus {
            border-color: var(--primary-color);
            outline: none;
            box-shadow: 0 0 0 3px rgba(76, 175, 80, 0.2);
        }

        /* Generate Button */
        .generate-btn {
            position: relative;
            background: linear-gradient(135deg, var(--primary-color), var(--primary-dark));
            color: white;
            border: none;
            padding: 1.1rem 1.5rem;
            border-radius: 8px;
            font-weight: 600;
            cursor: pointer;
            transition: all 0.3s ease;
            display: flex;
            align-items: center;
            justify-content: center;
            gap: 0.8rem;
            width: 100%;
            font-size: 1.05rem;
            overflow: hidden;
            margin-top: 1rem;
        }

        .generate-btn:hover {
            transform: translateY(-2px);
            box-shadow: 0 5px 15px rgba(76, 175, 80, 0.4);
        }

        .btn-hover-effect {
            position: absolute;
            width: 100%;
            height: 100%;
            background: linear-gradient(135deg, rgba(255, 255, 255, 0.2), transparent);
            top: 0;
            left: -100%;
            transition: all 0.4s ease;
        }

        .generate-btn:hover .btn-hover-effect {
            left: 100%;
        }

        /* Weather Card */
        .weather-card {
            height: 100%;
            display: flex;
            flex-direction: column;
            background: linear-gradient(135deg, #3a7bd5, #00d2ff);
            color: white;
        }

        .weather-header {
            padding: 1.5rem;
            border-bottom: 1px solid rgba(255, 255, 255, 0.2);
        }

        .weather-header h3 {
            margin: 0;
            font-size: 1.3rem;
            display: flex;
            align-items: center;
            gap: 0.8rem;
        }

        .weather-header p {
            margin: 0.5rem 0 0;
            opacity: 0.9;
            font-size: 0.9rem;
        }

        .weather-data {
            padding: 1.5rem;
            flex-grow: 1;
        }

        .weather-item {
            display: flex;
            align-items: center;
            margin-bottom: 1.5rem;
        }

        .weather-item:last-child {
            margin-bottom: 0;
        }

        .weather-icon {
            width: 50px;
            height: 50px;
            border-radius: 50%;
            display: flex;
            align-items: center;
            justify-content: center;
            margin-right: 1rem;
            font-size: 1.2rem;
            background: rgba(255, 255, 255, 0.15);
        }

        .temp-icon { background: rgba(255, 107, 107, 0.2); }
        .humidity-icon { background: rgba(77, 182, 255, 0.2); }
        .wind-icon { background: rgba(255, 215, 0, 0.2); }

        .weather-info {
            display: flex;
            flex-direction: column;
        }

        .weather-value {
            font-size: 1.4rem;
            font-weight: 600;
        }

        .weather-label {
            font-size: 0.9rem;
            opacity: 0.9;
        }

        .weather-footer {
            padding: 1rem 1.5rem;
            border-top: 1px solid rgba(255, 255, 255, 0.2);
            font-size: 0.8rem;
            display: flex;
            align-items: center;
            gap: 0.5rem;
            opacity: 0.8;
        }

        /* Recommendations Section */
        .recommendations-section {
            margin-bottom: 3rem;
        }

        .section-header {
            text-align: center;
            margin-bottom: 2rem;
        }

        .section-header h2 {
            color: var(--primary-dark);
            font-size: 1.8rem;
            margin-bottom: 0.5rem;
            display: flex;
            align-items: center;
            justify-content: center;
            gap: 0.8rem;
        }

        .section-header p {
            color: var(--light-text);
            max-width: 700px;
            margin: 0 auto 1rem;
            line-height: 1.5;
        }

        .result-count {
            font-size: 0.9rem;
            color: var(--light-text);
            font-weight: 500;
            background: rgba(76, 175, 80, 0.1);
            padding: 0.5rem 1rem;
            border-radius: 50px;
            display: inline-block;
        }

        /* Crops Grid */
        .crops-grid {
            display: grid;
            grid-template-columns: repeat(auto-fill, minmax(280px, 1fr));
            gap: 1.5rem;
            min-height: 300px;
            position: relative;
        }

        /* Loading Message */
        .loading-message {
            position: absolute;
            top: 50%;
            left: 50%;
            transform: translate(-50%, -50%);
            text-align: center;
            width: 100%;
        }

        .loading-spinner {
            margin: 0 auto 1rem;
            width: 50px;
            height: 50px;
            display: flex;
            align-items: center;
            justify-content: center;
        }

        .spinner {
            width: 40px;
            height: 40px;
            border: 4px solid var(--primary-light);
            border-top: 4px solid var(--primary-color);
            border-radius: 50%;
            animation: spin 1s linear infinite;
        }

        @keyframes spin {
            0% { transform: rotate(0deg); }
            100% { transform: rotate(360deg); }
        }

        .loading-message p {
            color: var(--light-text);
            font-size: 1.1rem;
            margin: 0;
        }

        /* Crop Cards */
        .crop-card {
            background: white;
            border-radius: 10px;
            overflow: hidden;
            box-shadow: var(--card-shadow);
            transition: all 0.3s ease;
            display: flex;
            flex-direction: column;
        }

        .crop-card:hover {
            transform: translateY(-8px);
            box-shadow: var(--hover-shadow);
        }

        .crop-header {
            padding: 0.8rem 1rem;
            display: flex;
            justify-content: flex-end;
            background: linear-gradient(to right, #f5f5f5, white);
        }

        .profit-potential {
            font-size: 0.75rem;
            font-weight: 700;
            padding: 0.3rem 0.8rem;
            border-radius: 50px;
            text-transform: uppercase;
            letter-spacing: 0.5px;
        }

        .profit-potential.high {
            background: var(--primary-color);
            color: white;
        }

        .profit-potential.medium {
            background: var(--secondary-color);
            color: var(--dark-text);
        }

        .profit-potential.low {
            background: #e0e0e0;
            color: var(--dark-text);
        }

        .crop-image {
            height: 180px;
            overflow: hidden;
            position: relative;
        }

        .crop-image img {
            width: 100%;
            height: 100%;
            object-fit: cover;
            transition: transform 0.5s ease;
        }

        .crop-card:hover .crop-image img {
            transform: scale(1.05);
        }

        .crop-content {
            padding: 1.5rem;
            flex-grow: 1;
            display: flex;
            flex-direction: column;
        }

        .crop-name {
            margin: 0 0 1rem;
            color: var(--primary-dark);
            font-size: 1.3rem;
            font-weight: 600;
        }

        .crop-details {
            margin-bottom: 1.5rem;
        }

        .detail-item {
            display: flex;
            align-items: center;
            margin-bottom: 0.8rem;
        }

        .detail-item:last-child {
            margin-bottom: 0;
        }

        .detail-item i {
            width: 24px;
            height: 24px;
            background: var(--primary-light);
            color: var(--primary-dark);
            border-radius: 50%;
            display: flex;
            align-items: center;
            justify-content: center;
            margin-right: 0.8rem;
            font-size: 0.8rem;
        }

        .detail-item span {
            font-size: 0.9rem;
            color: var(--light-text);
        }

        .crop-footer {
            margin-top: auto;
            display: flex;
            justify-content: space-between;
            align-items: center;
            padding-top: 1rem;
            border-top: 1px solid var(--border-color);
        }

        .suitability-score {
            font-weight: 600;
            color: var(--primary-dark);
        }

        .view-details {
            color: var(--primary-color);
            font-weight: 600;
            font-size: 0.9rem;
            text-decoration: none;
            display: flex;
            align-items: center;
            gap: 0.3rem;
            transition: all 0.2s ease;
        }

        .view-details:hover {
            color: var(--primary-dark);
        }

        .view-details i {
            font-size: 0.8rem;
            transition: transform 0.2s ease;
        }

        .view-details:hover i {
            transform: translateX(3px);
        }

        /* No Results Message */
        .no-recommendations {
            grid-column: 1 / -1;
            text-align: center;
            padding: 3rem;
            color: var(--light-text);
        }

        .no-recommendations i {
            font-size: 3rem;
            color: #e0e0e0;
            margin-bottom: 1rem;
        }

        .no-recommendations h3 {
            color: var(--dark-text);
            margin-bottom: 0.5rem;
        }

        /* Error Message */
        .error-message {
            grid-column: 1 / -1;
            text-align: center;
            padding: 3rem;
            color: #f44336;
        }

        /* Responsive Adjustments */
        @media (max-width: 768px) {
            .crop-suggestions-container {
                padding: 1.5rem;
            }

            .suggestions-header h1 {
                font-size: 2rem;
            }

            .form-grid {
                grid-template-columns: 1fr;
            }

            .crops-grid {
                grid-template-columns: 1fr;
            }
        }

        @media (max-width: 480px) {
            .suggestions-header h1 {
                font-size: 1.8rem;
                flex-direction: column;
                gap: 0.5rem;
            }

            .weather-item {
                flex-direction: column;
                text-align: center;
            }

            .weather-icon {
                margin-right: 0;
                margin-bottom: 0.5rem;
            }
        }
    </style>

    <script>
        document.addEventListener('DOMContentLoaded', function() {
            const generateBtn = document.getElementById('generate-btn');
            const cropsGrid = document.getElementById('crops-grid');
            const loadingMessage = document.getElementById('loading-message');
            const resultCount = document.getElementById('result-count');

            generateBtn.addEventListener('click', function() {
                const region = document.getElementById('region').value;
                const soilType = document.getElementById('soil-type').value;
                const season = document.getElementById('season').value;
                const waterAvailability = document.getElementById('water-availability').value;

                // Validate selections
                if (!region || !soilType || !season || !waterAvailability) {
                    alert('Please select all parameters to generate recommendations');
                    return;
                }

                // Show loading message
                cropsGrid.innerHTML = '';
                loadingMessage.style.display = 'block';
                resultCount.textContent = 'Analyzing your farming conditions...';

                fetch('/crop-suggestions', {
                    method: 'POST',
                    headers: {
                        'Content-Type': 'application/json',
                        'X-CSRF-TOKEN': '{{ csrf_token() }}'
                    },
                    body: JSON.stringify({
                        region: region,
                        soil_type: soilType,
                        season: season,
                        water_availability: waterAvailability
                    })
                })
                .then(response => {
                    if (!response.ok) {
                        throw new Error(`HTTP error! status: ${response.status}`);
                    }
                    return response.json();
                })
                .then(data => {
                    loadingMessage.style.display = 'none';
                    if (data.length > 0) {
                        resultCount.textContent = `Showing ${data.length} optimized recommendations`;
                        data.forEach(crop => {
                            const cropCard = `
                                <div class="crop-card">
                                    <div class="crop-header">
                                        <span class="profit-potential ${crop.profit_potential.toLowerCase()}">${crop.profit_potential.toUpperCase()}</span>
                                    </div>
                                    <div class="crop-image">
                                        <img src="${crop.image_url}" alt="${crop.crop_name}" onerror="this.src='https://source.unsplash.com/random/300x200/?agriculture'">
                                    </div>
                                    <div class="crop-content">
                                        <h3 class="crop-name">${crop.crop_name}</h3>
                                        <div class="crop-details">
                                            <div class="detail-item">
                                                <i class="fas fa-calendar-day"></i>
                                                <span>${crop.growth_duration}</span>
                                            </div>
                                            <div class="detail-item">
                                                <i class="fas fa-tint"></i>
                                                <span>${crop.water_requirement}</span>
                                            </div>
                                            <div class="detail-item">
                                                <i class="fas fa-thermometer-half"></i>
                                                <span>${crop.temperature_range}</span>
                                            </div>
                                        </div>
                                        <div class="crop-footer">
                                            <span class="suitability-score">${crop.suitability}</span>
                                            <a href="#" class="view-details">
                                                Details <i class="fas fa-chevron-right"></i>
                                            </a>
                                        </div>
                                    </div>
                                </div>
                            `;
                            cropsGrid.innerHTML += cropCard;
                        });
                    } else {
                        cropsGrid.innerHTML = `
                            <div class="no-recommendations">
                                <i class="fas fa-seedling"></i>
                                <h3>No Recommendations Found</h3>
                                <p>We couldn't find crops matching your selected parameters.</p>
                                <p>Try adjusting your criteria or contact our agricultural experts.</p>
                            </div>
                        `;
                        resultCount.textContent = '0 results found';
                    }
                })
                .catch(error => {
                    loadingMessage.style.display = 'none';
                    console.error('Error:', error);
                    cropsGrid.innerHTML = `
                        <div class="error-message">
                            <i class="fas fa-exclamation-triangle"></i>
                            <h3>Failed to Load Recommendations</h3>
                            <p>Please try again later or contact support if the problem persists.</p>
                        </div>
                    `;
                    resultCount.textContent = 'Error loading results';
                });
            });
        });
    </script>
</div>
@endsection