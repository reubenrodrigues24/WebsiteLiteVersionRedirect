<html>
<head>
<script src="//speedof.me/api/api.js" type="text/javascript"></script>
</head>
<body>
<h2>SpeedTest</h2>

<div id="msg"></div>

<script type="text/javascript">
SomApi.account = "SOM5652e6a411c60"; //your API Key here
SomApi.domainName = "flictech.in"; //your domain or sub-domain here
speedLimit = 4.00; //Speed CutOff in Mbps
SomApi.config.sustainTime = 1; //1 to 8. 1 for fastest. 8 for most accurate
SomApi.onTestCompleted = onTestCompleted;
SomApi.onError = onError;
var msgDiv = document.getElementById("msg");

msgDiv.innerHTML = "<h3>Insert Super Cool Progress Bar Here. Please wait...</h3>";
//Can insert cool loading bar here. instead of the simple text
SomApi.startTest();

function onTestCompleted(testResult) {
if(testResult.download > speedLimit)
	msgDiv.innerHTML = "<h3>Load Page with heavy graphics</h3>"; //DO NOTHING. Let script end and continue to parse html
else
	window.location = "http://www.flictech.in/magnovite/lite.php"; //Redirect to lite Version of the website
}
function onError(error) {
msgDiv.innerHTML = "Error "+ error.code + ": "+error.message; //incase there is an error.
}
</script>

<!-- You can continue parsing your Heavy webpage here/-->


</body>
</html>