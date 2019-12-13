<html>
<style>
    body {
        font-family: '微軟正黑體', sans-serif;
        margin: 0;
        padding: 0;
    }

    .btn {
        width: 70px;
        height: 30px;
        background: black;
        color: white;
        border-radius: 50px;
        position: relative;
        left: 30px;
        font-weight:bold;
        text-shadow:0 3px 5px red;
    }

    span {

        font-weight: bold;
        color:black;
    }

    .log {
        width:275px;
        height:200px;
        background:pink;
        position: relative;
        top:250px;
        left:550px;
        border-radius:10px;
        border: black 3px solid;
    }

    h1 {
        font-weight: bold;
        color:black;
        position:absolute;
        top:0px;
        left:45px;
    }

    table {
    
        position:absolute;
        top:70px;
        left:25px;
        padding:10px;
    }

</style>

<body>
    <div class="log">
        <h1>管理員登入區</h1>
        <form action="../api/login_api.php" method="post">
            <table>
                <tr>
                    <td><span>帳號</span></td>
                    <td><input type="text" name="acc" id="acc"></td>
                </tr>
                <tr>
                    <td><span>密碼</span></td>
                    <td><input type="text" name="pw" id="pw"></td>
                </tr>
                <tr>
                    <td colspan="2" class="ct">
                        <input type="submit" value="登入" class="btn">
                        <input type="reset" value="重置" class="btn">
                    </td>
                </tr>
            </table>
        </form>
    </div>
</body>

</html>