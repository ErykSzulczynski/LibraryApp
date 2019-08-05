function ViewDetailModal(title, author, type, details){
    var container = document.getElementById('modal__container');
    
    container.innerHTML = 
    "<div id='myModal' role='dialog' class='position-absolute' style = 'z-index: 1; left: 40%;'>" +
    "<div class='modal-dialog'>" +
    
      "<div class='modal-content'>" +
        "<div class='modal-header'>" +
          "<h4 class='modal-title'>" + title + "</h4>" +
        "</div>" +
        "<div class='modal-body'>" +
            "<h5>Author: " + author + "</h5>" +
            "<h5>Type: " + type + "</h5>" +
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

function ViewEditModal(id, title, author, details, type, availavility){
  var container = document.getElementById('modal__container');
  
  container.innerHTML = 
  "<div id='myModal' role='dialog' class='position-absolute' style = 'z-index: 1; left: 40%;'>" +
  "<div class='modal-dialog'>" +
  
    "<div class='modal-content'>" +
      "<div class='modal-header'>" +
        "<h4 class='modal-title'>Edit</h4>" +
      "</div>" +
      "<form method = 'POST' action = './modules/book_edit.php'>" +
      "<div class='modal-body'>" +
          "<div class='form-group'>" +
            "<label for='title'>Id</label>" +
            "<input type='text' class='form-control' name = 'id' value = " + id + " placeholder= " + id  + " readonly>" +
          "</div>" +
          "<div class='form-group'>" +
            "<label for='title'>Title</label>" +
            "<input type='text' class='form-control' name = 'title' placeholder= " + title  +">" +
          "</div>" +
          "<div class='form-group'>" +
            "<label for='author'>Author</label>" +
            "<input type='text' class='form-control' name='author' placeholder=" + author + ">" +
          "</div>" +
          "<div class='form-group'>" +
            "<label for='type'>Type</label>" +
            "<input type='text' class='form-control' name='type' placeholder=" + type + ">" +
          "</div>" +
          "<div class='form-group'>" +
            "<label for='details'>Details</label>" +
            "<textarea class='form-control' name='details' rows='3'>asdasd</textarea>" +
          "</div>" +
          "<select class='form-control' name='availability'>" +
            "<option value=1>Available</option>" +
            "<option value=0>Not Available</option>" +
          "</select>" +
      "</div>" +
      "<div class='modal-footer'>" +
      "<button type='submit' class='btn btn-success'>Edit</button>" +
        "<button type='button' class='btn btn-danger' onclick='RemoveModal()'>Close</button>" +
      "</div>" +
      "</form>" +
    "</div>" +
    
  "</div>";
}

function ViewDeleteModal(){
  var container = document.getElementById('modal__container');
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