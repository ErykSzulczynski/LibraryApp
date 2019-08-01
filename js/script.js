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

function ViewEditModal(title, author, details, availavility){
  var container = document.getElementById('modal__container');
  
  container.innerHTML = 
  "<div id='myModal' role='dialog' class='position-absolute' style = 'z-index: 1; left: 40%;'>" +
  "<div class='modal-dialog'>" +
  
    "<div class='modal-content'>" +
      "<div class='modal-header'>" +
        "<h4 class='modal-title'>Edit</h4>" +
      "</div>" +
      "<div class='modal-body'>" +
      "<div class='form-group'>" +
      "<label for='exampleFormControlInput1'>Email address</label>" +
      "<input type='email' class='form-control' id='exampleFormControlInput1' placeholder='name@example.com'>" +
      "</div>" +
      "<div class='form-group'>" +
      "<label for='exampleFormControlInput1'>Email address</label>" +
      "<input type='email' class='form-control' id='exampleFormControlInput1' placeholder='name@example.com'>" +
      "</div>" +
      "<div class='form-group'>" +
      "<label for='exampleFormControlTextarea1'>Example textarea</label>" +
      "<textarea class='form-control' id='exampleFormControlTextarea1' rows='3'></textarea>" +
      "</div>" +
      "<select class='form-control'>" +
      "<option>Default select</option>" +
      "</select>" +
      "</div>" +
      "<div class='modal-footer'>" +
        "<button type='button' class='btn btn-default' onclick='RemoveModal()'>Close</button>" +
      "</div>" +
    "</div>" +
    
  "</div>";
}

function ViewDeleteModal(){
  var container = document.getElementById('modal__container');
  
  container.innerHTML = 
  "<div id='myModal' role='dialog' class='position-absolute' style = 'z-index: 1; left: 40%;'>" +
  "<div class='modal-dialog'>" +
  
    "<div class='modal-content'>" +
      "<div class='modal-header'>" +
        "<h4 class='modal-title'>smth</h4>" +
      "</div>" +
      "<div class='modal-body'>" +
          "<h5>Author: smth</h3>" +
          "<h5>Details:</h5>smth" +
      "</div>" +
      "<div class='modal-footer'>" +
        "<button type='button' class='btn btn-default' onclick='RemoveModal()'>Close</button>" +
      "</div>" +
    "</div>" +
    
  "</div>";
}

function ViewAddModal(){
  var container = document.getElementById('modal__container');
  
  container.innerHTML = 
  "<div id='myModal' role='dialog' class='position-absolute' style = 'z-index: 1; left: 40%;'>" +
  "<div class='modal-dialog'>" +
  
    "<div class='modal-content'>" +
      "<div class='modal-header'>" +
        "<h4 class='modal-title'>smth</h4>" +
      "</div>" +
      "<div class='modal-body'>" +
          "<h5>Author: smth</h3>" +
          "<h5>Details:</h5>smth" +
      "</div>" +
      "<div class='modal-footer'>" +
        "<button type='button' class='btn btn-default' onclick='RemoveModal()'>Close</button>" +
      "</div>" +
    "</div>" +
    
  "</div>";
}