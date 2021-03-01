<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>CHÚNG TA CỦA HIỆN TẠI | M-TP</title>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/2.2.0/jquery.min.js"></script>

</head>

<body>
    <style>
        body {
            margin: 0px;
            background-color: black;
            color: wheat;
        }

        .video-container {
            width: 100%;

            height: 100vh;


        }

        .video-container iframe {
            width: 100%;
            height: 100%;
            border:none;
        }

        #messgesDiv {
            color: wheat;
        }

        

        .input-name,
        .input-text {
            border: none;

            width: 50%;
            padding: 10px;

            background-color: #47513ec7;
            color: white;
        }

        .input-name,
        .input-text,
        button,
        textarea {
            resize: none;
            outline: 0px;
            border-radius: 5px;
        }

        button {
            cursor: pointer;
            background-color: #373c25;
            border: 0px;
        }

        button:hover {
            background-color: #ff8000;
        }

        .chat {
            width: 100%;
            height: 100%;
        }

        #submit {
            width: 20%;
            margin-top: 5px;
            padding: 10px;
        }

        label {
            margin-top: 10px;
            width: 50%;
            display: flex;
            padding: 5px;

        }

        .chan {
            height: 200px;
            width: 100%;
        }

        .mess {
            margin: 0 auto;
            width: 50%;
        }

        .div-text {
            width: calc(100%-30px);
            background-color: #53464699;
            margin-top: 10px;
            padding: 10px 15px;
            border-radius: 9px;
            font-weight: bold;

        }
        
        @media only screen and (max-width: 500px) {

            iframe {
                width: 100%;
                height: 60vh;
            }
            label{
                width:90%;
            }
            .input-name, .input-text {
    
    width: 90%;
    
}
       

.mess {
    
    width: 90%;
}
.div-text {
    width:calc(100% - 30px);
}
.video-container {
   
    height: 65vh;
}

#submit {
    width: 50%;
        }
    }
    </style>

    <div class="video-container">
      <iframe src="https://drive.google.com/file/d/1XCMO9kTrtXba9690F61wJYzBkLpR9Vyj/preview"  ></iframe>

    </div>

    <center>
        <p><audio controls> 
  <source src="ctcht.mp3" type="audio/mpeg">
  Your browser does not support the audio tag.
</audio> </p>
       <h4> <a href="https://drive.google.com/file/d/15HMFKMmqOgXpof9bdQlPd4RSemVqj1xL/view?usp=sharing">Tải mp3.</a></h4>
        <h3>Bình Luận</h3>
        <div class="chat">
            <label for="nameInput">Nhập tên</label>
            <input type="text" class="input-name" id="nameInput" placeholder="Tên" required value="Người lạ">
            <label for="messageInput">Nhập Nội dung</label>
            <textarea type="text" class="input-text" rows="5" id="messageInput" required placeholder="Nội dung"> </textarea><br>
            <button id="submit">Gửi</button>
        </div>


    </center>

    <div class="mess">
        <h1>Nội dung</h1>
        <div id="messgesDiv"></div>
    </div>
    <!-- Insert these scripts at the bottom of the HTML, but before you use any Firebase services -->

    <!-- Firebase App (the core Firebase SDK) is always required and must be listed first -->
    <script src="https://www.gstatic.com/firebasejs/8.2.1/firebase-app.js"></script>
    <script src="https://www.gstatic.com/firebasejs/8.2.1/firebase.js"></script>

    <!-- If you enabled Analytics in your project, add the Firebase SDK for Analytics -->
    <script src="https://www.gstatic.com/firebasejs/8.2.1/firebase-analytics.js"></script>

    <!-- Add Firebase products that you want to use -->
    <script src="https://www.gstatic.com/firebasejs/8.2.1/firebase-auth.js"></script>
    <script src="https://www.gstatic.com/firebasejs/8.2.1/firebase-firestore.js"></script>
    <script>

 

 var today = new Date();
// var date = today.getDate()+'-'+(today.getMonth()+1)+'-'+today.getFullYear();
// var time = today.getHours() + ":" + today.getMinutes() + ":" + today.getSeconds();
// var dateTime = date+' '+time;


