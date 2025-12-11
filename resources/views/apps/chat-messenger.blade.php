<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Chat Messenger - Ryan Mark Portfolio</title>
    <style>
        * { margin: 0; padding: 0; box-sizing: border-box; }
        body { font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif; background: linear-gradient(135deg, #30cfd0 0%, #330867 100%); min-height: 100vh; padding: 20px; }
        .container { max-width: 600px; margin: 0 auto; }
        .back-btn { display: inline-block; margin-bottom: 20px; padding: 10px 20px; background: rgba(255,255,255,0.2); color: #fff; text-decoration: none; border-radius: 8px; font-size: 14px; }
        .back-btn:hover { background: rgba(255,255,255,0.3); }
        .app-card { background: #fff; border-radius: 15px; overflow: hidden; box-shadow: 0 10px 30px rgba(0,0,0,0.2); height: 600px; display: flex; flex-direction: column; }
        .app-header { background: linear-gradient(135deg, #30cfd0 0%, #330867 100%); padding: 20px; color: #fff; }
        .app-header h1 { font-size: 24px; margin-bottom: 5px; }
        .app-header p { font-size: 13px; opacity: 0.9; }
        .chat-area { flex: 1; padding: 20px; overflow-y: auto; background: #f8f9fa; }
        .message { margin-bottom: 15px; display: flex; gap: 10px; }
        .message.sent { flex-direction: row-reverse; }
        .message-avatar { width: 40px; height: 40px; border-radius: 50%; background: #30cfd0; display: flex; align-items: center; justify-content: center; color: #fff; font-weight: bold; flex-shrink: 0; }
        .message-content { max-width: 70%; }
        .message-bubble { padding: 12px 16px; border-radius: 18px; background: #fff; box-shadow: 0 1px 2px rgba(0,0,0,0.1); }
        .message.sent .message-bubble { background: #30cfd0; color: #fff; }
        .message-time { font-size: 11px; color: #999; margin-top: 5px; padding: 0 5px; }
        .input-area { padding: 15px; background: #fff; border-top: 1px solid #eee; display: flex; gap: 10px; }
        .input-area input { flex: 1; padding: 10px 15px; border: 2px solid #eee; border-radius: 20px; font-size: 14px; }
        .send-btn { width: 45px; height: 45px; border-radius: 50%; background: #30cfd0; color: #fff; border: none; cursor: pointer; font-size: 18px; }
        .send-btn:hover { background: #2bb8b9; }
    </style>
</head>
<body>
    <div class="container">
        <a href="{{ url('/app-design') }}" class="back-btn">← Back to Portfolio</a>
        
        <div class="app-card">
            <div class="app-header">
                <h1>💬 Chat Messenger</h1>
                <p>Connected with Demo User</p>
            </div>

            <div class="chat-area" id="chatArea">
                <div class="message">
                    <div class="message-avatar">D</div>
                    <div class="message-content">
                        <div class="message-bubble">Hey! Welcome to the chat app demo 👋</div>
                        <div class="message-time">10:30 AM</div>
                    </div>
                </div>
                <div class="message">
                    <div class="message-avatar">D</div>
                    <div class="message-content">
                        <div class="message-bubble">Feel free to send messages and try it out!</div>
                        <div class="message-time">10:30 AM</div>
                    </div>
                </div>
            </div>

            <div class="input-area">
                <input type="text" id="messageInput" placeholder="Type a message..." onkeypress="if(event.key==='Enter') sendMessage()">
                <button class="send-btn" onclick="sendMessage()">➤</button>
            </div>
        </div>
    </div>

    <script>
        function sendMessage() {
            const input = document.getElementById('messageInput');
            const text = input.value.trim();
            
            if (text) {
                const chatArea = document.getElementById('chatArea');
                const time = new Date().toLocaleTimeString('en-US', { hour: '2-digit', minute: '2-digit' });
                
                const messageHTML = `
                    <div class="message sent">
                        <div class="message-avatar">Y</div>
                        <div class="message-content">
                            <div class="message-bubble">${text}</div>
                            <div class="message-time">${time}</div>
                        </div>
                    </div>
                `;
                
                chatArea.innerHTML += messageHTML;
                input.value = '';
                chatArea.scrollTop = chatArea.scrollHeight;
                
                setTimeout(() => {
                    const responses = [
                        "That's interesting! 😊",
                        "I see what you mean!",
                        "Thanks for sharing!",
                        "Cool! Tell me more.",
                        "Awesome! 🎉"
                    ];
                    const reply = responses[Math.floor(Math.random() * responses.length)];
                    
                    const replyHTML = `
                        <div class="message">
                            <div class="message-avatar">D</div>
                            <div class="message-content">
                                <div class="message-bubble">${reply}</div>
                                <div class="message-time">${time}</div>
                            </div>
                        </div>
                    `;
                    chatArea.innerHTML += replyHTML;
                    chatArea.scrollTop = chatArea.scrollHeight;
                }, 1000);
            }
        }
    </script>
</body>
</html>
