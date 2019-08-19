function ViewDetailModal(title, author, type, details){
    var container = document.getElementById('modal__container');
    
    container.innerHTML = 
    "<div id='myModal' role='dialog' class='position-absolute w-100'  style = 'z-index: 1'>" +
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

function ViewBorrowAddModal(){
  var element = document.getElementById('modal__container');
  element.style.display = "block";
}

function HideBorrowAddModal(){
  var element = document.getElementById('modal__container');
  element.style.display = "none";
}

function ViewEditModal(id, title, author, details, type, availavility){
  var container = document.getElementById('modal__container');
  
  container.innerHTML = 
  "<div id='myModal' role='dialog' class='position-absolute w-100' style = 'z-index: 1'>" +
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

function ViewDeleteModal(id){
  var container = document.getElementById('modal__container');

  container.innerHTML = 
  "<div id='myModal' role='dialog' class='position-absolute w-100' style = 'z-index: 1'>" +
  "<div class='modal-dialog'>" +
  
    "<div class='modal-content'>" +
      "<div class='modal-body'>" +
        "<span>Are you sure, that you want to delete this book (id: " + id + ")?</span>" +
      "</div>" +
      "<div class='modal-footer'>" +
        "<button type='button' class='btn btn-success' onclick='document.location=\"modules/book_delete.php?id=" + id + "\"'>Submit</button>" +
        "<button type='button' class='btn btn-default' onclick='RemoveModal()'>Close</button>" +
      "</div>" +
    "</div>" +
    
  "</div>";
}

function ViewAddModal(){
  var container = document.getElementById('modal__container');
  
  container.innerHTML = 
  "<div id='myModal' role='dialog' class='position-absolute w-100' style = 'z-index: 1'>" +
  "<div class='modal-dialog'>" +
  
    "<div class='modal-content'>" +
      "<div class='modal-header'>" +
        "<h4 class='modal-title'>Edit</h4>" +
      "</div>" +
      "<form method = 'POST' action = './modules/book_add.php'>" +
      "<div class='modal-body'>" +
          "<div class='form-group'>" +
            "<label for='title'>Title</label>" +
            "<input type='text' class='form-control' name = 'title' placeholder= 'title'>" +
          "</div>" +
          "<div class='form-group'>" +
            "<label for='author'>Author</label>" +
            "<input type='text' class='form-control' name='author' placeholder= 'author'>" +
          "</div>" +
          "<div class='form-group'>" +
            "<label for='type'>Type</label>" +
            "<input type='text' class='form-control' name='type' placeholder= 'type'>" +
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
      "<button type='submit' class='btn btn-success'>Submit</button>" +
        "<button type='button' class='btn btn-danger' onclick='RemoveModal()'>Close</button>" +
      "</div>" +
      "</form>" +
    "</div>" +
    
  "</div>";
}

function RevokeModal(id){
  var revokeModal = document.getElementById('modal__container--revoke');
  var buttonContainer = document.getElementById('button__container');
  buttonContainer.innerHTML = "<button type='button' class='btn btn-success' onclick='document.location=\"modules/borrow_delete.php?id=" + id + "\"'>Revoke</button>";
  revokeModal.style.display = "block";
}

function HideRevokeModal(){
  var revokeModal = document.getElementById('modal__container--revoke');
  revokeModal.style.display = "none";
}