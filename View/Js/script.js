function getAllMessages(username) {
  const xhttp = new XMLHttpRequest();
  xhttp.onload = function () {
    console.log(this.responseText);
    let res = JSON.parse(this.responseText);
    console.log(res);
    document.getElementById("msg").innerHTML = "";
    for (let i = 0; i < res.length; i++) {
      var div = document.createElement("div");
      var h4 = document.createElement("h4");

      var p = document.createElement("p");
      var time = document.createElement("p");
      var time = document.createElement("p");
      time.className = "text";
      div.className =
        username == res[i].username ? "msgdata" : "msgdata darker";

      h4.className = username == res[i].username ? "" : "right";
      p.innerHTML = res[i].msg;
      h4.innerHTML = res[i].username;
      time.innerHTML = res[i].tym;

     
      div.appendChild(h4);
     
      div.appendChild(p);
      
      document.getElementById("msg").appendChild(time);
      document.getElementById("msg").appendChild(div);
    }
  };
  xhttp.open("GET", "../Controller/chatlist.php");
  xhttp.send();
}

function SendMessage(message, username) {
  const xhttp = new XMLHttpRequest();
  xhttp.onload = function () {
    console.log(this.responseText);
  };

  var today = new Date();
  var time = today.getHours() + ":" + today.getMinutes() + ":" + today.getSeconds();


  var data = {
    msg: message,
    username: username,
    time: time,
  };

  xhttp.open("POST", "../Controller/chatlist.php");
  xhttp.setRequestHeader("Content-type", "application/json;charset=UTF-8");
  xhttp.send(JSON.stringify(data));
}
