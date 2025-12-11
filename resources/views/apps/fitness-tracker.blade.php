<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Fitness Tracker - Ryan Mark Portfolio</title>
    <style>
        * { margin: 0; padding: 0; box-sizing: border-box; }
        body { font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif; background: linear-gradient(135deg, #667eea 0%, #764ba2 100%); min-height: 100vh; padding: 20px; }
        .container { max-width: 600px; margin: 0 auto; }
        .back-btn { display: inline-block; margin-bottom: 20px; padding: 10px 20px; background: rgba(255,255,255,0.2); color: #fff; text-decoration: none; border-radius: 8px; font-size: 14px; }
        .back-btn:hover { background: rgba(255,255,255,0.3); }
        .app-card { background: #fff; border-radius: 15px; overflow: hidden; box-shadow: 0 10px 30px rgba(0,0,0,0.2); }
        .app-header { background: linear-gradient(135deg, #667eea 0%, #764ba2 100%); padding: 30px; color: #fff; text-align: center; }
        .app-header h1 { font-size: 28px; margin-bottom: 10px; }
        .stats-grid { display: grid; grid-template-columns: repeat(2, 1fr); gap: 15px; padding: 20px; }
        .stat-card { background: #f8f9fa; padding: 20px; border-radius: 10px; text-align: center; }
        .stat-value { font-size: 32px; font-weight: bold; color: #667eea; margin-bottom: 5px; }
        .stat-label { color: #666; font-size: 14px; }
        .workout-form { padding: 20px; border-top: 1px solid #eee; }
        .form-group { margin-bottom: 15px; }
        .form-group label { display: block; color: #333; font-size: 14px; margin-bottom: 5px; font-weight: 600; }
        .form-group input, .form-group select { width: 100%; padding: 10px; border: 2px solid #eee; border-radius: 8px; font-size: 14px; }
        .btn { width: 100%; padding: 12px; background: #667eea; color: #fff; border: none; border-radius: 8px; font-size: 16px; cursor: pointer; font-weight: 600; }
        .btn:hover { background: #5568d3; }
        .workout-list { padding: 20px; max-height: 300px; overflow-y: auto; }
        .workout-item { background: #f8f9fa; padding: 15px; border-radius: 8px; margin-bottom: 10px; display: flex; justify-content: space-between; align-items: center; }
        .workout-info { flex: 1; }
        .workout-type { font-weight: 600; color: #333; margin-bottom: 5px; }
        .workout-details { color: #666; font-size: 13px; }
        .delete-btn { background: #ff4757; color: #fff; border: none; padding: 6px 12px; border-radius: 6px; cursor: pointer; font-size: 12px; }
    </style>
</head>
<body>
    <div class="container">
        <a href="{{ url('/app-design') }}" class="back-btn">← Back to Portfolio</a>
        
        <div class="app-card">
            <div class="app-header">
                <h1>💪 Fitness Tracker</h1>
                <p>Track your workouts and stay healthy</p>
            </div>

            <div class="stats-grid">
                <div class="stat-card">
                    <div class="stat-value" id="totalWorkouts">0</div>
                    <div class="stat-label">Workouts</div>
                </div>
                <div class="stat-card">
                    <div class="stat-value" id="totalCalories">0</div>
                    <div class="stat-label">Calories Burned</div>
                </div>
                <div class="stat-card">
                    <div class="stat-value" id="totalMinutes">0</div>
                    <div class="stat-label">Minutes</div>
                </div>
                <div class="stat-card">
                    <div class="stat-value" id="avgCalories">0</div>
                    <div class="stat-label">Avg Calories</div>
                </div>
            </div>

            <div class="workout-form">
                <div class="form-group">
                    <label>Workout Type</label>
                    <select id="workoutType">
                        <option value="Running">🏃 Running</option>
                        <option value="Cycling">🚴 Cycling</option>
                        <option value="Swimming">🏊 Swimming</option>
                        <option value="Gym">🏋️ Gym</option>
                        <option value="Yoga">🧘 Yoga</option>
                    </select>
                </div>
                <div class="form-group">
                    <label>Duration (minutes)</label>
                    <input type="number" id="duration" placeholder="30" min="1">
                </div>
                <div class="form-group">
                    <label>Calories Burned</label>
                    <input type="number" id="calories" placeholder="200" min="1">
                </div>
                <button class="btn" onclick="addWorkout()">Log Workout</button>
            </div>

            <div class="workout-list" id="workoutList"></div>
        </div>
    </div>

    <script>
        let workouts = JSON.parse(localStorage.getItem('workouts')) || [];

        function renderWorkouts() {
            const list = document.getElementById('workoutList');
            list.innerHTML = workouts.map((w, i) => `
                <div class="workout-item">
                    <div class="workout-info">
                        <div class="workout-type">${w.type}</div>
                        <div class="workout-details">${w.duration} min • ${w.calories} cal • ${new Date(w.date).toLocaleDateString()}</div>
                    </div>
                    <button class="delete-btn" onclick="deleteWorkout(${i})">Delete</button>
                </div>
            `).join('');
            updateStats();
        }

        function addWorkout() {
            const type = document.getElementById('workoutType').value;
            const duration = parseInt(document.getElementById('duration').value);
            const calories = parseInt(document.getElementById('calories').value);
            
            if (duration && calories) {
                workouts.unshift({ type, duration, calories, date: new Date().toISOString() });
                localStorage.setItem('workouts', JSON.stringify(workouts));
                document.getElementById('duration').value = '';
                document.getElementById('calories').value = '';
                renderWorkouts();
            }
        }

        function deleteWorkout(index) {
            workouts.splice(index, 1);
            localStorage.setItem('workouts', JSON.stringify(workouts));
            renderWorkouts();
        }

        function updateStats() {
            const total = workouts.length;
            const totalCal = workouts.reduce((sum, w) => sum + w.calories, 0);
            const totalMin = workouts.reduce((sum, w) => sum + w.duration, 0);
            const avgCal = total > 0 ? Math.round(totalCal / total) : 0;
            
            document.getElementById('totalWorkouts').textContent = total;
            document.getElementById('totalCalories').textContent = totalCal;
            document.getElementById('totalMinutes').textContent = totalMin;
            document.getElementById('avgCalories').textContent = avgCal;
        }

        renderWorkouts();
    </script>
</body>
</html>
