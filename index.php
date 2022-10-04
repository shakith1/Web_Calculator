<!DOCTYPE html>

<html>

<head>
    <title>Calculator</title>
    <link rel="stylesheet" href="style.css" />
</head>

<body>
    <h1>Calculator</h1>

    <table class="table">
        <tr>
            <td colspan="4"><input type="text" class="text" id="text"/></td>
        </tr>
        <tr>
            <td><button onclick="b(7);">7</button></td>
            <td><button onclick="b(8);">8</button></td>
            <td><button onclick="b(9);">9</button></td>
            <td><button>C</button></td>
        </tr>
        <tr>
            <td><button onclick="b(4);">4</button></td>
            <td><button onclick="b(5);">5</button></td>
            <td><button onclick="b(6);">6</button></td>
            <td><button onclick="b();">-</button></td>
        </tr>
        <tr>
            <td><button onclick="b(1);">1</button></td>
            <td><button onclick="b(2);">2</button></td>
            <td><button onclick="b(3);">3</button></td>
            <td rowspan="2"><button>+</button></td>
        </tr>
        <tr>
            <td><button onclick="b(0);">0</button></td>
            <td><button onclick="b('.');">.</button></td>
            <td><button>+/-</button></td>
        </tr>
    </table>

    <script src="script.js"></script>
</body>

</html>