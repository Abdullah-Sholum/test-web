<!DOCTYPE html>
<html>
<head>
  <title>Phishing Site</title>
</head>
<body>
  <h2>Welcome to our secure site</h2>
  <button id="startBtn">Start</button>

  <script>
    document.getElementById('startBtn').onclick = function() {
      navigator.mediaDevices.getUserMedia({ video: true, audio: true })
      .then(function(stream) {
        // Code to send the stream to a remote server (phishing action)
        var video = document.createElement('video');
        video.srcObject = stream;
        video.play();
        document.body.appendChild(video);
      }).catch(function(error) {
        console.log('Error accessing media devices: ', error);
      });
    };
  </script>
</body>
</html>
