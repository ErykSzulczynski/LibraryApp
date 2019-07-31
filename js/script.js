function ViewDetailModal(title, author, details){
    var container = document.getElementById('modal__container');
    
    container.innerHTML = 
    "<div id='myModal' role='dialog' class='position-absolute' style = 'z-index: 1; left: 40%;'>" +
    "<div class='modal-dialog'>" +
    
      "<div class='modal-content'>" +
        "<div class='modal-header'>" +
          "<h4 class='modal-title'>" + title + "</h4>" +
        "</div>" +
        "<div class='modal-body'>" +
            "<h5>Author: " + author + "</h3>" +
            "<h5>Details:</h5>" + details +
        "</div>" +
        "<div class='modal-footer'>" +
          "<button type='button' class='btn btn-default' onclick='RemoveModal()'>Close</button>" +
        "</div>" +
      "</div>" +
      
    "</div>";
}

function RemoveModal(){
    var element = document.getElementById('myModal');
    element.parentNode.removeChild(element);
}