function load_data(query){
    if (query.length > 2)
    {
        var form_data = new FormData();

        form_data.append('query', query);
    
        var ajax_request = new XMLHttpRequest();

        ajax_request.open('POST', 'process_data.php');

        ajax_request.send(form_data);

        ajax_request.onreadystatechange = function()
        {
            if(ajax_request.readyState == 4 && ajax_request.status == 200)
            {
                var response = JSON.parse(ajax_request.responseText);

                var html = '<div class="list-group">';

                if(response.length > 0)
                {

                }
                else {
                    html += '<a href="#" class= >'
                }



                html += '</div>';
            }
        }
    }
    else
    {
      document.getElementById('search_result').innerHTML = '';

    }
}