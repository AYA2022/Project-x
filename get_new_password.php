<!-- head-->
  <?php
      session_start();
        $pageTitle ='الصفحة الرئيسية';
    include 'init.php';
    ?>
  <!-- ./head-->
<br><br><br>

	<div class="container padding-bottom-3x mb-2 mt-5">
	    <div class="row justify-content-center">
	        <div class="col-lg-12 col-md-10">
	            <div class="forgot">
	                <h2>هل نسيت كلمة المرور ؟</h2>
	                <p>قم بتغيير كلمة المرور الخاصة بك في ثلاث خطوات سهلة. سيساعدك هذا على تأمين كلمة مرورك !</p>
	                <ol class="list-unstyled">
	                    <li><span class="text-primary text-medium">1. </span> أدخل عنوان بريدك الإلكتروني .</li>
	                    <li><span class="text-primary text-medium">2. </span>سيرسل لك نظامنا رابطًا مؤقتًا</li>
	                    <li><span class="text-primary text-medium">3. </span>استخدم الرابط لإعادة تعيين كلمة المرور الخاصة بك</li>
	                </ol>
	            </div>
	            <form class="card mt-4">
	                <div class="card-body">
	                    <div class="form-group"> <label for="email-for-pass">أدخل عنوان بريدك الالكتروني</label> <input class="form-control" type="text" id="email-for-pass" required=""><small class="form-text text-muted">أدخل عنوان البريد الإلكتروني الذي استخدمته أثناء التسجيل. ثم سنرسل عبر البريد الإلكتروني رابطًا لهذا العنوان.</small> </div>
	                </div>
	                <div class="card-footer"> <button class="btn btn-success" type="submit">احصل على كلمة سر جديدة</button>  </div>
	            </form>
	        </div>
	    </div>
	</div>

      <!-- footer -->
      <?php include 'includes/templates/footer.php'; ?>
  <!-- ./footer -->