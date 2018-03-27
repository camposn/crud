$(document).ready(function(){





/*----------------Tela Inicial--------------------*/


	$("#butAluno").click(function(){

		$("#cardCurso").hide();
		$("#cardProfessor").hide();

		$("#butAluno").attr("class", "nav-link active");
		$("#butCurso").attr("class", "nav-link");
		$("#butTabelas").attr("class", "nav-link");
		$("#butProfessor").attr("class", "nav-link"); 

		$("#cardAluno").fadeIn();

	});

	$("#butCurso").click(function(){

		$("#cardAluno").hide();
		$("#cardProfessor").hide();

		$("#butTabelas").attr("class", "nav-link");
		$("#butAluno").attr("class", "nav-link");
		$("#butCurso").attr("class", "nav-link active");
		$("#butProfessor").attr("class", "nav-link");

		$("#cardCurso").fadeIn();

	});

	$("#butProfessor").click(function(){

		$("#cardAluno").hide();
		$("#cardCurso").hide();


		$("#butTabelas").attr("class", "nav-link");
		$("#butAluno").attr("class", "nav-link");
		$("#butCurso").attr("class", "nav-link");
		$("#butProfessor").attr("class", "nav-link active");


		$("#cardProfessor").fadeIn();

	});


	$("#butTabelas").click(function(){

		$("#cardAluno").fadeIn();
		$("#cardCurso").fadeIn();

		
		$("#butTabelas").attr("class", "nav-link active");
		$("#butAluno").attr("class", "nav-link");
		$("#butCurso").attr("class", "nav-link");
		$("#butProfessor").attr("class", "nav-link");


		$("#cardProfessor").fadeIn();

	});




});