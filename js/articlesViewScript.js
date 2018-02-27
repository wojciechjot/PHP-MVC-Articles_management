(function () {

    var deleteP = document.getElementsByClassName("delete");
    var no = document.getElementsByClassName("no");

    for (var i = 0; i < deleteP.length; i++) {

        deleteP[i].addEventListener('click', function(e) {
            var paragraph = e.target;
            var deleteWindow = paragraph.nextElementSibling;

            deleteWindow.style.display = "flex";
        }, false);
    }

    for (var i = 0; i < no.length; i++) {

        no[i].addEventListener('click', function(e) {
            var noBtn = e.target;
            var deleteWindow = noBtn.parentNode.parentNode;

            deleteWindow.style.display = "none";
        }, false);
    }



})();