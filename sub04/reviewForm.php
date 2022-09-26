<script>
	function check_form(){
		form = document.FRM;

		if(isFrmEmptyModal(form.email,"이메일을 입력해 주십시오"))	return;
		if(isFrmEmptyModal(form.name,"이름를 입력해 주십시오"))	return;
		if(isFrmEmptyModal(form.address,"연락처를 입력해 주십시오"))	return;

		form.action = './proc.php';
		form.submit();
	}
</script>




<form name='FRM' action="<?=$PHP_SELF?>" method='post' ENCTYPE="multipart/form-data">
<input type='hidden' name='type' value="<?=$type?>">
<input type='hidden' name='next_url' value="<?=$PHP_SELF?>">


<div class="reviewFormWrap">
	
	<div class="namewrap mb20">
		<input type="text" name="name" placeholder="이름">
	</div>
	<div class="addrwrap mb20">
		<input type="text" name="address" placeholder="연락처 (ex.01012345678)" maxlength="11">
	</div>
	<div class="emailwrap mb20">
		<input type="text" name="email" placeholder="이메일">
	</div>
	<div class="wordswrap mb20">
		<textarea name='ment' placeholder="크로브에 남기실 말씀이 있으시다면 작성해주세요!"></textarea>
	</div>

	<!--
	<div class="submitWrap">
		<div class="submit_hover"></div>
		<a href="javascript:check_form()" class="submitBtn dp_sb dp_c">
			<span class="poppin submiTxt">submit</span>
			<span class="lnr lnr-arrow-right"></span>
		</a>
	</div>
	-->

	<div class="submitBtn2">
		<a href="javascript:check_form()">
			<div class="hoverCir"></div>
			<div class="submitTxt dp_sb dp_c">
				<span class="">보내기</span>
				<span class="lnr lnr-arrow-right"></span>
			</div>
		</a>
	</div>
</div>

</form>



<style>
	.reviewFormWrap .mb20 {margin-bottom: 20px;}
	.reviewFormWrap input, .reviewFormWrap textarea {
		border:1px solid rgb(112,112,112,0.5);
		padding: 24px 20px;
		width: 540px;
		box-sizing: border-box;
		color: #707070;
	}
	.reviewFormWrap input:focus, .reviewFormWrap textarea:focus{
		background-color: #fff;
		outline: 0;
		box-shadow: 0 0 0 0.125rem rgba(65,105,226, .2);
	}

	.reviewFormWrap input {
		font-family: 'Poppins', sans-serif;
	}

	.reviewFormWrap textarea {
		font-family:'Pretendard';
		resize: none;
		height: 200px;
	}

/*
	.submitWrap {
		position: relative;
		border: 1px solid #000;
		width: 300px;
		height: 70px;
		box-sizing: border-box;
	}

	.submitWrap .submit_hover {
		position: absolute;
		top:0;
		left:0;
		width: 0;
		height: 100%;
		background-color: #4169E2;
		transition: all 0.3s;
	}

	.submitWrap .submitBtn {
		position: absolute;
		padding: 0 40px;
		width: 100%; 
		height: 100%;
		box-sizing: border-box;
	}

	.submitWrap .submiTxt {
		font-size: 1.25rem;
	}

	.submitWrap .lnr-arrow-right {
		font-size: 1.25rem;
		font-weight: bold;
	}

	.submitWrap:hover {
		border: 1px solid #4169E2;
	}

	.submitWrap:hover .submit_hover {
		width: 100%;
	}

	.submitWrap:hover .submiTxt,  .submitWrap:hover .lnr-arrow-right {
		color: #fff;
	}
*/

.submitBtn2 {margin-top: 60px; padding: 0 30px; box-sizing:border-box; width: 300px; height: 70px; border: 1px solid #01010D; overflow:hidden;}
.submitBtn2 a {position: relative;  display: block; padding: 0 30px; box-sizing:border-box; width: 100%; height: 100%; }
.submitBtn2 .hoverCir {position: absolute; bottom: -1px; left: 50%; transform: translateX(-50%); width: 1px; height: 1px; border-radius: 50%; background-color: #4169E2; transition: all 0.3s;}
.submitBtn2:hover {border:1px solid #4169E2;}
.submitBtn2:hover .hoverCir {transform: scale(380);}
.submitBtn2:hover span {color: #fff;}
.submitBtn2:hover .lnr-arrow-right {color: #fff;}
.submitBtn2 .submitTxt {position: absolute; top:0; left: 0; padding: 0 30px; box-sizing:border-box; width: 100%; height: 100%;}
.submitBtn2 .submitTxt span {font-weight: 500; font-size: 1.2rem;}
.submitBtn2 .submitTxt .lnr-arrow-right {font-weight: bold; font-size: 20px;}

</style>