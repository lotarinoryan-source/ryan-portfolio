<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Weather App - Ryan Mark Portfolio</title>
    <style>
        * { margin: 0; padding: 0; box-sizing: border-box; }
        body { font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif; background: linear-gradient(135deg, #fa709a 0%, #fee140 100%); min-height: 100vh; padding: 20px; }
        .container { max-width: 600px; margin: 0 auto; }
        .back-btn { display: inline-block; margin-bottom: 20px; padding: 10px 20px; background: rgba(255,255,255,0.2); color: #fff; text-decoration: none; border-radius: 8px; font-size: 14px; }
        .back-btn:hover { background: rgba(255,255,255,0.3); }
        .app-card { background: #fff; border-radius: 15px; overflow: hidden; box-shadow: 0 10px 30px rgba(0,0,0,0.2); }
        .app-header { background: linear-gradient(135deg, #fa709a 0%, #fee140 100%); padding: 30px; color: #fff; text-align: center; }
        .app-header h1 { font-size: 28px; margin-bottom: 10px; }
        .search-box { padding: 20px; }
        .search-box input { width: 100%; padding: 12px; border: 2px solid #eee; border-radius: 8px; font-size: 16px; }
        .weather-display { padding: 40px 20px; text-align: center; }
        .weather-icon { font-size: 100px; margin-bottom: 20px; }
        .temperature { font-size: 64px; font-weight: bold; color: #333; margin-bottom: 10px; }
        .weather-desc { font-size: 24px; color: #666; margin-bottom: 30px; }
        .weather-details { display: grid; grid-template-columns: repeat(3, 1fr); gap: 15px; padding: 20px; }
        .detail-card { background: #f8f9fa; padding: 15px; border-radius: 10px; text-align: center; }
        .detail-value { font-size: 24px; font-weight: bold; color: #fa709a; margin-bottom: 5px; }
        .detail-label { color: #666; font-size: 13px; }
        .forecast { padding: 20px; }
        .forecast-title { font-size: 18px; font-weight: bold; color: #333; margin-bottom: 15px; }
        .forecast-grid { display: grid; grid-template-columns: repeat(5, 1fr); gap: 10px; }
        .forecast-item { background: #f8f9fa; padding: 15px 10px; border-radius: 8px; text-align: center; }
        .forecast-day { font-size: 12px; color: #666; margin-bottom: 10px; }
        .forecast-icon { font-size: 32px; margin-bottom: 10px; }
        .forecast-temp { font-size: 16px; font-weight: bold; color: #333; }
    </style>
</head>
<body>
    <div class="container">
        <a href="{{ url('/app-design') }}" class="back-btn">← Back to Portfolio</a>
        
        <div class="app-card">
            <div class="app-header">
                <h1>🌤️ Weather App</h1>
                <p>Check weather forecasts</p>
            </div>

            <div class="search-box">
                <input type="text" id="cityInput" placeholder="Enter city name..." onkeypress="if(event.key==='Enter') searchWeather()">
            </div>

            <div class="weather-display">
                <div class="weather-icon" id="weatherIcon">☀️</div>
                <div class="temperature" id="temperature">25°C</div>
                <div class="weather-desc" id="weatherDesc">Sunny</div>
                <div style="color:#999;font-size:18px;" id="cityName">Manila, Philippines</div>
            </div>

            <div class="weather-details">
                <div class="detail-card">
                    <div class="detail-value" id="humidity">65%</div>
                    <div class="detail-label">Humidity</div>
                </div>
                <div class="detail-card">
                    <div class="detail-value" id="windSpeed">12 km/h</div>
                    <div class="detail-label">Wind Speed</div>
                </div>
                <div class="detail-card">
                    <div class="detail-value" id="feelsLike">27°C</div>
                    <div class="detail-label">Feels Like</div>
                </div>
            </div>

            <div class="forecast">
                <div class="forecast-title">5-Day Forecast</div>
                <div class="forecast-grid" id="forecastGrid"></div>
            </div>
        </div>
    </div>

    <script>
        const cities = {
            'Manila': { temp: 32, desc: 'Sunny', icon: '☀️', humidity: 75, wind: 15, feels: 35 },
            'Tokyo': { temp: 18, desc: 'Cloudy', icon: '☁️', humidity: 60, wind: 10, feels: 17 },
            'New York': { temp: 15, desc: 'Rainy', icon: '🌧️', humidity: 80, wind: 20, feels: 13 },
            'London': { temp: 12, desc: 'Foggy', icon: '🌫️', humidity: 85, wind: 8, feels: 10 },
            'Paris': { temp: 16, desc: 'Partly Cloudy', icon: '⛅', humidity: 65, wind: 12, feels: 15 },
            'Sydney': { temp: 22, desc: 'Clear', icon: '🌤️', humidity: 55, wind: 18, feels: 23 }
        };

        function searchWeather() {
            const city = document.getElementById('cityInput').value.trim();
            const weather = cities[city] || cities['Manila'];
            
            document.getElementById('cityName').textContent = city || 'Manila, Philippines';
            document.getElementById('weatherIcon').textContent = weather.icon;
            document.getElementById('temperature').textContent = weather.temp + '°C';
            document.getElementById('weatherDesc').textContent = weather.desc;
            document.getElementById('humidity').textContent = weather.humidity + '%';
            document.getElementById('windSpeed').textContent = weather.wind + ' km/h';
            document.getElementById('feelsLike').textContent = weather.feels + '°C';
            
            renderForecast(weather.temp);
        }

        function renderForecast(baseTemp) {
            const days = ['Mon', 'Tue', 'Wed', 'Thu', 'Fri'];
            const icons = ['☀️', '⛅', '☁️', '🌧️', '⛈️'];
            const grid = document.getElementById('forecastGrid');
            
            grid.innerHTML = days.map((day, i) => {
                const temp = baseTemp + Math.floor(Math.random() * 6) - 3;
                return `
                    <div class="forecast-item">
                        <div class="forecast-day">${day}</div>
                        <div class="forecast-icon">${icons[i]}</div>
                        <div class="forecast-temp">${temp}°C</div>
                    </div>
                `;
            }).join('');
        }

        renderForecast(25);
    </script>
</body>
</html>
