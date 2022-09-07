<form action="kontrol.php" method="post">
    <table cellpadding="5" celspacing="5">
    <tr>    
    <td>AD SOYAD: </td>
        <td><input type="text" name="adsoyad"/></td>
    </tr>
    <tr>    
    <td>YAS: </td>
        <td><input type="text" name="yas"/></td>
    </tr>
    <tr>
        <td> SEHIR:</td>
        <td><select name="sehir">
            <option value="ESKISEHIR">ESKISEHIR</option>
            <option value="KONYA">KONYA</option>
            <option value="ANKARA">ANKARA</option>
            <option value="ISTANBUL">ISTANBUL</option>
        </select></td>
    </tr>
    <td></td>
    <td><input type="submit" value="gonder" /></td>
    </table>

</form>