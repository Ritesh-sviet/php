<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Select country state and City</title>
    
</head>
<body>
    <form action="">
        <label for="country">Country</label>
        <select name="country" id="country">
            <option selected>--Select--</option>
        </select>
        <label for="state">State</label>
        <select name="state" id="state">
            <option selected>--Select--</option>
        </select>
        <label for="city">City</label>
        <select name="city" id="city">
            <option selected>--Select--</option>
        </select>
    </form>
</body>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.7.1/jquery.min.js"></script>
<script>
    
    $(document).ready(function() {
        $("#country").on("change",function(e) {
            $.ajax({
                    url : "country.php",
                    type : "POST",
                    success : function (data)
                    {
                        $("#country").html(data);
                    }
            });
        }),
        $("#state").on("change",function(e) {
            $.ajax({
                    url : "state.php",
                    type : "POST",
                    success : function (data)
                    {
                        $("#state").html(data);
                    }
            });
        }),
        $("#city").on("change",function(e) {
            $.ajax({
                    url : "database.php",
                    type : "POST",
                    success : function (data)
                    {
                        $("#city").html(data);
                    }
            });
        })
    });
</script>
</html>