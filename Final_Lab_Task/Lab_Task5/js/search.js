function search_product(name)
{
//var name = document.getElementById('search').value;
//window.alert(name);
if (name == "") 
{
    document.getElementById("producttable").innerHTML = "<td colspan='5'>Nothing Found</td>";
    return;
} 
else 
{
    var xmlhttp = new XMLHttpRequest();
    xmlhttp.onreadystatechange = function() 
{
    if (this.readyState == 4 && this.status == 200) 
    {
        document.getElementById("producttable").innerHTML = this.responseText;
    }
    else
    {
        document.getElementById("producttable").innerHTML = "<td colspan='5'>Nothing Found</td>";
    }
};
    xmlhttp.open("GET","../model/getProduct.php?q="+name,true);
    xmlhttp.send();

}
}