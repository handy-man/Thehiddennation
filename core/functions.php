<?PHP
/**
Functions
**/
function Navigation($home)
{
	echo "<div class='masthead clearfix'>
            <div class='inner'>
              <h3 class='masthead-brand'>Nathan Hand</h3>
              <ul class='nav masthead-nav'>
                <li><a href='" . $home . "index.php'>Home</a></li>
                <li><a href='" . $home . "projects'>My Projects</a></li>
                <li><a href='" . $home . "contact'>Contact Me</a></li>
              </ul>
            </div>
          </div>";
}

function footer(){
echo "<div class='mastfoot'>
        <div class='inner'>
           <p>www.thehiddennation.com - Nathan Hand</p>
        </div>
     </div>";
}

?>