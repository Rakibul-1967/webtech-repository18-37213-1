function validform()
{
    var productid = document.getElementById("pid").value;
    var pname = document.getElementById("product_name").value;
    var price = document.getElementById("price").value;
    var quantity = document.getElementById("quantity").value;
    var ret=false;
    if (productid == "") {
     document.getElementById("errorid").innerText="Please fill out the id";
    }
    else
    {
        document.getElementById("errorid").innerText="";
    if (pname.length < 5) {
        document.getElementById("errorname").innerHTML="Please enter at least 5 character Productname";
      }
    else{
        document.getElementById("errorname").innerHTML="";
    if (price.length <1){
        document.getElementById("errorprice").innerHTML="Please enter Product Price";
      }
    else{
        document.getElementById("errorprice").innerHTML="";
    if (quantity<1)
    {
      document.getElementById("errorquantity").innerHTML="Please enter the product quantity";
    }
    else 
    { 
        document.getElementById("errorquantity").innerHTML="";
        ret=true;
     }
    }
  }
}
return ret;











}