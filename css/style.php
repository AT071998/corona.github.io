<style type="text/css">
html{
	scroll-behavior: smooth;
}
.row{
	margin-left: 0!important;
	margin-right:0!important;
}
.pl-5, .px-5 {
    padding-left: 1rem!important;
}
*{
	margin : 0;
	padding: 0;
	box-sizing: border-box;
	font-family: 'Syne', sans-serif;
}
.nav_style{
	background-color: purple;
}
.nav_style a {
	color: white;
}
.main_header{
	height: 450px;
	width: 100%;
}
.rightside h1{
	font-size: 3rem;
}
.rightside img{
	animation: gocorona 3s linear infinite;
}
@keyframes gocorona{
	0%{transform: rotate(0);}
	100%{transform: rotate(360deg);}
}

.leftside img{animation: heartbeat 5s linear infinite;}

@keyframes heartbeat{

	0%{
		transform: scale(.75);
	}
	20%{
		transform: scale(1);
	}
	40%{
		transform: scale(.75);
	}60%{
		transform: scale(1);
	}
	80%{
		transform: scale(.75);
	}
	100%{
		transform: scale(.75);
	}
}



.corona_update{
	margin: 0 0 30px 0;

}
.corona_update h3{
	color :#ff7675;
}

.corona_update h1{
	font-size: 2rem;
	text-align: center;
}

.sub_section{
	background-color:  #fbfafd;
}
.footer_Style{
	background-color: #a29bfe!important;
}
.footer_Style p{
	margin-bottom: 0!important;
}

#myBtn{
	background-color: #00A8FF;
	border:none;
	color: white;
	border-radius: 10px;
	cursor: pointer;
	bottom: 30px;
	z-index: 99;
	position: fixed;
	right: 80px;
	outline: none;
	
	padding: 10px;

}
#myBtn:hover{
	background: #606060;
}

@media(max-width:768px){
	.main_header{
		height: 700px;
		text-align: center;
	}
	.main_header h1{
		text-align:center;
		padding: 0;
		width: 100%;
		font-size: 30px;	}
	.count_style{
		display: inline!important;
	}
	.count_style p{
		text-align: center;
	}
	.about_resp{
		margin-left: 0!important;
	}
}
</style>