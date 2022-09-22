<h1>Test</h1>
<table>
    <tr>
        <th>FN</th>
        <th>LN</th>
        <th>JT</th>
    </tr>
    <tbody id="data">

    </tbody>
</table>

<script>
//call ajax function

var ajax = new XMLHttpRequest();
var method = "GET";
var url = "data.php";
var async = true;

ajax.open(method, url, async);
//sending ajax request

ajax.send();

//receive

ajax.onreadystatechange = function()
{
    if (this.readyState == 4 && this.status == 200) {

        alert(this.responseText);
    }
}
</script>
