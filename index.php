<html>
    <head>
        <title>EchoForm</title>
               
        <script type="text/javascript" src="./lib/jquery-3.2.1.js"></script>
        <script type="text/javascript" src="./lib/serializeFormJSON.js"></script>
        <script type="text/javascript" src="./js/index.js"></script>
        <link rel="stylesheet" href="./style/index.css" />
    </head>
    <body>
        <form action="#" method="POST" id="frmAddition">
            <table>
                <tr>
                    <td><label for="tbSummand1" id="lbSummand1" name="lbSummand1">Erster Summand</label></td>
                    <td><input type="text" id="tbSummand1" name="tbSummand1"></td>
                </tr>
                <tr>
                    <td><label for="tbSummand2" id="lbSummand2" name="lbSummand2">Zweiter Summand</label></td>
                    <td><input type="text" id="tbSummand2" name="tbSummand2"></td>
                </tr>
                <tr><td colspan="2"><input type="submit" id="btAddition" name="btAddition" value="Zusammenz&auml;hlen!"></td></tr>
                <tr>
                    <td><label for="tbSumme" id="lbSumme" name="lbSumme">Summe</label></td>
                    <td><input type="text" id="tbSumme" name="tbSumme"></td>
                </tr>                
            </table>
        </form>
        <h1>WebSocket Echo Client</h1>
        <p>
            <button onClick="initWebSocket();">Connect</button>
            <button onClick="stopWebSocket();">Disconnect</button>
            <button onClick="checkSocket();">State</button>
        </p>
        <p>
            <textarea id="debugTextArea" style="width:400px;height:200px;"></textarea>
        </p>
        <p>
            <input type="text" id="inputText" onkeydown="if(event.keyCode==13)sendMessage();"/>
            <button onClick="sendMessage();">Send</button>
        </p>
        <script type="text/javascript" src="./lib/webSocket.js"></script>         
    </body>
</html>
