
    function submitForm() {
        var formData = new FormData(document.getElementById("myForm"));

        var xhr = new XMLHttpRequest();
        xhr.onreadystatechange = function() {
            if (xhr.readyState === XMLHttpRequest.DONE) {
                if (xhr.status === 200) {
                    // Success message
                    document.getElementById("notification").style.display = "block";
                } else {
                    // Error message
                    alert('There was a problem with the request.');
                }
            }
        };
        xhr.open("POST", "submit_form.php", true);
        xhr.send(formData);
    }

