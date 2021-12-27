var FL1;
var FL2;
var FN1;
var FN2;
function info_upd(e, por) {
  if (por == "0") {
    document.getElementById("loader").style.display = "block";

    let fd = new FormData();
    fd.append("address", document.getElementById("address").value);
    fd.append("coord_map", document.getElementById("coord_map").value);
    fd.append("map_district", document.getElementById("map_district").value);
    fd.append("comment", document.getElementById("comment").value);

    FN1 = document.getElementById("file").value;
    // fd.append("fl1", FL1);
    fd.append("fn1", FN1);
    fd.append("file", $("#file")[0].files[0]);

    $.ajax({
      url: "telegramm.php",
      data: fd,
      processData: false,
      contentType: false,
      type: "POST",
      success: function (res) {
        document.getElementById("loader").style.display = "none";
        $("#form-contact")[0].reset();
        document.getElementById("modal__complete").style.display = "block";
        document.body.classList.toggle("_lock");

        return false;
      },
    });
    return;
  }

  if (!document.getElementById("file").value == "" && por == "1") {
    if (window.File && window.FileReader && window.FileList && window.Blob) {
      var f = e.files[0];
      reader = new FileReader();
      reader.readAsDataURL(f);
      reader.onload = function (e) {
        R_FILE = f.name.split(".").pop();
        if (por == "1" && (f.size > 15000000 || f.size < 5)) {
          document.querySelector(".file-return").innerHTML =
            "Файл не соответствует допустимому размеру. До 10 МБ!";
          FL1 = "";
          FN1 = "";
          document.getElementById("file").value = "";
          return;
        }
        if (por == "1") {
          FL1 = e.target.result;
          document.querySelector(".file-return").innerHTML =
            "Файл загружен" + $f.name;
          FL1 = FL1.substring(FL1.indexOf("base64,") + 7);
          FN1 = f.name;
        }
      };
    } else {
      alert("Не поддерживается вашим браузером, обратитесь в поддержку.");
    }
  }
}

function FormValidator() {
  let alert_message = document.getElementById("modal__body-alert");
  let FileTypeCheck = 0;
  let FileAlert = "";
  var AllFormElements = window.document.getElementById("form-contact").elements;
  for (i = 0; i < AllFormElements.length; i++) {
    if (AllFormElements[i].type == "file") {
      if (AllFormElements[i].value !== "") {
        if (
          AllFormElements[i].value.includes(".jpg") === true ||
          AllFormElements[i].value.includes(".png") === true ||
          AllFormElements[i].value.includes(".jpeg") === true ||
          AllFormElements[i].value.includes(".mp4") === true ||
          AllFormElements[i].value.includes(".flv") === true
        ) {
        } else {
          FileTypeCheck++;
          FileAlert = FileAlert + "Неверный формат файла (.JPG/.JPEG/.PNG)";
        }
      }
    }
  }
  // if (document.getElementById("type_info").value == "") {
  //   alert_message.innerHTML = "Выберите тип нарушения!";
  //   document.body.classList.toggle("_lock");
  //   document.getElementById("modal__alert").style.display = "block";
  //   return false;
  // }
  if (document.getElementById("address").value == "") {
    alert_message.innerHTML = "Укажите место нарушения (на карте)!";
    document.body.classList.toggle("_lock");
    document.getElementById("modal__alert").style.display = "block";
    return false;
  }

  if (document.getElementById("file").files.length == 0) {
    alert_message.innerHTML = "Прикрепите фотографию!";
    document.body.classList.toggle("_lock");
    document.getElementById("modal__alert").style.display = "block";
    return false;
  }
  if (document.getElementById("comment").value == "") {
    alert_message.innerHTML = "Опишите в комментарии ситуацию!";
    document.body.classList.toggle("_lock");
    document.getElementById("modal__alert").style.display = "block";
    return false;
  }
  if (FileTypeCheck != 0) {
    alert_message.innerHTML = FileAlert;
    document.body.classList.toggle("_lock");
    document.getElementById("modal__alert").style.display = "block";
    return false;
  } else {
    info_upd("", "0");
    return false;
  }
}

// document.querySelector("html").classList.add("js");
var fileInput = document.querySelector(".input-file"),
  button = document.querySelector(".input-file-trigger"),
  the_return = document.querySelector(".file-return");
if (button !== null) {
  button.addEventListener("keydown", function (event) {
    if (event.keyCode == 13 || event.keyCode == 32) {
      fileInput.focus();
    }
  });
  button.addEventListener("click", function (event) {
    fileInput.focus();
    return false;
  });
  fileInput.addEventListener("change", function (event) {
    the_return.innerHTML = this.value;
  });
}

var modal = document.getElementById("modal__complete");
var modal_alert = document.getElementById("modal__alert");
if (modal !== null && modal_alert !== null) {
  var span = document.getElementsByClassName("close")[0];
  var span_alert = document.getElementsByClassName("close__alert")[0];
  span.onclick = function () {
    modal.style.display = "none";
    location.reload();
  };
  span_alert.onclick = function () {
    modal_alert.style.display = "none";
    document.body.classList.toggle("_lock");
  };

  window.onclick = function (event) {
    if (event.target == modal) {
      modal.style.display = "none";
      location.reload();
    }
    if (event.target == modal_alert) {
      modal_alert.style.display = "none";
      document.body.classList.toggle("_lock");
    }
  };
}
