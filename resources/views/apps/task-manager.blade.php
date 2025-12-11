<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Task Manager App - Ryan Mark Portfolio</title>
    <style>
        * { margin: 0; padding: 0; box-sizing: border-box; }
        body { font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif; background: linear-gradient(135deg, #667eea 0%, #764ba2 100%); min-height: 100vh; padding: 20px; }
        .container { max-width: 600px; margin: 0 auto; }
        .app-header { background: #fff; padding: 20px; border-radius: 15px 15px 0 0; box-shadow: 0 2px 10px rgba(0,0,0,0.1); }
        .app-header h1 { color: #333; font-size: 24px; margin-bottom: 5px; }
        .app-header p { color: #666; font-size: 14px; }
        .back-btn { display: inline-block; margin-bottom: 20px; padding: 10px 20px; background: rgba(255,255,255,0.2); color: #fff; text-decoration: none; border-radius: 8px; font-size: 14px; }
        .back-btn:hover { background: rgba(255,255,255,0.3); }
        .task-input { background: #fff; padding: 20px; border-bottom: 1px solid #eee; }
        .task-input input { width: 100%; padding: 12px; border: 2px solid #eee; border-radius: 8px; font-size: 16px; }
        .task-input input:focus { outline: none; border-color: #667eea; }
        .task-list { background: #fff; border-radius: 0 0 15px 15px; max-height: 500px; overflow-y: auto; }
        .task-item { padding: 15px 20px; border-bottom: 1px solid #eee; display: flex; align-items: center; gap: 15px; transition: background 0.2s; }
        .task-item:hover { background: #f9f9f9; }
        .task-item.completed { opacity: 0.6; }
        .task-item.completed .task-text { text-decoration: line-through; }
        .checkbox { width: 20px; height: 20px; border: 2px solid #ddd; border-radius: 4px; cursor: pointer; flex-shrink: 0; }
        .checkbox.checked { background: #667eea; border-color: #667eea; position: relative; }
        .checkbox.checked::after { content: '✓'; color: #fff; position: absolute; top: 50%; left: 50%; transform: translate(-50%, -50%); font-size: 14px; }
        .task-text { flex: 1; color: #333; font-size: 16px; }
        .delete-btn { background: #ff4757; color: #fff; border: none; padding: 6px 12px; border-radius: 6px; cursor: pointer; font-size: 12px; }
        .delete-btn:hover { background: #ff3838; }
        .empty-state { text-align: center; padding: 60px 20px; color: #999; }
        .empty-state svg { width: 80px; height: 80px; margin-bottom: 20px; opacity: 0.3; }
        .stats { background: #fff; padding: 15px 20px; display: flex; justify-content: space-around; border-top: 1px solid #eee; }
        .stat { text-align: center; }
        .stat-number { font-size: 24px; font-weight: bold; color: #667eea; }
        .stat-label { font-size: 12px; color: #999; margin-top: 5px; }
    </style>
</head>
<body>
    <div class="container">
        <a href="{{ url('/app-design') }}" class="back-btn">← Back to Portfolio</a>
        
        <div class="app-header">
            <h1>📝 Task Manager</h1>
            <p>Stay organized and productive</p>
        </div>

        <div class="task-input">
            <input type="text" id="taskInput" placeholder="Add a new task..." onkeypress="if(event.key==='Enter') addTask()">
        </div>

        <div class="task-list" id="taskList">
            <div class="empty-state" id="emptyState">
                <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2">
                    <path d="M9 11l3 3L22 4"></path>
                    <path d="M21 12v7a2 2 0 01-2 2H5a2 2 0 01-2-2V5a2 2 0 012-2h11"></path>
                </svg>
                <p>No tasks yet. Add one to get started!</p>
            </div>
        </div>

        <div class="stats">
            <div class="stat">
                <div class="stat-number" id="totalTasks">0</div>
                <div class="stat-label">Total</div>
            </div>
            <div class="stat">
                <div class="stat-number" id="completedTasks">0</div>
                <div class="stat-label">Completed</div>
            </div>
            <div class="stat">
                <div class="stat-number" id="pendingTasks">0</div>
                <div class="stat-label">Pending</div>
            </div>
        </div>
    </div>

    <script>
        let tasks = JSON.parse(localStorage.getItem('tasks')) || [];

        function renderTasks() {
            const taskList = document.getElementById('taskList');
            const emptyState = document.getElementById('emptyState');
            
            if (tasks.length === 0) {
                emptyState.style.display = 'block';
                return;
            }
            
            emptyState.style.display = 'none';
            taskList.innerHTML = tasks.map((task, index) => `
                <div class="task-item ${task.completed ? 'completed' : ''}">
                    <div class="checkbox ${task.completed ? 'checked' : ''}" onclick="toggleTask(${index})"></div>
                    <div class="task-text">${task.text}</div>
                    <button class="delete-btn" onclick="deleteTask(${index})">Delete</button>
                </div>
            `).join('');
            
            updateStats();
        }

        function addTask() {
            const input = document.getElementById('taskInput');
            const text = input.value.trim();
            
            if (text) {
                tasks.push({ text, completed: false, createdAt: new Date().toISOString() });
                input.value = '';
                saveTasks();
                renderTasks();
            }
        }

        function toggleTask(index) {
            tasks[index].completed = !tasks[index].completed;
            saveTasks();
            renderTasks();
        }

        function deleteTask(index) {
            tasks.splice(index, 1);
            saveTasks();
            renderTasks();
        }

        function saveTasks() {
            localStorage.setItem('tasks', JSON.stringify(tasks));
        }

        function updateStats() {
            const total = tasks.length;
            const completed = tasks.filter(t => t.completed).length;
            const pending = total - completed;
            
            document.getElementById('totalTasks').textContent = total;
            document.getElementById('completedTasks').textContent = completed;
            document.getElementById('pendingTasks').textContent = pending;
        }

        renderTasks();
    </script>
</body>
</html>