function timeConverter(daytimestamp){
    
  var a = new Date(daytimestamp * 1000);
  var months = ['Jan','Feb','Mar','Apr','May','Jun','Jul','Aug','Sep','Oct','Nov','Dec'];
  var year = a.getFullYear();
  var month = months[a.getMonth()];
  var date = a.getDate();
  var hour = a.getHours();
  var min = a.getMinutes();
  var sec = a.getSeconds();
  var time = date + ' ' + month + ' ' + year + ' ' + hour + ':' + min + ':' + sec ;
  return time;
}
var daytimestamp = Date.parse(today)/1000;
 
 
        // Your web app's Firebase configuration
        // For Firebase JS SDK v7.20.0 and later, measurementId is optional
        var firebaseConfig = {
            apiKey: "AIzaSyD44pNV3V1FT__hWscIVBog7Np_fasmswk",
            authDomain: "zalo-b858d.firebaseapp.com",
            databaseURL: "https://zalo-b858d-default-rtdb.firebaseio.com",
            projectId: "zalo-b858d",
            storageBucket: "zalo-b858d.appspot.com",
            messagingSenderId: "581370700502",
            appId: "1:581370700502:web:7238a05cf122ef6b28df77",
            measurementId: "G-H31DB68TZB"
        };
        // Initialize Firebase
        firebase.initializeApp(firebaseConfig);
        var database = firebase.database();

        //   writeUserData(3, "name", "text");
        function writeUserData( name, text,daytimestamp) {
            database.ref('users/' ).push({
                username: name,
                text: text,
                time:daytimestamp
            });
        }

        $("#messageInput").keypress(function(e) {
            if (e.keyCode == 13) { //Enter
                var name = $("#nameInput").val();
                var text = $("#messageInput").val();
                writeUserData( name, text,daytimestamp);

      
                $("#messageInput").val("");

            }
        });
        $("#submit").click(function(e) {

                var name = $("#nameInput").val();
                var text = $("#messageInput").val();
                writeUserData( name, text,daytimestamp);
                
                $("#messageInput").val("");


        });

        var starCountRef = firebase.database().ref('users/').orderByChild('time') ;
        
        starCountRef.on("child_added", function(data, prevChildKey) {
            var chat = data.val(); 
            var daytime = timeConverter(chat.time);
            $('<div class="div-text">').text(chat.text).prepend($("<div/>").text(chat.username + ":      "+daytime)).appendTo($("#messgesDiv"));
           
          
        });
    </script>
    <script>
        // var myDataRef = new Firebase("https://zalo-b858d-default-rtdb.firebaseio.com");
        // myDataRef.orderBy("name").limit(3);
        // $("#messageInput").keypress(function(e) {
        //     if (e.keyCode == 13) { //Enter
        //         var name = $("#nameInput").val();
        //         var text = $("#messageInput").val();

        //         // myDataRef.set({name: name, text: text}); //chỉ cho phép thêm 1 bản ghi
        //         myDataRef.push({
        //             name: name,
        //             text: text
        //         }); //cho phép thêm nhiều bản ghi
        //         $("#messageInput").val("");

        //     }
        // });
        // $("#submit").click(function(e) {

        //         var name = $("#nameInput").val();
        //         var text = $("#messageInput").val();

        //         // myDataRef.set({name: name, text: text}); //chỉ cho phép thêm 1 bản ghi
        //         myDataRef.push({
        //             name:  name ,
        //             text:   text 
        //         }); //cho phép thêm nhiều bản ghi
        //         $("#messageInput").val("");


        // });

        // myDataRef.on('child_added', function(snapshot) {
        //     var message =  snapshot.val() ;

        //     displayChatMessage(message.name, message.text);
        // });


        function displayChatMessage(name, text) {

            $('<div class="div-text">').text(text).prepend($("<div/>").text(name + ": ")).appendTo($("#messgesDiv"));
            $("#messgesDiv")[0].scrollTop = $("#messgesDiv")[0].scrollHeight;
        }
    </script>


    <div class="chan"></div>
</body>

</html>