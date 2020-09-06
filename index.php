<!DOCTYPE html>
<html>
<head>
	<title>Sweet Escape</title>
    <link href='https://fonts.googleapis.com/css?family=Cinzel Decorative' rel='stylesheet'>
    	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
      <script src="jquery-3.5.1.min.js"></script>
     
        

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

</head>
<script type="text/javascript">
	let data=null;
	let s1;
	let daa=null;
	let base_url = "";

        function getNameList() {
            let url = base_url + "?req=item_name";
            $.get(url,function(da,success){
                console.log(da.length);
                console.log(da);
                data=da;
            });
            var d=document.querySelector("#drop");
			d.addEventListener("click",createList);
			function createList(e) {
				//console.log(data);
				for(var i=0;i<data.length;i++)
				{
					var dl=document.querySelector("#drop");
					var op=document.createElement("option");
					op.value=i;
					op.text=data[i]["Name"];
					dl.appendChild(op);
				}
				var sel=document.getElementById('drop');
				var opt=sel.options[sel.selectedIndex];
				var s=opt.text;
				console.log(s);
				getMenuByItem(s);
				s1=opt.value;

       	    }
       	}


        function getMenuByItem(item) {
            let url = base_url + "?req=menu_item&name="+item;
            $.get(url,function(data,success){
                console.log(data);
                document.querySelector(".profile").innerHTML=`<div class="panel panel-default">
				<div class="panel-heading">
				<h3 class="panel-title center">`+data.name+`</h3>
				</div>
				<div class="panel-body">
				<div class="row">
				<div class="col-md-2">
				</div>
				<div class="col-md-8">
					<ul class="list-group">
						<li class="list-group-item"><b>Id</b>: `+data.id+`</li>
						<li class="list-group-item"><b>Short name</b>: `+data.short_name+`</li>
						<li class="list-group-item"><b>Name</b>: `+data.name+`</li>
						<li class="list-group-item"><b>Description</b>: `+data.description+`</li>
						<li class="list-group-item"><b>Price_small</b>: `+data.price_small+`</li>
						<li class="list-group-item"><b>Price_large</b>: `+data.price_large+`</li>
						<li class="list-group-item"><b>Small Portion Name</b>: `+data.small_portion_name+`</li>
						<li class="list-group-item"><b>Large Portion Name</b>:`+data.large_portion_name+` </li>
					</ul>
					
				</div>
				<div class="col-md-2">
				</div>
				</div>
				</div>
		</div>`;
            });
        }
</script>
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
	<div class="profile"></div>
</div>
</div>
        </section>

</body>
</html>

