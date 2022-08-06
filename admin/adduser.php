<link rel="stylesheet" type="text/css" href="../style/style.css"/>
<link rel='shortcut icon' type='image/x-icon' href='../image1/icon.ico'/>
<form action="save_user.php" method="post"/>
Name: <input type="text" name="txtName" id="txtName"/><br />
Address: <input type="text" name="txtAddress" id="txtAddress"/><br />
Email: <input type="text" name="txtEmail" id="txtEmail"/><br />
Age: <input type="text" name="txtAge" id="txtAge"/><br />
Birthday:<input type="text" name="txtbirth" id="txtbirth"/><br />
Gender: <input type="radio" name="radbtnGender" value="female"/>Female<span><input type="radio" name="radbtnGender" value="male"/>Male</span><br />
UserName: <input type="text" name="txtUserName" id="txtUserName"/><br />
Password: <input type="password" name="txtPassword" id="txtPasword" maxlength="10"/><br />
<input type="submit" name="submit" value="Save"/><input type="submit" name="submit" value="Cancel"/><input type="submit" name="submit" value="Clear"/>
</form>