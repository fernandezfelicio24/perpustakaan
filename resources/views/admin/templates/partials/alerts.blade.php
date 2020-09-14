
<script>

@if (session('success'))
<div class="alert alert-success">{{session('success')}}</div>
    // $.notify({
    //     // options
    //     message: '{{session('success')}}'
       
    // },{
    //     // settings
    //     type: 'success'
    // });
@endif
@if (session('info'))
<div class="alert alert-info">{{session('info')}}</div>
//     $.notify({
//             // options
//             message: '{{session('info')}}'
//         },{
//             // settings
//             type: 'info'
//         });
 @endif

@if (session('danger'))
<div class="alert alert-danger">{{session('danger')}}</div>
//     $.notify({
//             // options
//             message: '{{session('danger')}}'
//         },{
//             // settings
//             type: 'danger'
//         });
 @endif

</script>