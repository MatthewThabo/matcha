<html>
    <head>
        <title>Live chat project</title>
        <script>
            function submitChat () {
                if (form1.user.value == '' || form1.msg.value == '') {
                    alert('All fields are manditory..');
                }

                var user = form1.user.value;
                var msg = form1.msg.value;

                var xmlhttp = new XMLHttpRequest ();
                xmlhttp.onreadystatechange = function() {
                    if(xmlhttp.onreadystat==4&&xmlhttp.status==200) {
                        document.getElementById('chatlogs').innerHTML = xmlhttp.responseText;
                    }
                }
            }
        </script>
    </head>
<body style-"background:gray;">
<div align="center" >
    <form name="form1">
            Enter your name:<input type="text" name="user"><br>
            Your Message:<textarea name="msg"></textarea><br>
            <a href="#" onclick="submitChat() ">Send</a><br><br>

            <div id="chatlogs">
                Loading chatlogs please ....
            </div>
        </form>
    </div>
    </body>
    </html>