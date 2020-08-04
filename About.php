<?php

require 'header.php';

?>


<main>

<style type="text/css">


.abt-wrap{
  width: 80%;
  margin: 0 auto;
  margin-top: 15px;
  display: flex;
    
}

.abti{
  font-size: 50px;
  color: #fff;
  line-height: 25px;
  border: 1px solid rgba(0, 0, 0, 0.2);
  box-shadow: 0 4px 8px 0 rgba(0, 0, 0, 0.2), 0 6px 20px 0 rgba(0, 0, 0, 0.19);
  width: 50%;
  height: 250px;
  margin: 50px 5px;
  text-align: center;
  align-items: center;
  justify-content: center;
  display: flex;
  letter-spacing: 30px;
  background: #34495e;
  animation: text 2.5s 1;
}

.abti:hover{
	background: #2c3e50;
}

@keyframes text {
	  0%{
	    color: #95a5a6;

	  }
	  30%{
	  	color: #ecf0f1;
	    letter-spacing: 50px;
	  }
	  60%{
	  	color: #bdc3c7;
	    letter-spacing: 60px;
	    padding-left: 60px;
	  }
	}



.abtt-txt{
	display: flex;
	font-family: 'Montserrat', sans-serif;
	color: #2c3e50;
	flex-direction: row;
	width: 600px;
	height: 400px;
	font-size: 20px;
	padding: 5px;
	margin: 50px 15px;
	word-spacing: 5px;
	font-weight: bolder;
	text-align: justify;
}

@media (max-width: 999px){
	.abt-wrap{
	 -webkit-flex-direction: column;
	 flex-direction: column;
	}

	.abti{
		animation: none;
		padding-left: 30px;
		width: 100%;
	}

	.abtt-txt{
       width: 100%;
       margin: 0 auto;
   }
}


@media (max-width: 500px){
	.abt-wrap{
	 -webkit-flex-direction: column;
	 flex-direction: column;
	 max-width: 100%;
	 margin: 0 auto;
	 bottom: 20px;
	}

	.abti{
		animation: none;
		width: 100%;
	}

    .abtt-txt{
       width: 100%;
       text-align: justify;
       font-size: 16px;
   }
}

</style>

 <div class="abt-wrap">
	<div class="abti">SEDCO</div>
 	<span class="abtt-txt">SEDCO PUBLISHING LTD is an indigenous Ghanaian Publishing House. Sedco’s mission is to lead the way in local publishing. As a result, Sedco has been an innovative catalyst in pioneering new books for Ghana. Sedco has also contributed to the growth of the entire industry by training & promoting future publishers. Several Executives of publishing houses in Ghana have spent time in association with Sedco.
 </span>
 </div>

</main>



<?php

require 'footer.php';

?>