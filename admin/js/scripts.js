//business logic
var calculate=function (a,b,c) {
	var student=a+b;
	return Math.round(student/c);
	
}
var Student=function(fname,lname,id,gender,level){
	this.fname=fname;
	this.lname=lname;
	this.id=id;
	this.gender=gender;
	this.level=level;

}


$(document).ready(function () {
	$('#budget-hide').hide();
	$('#form').submit(function (event) {
		event.preventDefault();
		var goal=parseInt($('#goal').val());

		var expense=parseInt($('#id_1').val());
		var student=parseInt($('#fee').val());
		var fee=calculate(goal,expense,student);
		$('.outGoal').text(goal);
		$('.outExpense').text(expense);
		$('.outStudent').text(student);
		$('.outTotal').text(fee);
		$('.forms').hide();
		$('.budget').show();


	});

	$('.show').click(function () {
		$('.forms').show();
		$('.budget').hide();
	});

	
	

	
})