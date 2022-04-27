function search(str)
{
    if (str == "") {
        document.getElementById("producttable").innerHTML = "<td colspan='5'>Nothing Found</td>";
        return;
      } else 
      {
        var xmlhttp = new XMLHttpRequest();
        xmlhttp.onreadystatechange = function() {
        if (this.readyState == 4 && this.status == 200) 
        {
            document.getElementById("producttable").innerHTML = this.responseText;
        }
        else
        {
          document.getElementById("producttable").innerHTML = "<td colspan='5'>Nothing Found</td>";
        }
        };
        xmlhttp.open("GET","../model/ajax.php?q="+str,true);
        xmlhttp.send();
      }
}

// function data($txt)
// {
//   document.getElementById("producttable").innerText = $txt;
// }