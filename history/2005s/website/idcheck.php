<?
	// �N�ϥΪ̿�J���K�X�P message ��ƪ����K�X��
	// ��Ȱ���� BEGIN
	$SQLStr = "SELECT * FROM message WHERE m_id='$m_id' AND m_pass='$pass'";
	$res = db_query($SQLStr);
	// �N�ϥΪ̿�J���K�X�P message ��ƪ����K�X��
	// ��Ȱ���� END

	if (!(db_num_rows($res)>0)) // �Y�K�X��藍���T
	{
		echo "<script>";
		echo "alert(\"�K�X���~\");";
		echo "location.href = \"message_show.php?m_id=". $m_id ."\";";
		echo "</script>";
		break; // ��������, ���A������򪺵{��
	}

?>