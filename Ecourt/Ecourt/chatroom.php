<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Chatroom</title>
    <link rel="stylesheet" href="style/chatroom.css">
</head>

<body>

    <div class="container">
        <div class="chat-box">
            <div class="worker">
                <img src="img/pfp.png" alt="pfp" />
                <div class="user-info">
                    <h2>Name</h2>
                    <p>online</p>
                </div>
            </div>

            <div class="chats">
                <div class="worker-chat">Hello</div>
                <div class="cust-chat">Hello</div>
                <div class="worker-chat">Apa ada yang bisa kami bantu?</div>
                <div class="cust-chat">...</div>
                <div class="worker-chat">...</div>
            </div>

            <div class="chat-input">
                <input type="text" placeholder="Enter Message" />
                <button class="send-btn">
                    <img src="img/send.png" alt="send-btn">
                </button>
            </div>
        </div>

    </div>
</body>
</html>