<!DOCTYPE html>
<html lang="en">
<head>
	<title>Sweet Escape</title>
    <link href='https://fonts.googleapis.com/css?family=Cinzel Decorative' rel='stylesheet'>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
 
     
        

	<style type="text/css">


    section
    {
        width: 100%;
        height: 100vh;

        background: linear-gradient(-45deg , #1B1A1A , #000000 , #474646, #7C7B7B);
        background-size: 400% 400%;
        position: relative;
        animation: change 10s ease-in-out infinite;
    }
        .header h1
        {
            animation: Slide_Up 1.4s ease;
            font-family: 'Cinzel Decorative';
            font-size: 110px;
            padding: 20px;
            text-align: center;
            color: snow;

        }

    #drop
        {
            margin: 25px;
             animation: Slide_Up 1.4s ease;
        }
        .panel-title{
			padding:20px;
		}
		.center{
			align-items: center;
		}
        .profile{
			margin-left:35px;

		}
         @keyframes change
    {
        0%
        {
            background-position: 0 50%;
        }
        50%
        {
            background-position: 100% 50%;
        }
        100%
        {
            background-position: 0 50%;
        }
    }
         @keyframes Slide_Up
        {
            0%
            {
                transform: translateY(250px);
            }
            100%
            {
                transform: translateY(0);
            }
        }
	</style>

<body>

    <section>
<div class="back-img">
	<div class="container">
	<div class="header">
		<h1>Sweet Escape</h1>
	</div>
	<select id="drop" class="form-control">
		<option>Select any Item</option>
	</select>
	<br>
	<br>
	<div class="output"></div>
</div>
</div>
        </section>

    <script
        src="https://code.jquery.com/jquery-3.5.1.js"
        integrity="sha256-QWo7LDvxbWT2tbbQ97B53yJnYU3WhH/C8ycbRAkjPDc="
        crossorigin="anonymous">
    </script>
    <script type="text/javascript" src="script.js" defer="TRUE"></script>


</body>
    </head>
    </html>