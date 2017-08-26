function validator()
{
    var name = document.getElementById("name").value;
    var mail = document.getElementById("mail").value;
    var site = document.getElementById("site").value;
    var comment = document.getElementById("comment").value;
    var telephonenumber = document.getElementById("telephone").value;
    if ((name == "") || (mail == "") || (site == "") || (comment == "") || (telephonenumber == ""))
    {
        document.getElementById("span").innerHTML = "Please fill all fields!";
        return false;
    } else
    {
        document.getElementById("span").innerHTML = "";
        return true;
    }
}
function textarea()
{
    if (document.getElementById("comment").value == "")
    {
        document.getElementById("comment").placeholder = "Enter your comments...";
    } else if (document.getElementById("comment").value != "Enter your comments...")
    {
    } else
    {
        document.getElementById("comment").value = "";
        document.getElementById("comment").placeholder = "";
    }
}
function counter()
{
    var max = 500;
    var charcount = document.getElementById("comment").value.toString().length;
    max -= charcount;
    if (max == 500)
    {
        document.getElementById("count").innerHTML = "";
    } else if (max != 500)
    {
        document.getElementById("count").innerHTML = max;
    }
}

window.onload = function () {
};
