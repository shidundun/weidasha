<?php
 
function http_request($url,$data=null)
{
//����curl����������http��������û�ȡaccess_token
//1��ʼ��
$ch=curl_init();

//2���ñ���
//��Ҫ��ȡ��URL��ַ
curl_setopt($ch,CURLOPT_URL,$url);
//��������֤
curl_setopt($ch,CURLOPT_SSL_VERIFYPEER,FALSE);
curl_setopt($ch,CURLOPT_SSL_VERIFYHOST,FALSE);
if(!empty($data))
{
	curl_setopt($ch,  CURLOPT_POST, 1);
	curl_setopt($ch,  CURLOPT_POSTFIELDS, $data);
}

curl_setopt($ch,CURLOPT_RETURNTRANSFER,1);


//3ִ�з��ؾ��
//��� CURLOPT_RETURNTRANSFERѡ����ã�����ִ�гɹ�ʱ�᷵��ִ�еĽ��
$reslut=curl_exec($ch);
curl_close($ch);
return $reslut;
}

