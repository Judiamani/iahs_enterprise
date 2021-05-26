<html>
	<head>
		<meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>IAHS</title>
    <base href="{{ URL::asset('/') }}" target="_blank">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.8.1/css/all.css" integrity="sha384-50oBUHEmvpQ+1lW4y57PTFmhCaXp0ML5d60M1M7uH2+nqUivzIebhndOJK28anvf" crossorigin="anonymous">
    <link rel="stylesheet" href="{{ url('css/bootstrap.min.css') }}">
    <link rel="stylesheet" href="{{ url('css/iahs-style.css') }}">

    <link href='https://fonts.googleapis.com/css?family=Mr+Dafoe' rel='stylesheet' type='text/css'>
    <link href='https://fonts.googleapis.com/css?family=Amaranth:700' rel='stylesheet' type='text/css'>



    <script src="{{ url('js/jquery-3.2.1.min.js') }}"></script>
    <script src="{{ url('js/popper.min.js') }}"></script>
    <script src="{{ url('js/bootstrap.min.js') }}"></script>

    <script src="https://ajax.googleapis.com/ajax/libs/jquery/2.1.3/jquery.min.js"></script>

	</head>
	<body>		
		<!-- start count stats -->

<section id="counter-stats" class="wow fadeInRight" data-wow-duration="1.4s">
    <div class="container">
        <div class="row">

            <div class="col-lg-3 stats">
                <i class="fa fa-star" aria-hidden="true"></i>
                <div class="counting" data-count="9">0</div>
                <h5>Partenaires</h5>
            </div>

            <div class="col-lg-3 stats">
                <i class="fa fa-briefcase" aria-hidden="true"></i>
                <div class="counting" data-count="7">0</div>
                <h5>Catégories de Services</h5>
            </div>

            <div class="col-lg-3 stats">
                <i class="fa fa-user" aria-hidden="true"></i>
                <div class="counting" data-count="250">0</div>
                <h5>Clients satisfaits</h5>
            </div>

            <div class="col-lg-3 stats">
                <i class="fa fa-newspaper-o" aria-hidden="true"></i>
                <div class="counting" data-count="4">0</div>
                <h5>Articles en ligne</h5>
            </div>


        </div>
        <!-- end row -->
    </div>
    <!-- end container -->

</section>

<style>
    @import url(https://fonts.googleapis.com/css?family=Lato:400,700|Montserrat:400,700);
@import url(https://maxcdn.bootstrapcdn.com/font-awesome/4.6.3/css/font-awesome.min.css);


/*/ start count stats /*/

section#counter-stats {
    display: flex;
    justify-content: center;
    padding-top: 15px;
    background: #40E0D0;
}

.stats {
  text-align: center;
  font-size: 35px;
  font-weight: 700;
  font-family: 'Montserrat', sans-serif;
}

.stats .fa {
  color: #008080;
  font-size: 60px;
}

/*/ end count stats /*/
</style>
<script>
    // number count for stats, using jQuery animate

$('.counting').each(function() {
  var $this = $(this),
      countTo = $this.attr('data-count');
  
  $({ countNum: $this.text()}).animate({
    countNum: countTo
  },

  {

    duration: 3000,
    easing:'linear',
    step: function() {
      $this.text(Math.floor(this.countNum));
    },
    complete: function() {
      $this.text(this.countNum);
      //alert('finished');
    }

  });  
  

});
</script>

<!-- end cont stats -->
	</body>
</html>

