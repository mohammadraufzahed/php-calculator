<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    <form action="#" id="formApp">
        <div>
            <label for="numberOne">Number One</label>
            <input type="text" name="numberOne" id="numberOne">
        </div>
        <br>
        <div>
            <label for="numberTwo">Number Two</label>
            <input type="text" name="numberTwo" id="numberTwo">
        </div>
        <br>
        <div>
            <label for="operator">Operators</label>
            <select name="operator" id="operator">
                <option value="add" selected>Sum</option>
                <option value="sub">Subtraction</option>
                <option value="multi">Multiplication</option>
                <option value="divid">Divid</option>
            </select>
        </div><br>
        <div>
            <button type="submit">calculate</button>
        </div>
        <div>
            <span>Result: <span id="result"></span></span>
        </div>
    </form>
    <script src="index.js"></script>
</body>

</html>