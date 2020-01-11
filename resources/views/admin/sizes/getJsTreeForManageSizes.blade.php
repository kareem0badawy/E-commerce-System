@php
  $load_dep = !empty($size->department_id)?load_dep($size->department_id):load_dep(old('department_id'));
@endphp
<script type="text/javascript">
    $(document).ready(function(){
      $('#jstree').jstree({
        "core" : {
          'data' : {!! $load_dep !!},
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
        }
        if(r.join(', ') != '')
        {
          $('.department_id').val(r.join(', '));
        }
    });
</script>