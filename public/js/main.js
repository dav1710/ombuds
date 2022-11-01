function dropDownFunction() {
    var x = document.getElementById("first");
    var rotated = document.getElementById('dropdown_rotate');
    if (x.style.display === "none") {
      x.style.display = "flex";
      rotated.style.transform = 'rotate(180deg)';
    } else {
      x.style.display = "none";
      rotated.style.transform = 'rotate(0)';
    }
  }
