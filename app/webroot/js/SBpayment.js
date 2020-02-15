$(document).ready(function(){

})

	//支払いチェック
	function TestForm(temp){
		alert('mae');
		return 'りたーん';
		alert(temp);
	}

	// SB-Pカード情報トークン化
	function doPurchase(){
		// トークン生成ロジック呼び出し
//	alert(document.getElementById('exp_yy').value + document.getElementById('exp_mm').value);
		com_sbps_system.generateToken({
			merchantId : '73607',
			serviceId : '001',
			ccNumber : document.getElementById('card_no').value,
			ccExpiration : document.getElementById('exp_yy').value + document.getElementById('exp_mm').value,
			securityCode : document.getElementById('card_sc').value
		}, afterGenerateToken);
	}

	var afterGenerateToken = function(response) {

		if (response.result != "OK") {
			var responsemessage = "クレジットカード決済でエラーが発生しました。トークンエラー" + response.errorCode;
//			if (response.resultCode == "101"|| response.resultCode == "102") {
//				responsemessage += "：クレジットカード番号が正しくありません。";
//			} else if (response.resultCode == "110" || response.resultCode == "111" || response.resultCode == "112" || response.resultCode == "113") {
//				responsemessage += "：有効期限が正しくありません。";
//			} else if (response.resultCode == "121" || response.resultCode == "122") {
//				responsemessage += "：セキュリティコードが正しくありません。";
//			} else if (response.resultCode == "131" || response.resultCode == "132") {
//				responsemessage += "：名義人の書式が正しくありません。";
//			} else if (response.resultCode == "901" || response.resultCode == "902") {
//				responsemessage += "：マルチペイメント内部のシステムエラー。";
//			}
			window.alert(responsemessage);
			return 0 ;
//		    exit;

		} else if (response.result == "OK") {//			alert(response.tokenResponse.token);
			document.getElementById('token').value = response.tokenResponse.token;
			document.getElementById('tokenKey').value = response.tokenResponse.tokenKey;
			document.getElementById('cardBrandCode').value = response.tokenResponse.cardBrandCode;
	 // マスクされた番号で上書き
			document.getElementById('card_no').value = "";
	 // カード情報のクリア
//			document.getElementById('ccExpiration').value = "";
			document.getElementById('exp_yy').value = '';
			document.getElementById('exp_mm').value = '';
			document.getElementById('card_sc').value = '';
//			document.getElementById('SubmitForm').submit();//トークン取得メッセージは潰して即送る形へ
			//SubmitForm();
//		alert('トークン取得に成功。');
		SubmitForm();//=d_mukei_cd= d_mukei_mainのd_mukei_cd

		} else {
			alert('決済でエラーが発生しました　CODE：TOKEN');
		    exit;
		}
	}





//以下ajax部分

//	od = new Date(2011,2,10,16,0,0);
//	td = new Date();

