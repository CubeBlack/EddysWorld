chat = [];
chat.hided = false;
chat.hide = function(){
  chatcontent = document.getElementById("chatcontent");
  if (chat.hided) {
    chatcontent.style.display = "block";
  }
  else {
    chatcontent.style.display = "none";
  }
  chat.hided = !chat.hided;
}
console.log("js/chat.js");
