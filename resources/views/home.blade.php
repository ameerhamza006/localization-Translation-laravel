<!DOCTYPE html>
<html>
<head>
<title>Home</title>

<link href="//maxcdn.bootstrapcdn.com/bootstrap/4.1.1/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
<script src="//maxcdn.bootstrapcdn.com/bootstrap/4.1.1/js/bootstrap.min.js"></script>
<script src="//cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
<!------ Include the above in your HEAD tag ---------->

</head>
<body>

<style>

/* Font Imports ************************************************************* */
@import url('https://fonts.googleapis.com/css?family=Oxygen');

/* Gradient Header Styling ************************************************** */
#gradient-header {
    background: linear-gradient(110deg, #7C99B4, #161B33);
}
#gradient-footer {
    background: linear-gradient(110deg, #161B33, #7C99B4);
}

/* Defining Font Families *************************************************** */
.f-prime {
    font-family: 'Oxygen', sans-serif;
    font-weight: 600;
    text-transform: uppercase;
    letter-spacing: 1px;
}
.f-second, .f-third {
    font-family: 'Oxygen', sans-serif;
    font-weight: normal;
}

/* Defining Font Sizing ***************************************************** */
.large {
    font-size: 2.5rem;
}
.med {
    font-size: 2rem;
}
.sml {
    font-size: 1.5rem;
}

/* Defining Font Colors ***************************************************** */
.primes {
    color: #172A3A;
}
.seconds {
    color: #4C5C68;
}
.thirds {
    color: #A0B9BF;
}

/* Card Styling ************************************************************* */
.card {
    background-color: transparent;
    border: 0px;
}
.card .thumbnail {
    background-color: #FFFFFF;
    box-shadow: 0 0 3px 1px rgba(0, 0, 0, 0.25);
    border: 0px;
    border-radius: 0px;
    padding: 0px;
    text-align: center;
}
.card .thumbnail .caption {
    background: linear-gradient(45deg, #4C5C68, #A0B9BF);
    margin: -20px 20px 20px 20px;
    padding: 19px 29px 19px 29px;
    position: relative;
    border: 0px;
}
.card .thumbnail .caption hr {
    border-top: 1px solid rgba(255, 255, 255, 0.25);
    margin: 20px 40px;
}
.card .thumbnail .caption p {
    font-weight: normal;
    font-size: 0.8rem;
    color: #FFFFFF;
}
.card .thumbnail .caption .btn-card {
    background-color: transparent;
    border: 1px solid #FFFFFF;
    font-weight: normal;
    font-size: 0.9rem;
    text-transform: uppercase;
    letter-spacing: 1px;
    padding: 0.25rem 1.25rem;
    color: #FFFFFF;
    transition: 0.5s ease;
    border-radius: 0px;
}
.card .thumbnail .caption .btn-card:hover {
    background-color: rgba(255, 255, 255, 0.1);
    border: 1px solid #FFFFFF;
    color: #FFFFFF;
}
.card .thumbnail img {
    width: 100%;
    height: auto;
}

/* ************************************************************************** */

</style>

<div class="container-fluid">
    <div class="row p-0" id="gradient-header">
    <select name="forma" onchange="location = this.value;">
    <option disabled selected >Languages</option>
 <option value="{{url('/en')}}" >English</option>
 <option value="{{url('/hi')}}">Hindi</option>
 <option value="{{url('/ur')}}">Urdu</option>
</select>
    
    
        <div class="col-12 text-center mx-auto p-5">
            <div class="f-prime large thirds">
               
                {{__('home.All Packages Here')}}
            </div>
         
        </div>
    </div>
    <div class="row bg-dark p-0">
        <div class="col-12 mx-auto p-0">
            <div class="row mx-auto p-2">
                <div class="col-xl-3 col-lg-3 col-md-6 col-sm-12 col-12 p-2 card">
                    <div class="thumbnail">
					    <img src="https://cdn.pixabay.com/photo/2016/12/30/07/59/kitchen-1940174_960_720.jpg">
					    <div class="caption">
						    <div class="f-prime sml primes">
							    {{__('home.Point of sale')}}
						    </div>
						    <div class="f-third text-light">
                            {{__('home.High Quality Web Designing')}}
						    </div>
						    <hr>
						    <p>{{__('home.Package Description')}} </p>
						    <div class="mb-0">
							    <a href="#link" class="btn btn-card">{{__('home.View More')}}</a>
						    </div>
					    </div>
				    </div>
			    </div>
                <div class="col-xl-3 col-lg-3 col-md-6 col-sm-12 col-12 mx-auto p-2 card">
                    <div class="thumbnail">
					    <img src="https://cdn.pixabay.com/photo/2016/01/23/23/52/dining-room-1158266_960_720.jpg">
					    <div class="caption">
						    <div class="f-prime sml primes">
                            {{__('home.E-commerce')}}

						    </div>
						    <div class="f-third text-light">
                            {{__('home.High Quality Web Designing')}}
						    </div>
						    <hr>
						    <p>  {{__('home.Package Description')}} </p>
						    <div class="mb-0">
							    <a href="#link" class="btn btn-card">{{__('home.View More')}}</a>
						    </div>
					    </div>
				    </div>
                </div>
                <div class="col-xl-3 col-lg-3 col-md-6 col-sm-12 col-12 mx-auto p-2 card">
                    <div class="thumbnail">
                        <img src="https://cdn.pixabay.com/photo/2016/12/30/07/59/kitchen-1940175_960_720.jpg">
					    <div class="caption">
						    <div class="f-prime sml primes">
                            {{__('home.Dynamic website')}}

						    </div>
						    <div class="f-third text-light">
                            {{__('home.High Quality Web Designing')}}
						    </div>
						    <hr>
                            <p>  {{__('home.Package Description')}} </p>
						     <div class="mb-0">
							    <a href="#link" class="btn btn-card">{{__('home.View More')}}</a>
						    </div>
					    </div>
				    </div>
                </div>
                <div class="col-xl-3 col-lg-3 col-md-6 col-sm-12 col-12 mx-auto p-2 card">
                    <div class="thumbnail">
					    <img src="https://cdn.pixabay.com/photo/2017/08/07/19/04/house-2606823_960_720.jpg">
					    <div class="caption">
						    <div class="f-prime sml primes">
                            {{__('home.Static website')}}

						    </div>
						    <div class="f-third text-light">
                            {{__('home.High Quality Web Designing')}}
						    </div>
						    <hr>
                            <p>  {{__('home.Package Description')}} </p>
                            <div class="mb-0">
							    <a href="#link" class="btn btn-card">{{__('home.View More')}}</a>
						    </div>
					    </div>
				    </div>
                </div>
            </div>
        </div>
    </div>
</div>

</body>
</html>