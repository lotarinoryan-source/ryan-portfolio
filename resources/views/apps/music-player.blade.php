<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Music Player - Ryan Mark Portfolio</title>
    <style>
        * { margin: 0; padding: 0; box-sizing: border-box; }
        body { font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif; background: linear-gradient(135deg, #4facfe 0%, #00f2fe 100%); min-height: 100vh; padding: 20px; }
        .container { max-width: 600px; margin: 0 auto; }
        .back-btn { display: inline-block; margin-bottom: 20px; padding: 10px 20px; background: rgba(255,255,255,0.2); color: #fff; text-decoration: none; border-radius: 8px; font-size: 14px; }
        .back-btn:hover { background: rgba(255,255,255,0.3); }
        .app-card { background: #fff; border-radius: 15px; overflow: hidden; box-shadow: 0 10px 30px rgba(0,0,0,0.2); }
        .app-header { background: linear-gradient(135deg, #4facfe 0%, #00f2fe 100%); padding: 30px; color: #fff; text-align: center; }
        .app-header h1 { font-size: 28px; margin-bottom: 10px; }
        .now-playing { padding: 40px 20px; text-align: center; background: #f8f9fa; }
        .album-art { width: 200px; height: 200px; background: linear-gradient(135deg, #4facfe 0%, #00f2fe 100%); border-radius: 15px; margin: 0 auto 20px; display: flex; align-items: center; justify-content: center; font-size: 80px; }
        .song-title { font-size: 24px; font-weight: bold; color: #333; margin-bottom: 5px; }
        .song-artist { color: #666; font-size: 16px; }
        .progress-bar { width: 100%; height: 6px; background: #ddd; border-radius: 3px; margin: 20px 0; position: relative; cursor: pointer; }
        .progress { height: 100%; background: #4facfe; border-radius: 3px; width: 0%; transition: width 0.1s; }
        .time { display: flex; justify-content: space-between; color: #666; font-size: 12px; margin-top: 5px; }
        .controls { display: flex; justify-content: center; gap: 20px; padding: 20px; }
        .control-btn { width: 60px; height: 60px; border-radius: 50%; border: none; background: #4facfe; color: #fff; font-size: 24px; cursor: pointer; display: flex; align-items: center; justify-content: center; }
        .control-btn:hover { background: #3d9ae6; }
        .control-btn.play { width: 70px; height: 70px; font-size: 28px; }
        .playlist { padding: 20px; max-height: 300px; overflow-y: auto; }
        .playlist-title { font-size: 18px; font-weight: bold; color: #333; margin-bottom: 15px; }
        .playlist-item { padding: 15px; background: #f8f9fa; border-radius: 8px; margin-bottom: 10px; cursor: pointer; transition: background 0.2s; }
        .playlist-item:hover { background: #e9ecef; }
        .playlist-item.active { background: #4facfe; color: #fff; }
        .playlist-item-title { font-weight: 600; margin-bottom: 3px; }
        .playlist-item-artist { font-size: 13px; opacity: 0.8; }
    </style>
</head>
<body>
    <div class="container">
        <a href="{{ url('/app-design') }}" class="back-btn">← Back to Portfolio</a>
        
        <div class="app-card">
            <div class="app-header">
                <h1>🎵 Music Player</h1>
                <p>Your personal music library</p>
            </div>

            <div class="now-playing">
                <div class="album-art" id="albumArt">🎵</div>
                <div class="song-title" id="songTitle">Select a song</div>
                <div class="song-artist" id="songArtist">No song playing</div>
                <div class="progress-bar" onclick="seek(event)">
                    <div class="progress" id="progress"></div>
                </div>
                <div class="time">
                    <span id="currentTime">0:00</span>
                    <span id="duration">0:00</span>
                </div>
            </div>

            <div class="controls">
                <button class="control-btn" onclick="previous()">⏮</button>
                <button class="control-btn play" onclick="togglePlay()" id="playBtn">▶</button>
                <button class="control-btn" onclick="next()">⏭</button>
            </div>

            <div class="playlist">
                <div class="playlist-title">Playlist</div>
                <div id="playlistItems"></div>
            </div>
        </div>
    </div>

    <script>
        const songs = [
            { title: 'Summer Vibes', artist: 'DJ Cool', duration: 180 },
            { title: 'Midnight Dreams', artist: 'Luna Star', duration: 240 },
            { title: 'Electric Soul', artist: 'The Beats', duration: 210 },
            { title: 'Ocean Waves', artist: 'Chill Master', duration: 195 },
            { title: 'City Lights', artist: 'Urban Sound', duration: 225 },
            { title: 'Sunset Boulevard', artist: 'Jazz Fusion', duration: 270 }
        ];

        let currentSong = 0;
        let isPlaying = false;
        let currentTime = 0;
        let interval;

        function renderPlaylist() {
            const list = document.getElementById('playlistItems');
            list.innerHTML = songs.map((song, i) => `
                <div class="playlist-item ${i === currentSong ? 'active' : ''}" onclick="playSong(${i})">
                    <div class="playlist-item-title">${song.title}</div>
                    <div class="playlist-item-artist">${song.artist} • ${formatTime(song.duration)}</div>
                </div>
            `).join('');
        }

        function playSong(index) {
            currentSong = index;
            currentTime = 0;
            const song = songs[currentSong];
            document.getElementById('songTitle').textContent = song.title;
            document.getElementById('songArtist').textContent = song.artist;
            document.getElementById('duration').textContent = formatTime(song.duration);
            renderPlaylist();
            play();
        }

        function togglePlay() {
            if (isPlaying) pause();
            else play();
        }

        function play() {
            isPlaying = true;
            document.getElementById('playBtn').textContent = '⏸';
            interval = setInterval(() => {
                currentTime++;
                if (currentTime >= songs[currentSong].duration) {
                    next();
                } else {
                    updateProgress();
                }
            }, 1000);
        }

        function pause() {
            isPlaying = false;
            document.getElementById('playBtn').textContent = '▶';
            clearInterval(interval);
        }

        function next() {
            currentSong = (currentSong + 1) % songs.length;
            playSong(currentSong);
        }

        function previous() {
            currentSong = (currentSong - 1 + songs.length) % songs.length;
            playSong(currentSong);
        }

        function updateProgress() {
            const percent = (currentTime / songs[currentSong].duration) * 100;
            document.getElementById('progress').style.width = percent + '%';
            document.getElementById('currentTime').textContent = formatTime(currentTime);
        }

        function seek(event) {
            const bar = event.currentTarget;
            const percent = event.offsetX / bar.offsetWidth;
            currentTime = Math.floor(percent * songs[currentSong].duration);
            updateProgress();
        }

        function formatTime(seconds) {
            const mins = Math.floor(seconds / 60);
            const secs = seconds % 60;
            return `${mins}:${secs.toString().padStart(2, '0')}`;
        }

        renderPlaylist();
    </script>
</body>
</html>
