<script src="/js/app.js"></script>
<script type="text/javascript">
    $('button').click(function(e){
        alert("Hey")
        e.preventDefault;
        console.log('#'+$(this).data('target'))
        $('#'+$(this).data('target')).click();
    });
   </script>
@stack('scripts')