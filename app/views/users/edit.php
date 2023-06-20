<h2>Edit Data Users</h2>

<form action="<?php echo URL; ?>/users/update" method="post">
<input type="hidden" name="user_id" id="" value="<?php echo $data['user_id']?>">
    <table>
        <tr>
            <td>Email</td>
            <td><input type="text" name="user_email" class="input-data" value="<?php echo $data['user_email']?>"></td>
        </tr>
        <tr>
            <td>Password</td>
            <td><input type="text" name="user_password" class="input-data" value="<?php echo $data['user_password']?>"></td>
        </tr>
        <tr>
            <td>Nama</td>
            <td><input type="text" name="user_nama" class="input-data" value="<?php echo $data['user_nama']?>"></td>
        </tr>
        <tr>
            <td>Alamat</td>
            <td><input type="text" name="user_alamat" value="<?php echo $data['user_alamat']; ?>"></td>
        </tr>
        <tr>
            <td>Hp</td>
            <td><input type="text" name="user_hp" value="<?php echo $data['user_hp']; ?>"></td>
        </tr>
        <tr>
            <td>Pos</td>
            <td><input type="text" name="user_pos" value="<?php echo $data['user_pos']; ?>"></td>
        </tr>
        <tr>
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
                <input type="submit" name="btn_update" value="UPDATE">
                <input type="button" name="btn_batal" value="BATAL" onclick="history.go(-1);" >
            </td>
        </tr>
    </table>
</form>