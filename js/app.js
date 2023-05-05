function hide()
{
    var x = document.getElementById("project-btn");
    var y = document.getElementById("section1");
    if(y.display === "none")
    {
      y.style.display ="block";  
    }
    else
    {
        y.style.display = "none";
    }
}