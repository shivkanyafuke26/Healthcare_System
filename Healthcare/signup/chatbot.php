<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1 viewport-fit=cover, minimum-scale=1.0, maximum-scale=1.0, user-scalable=no">
  <style>
      body {
        background-color: white;
        margin: 0 auto;
        display: -ms-flexbox;
        display: -webkit-flex;
        display: flex;
        flex-direction: column;
        height: 100vh;
      }
      #bp-web-widget-container {
        max-height: 90%;
        width: 481px;
        margin: auto;
        flex-grow: 1;
      }
      #bp-web-widget-container div {
        height: 100%;
      }
      .webchatIframe {
        position: relative !important;
      }
      #btn{
         position: fixed;
            bottom: 600px;
            right: 1300px;
            background-color: #000080;
            color: #fff;
            padding: 15px;
            border: none;
            border-radius: 40%;
            cursor: pointer;
      }
      a{
        text-decoration: none;
        color: white;
      }
    </style>
    <title>Chatbot</title>
  </head>
  <body>
  <button id="btn"><a href="index.php">home</a> </button>
  <script src="https://cdn.botpress.cloud/webchat/v1/inject.js"></script>
<script>

  window.botpressWebChat.init({
      "composerPlaceholder": "Chat with bot",
      "botConversationDescription": " ",
      "botId": "67ed7e5f-c161-4003-9883-a3a2f87ccbb5",
      "hostUrl": "https://cdn.botpress.cloud/webchat/v1",
      "messagingUrl": "https://messaging.botpress.cloud",
      "clientId": "67ed7e5f-c161-4003-9883-a3a2f87ccbb5",
      "webhookId": "71bba274-4a8c-469f-b382-0e6da5086593",
      "lazySocket": true,
      "themeName": "prism",
      "frontendVersion": "v1",
      "showPoweredBy": false,
      "theme": "prism",
      "themeColor": "#000080",
      "hideWidget": true,
      "disableAnimations": true,
      "closeOnEscape": false,
      "showConversationsButton": false,
      "enableTranscriptDownload": false,
      "className": "webchatIframe",
      "containerWidth": "100%25",
      "layoutWidth": "100%25",
      "showCloseButton": false
  });
window.botpressWebChat.onEvent(function () { window.botpressWebChat.sendEvent({ type: 'show' }) }, ['LIFECYCLE.LOADED']);
</script>

  </body>
</html>