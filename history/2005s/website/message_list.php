<? 	
    
    // �פJ��Ӹ�Ʈw���� BEGIN
	include("db_conn.php");
	include("db_func.php");
	// �פJ��Ӹ�Ʈw���� END

	// ���X�̵o���ɶ�����ƧǪ��d����Ƥ� SQL �y�k
	$SQLStr = "SELECT * FROM message ORDER BY m_time DESC";

	$res = db_query($SQLStr); // ���� SQL �R�O

?>

  <body background="images/bg1.gif">

  <p align="center">
	<img border="0" src="images/guestTitle.gif" width="471" height="62"></p>
	<hr>
	<p><font color="#800000">
�ڭ̧Ʊ檾�D�z��ڭ��|�쪺�j���צ���N���C�]���бN�z���N���d�b�X�ȷN���椺�A�o�˧ڭ̤~��N�z���Q�k�P��L�X�Ȥ��ɡC</font></p>
	<hr>

  <p>�@<?include("up.htm");?></p>

  <table width="750" border="0" align="center" cellpadding="0" cellspacing="1">
    <tr bgcolor="#0066CC"> 
      <td width="290" align="center">
        <font color="#FFFFFF">�d���D�D</font>
      </td>
      <td width="300" align="center"> 
        <font color="#FFFFFF">�d�����e</font>
      </td>
      <td width="60"> 
        <font color="#FFFFFF">�d���H</font>
      </td>
      <td width="100"> 
        <font color="#FFFFFF">�d���ɶ�</font>
      </td>
    </tr>
<?

	if (db_num_rows($res)>0) // �Y��ƪ������
	{

		$num = db_num_rows($res); // ���o��Ƶ���
		$check = $p+10; // �C����� 10 �����

		// �e�{�d���C����줺�e BEGIN
		for ($i=0;$i<=$num;$i++) // �Ψӧe�{�h���d����ƪ��j��
		{
		  $row = db_fetch_array($res);

		  // ����� $p ���� $check �����
		  if ($i>=$p && $i<$check) 
		  {
			// �Q�άO�_�Q�㰣�ӧP�_��쪺�I���C��
			if ($i%2 == 0) 
			  echo "<tr bgcolor='#DDDDDD'>";
			else
			  echo "<tr>";

			// �P�_ m_title ��줺�r��ȬO�_�W�L 15 �r��
			if (strlen($row['m_title'])>15)
			{
			  echo "<td width='280'><a href='message_show.php?m_id=".$row['m_id']."'>";
			  echo substr($row['m_title'],0,30) . "...</a></td>";
			}
			else
			{
			  echo "<td width='280'><a href='message_show.php?m_id=".$row['m_id']."'>";
			  echo $row['m_title'] . "</a></td>";
			}
			// �P�_ m_content ��줺�r��ȬO�_���]�t <br> �r��
			if (stristr($row['m_content'],"<br>"))
			{
			  echo "<td width='300'><a href='message_show.php?m_id=".$row['m_id']."'>";
			  echo substr($row['m_content'], 0, 0 - strlen(strstr($row['m_content'],"<br>"))) . "...</a></td>";
			}
			else
			{
			  echo "<td width='300'><a href='message_show.php?m_id=".$row['m_id']."'>";
			  echo $row['m_content'] . "</a></td>";
			}
			echo "<td width='60' align='center'><a href='mailto:". $row['m_mail'] . "'>" . $row['m_user'] . "</a></td>";

			// �ȿ�� m_time ��줺 16 �Ӧr������� 
			echo "<td width='130' align='center'>" . substr($row['m_time'],0,16) . "</td>";
			echo "</tr>";
			$j = $i+1;
		  }
		}
		// �e�{�d���C����줺�e END
	}
?>
  </table>
  <br>
  <table width="406" border="0" align="center">
    <tr>
      <td align="center">

	<!--- �N p �ȳ]�� 0, ���Ҳձq�Ĥ@����ƶ}�l��� ---->
        <a href="message_list.php?p=0">�Ĥ@��</a>
      </td>
      <td align="center">
<?	
	if ($p>9) // �P�_�O�_���W�@��
	{
	  $last = (floor($j/10)*10)-10;
	  echo "<a href='message_list.php?p=$last'>�W�@��</a>";
	}
	else
	  echo "�W�@��";
?>
      </td>
      <td align="center">
<?	
	if ($i>9 and $num>$check) // �P�_�O�_���U�@��
	  echo "<a href='message_list.php?p=$j'>�U�@��</a>";
	else
	  echo "�U�@��";
?>

      </td>
      <td align="center">
<?	
	if ($i>9) // �P�_�ثe�e�{�����Ƥ���O�_�٦�����
	{
	  // ���o�̫�@�����Ĥ@�����
	  $final = floor($num/10)*10;
	  echo "<a href='message_list.php?p=$final'>�̥���</a>";
	}
	else
	  echo "�̥���";
	  include("down.htm");
?>
      </td>
    </tr>
  </table>
	<p><br>
Copyright(Physics) 2004 [NCKU]. All rights reserved.<br>
�׭q����G <!--webbot bot="TimeStamp" s-type="Edited" s-format="%Y �~ %m �� %d ��" startspan -->2005 �~ 04 �� 03 ��<!--webbot bot="TimeStamp" i-checksum="9824" endspan -->�C</p>

