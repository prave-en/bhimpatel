</div>
</div>
<div class="row-fluid">
    <div id="footer" class="span12"> 2020 &copy; Marutii Admin. Brought to you by <a
            href="https://www.wrappixel.com/">WrapPixel.com</a> </div>
</div>
<script src="{{ asset('asset-admin/js/excanvas.min.js') }}"></script>
<script src="{{ asset('asset-admin/js/jquery.min.js') }}"></script>
<script src="{{ asset('asset-admin/js/jquery.ui.custom.js') }}"></script>
<script src="{{ asset('asset-admin/js/bootstrap.min.js') }}"></script>
<script src="{{ asset('asset-admin/js/jquery.flot.min.js') }}"></script>
<script src="{{ asset('asset-admin/js/jquery.flot.resize.min.js') }}"></script>
<script src="{{ asset('asset-admin/js/jquery.peity.min.js') }}"></script>
<script src="{{ asset('asset-admin/js/fullcalendar.min.js') }}"></script>
<script src="{{ asset('asset-admin/js/maruti.js') }}"></script>
<script src="{{ asset('asset-admin/js/maruti.dashboard.js') }}"></script>
<script src="{{ asset('asset-admin/js/maruti.chat.js') }}"></script>

<script type="text/javascript">
    // This function is called from the pop-up menus to transfer to
    // a different page. Ignore if the value returned is a null string:
    function goPage(newURL) {

        // if url is empty, skip the menu dividers and reset the menu selection to default
        if (newURL != "") {

            // if url is "-", it is this page -- reset the menu:
            if (newURL == "-") {
                resetMenu();
            }
            // else, send page to designated URL            
            else {
                document.location.href = newURL;
            }
        }
    }

    // resets the menu selection upon entry to this page:
    function resetMenu() {
        document.gomenu.selector.selectedIndex = 2;
    }

</script>
<script>
        ClassicEditor
            .create( document.querySelector('#editor') )
            .catch( error => {
                console.error( error );
            } );
</script>
<script>
        ClassicEditor
            .create( document.querySelector('#editor2') )
            .catch( error => {
                console.error( error );
            } );
    </script>
</body>

</html>
