function copyCharactersEndpoint() {  
    var copyEndpoint = document.getElementById("charactersEndpoint");
    navigator.clipboard.writeText(copyEndpoint.value);  
    copyEndpoint.innerHTML = `<i class="fa-solid fa-check"></i> Copied`;
  };
  function copySingleCharacterEndpoint() {  
    var copyEndpoint = document.getElementById("singleCharacterEndpoint");
    navigator.clipboard.writeText(copyEndpoint.value);  
    copyEndpoint.innerHTML = `<i class="fa-solid fa-check"></i> Copied`;
  }
  function display () {
    var display = document.querySelector("#display");
    display.classList.toggle("display");
  }
  function closeDiv () {
    var close = document.querySelector("#display");
    close.classList.remove("display");
  }