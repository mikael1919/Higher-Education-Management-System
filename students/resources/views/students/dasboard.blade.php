

<?php
use App\Student;
@include('students.header'); 
@include('students.session'); 
$student = Student::where('student_id', $sessionId)->first();

if ($student) {
    $yearLevel = $student->year_level;
    $term = $student->term;
    $status = $student->student_status;
    $schoolYear = $student->school_year;
}
 ?>
    <div class="container">
		<div class="margin-top">
			<div class="row">
				<?php @('head.php'); ?>
				
				<div class="span2">
					<?php @('user_sidebar.php'); ?>
				</div>
			<div class="span12" style="border:1px solid red;max-width:948px	;margin-left: 50px;max-height: 100%">
			
				         
			</div>
		</div>
    </div>
</div>
<?php @('footer.php') ?>