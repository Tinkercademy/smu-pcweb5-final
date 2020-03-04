<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8">
        <title>blog</title>
        <link rel="stylesheet" href="style.css" type="text/css">
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css">
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js"></script>
        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js"></script>
        <script src="https://use.fontawesome.com/releases/v5.0.8/js/all.js"></script>

    </head>
    <body>
        <?php include("navbar.php"); ?>

        <div class = "container">
            <div class = "row">
                <div class = "col-3" id="pname">
                    <h1>Players</h1>
                    <br>
                    @foreach ($players as $player)
                        <h4> <a href='/{{$player->PlayerName}}'>{{$player->PlayerName}}</a></h4>
                    @endforeach
                </div>
                <div class = "col-6">
                    @if(@isset($name))
                    <h2>{{$name}}</h2>
                    <p>{{$desc->Description}}<br></p>
                    @else
                    <h2>Choose a player, or add a player!</h2>
                    @endif
                </div>
                <div class = "col-3" id="picpic">
                    @if(@isset($name))
                    <form method= "post" action ="{{route('deletePlayer')}}">
                        @csrf
                        <div class="btns">
                        <input type="button" value="Hide Pic" id="hidebtn" onclick="changeVis()">
                        <input type="submit" name="delete" value="Delete Player">
                        </div>
                        <img id="hide" src="{{asset('uploads/player/' . $desc->Image)}}" alt="Image" height="200">
                        <textarea style="visibility: hidden;" name="nameDEL">{{$name}}</textarea>
                    </form>
                    @else
                    
                    @endif
                </div>
            </div>
        </div>

        <script type="text/javascript">
            // function changeVis() {
            //     document.getElementById("hide").style.visibility = "hidden";
            //     document.getElementById("hidebtn").value = "Show Pic";
            //     document.getElementById("hidebtn").onclick = function() { swapVis(); };
            // }

            // function swapVis() {
            //     document.getElementById("hide").style.visibility = "visible";
            //     document.getElementById("hidebtn").value = "Hide Pic";
            //     document.getElementById("hidebtn").onclick = function() { changeVis(); };
            // }
            
            var show = true;
            $(document).ready(function(){
                if(show){
                  $("input").click(function(){
                    $("img").toggle();
                    document.getElementById("hidebtn").value = "Show Pic";
                    var show = false;
                  });
                }else{
                    $("input").click(function(){
                    $("img").toggle();
                    document.getElementById("hidebtn").value = "Hide Pic";
                    var show = true;
                  });
                }
            });
        </script>
    </body>
</html>