<h2>Input Users</h2>

<form action="<?php echo URL; ?>/users/simpan" method="post">
    <table>
        <tr>
            <td>Email</td>
            <td><input type="text" name="user_email" class="input-data"></td>
        </tr>
        <tr>
            <td>Password</td>
            <td><input type="text" name="user_password" class="input-data"></td>
        </tr>
        <tr>
            <td>Nama</td>
            <td><input type="text" name="user_nama" class="input-data"></td>
        </tr>
        <td>Alamat</td>
            <td><textarea name="user_alamat" id="" cols="30" rows="10"></textarea>
        </tr>
        <tr>
            <td>Hp</td>
            <td><input type="text" name="user_hp"></td>
        </tr>
        <tr>
            <td>Pos</td>
            <td><input type="text" name="user_pos"></td>
        </tr>
        <tr>
            <td>Status</td>
            <td>
            <select class="input-data" name="user_aktif" id="">
                <option value="">--Pilih--</option>
                <option value="1">Aktif</option>
                <option value="0">Tidak Aktif</option>
            </select>
            </td>
        </tr>
        <tr>
            <td></td>
            <td>
                <input type="submit" name="btn_simpan" value="SIMPAN">
                <input type="button" name="btn_batal" value="BATAL" onclick="history.go(-1);" >
            </td>
        </tr>
    </table>
</form>