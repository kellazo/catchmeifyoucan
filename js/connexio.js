var connection;

var init = function() {
		var peer = new Peer({key: "9e8yliywalymbo6r", config: {'iceServers': [{ url: 'stun:stun.ekiga.net' }]}});
		peer.on("open", function() {
			$("#my-id").text(peer.id);
			$("input:disabled").removeAttr("disabled");
		});
		peer.on("connection", function(conn) {
			connection = conn;
			$("#id-block").remove();
			
			$("#status-row").css("display", "table");
			/*connection.on("error", errHandler);
			connection.on("close", disconnectHandler);
			connection.on("data", dataHandler);*/
			$("#reset").on("click", resetHandler);
			//render();
			//disable();
		});
		$("#connect").on("click", function() {
			connection = peer.connect($("#foreign-id").val(), {serialization: "json"});
			$("#id-block").remove();
			$("#status-row").css("display", "table");
			$("#reset").hide();
			$("#status").text("Connecting to opponent.");
			connection.on("error", errHandler);
			connection.on("data", dataHandler);
			connection.on("open", function() {
				$("#reset").show();
				  //connexió establerta
				  //render();
				  //enable();
			});
			connection.on("close", disconnectHandler);
			$("#reset").on("click", resetHandler);
		});
	}
init();