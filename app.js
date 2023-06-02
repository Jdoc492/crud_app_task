

$(document).ready(function(){
    edit = false;
    console.log("jquery is working");
    mostrarTabla();
    borrarDatos();
    $('#task-result').hide();

    $('#search').keyup(function(e){
        if($('#search').val()){
        let search = $('#search').val();
        $.ajax({
            url: 'task-search.php',
            type: 'POST',
            data: {search},
            success: function(response){
                let tasks = JSON.parse(response);
                let template = '';
                tasks.forEach(task => {
                    template+=`<li>
                    ${task.name}
                    </li>`
                });
                $('#container').html(template);
                $('#task-result').show();
            }
        })
        }
    })





    $('#task-form').submit(function(e){
        const postData = {
            name: $('#name').val(),
            description: $('#description').val(),
            id: $("#id_id").val()
        }

        let url = edit === false ? 'task-add.php' : 'task-edit.php';
        console.log(url);

        $.post(url,postData,function(response){
            console.log(response);
            mostrarTabla();
            if(edit==true){
                edit = false;
            }
            console.log(edit);
        })
        e.preventDefault();
        $('#task-form').trigger('reset');
    })




    function mostrarTabla(){
        $.ajax({
            url: 'task-list.php',
            type: 'GET',
            success: function(response){
                tasks = JSON.parse(response);
                template = "";
                tasks.forEach(task => {
                    template+=`
                    <tr taskID = "${task.id}">
                        <td >${task.id}</td>
                        <td><a href="#" class="task-edit">${task.name}</a></td>
                        <td>${task.description}</td>
                        <td>
                        <button class=' btn btn-danger ' id='task-delete'>Delete</button>
                        </td>
                    </tr>
                    `;
                })
                $('#tasks').html(template);
            }
        })
    }



    
    function borrarDatos(){
        $(document).on('click','#task-delete',function(){
            if(confirm('Are you sure you want to delete it?')){
            let elemento = this.parentElement.parentElement;
            let id = $(elemento).attr("taskID");
            $.post('task-delete.php',{id},function(respuesta){
                mostrarTabla();
            });
            }
        });
    }





    $(document).on('click','.task-edit',function(){
        let elemento = $(this)[0].parentElement.parentElement;
        let id = $(elemento).attr("taskID");
        $.post('task-single.php',{id},function(respuesta){
            const task = JSON.parse(respuesta);
            $('#name').val(task.name);
            $('#description').val(task.description);
            $('#id_id').val(task.id);
            edit = true;
        });
    });

    



});