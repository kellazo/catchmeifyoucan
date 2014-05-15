
<!DOCTYPE HTML> 
<html lang="en"> 
<head>
<title>PeerJS chat demo</title>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8"> 
<meta http-equiv="Content-Language" content="en-us"> 

<script type="text/javascript" src="http://ajax.googleapis.com/ajax/libs/jquery/1.6.2/jquery.min.js"></script> 
<script type="text/javascript" src="http://cdn.peerjs.com/0/peer.js"></script>
<script src="<?php echo Yii::app()->request->baseUrl;?>/js/joc_old.js"></script>
</head> 
<style type="text/css">
/*span.hidden{visibility:hidden;}*/
</style>
 
<body> 
  <span class="hidden" id="pid"></span><br/>
  
  <div id="chat_area" style="display: none;">
    <div id="messages"></div>
    <input type="text" id="text" placeholder="Enter message">
    <input type="button" value="Send" id="send">
  </div>
  <script type="text/javascript">
 var auto_refresh = setInterval(
  function ()
  {
  $('#load_tweets').load('<?php echo Yii::app()->request->baseUrl;?>/joc/reload').fadeIn("slow");
  }, 3000); // refresh every 10000 milliseconds
  ;

  </script>
<div id="load_tweets"> </div>
</body> 
</html> 
