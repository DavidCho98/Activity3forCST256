<html>
<head>
    <title>Add Customer</title>
</head>
<body>
<div>
    <form action="addCustomer" method="post">
        {{ csrf_field() }}
        <div class=demo-table>
            <div class="form-head">Add Customer</div>
            <div class="form-column">
                <div>
                    <label for="firstName">First Name</label><span id="firstname_info" class="error-info"></span>
                </div>
                <div>
                    <input name="firstName" id="firstName" type="text" class="demo-input-box">
                </div>
            </div>
            <div class="form-column">
                <div>
                    <label for="lastNae">Last Name</label><span id="lastname_info" class="error-info"></span>
                </div>
                <div>
                    <input name="lastName" id="lastName" type="text" class="demo-input-box">
                </div>
            </div>
            <div>
                <input type="submit" class="btnLogin">
            </div>
        </div>
    </form>
</div>
</body>
</html>