//	otime = od.getTime();
//	ttime = td.getTime();

	function SubmitForm(){

		if(document.getElementById('notP').value == 1){//buttonが押されている場合アラート
			alert('通信中です、しばらくお待ちください。');
			return false;
		}

		document.getElementById('notP').value = 1;//押されていない場合フラグ立て
		$("#sbtn").attr('disabled', 'disabled');
		var chk = CheckForm(document.testDojinpaymentmethodForm);//チェックフォーム内でiformの入力チェック及び支払い本番及びデータベース書き込みを行っていた、処理の本体。　メモ入力チェックはトークン化の時にはねられるので無意味

		if(chk){
			document.testDojinpaymentmethodForm.submit();
		}else{
			document.getElementById('notP').value = 0;
			$("#sbtn").removeAttr('disabled');
		}
		return false;
	}

	function Toptext(){
		$(".wtop .red").text('');
		$(".wtop .red").text("※入力した情報に誤りがあります。ご確認の上、訂正してください。");
		location.href = '#pagetop';
	}

	function SetWstr(){

		var altstr = '';

		if (ttime < otime){
//			altstr = '<br><br>※カード会社の都合により、VISA / MASTERの2回払いは現在お選びいただけません。<br>　3/4 18:00より再開予定です。';
		}

		$(".cpaystr").html(altstr);

	}
	function SetCardPay(kbn){

		var optionstr = '<option value="1">一括</option>\\n';
		var altstr = '';

		if (kbn == '1'){
			if (ttime >= otime){
				optionstr = optionstr + '<option value="2">2</option>\\n';
			}else{
				optionstr = optionstr + '<option value="2" disabled>2</option>\\n';
//				altstr = '<br><br>※カード会社の都合により、VISA / MASTERの2回払いは現在お選びいただけません。<br>　3/4 18:00より再開予定です。';
			}

			optionstr = optionstr + '<option value="3">3</option>\\n';
			optionstr = optionstr + '<option value="6">6</option>\\n';
		}else{
			optionstr = optionstr + '<option value="3">3</option>\\n';
			optionstr = optionstr + '<option value="6">6</option>\\n';
		}

		$(".cpay").html(optionstr);

		document.testDojinpaymentmethodForm.card_pay.selectedIndex = 0;

	}

	function CheckForm(frm){//入力内容のチェック


		var df = 'hoge';//'$Param{'dojin'}';
		var ecd = 'hoge';//'$Param{'estimate_cd'}';

		$(".red").text('');



		var card_pay_chk = 0;
		var pay_times = '';
		var card_pay = '';




		var dd = new Date();


//		var result = $.ajax({
//			url : url,
//			type : "POST",
//			data: '',//'card_co=' + frm.card_co.value +
				//		'&user_addr_flag=' + frm.user_addr_flag.value +
				//		'&haiso_time=' + frm.haiso_time.value +
				//		'&hinmoku=' + frm.hinmoku.value +
				//		'&item_memo=' + frm.item_memo.value +
				//		'&token=' + frm.token.value +
				//		'&tokenKey=' + frm.tokenKey.value +
				//		'&card_nm=' + frm.card_nm.value +
				//		'&card_pay=' + card_pay +
				//		'&pay_times=' + pay_times +
				//		'&pay_sid=' + frm.pay_sid.value +
				//		'&df=' + df +
				//		'&ecd=' + ecd +
				//		'&user_cd= '+ user_cd + dd.toLocaleString(),
						//$USER{'user_cd'}&pgp=&dm=' + dd.toLocaleString(),
//	        dataType: "JSON",
//	        error: function (jqXHR, textStatus, errorThrown) {},
//	        success: function (data, textStatus, jqXHR) {

//			async: false
//		}).responseText;



	    $.ajax({
	        url: url,
	        async: false,
	        type: "POST",
	        data: test,
	        dataType: "JSON",
	        error: function (jqXHR, textStatus, errorThrown) {},
	        success: function (data, textStatus, jqXHR) {
	            // このスコープで処理を行う必要があれば実装する
	            result = data;
	        }
	    });
	    // resultに格納された結果を元に何かしらの処理を実装する
		alert(result);




		results = new Array();
		redirecprm = new Array();

		results = result.split(':');
		alert(results[0]);
		if (results[0] == '000'){
//			frm.exp.value = frm.exp_yy.value + frm.exp_mm.value;

			frm.oid.value = results[1];

			return true;
		}else{
			if (results[0] == '111'){
				results.shift();

				frm.MD.value = results.shift();

				redirecprm = results.join(':').split('|');
				frm.action = redirecprm[0];

				frm.PaReq.value = redirecprm[1];
				frm.TermUrl.value = redirecprm[2];

				return true;

			}else if(results[0] == '888'){
				$(".wtop .red").text("※エラーが発生しました。：" + results[1]);
				location.href = '#pagetop';
				document.getElementById('notP').value = 0;
				$("#sbtn").attr('disabled', '');
				return false;
			}else if(results[0] == '777'){
				$(".wtop .red").text("※エラーが発生しました。：" + results[1]);
				location.href = '#pagetop';
				document.getElementById('notP').value = 0;
				$("#sbtn").attr('disabled', '');
				return false;
			}else{
				$(".wtop .red").text("※エラーが発生しました。再度お試しいただいても解決しない場合はお手数ですがねこのしっぽ受付（044-430-3767）までお問い合わせください(" + results[1] +":" + (results[2]) + ")");
				location.href = '#pagetop';
				document.getElementById('notP').value = 0;
				$("#sbtn").attr('disabled', '');
				return false;
			}

		}

	}

	function execAjax(url,temp) {//ajax送信部分
	    $.ajax({
	        url: url,
	        async: false,
	        type: "POST",
	        data: temp,
//	        {
//	        	piyopiyo: '処理した？',
//	            piyo: '処理するよ〜'
//	        },
	        dataType: "JSON",
	        error: function (jqXHR, textStatus, errorThrown) {},
	        success: function (data, textStatus, jqXHR) {
	            // このスコープで処理を行う必要があれば実装する
	            result = data;
	        }
	    });
	    // resultに格納された結果を元に何かしらの処理を実装する
		alert(result);
	}


		function ResetForm(){
			document.testDojinpaymentmethodForm.reset();
		}

		function BackPg(PG){
			if(PG == 1){
				document.dform.action = "/sp-bin/mypage/order_chk.cgi";
			}else if(PG == 2){
				document.dform.action = "/sp-bin/mypage/order_addr.cgi";
			}
			document.dform.submit();
		}


