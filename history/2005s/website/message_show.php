<?
	include("up.htm"); // �~�������W��\��C
	include("db_conn.php");
	include("db_func.php");

	// ���X���w���d����� BEGIN
	$SQLStr = "SELECT * FROM message WHERE m_id = '$m_id'";
	$res = db_query($SQLStr);
	// ���X���w���d����� END

	$row = db_fetch_array($res);
?>

<script>
function update()
{
var pass1 = document.form1.pass.value;
var m_id1 = document.form1.m_id.value;
window.open("message_update.php?m_id="+m_id1+"&pass="+pass1,"update","width=640,height=480,status=0,scrollbars=0,resizable=1,menubar=0,toolbar=0,location=0");
}
</script>

<body background="images/bg1.gif">

<form name="form1" method="post" action="message_process.php?check=del">
  <table width="550" border="1" cellspacing="1" cellpadding="1" align="center">
    <tr>
      <td>
        <div align="center">
        <table width="549" border="1" cellpadding="0" cellspacing="0" bgcolor="#FFFFFF">
          <tr> 
	    <td bgcolor="#FFFFFF" align="center">
              <a href="message_reply.php?m_id=<?=$m_id?>">�^�Яd��</a>
            </td>
            <td colspan="3" bgcolor="#CCCCCC" align="center"><b><font size="4">
              �X�ȯd���ԲӤ��e</font></b>
            </td>
          </tr>
          <tr> 
            <td bgcolor="#99CCFF" align="center">�d���H</td>
            <td colspan="3" align="center"><a href="mailto:<?=$row['m_mail']?>">
             <?=$row['m_user']?></a>
            </td>
          </tr>
          <tr> 
            <td height="21" bgcolor="#CC9999" align="center">�d���D�D</td>
            <td colspan="3" height="21" bgcolor="#FFFFFF" align="center">
              <?=$row['m_title']?>
            </td>
          </tr>
          <tr bgcolor="#FFCCCC"> 
            <td colspan="4" align="center">�d�����e</td>
          </tr>
          <tr> 
            <td colspan="4" align="center"><?=$row['m_content']?></td>
          </tr>
          <tr> 
            <td bgcolor="#99CCCC" align="center">�d�����</td>
            <td bgcolor="#FFFFFF" align="center"><?=$row['m_time']?></td>
            <td bgcolor="#99CCCC" align="center">�ӷ��a</td>
            <td bgcolor="#FFFFFF" align="center"><?=$row['m_ip']?></td>
          </tr>
          <tr> 
            <td colspan="4" bgcolor="#CCCCCC" align="center"> 
                <input type="button" name="submit1" value="�ק�d��" onClick="update();">
                <input type="submit" name="Submit" value="�R���d��">
		<input type = "password" name="pass" size="10">
		<input type = "hidden" name="m_id" value="<?=$m_id?>">
                <font color="#FF0000">(�ݿ�J���g�d�����K�X) </font>
            </td>
          </tr>
        </table>
      	</div>
      </td>
    </tr>
  </table>
</form>
<p><br>
Copyright(Physics) 2004 [NCKU]. All rights reserved.<br>
�׭q����G <!--webbot bot="TimeStamp" s-type="Edited" s-format="%Y �~ %m �� %d ��" startspan -->2005 �~ 04 �� 03 ��<!--webbot bot="TimeStamp" i-checksum="9824" endspan -->�C</p>
