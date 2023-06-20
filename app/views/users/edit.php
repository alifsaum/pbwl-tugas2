<h2>Edit Data Pengguna</h2>

<form action="<?php echo URL; ?>/users/update" method="post">
<input type="hidden" name="user_id" id="" value="<?php echo $data['user_id']?>">
    <table>
        <tr>
            <td>Email</td>
            <td><input type="text" name="user_email" value="<?php echo $data['user_email']?>"></td>
        </tr>
        <tr>
            <td>Password</td>
            <td><input type="text" name="user_password" value="<?php echo $data['user_password']?>"></td>
        </tr>
        <tr>
            <td>Nama</td>
            <td><input type="text" name="user_nama" value="<?php echo $data['user_nama']?>"></td>
        </tr>
        <tr>
            <td></td>
            <td><input type="submit" name="btn_update" value="UPDATE"></td>
        </tr>
    </table>
</form>