<?
	// ���X��g�d�����e BEGIN
	include("db_conn.php");
	include("db_func.php");
	$SQLStr = "SELECT * FROM message WHERE m_id='$m_id'";
	$res = db_query("$SQLStr");
	$row = db_fetch_array($res);
	echo $pass;
	// ���X��g�d�����e END
?>

<!------ �ǰe��s�d����ƪ��Ѽ� upd ���d���B�z�\��------>
<body background="images/bg1.gif">

<form name="form1" method="post" action="message_process.php?check=upd">
  <table width="481" border="1" cellpadding="0" cellspacing="0" align="center">
    <tr>
      <td>
        <div align="center">
        <table width="480" border="0" bordercolor="#000099" bgcolor="#FFFFFF">
          <tr> 
            <td height="10" colspan="2" bgcolor="#006699" align="center">
              <font color="#EEEEEE" size="4">�X�ȯd���O</font>
            </td>
          </tr>
          <tr> 
            <td height="30" bgcolor="#99CCFF" align="center">
			<font color="#008000">�d���H</font></td>
            <td height="30" bgcolor="#99CCFF"> 
              <input type="text" name="user" size="20" value="<?=$row['m_user']?>" disabled>
            </td>
          </tr>
          <tr> 
            <td height="23" align="center"><font color="#008000">e-mail</font></td>
            <td height="23"> 
              <input type="text" name="email" size="36" value="<?=$row['m_mail']?>">
            </td>
          </tr>
          <tr> 
            <td height="23" bgcolor="#99CCFF" align="center">
			<font color="#008000">�d���D�D</font></td>
            <td height="23" bgcolor="#99CCFF"> 
              <input type="text" name="title" size="36" value="<?=$row['m_title']?>">
            </td>
          </tr>
          <tr> 
            <td height="80" align="center"><font color="#008000">�d�����e</font></td>
            <td height="80"> 
              <p> 
                <textarea name="content" rows="10" cols="35"><?=$row['m_content']?></textarea>
                <br>
              </p>
              </td>
          </tr>
          <tr> 
            <td height="25" colspan="2" bgcolor="#006699" align="center"> 
              <input type="reset" name="Reset" value="�M������">
              <input type="submit" name="Submit" value="�e�X�d��">
            </td>
          </tr>
        </table>
        </div>
        &nbsp;&nbsp; �п�J�K�X <font color="#008000">&nbsp; </font>
        <input type = "password" name="pass" size="10 " value="<?=$pass?>">
	<input type="hidden" name="m_id" value="<?=$m_id?>">
	<font color="#FF0000">(�ݿ�J���g�d�����K�X) </font>
      </td>
    </tr>
  </table>
  </form>
<p><br>
Copyright(Physics) 2004 [NCKU]. All rights reserved.<br>
�׭q����G <!--webbot bot="TimeStamp" s-type="Edited" s-format="%Y �~ %m �� %d ��" startspan -->2005 �~ 04 �� 03 ��<!--webbot bot="TimeStamp" i-checksum="9824" endspan -->�C</p>

