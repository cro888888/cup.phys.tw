<?
	include("db_conn.php");
	include("db_func.php");

 	function ChangWord($NewWord){

		// �N enter �Ÿ����� <br>
    		$NewWord=str_replace("\r\n","<br>",$NewWord);

		// �N [']+ �Ÿ�,���� `
   		$NewWord=ereg_replace("[']+", "`", $NewWord);
		return $NewWord;
 	}

	$time = date("Y-m-d g:i:s"); // ���o�ثe����ήɶ�
	$ip = $REMOTE_ADDR; // ���o�ϥΪ� IP

	    // �B�z�d���̵o���d�����ʧ@ BEGIN
	    if ($check==add)
	    {
		$SQLStr = "INSERT INTO message (m_title, m_content, m_time, m_user, m_mail, m_pass, m_ip) ";
		$SQLStr .= " VALUES('$title', '" . ChangWord($content) . "', '$time', '$user', '$email', '$pass', '$ip') ";
	      	$message = "�s�W�d�������I";
	    }
	    // �B�z�d���̵o���d�����ʧ@ END

	    // �B�z�d���̧R���d�����ʧ@ BEGIN
	    if ($check==del)
	    {
		include("idcheck.php"); // �~�������ˬd����

		$SQLStr = "DELETE FROM message WHERE m_id = $m_id";
		$message = "�R���d�������I";
	    }
	    // �B�z�d���̧R���d�����ʧ@ END

	    // �B�z�d���̧�s�d�����ʧ@ BEGIN
	    if ($check==upd)
    	    {
		include("idcheck.php"); // �~�������ˬd����

		$SQLStr = "UPDATE message SET m_title='$title', m_content='" . ChangWord($content) . "', m_time='$time', ";
		$SQLStr .= "m_mail='$email', m_ip='$ip' WHERE m_id = '$m_id'";
		$message = "��s�d�������I";
	    }
	    // �B�z�d���̧�s�d�����ʧ@ END

	    db_query($SQLStr);
?>
<script>
alert("<?php echo $message; ?>");
location.href = "message_list.php?p=0";
</script>
