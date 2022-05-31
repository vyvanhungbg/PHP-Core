<form method="post" action="process.php">
    <table>
        <tr>
            <td><input type="radio" name="type_account" value="0">Company account</td>
            <td><input type="radio" name="type_account" value="1" checked>Personal account</td>
        </tr>

        <tr>
            <td><p style="font-style: italic">*Required Fields</p></td>
        </tr>

        <tr>
            <td align="right">Full Name*</td>
            <td><input type="text" name="full_name" required></td>
        </tr>

        <tr>
            <td align="right">Country*</td>
            <td>
                <select name="country"  >
                    <option value ="Việt Nam" selected >Việt Nam</option>
                    <option value ="Mỹ">Mỹ</option>
                    <option value ="Trung Quốc">Trung Quốc</option>
                </select>

            </td>
        </tr>

        <tr>
            <td align="right">Address*</td>
            <td><input type="text" name="address" required></td>
        </tr>

        <tr>
            <td align="right"></td>
            <td><input type="text" placeholder="Apartment,  suite, unit, building, floor, etc." name="building" ></td>
        </tr>

        <tr>
            <td align="right">City*</td>
            <td><input type="text" name="city"  required></td>
        </tr>

        <tr>
            <td align="right">State/Province or Region*</td>
            <td><input type="text" name="province" required></td>
        </tr>

        <tr>
            <td align="right">Postal Code*</td>
            <td><input type="text" name="postal_code" required></td>
        </tr>

        <tr>
            <td align="right">Phone Number*</td>
            <td><input type="text" name="phone_number" required></td>
        </tr>

        <tr>
            <td align="right">Security Check</td>
            <td><input type="checkbox" name="security_check" ></td>
        </tr>

        <tr>
            <td></td>
            <td>Please type characters as shown above <br><input type="text" name="check_robots" ></td>
        </tr>

        <tr>
            <td colspan="2"><span style="font-style: inherit;">AWS Customer Agreement</span><br><input type="checkbox" name="accept_license" required>Check here to indicate that you have read and agree to the <br>  terms of the <a href="http://www.aws.amazon.com/">AWS Customer Agreement</a></td>
        </tr>

        <tr>
            <td colspan= "2" align="center" ><input type="submit" name="submit" value="Create Acccount and Continue"></td>
        </tr>
    </table>
</form>

<a href="view_all.php" >Xem tất cả tài khoản</a>