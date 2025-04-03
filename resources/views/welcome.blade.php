<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Chatbot</title>
    @vite(['resources/js/app.js'])
    <script src="https://cdn.jsdelivr.net/npm/jquery@3.6.0"></script>
    <script src="https://cdn.jsdelivr.net/npm/botman-web-widget@0/build/js/widget.js"></script>
</head>
<body class="bg-dark">
    <h2 class=" text-light">Chat with our Bot</h2>

    <script>
        var botmanWidget = {
            chatServer: '/botman',
            title: 'Rest Assistance',
            introMessage: "Start conversation by saying Hi or Hey or Hello",
            mainColor: 'skyblue',
            bubbleBackground: 'green',
            background: "gray",
            aboutText: 'Powered by Techfalco',
            placeholderText: 'Type your message here...',
        };
    </script>

    <script src='https://cdn.jsdelivr.net/npm/botman-web-widget@0/build/js/widget.js'></script>
</body>
</html>
