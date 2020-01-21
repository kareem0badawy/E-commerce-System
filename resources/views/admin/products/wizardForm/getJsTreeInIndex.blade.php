<script type="text/javascript">
    $(document).ready(function(){
    
      $('#jstree').jstree({
        "core" : {
          'data' : {!! load_dep($product->department_id) !!},
          "themes" : {
            "variant" : "large"
          }
        },
        "checkbox" : {
          "keep_selected_style" : true
        },
        // "plugins" : [ "wholerow" ]
      });
    
    });
    
     $('#jstree').on('changed.jstree',function(e,data){
        var i , j , r = [];
        var  name = [];
        for(i=0,j = data.selected.length;i < j;i++)
        {
            r.push(data.instance.get_node(data.selected[i]).id);
            name.push(data.instance.get_node(data.selected[i]).text);
        }
        $('#form_Delete_department').attr('action','{{ aurl('departments') }}/'+r.join(', '));
        $('#dep_name').text(name.join(', '));
        if(r.join(', ') != '')
        {
          $('.showbtn_control').removeClass('hidden');
          $('.edit_dep').attr('href','{{ aurl('departments') }}/'+r.join(', ')+'/edit');
        }else{
          $('.showbtn_control').addClass('hidden');
        }
    });
    </script>