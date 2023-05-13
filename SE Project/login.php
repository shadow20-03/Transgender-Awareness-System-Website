<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login</title>
    <link rel="stylesheet" type="text/css" href="./css/bootstrap.min.css">
</head>

<body>
    <form method="post" onsubmit="myaction.collect_data(event,'login')">
        <div class="col-md-4 border rounded mx-auto mt-5 p-4 shadow">
            <div class="h2">Login</div>
            <div><small class="my-1 js-error js-error-email text-danger"></small></div>
            <div class="input-group mb-3">
                <input name="email" type="text" class="form-control p-2" placeholder="Email">
            </div>
            <div class="input-group mb-3">
                <input name="password" type="password" class="form-control p-2" placeholder="Password">
            </div>
            <div class="progress my-3 d-none" role="progressbar">
                <div class="progress-bar" style="width: 50%">Working...25%</div>
            </div>
            <button class="btn btn-primary col-12">Login</button>
            <div class="m-2">
                Don't have an account? <a href="signup.php">SignUp here</a>
            </div>
        </div>
    </form>
</body>

</html>
<script>
    var myaction = {
        collect_data: function(e, data_type) {
            e.preventDefault();
            e.stopPropagation();
            var inputs = document.querySelectorAll("form input, form select");
            let myform = new FormData();
            myform.append('data_type', data_type);
            for (var i = 0; i < inputs.length; i++) {
                myform.append(inputs[i].name, inputs[i].value);
            }
            myaction.send_data(myform);
        },
        send_data: function(form) {
            var xhttp = new XMLHttpRequest();
            document.querySelector(".progress").classList.remove("d-none");
            document.querySelector(".progress-bar").style.width = "0%";
            document.querySelector(".progress-bar").innerHTML = "Working..." + "0%";
            xhttp.addEventListener('readystatechange', function() {
                if (xhttp.readyState == 4) {
                    if (xhttp.status == 200) {
                        myaction.handle_result(xhttp.responseText);
                    } else {
                        console.log(xhttp);
                        alert("An error occured");
                    }
                }
            });
            xhttp.upload.addEventListener('progress', function(e) {
                let percent = Math.round((e.loaded / e.total) * 100);
                document.querySelector(".progress-bar").style.width = percent + "%";
                document.querySelector(".progress-bar").innerHTML = "Working..." + percent + "%";
            });
            xhttp.open('POST', 'ajax.php', true);
            xhttp.send(form);
        },
        handle_result: function(result) {
            console.log(result);
            var obj = JSON.parse(result);
            if (obj.success) {
                alert("Login Successfull");
                window.location.href = 'blog.php';
            } else {
                let error_input = document.querySelectorAll(".js-error")
                for (var i = 0; i < error_input.length; i++) {
                    error_input[i].innerHTML = ""
                }
                for (key in obj.errors) {
                    document.querySelector(".js-error-" + key).innerHTML = obj.errors[key];
                }
            }
        }
    };
</script>