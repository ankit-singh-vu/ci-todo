<!DOCTYPE html>
<html>
<head>
<title>Page Title</title>
<link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.13.0/css/all.min.css" rel="stylesheet">

<style>
    .striked{
        text-decoration: line-through;
        
    }

</style>
</head>
<body>

<input type="text" id="name" name="name" value="">
<i class="fa fa-plus" id="add" aria-hidden="true"></i>
<br>


<div class="display">
    <?php 
        // echo '<pre>';print_r($user);

        foreach ($user as  $key => $value){ 
            // print("key[$key] => $value");
            // echo '<pre>';print_r($value);
            // echo $value['name'];

        
    ?>
    <input type="checkbox"  <?php if($value['is_striked'])echo 'checked';?> class="check"  id="c_<?=$value['id']?>">
    
    <span class="<?php if($value['is_striked'])echo 'striked';?>" id="sp_<?=$value['id']?>" ><?=$value['name']?> &nbsp;&nbsp;&nbsp;</span>

    
    <input type="text" id="e_<?=$value['id']?>"  class="name" value="<?=$value['name']?>">
    <i class="fa fa-edit edit" aria-hidden="true" id="ed_<?=$value['id']?>"></i>
    <i class="fa fa-check update" aria-hidden="true" id="t_<?=$value['id']?>"></i>
    <i class="fa fa-trash delete" aria-hidden="true" id="d_<?=$value['id']?>"></i>
    <br>

    <?php } ?>
</div>

</body>
</html>

<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>

<script>
$("#add").on("click", function(){
    var v = $('#name').val();
    // alert(v);
    if(v==''){
        alert("please enter some value");
    }
    else{
        var url ='<?php echo base_url('app/home/add') ?>';
        $.ajax({
        
            url: url,
            // dataType: "json",
            type: "Post",
            // async: true,
            data: {name:v },
            success: function (response) {
                // alert(response);
                reload();
                $('#name').val('')
            }
        }); 
    }

});

$(".delete").on("click", function(){
    var fid=$(this).attr('id')
    // alert(fid)

    var id = fid.split('_');
    // alert(id[1])
    id=id[1];
    
    var url ='<?php echo base_url('app/home/delete') ?>';
    $.ajax({
        url: url,
        // dataType: "json",
        type: "Post",
        // async: true,
        data: {id:id },
        success: function (response) {
            // alert(response);
            reload();
        }
    }); 
});

$(".check").on("change", function(){
    // alert("changed")
    var fid=$(this).attr('id')
    // alert(fid)

    var id = fid.split('_');
    // alert(id[1])
    id=id[1];



    var is_striked=0;

    if($(this).is(':checked')){
    //I am checked
        is_striked=1;
    }
    else{
        is_striked=0;

    }

    var url ='<?php echo base_url('app/home/check') ?>';
    $.ajax({
        url: url,
        // dataType: "json",
        type: "Post",
        // async: true,
        data: {
            id:id,
            is_striked:is_striked
         },
        success: function (response) {
            // alert(response);
            reload();
        }
    }); 
});

$(".edit").on("click", function(){
    var fid=$(this).attr('id')
    // alert(fid)

    var id = fid.split('_');
    // alert(id[1])
    id=id[1];
    $('#e_'+id).show();
    $('#t_'+id).show();
    $('#sp_'+id).hide();
    $('#ed_'+id).hide();

});



$(".update").on("click", function(){
    var fid=$(this).attr('id')
    // alert(fid)

    var id = fid.split('_');
    // alert(id[1])
    id=id[1];
    var name=$('#e_'+id).val();
    
    if(name==''){
        alert("please enter some value");
    }
    else{
        var url ='<?php echo base_url('app/home/update') ?>';
        $.ajax({
            url: url,
            // dataType: "json",
            type: "Post",
            // async: true,
            data: {
                    id:id,
                    name:name
                },
            success: function (response) {
                // alert(response);
                reload();
            }
        }); 
    }


});

function reload(){
    // alert("reload")
    // $('.name').hide();
    var url ='<?php echo base_url('app/home/reload') ?>';

    $.ajax({
    
        url: url,
        // dataType: "json",
        type: "Post",
        // async: true,
        data: { },
        success: function (response) {
            // alert(response)
            $('.display').html(response);
            $('.name').hide();
            $('.update').hide();
        }
    }); 
}


$(document).ready(function() {
    $('.name').hide();
    $('.update').hide();
    
});
</script>