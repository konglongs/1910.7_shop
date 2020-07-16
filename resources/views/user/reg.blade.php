<form action="{{url('/user/regs')}}" method="post">
    <table>
        <tr>
            <td>账号</td>
            <td><input type="text" name="u_name"></td>
        </tr>
        <tr>
            <td>邮箱</td>
            <td><input type="text" name="u_email"></td>
        </tr>
        <tr>
            <td>密码</td>
            <td><input type="text" name="u_pwd"></td>
        </tr>
        <tr>
            <td>确认密码</td>
            <td><input type="text" name="u_pwds"></td>
        </tr>
        <tr>
            <td></td>
            <td><input type="submit"></td>
        </tr>
    </table>
</form>
